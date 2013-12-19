<?
$menu_items_id = array();
foreach ($data->bannerLinks as $link)
{
    array_push($menu_items_id, $link->menu_item_id);
}
$link_id = Yii::app()->db->createCommand()
    ->select('id, type, alias')
    ->from('menu_items')
        ->where(
                array(
                    'and', 
                    'level>'.Yii::app()->params['currentMenuItem']->level, 
                    'lft>'.Yii::app()->params['currentMenuItem']->lft, 
                    'rt<'.Yii::app()->params['currentMenuItem']->rt, 
                    array(
                        'in', 
                        'id', 
                        $menu_items_id
                        )
                    )
                )
    ->queryRow();
if($link_id['type']==MenuItems::LINK_MENU_ITEM_TYPE){
    $link = $link_id['alias'];
}else{
    $link = CategoryUrlRule::getUrl($link_id['id']);
}

$array_maker_id = array();
foreach ($data->makersInBanners as $maker_id)
{
    array_push($array_maker_id, $maker_id->maker_id);
}
$makers = Makers::model()->findAll(array(
        'select'=>'name, logo, id',
        'condition'=>'id IN ('.implode(',', $array_maker_id).')',
    ));
$k = count($data->bannerRegions)-1;
?>

<div class="one_banner second_banner_custrom">
    <div class="b_header"><h3><a href="<? echo $link.'/';?>"><? echo $data->bannerRegions[$k]->name; ?></a></h3>
    <? if (!empty($makers)){ ?>
        <div class="b_makers">     
            <? foreach ($makers as $maker){
                    echo '<div class="b_one_maker">';
                    echo '<img src="'.$maker['logo'].'" alt="'.$maker['name'].'" class="makerid'.$maker['id'].'">';
                    echo '</div>';
                } ?>
        </div>
    <? } ?>
    </div>
    <div class="b_images">
        <div class="b_images_overflow">
            <div class="b_images_conteiner">
                <? foreach ($data->bannerImages as $indx=>$image){ ?>
                    <section class="b_images_one_image">
                        <? if ($indx==0){?>
                        <img src="<? echo $image->path; ?>" data-src="<? echo $image->path; ?>" alt="<? echo $image->alt; ?>" title="<? echo $image->title; ?>">
                        <? }else{?>
                        <img data-src="<? echo $image->path; ?>" src="/images/1.gif" alt="<? echo $image->alt; ?>" title="<? echo $image->title; ?>">
                            <?} if($image->type=='1'){?>
                                <div class="time_to_buy">
                                    <div class="time_to_buy_description">
                                        <span><?php echo $image->description; ?></span>
                                    </div>
                                    <?php if($image->top_left):?>
                                        <div class="time_to_buy_top_left">
                                            <span>экономия</span>
                                            <span><?php echo $image->top_left;?> %</span>
                                        </div>
                                    <?php endif;?>
                                    <?php if($image->top_right):?>
                                        <div class="time_to_buy_top_right">
                                            
                                        </div>
                                    <?php endif;?>
                                    <?php if($image->bottom_right):?>
                                        <div class="time_to_buy_bottom_right">
                                        </div>
                                    <?php endif;?>
                                    <?php if($image->bottom_left):?>
                                        <div class="time_to_buy_bottom_left">
                                            <span><?php echo $image->bottom_left; ?></span>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <!--<div class="b_images_one_image_caption"><p><? echo $image->description; ?></p></div>-->
                            <? }elseif($image->description && $image->description!=''){ ?>
                                <div class="b_images_one_image_caption"><p><? echo $image->description; ?></p></div>
                            <? }?>
                    </section>
                <? } ?>
            </div>
        </div>
    </div>
    <div class="b_caption">
        <div class="b_caption_desc"><? echo $data->bannerRegions[$k]->description; ?></div>
        <? echo CHtml::link('Каталог', $link.'/', array('class'=>'btn')); ?>
    </div>
</div>