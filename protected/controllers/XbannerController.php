<?php
class XbannerController extends Controller{
    
    
    public function actionIndex(){
        $menu_items = Yii::app()->params['currentMenuItem']->menuItemsContents;
        $id = array();
        foreach ($menu_items as $item)
        {
            array_push($id, $item->page_id);
        }
        $criteria = new CDbCriteria();
        $criteria->together = true;
        $criteria->with = array('bannerRegions', 'bannerImages');
        $criteria->condition = 't.id IN ('.implode(',', $id).') AND published=1';
        $criteria->compare('bannerRegions.filial_id', '0');
        $criteria->compare('bannerImages.region_id', '0');
        $dataProvider = new CActiveDataProvider('Banners', 
                array(
                    'criteria'=>$criteria,
                    'pagination'=>false,
                    'sort'=>false,
                )
        );
        //var_dump();
        //exit();
        $this->render('index', array('data'=>$dataProvider));
    }
    
    public function actionAjaxMaker($id){
        if ($id)
        {
            $data = Makers::model()->findByPk($id, 'published=1');
            if ($data)
            {
                $this->renderPartial('ajaxMaker', array('data'=>$data));
            }
        }
    }
    
}

?>
