<?

$link = CategoryUrlRule::getUrl($data->bannerLinks[0]->menu_item_id);

$array_maker_id = array();
foreach ($data->makersInBanners as $maker_id)
{
    array_push($array_maker_id, $maker_id->maker_id);
}
$makers = Makers::model()->findAll(array(
        'select'=>'name, logo, id',
        'condition'=>'id IN ('.implode(',', $array_maker_id).')',
    ));  
?>

<div class="one_banner third_banner">
    <div class="b_header"><h3><a href="<? echo $link.'/';?>"><? echo $data->bannerRegions[0]->name; ?></a></h3>
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
                <?php $cap = ''; ?>
                <? foreach ($data->bannerImages as $indx=>$image){ ?>
                    <section class="b_images_one_image">
                        <? if ($indx==0){?>
                        <img src="<? echo $image->path; ?>" data-src="<? echo $image->path; ?>" alt="<? echo $image->alt; ?>" title="<? echo $image->title; ?>">
                        <? }else{?>
                        <img data-src="<? echo $image->path; ?>" src="/images/1.gif" alt="<? echo $image->alt; ?>" title="<? echo $image->title; ?>">
                        <?  }
                            if($image->type=='1' || $image->type=='2'){
                                if($image->type=='1')
                                    $cap = '<section class="b_images_one_image"><img src="/images/1.gif" data-src="/images/timetobuy/ttbWinter/general430.jpg" /></section>';
                                Yii::app()->getController()->renderPartial('items/timetobuy', array('image'=>$image));
                            }elseif($image->description && $image->description!=''){ ?>
                                <div class="b_images_one_image_caption"><p><? echo $image->description; ?></p></div>
                        <?  }?>
                    </section>
                <? } ?>
                <?php echo $cap; ?>
            </div>
        </div>
    </div>
    <div class="b_caption">
        <? echo $data->bannerRegions[0]->description; ?>
        <? echo CHtml::link('Описание, Характеристики, Опыт эксплуатации', $link.'/', array('class'=>'btn')); ?>
    </div>
</div>
