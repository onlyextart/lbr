<?php
/*
 * $menuModel модель меню
 */
if($menuModel->isNewRecord){
    if( isset($_GET['rootId']) ){
        $rootModel = MenuItems::model()->findByPk($_GET['rootId']);
        if( $rootModel !== null){
            $pageHeader = 'Добавить новый пункт меню в "'.$rootModel->name.'"';
        }
        else{
            $pageHeader = 'Добавить новый пункт меню';
        }
    }
}
else{
    $pageHeader = 'Редактирование пункта меню "'.$menuModel->name.'"';
}
?>
<h2>
    <?php echo $pageHeader ?>
</h2>
<style>
    .admin_main_features{float:left; width:60%;}
    .admin_additional_features{float:left; width:40%;}
    .button-column img{width:16px; height:16px;}
</style>
<div class="form">
<?php $form = $this->beginWidget('CActiveForm', array(
            'id'=>'menuItem_form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
            'validateOnSubmit'=>true,
            'afterValidate'=>'js:function(form, data, hasError){
                    if(!hasError){
                        $.ajax({
                                "type":"POST",
                                "url":$("#menuItem_form").attr("action"),
                                "data":form.serialize(),
                                "success":function(data){$("#test").html(data); setTimeout(function(){
                                    menuTreeView.updateTree('.$menuModel->isNewRecord.');
                                    alertify.success("Сохранено");
                                }, 500);},
                        });
                    }
                    else{
                        alertify.error("Поля формы заполнены не верно");
                    }
                }'
            ),
        )
    );?>
    <div class="admin_main_features">
        <div class="row">
            <?php echo $form->error($menuModel, 'name'); ?>
            <?php echo $form->labelEx($menuModel, 'name'); ?>
            <?php echo $form->textField($menuModel, 'name', array('style'=>'width:95%',)); ?>
        </div>
        <div class="row">
            <?php echo $form->error($menuModel, 'header'); ?>
            <?php echo $form->labelEx($menuModel, 'header'); ?>
            <?php echo $form->textField($menuModel, 'header', array('style'=>'width:95%',)); ?>
        </div>
        <div class="row">
            <?php echo $form->error($menuModel, 'alias'); ?>
            <?php echo $form->labelEx($menuModel, 'alias'); ?>
            <?php echo $form->textField($menuModel, 'alias', array('style'=>'width:95%',)); ?>
        </div>
        <div class="row">
            <?php echo $form->error($menuModel, 'icon'); ?>
            <?php echo $form->labelEx($menuModel, 'icon'); ?>
            <?php echo $form->textField($menuModel, 'icon', array('style'=>'width:95%',)); ?>
        </div>
        <div class="row">
            <?php echo $form->error($menuModel, 'url_mark'); ?>
            <?php echo $form->labelEx($menuModel, 'url_mark'); ?>
            <?php echo $form->textField($menuModel, 'url_mark'); ?>
        </div>
        <div class="row">
            <?php echo $form->error($menuModel, 'published'); ?>
            <?php echo $form->labelEx($menuModel, 'published'); ?>
            <?php echo $form->checkBox($menuModel, 'published'); ?>
        </div>
        <div class="row">
            <?php echo $form->error($menuModel, 'type'); ?>
            <?php echo $form->labelEx($menuModel, 'type'); ?>
            <?php echo $form->dropDownList($menuModel, 'type', array_merge (array('null'=>'Не выбран'), MenuItems::getMenuItemsType())); ?>
        </div>
        <div class="row">
            <?php echo $form->error($menuModel, 'group_id'); ?>
            <?php echo $form->labelEx($menuModel, 'group_id'); ?>
            <?php echo $form->dropDownList($menuModel, 'group_id', MenuGroups::getGroupsArray()); ?>
        </div>
        <div class="row">
        <?php
            echo CHtml::submitButton($menuModel->isNewRecord? 'Создать':'Сохранить',
                array(
                    'id'=>'saveMenuItem'.rand(),
                    'class'=>'btn btn-green'
                )
            );
            echo CHtml::link('Закрыть', '', array('class'=>'btn del', 'onclick'=>'$("#menu_features").html(" ")'))
        ?>
        </div>
    </div>
</div>
<?php  $this->endWidget();?>
