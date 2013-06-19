<?php
class ProductsController extends Controller{
    
    public function actionIndex(){
        $dataProvider=new CActiveDataProvider('Products');
        $this->render(
            'index', 
            array(
                'dataProvider'=>$dataProvider,
            )
        );
    }
    
    public function actionCreate(){
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
                }
            }
            Yii::app()->user->setFlash('saved','Страница товара создана.');
            $this->redirect('http://lbr/administrator/products/update/id/'.$productModel->id);
        }
        
        $this->render('manage', array(
            'productModel'=>$productModel,
            'productFotoGallery'=>$productFotoGallery,
            'productVideoGallery'=>$productVideoGallery,
            'productRegionalData'=>$productRegionalData,
            'makers'=>$makers,
        ));
        
    }
    
    public function actionUpdate( $id ){
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
            
            if( isset($_POST['ProductGallery']) ){
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
                }
            }
            Yii::app()->user->setFlash('saved','Страница товара успешно сохранена.');
            $this->redirect('http://lbr/administrator/products/update/id/'.$productModel->id);
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
}
?>
