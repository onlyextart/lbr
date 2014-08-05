<?php $this->widget('ext.mightinessWidget.MightinessWidget'); ?>
<?php //echo '<pre>'; var_dump($images); exit; ?>
<div id="mightiness-results">
    <div class="one_banner">
        <h3 val="80-120" label="для 80 л.с.">ДЛЯ 80 ЛОШАДИНЫХ СИЛ</h3>
        <div class="m_image">
            <img src="<?php echo Yii::app()->getBaseUrl(true).$images['80']?>" alt="Изображение товара">
        </div>
    </div>
    <div class="one_banner">
        <h3 val="120-150" label="для 120 л.с.">ДЛЯ 120 ЛОШАДИНЫХ СИЛ</h3>
        <div class="m_image">
            <img src="<?php echo Yii::app()->getBaseUrl(true).$images['120']?>" alt="Изображение товара">
        </div>
    </div>
    <div class="one_banner">
        <h3 val="150-180" label="для 150 л.с.">ДЛЯ 150 ЛОШАДИНЫХ СИЛ</h3>
        <div class="m_image">
            <img src="<?php echo Yii::app()->getBaseUrl(true).$images['150']?>" alt="Изображение товара">
        </div>
    </div>
    <div class="one_banner">
        <h3 val="180-230" label="180-230 л.с.">180 - 230 ЛОШАДИНЫХ СИЛ</h3>
        <div class="m_image">
            <img src="<?php echo Yii::app()->getBaseUrl(true).$images['229']?>" alt="Изображение товара">
        </div>
    </div>
    <div class="one_banner">
        <h3 val="250-350" label="250-350 л.с.">250 - 350 ЛОШАДИНЫХ СИЛ</h3>
        <div class="m_image">
            <img src="<?php echo Yii::app()->getBaseUrl(true).$images['349']?>" alt="Изображение товара">
        </div>
    </div>
    <div class="one_banner">
        <h3 val="350-1000" label="свыше 350 л.с.">СВЫШЕ 350 ЛОШАДИНЫХ СИЛ</h3>
        <div class="m_image">
            <img src="<?php echo Yii::app()->getBaseUrl(true).$images['1000']?>" alt="Изображение товара">
        </div>
    </div>
</div>

<?php
//echo CHtml::link('Добавить в базу значения', '/mightiness/addValues/', array('class'=>'btn-admin'));


