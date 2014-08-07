<div id="main_menu_tech_schema">
    <?php $roots = TechSchema::model()->roots()->findAll(); ?>
    <?php if(!empty($roots)): ?>
    <ul class="tech-menu-wrapper">
    <?php
    foreach ($roots as $root):
        $cycle = TechSchema::model()->findByPk($root->id);
        $descendants=$cycle->descendants()->findAll();
        $count = count($descendants);
        $width = 125;
        $num = 0;
        foreach ($descendants as $descendant):  
            echo CHtml::openTag('li', array('name' => $descendant->id));
            if($num == 0) echo('<span class="menu_group_name" style="width:'.($count*$width).'px; background-color: #'.$root->color.'">'.$root->title.'</span>');
            $num++;
            echo '<div class="tech-img-wrapper" style="height: 96px; width: 121px; border-color: #'.$root->color.'">';
            if(!empty($descendant->menu_img)) echo CHtml::image(Yii::app()->getBaseUrl(true).$descendant->menu_img, $descendant->title);
            else echo '<div style="width: 123px; height: 100px; line-height: 100px; vertical-align: middle; text-align: center">'.$descendant->title.'</div>';
            echo '</div>';
            echo CHtml::closeTag('li');
        endforeach;
    endforeach;
    ?>
    </ul>   
    <?php endif; ?>
</div>
<div style="clear: both"></div>
<h1 class="tech-schema-h">По технологическому циклу</h1>
<div id="tech-schema-results"></div>
<script>
(function($){
    techSchema.init();
})(jQuery);
</script>

<?php
echo CHtml::link('Обновить значения', '/techschema/addValues/', array('class'=>'btn-admin'));