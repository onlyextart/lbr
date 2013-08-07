<div class="adminPanel" id="adminPanel">
    <a id="administrator-panel" target="_blank" title="Панель управления" href="/administrator/">Панель управления</a>
    <span id="fast-menu" class="button">Быстрое меню</span>
    <span id="user">Добрый день, <? echo $user['surname'].' '.$user['name'].' (<i>'.$user['group_name'].'</i>)'; ?>.</span>
    <? if($type==1){ ?>
        <a target="_blank" href="/administrator/products/update/id/<? echo Yii::app()->params['currentMenuItem']->menuItemsContents[0]->page_id; ?>/" id="edit_page" title="Редактировать страницу товара">Редактировать</a>
    <?}?>
    <a id="shutDown" href="/users/logout/" title="Выйти">Выйти</a>
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
</style>