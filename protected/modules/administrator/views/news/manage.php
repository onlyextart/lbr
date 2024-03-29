
<?php
/*
 * $newsModel - модель новости
 * $regionalNews - массив региональных данных новости
 */

if( $newsModel->isNewRecord ) {
    $pageHeader = 'Создание новости';
}
else{
    $pageHeader = 'Редактирование новости "'.$newsModel->newsRegions[0]->description.'"';
}
?>
<script type="text/javascript" src="/js/timepicker/timepicker.js"></script>
<script type="text/javascript" src="/js/tinymce_3_x/tiny_mce.js"></script>
<script type="text/javascript">

tinymce.myOptions = {
        width: "100%",
        mode : "textareas",
        editor_selector: "with_tinymce",
        theme : "advanced",
        language : "ru",
        plugins : "jbimages,autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
        relative_urls: false,
        convert_urls : false,

        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect,jbimages",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

}
</script>
<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array('id'=>'form'.$newsModel->id,
    'action'=>$action,
    'enableClientValidation'=>true,
    'clientOptions'=>array(
            'validateOnSubmit'=>true,
            'afterValidate'=>'js:function( form, data, hasError ) 
            {     
                if( hasError ){
                    return false;
                }
                else{
                    return true;
                }
            }'
    ),));
?>

<div class="admin_main_features">
<div class="row">
<?php echo $form->error($newsModel, 'header')  ?>
<?php echo $form->labelEx($newsModel, 'header')  ?>
<?php echo $form->textField($newsModel, 'header')  ?>
</div>


<div class="row">
<?php echo $form->error($newsModel, 'alias')  ?>
<?php echo $form->labelEx($newsModel, 'alias')  ?>
<?php echo $form->textField($newsModel, 'alias')  ?>
</div>

<div class="row">
<?php echo $form->error($newsModel, 'published')  ?>
<?php echo $form->labelEx($newsModel, 'published')  ?>
<?php echo $form->dropDownList($newsModel, 'published', array (1=>"Опубликовать", 0=>"Не опубликовывать"))  ?>
</div>
<div class="row">
<?php echo $form->error($newsModel, 'date'); ?>
<?php	echo $form->labelEx($newsModel, 'date');?>
<?php   echo $form->textField($newsModel, 'date'); ?>    
</div>
</div>

<div class="admin_additional_features">
        <label>Дополнительные параметры</label>
        <h3>Пункты меню отображающие страницу новости</h3>
        <div class="admin_additional_features_content">
            <?php
                //получение массива дерева меню
                function getMenuItemConteintigStatusClosure( $newsModel )
                {
                    $status = function( $menuItemId ) use ( &$newsModel ){       
                        return $newsModel->hasMenuItem( $menuItemId );       
                    };
                    return $status;
                }
                $menuItemConteintigStatusClosure = getMenuItemConteintigStatusClosure( $newsModel );
                $this->widget('CTreeView', array(
                    'data' => MenuItems::getMenuTreeWithCheckbox(
                            'MenuItemConteintigThisNews', 
                            $menuItemConteintigStatusClosure,
                            array(MenuItems::NEWS_MENU_ITEM_TYPE)
                        ), 
                    'animated'=>100, 
                    'htmlOptions'=>array(
                        'class'=>'menuTreeView'
                        )
                    )
                );
            ?>
        </div>
        </div>
        <div class="regional_features_wrapper">
        <div class="all_regions_forms">
            <?php foreach( $regionalNews as $regionId => $regionalEvent ): ?>
            <div class="regional_features <?php if( !$regionalEvent->isNewRecord || 
                                                    $regionId == Yii::app()->params['defaultRegionId'] ) 
                                                    echo 'filled_region_form'; ?>" region_id="<?php echo $regionId ?>">
                <div style="width:30%; float: left;">
                    <div class="row ">
                        <?php echo $form->error( $regionalEvent , "[$regionId]description" ); ?>
                        <?php echo $form->labelEx( $regionalEvent , "[$regionId]description" ); ?>
                        <?php echo $form->textArea( $regionalEvent , "[$regionId]description", array('class'=>'with_tinymce')); ?>
                    </div>
                </div>
                
                <div style="width:100%; float: left; margin-top: 10px; margin-bottom: 30px;">
                <div class="row ">
                    <?php echo $form->labelEx($regionalEvent,"[$regionId]content"); ?><br />
                    <?php echo $form->textArea($regionalEvent,"[$regionId]content", array('class'=>'with_tinymce')); ?>
                    <?php echo $form->error($regionalEvent,"[$regionId]content"); ?>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div id="dialog" title="Tab data">
            <form id="filial_select_form" name="filial_select_form">
                <fieldset class="ui-helper-reset">
                    <label for="tab_title">Регион</label>
                    <?php echo CHtml::dropDownList( 'tab_title', 1, Contacts::getFilialsArray(), array('id'=>'tab_title') ); ?>
                </fieldset>
            </form>
        </div>
        
        <button id="add_tab">Добавить регион</button>

        <div id="tabs">
            <ul>
            </ul>
        </div>
       
            <div class="manage_buttons buttons">
            <?php echo CHtml::link('Закрыть', '/administrator/news/', array('class'=>'btn del')); ?>
            <?php echo CHtml::submitButton($newsModel->isNewRecord?'Создать и закрыть':'Сохранить и закрыть', array('class'=>'btn btn-green')); ?>
            <?php echo CHtml::submitButton($newsModel->isNewRecord?'Создать':'Сохранить', array('class'=>'btn btn-green')); ?>
            
        </div>
    
    <?
$this->endWidget();
?>   
</div>
</div> 
<script>  
   
    
    $.datepicker.regional['ru'] = {
            closeText: 'Закрыть',
            prevText: '&#x3c;Пред',
            nextText: 'След&#x3e;',
            currentText: 'Сегодня',
            monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
            monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
            dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
            dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
            dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
            dateFormat: 'dd.mm.yy',
            firstDay: 1,
            isRTL: false,
        };
        $.datepicker.setDefaults($.datepicker.regional['ru']); 
        $( "#News_date" ).datetimepicker({
            dateFormat: 'yy-mm-dd',
            timeFormat: 'HH:mm:ss',
        });
        
    
    //RegionTabs
    function RegionalTabsManager(){
        this.tabTitle = $( "#tab_title" ); // Выпадающий список выбора региона
        this.tabTemplate = "<li><a href='#{href}'>#{label}</a> <span class='ui-icon ui-icon-close' role='presentation'>Remove Tab</span></li>";
        this.tabCounter = 1; // Счетчик вкладок
        this.defaultRegionId = <?php echo Yii::app()->params['defaultRegionId']; ?>;
        this.regionalFormsObject; // Массив форм всех существующих регионов (для каждого региона в приложении)
        this.tabs; // Tabs Wrapper
        this.regionsSelectDialog; // Диалоговое окно выбора регионов
        this.regionSelectForm; //Форма выбора региона
        var self = this;
        
        this.init = function(){
            //Инициализация табов
            this.tabs = $( "#tabs" ).tabs();
            this.regionalFormsObject =  this.prepareRegionalForms();
           
            //Вставка заполненных форм в табы
            for( var regionId in this.regionalFormsObject ){
                if( this.regionalFormsObject[regionId].hasClass('filled_region_form') ){
                    this.addTab( regionId );
                }
            }
            
            //Удаление региона "default" из списка выбора регионов
            this.tabTitle.find('option[value='+self.defaultRegionId+']').remove();
            
            // Инициализация диалогового окна выбора и добавления региона
            this.regionsSelectDialog = $( "#dialog" ).dialog({
                autoOpen: false,
                modal: true,
                buttons: {
                    Добавить: function() {
                        self.addTab( self.tabTitle.val() );
                        $( this ).dialog( "close" );
                    },
                    Отменить: function() {
                        $( this ).dialog( "close" );
                    }
                },
                close: function() {
                    //form[0].reset();
                }
            });
            
            
            // Обработка события добавления таба нового региона (отправка формы выбора региона)
            this.regionSelectForm = this.regionsSelectDialog.find( "form" ).submit(function( event ) {
                self.addTab();
                self.regionsSelectDialog.dialog( "close" );
                event.preventDefault();
            });
            
            // Обработка события нажатия на кнопку "Добавить регион"
            $( "#add_tab" )
                .button()
                .click(function() {
                    self.regionsSelectDialog.dialog( "open" );
                    return false;
            });
            
            // Обработка закрытия таба региона
            this.tabs.delegate( "span.ui-icon-close", "click", function() {
                var panelId = $( this ).closest( "li" ).remove().attr( "aria-controls" );
                var regionId = $( "#" + panelId ).attr('region_id');
                $( "#" + panelId ).remove();
                self.tabTitle.find('option[value='+regionId+']').removeAttr('disabled');
                self.tabs.tabs( "refresh" );
            });
            
        }
        
        //Функция возвращает массив всех форм (для каждого региона в приложении)
        this.prepareRegionalForms = function(){
            var reginalForms = {};
            $('.all_regions_forms').find('.regional_features').each(function(){
                reginalForms[$(this).attr('region_id')] = $(this).clone();
                $(this).remove();
            });
            return reginalForms;
        }
        
        // Функция добавления таба региона
        this.addTab = function ( regionId ) {
            //Если не выбран регион не выбран
            if( regionId==null ){
                return;
            }
            
            var label = self.tabTitle.find('option[value='+regionId+']').text(),//Название региона
                id = "tabs-" + self.tabCounter,
                li = $( self.tabTemplate.replace( /#\{href\}/g, "#" + id ).replace( /#\{label\}/g, label ) );
            //Отключение добавленного региона в списке регионов    
            self.tabTitle.find('option[value='+regionId+']').attr({disabled:'disabled'});
            
            //Удаление кнопки "закрыть" с вкладки default региона
            if( regionId == self.defaultRegionId ){
                li.find('.ui-icon-close').remove();
            }
            
            self.tabs.find( ".ui-tabs-nav" ).append( li );
            self.tabs.append( self.regionalFormsObject[regionId].attr({id:id}));
            self.regionalFormsObject[regionId].find('.banner_images_wrapper').droppable({
                //activeClass: "ui-state-hover",
                accept: ":not(.ui-dialog, .dropped_image_wrapper) ",
                hoverClass: "ui-state-active",
                drop: function( event, ui ) {
                    var image = ui.draggable.clone().removeAttr('style');
                    $(this).append(image);
                    self.initImageForm(image, $(this) /*DroppableWrapper*/ );
                }
            }).sortable({
                stop: function(){
                    $(this).find('.uploaded_file_wrapper').each(function(){
                        self.imageInputNameAttrProcessing($(this));
                    });
                }
            }).disableSelection();
            
            self.tabs.tabs( "refresh" );
            self.tabCounter++;
            (function(id){
                var id = id;
                setTimeout(function(){
                    tinymce.myOptions.selector = '#'+id+' .with_tinymce';
                    tinymce.init(tinymce.myOptions);
                }, 10);
            })(id);
        }
                
        
        
    }
    
    $(function() {
        <?php if(Yii::app()->user->hasFlash('saved')): ?>
            alertify.success("<?php echo Yii::app()->user->getFlash('saved'); ?>");
        <?php endif; ?>
        var tabsManager = new RegionalTabsManager();
        tabsManager.init();
        $(".admin_additional_features").accordion({ header: "h3" , collapsible: true, active:false, heightStyle: "content"});
        $(".menuTreeView li:even",this).addClass("even_menu_item"); 
        $(".menuTreeView li:odd",this).addClass("odd_menu_item");
    });
</script>
<style>
    #dialog label, #dialog input { display:block; }
    #dialog label { margin-top: 0.5em; }
    #dialog input, #dialog textarea { width: 95%; }
    #tabs { margin-top: 1em; }
    #tabs li .ui-icon-close { float: left; margin: 0.4em 0.2em 0 0; cursor: pointer; }
    #add_tab { cursor: pointer; }
    .all_regions_forms {display: none;}
    .admin_main_features{float:left; width:40%;}
    .admin_additional_features{float:left; width:60%;}
    .regional_features_wrapper{float: left; width: 100%;}    
    .ui-dialog{z-index: 900;}    
    
    
    ul.menuTreeView{
        padding-right: 10px;
    }
    ul.menuTreeView  .menuItemCheckBox{
        width: auto;
        height: auto;
        margin: 2px 15px 0px 0px;
        padding: 0px;
        position: absolute;
        right: 20px;
        box-shadow:none;
        min-height:0px;
    }
    ul.menuTreeView li.even_menu_item{
        background-color: #F5F5F5;
    }
    ul.menuTreeView li.odd_menu_item{
        background-color: #EEEEEE;
    }
    ul.menuTreeView li.even_menu_item:hover {
        background-color: #E0E0E0;
    }
    ul.menuTreeView li.odd_menu_item:hover{
        background-color: #E0E0E0;
    }
    .manage_buttons{
        position: fixed;
        top: 50px;
        right: 30px;
    }
    div.manage_buttons input{
        margin:0px;
    }
</style>
