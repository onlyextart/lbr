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
            ),
        );
    }
    
    public function actionIndex() {
        $contact_id = Yii::app()->params['currentMenuItem']->menuItemsContents[0]->page_id;
        //var_dump($contact_id);exit;
        if($contact_id==null){
            //$contactModels = Contacts::model()->findAll('published=1');
            //$this->render('commonContacts', array('contactModels'=>$contactModels));
            $this->render('commonContacts');
        } else {
            $contactModel = Contacts::model()->findByPk($contact_id);
            $formModel = new ContactForm;
            $this->render('index', array('contactModel'=>$contactModel, 'formModel'=>$formModel));
        }
    }
    
    public function actionGetRegionsTable()
    {
//        $regionModel = Regions::model()->findAllByAttributes(array('published'=>'1'), array('order'=>'name ASC'));
        $this->renderPartial('regionstable');
    }
}
