<?php

class TestController extends Controller {

//    public function actionPathcheck() 
//    {
//        //print phpinfo();
//        //exit;
//
//        $email = 'tttanyattt@mail.ru';
//        $headers = 'From: ' . $email . "\r\n" .
//                'Reply-To: ' . $email . "\r\n" .
//                'X-Mailer: PHP/' . phpversion();
//
//        
//
//        if (mail($email, 'Test', 'Test2', $headers)) {
//            echo 'Ok';
//        } else echo 'Error';
//    }

//    public function accessRules() {
//        return array(
//            // если используется проверка прав, не забывайте разрешить доступ к
//            // действию, отвечающему за генерацию изображения
//            array('allow',
//                'actions' => array('captcha'),
//                'users' => array('*'),
//            ),
//            array('deny',
//                'users' => array('*'),
//            ),
//        );
//    }

    public function actions() {
        return array(
        // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
                'testLimit'=>1,
            ),
        );
    }

    public function actionCheck() {
        $contactModel = Contacts::model()->findByPk(2);

        $model = new ContactForm('insert');
        $model->name = ' kkk ';
        $model->email = 'tttanayttt@mail.ru';
        $model->body = 'test';
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $email = 'krilova@lbr.ru';
                $headers = 'From: ' . $email . "\r\n" .
                        'Reply-To: ' . $email . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

                mail($email, 'Test', 'Test6', $headers);

                Yii::app()->user->setFlash('success', 'Письмо отправлено. Мы свяжемся с Вами как можно скорее.');
                $this->refresh();
            }
        }

        $this->render('contact', array('contactModel' => $contactModel, 'formModel' => $model));
    }
}
