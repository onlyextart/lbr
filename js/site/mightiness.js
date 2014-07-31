var mightiness = {
    init : function(){
        var activeView = parseInt(sessionStorage.getItem('mightinessActiveView'));
        if(!isNaN(activeView)) $('.mightiness-ico-wrapper img[view='+activeView+']').addClass('active');
        else $('.mightiness-ico-wrapper img[view=1]').addClass('active');
        
        $('.mightiness-menu li').click(function() {
            if(!$(this).hasClass('disabled')) {  
                $('.mightiness-menu li').removeClass('active');
                $(this).addClass('active');
                $('#mightiness-results').html('<div class="techschema-load">Загрузка <img src="/images/loading-small.gif"></div>');
                mightiness.sendData($(this).attr('val'));
            }
        });
    },
    sendData : function(val, view){
        $('.mightiness-menu li').each(function(){
            $(this).addClass('disabled');
        });
        $('.mightiness-menu').prop('disabled', 'disabled');
        var from = to = '';
        //if(val != 'choice') {
            var index = val.indexOf('-');
            from = val;
            if(index > -1) {
                from = val.substring(0, index);
                to = val.substring(index+1);
            }
        //}
        $.ajax({
            type: "POST",
            url: "/mightiness/loadProducts/",
            data:{
                from: from,
                to: to,
                //view: view,
            },
            dataType: 'json',
            cache: false,
            success: function(response) {
                $('#mightiness-results').html(response.data);
                $('.mightiness-menu li').each(function(){
                    $(this).removeClass('disabled');
                });
                $('.mightiness-menu').prop('disabled', false);
            }
        });
    }
}

