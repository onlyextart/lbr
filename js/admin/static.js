$(document).ready(function(){
    menuTreeView = new MenuTreeViewConstructor(jQuery);
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
            width: '100%',
            selector:'textarea',
            theme : "advanced",
            language : "ru",
            plugins: "jbimages,autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
            relative_urls: false,
            convert_urls : false,
            theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect,jbimages",
            theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
            theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
            theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
            theme_advanced_toolbar_location : "top",
            theme_advanced_toolbar_align : "left",
            theme_advanced_statusbar_location : "bottom",
            theme_advanced_resizing : true
        });
        
        
        menuTreeView.updateTree(false);
    }
}

function MenuTreeViewConstructor(jQuery){
    var _self = this;
    this.jQuery = jQuery;
    this.updateTree = function( clearMenuFeaturesWrapper ){
            _self.jQuery(function(cash) {
                _self.treeObject = _self.jQuery(".menuTreeView").treeview({'animated':100});
            });
    }
 }