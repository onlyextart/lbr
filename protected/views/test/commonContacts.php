<?php
Yii::app()->clientScript->registerCssFile('/css/form.css');
$js = <<< EOJ
function afterValidate() {
    $('html, body').animate({
        scrollTop: $(".contact_form_common").offset().top
    }, 2000);
}
EOJ;
Yii::app()->clientScript->registerScript('afterValidate', $js);
?>

<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="info">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

<!--div class="form">
    <?php //echo $form->errorSummary($formModel); ?>
</div-->

<h1 class="middle">Контакты ЛБР-АгроМаркет</h1>
<?php echo $output; ?>

<!-- Map of Russia -->
<div class="contact-additional-info">
    <a class="view_all_contacts" href="<?php echo Yii::app()->getBaseUrl(true).'/company/contacts/#list_filials'?>">Посмотреть все контакты<!--img alt="Посмотреть все контакты" title="Посмотреть все контакты" src="/images/bottom-arrow.png" /--></a>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="500">
        <param name="movie" value="/images/map1000px.swf">
        <param name="bgcolor" value="#ffffff">
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="/images/map1000px.swf" width="1000" height="500">
                <!--<![endif]-->
                <!--[if !IE]>-->
                <param name="wmode" value="opaque">
        </object>
        <!--<![endif]-->
    </object>
</div>

<div class="contact_form contact_form_common form">
<?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'contact-form',
        'enableAjaxValidation'=>true,
        //'enableAjaxValidation' => false,
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
            'validateOnChange'=>false,
            //'afterValidateAttribute'=>'js:'.$updateCaptcha,
            //'afterValidate'=>'js:'.$updateCaptcha,
            'afterValidate'=>'js:afterValidate', // if error
        ),
    ));

?>
        <h2>Форма обратной связи</h2>
        
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
		<?php echo $form->labelEx($formModel,'mailTo'); ?>
		<?php echo $form->dropDownList($formModel, 'mailTo', ContactFormTest::$mailToArray, array('empty'=>'', 'class'=>'contact_form_field'));//, array('empty'=>'', 'class'=>'contact_form_field')); ?>
		<?php echo $form->error($formModel,'mailTo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($formModel,'body'); ?>
		<?php echo $form->textArea($formModel,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($formModel,'body'); ?>
	</div>
        
        <?php if(CCaptcha::checkRequirements()): ?>
            <div class="row">
                <?php echo $form->labelEx($formModel,'verifyCode'); ?>
                <?php echo $form->textField($formModel,'verifyCode'); ?>
                <?php echo $form->error($formModel,'verifyCode'); ?>
                <div id='pict_captcha'>
                    <?php 
                        $this->widget('CCaptcha', 
                            array(
                                'captchaAction' => 'site/captcha',
                                'clickableImage' => true, 
                                'showRefreshButton' => false,
                                'imageOptions'=>array('style'=>'border:none;',
                                    'alt'=>'Изображение с кодом валидации',
                                    'title'=>'Обновить код'
                                )
                            )
                        );
                    ?>
                </div>
            </div>
        <?php endif; ?>

	<div class="row buttons">
            <?php echo CHtml::submitButton('Отправить', array('class'=>'btn')); ?>
	</div>

    <?php $this->endWidget(); ?>

</div>