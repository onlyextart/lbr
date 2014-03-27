<?php

class GetkpController extends Controller
{
    private $unique = array('v1', 'v2', 'v3', 'v4', 'v5', 'v6', 'v7', 'v8', 'v9', 'v10', 'v10-2', 'v11', 'v11-2', 'v12', 'v12-2', 'v13', 'v14', 'v15', 'v16', 'v17', 'v18', 'v19', 'v20', 'v21', 'v22', 'v23', 'v24', 'v25', 'v26', 'v27', 'v28', 'v29', 'v30', 'v31', 'v32', 'v33', 'v34', 'v35', 'v36', 'v37', 'v38', 'v39', 'v40', 'v41', 'v42', 'v43', 'v44', 'v45', 'v46', 'v47', 'v48', 'v49',
     'v50', 'v51', 'v52', 'v53', 'v54', 'v55', 'v56', 'v57', 'v58', 'v59', 'v60');
    
    public function actionIndex()
    {
        $this->renderPartial('index');
    }
    
    public function actionAdd()
    {
        if ($_REQUEST['add']=='1'){
            $return = $this->setTable();
            if($return && $_REQUEST['print']=='1')
            {
                $this->renderPartial('link', array('data'=>$return));
                exit();
            }
        }        
        if($_REQUEST['temp_id'])
        {
            $command = Yii::app()->db->createCommand();
            $command->select('*');
            $command->from('contacts');
            $command->where('oneC_id="'.$_REQUEST['filial'].'"');
            $filial = $command->queryRow();
            if(!in_array($_REQUEST['temp_id'], $this->unique))
                $temp = TemplateKp::model()->findByPk($_REQUEST['temp_id']);
            
            if($_REQUEST['temp_id']=='news'){
                $this->renderPartial('news', array('data'=>$_REQUEST));
            }else{
                $this->renderPartial('index', array('data'=>$_REQUEST, 'filial'=>$filial, 'template'=>$temp, 'unique'=>$this->unique));
            }
        }
    }
                

    public function actionShow($id, $key)
    {
        if(!$id || !$key)
            return false;
        
        $data = Kp::model()->findByPk($id, 'control_number='.$key);
        if($data)
        {
            $data->price = unserialize($data->price);
            $data->price_blue = unserialize($data->price_blue);
            $data->product_info = unserialize($data->product_info);
            if(!in_array($data->temp_id, $this->unique))
                $temp = TemplateKp::model()->findByPk($data->temp_id);
            
            $filial = Contacts::model()->find('oneC_id="'.$data->filial.'"');
            $this->renderPartial('index', array('data'=>$data, 'filial'=>$filial, 'template'=>$temp, 'unique'=>$this->unique));
        } else {
            echo 'Kp not found';
        }
    }
    
    private function setTable()
    {
        $model = new Kp();
//        var_dump($_REQUEST); exit();
        $data = $_REQUEST;
        $prices = array();
        $prices_blue = array();
        $products_info = array();
                
        if($data['price_count'])
        {
            for($i=1; $i<=$data['price_count']; $i++)
                array_push($prices, $data['price'.$i]);
                
            for($b=1; $b<=$data['price_count']; $b++)
                array_push($prices_blue, $data['price_blue'.$b]);    
            
            
        }
        if($data['product_info_count'])
        {
            for($i=1; $i<=$data['product_info_count']; $i++)
                array_push($products_info, $data['product_info'.$i]);   
        }
       
        $data['price'] = serialize($prices);
        $data['price_blue'] = serialize($prices_blue);
        $data['product_info'] = serialize($products_info);
        $data['control_number'] = rand('1000000', '9999999');
        $data['user'] = $data['user_info'];
        $model->attributes = $data;
        if($model->save())
            return array($model->id, $data['control_number']);
    }
    
    
    public function actionForm()
    {
        $this->renderPartial('form');
    }
    
     public function actionTiny()
    {
        $this->renderPartial('tiny');
    }
    
    public function actionTest($v)
    {
        $this->renderPartial('tmpl/single/'.$v);
    }
    
    public function actionPage($v, $f = false)
    {
        $clientName = 'Дормидонт Иванович Иванов';//$_REQUEST['clientName'];
        $managerName = 'Чуркин Алексей';//$_REQUEST['managerName'];
        $managerEmail = 'сhurkin@lbr.ru';//$_REQUEST['managerEmail'];
        $managerPhones = '79103225418';//$_REQUEST['managerPhones'];
        if(isset($clientName) && isset($managerName) && isset($managerEmail) && isset($managerPhones))
        {
            $this->renderPartial('tmpl/page/'.$v.'/'.$f, array('clientName'=>$clientName, 'managerName'=>$managerName, 'managerEmail'=>$managerEmail, 'managerPhones'=>$managerPhones));
        }
        
        
        ///////////////////////////
        //$this->renderPartial('tmpl/page/'.$v.'/'.$f, array('clientName'=>$clientName, 'managerName'=>$managerName, 'managerEmail'=>$managerEmail, 'managerPhones'=>$managerPhones));
    }
}