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
                foreach( $filialModels as $filial ){
                    $regionalBanners[$filial->id] = new BannerRegion();
                }
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
                            }
                            foreach( $bannerModel->bannerRegions as $regionalBanner ){
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
        
        
}