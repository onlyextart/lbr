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
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
            ),
        );
    }
    
    public function actionCheck()
    {
        $contactModel = Contacts::model()->findByPk(2);
        $model = new ContactForm;
        $model->name = 'Test';
        $model->email = 'tttanayttt@mail.ru';
        $model->body = 'test';
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                
//                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
//                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
//                $headers = "From: $name <{$model->email}>\r\n" .
//                        "Reply-To: {$model->email}\r\n" .
//                        "MIME-Version: 1.0\r\n" .
//                        "Content-type: text/plain; charset=UTF-8";
//
//                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                
                $email = 'tttanyattt@mail.ru';
                $headers = 'From: ' . $email . "\r\n" .
                        'Reply-To: ' . $email . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                
                mail($email, 'Test', 'Test ============', $headers);
                
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        
        $this->render('contact', array('contactModel'=>$contactModel, 'formModel'=> $model));
    }
}
