<?php

class GetkpController extends Controller
{
    private $unique = array('v1', 'v2', 'v3', 'v4', 'v5', 'v6', 'v7', 'v8', 'v9', 'v10', 'v11', 'v12', 'v13', 'v14', 'v15', 'v16', 'v17', 'v18', 'v19');
    
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
            $this->renderPartial('index', array('data'=>$_REQUEST, 'filial'=>$filial, 'template'=>$temp, 'unique'=>$this->unique));
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
            if(!in_array($data->temp_id, $this->unique))
                $temp = TemplateKp::model()->findByPk($data->temp_id);
            
            $filial = Contacts::model()->find('oneC_id="'.$data->filial.'"');
            $this->renderPartial('index', array('data'=>$data, 'filial'=>$filial, 'template'=>$temp, 'unique'=>$this->unique));
        }else
        {
            echo 'Kp not found';
        }
        
        
    }
    
    private function setTable()
    {
        $model = new Kp();
        $data = $_REQUEST;
        $prices = array();
        if($data['price_count'])
        {
            for($i=1; $i<=$data['price_count']; $i++)
                array_push($prices, $data['price'.$i]);
        }
        $data['price'] = serialize($prices);
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
}