function AdminBannersFilter(){
    
    var _self = this;
    
    this.option = {
        filter: '#menu-filter',
        subfilter: '#menu_subfilter',
        result: '.banners-content'
    };

    this.init = function(){
        var filter = $(_self.option.filter);
        var change = filter.find('li.changed > span.name').text();
        if(!change){
            change = 'Главная';
        }
        var now = $('<span id="filter-selected">'+change+'</span>');
        $(_self.option.filter).prepend(now);
        now.click(function(){
            $(this).toggleClass('show');
            filter.children('ul').toggle();
        });
        _self.event();
        _self.tree();
    };
    
    this.event = function(){
        var filter = $(_self.option.filter);
        var li = filter.find('li.item span.name');
        var subfilter = $(_self.option.subfilter);
        var result = $(_self.option.result);
        li.click(function(){
            window.location = '/administrator/banners/showsubfilter/id/'+$(this).parent().attr('id')+'/';
        });
        subfilter.on('click', 'li.item span.name', function(){
            _self.ajaxLoad($(this), '/administrator/banners/showbanners/id/', result, subfilter);
        });
        result.on('click', 'a.down, a.up', function(){
            var clss = $(this).attr('class');
            var el = $(this).parent();
            var id = parseInt(el.attr('id'));
            $.ajax({
                url: $(this).attr('href'),
                success: function(){
                    if(clss==='down'){
                       $('#'+(id+1)).after($('#'+id));
                    }else{
                       $('#'+(id-1)).before( $('#'+id));
                    }
                    el.parent().find('li').each(function(indx){
                        $(this).attr('id',indx+1);
                    });
                }
            });
            return false;
        });
    };
    
    this.ajaxLoad = function(el, url, container, filter){
        var parent = el.parent();
        filter.find('li.changed').removeClass('changed');
        parent.addClass('changed');
        $.ajax({
            url: url+parent.attr('id')+'/',
            success: function(data){
                container.html(data);
                return true;
            }
        });
        return true;
    };
    
    this.treeInit = function(){
        var li = $(_self.option.subfilter).find('ul.list');
        li.each(function(indx){
            if ($('li',this).length){
                $(this).parent().prepend("<span class='plus'>+</span>");
                $(this).slideUp();
            }
        });
        _self.openTree();
    };
    
    this.tree = function(){
        $(_self.option.subfilter).on('click','span.plus',function(){
           ul = $(this).parent().children('ul.list');
           if (ul.css('display')=='none'){
               ul.slideDown();
               $(this).text('−');
           }else{
               ul.slideUp();
               $(this).text('+');
           }
        });
        _self.treeInit();
    };
    
    this.openTree = function(){
        selected = $(_self.option.subfilter).find('li.changed');
        selected.each(function(indx){
            parent =  $(this).parents('ul.list');
            parent.slideDown();
            $(this).children('ul').slideDown();
            $(this).children('.plus').text('−');
            parent.siblings('.plus').text('−');
        });
    };
}