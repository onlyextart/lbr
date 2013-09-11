<style>


.manage_buttons{
        position: fixed;
        top: 50px;
        right: 30px;
    }
div.manage_buttons input{
        margin:0px;
    }
    
    .row {

    margin: 0 auto; /* Обнуляем значение отступов */
    
    }
    
</style>
<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'book-form',
    'enableAjaxValidation'=>false,
    'method' => 'post',
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
));
    ?>
    <div class="admin_main_features">
        <div class="row" >
            <?php echo $form->error( $kpModel, 'title' ); ?>
            <?php echo $form->labelEx( $kpModel, 'title' ); ?>
            <?php echo $form->textField( $kpModel, 'title' ); ?>
        </div>
        <div class="admin_additional_features_content">
            <?php 
            $previouslyUploadedFiles = array();
            if( !$kpModel->isNewRecord ){
                    $allUniqueImagesInKp = TemplateKp::model()->findAll(
                            'id='.$kpModel->id.' GROUP BY path');
                    foreach( $allUniqueImagesInKp as $image ){
                        $previouslyUploadedFiles[$image->path]="";
                    }
            }
            $this->Widget('ext.fileuploaderWidget.FileuploaderWidget', array(
                    'template'=>array(
                        'image',
                    ),
                    'uploadCallback'=>'
                        function( $newUploadedFileWrapper ){
                            $newUploadedFileWrapper.draggable({
                                helper: "clone", 
                                appendTo : "body",
                                revert: true
                            });
                        }',
                    'previouslyUploadedFiles'=>$previouslyUploadedFiles,
                )
            );
            ?>
        </div>
        <div class="row">
            <?php echo $form->error( $kpModel, 'description' ); ?>
            <?php echo $form->labelEx( $kpModel, 'description' ); ?>
            <?php echo $form->textField( $kpModel, 'description' ); ?>
        </div>
        
        <div class="row">
            <?php echo $form->error( $kpModel, 'type' ); ?>
            <?php echo $form->labelEx( $kpModel, 'type' ); ?>
            <?php echo $form->checkBox( $kpModel, 'type' ); ?>
        </div>
       
        
    </div>
    <div class="row">
        <?php echo $form->labelEx($kpModel, 'small_image'); ?>
        <?php echo $form->fileField($kpModel, 'small_image'); ?>
        <?php echo $form->error($kpModel, 'small_image'); ?>
    </div><br>
    <?php echo CHtml::SubmitButton("Добавить фотографию", 
        array('id' => 'some_unique_id')
);?>
    
    <div class="manage_buttons buttons">
        <?php echo CHtml::link('Закрыть', '/administrator/templatekp/', array('class'=>'btn del')); ?>
        <?php echo CHtml::submitButton($kpModel->isNewRecord?'Создать':'Сохранить', array('class'=>'btn btn-green')); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>


