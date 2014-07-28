<ul class="mightiness-menu">
    <li val="80-120">
        <div><img height="63" alt="Трактор" src="<?php echo Yii::app()->request->baseUrl; ?>/images/mightiness/menu_img.png"/></div>
        <div class="dir">
            для 80 л.с.
        </div>
    </li>
    <li val="120-150">
        <div><img height="63" alt="Трактор" src="<?php echo Yii::app()->request->baseUrl; ?>/images/mightiness/menu_img.png"/></div>
        <div class="dir">
            для 120 л.с.
        </div>
    </li>
    <li val="150-180">
        <div><img height="63" alt="Трактор" src="<?php echo Yii::app()->request->baseUrl; ?>/images/mightiness/menu_img.png"/></div>
        <div class="dir">
            для 150 л.с.
        </div>
    </li>
    <li val="180-230">
        <div><img height="63" alt="Трактор" src="<?php echo Yii::app()->request->baseUrl; ?>/images/mightiness/menu_img.png"/></div>
        <div class="dir">
            180 - 230 л.с.
        </div>
    </li>
    <li val="250-350">
        <div><img height="63" alt="Трактор" src="<?php echo Yii::app()->request->baseUrl; ?>/images/mightiness/menu_img.png"/></div>
        <div class="dir">
            250 - 350 л.с.
        </div>
    </li>
    <li val="350-1000">
        <div><img height="63" alt="Трактор" src="<?php echo Yii::app()->request->baseUrl; ?>/images/mightiness/menu_img.png"/><div style="clear: both"></div></div>
        <div class="dir">
            свыше 350 л.с.
        </div>
    </li>
</ul>
<!--img width="200" alt="Хиты продаж" src="<?php //echo Yii::app()->request->baseUrl; ?>/images/mightiness/label_hit.png"/-->
<div class="hit-label"><img width="170" alt="Хиты продаж" src="<?php echo Yii::app()->request->baseUrl; ?>/images/mightiness/label_hit.png"/></div>
<div style="clear: both"></div>
<script>
    $(function() {
        mightiness.data = {
            baseUrl : '<?php echo Yii::app()->getBaseUrl(true) ?>',
        };
        mightiness.init();
    });
</script>


