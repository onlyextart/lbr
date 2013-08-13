$(document).ready(function(){
    $('.bottom-text div *:nth-child(2)').show();
    $('.bottom-more').click(function(){
        if ($(this).hasClass('show-text')){
            $(this).parent().find('div *').hide();
            $(this).parent().find('div *:first-child').show();
                        $(this).parent().find('div *:nth-child(2)').show();
            $(this).removeClass('show-text').text('Подробнее...');
        }else{
            $(this).parent().find('div *').show();
            $(this).addClass('show-text').text('Скрыть'); 
        }
    })
    
    $('#show_regions_table_button').click(function(e){
        e.preventDefault();
        $.ajax({
            url: '/contacts/getregionstable/',
            type:'POST',
            data:{requesrUri:window.location.pathname.toString()},
            success:function(data){
                $('body').append($(data));
            },
            error:function(){
                alert('Ошибка запроса к серверу.');
            }
        });
    });
    $(document).on('click', '.regions_table_cover', function(){
        $(this).remove();
        $('.regions_table_wrapper').remove();
    });
})