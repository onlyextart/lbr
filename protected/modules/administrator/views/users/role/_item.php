<li>
<?php
if(Yii::app()->user->checkAccess('editRole'))
{
    echo CHtml::link($data->name, '/administrator/users/editrole/name/'.$data->name.'/', array('id'=>$data->name, 'class'=>'ajax'));
}else{
    echo '<span>'.$data->name.'</span>';
}?>
</li>