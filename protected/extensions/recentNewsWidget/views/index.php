<?php 
    $host = Yii::app()->params['host'];
?>
<div class="info_block">
    <div id="news_header">
        <a href="http://www.<?php echo $host ?>/company/events/">Новости ЛБР-АГРОМАРКЕТ</a> 
    </div>
    <?php
       foreach ($eventModels as $recent):
               $itemId = Yii::app()->db->createCommand()
                    ->select('item_id')
                    ->from('menu_items_content c')
                    ->join('menu_items i', 'i.id=c.item_id')
                    ->where('c.page_id=:id and i.type=:type', array(':id' => $recent->id, ':type' => MenuItems::NEWS_MENU_ITEM_TYPE))
                    ->queryRow()
                ;
    ?>
         <div class="news">
            <span class="news_date"><?php echo date('Y-m-d', strtotime($recent->date)) ?></span>  
            <a href="http://www.<?php echo $host . CategoryUrlRule::getUrl($itemId['item_id'])?>/"><?php echo $recent->header; ?></a>
         </div>
    <?php endforeach; ?>
</div>