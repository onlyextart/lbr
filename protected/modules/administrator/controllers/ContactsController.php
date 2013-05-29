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
}