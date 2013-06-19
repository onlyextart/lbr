$(document).ready(function(){
    $('#query').focus(function(){
        $(this).removeClass('nofocus');
        $('.quick-result').fadeIn(200);
        if ($(this).val()=='' || $(this).val()=='Найти на сайте...')
            $(this).val('');
    })
    $('#query').blur(function(){
        $('.quick-result').fadeOut(200);
        if ($(this).val()=='' || $(this).val()=='Найти на сайте...' || $(this).val()==' ')
            $(this).addClass('nofocus').val('Найти на сайте...')
    })
    var ajax = new AjaxQuickSearch();
    ajax.AddingEventHandlers();
})

function AjaxQuickSearch(){
    
    var _self = this;
    
    this.Option = {
        url: '/search/quickajaxresult/',
        container: '.quick-result',
        input: '#query',
        containerMethod: '.search-metod'
    }
    this.AddingEventHandlers = function(){
        $(_self.Option.input).keyup(function(){
            _self.AjaxRequest($(this).val());
        })
        $(_self.Option.container).on('click', '> *', function(){
            if($(this).context.localName!='A' && $(this).context.localName!='a'){
                $(_self.Option.input).val($(this).text());
                $('form').submit();
            }
        })
    }
    
    this.AjaxRequest = function(query){
        $.ajax({
            'url': _self.Option.url,
            'data': {q: query, ajax: true},
            'success': function(html){_self.AjaxSuccess(html);}
        })
    }
    
    this.AjaxSuccess = function(html){
         $(_self.Option.container).html(html);
    }
    
}

function WordHighlighting(){
    
}