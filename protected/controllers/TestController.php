<?php

class TestController extends Controller 
{

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
    
//    public function actionDelUser() 
//    {
//        Users::model()->deleteAll('login="cheshenkov" or login="gutnikov" or login="vasiliyan" or login="sushcheuskaya"');
//    }

    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
                'testLimit'=>1,
            ),
        );
    }
    
    public function actionCheck() 
    {
        $contact_id = null;
        $formModel = new ContactFormTest('insert');
        
        if($contact_id == null) { // page with contacts
            $formModel->flagCommonContacts = true;
            $districts = Regions::getDistrictsForContacst();
            $output = '<ul class="contacts_list clearfix">
                <a name="list_filials"></a>'
            ;
            
            foreach($districts as $districtId => $districtName) {
                $regions = Yii::app()->db->createCommand()
                    ->selectDistinct('c.name name, c.alias alias, c.address address, c.telephone telephone, c.email email')
                    ->from('regions r')
                    ->join('contacts c', 'c.id=r.contact_id')
                    ->where('r.published=1 AND c.okrug_id=:district_id AND r.district_id=:district_id', array(':district_id'=>$districtId))
                    ->order('c.name')
                    ->queryAll()
                ;
                
                if(count($regions) == 1) $output .= '<div class="region-group region-one"><div class="region-group-name">'.$districtName.'</div>';
                else $output .= '<div class="region-group"><div class="region-group-name">'.$districtName.'</div>';
                
                foreach($regions as $region) {
                    $output .= '<div class="contact-item">';
                    $output .= '<div class="city-name">'.CHtml::link($region['name'], '/company/contacts/'.$region['alias'].'/').'</div>';
                    $output .= '<div class="contact-image"><img src="'.Yii::app()->getBaseUrl(true).'/images/ContactsImages/'.$region['alias'].'/main.jpg" /></div>';
                    $output .= '<div class="contact-info" itemscope="address" itemtype="http://schema.org/LocalBusiness">'.
                            '<meta itemprop="url" content="www.lbr.ru" />'.
                            '<meta itemprop="name" content="ЛБР-АгроМаркет" />'.
                            '<time itemprop="openingHours" datetime="Mo-Su 08:00-17:00" /></time>'.
                            '<div itemprop="description">'.
                                '<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">'.
                                   '<meta itemprop="addressCountry" content="Россия" />'.
                                   '<div><b>Адрес: </b>'.$region['address'].'</div>'.
                                '</div>'.
                            '</div>'.
                            '<div><b>Телефон: </b>'.$region['telephone'].'</div>'.
                            '<div itemprop="email"><b>Email: </b>'.$region['email'].'</div>'.
                          '</div>';
                    $output .= '</div>';
                }
                $output .= '</div>';
            }
            
            $output .= '</ul>';
            
            if(isset($_POST['ContactFormTest'])) {
                $subject = 'from LBR.RU';
                $this->sendMail($_POST['ContactFormTest'], $formModel, $subject, $_POST['ContactFormTest']['mailTo']);
            }
            
            $this->render('commonContacts', array('output'=>$output, 'formModel'=>$formModel));
        } else { // pop-up window for choosing region
            $formModel->flagCommonContacts = false;
            $contactModel = Contacts::model()->findByPk($contact_id);
            if(isset($_POST['ContactFormTest'])) {
                $subject = 'from LBR.RU';
                //$this->sendMail($_POST['ContactFormTest'], $formModel, $subject, Yii::app()->params['adminEmail']);
                $this->sendMail($_POST['ContactFormTest'], $formModel, $subject, 'krilova@lbr.ru');
            }
            $this->render('index', array('contactModel'=>$contactModel, 'formModel'=>$formModel));
        }
    }
    
    public function actionGetRegionsTable()
    {
        $this->renderPartial('regionstable');
    }
    
    public function sendMail($post, $model, $subject, $mailTo)
    {
        $model->attributes = $post;
        if ($model->validate()) {
            $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
            $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
            $headers = "From: $name <{$model->email}>\r\n" .
                    "Reply-To: {$model->email}\r\n" .
                    "MIME-Version: 1.0\r\n" .
                    "Content-type: text/plain; charset=UTF-8";

            mail($mailTo, $subject, $model->body, $headers);

            Yii::app()->user->setFlash('success', 'Ваше письмо отправлено.');
            $this->refresh();
        } else Yii::app()->user->setFlash('error', 'Форма заполнена некорректно.');
    }
}
