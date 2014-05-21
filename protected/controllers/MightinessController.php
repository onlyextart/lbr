<?php
class MightinessController extends Controller
{
    public function actionIndex()
    {   
        $result = array();
        $catalogCategory = MenuItems::model()->find('alias = :alias', array(':alias'=>'tehnika'));
        $subsections = $catalogCategory->children()->findAll(); // прямые потомки

        foreach($subsections as $subsection) { // названия подразделов
            $allChildrean = $subsection->descendants()->findAll();
            foreach($allChildrean as $child) {
                if($child->isLeaf()) {
                    $productId = MenuItemsContent::model()->find('item_id = :id', array(':id'=>$child->id));
                    $result[$subsection->name][] = array('name' => $child->name, 'path' => $child->path, 'id' => $productId->page_id);
                }
            }
        }
        $this->render('index', array('data'=>$result));
    }
}