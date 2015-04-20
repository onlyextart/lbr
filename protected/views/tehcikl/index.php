<div id="main_menu_tech_schema">
    <?php if(!empty($roots)): ?>
    <ul class="tech-menu-wrapper">
    <?php
    foreach ($roots as $root):
        if($root->title == 'Логистика и обработка зерновых'):
            /*$cycle = TechSchema::model()->findByPk($root->id);
            $descendants=$cycle->descendants()->findAll();
            $count = count($descendants);
            $width = 125;
            $num = 0;
            foreach ($descendants as $descendant):
                echo CHtml::openTag('li', array('name' => $descendant->id));
                if($num == 0) echo('<span class="menu_group_name" style="width:500px; background-color: #'.$root->color.'">'.$root->title.'</span>');
                $num++;
                $active = ($descendant->id == $activeId)?'active':'';
                $href = Yii::app()->getBaseUrl(true).'/selskohozyaystvennaya-tehnika/tehcikl/'.$url[$descendant->title].'/';
                echo '<a class="tech-img-wrapper '.$active.'" style="height: 95px; width: 121px; border-color: #'.$root->color.'" href="'.$href.'">';
                if(!empty($descendant->menu_img)) echo CHtml::image(Yii::app()->getBaseUrl(true).$descendant->menu_img, $descendant->title);
                else echo '<div style="width: 123px; height: 100px; line-height: 100px; vertical-align: middle; text-align: center">'.$descendant->title.'</div>';
                echo '</a>';
                echo CHtml::closeTag('li');
            endforeach;*/
        else:
            $cycle = TechSchema::model()->findByPk($root->id);
            $descendants=$cycle->descendants()->findAll();
            $count = count($descendants);
            $width = 125;
            $num = 0;
            foreach ($descendants as $descendant):
                echo CHtml::openTag('li', array('name' => $descendant->id));
                if($num == 0) echo('<span class="menu_group_name" style="width:'.($count*$width).'px; background-color: #'.$root->color.'">'.$root->title.'</span>');
                $num++;
                $active = ($descendant->id == $activeId)?'active':'';
                $href = Yii::app()->getBaseUrl(true).'/selskohozyaystvennaya-tehnika/tehcikl/'.$url[$descendant->title].'/';
                echo '<a class="tech-img-wrapper '.$active.'" style="height: 95px; width: 121px; border-color: #'.$root->color.'" href="'.$href.'">';
                if(!empty($descendant->menu_img)) echo CHtml::image(Yii::app()->getBaseUrl(true).$descendant->menu_img, $descendant->title);
                else echo '<div style="width: 123px; height: 100px; line-height: 100px; vertical-align: middle; text-align: center">'.$descendant->title.'</div>';
                echo '</a>';
                echo CHtml::closeTag('li');
            endforeach;
        endif;
    endforeach;
    ?>
    </ul>   
    <?php endif; ?>
</div>
<div style="clear: both"></div>
<h1 class="tech-schema-h"><?php echo $title ?></h1>
<div id="tech-schema-results">
    <?php echo $data;?>
</div>

<?php
//echo CHtml::link('Обновить значения', '/techschema/addValues/', array('class'=>'btn-admin'));