<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style>
    .row:after {
        clear: both;
        content: "";
        display: table;
    }
    .uploaded_file_wrapper input{
        width: auto;
    }
    .uploaded_file_wrapper > label
    {
        position: absolute;
        bottom: 0px;
        left: 0px;
        background: none repeat scroll 0% 0% #F5F5DC;
        width: 100%;
        text-align: center;
        height: 30px;
    }
    .row.published label
    {
        display: inline;
    }
    .row.published input
    {
        width: auto;
    }
</style>
<script type="text/javascript" src="/js/tinymce_3_x/tiny_mce.js"></script>
<script type="text/javascript">
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
</script>
<div class="form">    
<?php

$form = $this->beginWidget('CActiveForm', array(
    'id'=>'makers_form',
    'enableClientValidation'=>true,
            'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                    'afterValidate'=>'js:function( form, data, hasError ) 
                        {     
                            if( hasError ){
                              return false;
                            }
                            else{
                                if(confirm("Внимание! Изображение выбранное логотипом производителя будет пропорционально уменьшено до высоты 70 пикселей.")){
                                    return true;
                                }
                            }
                        }'
            )
        )
    )
?>
    <div class="row photo-manager">
        <?php  
            $previouslyUploadedFiles=array();
            if($makerModel->logo !== null){
                $previouslyUploadedFiles=array(
                        $makerModel->logo=>array(
                            'radioButton'=>'checked',
                    ),
                );
            }
        ?>
        <?php $this->Widget('ext.fileuploaderWidget.FileuploaderWidget', array(
                    'template'=>array(
                        'image',
                        array(
                            'name'=>'radioButton',
                            'label'=>'Логотип ',
                            'nameAttr'=>'Makers[logo]',
                        ),
                        'deleteButton',
                    ),
                    'previouslyUploadedFiles'=>$previouslyUploadedFiles,
                    'uploadCallback'=>'function(responseText){}',
                    'postParams'=>array(
                    ),
                )
            );
        ?>
    </div>    
    <div class="row">
        <?php echo $form->error( $makerModel, 'name' ); ?>
        <?php echo $form->labelEx( $makerModel, 'name' ); ?>
        <?php echo $form->textField( $makerModel, 'name' ); ?>
    </div>    
    <div class="row published">
        <?php echo $form->error( $makerModel, 'published' ); ?>
        <?php echo $form->labelEx( $makerModel, 'published' ); ?>
        <?php echo $form->checkBox( $makerModel, 'published' ); ?>
    </div>    
    <div class="row">
        <?php echo $form->error( $makerModel, 'description' ); ?>
        <?php echo $form->labelEx( $makerModel, 'description' ); ?>
        <?php echo $form->textarea( $makerModel, 'description', array('class'=>'with_tinymce') ); ?>
    </div>    
    <div class="row">
        <?php echo CHtml::submitButton( $makerModel->isNewRecord?'Создать':'Сохранить', array('class'=>'btn btn-green') ); ?>
        <?php echo CHtml::link('Закрыть', '/administrator/makers/', array('class'=>'btn') ); ?>
    </div>
<?php $this->endWidget() ?>
</div>