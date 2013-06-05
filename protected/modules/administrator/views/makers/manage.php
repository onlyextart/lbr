<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style>
    .uploaded_file_wrapper{
        float:left;
        padding:4px;
    }
    .row:after {
        clear: both;
        content: "";
        display: table;
    }
    .uploaded_file{
        max-width: 100px;
        max-height: 80px;
    }
    .uploaded_file_wrapper input{
        width: auto;
    }
    #logotip{
        margin-left: 38px;
    }
    .delete_image{
        position: absolute;
        top: 2px;
        right: 2px;
        width: 16px;
        cursor: pointer;
    }
    .uploaded_file_wrapper{position:relative; padding: 4px; border:1px solid #EEEEEE; float:left; margin:5px;}

</style>
<script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
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
    <div class="row">
         <?php $this->Widget('ext.fileuploaderWidget.FileuploaderWidget', array(
                        'url'=>'/administrator/fileuploader/upload',
                        'template'=>array(
                            'image'=>true,
                            'radioButton'=>true,
                            'radioButtonLabel'=>'Логотип',
                            'radioButtonName'=>'Makers[logo]',
                            'deleteButton'=>true,
                            
                        ),
                        'uploadCallback'=>'function(responseText){
                                    var uploadedImage = responseText;
                                    var imgList = $("div#img-list");
                                    imgList.append(uploadedImage);}',
                        'postParams'=>array(
                            //'uploadDir'=>'images/uploaded/',
                        ),
                    )
                );
        ?>
        <div id="img-list">
            <?php 
            $this->Widget('ext.fileuploaderWidget.FileuploaderWidget', array(
                    'mode'=>'thumbnail',
                    'imagePath'=>$makerModel->logo,
                    'template'=>array(
                            'image'=>true,
                            'radioButton'=>true,
                            'radioButtonLabel'=>'Логотип',
                            'radioButtonName'=>'Makers[logo]',
                            'deleteButton'=>true,
                        ),
                    )
                ); 
            ?>
        </div>
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