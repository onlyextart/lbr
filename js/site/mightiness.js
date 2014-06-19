var mightiness = {
    init : function(){
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
                mightiness.sendData($('#mightiness-for-tractor').find(':selected').attr('val'), view);
            }
        });
        
        $('#mightiness-for-tractor').change(function() {
            if(!$(this).hasClass('disabled')) {
                var view = parseInt(sessionStorage.getItem('mightinessActiveView'));
                if(!isNaN(view)) view = 1;
                sessionStorage.setItem('mightinessOption', this.value);
                mightiness.sendData($('option:selected', this).attr('val'), view);
            }
        });
    },
    sendData : function(val, view){
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
                document.location.href = mightiness.data.baseUrl + "/selskohozyaystvennaya-tehnika/mightiness/";
            }
        });
    }
}

