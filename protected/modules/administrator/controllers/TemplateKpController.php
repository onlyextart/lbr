<?php

class TemplateKpController extends Controller
{
    
	public function actionIndex()
        {
            $dataProvider = new CActiveDataProvider( 'TemplateKp' );
            $this->render( 'index', array( 'dataProvider'=>$dataProvider, ) );
        }
        public function actionCreate()
        {
            $kpModel=new TemplateKp();
            if(isset($_POST['TemplateKp']))
            {
                $kpModel->attributes=$_POST['TemplateKp'];
                if($kpModel->save()) {
                    $this->redirect('/administrator/templatekp');
                }
            }
            $this->render('manage',array(
                'kpModel'=>$kpModel,
            ));
        }
    
        public function actionUpdate()
        {
            $kpModel = TemplateKp::model()->findByPk($_GET['id']);
            if($kpModel === null){
                $this->redirect('/administrator/templatekp'); 
            }
            if (isset($_POST['TemplateKp'])){
               $kpModel->attributes = $_POST['TemplateKp'];
                if($kpModel->save()) {
                    $this->redirect('/administrator/templatekp'); 
                }
            }
            $this->render('manage', array('kpModel' => $kpModel));
        }
    
        public function actionDelete( $id ){
            $kpModel = TemplateKp::model()->deleteByPk( $id );
            $this->redirect('/administrator/templatekp/index');
        }
    
    
}



