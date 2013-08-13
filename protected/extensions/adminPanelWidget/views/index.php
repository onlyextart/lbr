<?
    $header = '';
    $content = '';
    foreach ($menu as $item)
    {
        if ($item['alias']!='tehnika'){
            $header .= '<div id="'.$item['alias'].'" class="fast-menu-header-items-'.$item['level'].'" level="'.$item['level'].'">'.$item['name'].'</div>';
            $content .= '<div class="fast-menu-content-items" id="content-'.$item['alias'].'">'.$item['name'].'</div>';
        }
    } 
?>
<div class="adminPanel" id="adminPanel">
    <a id="administrator-panel" target="_blank" title="Панель управления" href="/administrator/">Панель управления</a>
    <span id="fast-menu" class="button">Быстрое меню</span>
    <span id="user">Добрый день, <? echo $user['surname'].' '.$user['name'].' (<i>'.$user['group_name'].'</i>)'; ?>.</span>
    <? if($type==1){ ?>
        <a target="_blank" href="/administrator/products/update/id/<? echo Yii::app()->params['currentMenuItem']->menuItemsContents[0]->page_id; ?>/" id="edit_page" title="Редактировать страницу товара">Редактировать</a>
    <?}?>
    <a id="shutDown" href="/users/logout/" title="Выйти">Выйти</a>
</div>
<div id="fast-menu-menu">
    <div class="fast-menu-header">
        <? echo $header; ?>
    </div>
    <div class="fast-menu-content">
        <? echo $content; ?>
    </div>
    <span id="fast-menu-hide">x</span>
</div>
<style>
    .adminPanel
    {
        position: fixed;
        width: 100%;
        margin: 0;
        padding: 0;
        height: 32px;
        left: 0;
        bottom: 0;
        background: url('/images/bg_admin_panel.png') repeat;
        z-index: 999;
    }
    .adminPanel span, .adminPanel a
    {
        display: block;
        float: left;
        color: white;
        line-height: 16px;
        border: 0;
        padding: 8px 15px;
        cursor: pointer;
        /*border-right: 2px ridge #b3b3b3;*/
    }
    .adminPanel span#user
    {
        background: url('/images/icon-panel-admin.png') 5px -256px no-repeat;
        padding-left: 33px;
    }
    .adminPanel span#user:hover
    {
        color: #333;
        background-position: 5px -288px;
    }
    .adminPanel span#fast-menu
    {
        color: #fff;
        background: url('/images/icon-panel-admin.png') 5px -64px no-repeat;
        padding-left: 33px;
        margin-right: 142px;
    }
    .adminPanel a#administrator-panel
    {
        background: url('/images/icon-panel-admin.png') no-repeat center -192px ;
        width: 20px;
        height: 32px;
        text-indent: -200px;
        overflow: hidden;
        display: block;
        float: left;
    }
    .adminPanel a#administrator-panel:hover
    {
        background-position: center -224px;
    }
    .adminPanel span#fast-menu:hover, .adminPanel span#fast-menu.active_item
    {
        background-position: 5px -96px;
        color: #333;
    }
    .adminPanel a#shutDown
    {
        position: absolute;
        right: 0px;
        background: url("/images/icon-panel-admin.png") no-repeat scroll center -128px transparent;
        width: 20px;
        height: 32px;
        overflow: hidden;
        text-indent: -200px;
        top: 0px;
    }
    .adminPanel a#edit_page
    {
        position: absolute;
        background: url("/images/icon-panel-admin.png") no-repeat scroll 5px -318px transparent;
        right: 60px;
        padding-left: 33px;
        text-decoration: none;
    }
    .adminPanel a#edit_page:hover
    {
        color: #333;
        background-position: 5px -350px;
    }
    .adminPanel a#shutDown:hover
    {
        background-position: center -160px;
    }
    #fast-menu-menu
    {
        position: fixed;
        top: 0;
        left: 0;
        display: none;
        overflow: auto;
        margin: 0;
        padding: 0;
        z-index: 999;
        background: rgba(255, 255, 255, .8);
        /*background: rgba(168, 168, 168, .8);*/
        /*background: rgba(149, 149, 149, .9);*/
    }
/*    .filter
    {
        filter: url(/css/filter.svg#blur);  FF, IE10 & Opera 
        -webkit-filter: blur(3px);
    }*/
    #fast-menu-menu .fast-menu-header
    {
        width: 96%;
        margin: 10px auto;
        padding: 5px 0 0;
    }
    #fast-menu-menu .fast-menu-content
    {
        width: 96%;
        margin: 10px auto;
        padding: 5px 0 0;
/*        border: 1px solid #F99D1C;
        border-radius: 3px;
        background: rgba(255,255,255,.8);*/
        /*color: rgb(255, 255, 255);*/
    }
    #fast-menu-menu .fast-menu-content div
    {
        display: none;
        margin: 5px 10px;
    }
    
    #fast-menu-menu .fast-menu-content div:first-child
    {
        display: block;
    }
    
    #fast-menu-menu .fast-menu-header div.fast-menu-header-items-2
    {
        background: url('/images/bg_admin_panel.png') repeat-x top left;
        color: white;
        float: left;
        padding: 5px 10px;
        margin: 0 10px;
        border-radius: 3px;
        cursor: pointer;
    }
    #fast-menu-menu #fast-menu-hide
    {
        position: fixed;
        top: 5px;
        right: 5px;
        background: url('/images/bg_admin_panel.png') repeat-x top left;
        color: white;
        width: 21px;
        line-height: 17px;
        text-align: center;
        padding: 0;
        margin: 0;
        font-size: 14px;
        height: 20px;
        border-radius: 2px;
        cursor: pointer;
    }
    #fast-menu-menu .fast-menu-header:after
    {
        content: '';
        clear: both;
        display: block;
    }
</style>
<script>
    $('#fast-menu').click(
        function () {
            if($(this).hasClass('active_item'))
            {
                $(this).removeClass('active_item');
                $('#fast-menu-menu').fadeOut(300);
            }else{
                $(this).addClass('active_item');
                $('#fast-menu-menu').css({'width':$(window).width(),'height':$(window).height()-32})
                $('#fast-menu-menu').fadeIn(300);
            }
        }
    );
    $('#fast-menu-hide').click(function(){
        $('#fast-menu').removeClass('active_item');
        $('#fast-menu-menu').fadeOut(300);
    })
</script>