<style>
    .admin_main_features{float:left; width:60%;}
    .admin_additional_features{float:left; width:40%;}
    .button-column img{width:16px; height:16px;}
</style>
<script type="text/javascript">
    $(function(){
        tinyMCE.init({
            width: "100%",
            mode : "textareas",
            editor_selector: "with_tinymce",
            theme : "advanced",
            language : "ru",
            plugins : "jbimages,autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
            relative_urls: false,
            convert_urls : false,

            theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect,jbimages",
            theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
            theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
            theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
            theme_advanced_toolbar_location : "top",
            theme_advanced_toolbar_align : "left",
            theme_advanced_statusbar_location : "bottom",
            theme_advanced_resizing : true

        });

        <?php if (Yii::app()->user->hasFlash('saved')): ?>
            alertify.success("<?php echo Yii::app()->user->getFlash('saved'); ?>");
        <?php endif; ?>
    });
</script>
<?php

if($groupAkciiModel->isNewRecord){
    $pageHeader = 'Создание группы';
}
else{
    $pageHeader = 'Редактирование группы';
}
?>
<h2>
    <?php echo $pageHeader ?>
</h2>
<div class="mightiness-menu-label menu_color_group_<?php echo $groupAkciiModel->menu_items->group_id; ?>" style="background-image: url(<?php echo Yii::app()->request->baseUrl.$groupAkciiModel->menu_items->mightiness_ico; ?>">
        <span><?php echo $groupAkciiModel->menu_items->name; ?></span>
</div>
<div class="form">
    <?php $form = $this->beginWidget('CActiveForm', array(
            'id'=>'groupAkciiModel_form',
            'htmlOptions'=>array('enctype'=>'multipart/form-data'),
            'enableClientValidation'=>true,
            'clientOptions'=>array(
            'validateOnSubmit'=>true,
            'validateOnChange'=>true,
            'afterValidate'=>'js:function(form, data, hasError){
                                if(!hasError){
                                    $.ajax({
                                            "type":"POST",
                                            "url":$("#groupAkciiModel_form").attr("action"),
                                            "data":form.serialize(),
                                            "success":function(data){$("#test").html(data); setTimeout(function(){
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
    
    <div class="row published">
        <?php echo $form->error($groupAkciiModel, 'published'); ?>
        <?php echo $form->labelEx($groupAkciiModel, 'published'); ?>
        <?php echo $form->checkBox($groupAkciiModel, 'published'); ?>
    </div>
    <div class="row range">
        <?php echo $form->error($groupAkciiModel, 'range'); ?>
        <?php echo $form->labelEx($groupAkciiModel, 'range'); ?>
        <?php echo $form->textField($groupAkciiModel, 'range'); ?>
    </div>
    <div class="row">
        <?php echo $form->error($groupAkciiModel, 'anchor'); ?>
        <?php echo $form->labelEx($groupAkciiModel, 'anchor'); ?>
        <?php echo $form->textField($groupAkciiModel, 'anchor'); ?>
    </div>
    <div class="row description">
        <?php echo $form->error($groupAkciiModel, 'description'); ?>
        <?php echo $form->labelEx($groupAkciiModel, 'description'); ?>
        <?php echo $form->textArea($groupAkciiModel, 'description',array('class'=>'with_tinymce')); ?>
    </div>
    <div class="row">
        <?php 
            echo CHtml::SubmitButton($groupAkciiModel->isNewRecord?'Создать':'Сохранить',array('class'=>'btn btn-green')); 
            echo CHtml::link('Закрыть', '', array('class'=>'btn del', 'onclick'=>'$("#akcii_features").html(" ")'));
        ?>
    </div> 
    <?php $this->endWidget(); ?>
</div>
