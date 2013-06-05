<li>
<?
if(Yii::app()->user->checkAccess('editRole'))
{
    echo CHtml::ajaxLink($data->name, '/administrator/users/editrole/name/'.$data->name.'/', array('update'=>'.right','complete'=>'function(html){yw0update=$.fn.yiiListView;}'),array('id'=>'li_'.$data->name));
}else{
    echo '<span>'.$data->name.'</span>';
}?>
</li>