<li>
<?
$params = array('level'=>$data->level);
if(Yii::app()->user->checkAccess('editUserGroup', $params))
{
    echo CHtml::ajaxLink(str_repeat('&mdash; ', $data->level).$data->name, '/administrator/users/editgroup/id/'.$data->id.'/', array('update'=>'.right','complete'=>'function(html){yw0update=$.fn.yiiListView;}'),array('id'=>'li_'.$data->id));
}else{
    echo '<span>'.str_repeat('&mdash; ', $data->level).$data->name.'</span>';
}
?>
</li>