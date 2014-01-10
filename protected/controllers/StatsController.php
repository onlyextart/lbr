<?php

class StatsController extends Controller
{
    public function actionIndex(){
        var_dump(Yii::app()->user);
        if($_GET['video'] && $_GET['id'])
        {
            $return = SellsStats::model()->updateStatsDB($_GET['id']);
        }else{
            $params = array(
                'user_id' => Yii::app()->user->getState('_id'),
                'page_id'=>$_GET['page_id'],
                'session'=>$_SESSION,
            );
            $return = SellsStats::model()->setStatsDB($params);
        }
        return $return;
    }
    
}
