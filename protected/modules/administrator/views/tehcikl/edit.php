 <script>
$(function() {
//$( "#accordion" ).accordion();
$("#accordion").accordion({ header: "> h3" , collapsible: true, active:false, heightStyle: "content"});
});
</script>
<div class="tech-cikl-wrapper">
    <h1><?php echo 'Редактирование технологического цикла "'.$cycleName.'"'; ?></h1>
    <div id="accordion">
    <?php
    //echo '<pre>';
    //var_dump($productList);exit;
    foreach($productList[$cycleName] as $id => $products) {
        $stageId = TechSchemaStage::model()->findByPk($id)->stage_id;
        $label = TechStage::model()->findByPk($stageId)->title;
        echo '<h3>'.$label.'</h3>';
        echo '<div>';
        echo '<div class="save-tech-cikl-wrapper">
                <a class="save-tech-cikl">
                    <span class="icon"></span>
                    <span class="btn-text">Сохранить</span>
                </a>
            </div>'
        ;
        echo '<ul class="tech-cikl">';
        $count = 0;
        foreach($products as $product) {
           //if(!empty($product)) 
           //else 'Нет продуктов';
           $count++;
           $pos = (!empty($product['pos'])) ? $product['pos']: $count;       
           echo '<li stage-id="'.$product['stage-id'].'" prod-id="'.$product['id'].'" pos="'.$pos.'"><a href="'.$product['path'].'" target="_blank">'.$product['name'].'</a><a class="up">Up</a><a class="down">Down</a></li>';
        }
        echo '</ul>';
        echo '</div>';
    }
    ?>
    </div>
</div>

