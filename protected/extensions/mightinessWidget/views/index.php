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
        var activeStatus = parseInt(sessionStorage.getItem('mightinessOption'));
        $('#mightiness-for-tractor').val(activeStatus);
        var activeView = parseInt(sessionStorage.getItem('mightinessActiveView'));
        if(!isNaN(activeView)) $('.mightiness-ico-wrapper img[view='+activeView+']').addClass('active');
        else $('.mightiness-ico-wrapper img[view=1]').addClass('active');
        
        $('.mightiness-ico-wrapper img').click(function(){
            if(!$(this).hasClass('disabled')){
                var view = $(this).attr('view');
                sessionStorage.setItem('mightinessActiveView', view);
                $('.mightiness-ico-wrapper img.active').removeClass('active');    
                $(this).addClass('active');
                sendData($('#mightiness-for-tractor').find(':selected').attr('val'), view);
            }
        });
        
        $('#mightiness-for-tractor').change(function() {
            if(!$(this).hasClass('disabled')) {
                var view = parseInt(sessionStorage.getItem('mightinessActiveView'));
                if(!isNaN(view)) view = 1;
                sessionStorage.setItem('mightinessOption', this.value);
                sendData($('option:selected', this).attr('val'), view);
            }
        });
        
        function sendData(val, view)
        {
            $('.mightiness-ico-wrapper img').each(function(){
                $(this).addClass('disabled');
            });
            $('#mightiness-for-tractor').addClass('disabled');
                
            var from = to = '';
            if(val != 'choice') {
                var index = val.indexOf('-');
                from = val;
                if(index > -1) {
                    from = val.substring(0, index);
                    to = val.substring(index+1);
                }
            }
            
            $.ajax({
                type: "POST",
                url: "/mightiness/saveSelectedOption/",
                data:{
                    from: from,
                    to: to,
                    view: view,
                },
                dataType: 'json',
                cache: false,
                success: function(response) {
                    document.location.href = "<?php echo Yii::app()->getBaseUrl(true) ?>/selskohozyaystvennaya-tehnika/mightiness/";
                    
                }
            });
        }
    });
</script>

