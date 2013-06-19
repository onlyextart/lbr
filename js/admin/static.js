$(document).ready(function(){
    var start = new AjaxContentLoader();
    start.success = function(html, container){
        $(container).html(html);
        var tabs = new TabsStaticPages();
        tabs.init('#tabs');
    }
    start.init('.left', '.ajax', '.right' ,false);
})

function TabsStaticPages(){
    
    var self = this;
    
    this.option = {
        add: '#add_tab',
        del: '.del_tab',
        all: '.region_list'
    }
    
    this.init = function(parent){
        
        var tabs = $(parent).tabs();
        
        $('input[type="checkbox"]:checked').each(function(){
            $('label[for="'+$(this).attr('id')+'"]').addClass('check');
        })
        
        $('input[type="checkbox"]').change(function(){
            $('label[for="'+$(this).attr('id')+'"]').toggleClass('check');
        })
        
        $(parent).on('click', self.option.add , function(){
            self.showList(tabs);
        })
        
        $(parent).on('click', self.option.del , function(){
            self.removeTab(tabs, $(this));
        })

        $(self.option.all).on('click', '> *', function(){
            if ($(this).hasClass('selected'))
                return false;
            else
                self.showList(tabs);
                self.addTab(tabs, $(this).attr('value'), $(this).text());
                return true;
        })
    
        self.editorInit();
    }
    
    this.showList = function(tabs){
        tabs.find('ul > li > a').each(function(){
            $(self.option.all+' > *[value="'+parseInt($(this).attr('href').replace("#tab-", ""))+'"]').addClass('selected');
        })
        $(self.option.all).fadeToggle(400);
    }
    
    this.addTab = function(tabs, indx, label){
        var li = "<li><a href='#tab-"+indx+"'>"+label+"</a><span class='ui-icon ui-icon-close del_tab' role='presentation' value='"+indx+"'>Remove Tab</span></li>";
        tabs.children("ul").append( li );
        tabs.children('div').append( "<div id='tab-"+indx+"'><textarea name='Content["+indx+"]'>content new tab "+label+"</textarea></div>" );
        tabs.tabs("refresh");
        self.editorInit();
    }
    
    this.removeTab = function(tabs, item){
        $('#tab-'+item.attr('value')).remove();
        item.parent().remove();
        tabs.tabs("refresh");
    }
    
    this.editorInit = function(){
        tinymce.init({
            selector:'textarea',
            plugins: ["advlist autolink lists link image charmap preview anchor","searchreplace visualblocks code fullscreen","insertdatetime media table contextmenu paste"]
        });
    }
}