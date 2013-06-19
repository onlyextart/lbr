<?php
/**
 * Description of PagesController extends Controller
 *
 * @author cheshenkov
 * 
 */
class PagesController extends Controller {
    
    protected function beforeAction($action)
    {
        if(parent::beforeAction($action))
        {
            //  Добавление CSS файла для пользователей.
            Yii::app()->clientScript->registerCssFile('/css/admin/users/users.css');
            Yii::app()->clientScript->registerCssFile('/css/admin/users/static.css');
            Yii::app()->clientScript->registerScriptFile('/js/tinymce/tinymce.min.js');
            Yii::app()->clientScript->registerScriptFile('/js/admin/AjaxContentLoader.js');
            Yii::app()->clientScript->registerScriptFile('/js/admin/static.js');
        }
        return true;
    }
        
    public function actionIndex()
    {
        if(Yii::app()->user->checkAccess('readPage'))
        {
            $criteria = new CDbCriteria();
            $sort = new CSort();
            $sort->sortVar = 'sort';
            $sort->defaultOrder = 'name ASC';
            $sort->attributes = array(
                            'id'=>array(
                                'id'=>'ID',
                                'asc'=>'id ASC',
                                'desc'=>'id DESC',
                                'default'=>'desc',
                            ),
                            'name'=>array(
                                'name'=>'Заголовок',
                                'asc'=>'name ASC',
                                'desc'=>'name DESC',
                                'default'=>'desc',
                            ),
                            'data'=>array(
                                'data'=>'Дата',
                                'asc'=>'data ASC',
                                'desc'=>'data DESC',
                                'default'=>'desc',
                            ),
                        );
            $dataProvider = new CActiveDataProvider('Pages', 
                    array(
                        'criteria'=>$criteria,
                        'sort'=>$sort,
                        'pagination'=>array(
                            'pageSize'=>'13'
                        )
                    )
            );
            if ($id_item = Yii::app()->user->getFlash('saved_id')){
                $model = Pages::model()->findByPk($id_item);
                $view = $this->renderPartial('editpage', array('model'=>$model), true, true);
            }
            $this->render('default', array('data'=>$dataProvider, 'view'=>$view));
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
        
    }
    
    public function actionCreatePage(){
        if(Yii::app()->user->checkAccess('createPage'))
        {
            $model = new Pages();
            if (isset($_POST['Pages'])){
                $model->attributes = $_POST['Pages'];
                if($model->save()){
                    Yii::app()->user->setFlash('saved_id', $model->id);
                    Yii::app()->user->setFlash('message', 'Страница "'.$model->name.'" созданa успешно.');
                    $this->redirect('/administrator/pages/');
                }
            }
            $this->renderPartial('editpage', array('model'=>$model));
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
    }
    
    public function actionEditPage($id){
        if(Yii::app()->user->checkAccess('editPage'))
        {
            $model = Pages::model()->findByPk($id);
            if (isset($_POST['Pages'])){
                $model->attributes = $_POST['Pages'];
                if($model->save()){
                    Yii::app()->user->setFlash('saved_id', $model->id);
                    Yii::app()->user->setFlash('message', 'Страница "'.$model->name.'" сохранена успешно.');
                    $this->redirect('/administrator/pages/');
                }
            }
             $this->renderPartial('editpage', array('model'=>$model));
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
    }
    
    public function actionDeletePage($id){
        if(Yii::app()->user->checkAccess('deletePage'))
        {
            if(Pages::model()->deleteByPk($id)){
                Yii::app()->user->setFlash('message', 'Страница удалена успешно.');
                $this->redirect('/administrator/pages/');
            }
        }else{
            throw new CHttpException(403,Yii::t('yii','У Вас недостаточно прав доступа.'));
        }
    }

}

?>
