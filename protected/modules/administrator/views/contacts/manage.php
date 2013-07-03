<?php
/*
 * @property integer $id
 * @property integer $name
 * @property string $alias
 * @property boolean $published
 * @property string $domain
 * @property string $address
 * @property string $telephone
 * @property string $work_time
 * @property string $email
 * @property string $map_code
 * @property string $message_email
 * @property string $info
 * @property string $images
 */
?>
<div class="form" align="center">
    <?php $form = $this->beginWidget( 'CActiveForm', array(
                'id'=>'contect_form',
            ) 
        );
    ?>
    <div class="row" >
        <?php echo $form->error( $contactModel, 'name' ); ?>
        <?php echo $form->labelEx( $contactModel, 'name' ); ?>
        <?php echo $form->textField( $contactModel, 'name' ); ?>
    </div>
    <div class="row">
        <?php echo $form->error( $contactModel, 'alias' ); ?>
        <?php echo $form->labelEx( $contactModel, 'alias' ); ?>
        <?php echo $form->textField( $contactModel, 'alias' ); ?>
    </div>
    <div class="row">
        <?php echo $form->error( $contactModel, 'published' ); ?>
        <?php echo $form->labelEx( $contactModel, 'published' ); ?>
        <?php echo $form->checkBox( $contactModel, 'published' ); ?>
    </div>
    <div class="row">
        <?php echo $form->error( $contactModel, 'domain' ); ?>
        <?php echo $form->labelEx( $contactModel, 'domain' ); ?>
        <?php echo $form->textField( $contactModel, 'domain' ); ?>
    </div>
    <div class="row">
        <?php echo $form->error( $contactModel, 'address' ); ?>
        <?php echo $form->labelEx( $contactModel, 'address' ); ?>
        <?php echo $form->textarea( $contactModel, 'address' ); ?>
    </div>
    <div class="row">
        <?php echo $form->error( $contactModel, 'telephone' ); ?>
        <?php echo $form->labelEx( $contactModel, 'telephone' ); ?>
        <?php echo $form->textField( $contactModel, 'telephone' ); ?>
    </div>
    <div class="row">
        <?php echo $form->error( $contactModel, 'work_time' ); ?>
        <?php echo $form->labelEx( $contactModel, 'work_time' ); ?>
        <?php echo $form->textField( $contactModel, 'work_time' ); ?>
    </div>
    <div class="row">
        <?php echo $form->error( $contactModel, 'email' ); ?>
        <?php echo $form->labelEx( $contactModel, 'email' ); ?>
        <?php echo $form->textField( $contactModel, 'email' ); ?>
    </div>
    <div class="row">
        <?php echo $form->error( $contactModel, 'map_code' ); ?>
        <?php echo $form->labelEx( $contactModel, 'map_code' ); ?>
        <?php echo $form->textarea( $contactModel, 'map_code' ); ?>
    </div>
    <div class="row">
        <?php echo $form->error( $contactModel, 'message_email' ); ?>
        <?php echo $form->labelEx( $contactModel, 'message_email' ); ?>
        <?php echo $form->textarea( $contactModel, 'message_email' ); ?>
    </div>
    <div class="row">
        <?php echo $form->error( $contactModel, 'info' ); ?>
        <?php echo $form->labelEx( $contactModel, 'info' ); ?>
        <?php echo $form->textarea( $contactModel, 'info' ); ?>
    </div>
    <?php echo CHtml::SubmitButton( $contactModel->isNewRecord?'Создать':'Сохранить' ); ?>
    <?php $this->endWidget(); ?>
</div>
