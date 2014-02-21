<?php

class BannersController extends Controller
{
	public function actionIndex()
	{
            // Выбранный пункт меню, если нет, то Главная
            $selected = Yii::app()->user->getState('menu-filter');
            if(!$selected){
                $selected = 56;
            }
            // Фильтр второго уровня
            $sub = Yii::app()->user->getState('sub-menu-filter');
            if(!$sub){
                $sub = $selected;
            }
            
            // Выбрать ненужный пункт меню
            $not = Yii::app()->db->createCommand()->select('lft, rt')->from('menu_items')
                                ->where('id=91')->queryRow();
            
            // Дочерние пункты меню для выбранного в данный момент
            $model = MenuItems::model()->findByPk($selected);
            $children = $model->descendants()->findAll('level<=5 AND type=0 AND (lft NOT BETWEEN '.$not['lft'].' AND '.$not['rt'].')');
            
            
            // Выборка для выпадающего списка
            $select = MenuItems::model()->findAll(array('condition'=>'level<=4 AND type=0 AND (lft NOT BETWEEN '.$not['lft'].' AND '.$not['rt'].') ORDER BY lft'));
            
            // Выбор банеров текущего пункта меню
            $criteria = new CDbCriteria();
            $criteria->condition = 'item_id=:item_id';
//            $criteria->order = 'page_id ASC';
            $criteria->params = array(
                ':item_id'=>$sub,
            );
            $dataProvider = new CActiveDataProvider('MenuItemsContent', array(
                'criteria'=>$criteria,
                'pagination'=>false
            ));
            $this->render('index', array('select'=>$select, 'children'=>$children, 'change'=>$selected, 'banners'=>$dataProvider, 'subchange'=>$sub));
	}
        

        public function actionShowBanners($id){
            if($id){
                $sub = $id;
                Yii::app()->user->setState('sub-menu-filter', $id);
            }else{
                $sub = Yii::app()->user->getState('sub-menu-filter');
            }
            if(!$sub){
                $selected = Yii::app()->user->getState('menu-filter');
                $sub = $selected?$selected:56;
            }
            $criteria = new CDbCriteria();
            $criteria->condition = 'item_id=:item_id';
//            $criteria->order = 'page_id ASC';
            $criteria->params = array(
                ':item_id'=>$sub,
            );
            $dataProvider = new CActiveDataProvider('MenuItemsContent', array(
                'criteria'=>$criteria,
                'pagination'=>false
            ));
            $this->renderPartial('_banners', array('change'=>$selected, 'banners'=>$dataProvider));
        }
        
        public function actionShowSubFilter($id){
            if(!$id){
                $id = Yii::app()->user->getState('menu-filter');
            }
            $id = $id?$id:56;
            Yii::app()->user->setState('menu-filter', $id);
            Yii::app()->user->setState('sub-menu-filter', $id);
            
            if($_REQUEST['ajax']==0){
                Yii::app()->request->redirect('/administrator/banners/');
            }
            // Выбрать ненужный пункт меню
            $not = Yii::app()->db->createCommand()->select('lft, rt')->from('menu_items')
                                ->where('id=91')->queryRow();
            
            $model = MenuItems::model()->findByPk($id);
            $children = $model->descendants()->findAll('level<=5 AND type=0 AND (lft NOT BETWEEN '.$not['lft'].' AND '.$not['rt'].')');
            $this->renderPartial('_subfilter', array('children'=>$children, 'change'=>$id));
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
                            $bannerModel->moveUploadedImages();
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
                            //Нет массива производителей (удалить всех производителей из баннера)
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
                                        $allMenuItemsContainingThisBanner[$menuItemNum]->item_id = (int)$menuItemId;
                                        $allMenuItemsContainingThisBanner[$menuItemNum]->page_id = (int)$bannerModel->id;
                                        $allMenuItemsContainingThisBanner[$menuItemNum]->save();
//                                        var_dump($menuItemId);
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
                            $bannerModel->moveUploadedImages();
                            Yii::app()->user->setFlash('saved','Баннер сохранен.');
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
        
        public function actionTransfer(){
            exit();
            $connectionJlbrDb=new CDbConnection('mysql:host=localhost;dbname=lbr_jlbr','mysql','mysql');
            $connectionJlbrDb->active=true;
            function lower($str){return mb_strtolower($str, "UTF-8");}
            Yii::app()->db->getPdoInstance()->sqliteCreateFunction('lower', 'lower', 1);
            
            $menuRoot = MenuItems::model()->findByPk(58);
            $menuItems = $menuRoot->descendants()->findAll('type=:type', array(':type'=>MenuItems::BANNERS_MENU_ITEM_TYPE));
            //array_unshift($menuItems, MenuItems::model()->findByPk(91));
            $bannerNum = 0;
            //echo(MenuItems::getItemIdByPath('selskohozyaystvennaya-tehnika/type/teleskopicheskie-pogruzchiki/dieci'));
            //exit();
            foreach($menuItems as $menuItem){
                $path = str_replace('/selskohozyaystvennaya-tehnika/type/', '', CategoryUrlRule::getUrl($menuItem->id));
                $menuRecordFromJlbr = $connectionJlbrDb->createCommand("SELECT link, path FROM jlbr_menu where path='tehnika/".$path."'")->queryRow();
                //echo($menuRecordFromJlbr[link]);
                preg_match('/.*catid=(\d+)/', $menuRecordFromJlbr[link], $cat_id);
                $cat_id = $cat_id[1];
                $categoryRecordFromJlbr = $connectionJlbrDb->createCommand("SELECT id, parent_id FROM jlbr_categories where parent_id='".$cat_id."' AND published='1'")->queryAll();
                foreach($categoryRecordFromJlbr as $category){
                    //var_dump($category);
                    $bannerRecordFromJlbr = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_xbaner where published='1' AND type<>4 AND catid='".$category[id]."'")->queryAll();
                    foreach($bannerRecordFromJlbr as $jlbrBanner){
                        $bannerModel = new Banners;
                        $bannerModel->id = $jlbrBanner[id];
                        $bannerModel->icon = $jlbrBanner[icon];
                        $bannerModel->type = ($jlbrBanner[view]-1);
                        $bannerModel->published = $jlbrBanner[published];
                        $bannerModel->save();
                        
                        $regionalBannerModel = new BannerRegion;
                        $regionalBannerModel->banner_id = $bannerModel->id;
                        $regionalBannerModel->name = $jlbrBanner[name];
                        $regionalBannerModel->description = $jlbrBanner[caption];
                        $regionalBannerModel->filial_id = 0;
                        $regionalBannerModel->save();
                        
                        $jlbrBannerImages = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_xbaner_img where banid='".$jlbrBanner[id]."'")->queryAll(); 
                        if(count($jlbrBannerImages)>0){
                            $dir = $_SERVER['DOCUMENT_ROOT'].'/images/banners/'.$bannerModel->id.'/';
                            if(!is_dir($dir)){
                                mkdir($dir);
                            }
                            foreach ($jlbrBannerImages as $jlbrBannerImage){
                                $bannerImage = new BannerImages;
                                $bannerImage->path = '/images/banners/'.$bannerModel->id.'/'.$jlbrBannerImage[name];
                                $bannerImage->description = $jlbrBannerImage[description];
                                $bannerImage->region_id = 0;
                                $bannerImage->banner_id = $bannerModel->id;
                                $bannerImage->type = $jlbrBannerImage[type];
                                $bannerImage->top_left = $jlbrBannerImage[top_left];
                                $bannerImage->top_right = $jlbrBannerImage[top_right];
                                $bannerImage->bottom_left = $jlbrBannerImage[bot_left];
                                $bannerImage->bottom_right = $jlbrBannerImage[bot_right];
                                
                                $url = "http://www.lbr.ru".$jlbrBanner[image].'/'.$jlbrBannerImage[name];
                                $Headers = @get_headers($url);
                                if($Headers[0]=='HTTP/1.1 200 OK') {
                                    if(!file_exists($_SERVER['DOCUMENT_ROOT'].$bannerImage->path))
                                        copy($url, $_SERVER['DOCUMENT_ROOT'].$bannerImage->path);
                                }
                                else{
                                    echo('<b>dont exist: '.$url.'</b><br>');
                                }
                                $bannerImage->save();
                            }
                        }
                        $makers = explode(',', $jlbrBanner[logotips]);
                        foreach($makers as $makerId){
                            if($makerId!==''){
                                $makerModel = new MakersInBanner;
                                $makerModel->banner_id=$bannerModel->id;
                                $makerModel->maker_id=$makerId;
                                $makerModel->save();
                            }
                        }
                        
                        $jlbrBannerLink = $connectionJlbrDb->createCommand("SELECT path FROM jlbr_menu where `path` LIKE '".trim($jlbrBanner[link_cat],'\/')."' OR `link`='".$jlbrBanner[link_cat]."'")->queryRow(); 
                        if($jlbrBannerLink===false){
                            preg_match('/.*id=(\d+)/', $jlbrBanner[link_cat], $jlbrProductId);
                            $jlbrProductId = $jlbrProductId[1];
                            $jlbrProductBanner = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_xbaner where `id`='".$jlbrProductId."'")->queryRow(); 
                            $jlbrBannerLink = array(
                                'path'=>$menuRecordFromJlbr[path].'/'.$jlbrProductBanner[id].'-'.$jlbrProductBanner[alias]
                            );
                        }
                        else{
                            $jlbrBannerLink[path] = 'selskohozyaystvennaya-tehnika/type/'.str_replace('tehnika/', '', $jlbrBannerLink[path]);
                        }
                        if(count(explode('/', $jlbrBannerLink[path]))>=5){
                            $jlbrBannerLink[path] = str_replace('selskohozyaystvennaya-tehnika/type/', 'tehnika/',$jlbrBannerLink[path]);
                        }
                        var_dump($jlbrBanner[link_cat]);
                        echo($jlbrBanner[id].'<br>');
                        echo('--------------<br>');
                        var_dump($jlbrBannerLink[path]);
                        $bannerLinkModel = new BannerLinks;
                        $bannerLinkModel->banner_id = $bannerModel->id;
                        $bannerLinkModel->menu_item_id = MenuItems::getItemIdByPath($jlbrBannerLink[path]);
                        $bannerLinkModel->save();
                        
                        $menuItemContentModel = new MenuItemsContent;
                        $menuItemContentModel->item_id = $menuItem->id;
                        $menuItemContentModel->page_id = $bannerModel->id;
                        $menuItemContentModel->save();
                        
                        
//                        var_dump($jlbrBannerLink);
//                        var_dump('menuItemId='.MenuItems::getItemIdByPath($jlbrBannerLink[path]));
//                        var_dump($jlbrBanner[id]);
//                        var_dump($jlbrBanner[name]);
//                        var_dump($jlbrBanner[type]);
//                        var_dump($jlbrBanner[region]);
                        $bannerNum++;
//                        if($bannerNum==6){
//                            exit();
//                        }
                    }
                }
            }
            echo($bannerNum);
            echo('done');
        }
        public function actionTransferIndexBanners(){
            exit();
            $connectionJlbrDb=new CDbConnection('mysql:host=localhost;dbname=lbr_jlbr','mysql','mysql');
            $connectionJlbrDb->active=true;
            function lower($str){return mb_strtolower($str, "UTF-8");}
            Yii::app()->db->getPdoInstance()->sqliteCreateFunction('lower', 'lower', 1);
            
            $bannerRecordFromJlbr = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_xbaner where published='1' AND type=1 AND region='1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,73,74,75,76,77,78,79,80,81,82,83,84,85'")->queryAll();
            foreach ($bannerRecordFromJlbr as $jlbrBanner){
                $bannerModel = new Banners;
                $bannerModel->id = $jlbrBanner[id];
                $bannerModel->icon = '/'.$jlbrBanner[icon];
                $bannerModel->type = ($jlbrBanner[view]-1);
                $bannerModel->published = $jlbrBanner[published];
                $bannerModel->save();
                
                $regionalBannerModel = new BannerRegion;
                $regionalBannerModel->banner_id = $bannerModel->id;
                $regionalBannerModel->name = $jlbrBanner[name];
                $regionalBannerModel->description = $jlbrBanner[caption];
                $regionalBannerModel->filial_id = 0;
                $regionalBannerModel->save();
                
                $jlbrBannerImages = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_xbaner_img where banid='".$jlbrBanner[id]."'")->queryAll(); 
                if(count($jlbrBannerImages)>0){
                    $dir = $_SERVER['DOCUMENT_ROOT'].'/images/banners/'.$bannerModel->id.'/';
                    if(!is_dir($dir)){
                        mkdir($dir);
                    }
                    foreach ($jlbrBannerImages as $jlbrBannerImage){
                        $bannerImage = new BannerImages;
                        $bannerImage->path = '/images/banners/'.$bannerModel->id.'/'.$jlbrBannerImage[name];
                        $bannerImage->description = $jlbrBannerImage[description];
                        $bannerImage->region_id = 0;
                        $bannerImage->banner_id = $bannerModel->id;
                        $bannerImage->type = $jlbrBannerImage[type];
                        $bannerImage->top_left = $jlbrBannerImage[top_left];
                        $bannerImage->top_right = $jlbrBannerImage[top_right];
                        $bannerImage->bottom_left = $jlbrBannerImage[bot_left];
                        $bannerImage->bottom_right = $jlbrBannerImage[bot_right];
                        
                        $url = "http://www.lbr.ru".$jlbrBanner[image].'/'.$jlbrBannerImage[name];
                        $Headers = @get_headers($url);
                        if($Headers[0]=='HTTP/1.1 200 OK') {
                            if(!file_exists($_SERVER['DOCUMENT_ROOT'].$bannerImage->path))
                                copy($url, $_SERVER['DOCUMENT_ROOT'].$bannerImage->path);
                        }
                        else{
                            echo('<b>dont exist: '.$url.'</b><br>');
                        }
                        $bannerImage->save();
                    }
                }
                
                $makers = explode(',', $jlbrBanner[logotips]);
                foreach($makers as $makerId){
                    if($makerId!==''){
                        $makerModel = new MakersInBanner;
                        $makerModel->banner_id=$bannerModel->id;
                        $makerModel->maker_id=$makerId;
                        $makerModel->save();
                    }
                }
                $jlbrBannerLink = $connectionJlbrDb->createCommand("SELECT path FROM jlbr_menu where `path` LIKE '".trim($jlbrBanner[link_cat],'\/')."' OR `link`='".$jlbrBanner[link_cat]."'")->queryRow(); 
                if($jlbrBannerLink===false){
                    echo('<b>LINK NOT FOUND IN MENU</b><br>');
                }
                else{
                    $jlbrBannerLink[path] = 'selskohozyaystvennaya-tehnika/type/'.str_replace('tehnika/', '', $jlbrBannerLink[path]);
                }
                var_dump($jlbrBanner[link_cat]);
                echo($jlbrBanner[id].'<br>');
                echo('--------------<br>');
                var_dump($jlbrBannerLink[path]);
                $bannerLinkModel = new BannerLinks;
                $bannerLinkModel->banner_id = $bannerModel->id;
                $bannerLinkModel->menu_item_id = MenuItems::getItemIdByPath($jlbrBannerLink[path]);
                $bannerLinkModel->save();

                $menuItemContentModel = new MenuItemsContent;
                $menuItemContentModel->item_id = MenuItems::getItemIdByPath('selskohozyaystvennaya-tehnika/type/');
                $menuItemContentModel->page_id = $bannerModel->id;
                $menuItemContentModel->save();
            } 
            var_dump($bannerRecordFromJlbr);
        }
        
        
}
