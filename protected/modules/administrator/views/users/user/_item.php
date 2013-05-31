<li>
<? echo CHtml::ajaxLink($data->name.' '.$data->surname, '/administrator/users/edituser/id/'.$data->id.'/', array('update'=>'.right','complete'=>'function(html){yw0update=$.fn.yiiListView;}'),array('id'=>'li'.$data->id)); ?>
</li>