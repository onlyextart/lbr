<?php
class ProductsController extends Controller{
    
    
    public function actionIndex()
    {
        $page_id = Yii::app()->params['currentMenuItem']->menuItemsContents[0]->page_id;
        if (!$page_id){
             throw new CHttpException(404,Yii::t('yii','Страница не найдена'));
        }
        $content = Products::model()->with(array(
                                            'productsRegions'=>array(
                                                            'condition'=>'productsRegions.filial_id='.Yii::app()->params['defaultRegionId'].' OR productsRegions.filial_id='.Yii::app()->params['regionId'],
                                                            ),
                                            'productGalleries',
                                            'productVideos'
                                                )
                                          )->findByPk($page_id);
        if ($content===NULL){
            $content = Products::model()->findByPk($page_id);
        }
        if ($content){
            $this->render('index', array('data'=>$content));
        }
    }
    
    public function actionGetPdf( $url ){
        $menuItem = MenuItems::model()->find('path=:path', array(
            ':path'=>$url,
        ));
        if($menuItem === null || $menuItem->type!=MenuItems::PRODUCT_MENU_ITEM_TYPE)
            throw new CHttpException(404, 'Запрашиваемая страница не существует');
        
        //$pageData = file_get_contents('');
        
        $productModel = Products::model()->findByPk($menuItem->menuItemsContents[0]->page_id);
        
        if($productModel===null)
            throw new CHttpException(404, 'Запрашиваемая страница не существует');
        
        $makerModel = Makers::model()->findByPk($productModel->maker);
        $contactModel = Regions::model()->findByPk(Yii::app()->params['regionId'])->contact;
        //var_dump($contactModel);
        $stylesheet = 'body {position:relative; font-size:12px; width:100%;}
                    .logoWrapper{width:200px; float:left;}
                    .logo{width:200px; float:left;}
                    .adressWrapper{width:400px; float:right; font-size:11px;}
                    .product_data_wrapper{width:100%;float:left;}
                    .product_header{width:100%;float:left; margin:20px 0;}
                    .maker_image{max-height:25px; margin-right:10px; width:20%; float:left;}
                    .product_name{margin:0px; padding:0px;}
                    .product_image_wrapper {width:100%;float:left; text-align:center;}
                    .product_image{width:70%;}
                    .product_feature {width:100%;float:left;}
                    table{
                        page-break-inside: avoid;
                    }
                    .product_feature h3 {}';
        $pageData='
            <html>
                <head>
                </head>
                <body>
                    <div class="logoWrapper">
                        <img class="logo" src="/images/logo.png">
                    </div>
                    <div class="adressWrapper">'.
                        $contactModel->address.'<br>'.
                        $contactModel->telephone.'<br>'.
                        $contactModel->work_time.'<br>'.
                        $contactModel->email.'<br>'.
                    '</div>
                    <div class="product_data_wrapper">
                        <div class="product_header">
                            <img class="maker_image" src="'.$makerModel->logo.'"><h2 class="product_name">'.$productModel->name.'</h2>
                        </div>
                        <div class="product_image_wrapper">
                            <img class="product_image" src="'.$productModel->image.'">
                        </div>
                        <div class="product_feature">
                            '.$productModel->review.'
                        </div>
                        <div class="product_feature">
                            '.$productModel->features.'
                        </div>
                    </div>
                </body>
            </html>';
        require_once('MPDF57/mpdf.php');
        $mpdf=new mPDF('ru-RU','A4','','',15, 5, 7, 7, 10, 10);
        $mpdf->WriteHTML($stylesheet,1);
        $mpdf->WriteHTML($pageData,2);
        $mpdf->Output('lbr.ru.pdf','D');
        //echo($pageData);
    }
}

?>
