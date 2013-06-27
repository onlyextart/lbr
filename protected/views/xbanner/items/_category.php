<?
$link = CategoryUrlRule::getUrl($data->bannerLinks[0]->menu_item_id);
?>

<div class="one_banner third_banner">
    <div class="b_header"><h3><a href="<? echo $link.'/';?>"><? echo $data->bannerRegions[0]->name; ?></a></h3></div>
    <div class="b_images">
        <div class="b_images_overflow">
            <div class="b_images_conteiner">
                <? foreach ($data->bannerImages as $image){ ?>
                    <section class="b_images_one_image">
                        <img src="<? echo $image->path; ?>" alt="<? echo $image->alt; ?>" title="<? echo $image->title; ?>">
                        
                            <? if($image->type=='1'){?>
                                <div class="b_images_one_image_caption"></div>
                            <? }else{ ?>
                                <div class="b_images_one_image_caption"><p><? echo $image->description; ?></p></div>
                            <? }?>
                    </section>
                <? } ?>
            </div>
        </div>
    </div>
    <div class="b_caption">
        <? echo $data->bannerRegions[0]->description; ?>
        <? echo CHtml::link('Описание, Характеристики, Опыт эксплуатации', $link, array('class'=>'btn')); ?>
    </div>
</div>