<style>
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
        box-shadow:none;
    }
    .makers_table td{
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
</style>
<h2>
    <?php echo ($contactModel->isNewRecord)?'Создание страницы контакта':'Редактирование контакта "'.$contactModel->name.'"' ?>
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
    'id'=>'contactForm',
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
            <?php echo $form->error( $contactModel, 'name'); ?>
            <?php echo $form->labelEx( $contactModel, 'name'); ?>
            <?php echo $form->textField( $contactModel, 'name'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->error( $contactModel, 'alias'); ?>
            <?php echo $form->labelEx( $contactModel, 'alias'); ?>
            <?php echo $form->textField( $contactModel, 'alias'); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'published'); ?>
            <?php echo $form->labelEx( $contactModel, 'published'); ?>
            <?php echo $form->checkBox( $contactModel, 'published'); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'domain'); ?>
            <?php echo $form->labelEx( $contactModel, 'domain'); ?>
            <?php echo $form->textField( $contactModel, 'domain'); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'address'); ?>
            <?php echo $form->labelEx( $contactModel, 'address'); ?>
            <?php echo $form->textField( $contactModel, 'address'); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'telephone'); ?>
            <?php echo $form->labelEx( $contactModel, 'telephone'); ?>
            <?php echo $form->textField( $contactModel, 'telephone'); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'work_time'); ?>
            <?php echo $form->labelEx( $contactModel, 'work_time'); ?>
            <?php echo $form->textField( $contactModel, 'work_time'); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'email'); ?>
            <?php echo $form->labelEx( $contactModel, 'email'); ?>
            <?php echo $form->textField( $contactModel, 'email'); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'map_code'); ?>
            <?php echo $form->labelEx( $contactModel, 'map_code'); ?>
            <?php echo $form->textField( $contactModel, 'map_code'); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'message_email'); ?>
            <?php echo $form->labelEx( $contactModel, 'message_email'); ?>
            <?php echo $form->textField( $contactModel, 'message_email'); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'info'); ?>
            <?php echo $form->labelEx( $contactModel, 'info'); ?>
            <?php echo $form->textField( $contactModel, 'info'); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'oneC_id'); ?>
            <?php echo $form->labelEx( $contactModel, 'oneC_id'); ?>
            <?php echo $form->textField( $contactModel, 'oneC_id'); ?>
        </div>
    </div>
    <div class="admin_additional_features">
        <label>Дополнительные параметры</label>
        
        
        
        <h3>Пункты меню отображающие страницу товара</h3>
        <div class="admin_additional_features_content">
            <?php
                //получение массива дерева меню
                function getMenuItemConteintigStatusClosure( $contactModel )
                {
                    $status = function( $menuItemId ) use ( &$contactModel ){       
                        return $contactModel->hasMenuItem( $menuItemId );       
                    };
                    return $status;
                }
                $menuItemConteintigStatusClosure = getMenuItemConteintigStatusClosure( $contactModel );
                $this->widget('CTreeView', array(
                    'data' => MenuItems::getMenuTreeWithCheckbox(
                            'MenuItemConteintigThisContact', 
                            $menuItemConteintigStatusClosure,
                            array(MenuItems::CONTACT_MENU_ITEM_TYPE)
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
        <div class="manage_buttons buttons">
            <?php echo CHtml::link('Закрыть', '/administrator/contacts/', array('class'=>'btn del')); ?>
            <?php echo CHtml::submitButton($bannerModel->isNewRecord?'Создать':'Сохранить', array('class'=>'btn btn-green')); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>
<script>
    $(function(){                       
        
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