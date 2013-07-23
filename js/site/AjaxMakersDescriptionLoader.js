function AjaxMakersDescriptionLoader(){
    var _self = this;
    var _left = 0;
    var _top = 0;
    var _width = 0;
    
    this.Option = {
        makerContainer : ".b_makers",
        oneMaker : ".b_one_maker",
        idTag : "img", 
        idAttr : "class",
        maxContainerWidth: 1000,
        replacementAttr : "makerid",
        loadUrl : "/xbanner/ajaxMaker/",
        descContainerId: "makerDescription"
    }
    this.AddingEventHandlers = function()
    {
        $(_self.Option.oneMaker).click(function(){
            _left = $(this).offset().left;
            _top = $(this).offset().top;
            _width = $(this).innerWidth();
            _self.LoadDesc(parseInt($(_self.Option.idTag, this).attr(_self.Option.idAttr).replace(_self.Option.replacementAttr, "")));
        })
        $(window).resize(function(){_self.Positioning()});
    }
    // Показ блока описания производителя
    this.ShowDesc = function(html, id)
    {
        if (html)
        // Заново генерирует блок, если он не того же производителя, что и на данный момент
        {
            if(_self.ClearDesc()){
                if($('body').append(_self.GetHtml(html, id)))
                        _self.Positioning();
            }
        }
        else
        // Показывает блок, если он уже существует
        {
            $('#'+_self.Option.descContainerId).addClass('showMaker').fadeIn();
            _self.Positioning();
        }
    }
    // Спрятать блок описания производителя
    this.HideDesc = function()
    {
        if($('#'+_self.Option.descContainerId).removeClass('showMaker').fadeOut())
            return true;
        return false;
    }
    // Удаление блока описания производителя
    this.ClearDesc = function()
    {
        if($('#'+_self.Option.descContainerId).detach())
            return true;
        return false;
    }
    // Ajax загрузка описания производителя
    this.LoadDesc = function(id)
    {
        var container = $('#'+_self.Option.descContainerId);
        if (container.length>0 && container.attr('makerid')==id){
            _self.ShowDesc(false, id);
        }else{
            $.ajax({
                'url': _self.Option.loadUrl,
                'data': {id: id, ajax: true},
                'success': function(html){_self.ShowDesc(html, id);}
            })
        }
    }
    // HTML код производителя
    this.GetHtml = function(html, id)
    {
        var div = '<div id="'+_self.Option.descContainerId+'" makerid="'+id+'"><div id="makerArrow"></div><div class="makerContent">';
        div += html;
        div += '</div><div id="makerClose" onclick="$(this).parent().fadeOut(300);">x</div></div>';
        return div;
    }
    // Позиционирование всплывающего описания производителя
    this.Positioning = function()
    {
        // Показать описание производителя
        $('#'+_self.Option.descContainerId).css({'visibility':'visible'}).animate({'opacity':'1'}, 500);

        // Регулировка максимальной ширины и выравнивание по левому краю.
        if (_left+_width<($(window).width()/2)) 
        // Справа от лого производителя
        {
            $('#'+_self.Option.descContainerId).css({
                'max-width':Math.abs(_self.Option.maxContainerWidth-(_left+_width-($(window).width()-_self.Option.maxContainerWidth)/2))-80+'px',
                'left':_left+_width+20+'px',
                'right': 'auto'
            });
            $('#makerClose').css('left', '100%');
            $('#makerArrow').css({'right': '100%', 'left':'auto', 'border-right-color':'#FFA500', 'border-left-color':'transparent'});
        }else // Слева от лого производителя
        {
            $('#'+_self.Option.descContainerId).css({
                'max-width':Math.abs(_left-($(window).width()-_self.Option.maxContainerWidth)/2)-60+'px',
                'right':$(window).width()-_left+20+'px',
                'left': 'auto'
            });
            $('#makerClose').css({'right': '100%', 'left':'auto'});
            $('#makerArrow').css({'left': '100%', 'right':'auto', 'border-right-color':'transparent', 'border-left-color':'#FFA500'});
        }
        var scrollTop = $(document).scrollTop();
        var h = parseInt($('#'+_self.Option.descContainerId).innerHeight()/2);
        // Регулировка выравнивания по высоте
        if (_top-scrollTop-40>$('#'+_self.Option.descContainerId).innerHeight())
        // Сверху от логотипа производителя
        {
            $('#'+_self.Option.descContainerId).css('top',_top-$('#'+_self.Option.descContainerId).innerHeight()+30);
        }else if($(window).height()-(_top-scrollTop)>$('#'+_self.Option.descContainerId).innerHeight())
        // Снизу от логотипа производителя
        {
            $('#'+_self.Option.descContainerId).css('top',_top);
            $('#makerArrow').css({'top':'5px', 'bottom':'auto'});
        }else if(h<(_top-scrollTop-40))
        // По центру логотипа производителя
        {
            $('#'+_self.Option.descContainerId).css('top',_top-$('#'+_self.Option.descContainerId).innerHeight()/2);
            $('#makerArrow').css({'top':$('#'+_self.Option.descContainerId).innerHeight()/2-3+'px', 'bottom':'auto'});
        }else 
        // Во всех остальных случаях выравнивает по верхней линии окна
        {
            $('#'+_self.Option.descContainerId).css('top',scrollTop);
            $('#makerArrow').css({'top':_top-scrollTop+'px', 'bottom':'auto'});
        }
        return true;
    }
}