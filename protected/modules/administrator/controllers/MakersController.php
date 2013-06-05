<?php
class MakersController extends Controller{
    
    public function actionIndex(){
        $dataProvider = new CActiveDataProvider('Makers');
        $this->render('index', array(
            'dataProvider'=>$dataProvider,
        ));
    }
    
    public function actionCreate(){
        $makerModel = new Makers();
        if( isset($_POST['Makers']) ){
            $makerModel->attributes = $_POST['Makers'];
            if( $makerModel->save()){
                if( isset($_POST['Makers']['logo']) ){
                    $thImage = new Imageedit();
                    $thImage->load($_POST['Makers']['logo']);
                    if($thImage->getHeight() > 70){
                        $thImage->resizeToHeight(70);
                        $thImage->save($_POST['Makers']['logo']);
                    }
                }
                $this->redirect('/administrator/makers/index');
            }
        }
        $this->render('manage', array( 'makerModel'=>$makerModel ));
    }
    
    public function actionUpdate( $id ){
        $makerModel = Makers::model()->findByPk( $id );
        if( isset($_POST['Makers']) ){
            $makerModel->unsetAttributes(array('logo'));
            $makerModel->attributes = $_POST['Makers'];
            if( $makerModel->save()){
                if( isset($_POST['Makers']['logo']) ){
                    $thImage = new Imageedit();
                    $thImage->load($_POST['Makers']['logo']);
                    if($thImage->getHeight() > 70){
                        $thImage->resizeToHeight(70);
                        $thImage->save($_POST['Makers']['logo']);
                    }
                }
                $this->redirect('/administrator/makers/index');
            }
        }
        $this->render('manage', array( 'makerModel'=>$makerModel ));
    }
    
    public function actionDelete( $id ){
        $makerModel = Makers::model()->findByPk( $id );
        if( $makerModel !== null ){
            $makerModel->delete();
            $this->redirect('/administrator/makers/index');
        }
        $this->redirect('/administrator/makers/index');
        
    }
    
}
?>
