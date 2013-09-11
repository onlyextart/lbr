<?php

class TemplateKpController extends Controller
{
    
	public function actionIndex(){
        
        $dataProvider = new CActiveDataProvider( 'TemplateKp' );
        $this->render( 'index', array( 'dataProvider'=>$dataProvider, ) );
    }
    public function actionCreate() {
    $kpModel=new TemplateKp();
    if(isset($_POST['TemplateKp'])) {
        $kpModel->attributes=$_POST['TemplateKp'];
        $file_image = CUploadedFile::getInstance($kpModel, 'big_image');
        if(is_object($file_image) && get_class($file_image) === 'CUploadedFile')
            $kpModel->big_image = $file_image;
        if($kpModel->save()) {
            if(is_object($file_image)) {
                $kpModel->big_image->saveAs($_SERVER['DOCUMENT_ROOT'] . '/images/kp/big' .$kpModel->id . $kpModel->big_image);
            }
            $this->redirect(array('index'));
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
           $kpModel->save();
           
          $this->redirect('/administrator/templatekp'); 
        }
        $this->render('manage', array('kpModel' => $kpModel));
    }
    
    public function actionDelete( $id ){
        $kpModel = TemplateKp::model()->deleteByPk( $id );
        $this->redirect('/administrator/templatekp/index');
    }
    
    
}



