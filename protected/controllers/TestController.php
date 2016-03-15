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

    public function accessRules() {
        return array(
            // если используется проверка прав, не забывайте разрешить доступ к
            // действию, отвечающему за генерацию изображения
            array('allow',
                'actions' => array('captcha'),
                'users' => array('*'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function actions() {
        return array(
        // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
                'testLimit'=>3,
            ),
        );
    }

    public function actionCheck() {
        $contactModel = Contacts::model()->findByPk(2);
        //$this->createAction('captcha')->getVerifyCode(true);


//        $session = Yii::app()->session;
//        $prefixLen = strlen(CCaptchaAction::SESSION_VAR_PREFIX);
//        foreach ($session->keys as $key) {
//            if (strncmp(CCaptchaAction::SESSION_VAR_PREFIX, $key, $prefixLen) == 0)
//                $session->remove($key);
//        }

        $captcha = Yii::app()->getController()->createAction("captcha");
        $captcha->getVerifyCode(true);
        $code = $captcha->verifyCode;

        $model = new ContactForm('insert');
        //$model = new ContactForm;
        $model->name = ' kkk ';
        $model->email = 'tttanayttt@mail.ru';
        $model->body = 'test';
        $model->verifyCode = $code;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $email = 'krilova@lbr.ru';
                $headers = 'From: ' . $email . "\r\n" .
                        'Reply-To: ' . $email . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

                mail($email, 'Test', 'Test6', $headers);

                Yii::app()->user->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
            //else {
//                echo '<pre>';
//                var_dump($model);
//            }
        }

        $this->render('contact', array('contactModel' => $contactModel, 'formModel' => $model));
    }

//    public function actionCheck()
//    {
//        $model = new ContactForm;
//        if (isset($_POST['ContactForm'])) {
//            $model->attributes = $_POST['ContactForm'];
//            if ($model->validate()) {
//                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
//                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
//                $headers = "From: $name <{$model->email}>\r\n" .
//                        "Reply-To: {$model->email}\r\n" .
//                        "MIME-Version: 1.0\r\n" .
//                        "Content-type: text/plain; charset=UTF-8";
//
//                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
//                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
//                $this->refresh();
//            }
//        }
//        $this->render('contact2', array('model' => $model));
//    }
}
