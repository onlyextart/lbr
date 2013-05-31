<?php

class BannersController extends Controller
{
	public function actionIndex()
	{
                $dataProvider = new CActiveDataProvider('Banners');
                $this->render('index', array('dataProvider'=>$dataProvider));
	}
        
	public function actionCreate()
	{
		$bannerModel = new Banners();
		$filialModels = Contacts::model()->findAll();
                $regionalBanners = array();
                
                foreach( $filialModels as $filial ){
                    $regionalBanners[$filial->id] = new BannerRegion();
                }
                if( isset( $_POST['Banners'] ) ){
                    $bannerModel->attributes = $_POST['Banners'];
                    $bannerRegionalDataIsValid = true;
                    if( isset( $_POST['BannerRegion'] ) ){
                        foreach( $_POST['BannerRegion'] as $regionId => $bannerRegionalData ){
                            $regionalBanners[$regionId]->attributes = $bannerRegionalData;
                            $bannerRegionalDataIsValid = $regionalBanners[$regionId]->validate() && $bannerRegionalDataIsValid;
                            
                        }
                        if( $bannerModel->validate() && $bannerRegionalDataIsValid ){
                            $bannerModel->save();
                            foreach( $_POST['BannerRegion'] as $regionId => $bannerRegionalData ){
                                $regionalBanners[$regionId]->banner_id = $bannerModel->id;
                                $regionalBanners[$regionId]->filial_id = $regionId;
                                $regionalBanners[$regionId]->save();
                                foreach( $_POST['BannerImages'][$regionId]['path'] as $imageNum=>$bannerImage ){
                                    $bannerImageModel = new BannerImages();
                                    $bannerImageModel->path = $_POST['BannerImages'][$regionId]['path'][$imageNum];
                                    $bannerImageModel->description = $_POST['BannerImages'][$regionId]['description'][$imageNum];
                                    $bannerImageModel->region_id = $regionId;
                                    $bannerImageModel->alt = $_POST['BannerImages'][$regionId]['alt'][$imageNum];
                                    $bannerImageModel->title = $_POST['BannerImages'][$regionId]['title'][$imageNum];
                                    $bannerImageModel->sorting = $imageNum;
                                    $bannerImageModel->banner_id = $bannerModel->id;
                                    $bannerImageModel->type = $_POST['BannerImages'][$regionId]['type'][$imageNum];
                                    $bannerImageModel->top_left = $_POST['BannerImages'][$regionId]['top_left'][$imageNum];
                                    $bannerImageModel->top_right = $_POST['BannerImages'][$regionId]['top_right'][$imageNum];
                                    $bannerImageModel->bottom_left = $_POST['BannerImages'][$regionId]['bottom_left'][$imageNum];
                                    $bannerImageModel->bottom_right = $_POST['BannerImages'][$regionId]['bottom_right'][$imageNum];
                                    $bannerImageModel->save();
                                }
                            }
                            Yii::app()->user->setFlash('saved','Баннер создан.');
                            $this->redirect('/administrator/banners/index');
                        }
                    }
                }
                $this->render('manage', array(
                        'bannerModel'=>$bannerModel, 
                        'regionalBanners'=>$regionalBanners,
                    )
                );
	}
        
	public function actionUpdate( $id )
	{
		$bannerModel = Banners::model()->findBypk( $id );
		$filialModels = Contacts::model()->findAll();
                $regionalBanners = array();
                //Создание пустой модели баннера для каждого региона
                foreach( $filialModels as $filial ){
                    $regionalBanners[$filial->id] = new BannerRegion();
                }
                //замена пустых моделей заполненными моделями баннеров
                foreach( $bannerModel->bannerRegions as $regionalBanner ){
                    $regionalBanners[$regionalBanner->filial_id] = $regionalBanner;
                }
                if( isset( $_POST['Banners'] ) ){
                    $bannerModel->attributes = $_POST['Banners'];
                    $bannerRegionalDataIsValid = true;
                    if( isset( $_POST['BannerRegion'] ) ){
                        foreach( $_POST['BannerRegion'] as $regionId => $bannerRegionalData ){
                            $regionalBanners[$regionId]->attributes = $bannerRegionalData;
                            $bannerRegionalDataIsValid = $regionalBanners[$regionId]->validate() && $bannerRegionalDataIsValid;
                        }
                        if( $bannerModel->validate() && $bannerRegionalDataIsValid ){
                            $bannerModel->save();
                            foreach( $_POST['BannerRegion'] as $regionId => $bannerRegionalData ){
                                $regionalBanners[$regionId]->banner_id = $bannerModel->id;
                                $regionalBanners[$regionId]->filial_id = $regionId;
                                $regionalBanners[$regionId]->save();
                                
                                foreach( $bannerModel->bannerImages as $deletingImage ){
                                    $deletingImage->delete();
                                }
                                foreach( $_POST['BannerImages'][$regionId]['path'] as $imageNum=>$bannerImage ){
                                    $bannerImageModel = new BannerImages();
                                    $bannerImageModel->path = $_POST['BannerImages'][$regionId]['path'][$imageNum];
                                    $bannerImageModel->description = $_POST['BannerImages'][$regionId]['description'][$imageNum];
                                    $bannerImageModel->region_id = $regionId;
                                    $bannerImageModel->alt = $_POST['BannerImages'][$regionId]['alt'][$imageNum];
                                    $bannerImageModel->title = $_POST['BannerImages'][$regionId]['title'][$imageNum];
                                    $bannerImageModel->sorting = $imageNum;
                                    $bannerImageModel->banner_id = $bannerModel->id;
                                    $bannerImageModel->type = $_POST['BannerImages'][$regionId]['type'][$imageNum];
                                    $bannerImageModel->top_left = $_POST['BannerImages'][$regionId]['top_left'][$imageNum];
                                    $bannerImageModel->top_right = $_POST['BannerImages'][$regionId]['top_right'][$imageNum];
                                    $bannerImageModel->bottom_left = $_POST['BannerImages'][$regionId]['bottom_left'][$imageNum];
                                    $bannerImageModel->bottom_right = $_POST['BannerImages'][$regionId]['bottom_right'][$imageNum];
                                    $bannerImageModel->save();
                                }
                            }
                            foreach( $bannerModel->bannerRegions as $regionalBanner ){
                                //Если региональный баннер был удален
                                if( $_POST['BannerRegion'][$regionalBanner->filial_id] ===  null ){
                                    $regionalBanner->delete();
                                }
                            }
                            Yii::app()->user->setFlash('saved','Баннер сохранен.');
                            $this->redirect('/administrator/banners/index');
                        }
                    }
                }
                $this->render('manage', array(
                        'bannerModel'=>$bannerModel, 
                        'regionalBanners'=>$regionalBanners,
                    )
                );
	}
        
        public function actionImageUpload(){
            
        }
        
}