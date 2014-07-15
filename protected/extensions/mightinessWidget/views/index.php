<!--div class="mightinessSelector">
    Выберите мощность:
    <select id="mightiness-for-tractor">
        <option value="0" val="choice">Выберите мощность</option>
        <option value="1" val="63">До 63 л.с.</option>
        <option value="2" val="63-120">63-120 л.с.</option>
        <option value="3" val="120-150">120-150 л.с.</option>
        <option value="4" val="150-163">150-163 л.с.</option>
        <option value="5" val="163-210">163-210 л.с.</option>
        <option value="6" val="210-350">210-350 л.с.</option>
        <option value="7" val="350-10000">Свыше 350 л.с.</option>
    </select>
</div-->

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
<!--div class="mightiness-ico-wrapper">
    <img view="1" src="<?php //echo Yii::app()->getBaseUrl(true).'/images/ico-mightiness-imgs-and-text.png'; ?>">
    <img view="2" src="<?php //echo Yii::app()->getBaseUrl(true).'/images/ico-mightiness-img-and-text.png'; ?>">
    <img view="3" src="<?php //echo Yii::app()->getBaseUrl(true).'/images/ico-mightiness-text.png'; ?>">
</div-->
<div style="clear: both"></div>
<script>
    $(function() {
        mightiness.data = {
            baseUrl : '<?php echo Yii::app()->getBaseUrl(true) ?>',
        };
        mightiness.init();
    });
</script>


