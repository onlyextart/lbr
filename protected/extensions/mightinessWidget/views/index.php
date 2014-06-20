<div class="mightinessSelector">
    Выберите мощность:
    <select id="mightiness-for-tractor">
        <option value="0" val="choice">Выберите мощность</option>
        <option value="1" val="80">До 80 л.с.</option>
        <option value="2" val="80-120">80-120 л.с.</option>
        <option value="3" val="120-150">120-150 л.с.</option>
        <option value="4" val="150-180">150-180 л.с.</option>
        <option value="5" val="180-210">180-210 л.с.</option>
        <option value="6" val="210-350">210-350 л.с.</option>
        <option value="7" val="350-10000">Свыше 350 л.с.</option>
    </select>
</div>
<div class="mightiness-ico-wrapper">
    <img view="1" src="<?php echo Yii::app()->getBaseUrl(true).'/images/ico-mightiness-imgs-and-text.png'; ?>">
    <img view="2" src="<?php echo Yii::app()->getBaseUrl(true).'/images/ico-mightiness-img-and-text.png'; ?>">
    <img view="3" src="<?php echo Yii::app()->getBaseUrl(true).'/images/ico-mightiness-text.png'; ?>">
</div>
<div style="clear: both"></div>
<script>
    $(function() {
        mightiness.data = {
            baseUrl : '<?php echo Yii::app()->getBaseUrl(true) ?>',
        };
        mightiness.init();
    });
</script>


