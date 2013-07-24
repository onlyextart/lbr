<?php

class NewsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new News;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['News']))
		{
			$model->attributes=$_POST['News'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['News']))
		{
			$model->attributes=$_POST['News'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model=new News('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['News']))
			$model->attributes=$_GET['News'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return News the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=News::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param News $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='news-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionTransfer(){
            exit();
            $connectionJlbrDb=new CDbConnection('mysql:host=localhost;dbname=lbr_jlbr','mysql','mysql');
            $connectionJlbrDb->active=true;
            function lower($str){return mb_strtolower($str, "UTF-8");}
            Yii::app()->db->getPdoInstance()->sqliteCreateFunction('lower', 'lower', 1);
            $allRegionalNewsFromJlbr = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_news")->queryAll();
            $rootModel = MenuItems::model()->findByPk(723);
            foreach ($allRegionalNewsFromJlbr as $regionalNewsFromJlbr){
                $jlbrNews = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_content WHERE id='".$regionalNewsFromJlbr[id_news]."'")->queryRow();
                if(is_array($jlbrNews) && !empty($jlbrNews)){
                    $checkNewsModel = News::model()->findByPk($jlbrNews[id]);
                    if($checkNewsModel !== null)
                        continue;
                    var_dump($jlbrNews[id]);
                    var_dump(count($filialsJlbr));
                    echo('-------------<br>');
                    $newsModel = new News;
                    $newsModel->id = $jlbrNews[id];
                    $newsModel->header = $jlbrNews[title];
                    $newsModel->alias = $jlbrNews[alias];
                    $newsModel->date = $jlbrNews[created];
                    $newsModel->published = '1';
                    $newsModel->save();
                    $filialsJlbr = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_region where id IN(".$regionalNewsFromJlbr[id_region].") GROUP BY alias")->queryAll();
                    if(count($filialsJlbr)==23){
                        $newsRegionModel = new NewsRegion;
                        $newsRegionModel->filial_id = Yii::app()->params['defaultRegionId'];
                        $newsRegionModel->news_id = $jlbrNews[id];
                        $newsRegionModel->content = $jlbrNews[fulltext];
                        $newsRegionModel->description = $jlbrNews[introtext];
                        $newsRegionModel->save();
                    }
                    else{
                        foreach($filialsJlbr as $filial){
                            $newsRegionModel = new NewsRegion;
                            $filialModel = Contacts::model()->find('alias=:alias', array(':alias'=>$filial[alias]));
                            $newsRegionModel->filial_id = $filialModel->id;
                            $newsRegionModel->news_id = $jlbrNews[id];
                            $newsRegionModel->content = $jlbrNews[fulltext];
                            $newsRegionModel->description = $jlbrNews[introtext];
                            $newsRegionModel->save();
                        }
                    }
                    $menuModel = new MenuItems();
                    $menuModel->name = $jlbrNews[title];
                    $menuModel->alias = $jlbrNews[id].'-'.$jlbrNews[alias];
                    $menuModel->meta_title = $jlbrNews[title];
                    $menuModel->header = $jlbrNews[title];
                    $menuModel->group_id = 27;
                    $menuModel->published = '1';
                    $menuModel->type = MenuItems::NEWS_MENU_ITEM_TYPE;
                    $menuModel->appendTo($rootModel);
                    
                    $menuContentModel = new MenuItemsContent;
                    $menuContentModel->item_id = $menuModel->id;
                    $menuContentModel->page_id = $jlbrNews[id];
                    $menuContentModel->save();
                }
            }
        }
}
