<h1>Аналитика посещения страниц сайта</h1>

<?php 
    $form=$this->beginWidget('CActiveForm', array(
        'id'=>'analitics-form',
        'enableClientValidation' => true,        
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
            'validateOnChange' => true,
            'afterValidate'=>'js:function( form, data, hasError ) 
            {     
                if( hasError ){
                    return false;
                }
                else{
                    return true;
                }
            }'
        ),
    )); 
    $currentMonth = date('d-m-Y');
    $prevMonth = date('d-m-Y', strtotime($currentMonth.' -1 months'));
?>
<div class="analitics">
    <div class="info">
        <ul class="info-list">
            <li>При необходимости измените период выборки</li>
            <li>
                <span>Период</span>
                <span><?php echo CHtml::textField('from', $prevMonth); ?> - <?php echo CHtml::textField('to', $currentMonth); ?></span>
            </li>
            <li>
                <?php echo CHtml::button('Скачать Excel', array('class'=>'btn btn-green')); ?>
            </li>
        </ul>
    </div>
    <div class="params">
        <ul class="info-list">
            <li>Используемые параметры</li>
            <li>
                <div><b>ct</b> - customer id, id клиента (аналог используемому utm_content)</div>
                <div>При использовании следует оборачивать в следующую конструцию SecurityController::encrypt( ct )</div>
            </li>
            <li>
                <b>sb</b> - subscription, id подписки (аналог используемому utm_source)
            </li>
            <li>
                <b>lk</b> - link id (аналог используемому utm_compaign)
            </li>
        </ul>
    </div>
</div>
<?php $this->endWidget(); ?> 
<script>
    $.datepicker.regional['ru'] = {
        closeText: 'Закрыть',
        prevText: '&#x3c;Пред',
        nextText: 'След&#x3e;',
        currentText: 'Сегодня',
        monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
        monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
        dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
        dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
        dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
        dateFormat: 'dd.mm.yy',
        firstDay: 1,
        isRTL: false,
    };
    $.datepicker.setDefaults($.datepicker.regional['ru']);

    $( "#from" ).datepicker({
        dateFormat: 'dd-mm-yy',
    });

    $( "#to" ).datepicker({
        dateFormat: 'dd-mm-yy',
    });

    $( ".analitics .btn" ).click(function() {
        var from = $('#from').val();
        var to = $('#to').val();
        window.location.replace('/administrator/analitics/getExcel/from/'+from+'/to/'+to);
    });
</script>


