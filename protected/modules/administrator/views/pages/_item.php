<li>
<?php
if(Yii::app()->user->checkAccess('editPage'))
{
//    echo CHtml::ajaxLink($data->name, '/administrator/pages/editpage/id/'.$data->id.'/', array('update'=>'.right','complete'=>'function(html){yw0update=$.fn.yiiListView;}'),array('id'=>'li_'.$data->id));
    echo CHtml::link($data->name, '/administrator/pages/editpage/id/'.$data->id.'/', array('id'=>'li_'.$data->id, 'class'=>'ajax'));
}else{
    echo '<span id="li_'.$data->id.'">'.$data->name.'</span>';
}
?>
</li>
