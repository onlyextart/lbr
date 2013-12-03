<?php
/* @var $this ContacsController */
Yii::app()->clientScript->registerCssFile('/css/form.css');
Yii::app()->clientScript->registerScriptFile('/js/site/XbannersSlider.js');
Yii::app()->clientScript->registerScriptFile('/js/site/contact.js');
?>
<h1><?php echo $contactModel->name ?></h1>
<div class="contact_info">
    <table>
        <tr>
            <td>
                <img class="contact_icon" src="/images/addressIcon.png">
            </td>
            <td>
                <?php echo $contactModel->address ?>
            </td>
        </tr>
        <tr>
            <td>
                <img class="contact_icon" src="/images/phoneIcon.png">
            </td>
            <td>
                <?php echo $contactModel->telephone ?>
            </td>
        </tr>
        <tr>
            <td>
                <img class="contact_icon" src="/images/workTimeIcon.png">
            </td>
            <td>
                <?php echo $contactModel->work_time ?>
            </td>
        </tr>
        <tr>
            <td>
                <img class="contact_icon" src="/images/mailIcon.png">
            </td>
            <td>
                <?php echo $contactModel->email ?>
            </td>
        </tr>
        <tr>
            <td>
                <img class="contact_icon" src="/images/infoIcon.png">
            </td>
            <td>
                <?php echo $contactModel->info ?>
            </td>
        </tr>
    </table>
    
</div>
<?php
$file = explode('/', $contactModel->images);
unset($file[count($file)-1]);
$dir = implode('/', $file);
$path = $_SERVER['DOCUMENT_ROOT'] .'/'. $dir.'/';
$images = scandir($path);
?>
<div class="contact-images">
    <div class="scrollRight"></div>
    <div class="c_images_overflow">
        <div class="c_images_conteiner">
                <?php
                if (false !== $images) {
                    $images = preg_grep('/\\.(?:png|gif|jpe?g)$/', $images);
                    foreach ($images as $image){
                        echo '<section class="c_images_one_image">';
                        echo '<img data-scr="/'.$dir.'/'.htmlspecialchars(urlencode($image)).'" src="/'.$dir.'/'.htmlspecialchars(urlencode($image)).'" alt="'.$contactModel->name.'" />';
                        echo '</section>';
                    }
                }
                ?>
        </div>
    </div>
    <div class="scrollLeft"></div>
</div>
<div class="contact_map">
    <?php echo $contactModel->map_code ?>
</div>
<div class="contact_form form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
            'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Поля отмеченные <span class="required">*</span> обязательны при заполнении.</p>

	<?php echo $form->errorSummary($formModel); ?>

	<div class="row">
		<?php echo $form->labelEx($formModel,'name'); ?>
		<?php echo $form->textField($formModel,'name', array('class'=>'contact_form_field')); ?>
		<?php echo $form->error($formModel,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($formModel,'email'); ?>
		<?php echo $form->textField($formModel,'email', array('class'=>'contact_form_field')); ?>
		<?php echo $form->error($formModel,'email'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($formModel,'phone'); ?>
		<?php echo $form->textField($formModel,'phone', array('class'=>'contact_form_field')); ?>
		<?php echo $form->error($formModel,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($formModel,'body'); ?>
		<?php echo $form->textArea($formModel,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($formModel,'body'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Отправить', array('class'=>'btn')); ?>
	</div>

    <?php $this->endWidget(); ?>

</div>