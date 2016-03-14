<?php

class TestController extends Controller {

    public function actionPathcheck() 
    {
        //print phpinfo();
        //exit;

        $email = 'tttanyattt@mail.ru';
        $headers = 'From: ' . $email . "\r\n" .
                'Reply-To: ' . $email . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

        

        if (mail($email, 'Test', 'Test2', $headers)) {
            echo 'Ok';
        } else echo 'Error';
    }

}
