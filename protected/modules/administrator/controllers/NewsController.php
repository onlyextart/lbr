<?php

class NewsController extends Controller
{
	public function actionIndex()
	{
                $dataProvider = new CActiveDataProvider('News');
                $this->render('index', array('dataProvider'=>$dataProvider));
	}
        
	public function actionCreate()
	{
		$newsModel = new News();
		$filialModels = Contacts::model()->findAll();
                $regionalNews = array();
                
                foreach( $filialModels as $filial ){
                    $regionalNews[$filial->id] = new NewsRegion();
                }
                if( isset( $_POST['News'] ) ){
                    $newsModel->attributes = $_POST['News'];
                    $newsRegionalDataIsValid = true;
                    if( isset( $_POST['NewsRegion'] ) ){
                        foreach( $_POST['NewsRegion'] as $regionId => $newsRegionalData ){
                            $regionalNews[$regionId]->attributes = $newsRegionalData;
                            $newsRegionalDataIsValid = $regionalNews[$regionId]->validate() && $newsRegionalDataIsValid;
                            
                        }
                        if( $newsModel->validate() && $newsRegionalDataIsValid ){
                            $newsModel->save();
                            foreach( $_POST['NewsRegion'] as $regionId => $newsRegionalData ){
                                $regionalNews[$regionId]->news_id = $newsModel->id;
                                $regionalNews[$regionId]->filial_id = $regionId;
                                $regionalNews[$regionId]->save();                                
                            }                                                        
                            
                            Yii::app()->user->setFlash('saved','Новость создана.');
                            $this->redirect('/administrator/news/update/id/'.$newsModel->id);
                        }
                    }
                }
                $this->render('manage', array(
                        'newsModel'=>$newsModel, 
                        'regionalNews'=>$regionalNews,
                    )
                );
	}
        
	public function actionUpdate( $id )
	{
		$newsModel = News::model()->findBypk( $id );
		$filialModels = Contacts::model()->findAll();
                $regionalNews = array();
                
                //�������� ������ ������ news ��� ������� �������
                foreach( $filialModels as $filial ){
                    $regionalNews[$filial->id] = new NewsRegion();
                }
                //������ ������ ������� ������������ �������� news
                foreach( $newsModel->newsRegions as $regionalEvent ){
                    $regionalNews[$regionalEvent->filial_id] = $regionalEvent;
                }
                if( isset( $_POST['News'] ) ){
                    $newsModel->attributes = $_POST['News'];
                    $newsRegionalDataIsValid = true;
                    if( isset( $_POST['NewsRegion'] ) ){
                        foreach( $_POST['NewsRegion'] as $regionId => $newsRegionalData ){
                            $regionalNews[$regionId]->attributes = $newsRegionalData;
                            $newsRegionalDataIsValid = $regionalNews[$regionId]->validate() && $newsRegionalDataIsValid;
                        }
                        if( $newsModel->validate() && $newsRegionalDataIsValid ){
                            $newsModel->save();
                            foreach( $_POST['NewsRegion'] as $regionId => $newsRegionalData ){
                                $regionalNews[$regionId]->news_id = $newsModel->id;
                                $regionalNews[$regionId]->filial_id = $regionId;
                                $regionalNews[$regionId]->save();
                                
                            }
                            
                            //�������� ������������ ������ ���� ������ �������� ������ �� �������
                            foreach( $newsModel->newsRegions as $regionalEvent ){
                                //���� ������������ ������ ��� ������
                                if( $_POST['NewsRegion'][$regionalEvent->filial_id] ===  null ){
                                    $regionalEvent->delete();
                                }
                            }
                            
                            Yii::app()->user->setFlash('saved','Новость сохранена.');
                            $this->redirect('/administrator/news/update/id/'.$newsModel->id);
                        }
                    }
                }
                $this->render('manage', array(
                        'newsModel'=>$newsModel, 
                        'regionalNews'=>$regionalNews,
                    )
                );
	}
        
        public function actionDelete( $id ){
            $model = News::model()->findByPk( $id );
            if($model!==null){
                //������� �������
                $model->delete();
            }
        }      
        
        
        public function actionTransfer(){
//            exit();
            $connectionJlbrDb=new CDbConnection('mysql:host=localhost;dbname=lbr_jlbr','mysql','mysql');
            $connectionJlbrDb->active=true;
            function lower($str){return mb_strtolower($str, "UTF-8");}
            Yii::app()->db->getPdoInstance()->sqliteCreateFunction('lower', 'lower', 1);
            $allRegionalNewsFromJlbr = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_news")->queryAll();
            $rootModel = MenuItems::model()->findByPk(1405);
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
                    if(!$newsModel->save()){
                        var_dump($newsModel->getErrors());
                        echo 'Error! Not save new news! '.$jlbrNews[created];
                        var_dump($newsModel);
                        exit();
                    }
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
