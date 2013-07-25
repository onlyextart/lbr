<?php
class RecentNewsWidget extends CWidget {
    
    public function init()
	{		              
 
	}
    
    public function run()
	{
	   if(Yii::app()->params['currentMenuItem']->level!=1)
	    return;
        $eventModels = News::model()->with(
        array(
            'newsRegions'=>array(
                // we don't want to select posts
                //'select'=>false,
                // but want to get only users with published posts
                'joinType'=>'INNER JOIN',
                'condition'=>'newsRegions.filial_id='.Yii::app()->params['regionId'],
            ),
        )
        )->findAll(array(
            'condition'=>'published=1',
            'limit'=>4,
        ));   
        $this->render('index', array('eventModels'=>$eventModels));
	}
}

?>