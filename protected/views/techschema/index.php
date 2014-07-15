<!--h1>По технологическому циклу</h1-->
<!--div class="tech-schema-ico-wrapper">
    <div class="tech-schema-ico-label">Варианты отображения:</div> 
    <img src="http://www.lbr.ru/images/ico-mightiness-img-and-text.png" view="1">
    <img src="http://www.lbr.ru/images/ico-mightiness-text.png" view="2">
</div-->
<!--div class="tech-schema-print" style="display: none">
    <div class="tech-schema-ico-label">Распечатать:</div> 
    <img id="tech-schema-print" src="http://www.lbr.ru/images/ico-print.png">
</div-->
<!--div id="tech-schema">
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
</div-->
<div>
    <?php $roots = TechSchema::model()->roots()->findAll(); ?>
    <?php if(!empty($roots)): ?>
    <ul class="tech-menu-wrapper">
    <?php
    foreach ($roots as $root):
        //echo $root->title;
        $cycle = TechSchema::model()->findByPk($root->id);
        $descendants=$cycle->descendants()->findAll();
        $count = count($descendants);
        $width = 123;
        //var_dump();exit;
        $num = 0;
        foreach ($descendants as $descendant):  
            
        //$descendant->menu_img

    echo CHtml::openTag('li', array('name' => $descendant->id));
    /*echo CHtml::openTag(
            'a',
            array(
                //'class'=>$colorCssClass.' ',
                'href'=>'',//$secondLevelItem->path.'/',
            )
    );*/
        //if($count < 3) $width = 122;
        if($num == 0) echo('<span class="menu_group_name" style="width:'.($count*$width).'px; background-color: #'.$root->color.'">'.$root->title.'</span>');
        $num++;
        echo CHtml::image(Yii::app()->getBaseUrl(true). $descendant->menu_img, $descendant->title, array('style' => 'border-color: #'.$root->color));
        
        /*echo CHtml::openTag('span');
            echo $secondLevelItem->name; 
        echo CHtml::closeTag('span');*/
    //echo CHtml::closeTag('a');
    /*$itemsInGroup=1;
    $nextItem = $this->secondLevelItems[($itemNum+$itemsInGroup)];
    while($secondLevelItem->group->id==$nextItem->group->id){
        $itemsInGroup++;
        $nextItem = $this->secondLevelItems[($itemNum+$itemsInGroup)];
    }
    if($itemsInGroup>1 && $secondLevelItem->group->id!==$this->secondLevelItems[($itemNum-1)]->group->id){
        echo('<span class="menu_group_name '.$colorCssClass.'" style="width:'.($itemsInGroup*125).'px;">'.$secondLevelItem->group->name.'</span>');
    }*/
        
    echo CHtml::closeTag('li');
    endforeach;
    endforeach;
    ?>
    </ul>   
    <?php endif; ?>
    <!--ul class="tech-menu-wrapper">
        <li>
            <a href="#">
                <img alt="Широкозахватные технологии почвообработки и сева" src="/images/schema/menu/potato.png">
            </a>
        </li>
    </ul-->
</div>
<div style="clear: both"></div>
<div id="tech-schema-results"></div>
<script>
(function($){
    techSchema.init();
})(jQuery);
</script>