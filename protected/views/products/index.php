<?php
Yii::app()->clientScript->registerCssFile('/js/galleria/themes/classic/galleria.classic.css');
Yii::app()->clientScript->registerScriptFile('/js/galleria/galleria-1.2.9.min.js');
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
?>
<h1><? echo $h1; ?></h1>
<div class="product_content">
    <ul class="product_tab_button">
        <? echo  $review ? '<li id="review" class="active_tab">Обзор</li>' : ''; ?>
        <? echo  $tech ? '<li id="features">Технические характеристики</li>' : ''; ?>
        <? echo  $constr ? '<li id="construct">Конструкционные особенности</li>' : ''; ?>
        <? echo  $exp ? '<li id="experience">Опыт эксплуатации</li>' : ''; ?>
        <? echo  $img ? '<li id="media">Фото и видео</li>' : ''; ?>
    </ul>
    <?
        if ($review){
            echo '<div id="review_content" class="active_tab">';
            if($review_image){
                Yii::app()->getController()->renderPartial('review_image', array('data'=>$data));
            }
            if($review_video)
                echo '<div class="review_video"><iframe width="470" height="300" src="'.$review_video.'" frameborder="0" allowfullscreen></iframe></div>';
            echo '<br class="clr">';
            echo $review;
            echo '</div>';
        }
    ?>
    <? echo  $tech ? '<div id="features_content">'.$tech.'</div>' : ''; ?>
    <? echo  $constr ? '<div id="construct_content">'.$constr.'</div>' : ''; ?>
    <? echo  $exp ? '<div id="experience_content">'.$exp.'</div>' : ''; ?>
    <? 
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
                        echo $image->description ? 'data-description="'.str_replace(array('"', '\'', '/', '\\'), '', $image->description).'">':'';
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
</div>