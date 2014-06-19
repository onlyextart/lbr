<h1>По технологическому циклу</h1>
<div class="tech-schema-ico-wrapper">
    <div class="tech-schema-ico-label">Варианты отображения:</div> 
    <img src="http://www.lbr.test/images/ico-mightiness-img-and-text.png" view="1">
    <img src="http://www.lbr.test/images/ico-mightiness-text.png" view="2">
</div>
<div class="tech-schema-print" style="display: none">
    <div class="tech-schema-ico-label">Распечатать:</div> 
    <img id="tech-schema-print" src="http://www.lbr.test/images/ico-print.png">
</div>
<div id="tech-schema">
     <?php $roots = TechSchema::model()->roots()->findAll(); ?>
     <?php if(!empty($roots)): ?>
        <?php foreach ($roots as $root): ?>
        <div>
            <span><?php echo $root->title; ?></span>
            <?php $cycle = TechSchema::model()->findByPk($root->id);
               $descendants=$cycle->descendants()->findAll();
               foreach ($descendants as $descendant):       
            ?>
            <p><?php echo CHtml::CheckBox('chk_group['.$descendant->id.']') . $descendant->title ?></p>
            <?php endforeach;?>
        </div>
        <?php endforeach;?>
    <?php endif; ?>
    <div><?php echo CHtml::button('Показать',array('id'=>'load-tech-schema', 'class'=>'btn')); ?></div>
    <div style="clear: both"></div>
</div>
<div id="tech-schema-results"></div>
<script>
(function($){
    techSchema.init();
})(jQuery);
</script>