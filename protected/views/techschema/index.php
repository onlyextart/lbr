<div>
    <?php $roots = TechSchema::model()->roots()->findAll(); ?>
    <?php if(!empty($roots)): ?>
    <ul class="tech-menu-wrapper">
    <?php
    foreach ($roots as $root):
        $cycle = TechSchema::model()->findByPk($root->id);
        $descendants=$cycle->descendants()->findAll();
        $count = count($descendants);
        $width = 123;
        $num = 0;
        foreach ($descendants as $descendant):  
            echo CHtml::openTag('li', array('name' => $descendant->id));
            if($num == 0) echo('<span class="menu_group_name" style="width:'.($count*$width).'px; background-color: #'.$root->color.'">'.$root->title.'</span>');
            $num++;
            echo CHtml::image(Yii::app()->getBaseUrl(true). $descendant->menu_img, $descendant->title, array('style' => 'border-color: #'.$root->color));
            echo CHtml::closeTag('li');
        endforeach;
    endforeach;
    ?>
    </ul>   
    <?php endif; ?>
</div>
<div style="clear: both"></div>
<div id="tech-schema-results"></div>
<script>
(function($){
    techSchema.init();
})(jQuery);
</script>

<?php
//echo CHtml::link('Обновить значения', '/techschema/addValues/', array('class'=>'btn-admin'));