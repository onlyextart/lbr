<?php
class MightinessController extends Controller{
    /*public function actionIndex(){
        
    }*/
    public function actionAddMeasure()
    {
        $error = false;
        $techLabel = trim($_POST['techLabel']);
        $techId = $_POST['tId'];
        $measureLabel = trim($_POST['measureLabel']);
        $measureId = $_POST['mId'];
        
        if($techLabel == '') $error = true;
        if($measureLabel == '') $error = true;
        if(!$error) {
            //$model = 
        }
        
        $array = array('error'=>$error, 'techLabel'=>$techLabel, 'measureLabel'=>$measureLabel);
        echo json_encode($array);
    }
}
