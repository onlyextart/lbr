<script type="text/javascript" src="/js/tinymce_3_x/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        width: "100%",
        mode : "textareas",
        editor_selector: "with_tinymce",
        theme : "advanced",
        language : "ru",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
        relative_urls: false,
        convert_urls : false,

        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
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
    <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'book-form',
    'enableAjaxValidation'=>false,
    'method' => 'post',
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
));
    ?>
        <div class="row">
            <?php echo $form->error( $kpModel, 'title' ); ?>
            <?php echo $form->labelEx( $kpModel, 'title' ); ?>
            <?php echo $form->textField( $kpModel, 'title' ); ?>
        </div>
        <div class="row">
                <?php echo $form->error( $kpModel, 'big_image' ); ?>
                <?php echo $form->labelEx( $kpModel, 'big_image' ); ?>
                <?php echo $form->textArea( $kpModel, 'big_image', array('class'=>'editable') ); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $kpModel, 'description' ); ?>
            <?php echo $form->labelEx( $kpModel, 'description' ); ?>
            <?php echo $form->textArea( $kpModel, 'description', array('class'=>'with_tinymce') ); ?>
        </div>
    
        <div class="row">
            <?php echo $form->error( $kpModel, 'description2' ); ?>
            <?php echo $form->labelEx( $kpModel, 'description2' ); ?>
            <?php echo $form->textArea( $kpModel, 'description2', array('class'=>'with_tinymce') ); ?>
        </div>
    
        <div class="row">
        <?
            echo $form->error($kpModel, 'type');
            echo $form->labelEx($kpModel, 'type');
            echo $form->dropDownList($kpModel, 'type', array('1'=>'Single', '2'=>'Multi'));
            ?>
        </div>
        <div class="row">
            <?php echo $form->error($kpModel, 'small_image'); ?>
            <?php echo $form->labelEx($kpModel, 'small_image'); ?>
            <?php echo $form->textArea($kpModel, 'small_image', array('class'=>'editable')); ?>
        </div>
   <div class="manage_buttons buttons">
            <?php echo CHtml::link('Закрыть', 'administrator/templateKp/', array('class'=>'btn del')); ?>
            <?php echo CHtml::submitButton($kpModel->isNewRecord?'Создать и закрыть':'Сохранить и закрыть', array('class'=>'btn btn-green')); ?>
            <?php echo CHtml::submitButton($kpModel->isNewRecord?'Создать':'Сохранить', array('class'=>'btn btn-green')); ?>
        </div>
    <?php $this->endWidget(); ?>
    <div class="row">
    <?
    $this->Widget('ext.fileuploaderWidget.FileuploaderWidget', array(
            'template'=>array(
                'image',
            ),
            'uploadCallback'=>'
                function( $newUploadedFileWrapper ){
                    $newUploadedFileWrapper.draggable({
                        revert: true,
                        appendTo: "body"
                    });
                    $(".editable").droppable({
                        activeClass: "ui-state-hover",
                        hoverClass: "ui-state-active",
                        drop: function( event, ui ) {
                            if($(this).attr("id")=="TemplateKp_small_image")
                            {
                                if($(this).html()=="" || $(this).html()==" ")
                                    $(this).append(ui.draggable.find("img").attr("src"));
                                else
                                    $(this).append("||"+ui.draggable.find("img").attr("src"));
                            }
                            else
                                $(this).val(ui.draggable.find("img").attr("src"));
                                
                        },
                    });
                }'
        )
    );
    ?>
    </div>
</div>
<style>
.manage_buttons
{
    position: fixed;
    top: 50px;
    right: 30px;
}
div.manage_buttons input
{
    margin:0px;
}
.row {
    margin: 0; /* Обнуляем значение отступов */
    width: 40%;
}
div.form .row input,
div.form .row textarea
{
    width: 100%;
}
</style>


