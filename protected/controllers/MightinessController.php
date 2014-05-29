<?php
class MightinessController extends Controller
{
    public function actionIndex()
    {   
        $result = array();
        $mightinessId = Yii::app()->db->createCommand()
            ->select('id')
            ->from('tech_characteristic')
            ->where('lower(title) like lower("требуемая мощность")')
            ->queryScalar()
        ;
        $productTechChar = ProductTechCharacteristic::model()->findAll(array('condition'=>'tech_id=:id', 'params'=>array(':id'=>$mightinessId)));
        
        $catalogCategory = MenuItems::model()->find('alias = :alias', array(':alias'=>'tehnika'));
        $subsections = $catalogCategory->children()->findAll(); // прямые потомки
        
        foreach($subsections as $subsection) { // названия подразделов
            $allChildrean = $subsection->descendants()->findAll();
            foreach($allChildrean as $child) {
                if($child->isLeaf()) {
                    $productId = MenuItemsContent::model()->find('item_id = :id', array(':id'=>$child->id));
                    $productRange = ProductRange::model()->findAll(array('condition'=>'product_id=:id', 'params'=>array(':id'=>$productId->page_id)));
                    if(!empty($productRange)){
                        foreach($productRange as $rangeItem){
                            
                            $result[$subsection->name][] = array('name' => $rangeItem->title, 'path' => $child->path, 'id' => $productId->page_id);
                        }
                    }
                    //$result[$subsection->name][] = array('name' => $child->name, 'path' => $child->path, 'id' => $productId->page_id);
                }
            }
        }
        $this->render('index', array('data'=>$result));
    }
}