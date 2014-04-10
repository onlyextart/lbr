<?php if(!Yii::app()->user->isGuest):?>
    <style>
        .edit
        {
            position: absolute;
            top: 10px;
            left: 100%;
            padding: 0px 5px 0 35px;
            background: url('/images/bg_admin_panel.png') repeat;
            height: 32px;
            color: white;
            text-decoration: none;
            border-radius: 0 3px 3px 0;
            z-index: 1;
        }
        .edit .icon
        {
            background: url(/images/icon-panel-admin.png) no-repeat 0 -318px;
            width: 20px;
            height: 32px;
            position: absolute;
            left: 10px;
            top: 0;
        }
        .edit span.text
        {
            line-height: 32px;
            display: none;
            padding: 0 5px;
        }
        .edit:hover span.text
        {
            display: inline;
        }
    </style>
        <a class="edit" href="/administrator/banners/update/id/<?php echo $data->id;?>/">
            <i class="icon"></i><span class="text">Редактировать</span>
        </a>
<?php endif;