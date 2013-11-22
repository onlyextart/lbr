<?php
/*
 * $bannerModel - модель баннера
 * $regionalBanners - массив региональных данных баннера
 */

if( $bannerModel->isNewRecord ){
    $pageHeader = 'Создание нового баннера';
}
else{
    $pageHeader = 'Редактирование баннера "'.$bannerModel->bannerRegions[0]->name.'"';
}
?>

<?php function getImageFeaturesForm( $form, $imageModel, $regionId, $imageNum="" ){ ?>
    <?php echo $form->hiddenField( $imageModel , "[$regionId][$imageNum]path", array('class'=>'imagePath imageFeature') ); ?>
    <div class="row">
        <?php echo $form->labelEx( $imageModel , "description"); ?>
        <?php echo $form->textarea( $imageModel , "[$regionId][$imageNum]description", array('class'=>'imageDescription imageFeature') ); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx( $imageModel , "alt", array('class'=>'imageAlt') ); ?>
        <?php echo $form->textField( $imageModel , "[$regionId][$imageNum]alt", array('class'=>'imageAlt imageFeature') ); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx( $imageModel , "title", array('class'=>'imageTitle') ); ?>
        <?php echo $form->textField( $imageModel , "[$regionId][$imageNum]title", array('class'=>'imageTitle imageFeature') ); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx( $imageModel , "type", array('class'=>'imageType') ); ?>
        <?php echo $form->dropDownList( $imageModel , "[$regionId][$imageNum]type",  BannerImages::getImageTypes(), array('class'=>'imageType imageFeature') ); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx( $imageModel , "top_left", array('class'=>'imageTop_left') ); ?>
        <?php echo $form->textField( $imageModel , "[$regionId][$imageNum]top_left", array('class'=>'imageTop_left imageFeature') ); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx( $imageModel , "top_right", array('class'=>'imageTop_right') ); ?>
        <?php echo $form->textField( $imageModel , "[$regionId][$imageNum]top_right", array('class'=>'imageTop_right imageFeature') ); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx( $imageModel , "bottom_left", array('class'=>'imageBottom_left') ); ?>
        <?php echo $form->textField( $imageModel , "[$regionId][$imageNum]bottom_left", array('class'=>'imageBottom_left imageFeature') ); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx( $imageModel , "bottom_right", array('class'=>'imageBottom_right') ); ?>
        <?php echo $form->textField( $imageModel , "[$regionId][$imageNum]bottom_right", array('class'=>'imageBottom_right imageFeature') ); ?>
    </div>
<?php } ?>
<script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.myOptions = {
    //selector: ".with_tinymce",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor"
    ],
    theme_advanced_resizing : true,
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
}
//tinymce.init(tinymce.myOptions);

</script>
<h2>
    <?php echo $pageHeader ?>
</h2>
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
    .banner_images_wrapper{width:69%; float: left; min-height:120px; border:1px solid #eee; position:relative; z-index:50;}
    .ui-dialog{z-index: 900;}
    .imageFeaturesForm{display: none;}
    .imageFeature{width:98%;}
    .makers_table input{
        width:auto;
        min-height: 0px;
        box-shadow:none;
    }
    .makers_table td{
        width:14%;
    }
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
<div class="form">
    <?php $form = $this->beginWidget('CActiveForm', array(
            'id'=>'bannerForm',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
                'afterValidate'=>'js:function( form, data, hasError ) 
                    {     
                        if( hasError ){
                            alertify.error("Данные заполнены не верно");
                            return false;
                        }
                        else{
                            //Удаление пустых заготовок форм изображений из формы перед отправкой
                            $("#bannerForm").submit(function(){
                                $(this).find(".image_blank_form").remove();
                            })
                            return true;
                        }
                    }'
            ),
        )
    ); ?>
    <div class="admin_main_features">
        <div class="row">
            <?php echo $form->error( $bannerModel , 'icon' ); ?>
            <?php echo $form->labelEx( $bannerModel , 'icon' ); ?>
            <?php echo $form->textField( $bannerModel , 'icon' ); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $bannerModel , 'type' ); ?>
            <?php echo $form->labelEx( $bannerModel , 'type' ); ?>
            <?php echo $form->dropDownList( $bannerModel , 'type', Banners::getBannerTypes() ); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $bannerModel , 'published' ); ?>
            <?php echo $form->labelEx( $bannerModel , 'published' ); ?>
            <?php echo $form->checkBox( $bannerModel , 'published', array('style'=>'width:auto') ); ?>
        </div>
    </div>
    <div class="admin_additional_features">
        <label>Дополнительные параметры</label>
        <h3>Изображения баннера</h3>
        <div class="admin_additional_features_content">
            <?php 
            $previouslyUploadedFiles = array();
            if( !$bannerModel->isNewRecord ){
                    $allUniqueImagesInBanner = BannerImages::model()->findAll(
                            'banner_id='.$bannerModel->id.' GROUP BY path');
                    foreach( $allUniqueImagesInBanner as $image ){
                        $previouslyUploadedFiles[$image->path]="";
                    }
            }
            $this->Widget('ext.fileuploaderWidget.FileuploaderWidget', array(
                    'template'=>array(
                        'image',
                    ),
                    'uploadCallback'=>'
                        function( $newUploadedFileWrapper ){
                            $newUploadedFileWrapper.draggable({
                                helper: "clone", 
                                appendTo : "body",
                                revert: true
                            });
                        }',
                    'previouslyUploadedFiles'=>$previouslyUploadedFiles,
                )
            );
            ?>
        </div>
        <h3>Производители</h3>
        <div class="admin_additional_features_content">
            <table class="makers_table" style="width:100%;">
            <?php 
                $makerNum = 0;
                foreach( $makers as $maker ):  
            ?>
                
            <?php if($makerNum%5==0): ?>
                <tr>
            <?php endif; ?>
                    <td>
                        <?php echo $form->checkBox( $maker, "[$maker->id]name",
                                $bannerModel->hasMaker($maker->id)?array('checked'=>'checked'):array()
                        ); ?>
                        <?php echo $form->labelEx( $maker, $maker->name, array(
                            'style'=>'display:inline;', 
                            'for'=>'Makers_'.$maker->id.'_name') ); ?>
                    </td>
            <?php if($makerNum%5==4): ?>
                </tr>
            <?php endif; ?>
            <?php 
                $makerNum++;
                endforeach; 
            ?>
            </table>
        </div>
        <h3>Пункты меню отображающие баннер</h3>
        <div class="admin_additional_features_content">
            <?php
                //получение массива дерева меню
                function getMenuItemConteintigStatusClosure($bannerModel)
                {
                    $status = function( $menuItemId ) use ( &$bannerModel ){       
                        return $bannerModel->hasMenuItem($menuItemId);       
                    };
                    return $status;
                }
                $menuItemConteintigStatusClosure = getMenuItemConteintigStatusClosure($bannerModel);
                $this->widget('CTreeView', array(
                    'data' => MenuItems::getMenuTreeWithCheckbox(
                            'MenuItemConteintigThisBanner', 
                            $menuItemConteintigStatusClosure,
                            array(MenuItems::BANNERS_MENU_ITEM_TYPE)
                        ), 
                    'animated'=>100, 
                    'htmlOptions'=>array(
                        'class'=>'menuTreeView'
                        )
                    )
                );
            ?>
        </div>
        <h3>Пункты меню на которые ведет баннер</h3>
        <div class="admin_additional_features_content">
            <?php
                //получение массива дерева меню
                function getBannerLinkClosure($bannerModel)
                {
                    $status = function( $menuItemId ) use ( &$bannerModel ){       
                        return $bannerModel->hasMenuItemLink($menuItemId);       
                    };
                    return $status;
                }
                $bannerLinkClosure = getBannerLinkClosure($bannerModel);
                $this->widget('CTreeView', array(
                    'data' => MenuItems::getMenuTreeWithCheckbox(
                            'BannerLinkMenuItems', 
                            $bannerLinkClosure,
                            array(MenuItems::BANNERS_MENU_ITEM_TYPE, MenuItems::PRODUCT_MENU_ITEM_TYPE, MenuItems::STATIC_MENU_ITEM_TYPE, MenuItems::LINK_MENU_ITEM_TYPE)
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
            <?php foreach( $regionalBanners as $regionId => $regionalBanner ): ?>
            <div class="regional_features <?php if( !$regionalBanner->isNewRecord || 
                                                    $regionId == Yii::app()->params['defaultRegionId'] ) 
                                                    echo 'filled_region_form'; ?>" region_id="<?php echo $regionId ?>">
                <div style="width:30%; float: left;">
                    <div class="row ">
                        <?php echo $form->error( $regionalBanner , "[$regionId]name" ); ?>
                        <?php echo $form->labelEx( $regionalBanner , "[$regionId]name" ); ?>
                        <?php echo $form->textField( $regionalBanner , "[$regionId]name", array('style'=>'width:95%') ); ?>
                    </div>
                </div>
                <div class="banner_images_wrapper">
                    <div class="image_blank_form" style="display:none;">
                        <?php $regionalBannerImage = new BannerImages();?>
                        <?php getImageFeaturesForm( $form, $regionalBannerImage, $regionId ); ?>
                    </div>
                    <?php foreach( $bannerModel->bannerImages as $regionalBannerImage ): ?>
                        <?php if( $regionalBannerImage->region_id == $regionId ): ?>
                            <div class="uploaded_file_wrapper dropped_image_wrapper">
                                <img class="uploaded_file" src="<?php echo $regionalBannerImage->path; ?>">
                                <img class="delete_image" src="/images/closeIcon.png">
                                <div class="imageFeaturesForm form">
                                    <?php getImageFeaturesForm( $form, $regionalBannerImage, $regionId ); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="row">
                    <?php echo $form->error( $regionalBanner , "[$regionId]description" ); ?>
                    <?php echo $form->labelEx( $regionalBanner , "[$regionId]description" ); ?>
                    <?php echo $form->textarea( $regionalBanner , "[$regionId]description", array('class'=>'with_tinymce') ); ?>
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
            <?php echo CHtml::link('Закрыть', '/administrator/banners/', array('class'=>'btn del')); ?>
            <?php echo CHtml::submitButton($bannerModel->isNewRecord?'Создать':'Сохранить', array('class'=>'btn btn-green')); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>
<script>
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
            
            //Инициализация изображений в регионе после загрузки страницы
            $('.dropped_image_wrapper').each(function(){
                var imageWrapper = $(this);
                
                // Добавить события для кнопки удаления изображения
                imageWrapper.find('.delete_image').click(function(){
                    $(this).closest('.uploaded_file_wrapper').remove();
                    return false;
                });
                // Изменить атрибут name во всех полях формы с данными изображений 
                self.imageInputNameAttrProcessing( imageWrapper );
                
                // Инициализация диалогового окна с данными изображений
                imageWrapper.click(function(){
                   imageWrapper.find('.imageFeaturesForm').each(function(){
                       self.appendImageFormDialog($(this));
                   });
                });
                
                //Иницииализация перетаскивания для изображений присутсвующих во 
                //всех баннерах
                
                $('#img_list').find('.uploaded_file_wrapper').draggable({ 
                    helper: 'clone', 
                    appendTo : 'body',
                    revert: true
                });
                
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
        
         // Инициализация формы данных для изображения добавленного в таб
        this.initImageForm = function(image, imagesWrapper){
            var form,
                deleteImageButton;
            
            form = imagesWrapper.find('.image_blank_form').clone();
            form.removeAttr('style').attr({'class':'imageFeaturesForm form'});
            form.find('.imagePath').val(image.find('.uploaded_file').attr('src'));
            
            deleteImageButton = $('<img class="delete_image" src="/images/closeIcon.png">');
            deleteImageButton.click(function(){
                $(this).closest('.uploaded_file_wrapper').remove();
                return false;
            });
                        
            image.attr({'class':'uploaded_file_wrapper dropped_image_wrapper'});
            image.append(deleteImageButton);
            image.append(form);
            
            //Обновить все фтрибуты name всех полей ввода форм изображений
            imagesWrapper.find('.uploaded_file_wrapper').each(function(){
                self.imageInputNameAttrProcessing( $(this) );
            });
            
            imagesWrapper.sortable('refresh');
            
            image.click(function( image ){
                self.appendImageFormDialog( form );
            });
        }
        
        // Функия добавляет диалоговое окно с данными изображений
        // Принимает параметром ссылку на imageWrapper (контейнер изображений баннера региона)
        this.appendImageFormDialog = function( imageWrapper ){
            imageWrapper.dialog({
                resizable: false,
                width:450,
                height:570,
                title:'Редактирование изображения',
                modal: true,
                beforeClose: function( event, ui ) {
                    $( this ).dialog( "destroy" );
                },
                buttons: {
                    "Сохранить": function( ) {
                        $( this ).dialog( "destroy" );
                    }
                }
            });
        }
        
        //Обработка аттрибута name поля ввода в форме данных изображения.
        this.imageInputNameAttrProcessing = function( imageWrapper /* .uploaded_file_wrapper */ ){
            //([^\[\]]*\[\d\]\[)(.*)(\]\[.*\])/
            var allImagesWrapper = imageWrapper.closest(".banner_images_wrapper");
            var inputNum = allImagesWrapper.find('.uploaded_file_wrapper').index(imageWrapper);
            imageWrapper.find('.imageFeature').each(function(){
                $(this).attr({'name':$(this).attr('name').replace(/([^\[\]]*\[\d\]\[)(.*)(\]\[.*\])/, '$1'+inputNum+'$3')});
            });
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
