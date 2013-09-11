<?php

class GetkpController extends Controller
{
    public function actionIndex()
    {
        $this->renderPartial('index');
    }
    
    public function actionAdd(){
        if ($_REQUEST['add']=='1'){
            $this->setTable();
        }
        if($_REQUEST['temp_id'])
        {
            $command = Yii::app()->db->createCommand();
            $command->select('*');
            $command->from('contacts');
            $command->where('oneC_id="'.$_REQUEST['filial'].'"');
            $filial = $command->queryRow();
            if($_REQUEST['print']=='1'){
                $this->renderPartial('tmpl/single/one-print', array('data'=>$_REQUEST, 'filial'=>$filial));
            }else{
                $this->renderPartial('tmpl/single/one', array('data'=>$_REQUEST, 'filial'=>$filial));
            }
                
        }
    }

    private function setTable()
    {
        $command = Yii::app()->db->createCommand();
        $command->insert('kp', array(
            'user' => $_REQUEST['user'],
            'temp_id' => $_REQUEST['temp_id'],
            'price' => serialize(array($_REQUEST['price1'], $_REQUEST['price2'], $_REQUEST['price3'])),
            'client' => $_REQUEST['client'],
            'header' => $_REQUEST['header'],
            'filial' => $_REQUEST['filial'],
            'filial_bottom' => $_REQUEST['filial_bottom'],
            'control_number' => rand('1000000', '9999999')
        ));
    }
    
    public function actionForm(){
        $this->renderPartial('form');
    }
    
     public function actionTiny()
    {
        $this->renderPartial('tiny');
    }
    
    public function actionTest($v){
        $this->renderPartial('tmpl/single/'.$v);
    }
}