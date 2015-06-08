<?php
/*
В действие Index контроллера administrator/menu определена переменная $menuModel
содержащая модель MENU со всеми пунктами меню.
 */
//var_dump($menuTreeArray);
Yii::app()->clientScript->registerCssFile('/css/admin/admin.css');
Yii::app()->clientScript->registerScriptFile('/js/tinymce_3_x/tiny_mce.js');
?>
    
<h2 class="col ">Менеджер акций</h2>
<div class="menuTreeViewWrapper">
    <?php
    $this->widget('CTreeView', 
        array(
            'data' => $menuTreeArray, 
            'animated'=>100, 
            'htmlOptions'=>array('class'=>'menuTreeView'),
        )
    );
    ?>
</div>
<div id="akcii_features">
        
</div>
<script>
 //nemuItemForm
function MenuTreeViewConstructor(jQuery){
    var thisObject = this;
    this.jQuery = jQuery;
    
    this.showForm = function( linkElement ){
        $('#akcii_features').append('<div class="ui-widget-overlay ui-front"></div>');
        $.ajax({
            url: linkElement.href
        }).done(function ( data ) {
            $('#akcii_features').html( data );
        });
    }
    this.updateTree = function( clearMenuFeaturesWrapper ){
        $.ajax({
            type: "POST",
            url: '/administrator/menu/menuTree',
            data: thisObject.getOpenItemsId()
        }).done(function ( data ) {
            $('.menuTreeViewWrapper').html( data );
            thisObject.jQuery(function($) {
                thisObject.treeObject = thisObject.jQuery(".menuTreeView").treeview({'animated':100});
            });
            if( clearMenuFeaturesWrapper ){
                $('#akcii_features').html('');
            }
        });
    }
    this.deleteItem = function( linkElement ){
        $.ajax({
            url: linkElement.href
        }).done(function ( data ) {
            setTimeout(thisObject.updateTree( true ), 600);
        });
    }
    this.sortItem = function( linkElement ){
        $.ajax({
            url: linkElement.href
        }).done(function ( data ) {
            setTimeout(thisObject.updateTree( true ), 600);
        });
    }
    this.changePublishing = function( linkElement ){
        $.ajax({
            url: linkElement.href
        }).done(function ( data ) {
            setTimeout(thisObject.updateTree( true ), 600);
        });
    }
    this.getOpenItemsId = function(){
        var openItemsIdObject = {};
        var i = 0;
        $('.collapsable').each(function(){
            openItemsIdObject['OpenItems['+i+']'] = $(this).attr('id');
            i++;
        });
        return openItemsIdObject;
    }
 }
 menuTreeView = new MenuTreeViewConstructor(jQuery);
</script>