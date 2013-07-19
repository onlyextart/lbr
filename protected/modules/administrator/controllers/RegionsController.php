<?php

class RegionsController extends Controller
{
    public function actionIndex(){
        
        $dataProvider = new CActiveDataProvider( 'Regions' );
        $this->render( 'index', array( 'dataProvider'=>$dataProvider, ) );
    }
    public function actionCreate(){
        $regionModel = new Regions();
        if( isset( $_POST['Regions'] ) ){
            $regionModel->attributes = $_POST['Regions'];
            if( $regionModel->save() ){
                $this->redirect('/administrator/regions/index');
            }
        }
        $this->render( 'manage', array( 'regionModel'=>$regionModel ) );
    }

  public function actionUpdate()
    {
        $regionModel = Regions::model()->findAll($_GET['id']);
        if($regionModel === null){
            $this->redirect('/administrator/regions'); 
        }
        if (isset($_POST['Regions'])){
           $regionModel->attributes = $_POST['Regions'];
           $regionModel->save();
           $this->redirect('/administrator/regions'); 
        }
        $this->render('manage', array('regionModel' => $regionModel));
    }
    
    public function actionDelete( $id ){
        $regionModel = Regions::model()->deleteByPk( $id );
        $this->redirect('/administrator/regions/index');
    }
}