<style>
    .admin_main_features{float:left; width:40%;}
    .admin_additional_features{float:left; width:60%;}
    .regional_product_data{
        width:100%;
        float:left;
    }
    .admin_content_features{
        width:100%;
        float:left;
    }
    div.form .tab_content{
        background: #F7F7F7;
        position: relative;
        box-shadow: inset 0px 0px 7px #BBB;
        margin-top: 0px;
    }
    .title_product_image_wrapper:after{
        content: "";
        display: table;
        clear: both;
    }
    .title_product_image_wrapper{
        min-height: 50px;
        border-radius: 2px;
        border: 1px solid #ccc;
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.075);
        width:50%;
    }
    .makers_table td input{
        width:auto;
        margin: 0px;
        margin-right: 10px;
    }
    .makers_table td{
        border:1px solid #AAA;
        padding-left: 10px;
    }
    .manage_buttons{
        position: fixed;
        top: 50px;
        right: 30px;
    }
    div.manage_buttons input{
        margin:0px;
    }
    .ui-dialog{z-index: 900;}
    .imageFeature{width:98%;}
    #gallery_images_droppable_block{
        height: 150px;
        width:100%;
        border: 1px solid #aaa;
    }
    .delete_video_btn {
        text-decoration: none;
    }
    .delete_video_btn img{
        width:16px;
    }
    .add_video_btn{
        text-decoration: none;
    }
    .add_video_btn img{
        width:16px;
    }
    ul.menuTreeView  .menuItemCheckBox{
        width: auto;
        height: auto;
        margin: 0px 20px 0px 0px;
        padding: 0px;
        position: absolute;
        right: 20px;
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
</style>
<h2>
    <?php echo 'Страница товара' ?>
</h2>
<script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.myOptions = {
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
    image_advtab: true
}
tinymce.myOptions.selector = ".with_tinymce"
tinymce.init(tinymce.myOptions);
</script>
<div class="form">
<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'productForm',
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
            )
        )
    ); 
?>
    <div class="admin_main_features">
        <div class="row">
            <?php echo $form->error( $productModel, 'name'); ?>
            <?php echo $form->labelEx( $productModel, 'name'); ?>
            <?php echo $form->textField( $productModel, 'name'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($productModel, 'image'); ?>
            <div class="title_product_image_wrapper">
                <?php if( $productModel->image !== "" && $productModel->image !==null ): ?>
                <div class="uploaded_file_wrapper ui-draggable">
                    <div class="image_wrapper">
                        <img class="uploaded_file" src="<?php echo $productModel->image ?>" alt="uploadedImage">
                    </div>
                    <img class=" delete_image" src="/images/closeIcon.png" alt="deleteFileButton">
                </div>
                <?php endif; ?>
                <div class="titleImageFeaturesForm form" style="display:none">
                    <?php echo $form->hiddenField( $productModel , "image", array('class'=>'imagePath imageFeature') ); ?>
                    <div class="row">
                        <?php echo $form->labelEx( $productModel , "image_type", array('class'=>'imageType') ); ?>
                        <?php echo $form->dropDownList( $productModel , "image_type",  Products::getImageTypes(), array('class'=>'imageType imageFeature') ); ?>
                    </div>
                    <div class="row">
                        <?php echo $form->labelEx( $productModel , "image_top_left", array('class'=>'imageTop_left') ); ?>
                        <?php echo $form->textField( $productModel , "image_top_left", array('class'=>'imageTop_left imageFeature') ); ?>
                    </div>
                    <div class="row">
                        <?php echo $form->labelEx( $productModel , "image_top_right", array('class'=>'imageTop_right') ); ?>
                        <?php echo $form->textField( $productModel , "image_top_right", array('class'=>'imageTop_right imageFeature') ); ?>
                    </div>
                    <div class="row">
                        <?php echo $form->labelEx( $productModel , "image_bottom_left", array('class'=>'imageBottom_left') ); ?>
                        <?php echo $form->textField( $productModel , "image_bottom_left", array('class'=>'imageBottom_left imageFeature') ); ?>
                    </div>
                    <div class="row">
                        <?php echo $form->labelEx( $productModel , "image_bottom_right", array('class'=>'imageBottom_right') ); ?>
                        <?php echo $form->textField( $productModel , "image_bottom_right", array('class'=>'imageBottom_right imageFeature') ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php echo $form->error( $productModel, 'video'); ?>
            <?php echo $form->labelEx( $productModel, 'video'); ?>
            <?php echo $form->textField( $productModel, 'video'); ?>
        </div>
    </div>
    <div class="admin_additional_features">
        <label>Дополнительные параметры</label>
        <h3>Загрузка изображений</h3>
        <div class="admin_additional_features_content">
            <?php $this->Widget('ext.fileuploaderWidget.FileuploaderWidget', array(
                        'url'=>'/administrator/fileuploader/upload',
                        'template'=>array(
                            'image',
                            'deleteButton',
                            array(
                                'name'=>'hiddenField',
                                'nameAttr'=>'uploadedImage',
                                'htmlOptions'=>array(
                                    'class'=>'uploadedImageHiddenArea'
                                )
                            )
                        ),
                        'uploadCallback'=>'
                            function( $newUploadedFileWrapper ){
                                $newUploadedFileWrapper.draggable({
                                    helper: "clone", 
                                    appendTo : "body",
                                    revert: true
                                });
                            }',
                    )
                );
            ?>
        </div>
        <h3>Производитель</h3>
        <div class="admin_additional_features_content">
            <table class="makers_table" style="width:100%;">
            <?php 
                $makerNum = 0;
                foreach( $makers as $maker ):  
            ?>
            <?php if($makerNum%7==0): ?>
                <tr>
            <?php endif; ?>
                    <td>
                        <?php 
                            echo $form->radioButton( $productModel, 'maker', 
                                ( $productModel->maker == $maker->id )?array(
                                    'value'=>$maker->id,
                                    'uncheckValue'=>null,
                                    'checked'=>'checked',
                                ):array(
                                    'uncheckValue'=>null,
                                    'value'=>$maker->id,
                                )
                            ); 
                            echo $form->labelEx( $maker, $maker->name, 
                                array(
                                    'style'=>'display:inline;',
                                ) 
                            ); 
                        ?>
                    </td>
            <?php if($makerNum%7==6): ?>
                </tr>
            <?php endif; ?>
            <?php 
                $makerNum++;
                endforeach; 
            ?>
            </table>
        </div>
        <h3>Региональный обзор</h3>
        <div class="admin_additional_features_content">
            <div class="regional_product_data row">
                <button id="add_tab">Добавить регион</button>
                <div id="regional_product_data_tabs">
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
        <h3>Пункты меню отображающие страницу товара</h3>
        <div class="admin_additional_features_content">
            <?php
                //получение массива дерева меню
                function getMenuItemConteintigStatusClosure( $productModel )
                {
                    $status = function( $menuItemId ) use ( &$productModel ){       
                        return $productModel->hasMenuItem( $menuItemId );       
                    };
                    return $status;
                }
                $menuItemConteintigStatusClosure = getMenuItemConteintigStatusClosure( $productModel );
                $roots = MenuItems::model()->roots()->findAll();
                $this->widget('CTreeView', array(
                    'data' => MenuItems::getMenuTreeWithCheckbox(
                            $roots, 
                            'MenuItemConteintigThisProduct', 
                            $menuItemConteintigStatusClosure,
                            array(MenuItems::PRODUCT_MENU_ITEM_TYPE)
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
    <div class="admin_content_features">
        <div id="product_features_tabs">
            <ul>
                <li><a href="#review_field">Обзор</a></li>
                <li><a href="#features_field">Технические характеристики</a></li>
                <li><a href="#construct_features_field">Конструкционные особенности</a></li>
                <li><a href="#experience_field">Отзывы</a></li>
                <li><a href="#foto_gallery_field">Фото</a></li>
                <li><a href="#video_gallery_field">Видео</a></li>
            </ul>
            <div id="review_field" class="row tab_content">
                <?php echo $form->labelEx( $productModel, "review" ) ?>
                <?php echo $form->textArea( $productModel, "review", array('class'=>'with_tinymce') ) ?>
            </div>
            <div id="features_field" class="row tab_content">
                <?php echo $form->labelEx( $productModel, "features" ) ?>
                <?php echo $form->textArea( $productModel, "features", array('class'=>'with_tinymce') ) ?>
            </div>
            <div id="construct_features_field" class="row tab_content">
                <?php echo $form->labelEx( $productModel, "construct_features" ) ?>
                <?php echo $form->textArea( $productModel, "construct_features", array('class'=>'with_tinymce') ) ?>
            </div>
            <div id="experience_field"  class="row tab_content">
                <?php echo $form->labelEx( $productModel, "experience" ) ?>
                <?php echo $form->textArea( $productModel, "experience", array('class'=>'with_tinymce') ) ?>
            </div>
            <div id="foto_gallery_field"  class="row tab_content">
                <div class="gallery_image_features_blank_form" style="display:none;">
                    <?php $fotoGalleryImageModel = new ProductGallery();?>
                    <?php $this->renderPartial('_galleryImageFeaturesForm',array(
                        'form'=>$form,
                        'imageModel'=>$fotoGalleryImageModel,
                        'imageNum'=>0,
                    ), false, false); ?>
                </div>
                <div id="gallery_images_droppable_block">
                    <?php foreach( $productFotoGallery as $foto ): ?>
                            <div class="uploaded_file_wrapper dropped_image_wrapper">
                                <img class="uploaded_file" src="<?php echo $foto->path; ?>">
                                <img class="delete_image" src="/images/closeIcon.png">
                                <div class="galleryImageFeaturesForm form" style="display:none;">
                                    <?php $this->renderPartial('_galleryImageFeaturesForm',array(
                                        'form'=>$form,
                                        'imageModel'=>$foto,
                                        'imageNum'=>$foto->sorting,
                                    ), false, false); ?>
                                </div>
                            </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="video_gallery_field" class="row tab_content">
                <div class="product_videos_wrapper">
                    <?php 
                        $blankProductVideoModel = new ProductVideo();
                        $this->renderPartial('_videoGalleryBlock', array(
                            'videoGalleryModel'=>$blankProductVideoModel,
                            'form'=>$form,
                            'htmlOptions'=>array('class'=>'blank_video_block'),
                        ), false, false);
                        foreach( $productVideoGallery as $video ){
                            $this->renderPartial('_videoGalleryBlock', array(
                                'videoGalleryModel'=>$video,
                                'form'=>$form
                            ), false, false);
                        } 
                    ?>
                </div>
                <a href="#" title="Добавить видео" class="add_video_btn"><img src="/images/addIcon.png"></a>
                
            </div>
        </div>
        <div class="manage_buttons buttons">
            <?php echo CHtml::link('Закрыть', '/administrator/products/', array('class'=>'btn del')); ?>
            <?php echo CHtml::submitButton($bannerModel->isNewRecord?'Создать':'Сохранить', array('class'=>'btn btn-green')); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>
<div id="region_select_dialog" title="Tab data">
    <form id="filial_select_form" name="filial_select_form">
        <fieldset class="ui-helper-reset">
            <label for="tab_region_title">Регион</label>
            <?php echo CHtml::dropDownList( 'tab_title', 1, Contacts::getFilialsArray(), array('id'=>'tab_region_title') ); ?>
        </fieldset>
    </form>
</div>
<script>
    $(function(){
        //Заполненные регионы
        var filledRegions = [<?php foreach($productRegionalData as $regionalData){
                echo $regionalData->filial_id.',';
            } ?>];
                        
        //Инициализация поля для титульного изображения товара
        var titleImageManager = new TitleImageManager();
        function TitleImageManager(){
            var _self = this;
            this.imageWrapper = $('.title_product_image_wrapper');
            this.titleImageFeaturesForm = this.imageWrapper.find('.titleImageFeaturesForm');
            
            this.imageWrapper.on('click','.uploaded_file', function(){
                _self.getTitleImageFeatures();
            });
            
            this.imageWrapper.droppable({
                accept: ":not(.ui-dialog, .dropped_image_wrapper) ",
                hoverClass: "ui-state-active",
                drop: function( event, ui ) {
                    _self.clearArea();
                    var image = ui.draggable.clone().removeAttr('style');
                    image.find('.uploadedImageHiddenArea').attr('name','Products[image]');
                    $(this).append(image);
                    image.find('.delete_image').click(function(){
                        _self.clearArea();
                    });
                }
            }).disableSelection();
            
            this.clearArea = function(){
                _self.imageWrapper.find('.uploaded_file_wrapper').remove();
            }
            
            this.getTitleImageFeatures = function(){
                _self.titleImageFeaturesForm.dialog({
                    resizable: false,
                    width:450,
                    height:400,
                    title:'Параметры изображения',
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
            };
        }
        
        galleryImagesManager = new GalleryImagesManager();
        function GalleryImagesManager(){
            var _self = this;
            this.$imagesWrapper = $('#gallery_images_droppable_block');
            this.$galleryImageFeaturesBlankForm = $('.gallery_image_features_blank_form').remove().clone();
            this.$imagesWrapper.droppable({
                accept: ":not(.ui-dialog, .dropped_image_wrapper) ",
                hoverClass: "ui-state-active",
                drop: function( event, ui ) {
                    var image = ui.draggable.clone().removeAttr('style');
                    $(this).append(image);
                    _self.initImage(image);
                }
            }).sortable({
                stop: function(){
                    $(this).find('.uploaded_file_wrapper').each(function(){
                        _self.imageInputNameAttrProcessing( $(this) );
                    });
                }
            }).disableSelection();
            
            
            this.initImage = function( image ){
                image.find('.delete_image').click(function(){
                        $(this).closest('.uploaded_file_wrapper').remove();
                    });
                    image.addClass('dropped_image_wrapper');
                    _self.initImageFeaturesForm( image );
            }
            
            this.initImageFeaturesForm = function( image ){
                var form;
                if(image.find('.galleryImageFeaturesForm').length==0){
                    form = _self.$galleryImageFeaturesBlankForm.clone();

                    form.attr({'class':'galleryImageFeaturesForm form'});
                    form.find('.imagePath').val(image.find('.uploaded_file').attr('src'));
                        
                    image.attr({'class':'uploaded_file_wrapper dropped_image_wrapper'});
                    image.append(form);
                }
                else{
                    form = image.find('.galleryImageFeaturesForm');
                }

                //Обновить все атрибуты name всех полей ввода форм изображений
                _self.$imagesWrapper.find('.uploaded_file_wrapper').each(function(){
                    _self.imageInputNameAttrProcessing( $(this) );
                });

                image.click(function(){
                    form.dialog({
                        resizable: false,
                        width:450,
                        height:300,
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
            
            
            this.imageInputNameAttrProcessing = function( fileWrapper ){
                var inputNum = _self.$imagesWrapper.find('.uploaded_file_wrapper').index( fileWrapper );
                fileWrapper.find('.imageFeature').each(function(){
                    $(this).attr({'name':$(this).attr('name').replace(/([^\[\]]*\[)(.*)(\]\[.*\])/, '$1'+inputNum+'$3')});
                });
            }
            //Инициализация изначально присутствующих в блоке изображений
            this.$imagesWrapper.find('.dropped_image_wrapper').each(function(){
                    _self.initImage( $(this) );
            })
        }
        
        var galleryVideoManager = new GalleryVideoManager();
        function GalleryVideoManager(){
            var _self = this;
            this.$videosWrapper = $('.product_videos_wrapper');
            
            this.$blankInput = this.$videosWrapper.find('.blank_video_block')
                .closest('span')
                .remove()
                .clone()
                .removeClass('.blank_video_block');
            
            this.$videosWrapper.on('click', '.delete_video_btn', function(e){
                e.preventDefault();
                $(this).closest('span').remove();
            });
            $('.add_video_btn').click(function(e){
                e.preventDefault();
                _self.$videosWrapper.append(_self.$blankInput.clone());
            });
            
        }
        
        //RegionTabs
        function RegionalTabsManager(){
            this.tabTitle = $( "#tab_region_title" ); // Выпадающий список выбора региона
            this.tabTemplate = "<li><a href='#{href}'>#{label}</a> <span class='ui-icon ui-icon-close' role='presentation'>Remove Tab</span></li>";
            this.tabCounter = 1; // Счетчик вкладок
            this.defaultRegionId = <?php echo Yii::app()->params['defaultRegionId']; ?>;
            this.productId = "<?php echo $productModel->id ?>";
            this.tabs; // Tabs Wrapper
            this.regionsSelectDialog; // Диалоговое окно выбора регионов
            this.regionSelectForm; //Форма выбора региона
            var _self = this;

            this.init = function(){
                //Инициализация табов
                this.tabs = $( "#regional_product_data_tabs" ).tabs({
                });
                //Добавление заполненых регионов
                for( var filledRegionsNum = filledRegions.length, i=0; i < filledRegionsNum; i++){
                    _self.addTab(filledRegions[i]);
                }
                
                // Инициализация диалогового окна выбора и добавления региона
                this.regionsSelectDialog = $( "#region_select_dialog" ).dialog({
                    autoOpen: false,
                    modal: true,
                    buttons: {
                        Добавить: function() {
                            _self.addTab( _self.tabTitle.val() );
                            $( this ).dialog( "close" );
                        },
                        Отменить: function() {
                            $( this ).dialog( "close" );
                        }
                    }
                });

                // Обработка события нажатия на кнопку "Добавить регион"
                $( "#add_tab" )
                    .button()
                    .click(function() {
                        _self.regionsSelectDialog.dialog( "open" );
                        return false;
                });

                // Обработка закрытия таба региона
                this.tabs.delegate( "span.ui-icon-close", "click", function() {
                    var panelId = $( this ).closest( "li" ).remove().attr( "aria-controls" );
                    var regionId = $( "#" + panelId ).attr('region_id');
                    $( "#" + panelId ).remove();
                    _self.tabTitle.find('option[value='+regionId+']').removeAttr('disabled');
                    _self.tabs.tabs( "refresh" );
                });

            }

            // Функция добавления таба региона
            this.addTab = function ( regionId ) {
                //Если не выбран регион не выбран
                if( regionId==null ){
                    return;
                }

                $.ajax({
                    url:'/administrator/products/getRegionalData/regionId/'+regionId+'/productId/'+_self.productId,
                    complete:function( data ){
                        var label = _self.tabTitle.find('option[value='+regionId+']').text(),//Название региона
                            id = "tabs-" + _self.tabCounter,
                            li = $( _self.tabTemplate.replace( /#\{href\}/g, "#" + id ).replace( /#\{label\}/g, label ) );
                        //Отключение добавленного региона в списке регионов    
                        _self.tabTitle.find('option[value='+regionId+']').attr({disabled:'disabled'});
                        _self.tabs.find( ".ui-tabs-nav" ).append( li );
                        _self.tabs.append( $(data.responseText).attr({id:id}));
                        _self.tabs.tabs( "refresh" );
                        _self.tabCounter++;
                        tinymce.myOptions.selector = '#'+id+' .with_tinymce'
                        tinymce.init(tinymce.myOptions)
                    }
                })
            }
        }

        <?php if(Yii::app()->user->hasFlash('saved')): ?>
            alertify.success("<?php echo Yii::app()->user->getFlash('saved'); ?>");
        <?php endif; ?>
        var tabsManager = new RegionalTabsManager();
        tabsManager.init();
        $( "#product_features_tabs" ).tabs();
        $(".admin_additional_features").accordion({ header: "h3" , collapsible: true, active:false, heightStyle: "content"});
        $(".menuTreeView li:even",this).addClass("even_menu_item"); 
        $(".menuTreeView li:odd",this).addClass("odd_menu_item");
    })
</script>