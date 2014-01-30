<?php

class ContactsController extends Controller
{
    public function actionIndex(){
        
        $dataProvider = new CActiveDataProvider( 'Contacts' );
        $this->render( 'index', array( 'dataProvider'=>$dataProvider, ) );
    }
     public function actionCreate(){
        $contactModel = new Contacts();
        if( isset( $_POST['Contacts'] ) ){
            $contactModel->attributes = $_POST['Contacts'];
            if( $contactModel->save() ){
                if(isset($_POST['MenuItemConteintigThisContact'])){
                    foreach($_POST['MenuItemConteintigThisContact'] as $menuItemId=>$menuItem){
                        if($menuItem!='1')
                            continue;
                        $menuItemContant = new MenuItemsContent;
                        $menuItemContant->item_id = $menuItemId;
                        $menuItemContant->page_id = $contactModel->id;
                        $menuItemContant->save();
                    }
                }
                $this->redirect('/administrator/contacts/index');
            }
        }
        $this->render( 'manage', array( 'contactModel'=>$contactModel ) );
    }

  public function actionUpdate( $id ){
        $contactModel = Contacts::model()->findByPk( $id );
        
        if( isset($_POST['Contacts']) ){
            $contactModel->attributes = $_POST['Contacts'];
            $contactIsValid = $contactModel->validate();
            
                
            if( $contactModel->save()){
                $contactIsValid;
                
                if( isset( $_POST['MenuItemConteintigThisContact'] ) ){
                    $menuItmemsContentModels = MenuItemsContent::model()->with('item')->findAll(
                        'page_id='.$contactModel->id.
                        ' AND item.type='.MenuItems::CONTACT_MENU_ITEM_TYPE
                    );
                    $menuItmemsContentModelsForDeleting = $menuItmemsContentModels;
                    $menuItmemsContentNum = 0;
                    foreach( $_POST['MenuItemConteintigThisContact'] as $menuItemId=>$value ){
                        if($value!='0'){
                            if(!isset($menuItmemsContentModels[$menuItmemsContentNum]))
                                $menuItmemsContentModels[$menuItmemsContentNum] = new MenuItemsContent();
                            $menuItmemsContentModels[$menuItmemsContentNum]->item_id = $menuItemId;
                            $menuItmemsContentModels[$menuItmemsContentNum]->page_id = $contactModel->id;
                            $menuItmemsContentModels[$menuItmemsContentNum]->save();
                            unset( $menuItmemsContentModelsForDeleting[$menuItmemsContentNum] );
                            $menuItmemsContentNum++;
                        }
                    }
                    foreach( $menuItmemsContentModelsForDeleting as $deleteMenuItmemsContent ){
                        $deleteMenuItmemsContent->delete();
                    }
                }
            }
            Yii::app()->user->setFlash('saved','Страница контакта успешно сохранена.');
            $this->redirect('/administrator/contacts/update/id/'.$contactModel->id);
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
            $regionModel->id=$region[id]; 
            
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
                $contactModel->id = $contactFromJlbr[id];
                echo('c'.$contactModel->id.'<br>');
                $contactModel->save();
            }
            $regionModel->contact_id=$contactModel->id; 
            $regionModel->save();
            echo('r'.$regionModel->id.'<br>');
        }
        echo 'done';
    }
    public function actionContactMenuItems(){
        exit();
//        $contacts = Contacts::model()->findAll();
//        $rootModel = MenuItems::model()->findByPk(1452);
//        foreach($contacts as $contact){
//            $menuModel = new MenuItems();
//            $menuModel->name = $contact->name;
//            $menuModel->alias = $contact->alias;
//            $menuModel->meta_title = $contact->name.' - Контакты филиала ЛБР-Агромаркет';
//            $menuModel->header = $contact->name;
//            $menuModel->group_id = 26;
//            $menuModel->published = '1';
//            $menuModel->type = MenuItems::CONTACT_MENU_ITEM_TYPE;
//            $menuModel->appendTo($rootModel);
//        }
        $contactsMenuItems = MenuItems::model()->findAll('type=:type', array(':type'=>  MenuItems::CONTACT_MENU_ITEM_TYPE));
        
        foreach($contactsMenuItems as $contactsMenuItem){
            $contactModel = Contacts::model()->find('name=:name', array(':name'=>$contactsMenuItem->name));
            $menuItemContentModel = new MenuItemsContent;
            $menuItemContentModel->page_id = $contactModel->id;
            $menuItemContentModel->item_id = $contactsMenuItem->id;
            $menuItemContentModel->save();
        }
    }
}