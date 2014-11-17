<?php
class TehciklController extends Controller
{
    public function actionIndex() 
    {
        $techSchemaRoots = TechSchema::model()->roots()->findAll();
        $techSchemaSteps = array();
        foreach ($techSchemaRoots as $root){
            $cycle = TechSchema::model()->findByPk($root->id);
            $descendants = $cycle->descendants()->findAll();
            foreach ($descendants as $descendant){  
                $techSchemaSteps[$descendant->id]['title'] = $cycle->title.' - '.$descendant->title;
                $techSchemaSteps[$descendant->id]['id'] = $descendant->id;
            }
        }
        $sort = new CSort();
        $sort->defaultOrder = 'title ASC';
        $dataProvider = new CArrayDataProvider(
            $techSchemaSteps,
            array(
                'sort' => $sort
            )
        );
        
        $this->render(
            'index',
            array(
                'data'=>$dataProvider,
            )
        );
    }
    
    public function actionEdit($id) 
    {
        $result = $productList = array();
        $response = '';
        $cycleName = TechSchema::model()->findByPk($id)->title;
        
        $stages = TechSchemaStage::model()->findAll(array('order'=>'level', 'condition'=>'schema_id = :id', 'params'=>array(':id'=>$id)));
        foreach($stages as $stage) {
            $result[$cycleName][$stage['id']] = TechStage::model()->findByPk($stage['stage_id'])->title;
           
            $criteria = new CDbCriteria;
            $criteria->order = "IFNULL(position,10000000) ASC";
            $criteria->condition = 'stage_id = :id';
            $criteria->params = array(':id'=>$stage['id']);
            $products = ProductTechSchema::model()->findAll($criteria);

            if(!empty($products)) {
                foreach($products as $product){
                    $name = Products::model()->findByPk($product['product_id'])->name;
                    $item_ids = MenuItemsContent::model()->findAll('page_id=:id', array(':id'=>$product['product_id']));
                    if(count($item_ids) > 1){
                        foreach($item_ids as $item_id){
                            $menuItem = MenuItems::model()->findByPk($item_id->item_id);
                            if($menuItem->type == 1) $href = $menuItem->path;
                        }
                    } else {
                        $item_id = MenuItemsContent::model()->find('page_id=:id', array(':id'=>$product['product_id']))->item_id;
                        $href = MenuItems::model()->findByPk($item_id)->path;
                    }
                    if(substr($href, -1) != '/') $href = $href.'/';
                    $productList[$cycleName][$stage['id']][] = array(
                        'name' => $name,
                        'path' => $href,
                        'pos' => $product['position'],
                        'id' => $product['product_id'],
                        'stage-id'=>$stage['id'],
                    );
                }
            } else $productList[$cycleName][$stage['id']][] = null;
        }
        
        $this->render(
            'edit',
            array(
                'productList'=>$productList,
                'cycleName' => $cycleName,
            )
        );
    }
    
    public function actionUpdate() 
    {
        $data = json_decode(stripslashes($_POST['data']));
        $stageId = $_POST['stageId'];
        
        foreach($data as $id=>$position) {
           $model = ProductTechSchema::model()->find(array('condition'=>'stage_id = :stageId and product_id = :prodId', 'params' =>array(':stageId'=>$stageId, ':prodId'=>$id)));
           if($model->position != $position) {
               $model->position = $position;
               $model->save();
           }
        }
    }
}
