<h1>Аналитика</h1>

<?php $form=$this->beginWidget('CActiveForm', array(
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
)); ?>
<div class="analitics">
    <!--div class="info">
        <ul class="info-list">
            <li>При необходимости измените параметры выбора</li>
            <li>
                <span>Период</span>
                <span><?php //echo $form->textField($model, 'date_from'); ?> - <?php //echo $form->textField($model, 'date_to'); ?></span>
            </li>
            <li>
                <?php echo CHtml::button('Скачать Excel', array('class'=>'btn-admin')); ?>
            </li>
        </ul>
    </div-->    
    <?php echo CHtml::button('Скачать Excel', array('class'=>'btn btn-green')); ?>
</div>
<?php $this->endWidget(); ?> 
<script>
    /*$.datepicker.regional['ru'] = {
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

    $( "#StatisticsForm_date_from" ).datepicker({
        dateFormat: 'dd-mm-yy',
    });

    $( "#StatisticsForm_date_to" ).datepicker({
        dateFormat: 'dd-mm-yy',
    });*/

    $( ".analitics .btn" ).click(function() {
        /*var from = $('#StatisticsForm_date_from').val();
        var to = $('#StatisticsForm_date_to').val();
        var type = $('#StatisticsForm_type').val();
        window.location.replace('/admin/statistics/getExcel/from/'+from+'/to/'+to+'/type/'+type);*/
        window.location.replace('/administrator/analitics/getExcel');
    });
</script>


