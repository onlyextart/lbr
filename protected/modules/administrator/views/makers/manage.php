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
</style>
<script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.myOptions = {
    selector: ".with_tinymce",
    //width : '50%',
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor"
    ],
    theme_advanced_resizing : true,
    theme_advanced_resizing_horizontal : true,
    theme_advanced_resizing_vertical : true,
    resize : true,
    resize_horizontal : true,
    resize_vertical : true,
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
}
tinymce.init(tinymce.myOptions);

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
    <div class="row">
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
    <div class="row">
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
        <?php echo CHtml::submitButton( $makerModel->isNewRecord?'Создать':'Сохранить' ); ?>
    </div>    
<?php $this->endWidget() ?>
</div>