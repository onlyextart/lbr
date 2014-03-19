<li class="row" id="q_<?php echo $data->id; ?>">
<?php
$content = MenuItems::model()->findByPk($data->menu_item_id);
echo CHtml::link($data->sorted.'. '.$content->header, '/administrator/search/edittop/id/'.$data->id.'/', array('class'=>'ajax'));
?>
</li>