<?php
class MightinessController extends Controller
{
    public function actionIndex()
    {
        /*
        $root = new TechSchema;
        $root->title = 'Кормозаготовка';
        $root->saveNode();
        $root = new TechSchema;
        $root->title = 'Возделывание овощей и картофеля';
        $root->saveNode();
        
        $root = new TechSchema;
        $root->title = 'Почвообработка и посев';
        $root->saveNode();
        $subCategory1 = new TechSchema;
        $subCategory1->title='Заготовка сена';
        $subCategory2 = new TechSchema;
        $subCategory2->title='Заготовка сенажа';
        $subCategory3 = new TechSchema;
        $subCategory3->title='Заготовка силоса';
        $subCategory4 = new TechSchema;
        $subCategory4->title='Заготовка соломы';
        $root = TechSchema::model()->findByPk(1);
        $subCategory1->appendTo($root);
        $subCategory2->insertAfter($subCategory1);
        $subCategory3->insertAfter($subCategory2);
        $subCategory4->insertAfter($subCategory3);
 
        $subCategory1 = new TechSchema;
        $subCategory1->title='Возделывание картофеля';
        $subCategory2 = new TechSchema;
        $subCategory2->title='Возделывание лука';
        $root = TechSchema::model()->findByPk(2);
        $subCategory1->appendTo($root);
        $subCategory2->insertAfter($subCategory1);
        
        $subCategory1 = new TechSchema;
        $subCategory1->title='Классическая технология';
        $subCategory2 = new TechSchema;
        $subCategory2->title='Min-Till';
        $subCategory3 = new TechSchema;
        $subCategory3->title='No-Till';
        $subCategory4 = new TechSchema;
        $subCategory4->title='Vertical-Till';
        $root = TechSchema::model()->findByPk(3);
        $subCategory1->appendTo($root);
        $subCategory2->insertAfter($subCategory1);
        $subCategory3->insertAfter($subCategory2);
        $subCategory4->insertAfter($subCategory3);

        ////////////////////////
        
        $stage = new TechStage();
        $stage->title = 'Скашивание';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Ворошение';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Сгребание';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Подбор массы/прессование';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Упаковка в пленку';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Транспортировка';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Разгрузка/укладка';
        $stage->save();
        
        // солома
        $stage = new TechSchemaStage();
        $stage->schema_id = 7;
        $stage->stage_id = 1;
        $stage->level = 1;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 7;
        $stage->stage_id = 3;
        $stage->level = 2;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 7;
        $stage->stage_id = 4;
        $stage->level = 3;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 7;
        $stage->stage_id = 6;
        $stage->level = 4;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 7;
        $stage->stage_id = 7;
        $stage->level = 5;
        $stage->save();
        
        // сено
        $stage = new TechSchemaStage();
        $stage->schema_id = 4;
        $stage->stage_id = 1;
        $stage->level = 1;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 4;
        $stage->stage_id = 2;
        $stage->level = 2;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 4;
        $stage->stage_id = 3;
        $stage->level = 3;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 4;
        $stage->stage_id = 4;
        $stage->level = 4;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 4;
        $stage->stage_id = 6;
        $stage->level = 5;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 4;
        $stage->stage_id = 7;
        $stage->level = 6;
        $stage->save();
        
        // сенаж
        $stage = new TechSchemaStage();
        $stage->schema_id = 5;
        $stage->stage_id = 1;
        $stage->level = 1;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 5;
        $stage->stage_id = 3;
        $stage->level = 2;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 5;
        $stage->stage_id = 4;
        $stage->level = 3;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 5;
        $stage->stage_id = 5;
        $stage->level = 4;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 5;
        $stage->stage_id = 6;
        $stage->level = 5;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 5;
        $stage->stage_id = 7;
        $stage->level = 6;
        $stage->save();
        
        // силос
        $stage = new TechSchemaStage();
        $stage->schema_id = 6;
        $stage->stage_id = 1;
        $stage->level = 1;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 6;
        $stage->stage_id = 3;
        $stage->level = 2;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 6;
        $stage->stage_id = 4;
        $stage->level = 3;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 6;
        $stage->stage_id = 5;
        $stage->level = 4;
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = 6;
        $stage->stage_id = 6;
        $stage->level = 5;
        $stage->save();
        */
        
        
        
/************************************************************/
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