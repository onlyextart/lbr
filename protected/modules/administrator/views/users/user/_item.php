<li>
<?
$params = array('group'=>$data->group_id,'userid'=>$data->id);
if(Yii::app()->user->checkAccess('editUser', $params))
{
    echo CHtml::link($data->surname.' '.$data->name.' ('.$data->groups->name.')', '/administrator/users/edituser/id/'.$data->id.'/', array('id'=>'li_'.$data->id, 'class'=>'ajax'));
}else{
    echo '<span>'.$data->surname.' '.$data->name.' ('.$data->groups->name.')</span>';
}
?>
</li>