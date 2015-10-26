var lbrAnaliticsTimerStart = new Date().getTime();
var lbrAnaliticsSaved = false;
var lbrAnaliticsBlur = false;

$(window).on('beforeunload', function() {
    if ( !$.browser.mozilla ) {
        $(window).off('unload');
    }
    $(window).off('blur');
    saveAnalitics('bu');  
});

$(window).on('unload', function() {
    if ( !$.browser.mozilla ){
        $(window).off('unload');
    }
    $(window).off('blur');
    saveAnalitics('u');
});


$(window).on('blur', function() { // run to another tab
    saveAnalitics('blur');
});

$(window).on('focus', function() { // come back to tab
   lbrAnaliticsTimerStart = new Date().getTime();
   lbrAnaliticsBlur = false;
});

$(document).ready(function() {
    // start getFilial
    var setFilialName = getCookie('filial');
    if(setFilialName){
        $('#show_regions_table_button').html(setFilialName).attr('title', setFilialName);
    }
    // end getFilial
    
    $("#mightiness-results .m_caption p").dotdotdot({
        ellipsis : '... ',
        wrap     : 'letter',
    });

    $('body').append('<div id="choose_region"></div>');
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
            success:function(data) {
                $('#choose_region').append("<div id='overlay' style='height: " + $(document).height() +"px;'/>").append($(data));
                $('.region-select-list').remove();
                $('#overlay').click(function() {
                   $('#overlay').remove();
                   $('.regions_table_wrapper').remove();
                });
            },
            error:function(){
                console.log(window.location.pathname.toString());
                alert('Ошибка запроса к серверу.');
            }
        });
    });
    
    $('#show_regions_table_button_arrow').click(function(e){
        e.preventDefault();
        $.ajax({
            url: '/contacts/getregionstable/',
            type:'POST',
            data:{requesrUri:window.location.pathname.toString()},
            success:function(data) {
                $('#choose_region').append("<div id='overlay' style='height: " + $(document).height() +"px;'/>").append($(data));
                $('.region-select-list').remove();
                $('#overlay').click(function() {
                   $('#overlay').remove();
                   $('.regions_table_wrapper').remove();
                });
            },
            error:function(){
                alert('Ошибка запроса к серверу.');
            }
        });
    });
	
    $('#choose_region').on('click', 'a', function() {
//        if(setCookie('region', $(this).attr('contact'), '3', '/', '.lbr') && setCookie('filial', $(this).attr('title'), '3', '/', '.lbr')) {
//        if(setCookie('region', $(this).attr('contact'), '3', '/', '.lbr.ru') && setCookie('filial', $(this).attr('title'), '3', '/', '.lbr.ru')) {
        if(setCookie('region', $(this).attr('contact'), '3', '/', '.lbr.ru') && setCookie('filial', $(this).attr('title'), '3', '/', '.lbr.ru')) {
           return true;
        }
    });
	
    $(document).on('click', '.regions_table_cover', function() {
        $(this).remove();
        $('.regions_table_wrapper').remove();
    });
    
    // Webcom asked
    $(".ext2").each(function(){
	   $(this).replaceWith('<a href="'+$(this).attr("data-key")+'">'+$(this).html()+'</a>');
    });
});

function setCookie(name, value, expires, path, domain, secure) {
    if (!name || !value) return false;
    var str = name + '=' + encodeURIComponent(value);
    var today = new Date();
    today.setTime( today.getTime() );
    if ( expires ) {
            expires = expires * 1000 * 60 * 60 * 24;
    }
    var expires_date = new Date( today.getTime() + (expires) );
    if (expires) str += '; expires=' + expires_date.toGMTString();
    if (path) str += '; path=' + path;
    if (domain) str += '; domain=' + domain;
    if (secure) str += '; secure';

    document.cookie = str;
    return true;
}

function getCookie(name) {
    var pattern = "(?:; )?" + name + "=([^;]*);?";
    var regexp = new RegExp(pattern);
    if (regexp.test(document.cookie)){
        return decodeURIComponent(RegExp["$1"]);
    }
    return false;
}

function saveAnalitics(p)
{   
    if(!lbrAnaliticsSaved) {
        var url = window.location.pathname;
        var time = (new Date().getTime() - lbrAnaliticsTimerStart)/1000; // in seconds
        var title = $('#content h1').text();

        $.ajax({
            url: '/analitics/save/',
            type: 'POST',
            dataType: "json",
            data: {
                time: time,
                url: url,
                title: title
            },
            success: function() {
                if(p == 'blur') lbrAnaliticsBlur = true;
                else lbrAnaliticsSaved = true;
            }
        });
    }
}