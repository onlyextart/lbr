<?php
class TechSchemaController extends Controller
{
    public function actionIndex()
    {
        /*$result = $productList = array();
        $showCycle = $_POST['chk_group'];
        //var_dump($showCycle); exit;
        if(!empty($showCycle)){
            foreach($showCycle as $key=>$value) {
                $cycleName = TechSchema::model()->findByPk($key)->title;
                $stages = TechSchemaStage::model()->findAll('schema_id = :id', array(':id'=>$key)); 
                foreach($stages as $stage) {
                    $result[$cycleName][$stage['stage_id']] = TechStage::model()->findByPk($stage['stage_id'])->title;//] = array(111, 222);
                    $productList[$stage['stage_id']] = array(111, 222);
                }
            }
        }*/
        $schemaIds = $_POST['schemaIds'];
        if(!empty($schemaIds)) {
            $response = $result = $productList = array();
            foreach($schemaIds as $id) {
                $cycleName = TechSchema::model()->findByPk($id)->title;
                $stages = TechSchemaStage::model()->findAll('schema_id = :id', array(':id'=>$id)); 
                foreach($stages as $stage) {
                    $result[$cycleName][$stage['stage_id']] = TechStage::model()->findByPk($stage['stage_id'])->title;//] = array(111, 222);
                    $productList[$stage['stage_id']] = array(111, 222);
                }
            }
            
            if(!empty($result)){
                $response = '<table width="100%" border="1" cellspacing="0" cellpadding="0"><tr>';    
                foreach($result as $key => $value){
                    $response .= '<td rowspan="2">'.$key.'</td>';
                    foreach($value as $v){
                        $response .= '<td>'.$v.'</td>';
                    }
                }
                $response .= '</tr><tr>';
                foreach($productList as $products){
                    $response .= '<td>';
                    if(!empty($products)){
                        $response .= '<ul>';
                        foreach($products as $product){
                            $response .= '<li>'.$product.'</li>';
                        }
                        $response .= '</ul>';
                    }
                    $response .= '</td>';
                }
                $response .= '</tr></table>';
            }
            //echo $response;
            $array = array('data'=>$response);
            echo json_encode($array);
        } else $this->render('index', array('data'=>$result, 'productList'=>$productList));
    }
}