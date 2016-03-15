<?php
/* @var $this ContacsController */
Yii::app()->clientScript->registerCssFile('/css/form.css');
Yii::app()->clientScript->registerScriptFile('/js/site/XbannersSlider.js');
Yii::app()->clientScript->registerScriptFile('/js/site/contact.js');
?>

<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="info">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

<h1><?php echo $contactModel->name ?></h1>
<div class="contact_info">
<div itemscope itemtype="http://schema.org/LocalBusiness">
<meta itemprop="url" content="www.lbr.ru" />
<meta itemprop="name" content="ЛБР-АгроМаркет" />
<span itemprop="description">
    <table>
        <tr>
            <td>
                <img class="contact_icon" src="/images/addressIcon.png">
            </td>
            <td>
                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <meta itemprop="addressCountry" content="Россия" />
                <?php echo 'Адрес: '.$contactModel->address ?>
                </div>
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
                Время работы: <time itemprop="openingHours" datetime="Mo-Su <?php echo $contactModel->work_time ?>" >
                 <?php echo $contactModel->work_time ?>
                </time>
            </td>
        </tr>
        <tr>
            <td>
                <img class="contact_icon" src="/images/mailIcon.png">
            </td>
            <td>
                <span itemprop="email"><?php echo $contactModel->email ?></span>
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
   </span>
</div>
 
</div>
<?php
$file = explode('/', $contactModel->images);
unset($file[count($file)-1]);
$dir = implode('/', $file);
$path = $_SERVER['DOCUMENT_ROOT'] .'/'. $dir.'/';
$images = scandir($path);
if (false !== $images) {
    $images = preg_grep('/\\.(?:png|gif|jpe?g)$/', $images); ?>
    <div class="contact-images">
        <?php if(!empty($images)): ?>
            <div class="scrollRight"></div>
            <div class="scrollLeft"></div>
            <div class="c_images_overflow">
                <div class="c_images_conteiner">
                <?php
                    foreach ($images as $image){
                        echo '<section class="c_images_one_image">';
                        echo '<img data-scr="/'.$dir.'/'.htmlspecialchars(urlencode($image)).'" src="/'.$dir.'/'.htmlspecialchars(urlencode($image)).'" alt="'.$contactModel->name.'" />';
                        echo '</section>';
                    }?>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php } ?>
<div class="contact_map">
    <?php echo $contactModel->map_code ?>
</div>
<div class="contact_form form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
        //'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
            'validateOnSubmit'=>true,
            //'validateOnChange' => true,
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
        
        <!--div class="row captcha"-->
        <?php //if(CCaptcha::checkRequirements() && Yii::app()->user->isGuest): ?>
                <?php //echo $form->labelEx($formModel,'verifyCode'); ?>
                <?php //echo $form->textField($formModel,'verifyCode', array('value'=>'')); ?>
                <?php //echo $form->textField($formModel,'verifyCode'); ?>
                <?php //echo $form->error($formModel,'verifyCode'); ?>
                <!--div id='pict_captcha'><?php //$this->widget('CCaptcha', array('captchaAction'=>'/site/captcha', 'showRefreshButton' => false));?></div-->
                <!--div id='pict_captcha'><?php //$this->widget('CCaptcha');?></div-->
        <?php //endif; ?>
        <!--/div-->
        
        <?php if(CCaptcha::checkRequirements()): ?>
        <div class="row">
            <?php echo $form->labelEx($formModel,'verifyCode'); ?>
            <div>
            <?php $this->widget('CCaptcha', array('id' => 'captcha')); ?>
            <?php echo $form->textField($formModel,'verifyCode',array('class' => 'text_field')); ?>
            <?php echo $form->error($formModel,'verifyCode'); ?>
            </div>
            <div class="hint">Пожалуйста, введите символы, которые изображены на картинке
            <br/>Регистр не учитывается</div>
        </div>
        <?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Отправить', array('class'=>'btn')); ?>
	</div>

    <?php $this->endWidget(); ?>

</div>