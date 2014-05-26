<?php
class MightinessController extends Controller{
    /*public function actionIndex(){
        
    }*/
    public function actionAddMeasure()
    {
        $productId = trim($_POST['productId']);
        $techId = $_POST['tId'];
        $techLabel = trim($_POST['techLabel']);
        $measureId = $_POST['mId'];
        $measureLabel = trim($_POST['measureLabel']);
        $measureReduction = trim($_POST['measureReduction']);
        $productTechCharId = '';
        
        if(empty($measureId)) $measure = new Measure;
        else $measure = Measure::model()->findByPk($measureId);
        
        $measure->title = $measureLabel;
        $measure->reduction = $measureReduction;
        
        if(empty($techId)) $techChar = new TechCharacteristic;
        else $techChar = TechCharacteristic::model()->findByPk($techId);
        $techChar->title = $techLabel;
        
        if($techChar->save() && $measure->save()) {
            $productTechChar = new ProductTechCharacteristic;
            $productTechChar->measure_id = $measure->id;
            $productTechChar->tech_id = $techChar->id;
            $productTechChar->product_id = $productId;
            if($productTechChar->save()) $productTechCharId = $productTechChar->id;
        }
        
        $array = array('techLabel'=>$techLabel, 'measureLabel'=>$measureLabel, 'measureReduction'=>$measureReduction, 'id' => $productTechCharId);
        echo json_encode($array);
    }
    
    public function actionUpdateMeasure()
    {
        $productId = trim($_POST['productId']);
        $techId = $_POST['tId'];
        $techLabel = trim($_POST['techLabel']);
        $measureId = $_POST['mId'];
        $measureLabel = trim($_POST['measureLabel']);
        $measureReduction = trim($_POST['measureReduction']);
        
        $measure = Measure::model()->findByPk($measureId);
        $measure->title = $measureLabel;
        $measure->reduction = $measureReduction;
        
        if($measure->save()) {
            $productTechChar = ProductTechCharacteristic::model()->findByPk($techId);
            $productTechChar->measure_id = $measure->id;
            $productTechChar->tech_id = $techChar->id;
            $productTechChar->product_id = $productId;
            $productTechChar->save();
        }
        
        $array = array('techLabel'=>$techLabel, 'measureLabel'=>$measureLabel, 'measureReduction'=>$measureReduction);
        echo json_encode($array);
    }
    
    public function actionDelMeasure()
    {
        $techId = $_POST['tId'];
        if(!empty($techId)) ProductTechCharacteristic::model()->deleteByPk($techId);
        echo true;
    }
    
    public function actionUpdateChildProduct()
    {
        $id = $_POST['id'];
        $params = array_filter($_POST['params']);
        $product = ProductRange::model()->findByPk($id);
        if(trim($params[0]) != $product->title) {
            $product->title = trim($params[0]);
            $product->save();
        }
        // если пустое значение нужно null вставить
        //var_dump($params);
        
        foreach($params as $key=>$value) {
            if($key){
                $value = trim($value);
                $rangeValue = ProductRangeValue::model()->find(array('condition'=>'range_id=:id and tech_id=:tId', 'params'=>array(':id'=>$product->id, ':tId'=>$key)));
                if(is_numeric($value)) {
                    $rangeValue->val_int = $value;
                    $rangeValue->val_text = null;
                } else {
                    $rangeValue->val_text = $value;
                    $rangeValue->val_int = null;
                }
                $rangeValue->save();
            }
        }
        echo true;
    }
    
    public function actionAddChildProduct()
    {
        $params = array_filter($_POST['params']);
        $productId = $_POST['productId'];
        
        $product = new ProductRange;
        $product->title = trim($params[0]);
        $product->product_id = $productId;
        if($product->save()) {
            foreach($params as $key => $value){
                if($key){
                    $value = trim($value);
                    $productValues = new ProductRangeValue;
                    $productValues->range_id = $product->id;
                    $productValues->tech_id = $key;
                    if(is_numeric($value)) $productValues->val_int = $value;
                    else $productValues->val_text = $value;
                    $productValues->save();
                }
            }
            $params['id'] = $product->id;
            $params['title'] = $product->title;
        }
        
        $array = array('params'=>$params);
        echo json_encode($array);
    }
}
