<?php
    $pageId = $data->id;
    $itemId = Yii::app()->db->createCommand()
        ->select('item_id')
        ->from('menu_items_content c')
        ->join('menu_items i', 'i.id=c.item_id')
        ->where('c.page_id=:id and i.type=:type', array(':id' => $pageId, ':type' => MenuItems::NEWS_MENU_ITEM_TYPE))
        ->queryRow()
    ;
    $link = CategoryUrlRule::getUrl($itemId['item_id']).'/';
    
    $description = $data->newsRegions[0]->description;
    $find = strpos($description, '{/ohmygod}');
    if($find){
        $description = substr($description, $find + 10); 
    }
    echo CHtml::openTag('li', array(
       'class' => 'news-menu-color'
    ));
    echo CHtml::link('<span class="h-3">'.$data->header.'</h3>', $link);
    echo $description;
    echo '<span class="news-list-view-date">', date('d.m.Y', strtotime($data->date)), '</span>';
    echo CHtml::closeTag('li');
