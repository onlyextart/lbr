<?
$print = '';
if ($data['print']=='1')
    $print = '-print';

if ($template->type=='1')
    Yii::app()->getController()->renderPartial('tmpl/single/one'.$print, array('data'=>$data, 'filial'=>$filial, 'template'=>$template));
else
    Yii::app()->getController()->renderPartial('tmpl/unique/one'.$print, array('data'=>$data, 'filial'=>$filial, 'template'=>$template));
    
?>