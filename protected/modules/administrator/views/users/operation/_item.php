<li>
<? echo CHtml::ajaxLink($data->name, '/administrator/users/editoperation/name/'.$data->name.'/', array('update'=>'.right','complete'=>'function(html){yw0update=$.fn.yiiListView;}'),array('id'=>'li_'.$data->name)); ?>
</li>