<li>
<?
$params = array('level'=>$data->level);
if(Yii::app()->user->checkAccess('editUserGroup', $params))
{
    echo CHtml::link(str_repeat('&mdash; ', $data->level).$data->name, '/administrator/users/editgroup/id/'.$data->id.'/', array('id'=>'li_'.$data->id, 'class'=>'ajax'));
}else{
    echo '<span>'.str_repeat('&mdash; ', $data->level).$data->name.'</span>';
}
?>
</li>