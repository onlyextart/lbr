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
</style>
<div class="form">
    <?php $form = $this->beginWidget('CActiveForm', array(
            'id'=>'bannerForm',
        )
    ); ?>
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
    <div class="regional_features_wrapper">
        <div class="all_regions_forms">
            <?php foreach( $regionalBanners as $regionId => $regionalBanner ): ?>
            <div class="regional_features <?php echo 'region_form_'.$regionId ?>" region_id="<?php echo $regionId ?>">
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
            <?php endforeach; ?>
        </div>
        <div id="dialog" title="Tab data">
            <form id="filial_select_form">
                <fieldset class="ui-helper-reset">
                    <label for="tab_title">Title</label>
                    <?php echo CHtml::dropDownList( 'tab_title', 1, Contacts::getFilialsArray(), array('id'=>'tab_title') ); ?>
                </fieldset>
            </form>
        </div>

        <button id="add_tab">Add Tab</button>

        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Default</a></li>
            </ul>
            <div id="tabs-1">
                <div class="regional_features <?php echo 'region_form_'.$regionId ?>">
                    <div class="row ">
                        <?php echo $form->error( $regionalBanners[Yii::app()->params['defaultRegionId']],
                                "[".Yii::app()->params['defaultRegionId']."]name" ); ?>
                        <?php echo $form->labelEx( $regionalBanners[Yii::app()->params['defaultRegionId']],
                                "[".Yii::app()->params['defaultRegionId']."]name" ); ?>
                        <?php echo $form->textField( $regionalBanners[Yii::app()->params['defaultRegionId']],
                                "[".Yii::app()->params['defaultRegionId']."]name" ); ?>
                    </div>
                    <div class="row">
                        <?php echo $form->error( $regionalBanners[Yii::app()->params['defaultRegionId']],
                                "[".Yii::app()->params['defaultRegionId']."]description" ); ?>
                        <?php echo $form->labelEx( $regionalBanners[Yii::app()->params['defaultRegionId']],
                                "[".Yii::app()->params['defaultRegionId']."]description" ); ?>
                        <?php echo $form->textarea( $regionalBanners[Yii::app()->params['defaultRegionId']],
                                "[".Yii::app()->params['defaultRegionId']."]description" ); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php echo CHtml::submitButton($bannerModel->isNewRecord?'Создать':'Сохранить'); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>
<script>
    $(function() {
        var tabTitle = $( "#tab_title" ),
            tabTemplate = "<li><a href='#{href}'>#{label}</a> <span class='ui-icon ui-icon-close' role='presentation'>Remove Tab</span></li>",
            tabCounter = 2,
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
        
        //Удаление региона "default" из списка выбора регионов
        tabTitle.find('option[value=<?php echo Yii::app()->params['defaultRegionId'] ?>]').remove();
        
        
        // modal dialog init: custom buttons and a "close" callback reseting the form inside
        var dialog = $( "#dialog" ).dialog({
            autoOpen: false,
            modal: true,
            buttons: {
                Add: function() {
                    addTab();
                    $( this ).dialog( "close" );
                },
                Cancel: function() {
                    $( this ).dialog( "close" );
                }
            },
            close: function() {
                //$('#filial_select_form').reset();
            }
        });

        // addTab form: calls addTab function on submit and closes the dialog
        var form = dialog.find( "form" ).submit(function( event ) {
            addTab();
            dialog.dialog( "close" );
            event.preventDefault();
        });

        // actual addTab function: adds new tab using the input from the form above
        function addTab() {
            var label = tabTitle.find('option[value='+tabTitle.val()+']').text() || false,
                id = "tabs-" + tabCounter,
                li = $( tabTemplate.replace( /#\{href\}/g, "#" + id ).replace( /#\{label\}/g, label ) ),
                regionId = tabTitle.val();
                
            if( !label ){
                return;
            }
            var tabContentHtml = regionalFormsObject[tabTitle.val()].html();
            tabTitle.find('option[value='+tabTitle.val()+']').attr({disabled:'disabled'});
            tabs.find( ".ui-tabs-nav" ).append( li );
            tabs.append( "<div id='" + id + "' region_id='" +regionId+ "'>" + tabContentHtml + "</div>" );
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
            var panelId = $( this ).closest( "li" ).remove().attr( "aria-controls" );
            var regionId = $( "#" + panelId ).attr('region_id');
            $( "#" + panelId ).remove();
            tabTitle.find('option[value='+regionId+']').removeAttr('disabled');
            tabs.tabs( "refresh" );
        });
    });
</script>
