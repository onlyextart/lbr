<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{
	public $name;
	public $email;
	public $subject;
	public $body;
	public $phone;
	public $verifyCode;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('phone', 'safe'),
			// name, email, subject and body are required
			array('name, email, body', 'required'),
			// email has to be a valid email address
			array('email', 'email'),
			// verifyCode needs to be entered correctly
			array(
                            'verifyCode', 
                            'captcha', 
                            'on' => 'insert',
                            'allowEmpty'=>!CCaptcha::checkRequirements()
                        ),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Проверочный код',
			'email'=>'E-Mail',
			'name'=>'Имя',
			'body'=>'Текст сообщения',
			'phone'=>'Телефон',
		);
	}
}