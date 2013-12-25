<?php
Yii::app()->clientScript->registerCssFile('/css/admin/users/users.css');
Yii::app()->clientScript->registerScriptFile('/js/admin/AjaxContentLoader.js');
Yii::app()->clientScript->registerScriptFile('/js/admin/AdminBannersFilter.js');
?>
<h1>Поиск - Топ запросов</h1>
<div class="total">
    <div class="left">
    <div class="create-button">
        <?php
        echo CHtml::link('Создать', '/administrator/search/createtop/', array('class'=>'btn-green btn ajax', 'id'=>'create'));
        ?>   
    </div>
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$data,
        'id'=>'search',
        'itemsCssClass'=>'items',
        'itemView'=>'recommended/_item', // представление для одной записи
        'ajaxUpdate'=>true, // отключаем ajax поведение
        'emptyText'=>'Нет запросов',
        'template'=>'{items}',
        'itemsTagName'=>'ul',
    ));
    ?>
    </div>
    <div class="right">
    <?php 
        $mess = Yii::app()->user->getFlash('message');
        if($mess){
            echo '<div class="message success">'.$mess.'</div>';
        }
    ?>
       
    </div>
</div>
<style>
    .list{
        padding-left: 15px;
    }
    .list li{
        list-style: none;
        position: relative;
    }
    .list li span.name{
        display: block;
        position: relative;
        padding: 2px 20px 0px;
        cursor: pointer;
    }
    .plus{
        position: absolute;
        left: 5px;
        top: 4px;
        z-index: 6;
        width: 10px;
        height: 10px;
        line-height: 10px;
        text-align: center;
        background: none repeat scroll 0% 0% white;
        box-shadow: 0px 0px 2px;
        border-radius: 2px;
        font-size: 10px;
        cursor: default;
    }
    .changed > span.name{
        background: rgb(238,238,238);
        color: rgb(65, 131, 196);
        border-radius: 2px;
    }
    .changed:after
    {
        content: "Эта страница отображается при пустых результатах поиска";
        position: absolute;
        display: none;
        width: 170px;
        background: yellow;
        border-radius: 3px;
        padding: .7em 1.3em;
        top: -52px;
        right: 20px;
        font-size: 11px;
        text-align: center;
        box-shadow: 0 0 3px rgb(200,200,200);
        color: grey;
        z-index: 1;
    }
    .changed:before
    {
        content: "";
        position: absolute;
        display: none;
        width: 0;
        height: 0;
        top: -10px;
        right: 105px;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid yellow;
        z-index: 2;
    }
    .changed:hover:after, .changed:hover:before
    {
        display: block;
    }
    .tree{
        padding: 1em 1em 1em .3em;
        border: 1px solid rgb(221, 221, 221);
        border-radius: 3px;
        box-shadow: 0px 0px 5px rgb(200, 200, 200);
    }
</style>
<script>
$(document).ready(function(){
    var start = new AjaxContentLoader();
    start.init('.left', '.ajax', '.right' ,false);
    start.success = function(html, container){
        $(container).html(html);
        var tree = new AdminBannersFilter();
        tree.option.subfilter = '.level-1';
        tree.tree();
        tree.event = function(){
            var subfilter = $(tree.option.subfilter);
            subfilter.on('click', 'li.item span.name', function(){
                $('#SearchRecommended_menu_item_id').val($(this).parent().attr('id'));
                $('.changed').removeClass('changed');
                $(this).parent().addClass('changed');
            });
        };
        tree.event();
    };
    
});
</script>