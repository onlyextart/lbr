<li id="<?php echo $index+1;?>">
<?php
    echo CHtml::link(($index+1).'. '.Banners::model()->findByPk($data->page_id)->bannerRegions[0]->name, '/administrator/banners/update/id/'.$data->page_id.'/', array('class'=>'one-banner'));
//    if(($count-1)!=$index){
        echo CHtml::link('Down', '/administrator/banners/sortDown/bannerId/'.$data->page_id.'/menuItemId/'.$data->item_id.'/', array('class'=>'down'));
//    }
//    if($index!=0){
        echo CHtml::link('Up', '/administrator/banners/sortUp/bannerId/'.$data->page_id.'/menuItemId/'.$data->item_id.'/', array('class'=>'up'));
//    }
    ?>
</li>