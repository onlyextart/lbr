<?
switch ($data->type){
    case '2':
        Yii::app()->getController()->renderPartial('items/_subsection_dieci', array('data'=>$data));
        break;
    case '1':
        Yii::app()->getController()->renderPartial('items/_subsection_large', array('data'=>$data));
        break;
    default :
        Yii::app()->getController()->renderPartial('items/_subsection_custrom', array('data'=>$data));
        break;
}