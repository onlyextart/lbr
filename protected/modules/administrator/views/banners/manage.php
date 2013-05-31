<?php
/*
 * $bannerModel - модель баннера
 * $regionalBanners - массив региональных данных баннера
 */
if( $bannerModel->isNewRecord ){
    $pageHeader = 'Создание нового баннера';
}
else{
    $pageHeader = 'Редактирование баннера ';
}
?>
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
    .uploaded_file_wrapper{width:120px; height:90px; position:relative; padding: 4px; border:1px solid #EEEEEE; float:left; margin:5px;}
    .delete_uploaded_file{width:16px; height:16px; position:absolute; top:1px; right:1px; cursor:pointer;}
    .uploaded_file{ width:100%; height:100%;}
    .banner_images_wrapper{width:68%; float: left; min-height:120px; border:1px solid #eee; position:relative; z-index:50;}
    .uploaded_file_wrapper {z-index: 999;}
    .ui-dialog{z-index: 999;}
    .imageFeaturesForm{display: none;}
    .imageFeature{width:98%;}
    .delete_image{position: absolute;
        top: 2px;
        right: 2px;
        width: 16px;
    }
</style>
<div class="form">
    <?php $form = $this->beginWidget('CActiveForm', array(
            'id'=>'bannerForm',
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
            <?php echo $form->textField( $bannerModel , 'type' ); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $bannerModel , 'published' ); ?>
            <?php echo $form->labelEx( $bannerModel , 'published' ); ?>
            <?php echo $form->checkBox( $bannerModel , 'published' ); ?>
        </div>
    </div>
    <div class="admin_additional_features">
        <?php $this->Widget('ext.fileuploaderWidget.FileuploaderWidget', array(
                'url'=>'/administrator/fileuploader/upload',
                'uploadCallback'=>'function(responseText){
                                    var uploadedImage = responseText;
                                    // ul-список, содержащий миниатюрки выбранных файлов
                                    var imgList = $("div#img-list");
                                    uploadedImage.draggable({ 
                                        //appendTo: "body",
                                        //helper: "clone"
                                        revert: true
                                    });
                                    imgList.append(uploadedImage);}',
                )
            );
        ?>
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
                        <?php echo $form->textField( $regionalBanner , "[$regionId]name" ); ?>
                    </div>
                    <div class="row">
                        <?php echo $form->error( $regionalBanner , "[$regionId]description" ); ?>
                        <?php echo $form->labelEx( $regionalBanner , "[$regionId]description" ); ?>
                        <?php echo $form->textarea( $regionalBanner , "[$regionId]description" ); ?>
                    </div>
                </div>
                <div class="banner_images_wrapper">
                    <div class="image_blank_form" style="display:none;">
                        <?php $regionalBannerImage = new BannerImages();?>
                        <?php echo $form->hiddenField( $regionalBannerImage , "[$regionId]path", array('class'=>'imagePath imageFeature') ); ?>
                        <div class="row">
                            <?php echo $form->labelEx( $regionalBannerImage , "description"); ?>
                            <?php echo $form->textarea( $regionalBannerImage , "[$regionId]description", array('class'=>'imageDescription imageFeature') ); ?>
                        </div>
                        <div class="row">
                            <?php echo $form->labelEx( $regionalBannerImage , "alt", array('class'=>'imageAlt imageFeature') ); ?>
                            <?php echo $form->textField( $regionalBannerImage , "[$regionId]alt", array('class'=>'imageAlt imageFeature') ); ?>
                        </div>
                        <div class="row">
                            <?php echo $form->labelEx( $regionalBannerImage , "title", array('class'=>'imageTitle imageFeature') ); ?>
                            <?php echo $form->textField( $regionalBannerImage , "[$regionId]title", array('class'=>'imageTitle imageFeature') ); ?>
                        </div>
                        <div class="row">
                            <?php echo $form->labelEx( $regionalBannerImage , "type", array('class'=>'imageType imageFeature') ); ?>
                            <?php echo $form->dropDownList( $regionalBannerImage , "[$regionId]type",  BannerImages::getImageTypes(), array('class'=>'imageType imageFeature') ); ?>
                        </div>
                        <div class="row">
                            <?php echo $form->labelEx( $regionalBannerImage , "top_left", array('class'=>'imageTop_left imageFeature') ); ?>
                            <?php echo $form->textField( $regionalBannerImage , "[$regionId]top_left", array('class'=>'imageTop_left imageFeature') ); ?>
                        </div>
                        <div class="row">
                            <?php echo $form->labelEx( $regionalBannerImage , "top_right", array('class'=>'imageTop_right imageFeature') ); ?>
                            <?php echo $form->textField( $regionalBannerImage , "[$regionId]top_right", array('class'=>'imageTop_right imageFeature') ); ?>
                        </div>
                        <div class="row">
                            <?php echo $form->labelEx( $regionalBannerImage , "bottom_left", array('class'=>'imageBottom_left imageFeature') ); ?>
                            <?php echo $form->textField( $regionalBannerImage , "[$regionId]bottom_left", array('class'=>'imageBottom_left imageFeature') ); ?>
                        </div>
                        <div class="row">
                            <?php echo $form->labelEx( $regionalBannerImage , "bottom_right", array('class'=>'imageBottom_right imageFeature') ); ?>
                            <?php echo $form->textField( $regionalBannerImage , "[$regionId]bottom_right", array('class'=>'imageBottom_right imageFeature') ); ?>
                        </div>
                    </div>
                    <?php foreach( $bannerModel->bannerImages as $regionalBannerImage ): ?>
                        <?php if( $regionalBannerImage->region_id == $regionId ): ?>
                            <div class="uploaded_file_wrapper dropped_image_wrapper">
                                <img class="uploaded_file" src="<?php echo $regionalBannerImage->path; ?>">
                                <img class="delete_image" src="/images/closeIcon.png">
                                <div class="imageFeaturesForm form">
                                    <?php echo $form->hiddenField( $regionalBannerImage , "[$regionId]path", array('class'=>'imagePath imageFeature') ); ?>
                                    <div class="row">
                                        <?php echo $form->labelEx( $regionalBannerImage , "description"); ?>
                                        <?php echo $form->textarea( $regionalBannerImage , "[$regionId]description", array('class'=>'imageDescription imageFeature') ); ?>
                                    </div>
                                    <div class="row">
                                        <?php echo $form->labelEx( $regionalBannerImage , "alt", array('class'=>'imageAlt imageFeature') ); ?>
                                        <?php echo $form->textField( $regionalBannerImage , "[$regionId]alt", array('class'=>'imageAlt imageFeature') ); ?>
                                    </div>
                                    <div class="row">
                                        <?php echo $form->labelEx( $regionalBannerImage , "title", array('class'=>'imageTitle imageFeature') ); ?>
                                        <?php echo $form->textField( $regionalBannerImage , "[$regionId]title", array('class'=>'imageTitle imageFeature') ); ?>
                                    </div>
                                    <div class="row">
                                        <?php echo $form->labelEx( $regionalBannerImage , "type", array('class'=>'imageType imageFeature') ); ?>
                                        <?php echo $form->dropDownList( $regionalBannerImage , "[$regionId]type",  BannerImages::getImageTypes(), array('class'=>'imageType imageFeature') ); ?>
                                    </div>
                                    <div class="row">
                                        <?php echo $form->labelEx( $regionalBannerImage , "top_left", array('class'=>'imageTop_left imageFeature') ); ?>
                                        <?php echo $form->textField( $regionalBannerImage , "[$regionId]top_left", array('class'=>'imageTop_left imageFeature') ); ?>
                                    </div>
                                    <div class="row">
                                        <?php echo $form->labelEx( $regionalBannerImage , "top_right", array('class'=>'imageTop_right imageFeature') ); ?>
                                        <?php echo $form->textField( $regionalBannerImage , "[$regionId]top_right", array('class'=>'imageTop_right imageFeature') ); ?>
                                    </div>
                                    <div class="row">
                                        <?php echo $form->labelEx( $regionalBannerImage , "bottom_left", array('class'=>'imageBottom_left imageFeature') ); ?>
                                        <?php echo $form->textField( $regionalBannerImage , "[$regionId]bottom_left", array('class'=>'imageBottom_left imageFeature') ); ?>
                                    </div>
                                    <div class="row">
                                        <?php echo $form->labelEx( $regionalBannerImage , "bottom_right", array('class'=>'imageBottom_right imageFeature') ); ?>
                                        <?php echo $form->textField( $regionalBannerImage , "[$regionId]bottom_right", array('class'=>'imageBottom_right imageFeature') ); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div id="dialog" title="Tab data">
            <form id="filial_select_form" name="filial_select_form">
                <fieldset class="ui-helper-reset">
                    <label for="tab_title">Title</label>
                    <?php echo CHtml::dropDownList( 'tab_title', 1, Contacts::getFilialsArray(), array('id'=>'tab_title') ); ?>
                </fieldset>
            </form>
        </div>
        
        <button id="add_tab">Добавить регион</button>

        <div id="tabs">
            <ul>
            </ul>
        </div>
        <?php echo CHtml::submitButton($bannerModel->isNewRecord?'Создать':'Сохранить'); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>
<script>
    //RegionTabs
    $(function() {
        var tabTitle = $( "#tab_title" ),
            tabTemplate = "<li><a href='#{href}'>#{label}</a> <span class='ui-icon ui-icon-close' role='presentation'>Remove Tab</span></li>",
            tabCounter = 2,
            defaultRegionId = <?php echo Yii::app()->params['defaultRegionId']; ?>,
            regionalFormsObject = prepareRegionalForms();

        var tabs = $( "#tabs" ).tabs();
        
        function prepareRegionalForms(){
            var reginalForms = {};
            $('.all_regions_forms').find('.regional_features').each(function(){
                reginalForms[$(this).attr('region_id')] = $(this).clone();
                $(this).remove();
            });
            return reginalForms;
        }
        
        
        //Вставка заполненных форм в табы
        for( var regionId in regionalFormsObject ){
            if( regionalFormsObject[regionId].hasClass('filled_region_form') ){
                addTab( regionId );
            }
        }
        
        //Удаление региона "default" из списка выбора регионов
        tabTitle.find('option[value='+defaultRegionId+']').remove();
        
        
        // modal dialog init: custom buttons and a "close" callback reseting the form inside
        var dialog = $( "#dialog" ).dialog({
            autoOpen: false,
            modal: true,
            buttons: {
                Добавить: function() {
                    addTab( tabTitle.val() );
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

        // addTab form: calls addTab function on submit and closes the dialog
        var form = dialog.find( "form" ).submit(function( event ) {
            addTab();
            dialog.dialog( "close" );
            event.preventDefault();
        });

        // actual addTab function: adds new tab using the input from the form above
        function addTab( regionId ) {
            if( regionId==null ){
                return;
            }
            var label = tabTitle.find('option[value='+regionId+']').text(),
                id = "tabs-" + tabCounter,
                li = $( tabTemplate.replace( /#\{href\}/g, "#" + id ).replace( /#\{label\}/g, label ) ),
                tabContentHtml = regionalFormsObject[regionId].html();
                
            tabTitle.find('option[value='+regionId+']').attr({disabled:'disabled'});
            //Удаление кнопки "закрыть" с вкладки default региона
            if( regionId==defaultRegionId ){
                li.find('.ui-icon-close').remove();
            }
            tabs.find( ".ui-tabs-nav" ).append( li );
            tabs.append(regionalFormsObject[regionId].attr({id:id}));
            regionalFormsObject[regionId].find('.banner_images_wrapper').droppable({
                //activeClass: "ui-state-hover",
                accept: ":not(.ui-dialog, .dropped_image_wrapper) ",
                hoverClass: "ui-state-active",
                drop: function( event, ui ) {
                    var image = ui.draggable.clone().removeAttr('style');
                    $(this).append(image);
                    initImageForm(image, $(this));
                }
            }).sortable().disableSelection();
            
            tabs.tabs( "refresh" );
            tabCounter++;
        }

        // addTab button: just opens the dialog
        $( "#add_tab" )
            .button()
            .click(function() {
                dialog.dialog( "open" );
                return false;
        });

        // close icon: removing the tab on click
        tabs.delegate( "span.ui-icon-close", "click", function() {
            var regionId = $( "#" + panelId ).attr('region_id');
            var panelId = $( this ).closest( "li" ).remove().attr( "aria-controls" );
            $( "#" + panelId ).remove();
            tabTitle.find('option[value='+regionId+']').removeAttr('disabled');
            tabs.tabs( "refresh" );
        });
        
        function initImageForm(image, imagesWrapper){
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
            
            imagesWrapper.sortable('refresh');
            
            form.find('.imageFeature').each(function(){
                $(this).attr({'name':$(this).attr('name')+"[]"});
            });
            image.click(function(){
                form.dialog({
                    resizable: false,
                    width:350,
                    height:550,
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
            });
        }
        
        (function(){
            $('.dropped_image_wrapper').each(function(){
                var imageWrapper = $(this);
                
                imageWrapper.find('.delete_image').click(function(){
                    $(this).closest('.uploaded_file_wrapper').remove();
                    return false;
                });
                
                imageWrapper.find('.imageFeature').each(function(){
                    $(this).attr({'name':$(this).attr('name')+"[]"});
                });
                
                imageWrapper.click(function(){
                    
                   imageWrapper.find('.imageFeaturesForm').dialog({
                        resizable: false,
                        width:350,
                        height:550,
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
                });
                
            });
        })()
        
    });
</script>
