$(document).ready(function(){
    
    var makers = new AjaxMakersDescriptionLoader();
    makers.AddingEventHandlers();
    
    var sliding = new SlidingBannersImages();
    sliding.PreparingEvents();
    
})
function SlidingBannersImages(){
    
    var _self = this;
    
    this.Option = {
        container: '.b_images',
        overflowContainer: '.b_images_overflow',
        slidingContainer: '.b_images_conteiner',
        imageWrapper: 'section.b_images_one_image'
    }
    
    this.PreparingEvents = function()
    {
        $(_self.Option.imageWrapper+':first-child').addClass('active');
        $(_self.Option.container).each(function(indx){
            if($(this).find(_self.Option.imageWrapper).length>1)
            {
                if ($(this).find(_self.Option.imageWrapper).length>2){
                    $(this).find(_self.Option.slidingContainer).prepend($(this).find(_self.Option.imageWrapper+':last-child'));
                    $(this).find(_self.Option.slidingContainer).css({'left':'-'+$(this).find(_self.Option.imageWrapper+':last-child').width()+'px'});
                }
                $(this).append('<div class="scrollLeft"></div>');
                $(this).append('<div class="scrollRight"></div>');
            }
            
        })
        $(_self.Option.container).on('click', 'div.scrollRight', function(){
            _self.SlidingImage($(this).parent().find(_self.Option.slidingContainer), 1);
        })
        $(_self.Option.container).on('click', 'div.scrollLeft', function(){
            _self.SlidingImage($(this).parent().find(_self.Option.slidingContainer), -1);
        })
        
    }
    
    this.LoadImage = function(el)
    {
        var img = el.find('img');
        if (img.attr('src')!=img.attr('data-src')){
            img.attr('src', img.attr('data-src'));
            if(img.load(function(){return true;})){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
        
    }
    
    this.SlidingImage = function(el, l)
    {
        var active = el.children(_self.Option.imageWrapper+'.active');
        var indx_active = el.children(_self.Option.imageWrapper).index(el.children(_self.Option.imageWrapper+'.active'));
        var next = el.find(_self.Option.imageWrapper+':eq('+(indx_active+l)+')');
        if (indx_active=='0' && l<0){
            next = el.children(_self.Option.imageWrapper+':last-child');
        }
        if (indx_active==el.find(_self.Option.imageWrapper).length-1 && l>0){
            next = el.children(_self.Option.imageWrapper+':first-child');
        }
        el.children(_self.Option.imageWrapper+'.active').removeClass('active');
        next.addClass('active');
        if(_self.LoadImage(next))
        {
            _self.AnimateSlide(el, l);
        }
    }
    
    this.AnimateSlide = function(el, l)
    {
        if (el.children(_self.Option.imageWrapper).length>2){
            el.animate({'left': '-'+(el.children(_self.Option.imageWrapper).width()+el.children(_self.Option.imageWrapper).width()*l)+'px'}, 400, function(){
                if (l<0){
                    el.prepend(el.children(_self.Option.imageWrapper+':last-child'));
                }else{
                    el.append(el.children(_self.Option.imageWrapper+':first-child'));
                }
                el.css('left', el.children(_self.Option.imageWrapper).width()*'-1');
            });
        }else{
            if (parseInt(el.css('left'))==0){
                el.animate({'left': el.children(_self.Option.imageWrapper).width()*'-1'+'px'}, 600);
            }else{
                el.animate({'left':'0'}, 600);
            }
        }
    }
}
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