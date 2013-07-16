<?php

class ContactsController extends Controller
{
    public function actionIndex(){
        
        $dataProvider = new CActiveDataProvider( 'Contacts' );
        $this->render( 'index', array( 'dataProvider'=>$dataProvider, ) );
    }
    
    public function actionCreateContact(){
        $contactModel = new Contacts();
        if( isset( $_POST['Contacts'] ) ){
            $contactModel->attributes = $_POST['Contacts'];
            if( $contactModel->save() ){
                $this->redirect('/administrator/contacts/index');
            }
        }
        $this->render( 'manage', array( 'contactModel'=>$contactModel ) );
    }
    
    public function actionUpdate( $id ){
        $contactModel = Contacts::model()->findByPk( $id );
        if( isset( $_POST['Contacts'] ) ){
            $contactModel->attributes = $_POST['Contacts'];
            if( $contactModel->save() ){
                $this->redirect('/administrator/contacts/index');
            }
        }
        $this->render( 'manage', array( 'contactModel'=>$contactModel ) );
    }
    
    public function actionDelete( $id ){
        $contactModel = Contacts::model()->deleteByPk( $id );
        $this->redirect('/administrator/contacts/index');
    }
    
    
    public function actionRegionsTransfer(){
        exit();
        $connectionJlbrDb=new CDbConnection('mysql:host=localhost;dbname=lbr_jlbr','mysql','mysql');
        $connectionJlbrDb->active=true;
        function lower($str){return mb_strtolower($str, "UTF-8");}
        Yii::app()->db->getPdoInstance()->sqliteCreateFunction('lower', 'lower', 1);
        $regionsFromJlbr = $connectionJlbrDb->createCommand('SELECT * FROM jlbr_region')->queryAll();
        foreach($regionsFromJlbr as $region){
            $regionModel = new Regions;
            $regionModel->name = $region['name'];
            $regionModel->district_id = array_search($region['district'], Regions::$districts);
            $regionModel->sorting = $region['sort_id']; 
            $regionModel->published='1'; 
            
            $contactFromJlbr = $connectionJlbrDb->createCommand("SELECT * FROM jlbr_contact_details where alias='".$region[domain]."'")->queryRow();
            $contactModel = Contacts::model()->find('alias=:alias', array(':alias'=>$region[domain]));
            if($contactModel===null){
                $contactModel = new Contacts;
                $contactModel->name = $contactFromJlbr[name];
                $contactModel->alias = $contactFromJlbr[alias];
                $contactModel->published='1';
                $contactModel->domain = $contactFromJlbr[alias];
                $contactModel->address = $contactFromJlbr[address];
                $contactModel->telephone = $contactFromJlbr[telephone];
                $contactModel->work_time = $contactFromJlbr[postcode];
                $contactModel->email = $contactFromJlbr[fax];
                $contactModel->map_code = $contactFromJlbr[full_image];
                $contactModel->message_email = $contactFromJlbr[email_to];
                $contactModel->images = $contactFromJlbr[image];
                $contactModel->oneC_id = $contactFromJlbr[suburb];
                $contactModel->info = $contactFromJlbr[misc];
                $contactModel->save();
            }
            $regionModel->contact_id=$contactModel->id; 
            $regionModel->save();
        }
        echo 'done';
    }
}