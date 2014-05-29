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
/////
//$productRange = ProductRange::model()->find(array('condition'=>'product_id=:id', 'params'=>array(':id'=>$data->id)));
$productRange = Yii::app()->db->createCommand()
    ->select('id, title, reduction')
    ->from('product_range')
    ->where('product_id = '.$data->id)
    ->order('title')
    ->queryAll()
;
$link_manager = '/company/contacts/'.Regions::model()->findByPk(Yii::app()->params['regionId'])->contact->alias;
if ($data->maker)
{
    $maker = Makers::model()->findByPk($data->maker);
}
function sortByTechCharTitle($a, $b)
{
    return strnatcmp($a['techCharTitle'], $b['techCharTitle']);
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
        <a href="<?php echo $link_manager;?>" onclick="_gaq.push(['_trackEvent', 'Товар', 'Связаться с менеджером', '<?php echo $data->name; ?>', '<?php echo $data->id; ?>']);" title="Связаться с менеджером" class="contact-with-manager-but">Связаться с менеджером</a>
        <a class="download-pdf-but" onclick="_gaq.push(['_trackEvent', 'Товар', 'Скачать описание', '<?php echo $data->name; ?>', '<?php echo $data->id; ?>']);" href="/products/getpdf?url=<?php echo Yii::app()->params[currentMenuItem]->id; ?>" title="Скачать описание">Скачать описание</a>
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
        <?php // echo  strip_tags($tech) ? '<div id="features_content">'.$tech.'</div>' : ''; ?>
        <?php // вынести в отдельную функцию !!!!
            if(!empty($productRange)) {
                echo '<div id="features_content">';
                echo '<p>
                    <strong style="color: #008080; font-family: arial, helvetica, sans-serif; font-size: 12pt; line-height: 1.3em;">
                    <span style="color: #ff6600;">
                        <strong>Технические характеристики</strong><br>
                    </span>
                    </strong>
                </p>';
                echo '<table class="content_TABLE" border="1" style="border-color: #000000; border-width: 1px;">
                         <tbody>'
                ;
                echo '<tr style="background-color: #f4f4f4;">';
                echo '<td style="text-align: center;">
                    <span style="font-size: small;">
                        <strong><span style="font-family: arial, helvetica, sans-serif;">Модель</span></strong>
                    </span>
                </td>';
                foreach($productRange as $childRange) {
                    echo '<td style="text-align: center;">
                            <span style="font-size: small;">
                                <strong><span style="font-family: arial, helvetica, sans-serif;">'.$childRange['title'].'</span></strong>
                            </span>
                        </td>'
                    ;
                }
                echo '</tr>';
                
                $allProductTechCharacteristics = array();
                $allChildProducts = array();
                $techCharacteristics = ProductTechCharacteristic::model()->findAll(array('condition'=>'product_id=:id', 'params'=>array(':id'=>$data->id)));
                foreach($techCharacteristics as $characteristic) {
                    $measure = Measure::model()->findByPk($characteristic->measure_id);
                    $techChar = TechCharacteristic::model()->findByPk($characteristic->tech_id);
                    $allProductTechCharacteristics[$techChar->id]['techCharTitle'] = $techChar->title;
                    $allProductTechCharacteristics[$techChar->id]['measureTitle'] = $measure->title;
                    $allProductTechCharacteristics[$techChar->id]['measureReduction'] = $measure->reduction;
                    $allProductTechCharacteristics[$techChar->id]['mId'] = $characteristic->measure_id;
                }
                uasort($allProductTechCharacteristics, 'sortByTechCharTitle'); 
                foreach($allProductTechCharacteristics as $techCharId=>$techChar)
                {
                    $prodTChar = ProductTechCharacteristic::model()->find(array('condition'=>'tech_id=:tId and product_id=:id', 'params'=>array(':tId'=>$techCharId, ':id'=>$data->id)));
                    $title = $techChar['techCharTitle'];
                    if(!empty($techChar['measureReduction'])) $title .= ', '.$techChar['measureReduction'];
                    
                    echo '<tr>';
                    echo '<td><span style="font-family: arial, helvetica, sans-serif; font-size: small;">'.$title.'</span></td>';
                    foreach($productRange as $childRange) {
                        $techValue = ProductRangeValue::model()->find(array('condition'=>'tech_id=:tId and range_id=:id', 'params'=>array(':tId'=>$prodTChar->id, ':id'=>$childRange['id'])));
                        $val = '';
                        if(!empty($techValue->val_int))$val = ProductRangeValue::floatNumber($techValue->val_int);
                        else if(!empty($techValue->val_text)) $val = $techValue->val_text;
                        echo '<td style="text-align: center;">
                            <span style="font-family: arial, helvetica, sans-serif; font-size: small;">'.
                            $val.'</span>
                            </td>'
                        ;
                    }
                    echo '</tr>';
                }
                
                echo '</tbody></table>';
                echo '</div>';
            } 
            
            //echo  strip_tags($tech) ? '<div id="features_content">'.$tech.'</div>' : ''; 
        ?>
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