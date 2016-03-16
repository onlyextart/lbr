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
        public $mailTo;
        public static $mailToArray  = array(
            'pl@lbr.ru' => 'Техника',
            'parts@lbr.ru' => 'Запчасти',
            'log@lbr.ru' => 'Логистика, таможня, сертификация',
            'marketing@lbr.ru' => 'Реклама',
            'uchet_upr@lbr.ru' => 'Бухгалтерия'
        );

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
            return array(
                array('phone, name, email, body, mailTo', 'safe'),
                // name, email, subject and body are required
                array('name, email, body', 'required'),
                // email has to be a valid email address
                array('email', 'email'),
                array('verifyCode', 'required', 'on'=>'insert'),
                array('verifyCode',  // must be after required rule
                    'captcha',
                    'captchaAction'=>'site/captcha',
                    'on'=>'insert',
                    'skipOnError'=>true, // Important: Only validate captcha if 'required' had no error (a.k.a. "if not empty")
                    //'allowEmpty'=>!CCaptcha::checkRequirements(),
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
                'verifyCode' => 'Код проверки',
                'email' => 'E-mail',
                'name' => 'Имя',
                'body' => 'Текст сообщения',
                'phone' => 'Телефон',
                'mailTo' => 'Служба ЛБР'
            );
	}
}