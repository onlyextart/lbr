<?php
class MightinessController extends Controller
{
    public function actionIndex()
    {
        $from = Yii::app()->session->get("selectFrom");
        $to = Yii::app()->session->get("selectTo");
        $result = array();
        $search = new SearchLog();
        $mightinessId = '';
        if($search->prepareSqlite()) {
            $mightinessId = Yii::app()->db->createCommand()
                ->select('id')
                ->from('tech_characteristic')
                ->where('lower(title) like lower("требуемая мощность")')
                ->queryScalar()
            ;
        }
        $catalogCategory = MenuItems::model()->find('alias = :alias', array(':alias'=>'tehnika'));
        $subsections = $catalogCategory->children()->findAll();
        foreach($subsections as $subsection) {
            $allChildrean = $subsection->descendants()->findAll();
            foreach($allChildrean as $child) {
                if($child->isLeaf()) {
                    $productId = MenuItemsContent::model()->find('item_id = :id', array(':id'=>$child->id));
                    $parent = MenuItems::model()->findBypk($productId->item_id);
                    $productRange = ProductRange::model()->findAll(array('condition'=>'product_id=:id', 'params'=>array(':id'=>$productId->page_id)));
                    $product = Products::model()->findByPk($productId->page_id);
                    $img = $product->image;
                    $logo = Makers::model()->findByPk($product->maker)->logo;
                    if(!empty($productRange)) {
                        foreach($productRange as $rangeItem) {
                            if(!empty($from) && !empty($mightinessId)) {
                                $productTechChar = ProductTechCharacteristic::model()->find(array('condition'=>'tech_id=:id and product_id=:product_id', 'params'=>array(':id'=>$mightinessId, ':product_id'=>$productId->page_id)));
                                if(!empty($to)) {
                                    $productRangeValue = ProductRangeValue::model()->find(array('condition'=>'tech_id=:id and range_id=:range_id and val_int >= :from and val_int <= :to', 'params'=>array(':from'=>$from, ':to'=>$to, ':id'=>$productTechChar->id, ':range_id'=>$rangeItem->id)));
                                    if(!empty($productRangeValue))$result[$subsection->name][] = array('name' => $rangeItem->title, 'path' => $child->path, 'id' => $productId->page_id, 'parentName' => $parent->name, 'img' => $img, 'logo'=>$logo);
                                } else {
                                    $productRangeValue = ProductRangeValue::model()->find(array('condition'=>'tech_id=:id and range_id=:range_id and val_int < '.$from, 'params'=>array(':id'=>$productTechChar->id, ':range_id'=>$rangeItem->id)));
                                    if(!empty($productRangeValue))$result[$subsection->name][] = array('name' => $rangeItem->title, 'path' => $child->path, 'id' => $productId->page_id, 'parentName' => $parent->name, 'img' => $img, 'logo'=>$logo);
                                }
                            } else $result[$subsection->name][] = array('name' => $rangeItem->title, 'path' => $child->path, 'id' => $productId->page_id, 'parentName' => $parent->name, 'img' => $img, 'logo'=>$logo);
                        }
                    }
                }
            }
        }
        $this->render('index', array('data'=>$result));
    }
    
    public function actionSaveSelectedOption()
    {
        Yii::app()->session->add("selectFrom", $_POST['from']);
        Yii::app()->session->add("selectTo", $_POST['to']);
        Yii::app()->session->add("mightinessView", $_POST['view']);
        echo true;
    }
}