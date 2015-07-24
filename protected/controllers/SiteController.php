<?php

class SiteController extends Controller 
{
    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        //echo '555'; exit;	
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionSitemap() {
        $siteMapFile = Yii::app()->getBaseUrl(true) . '/images/file.html';
        $siteMapHtml = file_get_contents($siteMapFile);
        Yii::app()->params['meta_title'] = 'Карта сайта';
        $this->render('sitemap', array('sitemapStr' => $siteMapHtml));
    }
    
    /**
     * Analitics
     */
    /*
    public function actionSaveAnalitics() 
    {
        $url = Yii::app()->request->getPost('url');
        $cookies = Yii::app()->request->cookies;
        //if(Yii::app()->user->isGuest && !strpos($url, '/users/login')) {
        if(Yii::app()->user->isGuest) {
            $model = new Analitics;
            $model->time = Yii::app()->request->getPost('time');
            $model->date_created = date('Y-m-d H:i:s');
            
            // set url
            $end = strpos($url, '/?');
            if ($end) {
                $model->link_id = $this->getLinkId($url);
                $model->url = substr($url, 0, $end);
            } else $model->url = substr($url, 0, strlen($url) - 1);
            // end set url
            
            if (isset($cookies['ct'])) {
                $model->customer_id = SecurityController::decrypt($cookies['ct']->value);
            } else 
                $model->customer_id = "can't get customer id - ".Yii::app()->request->getPost('ct');

            if (isset($cookies['sb'])) {
                $model->subscription_id = $cookies['sb']->value;
            } else $model->subscription_id = "can't get subscription id - ".Yii::app()->request->getPost('sb');
            
            $model->save();
        }
    }
    */

    public function actionDelAnalitics() 
    {
        Analitics::model()->deleteAll();
    }

    public function getLinkId($str) 
    {
        $output = '';
        $temp = substr($str, $end + 2);
        $temp = explode("&", $temp);
        $result = array();
        foreach ($temp as $key => $val) {
            list($key, $value) = explode('=', $val);
            $result[$key] = $value;
        }
        if(!empty($result['lk'])) $output = $result['lk'];

        return $output;
    }

    public function actionSaveTest() {
        $model = new Analitics;
        //================================
        $cookies = Yii::app()->request->cookies;
        if (isset($cookies['ct'])) {
            //$test = SecurityController::encrypt('test1_mail@lbr.ru_test2_mail@lbr.ru');
            //$test2 = SecurityController::decrypt($test);
            //$str = ' ---- '.$test.' ---- '.$test2;
                    
            $model->customer_id = SecurityController::decrypt((string)$cookies['ct']->value);
        } else $model->customer_id = 'no';
        
        $model->time = Yii::app()->request->getPost('time');
        $model->url = Yii::app()->request->getPost('url');
        //================================
        $model->date_created = date('Y-m-d H:i:s');
        $model->save();
    }
    
    public function actionSaveAnalitics() 
    {
        if(!Yii::app()->user->isGuest) {
            $model = new Analitics;
            Yii::log('1', 'info');
            //================================
            $cookies = Yii::app()->request->cookies;
            Yii::log('2', 'info');
            if ($cookies['ct']) {
                //$test = SecurityController::encrypt('test1_mail@lbr.ru_test2_mail@lbr.ru');
                //$test2 = SecurityController::decrypt($test);
                //$str = ' ---- '.$test.' ---- '.$test2;
                Yii::log('3', 'info');
                $model->customer_id = SecurityController::decrypt($cookies['ct']->value);
            } else $model->customer_id = "can't get customer id";
            
            Yii::log('4', 'info');
            $model->time = Yii::app()->request->getPost('time');
            $model->url = Yii::app()->request->getPost('url');
            Yii::log('5', 'info');
            //================================
            $model->date_created = date('Y-m-d H:i:s');
            $model->save();
            Yii::log('6', 'info');
        }
    }
}
