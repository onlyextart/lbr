<?php

class ContactsController extends Controller
{
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
    
    public function actionIndex()
    {
        $contact_id = Yii::app()->params['currentMenuItem']->menuItemsContents[0]->page_id;
        $formModel = new ContactForm('insert');
        
        if($contact_id == null) { // page with all contacts
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

            $allRegions = $this->setRegionsForContactForm();
            if(isset($_POST['ContactForm'])) {
                $subject = 'from LBR.RU';
                $mailTo = ContactForm::$realMails[$_POST['ContactForm']['mailTo']];
                $this->sendMail($_POST['ContactForm'], $formModel, $subject, $mailTo, $allRegions[$_POST['ContactForm']['region']]);
            }

            $this->render('commonContacts', array('output'=>$output, 'formModel'=>$formModel, 'regions' => $allRegions));
        } else { // pop-up window for current region
            $contactModel = Contacts::model()->findByPk($contact_id);
            $formModel->region = $contactModel->name;
            $formModel->flagCommonContacts = false;
            if(isset($_POST['ContactForm'])) {
                $subject = 'from LBR.RU';
                $this->sendMail($_POST['ContactForm'], $formModel, $subject, $contactModel->email);
                //$this->sendMail($_POST['ContactForm'], $formModel, $subject, 'krilova@lbr.ru');
            }
            $this->render('index', array('contactModel'=>$contactModel, 'formModel'=>$formModel));
        }
    }
    
    public function actionGetRegionsTable()
    {
        $this->renderPartial('regionstable');
    }
    
    public function setRegionsForContactForm()
    {
        $allRegions = array();
        
        $tempRegions = Yii::app()->db->createCommand()
            ->select('id, name')
            ->from('regions')
            ->order('name')
            ->queryAll()
        ;

        foreach($tempRegions as $oneRegion) {
            $allRegions[$oneRegion['id']] = $oneRegion['name'];
        }
        
        return $allRegions;
    }
    
    public function sendMail($post, $model, $subject, $mailTo, $regionName = null)
    {
        $model->attributes = $post;
        if ($model->validate()) {
            $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
            $headers = "From: $name <{$model->email}>\r\n" .
                "Reply-To: {$model->email}\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-type: text/plain; charset=UTF-8"
            ;
            
            $message = "Имя: ".$model->name."\r\n".
                "Организация: ".$model->company."\r\n"
            ;
            
            if(!empty($regionName)) $message .= "Регион: ".$regionName."\r\n";
            
            $message .= "Телефон: ".$model->phone."\r\n".
                "Email: ".$model->email."\r\n\r\n".
                $model->body
            ;
            
            //$message = wordwrap($message, 100, "\r\n");

            mail($mailTo, $subject, $message, $headers);

            Yii::app()->user->setFlash('success', 'Ваше письмо отправлено.');
            $this->refresh();
        } else Yii::app()->user->setFlash('error', 'Форма заполнена не полностью.');
    }
}
