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
                $makers = Makers::model()->findAll();
                
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
                                if( is_array($_POST['BannerImages'][$regionId]) ){
                                    $imageSorting = 0;
                                    foreach( $_POST['BannerImages'][$regionId] as $imageNumber=>$bannerImageData ){
                                        $BannerImagesModel = new BannerImages();
                                        $BannerImagesModel->attributes = $bannerImageData;
                                        $BannerImagesModel->banner_id = $bannerModel->id;
                                        $BannerImagesModel->sorting = $imageSorting;
                                        $BannerImagesModel->region_id = $regionId;
                                        $BannerImagesModel->save();
                                        $imageSorting++;
                                    }
                                }
                            }
                            if( isset( $_POST['Makers'] ) ){
                                foreach( $_POST['Makers'] as $makerId=>$maker ){
                                    if($maker['name']!='0'){
                                        $makerModel = new MakersInBanner();
                                        $makerModel->banner_id = $bannerModel->id;
                                        $makerModel->maker_id = $makerId;
                                        $makerModel->save();
                                    }
                                }
                            }
                            if( isset( $_POST['MenuItemConteintigThisBanner'] ) ){
                                foreach( $_POST['MenuItemConteintigThisBanner'] as $menuItemId=>$value ){
                                    if($value!='0'){
                                        $menuItemContentModel = new MenuItemsContent();
                                        $menuItemContentModel->item_id = $menuItemId;
                                        $menuItemContentModel->page_id = $bannerModel->id;
                                        $menuItemContentModel->save();
                                    }
                                }
                            }
                            //Назначить пункты меню на которые ведет баннер
                            if( isset( $_POST['BannerLinkMenuItems'] ) ){
                                foreach( $_POST['BannerLinkMenuItems'] as $menuItemId=>$value ){
                                    if($value!='0'){
                                        $bannerLinkModel = new BannerLinks();
                                        $bannerLinkModel->menu_item_id = $menuItemId;
                                        $bannerLinkModel->banner_id = $bannerModel->id;
                                        $bannerLinkModel->save();
                                    }
                                }
                            }
                            Yii::app()->user->setFlash('saved','Баннер создан.');
                            $this->redirect('/administrator/banners/update/id/'.$bannerModel->id);
                        }
                    }
                }
                $this->render('manage', array(
                        'bannerModel'=>$bannerModel, 
                        'regionalBanners'=>$regionalBanners,
                        'makers'=>$makers,
                    )
                );
	}
        
	public function actionUpdate( $id )
	{
		$bannerModel = Banners::model()->findBypk( $id );
		$filialModels = Contacts::model()->findAll();
                $regionalBanners = array();
                $makers = Makers::model()->findAll();
                
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
                                
                                if( is_array($_POST['BannerImages'][$regionId]) ){
                                    $allBannerImagesInThisRegionModel = BannerImages::model()->findAll(
                                            'banner_id='.$bannerModel->id.' AND region_id='.$regionId
                                    );
                                    $imageSorting = 0;
                                    foreach( $_POST['BannerImages'][$regionId] as $imageNumber=>$bannerImageData ){
                                        if( !isset($allBannerImagesInThisRegionModel[$imageSorting]) ){
                                            $allBannerImagesInThisRegionModel[$imageSorting] = new BannerImages();
                                        }
                                        $allBannerImagesInThisRegionModel[$imageSorting]->attributes = $bannerImageData;
                                        $allBannerImagesInThisRegionModel[$imageSorting]->banner_id = $bannerModel->id;
                                        $allBannerImagesInThisRegionModel[$imageSorting]->sorting = $imageSorting;
                                        $allBannerImagesInThisRegionModel[$imageSorting]->region_id = $regionId;
                                        $allBannerImagesInThisRegionModel[$imageSorting]->save();
                                        unset($allBannerImagesInThisRegionModel[$imageSorting]);
                                        $imageSorting++;
                                    }
                                    //Удалить лишние изображения
                                    foreach( $allBannerImagesInThisRegionModel as $deletedImageModel ){
                                        $deletedImageModel->delete();
                                    }
                                    
                                }
                                //Нет массива изображений с задданным регионом (удалить все изображения)
                                else{
                                    BannerImages::model()->deleteAll(
                                            'banner_id='.$bannerModel->id.' AND region_id='.$regionId
                                    );
                                }
                            }
                            
                            //Удаление региональных данных если небыло получено данных по региону
                            foreach( $bannerModel->bannerRegions as $regionalBanner ){
                                //Если региональный баннер был удален
                                if( $_POST['BannerRegion'][$regionalBanner->filial_id] ===  null ){
                                    BannerImages::model()->deleteAll(
                                            'region_id='.$regionalBanner->filial_id.' AND banner_id='.$bannerModel->id);
                                    $regionalBanner->delete();
                                }
                            }
                            
                            if( isset( $_POST['Makers'] ) ){
                                $allMakersInThisBanner = $bannerModel->makersInBanners;
                                $makerNum = 0;
                                foreach( $_POST['Makers'] as $makerId=>$maker ){
                                    if($maker['name']!='0'){
                                        if( !isset($allMakersInThisBanner[$makerNum]) ){
                                            $allMakersInThisBanner[$makerNum] = new MakersInBanner();
                                        }
                                        $allMakersInThisBanner[$makerNum]->banner_id = $bannerModel->id;
                                        $allMakersInThisBanner[$makerNum]->maker_id = $makerId;
                                        $allMakersInThisBanner[$makerNum]->save();
                                        unset($allMakersInThisBanner[$makerNum]);
                                        $makerNum++;
                                    }
                                }
                                foreach( $allMakersInThisBanner as $deletedMaker ){
                                    $deletedMaker->delete();
                                }
                            }
                            //Нет массива производителей (удалить всез производителей из баннера)
                            else{
                                MakersInBanner::model()->deleteAll(
                                        'banner_id='.$bannerModel->id
                                );
                            }
                            
                            //Присвоить баннер пунктам меню для отображения
                            if( isset( $_POST['MenuItemConteintigThisBanner'] ) ){
                                $allMenuItemsContainingThisBanner = MenuItemsContent::model()->with('item')->findAll(
                                        'page_id='.$bannerModel->id.' 
                                        AND item.type='.MenuItems::BANNERS_MENU_ITEM_TYPE
                                    );
                                $menuItemNum = 0;
                                foreach( $_POST['MenuItemConteintigThisBanner'] as $menuItemId=>$value ){
                                    if($value!='0'){
                                        if(!isset($allMenuItemsContainingThisBanner[$menuItemNum])){
                                            $allMenuItemsContainingThisBanner[$menuItemNum] = new MenuItemsContent();
                                        }
                                        $allMenuItemsContainingThisBanner[$menuItemNum]->item_id = $menuItemId;
                                        $allMenuItemsContainingThisBanner[$menuItemNum]->page_id = $bannerModel->id;
                                        $allMenuItemsContainingThisBanner[$menuItemNum]->save();
                                        unset($allMenuItemsContainingThisBanner[$menuItemNum]);
                                        $menuItemNum++;
                                    }
                                }
                                //Удалить лишние (с которых снято выделение) пункты меню
                                foreach( $allMenuItemsContainingThisBanner as $deletedMenuItem ){
                                    $deletedMenuItem->delete();
                                }
                            }
                            else{
                                $menuItemsContainingThisBanner = MenuItemsContent::model()->with('item')->findAll(
                                    'page_id='.$bannerModel->id.' 
                                    AND item.type='.MenuItems::BANNERS_MENU_ITEM_TYPE
                                );
                                foreach($menuItemsContainingThisBanner as $menuItem){
                                    $menuItem->delete();
                                }
                            }
                            
                            //Назначить пункты меню на которые ведет баннер
                            if( isset( $_POST['BannerLinkMenuItems'] ) ){
                                BannerLinks::model()->deleteAll(
                                        'banner_id='.$bannerModel->id
                                    );
                                foreach( $_POST['BannerLinkMenuItems'] as $menuItemId=>$value ){
                                    if($value!='0'){
                                        $bannerLinkModel = new BannerLinks();
                                        $bannerLinkModel->menu_item_id = $menuItemId;
                                        $bannerLinkModel->banner_id = $bannerModel->id;
                                        $bannerLinkModel->save();
                                    }
                                }
                            }
                            Yii::app()->user->setFlash('saved','Баннер сохранен.');
                            $this->redirect('http://lbr/administrator/banners/update/id/'.$bannerModel->id);
                        }
                    }
                }
                $this->render('manage', array(
                        'bannerModel'=>$bannerModel, 
                        'regionalBanners'=>$regionalBanners,
                        'makers'=>$makers,
                    )
                );
	}
        
        public function actionDelete( $id ){
            $model = Banners::model()->findByPk( $id );
            if($model!==null){
                //Удалить баннер из пунктов меню
                $menuItems = MenuItemsContent::model()->with('item')->findAll(
                    'page_id='.$model->id.' 
                    AND item.type='.MenuItems::BANNERS_MENU_ITEM_TYPE
                );
                foreach($menuItems as $menuItem){
                    $menuItem->delete();
                }
                //Удалить баннер
                $model->delete();
            }
        }
        
        public function actionSortUp( $bannerId, $menuItemId ){
            $liftMenuItemContentModel = MenuItemsContent::model()->with('item')->find(
                    'page_id='.$bannerId.
                    ' AND item_id='.$menuItemId.
                    ' AND item.type ='.MenuItems::BANNERS_MENU_ITEM_TYPE);
            $previosMenuItemContentModel = MenuItemsContent::model()->with('item')->orederAndLimit('DESC', 1)->findAll(
                    'item_id='.$menuItemId.
                    ' AND item.type ='.MenuItems::BANNERS_MENU_ITEM_TYPE.
                    ' AND sorting < '.$liftMenuItemContentModel->sorting
                    );
            if( $liftMenuItemContentModel!==null && $previosMenuItemContentModel[0]!=null){
                $oldSortId = $liftMenuItemContentModel->sorting;
                $liftMenuItemContentModel->sorting = $previosMenuItemContentModel[0]->sorting;
                $previosMenuItemContentModel[0]->sorting = $oldSortId;
                $liftMenuItemContentModel->save();
                $previosMenuItemContentModel[0]->save();
            }
        }
        
        public function actionSortDown( $bannerId, $menuItemId ){
            $downMenuItemContentModel = MenuItemsContent::model()->with('item')->find(
                    'page_id='.$bannerId.
                    ' AND item_id='.$menuItemId.
                    ' AND item.type ='.MenuItems::BANNERS_MENU_ITEM_TYPE);
            $nextMenuItemContentModel = MenuItemsContent::model()->with('item')->orederAndLimit('ASC', 1)->findAll(
                    'item_id='.$menuItemId.
                    ' AND item.type ='.MenuItems::BANNERS_MENU_ITEM_TYPE.
                    ' AND sorting > '.$downMenuItemContentModel->sorting
                    );
            if($downMenuItemContentModel!==null &&  $nextMenuItemContentModel[0]!==null){
                $oldSortId = $downMenuItemContentModel->sorting;
                $downMenuItemContentModel->sorting = $nextMenuItemContentModel[0]->sorting;
                $nextMenuItemContentModel[0]->sorting = $oldSortId;
                $downMenuItemContentModel->save();
                $nextMenuItemContentModel[0]->save();
            }
        }
        
}