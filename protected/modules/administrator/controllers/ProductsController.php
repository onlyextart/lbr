<?php
class ProductsController extends Controller{
    
    public function actionIndex() {
        $dataProvider=new CActiveDataProvider('Products');
        $this->render(
            'index', 
            array(
                'dataProvider'=>$dataProvider,
            )
        );
    }

    public function actionDelete( $id ){
        $model = Products::model()->findByPk( $id );
        if($model!==null) { 
            //Удалить страницу из пунктов меню
            $menuItems = MenuItemsContent::model()->with('item')->findAll(
                'page_id='.$model->id.'
                    AND item.type='.MenuItems::PRODUCT_MENU_ITEM_TYPE
            );
            if($menuItems && !empty($menuItems)){
                foreach($menuItems as $menuItem){
                    $menuItem->delete();
                }
            }
            //Удалить страницу
            $model->delete();
        }
    }
    
    public function actionCreate()
    {
        $productModel = new Products();
        $productFotoGallery = $productModel->productGalleries;
        $productVideoGallery = $productModel->productVideos;
        $productRegionalData = $productModel->productsRegions;
        $makers = Makers::model()->findAll();
        
        if( isset($_POST['Products']) ){
            $productModel->attributes = $_POST['Products'];
            $productIsValid = $productModel->validate();
            
            if( isset($_POST['ProductsRegion']) ){
                $productRegionalData = array();
                foreach( $_POST['ProductsRegion'] as $regionId=>$regionalProductData ){
                    $productRegionalData[$regionId] = new ProductsRegion();
                    $productRegionalData[$regionId]->attributes = $regionalProductData;
                    $productRegionalData[$regionId]->filial_id = $regionId;
                    $productIsValid = $productRegionalData[$regionId]->validate() && $productIsValid;
                }
            }
            
            if( isset($_POST['ProductGallery']) ){
                $productFotoGallery = array();
                foreach( $_POST['ProductGallery'] as $imageNum => $foto ){
                    $productFotoGallery[$imageNum] = new ProductGallery();
                    $productFotoGallery[$imageNum]->attributes = $foto;
                    $productFotoGallery[$imageNum]->sorting = $imageNum;
                    $productIsValid = $productFotoGallery[$imageNum]->validate() && $productIsValid;
                }
            }
            
            if( isset($_POST['ProductVideo']) ){
                $productVideoGallery = array();
                foreach( $_POST['ProductVideo'] as $videoNum => $video ){
                    $productVideoGallery[$videoNum] = new ProductVideo();
                    $productVideoGallery[$videoNum]->attributes = $video;
                    $productVideoGallery[$videoNum]->sorting = $videoNum;
                    $productIsValid = $productVideoGallery[$videoNum]->validate() && $productIsValid;
                }
            }
                
            if( $productIsValid ){
                $productModel->save();
                if( isset($_POST['ProductsRegion']) ){
                    foreach( $productRegionalData as $regionalProductData ){
                        $regionalProductData->product_id = $productModel->id;
                        $regionalProductData->save();
                    }
                }
                if( isset($_POST['ProductGallery']) ){
                    foreach( $productFotoGallery as $foto ){
                        $foto->product_id = $productModel->id;
                        $foto->save();
                    }
                }
                if( isset($_POST['ProductVideo']) ){
                    foreach( $productVideoGallery as $video ){
                        $video->product_id = $productModel->id;
                        $video->save();
                    }
                }
                if( isset( $_POST['MenuItemConteintigThisProduct'] ) ){
                    foreach( $_POST['MenuItemConteintigThisProduct'] as $menuItemId=>$value ){
                        if($value!='0'){
                            $menuItemContentModel = new MenuItemsContent();
                            $menuItemContentModel->item_id = $menuItemId;
                            $menuItemContentModel->page_id = $productModel->id;
                            $menuItemContentModel->save();
                        }
                    }
                    $productModel->metaSave();
                }
            }
            Yii::app()->user->setFlash('saved','Страница товара создана.');
            if($_POST['yt0'])
            {
                 $this->redirect('/administrator/products/');
            }else{
                $this->redirect('/administrator/products/update/id/'.$productModel->id);
            }
        }
        
        $this->render('manage', array(
            'productModel'=>$productModel,
            'productFotoGallery'=>$productFotoGallery,
            'productVideoGallery'=>$productVideoGallery,
            'productRegionalData'=>$productRegionalData,
            'makers'=>$makers,
        ));
        
    }
    
    public function actionUpdate( $id ) {
        $productModel = Products::model()->findByPk( $id );
        $productFotoGallery = $productModel->productGalleries;
        $productVideoGallery = $productModel->productVideos;
        $productRegionalData = $productModel->productsRegions;
        $makers = Makers::model()->findAll();
        
        if( isset($_POST['Products']) ){
            $productModel->attributes = $_POST['Products'];
            $productIsValid = $productModel->validate();
            
            if( isset($_POST['ProductsRegion']) ){
                $productRegionalDataForDeleting = $productRegionalData;
                foreach( $_POST['ProductsRegion'] as $regionId=>$regionalProductData ){
                    if(!isset($productRegionalData[$regionId]))
                        $productRegionalData[$regionId] = new ProductsRegion();
                    $productRegionalData[$regionId]->attributes = $regionalProductData;
                    $productRegionalData[$regionId]->filial_id = $regionId;
                    $productIsValid = $productRegionalData[$regionId]->validate() && $productIsValid;
                    unset($productRegionalDataForDeleting[$regionId]);
                }
            }
            
            if( isset($_POST['ProductGallery']) ) {
                $productFotoGalleryForDeleting = $productFotoGallery;
                foreach( $_POST['ProductGallery'] as $imageNum => $foto ){
                    if(!isset($productFotoGallery[$imageNum]))
                        $productFotoGallery[$imageNum] = new ProductGallery();
                    $productFotoGallery[$imageNum]->attributes = $foto;
                    $productFotoGallery[$imageNum]->sorting = $imageNum;
                    $productIsValid = $productFotoGallery[$imageNum]->validate() && $productIsValid;
                    unset($productFotoGalleryForDeleting[$imageNum]);
                }
            }
            
            if( isset($_POST['ProductVideo']) ){
                $productVideoGalleryForDeleting = $productVideoGallery;
                foreach( $_POST['ProductVideo'] as $videoNum => $video ){
                    if(!isset($productVideoGallery[$videoNum]))
                        $productVideoGallery[$videoNum] = new ProductVideo();
                    $productVideoGallery[$videoNum]->attributes = $video;
                    $productVideoGallery[$videoNum]->sorting = $videoNum;
                    $productIsValid = $productVideoGallery[$videoNum]->validate() && $productIsValid;
                    unset($productVideoGalleryForDeleting[$videoNum]);
                }
            }
                
            if( $productIsValid ){
                $productModel->save();
                if( isset($_POST['ProductsRegion']) ){
                    foreach( $productRegionalData as $regionalProductData ){
                        $regionalProductData->product_id = $productModel->id;
                        $regionalProductData->save();
                    }
                    foreach( $productRegionalDataForDeleting as $deleteRegionalData ){
                        $deleteRegionalData->delete();
                    }
                }
                if( isset( $_POST['ProductGallery'] ) ){
                    foreach( $productFotoGallery as $foto ){
                        $foto->product_id = $productModel->id;
                        $foto->save();
                    }
                    foreach( $productFotoGalleryForDeleting as $deleteGalleryFoto ){
                        $deleteGalleryFoto->delete();
                    }
                }
                if( isset($_POST['ProductVideo']) ){
                    foreach( $productVideoGallery as $video ){
                        $video->product_id = $productModel->id;
                        $video->save();
                    }
                    foreach( $productVideoGalleryForDeleting as $deleteVideo ){
                        $deleteVideo->delete();
                    }
                }
                if( isset( $_POST['MenuItemConteintigThisProduct'] ) ){
                    $menuItmemsContentModels = MenuItemsContent::model()->with('item')->findAll(
                        'page_id='.$productModel->id.
                        ' AND item.type='.MenuItems::PRODUCT_MENU_ITEM_TYPE
                    );
                    $menuItmemsContentModelsForDeleting = $menuItmemsContentModels;
                    $menuItmemsContentNum = 0;
                    foreach( $_POST['MenuItemConteintigThisProduct'] as $menuItemId=>$value ){
                        if($value!='0'){
                            if(!isset($menuItmemsContentModels[$menuItmemsContentNum]))
                                $menuItmemsContentModels[$menuItmemsContentNum] = new MenuItemsContent();
                            $menuItmemsContentModels[$menuItmemsContentNum]->item_id = $menuItemId;
                            $menuItmemsContentModels[$menuItmemsContentNum]->page_id = $productModel->id;
                            $menuItmemsContentModels[$menuItmemsContentNum]->save();
                            unset( $menuItmemsContentModelsForDeleting[$menuItmemsContentNum] );
                            $menuItmemsContentNum++;
                        }
                    }
                    foreach( $menuItmemsContentModelsForDeleting as $deleteMenuItmemsContent ){
                        $deleteMenuItmemsContent->delete();
                    }
                    $productModel->metaSave();
                }
            }
            
            ProductTechSchema::model()->deleteAll("product_id = :id", array('id' => $productModel->id));
            if(isset($_POST['schema']) || isset($_POST['stage'])) {
                /*if(isset($_POST['schema'])){
                    foreach ($_POST['schema'] as $id => $flag) {
                        $stages = Yii::app()->db->createCommand()
                            ->from('tech_schema_stage')
                            ->where('schema_id=:id', array(':id'=>$id))
                            ->queryAll()
                        ;
                        if(!empty($stages)){
                            foreach($stages as $stage){
                                $productTechSchema = new ProductTechSchema;
                                $productTechSchema->product_id = $productModel->id;
                                $productTechSchema->stage_id = $stage['id'];
                                $productTechSchema->save();
                            }
                        }
                    }
                }*/
                
                if(isset($_POST['stage'])) {
                    foreach ($_POST['stage'] as $id => $flag) {
                        if(!ProductTechSchema::model()->exists('product_id=:product and stage_id=:stage', array('product'=>$productModel->id, 'stage'=>$id))){
                            $productTechSchema = new ProductTechSchema;
                            $productTechSchema->product_id = $productModel->id;
                            $productTechSchema->stage_id = $id;
                            $productTechSchema->save();
                        }
                    }
                }
            }
            
            Yii::app()->user->setFlash('saved','Страница товара успешно сохранена.');
            if($_POST['yt0']) {
                 $this->redirect('/administrator/products/');
            } else {
                $this->redirect('/administrator/products/update/id/'.$productModel->id);
            }
        }
        
        $this->render('manage', array(
            'productModel'=>$productModel,
            'productFotoGallery'=>$productFotoGallery,
            'productVideoGallery'=>$productVideoGallery,
            'productRegionalData'=>$productRegionalData,
            'makers'=>$makers,
        ));
        
    }
    
    public function actionGetRegionalData( $regionId, $productId='' ){
        if( $productId!=='' ){
            $productRegionalDataModel = ProductsRegion::model()->find(
                'product_id='.$productId.' AND filial_id='.$regionId
            );
        }
        if($productRegionalDataModel === null){
            $productRegionalDataModel = new ProductsRegion();
            $productRegionalDataModel->filial_id = $regionId;
        }
        $this->renderPartial('regionalDataForm', array(
            'productRegionalDataModel'=>$productRegionalDataModel,
        ), false, false);
    }
    
    public function actionTransfer( ){
//        exit();
        $connectionJlbrDb=new CDbConnection('mysql:host=localhost;dbname=lbr_jlbr','mysql','mysql');
        $connectionJlbrDb->active=true;
        function lower($str){return mb_strtolower($str, "UTF-8");}
        Yii::app()->db->getPdoInstance()->sqliteCreateFunction('lower', 'lower', 1);
        $productsFromJlbr = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_xbaner WHERE type='4' AND published='1'")->queryAll();
        //$productsFromJlbr = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_xbaner WHERE id='301'")->queryAll();
        foreach ($productsFromJlbr as $productFromJlbr){
            $productModel = new Products;
            $productModel->id = $productFromJlbr[id];
            $productModel->name = $productFromJlbr[name];
            $productModel->maker = $productFromJlbr[logotips];
            
            $obzorFoto = trim(str_replace('http://www.lbr.ru', '', $productFromJlbr['obzor_photo']), '/');
            $obzorFotoArray=explode('/', $obzorFoto);
            $obzorFotoName=$obzorFotoArray[count($obzorFotoArray)-1];
            
            $productModel->image = '/images/products/'.$productFromJlbr[id].'/'.$obzorFotoName;
            if(!is_dir($_SERVER['DOCUMENT_ROOT'].'/images/products/'.$productFromJlbr[id].'/'))
                mkdir($_SERVER['DOCUMENT_ROOT'].'/images/products/'.$productFromJlbr[id].'/');
            
            $url = "http://www.lbr.ru/".$obzorFoto;
            $Headers = @get_headers($url);
            if($Headers[0]=='HTTP/1.1 200 OK') {
                if(!file_exists($_SERVER['DOCUMENT_ROOT'].$productModel->image))
                    @copy($url, $_SERVER['DOCUMENT_ROOT'].$productModel->image);
            }
            else{
                echo('<b>dont exist on server: '.$url.'</b><br>');
            }
            $productModel->video = $productFromJlbr[obzor_video];
            $productModel->review = $productFromJlbr[caption];
            $productModel->features = $productFromJlbr[caption2];
            $productModel->construct_features = $productFromJlbr[caption3];
            $productModel->experience = $productFromJlbr[caption4];
            $productModel->image_type = 0;
            
            $menuModel = MenuItems::model()->find(
                'alias=:alias', 
                array(':alias'=>$productFromJlbr[id].'-'.$productFromJlbr[alias])
            );
            if($menuModel==null){
                echo('<b>menu item not exist: '.$productFromJlbr[id].'-'.$productFromJlbr[alias].'</b><br>');
                continue;
            }
            $productModel->save();
            
            $menuItemContentModel = new MenuItemsContent;
            $menuItemContentModel->item_id = $menuModel->id;
            $menuItemContentModel->page_id = $productFromJlbr[id];
            $menuItemContentModel->save();
            
            $jlbrProductImages = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_xbaner_img where banid='".$productFromJlbr[id]."'")->queryAll(); 
            if(count($jlbrProductImages)>0){
                foreach ($jlbrProductImages as $jlbrProductImage){
                    $productImage = new ProductGallery;
                    $productImage->path = '/images/products/'.$productFromJlbr[id].'/'.$jlbrProductImage[name];
                    $productImage->description = $jlbrProductImage[description];
                    $productImage->product_id = $productFromJlbr[id];
                    if($jlbrProductImage[type]=='1' || $jlbrProductImage[type]=='2'){
                        $productModel->image_type = $jlbrProductImage[type];
                        $productModel->image_top_left = $jlbrProductImage[description];
                        $productModel->image_top_right = $jlbrProductImage[top_right];
                        $productModel->image_bottom_left = $jlbrProductImage[bot_left];
                        $productModel->image_bottom_right = $jlbrProductImage[bot_right];
                        $productModel->save();
                    }
                    $productImage->alt = $productModel->name.' (фото)';
                    $url = "http://www.lbr.ru".$productFromJlbr[image].'/'.$jlbrProductImage[name];
                    $Headers = @get_headers($url);
                    if($Headers[0]=='HTTP/1.1 200 OK') {
                        if(!file_exists($_SERVER['DOCUMENT_ROOT'].$productImage->path))
                            copy($url, $_SERVER['DOCUMENT_ROOT'].$productImage->path);
                    }
                    else{
                        echo('<b>dont exist on server: '.$url.'</b><br>');
                    }
                    $productImage->save();
                }
            }
            
            $videosArray=explode('||',$productFromJlbr[video]);
            foreach($videosArray as $video){
                $videoArr = explode('::', $video);	
                if($videoArr[0]!=""){
                    $productVideoModel = new ProductVideo;
                    $productVideoModel->product_id = $productFromJlbr[id];
                    $productVideoModel->video_code = $videoArr[0];
                    $productVideoModel->description = $videoArr[1];
                    $productVideoModel->save();
                }
            }
            
            $howToSellJlbr = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_xsell where banid='".$productFromJlbr[id]."'")->queryRow(); 
            if($howToSellJlbr){
                $howToSellModel = new HowToSell;
                $howToSellModel->id = $howToSellJlbr[id];
                $howToSellModel->product_id = $productFromJlbr[id];
                $howToSellModel->content = $howToSellJlbr[text];
                $howToSellModel->foto = $howToSellJlbr[photo];
                $howToSellModel->video = $howToSellJlbr[video];
                $howToSellModel->save();
            }
            
            $regionalReviewJlbr = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_xbaner_review where banid='".$productFromJlbr[id]."'")->queryAll();
            if(is_array($regionalReviewJlbr) && !empty($regionalReviewJlbr)){
                foreach($regionalReviewJlbr as $regionalReview){
                    $filialsJlbr = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_region where id IN(".$regionalReview[region].") GROUP BY alias")->queryAll();
                    foreach($filialsJlbr as $filial){
                        $productRegionModel = new ProductsRegion;
                        $filialModel = Contacts::model()->find('alias=:alias', array(':alias'=>$filial[alias]));
                        $productRegionModel->filial_id = $filialModel->id;
                        $productRegionModel->product_id = $productFromJlbr[id];
                        $productRegionModel->additional_review = $regionalReview[text];
                        $productRegionModel->save();
                    }
                }
            }
            var_dump($productFromJlbr[id]);
        }
        echo('done');
    }
    
    public function loadTechSchemaTree($productId) {
        $productSchema = array();
        $roots = TechSchema::model()->roots()->findAll();
        if(!empty($roots)){
            $productSchema = array(
                array(
                    'text'     => 'Технологические циклы',
                    'expanded' => false, // будет развернута ветка или нет (по умолчанию)
                    'children' => array(),
                ),
            );

            foreach ($roots as $root) {
                $branch = array(
                    'text' => $root->title,
                );
                $cycle = TechSchema::model()->findByPk($root->id);
                $descendants=$cycle->descendants()->findAll();

                if(!empty($descendants)) {
                    $branch = array(
                        'text' => $root->title,
                        'expanded' => false,
                        'children' => array(),
                    );
                    foreach ($descendants as $descendant) {
                        $branchStages = array(
                            'text' => $descendant->title, //.CHtml::CheckBox('schema['.$descendant->id.']', false, array('class'=>'menuItemCheckBox')),
                            'expanded' => false,
                            'children' => array(),
                        );
                        $stages = Yii::app()->db->createCommand()
                            ->from('tech_schema_stage')
                            ->where('schema_id=:id', array(':id'=>$descendant->id))
                            ->order('level')
                            ->queryAll()
                        ;
                        if(!empty($stages)){
                            foreach ($stages as $stage){
                                $stageModel = TechStage::model()->findByPk($stage['stage_id']);
                                $flag = false;
                                
                                if(ProductTechSchema::model()->exists('product_id=:product and stage_id=:stage', array('product'=>$productId, 'stage'=>$stage['id']))) $flag = true;
                                $branchStages['children'][] = array('text' => $stageModel->title.CHtml::CheckBox('stage['.$stage['id'].']', $flag, array('class'=>'menuItemCheckBox')));
                            }
                        }

                        $branch['children'][] = $branchStages;
                    }
                }
                $productSchema[0]['children'][] = $branch;
            }
        }
        return $productSchema;
    }
}
