<script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#TemplateKp_description",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
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
            <?php echo $form->textArea( $kpModel, 'description' ); ?>
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
        <?php echo CHtml::link('Закрыть', '/administrator/templatekp/', array('class'=>'btn del')); ?>
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


