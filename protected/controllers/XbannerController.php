<?php
class XbannerController extends Controller{
    
    
    public function actionIndex(){
        $menu_items = Yii::app()->params['currentMenuItem']->menuItemsContents;
        $page_id = Yii::app()->params['currentMenuItem']->menuItemsContents[0]->item_id;
        
        
        $id = array();
        foreach ($menu_items as $item)
        {
            $id[] = $item->page_id;
        }

        $criteria = new CDbCriteria();
        $criteria->select = '*';
        $criteria->together = true;
        $criteria->with = array('bannerRegions', 'bannerImages');
        $criteria->condition = 't.published=1';
        $criteria->addInCondition('t.id',$id);
        $criteria->join = 'LEFT JOIN menu_items_content ON (menu_items_content.page_id=t.id AND menu_items_content.item_id='.$page_id.')';
        $criteria->order = 'menu_items_content.sorting ASC';
        $criteria->compare('bannerRegions.filial_id', array(Yii::app()->params['defaultRegionId'], Yii::app()->params['regionId']));
        $criteria->compare('bannerImages.region_id', array(Yii::app()->params['defaultRegionId'], Yii::app()->params['regionId']));

        $dataProvider = new CActiveDataProvider('Banners',
                array(
                    'criteria'=>$criteria,
                    'pagination'=>false,
                    'sort'=>false
                )
        );
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