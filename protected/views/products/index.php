<?php
Yii::app()->clientScript->registerCssFile('/js/galleria/themes/classic/galleria.classic.css');
Yii::app()->clientScript->registerScriptFile('/js/galleria/galleria-1.2.9.min.js');
Yii::app()->clientScript->registerScriptFile('/js/site/AjaxMakersDescriptionLoader.js');
Yii::app()->clientScript->registerScriptFile('/js/site/product.js');

$h1 = $data->name;
$review = $data->review;
$review_image = $data->image;
$review_video = $data->video;
$tech = $data->features;
$constr = $data->construct_features;
$exp = $data->experience;
$img = $data->productGalleries;
$videos = $data->productVideos;

$link_manager = '/company/contacts/'.Regions::model()->findByPk(Yii::app()->params['regionId'])->contact->alias;
if ($data->maker)
{
    $maker = Makers::model()->findByPk($data->maker);
}
?>
<div class="product_wrapper">    
    <div class="product_header">
    <?
    if ($maker){
    ?>
        <div class="p_maker_container">
            <div class="p_one_maker">
                <?php echo '<img src="'.$maker->logo.'" alt="'.$maker->logo.'" class="makerid'.$maker->id.'">'; ?>
            </div>
        </div>
    <?}?>
        <h1><?php echo $h1; ?></h1>
        <a href="<?php echo $link_manager;?>" onclick="gaq_push('Товар', 'Связаться с менеджером', <?php echo $data->name; ?> );" title="Связаться с менеджером" class="contact-with-manager-but">Связаться с менеджером</a>
        <a class="download-pdf-but" onclick="gaq_push('Товар', 'Связаться с менеджером', <?php echo $data->name; ?> );" href="/products/getpdf?url=<?php echo Yii::app()->params[currentMenuItem]->id; ?>" title="Скачать описание">Скачать описание</a>
    </div>
    <div class="product_content">
        <ul class="product_tab_button">
            <?php echo  strip_tags($review) ? '<li id="review" class="active_tab">Обзор</li>' : ''; ?>
            <?php echo  strip_tags($tech) ? '<li id="features">Технические характеристики</li>' : ''; ?>
            <?php echo  strip_tags($constr) ? '<li id="construct">Конструкционные особенности</li>' : ''; ?>
            <?php echo  strip_tags($exp) ? '<li id="experience">Опыт эксплуатации</li>' : ''; ?>
            <?php echo  $img ? '<li id="media">Фото и видео</li>' : ''; ?>
            <?php echo Yii::app()->user->checkAccess('readHowToSell')? '<li id="howtosell">Как продавать</li>':''; ?>
        </ul>
        <?php
            if (strip_tags($review)){
                echo '<div id="review_content" class="active_tab">';
                if($review_image){
                    Yii::app()->getController()->renderPartial('review_image', array('data'=>$data));
                }
                if($review_video)
                    echo '<div class="review_video"><iframe width="470" height="313" src="'.$review_video.'" frameborder="0" allowfullscreen></iframe></div>';
                echo '<br class="clr">';
                echo $review;
                echo '</div>';
            }
        ?>
        <?php echo  strip_tags($tech) ? '<div id="features_content">'.$tech.'</div>' : ''; ?>
        <?php echo  strip_tags($constr) ? '<div id="construct_content">'.$constr.'</div>' : ''; ?>
        <?php echo  strip_tags($exp) ? '<div id="experience_content">'.$exp.'</div>' : ''; ?>
        <?php 
            if ($img || $videos)
            {
                echo '<div id="media_content">';
                    if ($img)
                    {
                        echo '<span class="photo_icon">Фото</span>';
                        echo '<div id="gallery">';
                        foreach ($img as $image)
                        {
                            echo '<img src="'.$image->path.'" ';
                            echo 'alt="'.str_replace(array('"', '\'', '/', '\\'), '', $image->alt ? $image->alt: 'Фото '.$data->name).'" ';
                            echo 'title="'.str_replace(array('"', '\'', '/', '\\'), '', $image->title ? $image->title:'Фото '.$data->name).'" ';
                            echo $image->description ? 'data-description="'.str_replace(array('"', '\'', '/', '\\'), '', $image->description).'">':'>';
                        }
                        echo '</div>';
                    }
                    if ($videos)
                    {
                        echo '<span class="video_icon">Видео</span>';
                        echo '<div id="video">';
                        echo "<script>var data = [";
                        foreach ($videos as $video)
                        {
                            echo "{
                                    video: '".$video->video_code."',
                                    title: '".$h1."',
                                    description: '".$video->description."'
                                },";
                        }
                        echo "];
                            Galleria.run('#video', {
                                dataSource: data,
                                height: 750,
                                _toggleInfo: false,
                                debug: false,
                                imageCrop: 'width', 
                                maxVideoSize: '600'

                            });
                            </script>";
                        echo '</div>';
                    }
                echo '</div>';
            }
        ?>
        <?php
        if (Yii::app()->user->checkAccess('readHowToSell'))
        {
            Yii::app()->getController()->renderPartial('how-to-sell/default', array('data'=>$data->howToSells));
        }
        ?>
    </div>
</div>
<script>
    _trackEvent('Товар', 'Связаться с менеджером', <?php echo $data->name; ?>, <?php echo $data->id; ?>, true);
    _trackEvent('Товар', 'Скачать описание', <?php echo $data->name; ?>, <?php echo $data->id; ?>, true);
    function gaq_push(v, a, l){
        if(_gaq.push(['_trackEvent', v, a, l]))
            return true;
    }
</script>