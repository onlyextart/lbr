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
    
}

?>
