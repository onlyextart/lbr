<?php
class MightinessController extends Controller
{
    public function actionAddMeasure()
    {
        $productId = trim($_POST['productId']);
        $techId = $_POST['tId'];
        $techLabel = trim($_POST['techLabel']);
        $measureId = $_POST['mId'];
        $measureLabel = trim($_POST['measureLabel']);
        $measureReduction = trim($_POST['measureReduction']);
        $productTechCharId = '';
        
        if(empty($techId)) {
            $search = new SearchLog();
            if($search->prepareSqlite()) {
                $techId = Yii::app()->db->createCommand()
                    ->select('id')
                    ->from('tech_characteristic')
                    ->where('lower(title) like lower("'.$techLabel.'")')
                    ->queryScalar()
                ;
            }
            
            if(!empty($techId)) $techChar = TechCharacteristic::model()->findByPk($techId);
            else $techChar = new TechCharacteristic;
        } else $techChar = TechCharacteristic::model()->findByPk($techId);
        $techChar->title = $techLabel;
        
        if(!empty($measureLabel)) {
            if(empty($measureId)) $measure = new Measure;
            else $measure = Measure::model()->findByPk($measureId);
            $measure->title = $measureLabel;
            $measure->reduction = $measureReduction;
            $measure->save();
            $measureId = $measure->id;
        }
        
        if($techChar->save()) {
            $productTechChar = new ProductTechCharacteristic;
            $productTechChar->measure_id = $measureId;
            $productTechChar->tech_id = $techChar->id;
            $productTechChar->product_id = $productId;
            $productTechChar->save();
            $productTechCharId = $productTechChar->id;
        }
        
        $array = array('techLabel'=>$techLabel, 'measureLabel'=>$measureLabel, 'measureReduction'=>$measureReduction, 'id' => $productTechCharId);
        echo json_encode($array);
    }
    
    public function actionUpdateMeasure()
    {
        $productId = trim($_POST['productId']);
        $techId = $_POST['tId'];
        $techLabel = $_POST['techLabel'];
        $measureId = $_POST['mId'];
        $measureLabel = trim($_POST['measureLabel']);
        $measureReduction = trim($_POST['measureReduction']);
        $productTechChar = new ProductTechCharacteristic;
        
        if(empty($techId)) {
            $techChar = new TechCharacteristic;
            $techChar->title = $techLabel;
            $techChar->save();
            $techId = $techChar->id;
        }
        if(empty($measureId)) {
            $search = new SearchLog();
            if($search->prepareSqlite()) {
                $measureId = Yii::app()->db->createCommand()
                    ->select('id')
                    ->from('measure')
                    ->where('lower(title) like lower("'.$measureLabel.'")')
                    ->queryScalar()
                ;
            }
            if(empty($measureId)){
                $measure = new Measure;
                $measure->title = $measureLabel;
                $measure->reduction = $measureReduction;
                $measure->save();
                $measureId = $measure->id;
            }
        }
        
        if(mb_strtolower($measureLabel, 'utf-8') == 'лошадиные силы') {
            $productTechChar->measure_id = $measureId;
            $productTechChar->tech_id = $techId;
            $productTechChar->product_id = $productId;
            $productTechChar->save();
        } else{
            $productTechChar = ProductTechCharacteristic::model()->find('product_id = :productId and tech_id = :techId', array(':productId'=>$productId, ':techId'=>$techId));
            if($productTechChar->measure_id == $measureId) {
                $measure = Measure::model()->findByPk($measureId);
                $measure->title = $measureLabel;
                $measure->reduction = $measureReduction;
                $measure->save();
            } else {
                $productTechChar->measure_id = $measureId;
                $productTechChar->save();
            }
        }
        $array = array('measureId'=>$measureId, 'measureLabel'=>$measureLabel, 'measureReduction'=>$measureReduction, 'id' => $productTechChar->id);
        echo json_encode($array);
    }
    
    public function actionDelMeasure()
    {
        $techId = $_POST['tId'];
        $measureId = $_POST['mId'];
        $productId = $_POST['productId'];
        if(!empty($techId)) ProductTechCharacteristic::model()->deleteAll('tech_id = :tech_id and product_id = :product_id and measure_id = :measure_id', array(':tech_id'=>$techId, ':product_id'=>$productId, ':measure_id'=>$measureId));
        echo true;
    }
    
    public function actionSearch()
    {
        $query = trim($_GET['q']);
        $result = array();
        $search = new SearchLog();
        if($search->prepareSqlite()) {
            if (!empty($query)){
                $result = Yii::app()->db->createCommand()
                    ->select('id, title')
                    ->from('tech_characteristic')
                    ->where('lower(title) like lower("%'.$query.'%")')
                    ->limit(7)
                    ->queryAll();
            } else {
                // find the most frequently used
                $result = Yii::app()->db->createCommand("SELECT t.id, t.title, 
                    count(p.id) AS num
                    FROM tech_characteristic t
                    LEFT JOIN product_tech_characteristic p ON t.id = p.tech_id
                    GROUP BY t.id
                    ORDER BY num desc, t.title
                    LIMIT 7")->queryAll()
                ;
            }
        }
        
        $this->renderPartial('application.views.mightiness.quickSearch', array('data' =>$result));
    }
    
    public function actionSearchMeasure()
    {
        $query = trim($_GET['q']);
        $result = array();
        $search = new SearchLog();
        if($search->prepareSqlite()) {
            if (!empty($query)){
                $result = Yii::app()->db->createCommand()
                    ->select('id, title, reduction')
                    ->from('measure')
                    ->where('lower(title) like lower("%'.$query.'%")')
                    ->order('title')
                    ->limit(7)
                    ->queryAll();
            } else {
                // find the most frequently used
                $result = Yii::app()->db->createCommand("SELECT m.id, m.title, m.reduction,
                    count(p.id) AS num
                    FROM measure m
                    LEFT JOIN product_tech_characteristic p ON m.id = p.measure_id
                    GROUP BY m.id
                    ORDER BY num desc, m.title
                    LIMIT 7")->queryAll()
                ;
            }
        }
        
        $this->renderPartial('application.views.mightiness.quickSearch', array('data' =>$result));
    }
    
    public function actionAddChildProduct()
    {
        $params = array_filter($_POST['params']);
        $productId = $_POST['productId'];
        
        $product = new ProductRange;
        $product->title = trim($params[0]);
        //$product->description = trim($params['description']);
        $product->product_id = $productId;
        if($product->save()) {
            foreach($params as $key => $value){
               // if($key != 0 && $key != 'description'){
                if($key != 0){
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
            //$params['description'] = $product->title;
        }
        
        $array = array('params'=>$params);
        echo json_encode($array);
    }
    
    public function actionUpdateChildProduct()
    {
        $id = $_POST['id'];
        $parentId = $_POST['parentId'];
        $params = array_filter($_POST['params']);
        $product = ProductRange::model()->findByPk($id);
        if(trim($params[0]) != $product->title) {
            $product->title = trim($params[0]);
            $product->save();
        }
        if(trim($params['description']) != $product->description) {
            $product->description = trim($params['description']);
            $product->save();
        }
        
        // !!!! если пустое значение нужно null вставить
        // var_dump($params);

        foreach($params as $key=>$value) {
            if($key){
                $value = trim($value);
                $productTechChar = ProductTechCharacteristic::model()->find(array('condition'=>'product_id=:id and tech_id=:tId', 'params'=>array(':id'=>$parentId, ':tId'=>$key)));
                $rangeValue = ProductRangeValue::model()->find(array('condition'=>'range_id=:id and tech_id=:tId', 'params'=>array(':id'=>$id, ':tId'=>$productTechChar->id)));
                if(empty($rangeValue)) {
                    $productTechChar = ProductTechCharacteristic::model()->find(array('condition'=>'product_id=:id and tech_id=:tId', 'params'=>array(':id'=>$parentId, ':tId'=>$key)));
                    $rangeValue = new ProductRangeValue;
                    $rangeValue->range_id = $id;
                    $rangeValue->tech_id = $productTechChar->id;
                }
                if(ctype_digit(str_replace(',', '', $value)) || ctype_digit(str_replace('.', '', $value))) {
                    $value = str_replace(',', '.', $value);
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
    
    public function actionDeleteChildProduct()
    {
        $id = $_POST['id'];
        ProductRange::model()->deleteByPk($id);
        echo true;
        //echo $id;
    }
}
