<li>
<?
if(Yii::app()->user->checkAccess('editOperation'))
{
    echo CHtml::link($data->name, '/administrator/users/editoperation/name/'.$data->name.'/', array('id'=>$data->name, 'class'=>'ajax'));
}else{
    echo '<span>'.$data->name.'</span>';
}
?>
</li>