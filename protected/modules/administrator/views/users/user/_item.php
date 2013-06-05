<li>
<?
$params = array('group'=>$data->group_id,'userid'=>$data->id);
if(Yii::app()->user->checkAccess('editUser', $params))
{
    echo CHtml::ajaxLink($data->surname.' '.$data->name, '/administrator/users/edituser/id/'.$data->id.'/', array('update'=>'.right','complete'=>'function(html){yw0update=$.fn.yiiListView;}'),array('id'=>'li'.$data->id));
}else{
    echo '<span id="'.$data->id.'_'.Yii::app()->user->getState('_id').'">'.$data->surname.' '.$data->name.'</span>';
}
?>
</li>