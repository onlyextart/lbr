<?php
class RecentNewsWidget extends CWidget 
{
    public function run()
    {
       //var_dump(111);exit;
       //echo 111;exit;
       if(Yii::app()->params['currentMenuItem']->level!=1) return;

       $criteria = new CDbCriteria();
       $criteria->together = true; // relations
       $criteria->with = array('newsRegions');
       $criteria->compare('published', 1);
       $criteria->compare('newsRegions.filial_id', array(Yii::app()->params['defaultRegionId'], Yii::app()->params['regionId']));
       $criteria->order = 'date DESC';
       $criteria->limit = 4;

       $eventModels = News::model()->findAll($criteria);
       $this->render('index', array('eventModels'=>$eventModels));
    }   
}
