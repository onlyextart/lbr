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
                    //изменить размер логотипа до 70 px в высоту
                    $thImage = new Imageedit();
                    $thImage->load($_SERVER['DOCUMENT_ROOT'].$_POST['Makers']['logo']);
                    if($thImage->getHeight() > 70){
                        $thImage->resizeToHeight(70);
                        $thImage->save($_SERVER['DOCUMENT_ROOT'].$_POST['Makers']['logo']);
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
    
    public function actionTransfer(){
        exit();
        $connectionJlbrDb=new CDbConnection('mysql:host=localhost;dbname=lbr_jlbr','mysql','mysql');
        $connectionJlbrDb->active=true;
        function lower($str){return mb_strtolower($str, "UTF-8");}
        Yii::app()->db->getPdoInstance()->sqliteCreateFunction('lower', 'lower', 1);
        $makersFromJlbr = $connectionJlbrDb->createCommand('SELECT * FROM jlbr_maker')->queryAll();
        foreach($makersFromJlbr as $maker){
            $makerModel = new Makers();
            $makerModel->id=$maker[id];
            $makerModel->name=$maker[name];
            $makerModel->description=$maker[description];
            $makerModel->logo='/'.$maker[icon];
            $makerModel->published=$maker[published];
            $url = "http://www.lbr.ru/".$maker[icon];
            $Headers = @get_headers($url);
            if($Headers[0]=='HTTP/1.1 200 OK') {
                copy("http://www.lbr.ru/".$maker[icon], $_SERVER['DOCUMENT_ROOT'].$makerModel->logo);
            } 
            $makerModel->save();
        }
        echo('done');
    }
}
?>
