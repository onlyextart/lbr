<?php
$print = '';
if(is_object($data))
{
    $array = array();
    foreach ($data as $prop=>$val)
    {
        
        
        if(is_array($val))
        {
            foreach ($val as $i=>$price)
            {
                $array[$prop.($i+1)] = $price;                
            }            
        }
        else{
            $array[$prop] = $val;
        }
    }
    
    
    
    $array['user_info'] = $array['user'];
        
    if(in_array($data->temp_id, $unique))
         Yii::app()->getController()->renderPartial('tmpl/single/'.$data->temp_id.'p1', array('data'=>$array, 'filial'=>$filial, 'template'=>$template));   
    else
         Yii::app()->getController()->renderPartial('tmpl/single/one-print', array('data'=>$array, 'filial'=>$filial, 'template'=>$template));   
}
else{
    $suf = $suf2 = '';
    if($data['print']==1){
        $suf = 'p1';
        $suf2 = '-print';
    }
    if(in_array($data['temp_id'], $unique))
        Yii::app()->getController()->renderPartial('tmpl/single/'.$data['temp_id'].$suf, array('data'=>$data, 'filial'=>$filial, 'template'=>$template));    
    else
        Yii::app()->getController()->renderPartial('tmpl/single/one'.$suf2, array('data'=>$data, 'filial'=>$filial, 'template'=>$template));
}
