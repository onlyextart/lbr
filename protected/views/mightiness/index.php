<div id="main_menu_mightiness">
    <ul class="mightiness-menu">
        <li class="<?php echo ($active == 80)?'active':''?>">
            <a href="/selskohozyaystvennaya-tehnika/mightiness/sort/mashiny-dlya-traktora-80-l.s./"><img height="63" alt="Трактор" src="<?php echo Yii::app()->request->baseUrl; ?>/images/mightiness/menu_img.png"/>
            <div class="dir">
                для 80 л.с.
            </div>
            </a>
        </li>
        <li class="<?php echo ($active == 120)?'active':''?>">
            <a href="/selskohozyaystvennaya-tehnika/mightiness/sort/mashiny-dlya-traktora-120-l.s./"><img height="63" alt="Трактор" src="<?php echo Yii::app()->request->baseUrl; ?>/images/mightiness/menu_img.png"/>
            <div class="dir">
                для 120 л.с.
            </div>
            </a>
        </li>
        <li class="<?php echo ($active == 150)?'active':''?>">
            <a href="/selskohozyaystvennaya-tehnika/mightiness/sort/mashiny-dlya-traktora-150-l.s./"><img height="63" alt="Трактор" src="<?php echo Yii::app()->request->baseUrl; ?>/images/mightiness/menu_img.png"/>
            <div class="dir">
                для 150 л.с.
            </div>
            </a>
        </li>
        <li class="<?php echo ($active == 180)?'active':''?>">
            <a href="/selskohozyaystvennaya-tehnika/mightiness/sort/mashiny-dlya-traktora-180-230-l.s./"><img height="63" alt="Трактор" src="<?php echo Yii::app()->request->baseUrl; ?>/images/mightiness/menu_img.png"/>
            <div class="dir">
                180 - 230 л.с.
            </div>
            </a>
        </li>
        <li class="<?php echo ($active == 250)?'active':''?>">
            <a href="/selskohozyaystvennaya-tehnika/mightiness/sort/mashiny-dlya-traktora-250-350-l.s./"><img height="63" alt="Трактор" src="<?php echo Yii::app()->request->baseUrl; ?>/images/mightiness/menu_img.png"/>
            <div class="dir">
                250 - 350 л.с.
            </div>
            </a>
        </li>
        <li class="<?php echo ($active == 350)?'active':''?>">
            <a href="/selskohozyaystvennaya-tehnika/mightiness/sort/mashiny-dlya-traktora-svyshe-350-l.s./"><img height="63" alt="Трактор" src="<?php echo Yii::app()->request->baseUrl; ?>/images/mightiness/menu_img.png"/><div style="clear: both"></div>
            <div class="dir">
                свыше 350 л.с.
            </div>
            </a>
        </li>
    </ul>
    <div class="hit-label"><img width="170" alt="Хиты продаж" src="<?php echo Yii::app()->request->baseUrl; ?>/images/mightiness/label_hit.png"/></div>
    <div style="clear: both"></div>
</div>
<h1>По мощности трактора</h1>
<div id="mightiness-results">
    <?php echo $data ?>
</div>

<?php
//echo CHtml::link('Обновить значения', '/mightiness/addValues/', array('class'=>'btn-admin'));


