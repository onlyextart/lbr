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
    <?php echo 'Создать новость' ?>
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
    'id'=>'newsForm',
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
   
        <div class="row">
            <?php echo $form->error( $eventModel, 'header'); ?>
            <?php echo $form->labelEx( $eventModel, 'header'); ?>
            <?php echo $form->textField( $eventModel, 'header'); ?>
        </div>
        
                
           
        
        <div class="row">
            <?php echo $form->error($eventModel, 'published')  ?>
            <?php echo $form->labelEx($eventModel, 'published')  ?>
            <?php echo $form->dropDownList($eventModel, 'published', array (1=>"Опубликовать", 0=>"Не опубликовавыть"))  ?>
        </div>
            
  
    
        <div class="admin_additional_features_content">
            <div class="regional_product_data row">
                <button id="add_tab">Добавить регион</button>
                <div id="regional_product_data_tabs">
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
    
    <div class="manage_buttons buttons">
            <?php echo CHtml::link('Закрыть', '/administrator/news/', array('class'=>'btn del')); ?>
            <?php echo CHtml::submitButton($regionModel->isNewRecord?'Создать':'Сохранить', array('class'=>'btn btn-green')); ?>
        </div>
            
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
        var filledRegions = [<?php foreach($eventRegionalData as $regionalData){
                echo $regionalData->filial_id.',';
            } ?>];
                        
        //RegionTabs
        function RegionalTabsManager(){
            this.tabTitle = $( "#tab_region_title" ); // Выпадающий список выбора региона
            this.tabTemplate = "<li><a href='#{href}'>#{label}</a> <span class='ui-icon ui-icon-close' role='presentation'>Remove Tab</span></li>";
            this.tabCounter = 1; // Счетчик вкладок
            this.defaultRegionId = <?php echo Yii::app()->params['defaultRegionId']; ?>;
            this.$eventId = "<?php echo $eventModel->id ?>";
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
                    url:'/administrator/news/getRegionalData/regionId/'+regionId+'/eventId/'+_self.$eventId,
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