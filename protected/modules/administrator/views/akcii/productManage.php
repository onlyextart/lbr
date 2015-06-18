<style>
    .admin_main_features{float:left; width:60%;}
    .admin_additional_features{float:left; width:40%;}
    .button-column img{width:16px; height:16px;}
    .imageSolid .akcii_text textArea{
        width:300px;
        height:50px;
    }
    .imageSolid .akcii_percent input{
        width:60px;
    }
    .hide{
        display:none;
    }
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

        $(".akcii_img").click(function(){
            $(".imageSolid").dialog({
                    resizable: false,
                    width:400,
                    title:'Параметры плашки',
                    modal: true,
                    beforeClose: function( event, ui ) {
                        $(this).dialog( "destroy" );
                    },
                    buttons: {
                        "Сохранить": function( ) {
                            if(parseInt($(".akcii_percent input").val())>0&&parseInt($(".akcii_percent input").val())<100){
                                $( this ).dialog( "destroy" )
                            }
                            else{
                                alert("Процент скидки должен быть целым числом от 1 до 99");
                            }
                        }
                    }
             });
         });
         
         $(".solid_type select").change(function(){
             status=$(".solid_type select").val();
             if(status==<?= AkciiProduct::DEFAULT_IMAGE_TYPE?>){
                 $(".akcii_text, .akcii_percent").addClass('hide');
             }
             else{
                 $(".akcii_text, .akcii_percent").removeClass('hide');
             }
         });

        <?php if (Yii::app()->user->hasFlash('saved')): ?>
            alertify.success("<?php echo Yii::app()->user->getFlash('saved'); ?>");
        <?php endif; ?>
    });
</script>


<?php
  if($productAkciiModel->isNewRecord){
    $pageHeader = 'Создание товара';
}
else{
    $pageHeader = 'Редактирование товара';
}
?>
<h2>
    <?php echo $pageHeader;?>
</h2>

<div class="product-name"><span><?php echo $productAkciiModel->menu_items->name; ?></span></div>

<div class="form">
    <?php $form = $this->beginWidget('CActiveForm', array(
            'id'=>'productAkciiModel_form',
            'htmlOptions'=>array('enctype'=>'multipart/form-data'),
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
                'validateOnChange'=>true,
                'afterValidate'=>'js:function(form, data, hasError){
                                if(!hasError){
                                    $.ajax({
                                            "type":"POST",
                                            "url":$("#productAkciiModel_form").attr("action"),
                                            "data":form.serialize(),
                                            "success":function(data){$("#test").html(data); setTimeout(function(){
                                                alertify.success("Сохранено");
                                                
                                            }, 500);},
                                    });
                                }
                                else{
                                    alertify.error("Поля формы заполнены неверно");
                                }
                            }'
            ),
        )
    );?>
    
    <div class="product-prop">
        
    <div class="row published">
        <?php echo $form->error($productAkciiModel, 'published'); ?>
        <?php echo $form->labelEx($productAkciiModel, 'published'); ?>
        <?php echo $form->checkBox($productAkciiModel, 'published'); ?>
    </div>
    <div class="row product-description">
        <?php echo $form->error($productAkciiModel, 'description'); ?>
        <?php echo $form->labelEx($productAkciiModel, 'description'); ?>
        <?php echo $form->textArea($productAkciiModel, 'description'); ?>
    </div>
    </div>
    <div class="product-img-wrapper" style="position:relative;">
        <div class="product-img" style="height:100px; width:305px;position:absolute;right:0px;">
            <img src="<?php echo Yii::app()->baseUrl.$product_img; ?>" class="akcii_img">
        </div>
        <div style="position:absolute; top:150px; height:50px; width:305px; z-index: 10; background-color: red; float:left;right:0px;">
            vvv
        </div>
        
    </div>
    <div class="imageSolid form" style="display:none">
        <div class="row solid_type">
            <?php echo $form->error($productAkciiModel, 'solid_type'); ?>
            <?php echo $form->labelEx($productAkciiModel, "solid_type"); ?>
            <?php echo $form->dropDownList($productAkciiModel, "solid_type", AkciiProduct::getImageTypes()); ?>
        </div>
        <div class="row akcii_percent">
            <?php echo $form->error($productAkciiModel, 'solid_percent'); ?>
            <?php echo $form->labelEx($productAkciiModel, "solid_percent"); ?>
            <?php echo $form->textField($productAkciiModel, "solid_percent"); ?>
        </div>
        <div class="row akcii_text">
            <?php echo $form->error($productAkciiModel, 'solid_text_top'); ?>
            <?php echo $form->labelEx($productAkciiModel, "solid_text_top"); ?>
            <?php echo $form->textArea($productAkciiModel, "solid_text_top"); ?>
        </div>
        <div class="row akcii_text">
            <?php echo $form->error($productAkciiModel, 'solid_text_bottom'); ?>
            <?php echo $form->labelEx($productAkciiModel, "solid_text_bottom"); ?>
            <?php echo $form->textArea($productAkciiModel, "solid_text_bottom"); ?>
        </div>
    </div>
    
    <div style="clear:both"></div>

    <div class="row">
        <?php 
            echo CHtml::SubmitButton($productAkciiModel->isNewRecord?'Создать':'Сохранить',array('class'=>'btn btn-green')); 
            echo CHtml::link('Закрыть', '', array('class'=>'btn del', 'onclick'=>'$("#akcii_features").html(" ")'));
        ?>
    </div> 
    <?php $this->endWidget(); ?>
</div>


