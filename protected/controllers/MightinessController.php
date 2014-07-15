<?php
class MightinessController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionLoadProducts()
    {
        $from = $_POST['from'];
        $to = $_POST['to'];

        $result = $groupInfo = array();
        $search = new SearchLog();
        $mightinessId = '';
        $response = '';
        if($search->prepareSqlite()) {
            $mightinessId = Yii::app()->db->createCommand()
                ->select('id')
                ->from('tech_characteristic')
                ->where('lower(title) like lower("требуемая мощность")')
                ->queryScalar()
            ;
        }
        if(!empty($mightinessId)) {
            $catalogCategory = MenuItems::model()->find('alias = :alias', array(':alias'=>'tehnika'));
            $subsections = $catalogCategory->children()->findAll();

            foreach($subsections as $subsection) {
                $colorGroup = '25';
                $imgGroup = '';
                $imgGroup = '/images/mightiness/label_classic.png';
                $groupRow = Yii::app()->db->createCommand()
                    ->select('group_id, mightiness_ico')
                    ->from('menu_items')
                    ->where('lower(name) like lower("'.$subsection->name.'") and level = 4')
                    ->queryRow()
                ;
                if(!empty($groupRow)) {
                    if(!empty($groupRow['group_id'])) $colorGroup = $groupRow['group_id'];
                    if(!empty($groupRow['mightiness_ico'])) $imgGroup = $groupRow['mightiness_ico'];
                }
                
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

                                        if(!empty($productRangeValue)){
                                            $result[$subsection->name][] = array('name' => $rangeItem->title, 'description' => $rangeItem->description, 'path' => $child->path, 'id' => $productId->page_id, 'parentName' => $parent->name, 'img' => $img, 'logo'=>$logo);
                                            $groupInfo[$subsection->name]['color'] = $colorGroup;
                                            $groupInfo[$subsection->name]['img'] = $imgGroup;
                                        }
                                    } else {
                                        $productRangeValue = ProductRangeValue::model()->find(array('condition'=>'tech_id=:id and range_id=:range_id and val_int < '.$from, 'params'=>array(':id'=>$productTechChar->id, ':range_id'=>$rangeItem->id)));
                                        if(!empty($productRangeValue)){
                                            $result[$subsection->name][] = array('name' => $rangeItem->title, 'description' => $rangeItem->description, 'path' => $child->path, 'id' => $productId->page_id, 'parentName' => $parent->name, 'img' => $img, 'logo'=>$logo);
                                            $groupInfo[$subsection->name]['color'] = $colorGroup;
                                            $groupInfo[$subsection->name]['img'] = $imgGroup;
                                        }
                                    }
                                } else {
                                    $result[$subsection->name][] = array('name' => $rangeItem->title, 'description' => $rangeItem->description, 'path' => $child->path, 'id' => $productId->page_id, 'parentName' => $parent->name, 'img' => $img, 'logo'=>$logo);
                                    $groupInfo[$subsection->name]['color'] = $colorGroup;
                                    $groupInfo[$subsection->name]['img'] = $imgGroup;
                                }
                            }
                        }
                    }
                }
            }
        }
        //echo '<pre>';
        //var_dump($result);exit;
        //exit;
        //http://www.lbr.test/tehnika/kormozagotovka/pritsepy-dlya-perevozki-tyukov-i-rulonov/382-samozagruzochnye-telezhki-trb/
        //http://www.lbr.ru/tehnika/kormozagotovka/pritsepnye-kormouborochnye-kombajny/602-silosorezki-evro-kir-1-5/
        if(!empty($result)){
            /*$response =  '<table class="mightinessTable mightinessTableFullView"><tbody>';
            foreach($result as $key => $value) {
                if(!empty($result[$key])){
                    $response .=  '<tr><th colspan="3">'.mb_strtoupper($key, 'UTF-8').'</th></tr>';
                    foreach($value as $product) {
                        //$product['id'] - id родителя
                        $label = $product['parentName'];
                        if($product['parentName'] != $product['name']) $label = $product['parentName'].' (модель '.$product['name'].')';
                        $description = (!empty($product['description'])) ? $product['description'] : 'Нет описания';
                        $response .=  '<tr>'.
                                '<td>' .
                                    '<div><a href='.$product['path'].'>'.$label.'</a></div><div><img alt="Изображение товара" src="'.Yii::app()->getBaseUrl(true).$product['img'].'"/></div>'.
                                '</td>' .
                                '<td class="description">'.$description.'</td>' .
                                '<td><img alt="Логотип фирмы" src="'.Yii::app()->getBaseUrl(true).$product['logo'].'"/></td>' .
                            '</tr>'
                        ;
                    }
                }
            }
            $response .=  '</tbody></table>';
            */
            //$response =  '<table class="mightinessTable mightinessTableFullView"><tbody>';
            
            foreach($result as $key => $value) {
                
                if(!empty($result[$key])){
                    $colorCssClass='menu_color_group_'.$groupInfo[$key]['color']; //.$secondLevelItem->group->id;
                    $response .=  '<div class="mightiness-menu-label '.$colorCssClass.'" style="background-image: url('.Yii::app()->getBaseUrl(true).$groupInfo[$key]['img'].')"><span>'.mb_strtoupper($key, 'UTF-8').'</span></div>';//'<tr><th colspan="3">'.mb_strtoupper($key, 'UTF-8').'</th></tr>';
                    //$response .=  '<div class="mightiness-menu-label '.$colorCssClass.'"><img src="'.Yii::app()->getBaseUrl(true).$groupInfo[$key]['img'].'" alt=""/><span>'.mb_strtoupper($key, 'UTF-8').'</span></div>';//'<tr><th colspan="3">'.mb_strtoupper($key, 'UTF-8').'</th></tr>';
                    
                    foreach($value as $product) {
                        //$label = $product['parentName'];
                        $label = '<a href='.$product['path'].'><h3>'.$product['parentName'].'</h3></a>';
                        if($product['parentName'] != $product['name']) $label .= '<a href='.$product['path'].'>(модель '.$product['name'].')</a>';
                        //if($product['parentName'] != $product['name']) $label .= '<span>'.$product['parentName'].'</span><br>(модель '.$product['name'].')';
                        $description = (!empty($product['description'])) ? $product['description'] : 'Нет описания';
                        $response .=  '<div class="mresults">';
                        //$response .=  '<div class="m_header"><a href='.$product['path'].'>'.$label.'</a></div>';
                        $response .=  '<div class="m_header">'.$label.'</div>';
                        $response .=  '<div class="m_image"><img alt="Изображение товара" src="'.Yii::app()->getBaseUrl(true).$product['img'].'"/></div>';
                        $response .=  '<div class="m_caption"><p>'.$description.'</p></div>';
                        $response .=  '</div>';
                        //$product['id'] - id родителя
                    }
                    
                    $response .=  '<div style="clear: both"></div>';
                }
            }
            
            //$response .=  '</tbody></table>';
        } else $response =  '<span class="m_no_res">Нет товаров с выбранной мощностью</span>';
        
        $array = array('data'=>$response);
        echo json_encode($array);
    }
    
    public function actionAddValues()
    {
        TechSchema::model()->deleteAll();
        TechSchemaStage::model()->deleteAll();
        
        $root1 = new TechSchema;
        $root1->title = 'Почвообработка и посев';
        $root1->color = '009bdf';
        $root1->saveNode();
        $root2 = new TechSchema;
        $root2->title = 'Кормозаготовка';
        $root2->color = '8dc63f';
        $root2->saveNode();
        $root3 = new TechSchema;
        $root3->title = 'Овощи и картофель';
        $root3->color = 'f99d1c';
        $root3->saveNode();
        
        $subCategory1 = new TechSchema;
        $subCategory1->title='Заготовка сена';
        $subCategory1->img='/images/schema/hay/hay.jpg';
        $subCategory1->menu_img='/images/schema/menu/seno.png';
        $subCategory2 = new TechSchema;
        $subCategory2->title='Заготовка сенажа';
        $subCategory2->img='/images/schema/senaz/senaz.jpg';
        $subCategory2->menu_img='/images/schema/menu/senaz.png';
        $subCategory3 = new TechSchema;
        $subCategory3->title='Заготовка силоса';
        $subCategory3->img='/images/schema/silos/silos.jpg';
        $subCategory3->menu_img='/images/schema/menu/silos.png';
        $subCategory4 = new TechSchema;
        $subCategory4->title='Заготовка соломы';
        $subCategory4->img='/images/schema/soloma/soloma.jpg';
        $subCategory4->menu_img='/images/schema/menu/soloma.png';
        //$root = TechSchema::model()->findByPk(1);
        $subCategory2->appendTo($root2);
        $subCategory1->insertAfter($subCategory2);
        $subCategory4->insertAfter($subCategory1);
        $subCategory3->insertAfter($subCategory4);
 
        $subCategory5 = new TechSchema;
        $subCategory5->title='Возделывание картофеля';
        $subCategory5->img='/images/schema/potato/potato.jpg';
        $subCategory5->menu_img='/images/schema/menu/potato.png';
        $subCategory6 = new TechSchema;
        $subCategory6->title='Возделывание лука';
        $subCategory6->img='/images/schema/luk/luk.jpg';
        $subCategory6->menu_img='/images/schema/menu/luk.png';
        //$root = TechSchema::model()->findByPk(2);
        $subCategory6->appendTo($root3);
        $subCategory5->insertAfter($subCategory6);
        
        $subCategory7 = new TechSchema;
        $subCategory7->title='Классическая технология';
        $subCategory7->img='/images/schema/classic-technology/classic-technology.jpg';
        $subCategory7->menu_img='/images/schema/menu/classic.png';
        $subCategory8 = new TechSchema;
        $subCategory8->title='Min-Till';
        $subCategory8->img='/images/schema/min-till/min-till.jpg';
        $subCategory8->menu_img='/images/schema/menu/min-till.png';
        $subCategory9 = new TechSchema;
        $subCategory9->title='No-Till';
        $subCategory9->img='/images/schema/no-till/no-till.jpg';
        $subCategory9->menu_img='/images/schema/menu/no-till.png';
        $subCategory10 = new TechSchema;
        $subCategory10->title='Vertical-Till';
        $subCategory10->img='/images/schema/vertical-till/vertical-till.jpg';
        $subCategory10->menu_img='/images/schema/menu/vertical.png';
        
        //$root = TechSchema::model()->findByPk(3);
        $subCategory8->appendTo($root1);
        $subCategory9->insertAfter($subCategory8);
        $subCategory10->insertAfter($subCategory9);
        $subCategory7->insertAfter($subCategory10);

        ////////////////////////
        /*
        // Не менять
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
        $stage = new TechStage();
        $stage->title = 'Лущение стерни';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Внесение минеральных удобрений';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Внесение органики';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Вспашка';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Культивация';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Внесение азотных удобрений';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Фрезерование';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Посадка';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Нарезка гребней';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Внесение гербицидов и хим.защита';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Окучивание';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Полив';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Удаление ботвы';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Уборка';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Очистка и обрезка лука';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Перевозка';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Сортировка';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Мойка';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Расфасовка';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Хранение';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Обработка стерни, рыхление переуплотненных слоев почвы, выравнивание';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Мульчирование/распределение соломы и пожнивных остатков';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Внесение минеральных удобрений';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Ранневесеннее боронование';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Посев';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Внесение гербицидов/инсектицидов/фунгицидов';
        $stage->save();
        $stage = new TechStage();
        $stage->title = 'Рыхление подошвы и переуплотненного слоя почвы (раз в 3-5 лет)';
        $stage->save();
        */
        /////////////////////////////////////////
        
        // солома
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory4->id; //7
        $stage->stage_id = 1;
        $stage->level = 1;
        $stage->img = '/images/schema/soloma/soloma1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory4->id; //7
        $stage->stage_id = 3;
        $stage->level = 2;
        $stage->img = '/images/schema/soloma/soloma2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory4->id; //7
        $stage->stage_id = 4;
        $stage->level = 3;
        $stage->img = '/images/schema/soloma/soloma3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory4->id; //7
        $stage->stage_id = 6;
        $stage->level = 4;
        $stage->img = '/images/schema/soloma/soloma4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory4->id; //7
        $stage->stage_id = 7;
        $stage->level = 5;
        $stage->img = '/images/schema/soloma/soloma5.jpg';
        $stage->save();
        
        // сено
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory1->id; //4;
        $stage->stage_id = 1;
        $stage->level = 1;
        $stage->img = '/images/schema/hay/hay-skashivanie.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory1->id; //4;
        $stage->stage_id = 2;
        $stage->level = 2;
        $stage->img = '/images/schema/hay/hay-voroshenie.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory1->id; //4;
        $stage->stage_id = 3;
        $stage->level = 3;
        $stage->img = '/images/schema/hay/hay-sgrebanie.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory1->id; //4;
        $stage->stage_id = 4;
        $stage->level = 4;
        $stage->img = '/images/schema/hay/hay-podbor.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory1->id; //4;
        $stage->stage_id = 6;
        $stage->level = 5;
        $stage->img = '/images/schema/hay/hay-transportirovka.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory1->id; //4;
        $stage->stage_id = 7;
        $stage->level = 6;
        $stage->img = '/images/schema/hay/hay-razgruzka.jpg';
        $stage->save();
        
        // сенаж
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory2->id; //5;
        $stage->stage_id = 1;
        $stage->level = 1;
        $stage->img = '/images/schema/senaz/senaz1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory2->id; //5;
        $stage->stage_id = 3;
        $stage->level = 2;
        $stage->img = '/images/schema/senaz/senaz2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory2->id; //5;
        $stage->stage_id = 4;
        $stage->level = 3;
        $stage->img = '/images/schema/senaz/senaz3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory2->id; //5;
        $stage->stage_id = 5;
        $stage->level = 4;
        $stage->img = '/images/schema/senaz/senaz5.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory2->id; //5;
        $stage->stage_id = 6;
        $stage->level = 5;
        $stage->img = '/images/schema/senaz/senaz7.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory2->id; //5;
        $stage->stage_id = 7;
        $stage->level = 6;
        $stage->img = '/images/schema/senaz/senaz9.jpg';
        $stage->save();
        
        // силос
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory3->id; //6;
        $stage->stage_id = 1;
        $stage->level = 1;
        $stage->img = '/images/schema/silos/silos1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory3->id; //6;
        $stage->stage_id = 3;
        $stage->level = 2;
        $stage->img = '/images/schema/silos/silos1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory3->id;//6;
        $stage->stage_id = 4;
        $stage->level = 3;
        $stage->img = '/images/schema/silos/silos2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory3->id;//6;
        $stage->stage_id = 5;
        $stage->level = 4;
        $stage->img = '/images/schema/silos/silos3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory3->id;//6;
        $stage->stage_id = 6;
        $stage->level = 5;
        $stage->img = '/images/schema/silos/silos4.jpg';
        $stage->save();
        
        // картофель
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 8;
        $stage->level = 1;
        $stage->img = '/images/schema/potato/potato1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 9;
        $stage->level = 2;
        $stage->img = '/images/schema/potato/potato2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 10;
        $stage->level = 3;
        $stage->img = '/images/schema/potato/potato3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 11;
        $stage->level = 4;
        $stage->img = '/images/schema/potato/potato4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 12;
        $stage->level = 5;
        $stage->img = '/images/schema/potato/potato5.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 13;
        $stage->level = 6;
        $stage->img = '/images/schema/potato/potato6.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 14;
        $stage->level = 7;
        $stage->img = '/images/schema/potato/potato7.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 15;
        $stage->level = 8;
        $stage->img = '/images/schema/potato/potato8.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 16;
        $stage->level = 9;
        $stage->img = '/images/schema/potato/potato9.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 17;
        $stage->level = 10;
        $stage->img = '/images/schema/potato/potato10.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 18;
        $stage->level = 11;
        $stage->img = '/images/schema/potato/potato11.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 19;
        $stage->level = 12;
        $stage->img = '/images/schema/potato/potato12.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 20;
        $stage->level = 13;
        $stage->img = '/images/schema/potato/potato13.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 21;
        $stage->level = 14;
        $stage->img = '/images/schema/potato/potato14.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 23;
        $stage->level = 15;
        $stage->img = '/images/schema/potato/potato15.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 24;
        $stage->level = 16;
        $stage->img = '/images/schema/potato/potato16.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 25;
        $stage->level = 17;
        $stage->img = '/images/schema/potato/potato17.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 26;
        $stage->level = 18;
        $stage->img = '/images/schema/potato/potato18.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = 27;
        $stage->level = 19;
        $stage->img = '/images/schema/potato/potato19.jpg';
        $stage->save();
        
        // лук
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 8;
        $stage->level = 1;
        $stage->img = '/images/schema/luk/luk1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 9;
        $stage->level = 2;
        $stage->img = '/images/schema/luk/luk2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 10;
        $stage->level = 3;
        $stage->img = '/images/schema/luk/luk3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 11;
        $stage->level = 4;
        $stage->img = '/images/schema/luk/luk4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 12;
        $stage->level = 5;
        $stage->img = '/images/schema/luk/luk5.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 13;
        $stage->level = 6;
        $stage->img = '/images/schema/luk/luk6.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 14;
        $stage->level = 7;
        $stage->img = '/images/schema/luk/luk7.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 16;
        $stage->level = 8;
        $stage->img = '/images/schema/luk/luk8.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 15;
        $stage->level = 9;
        $stage->img = '/images/schema/luk/luk9.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 17;
        $stage->level = 10;
        $stage->img = '/images/schema/luk/luk10.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 19;
        $stage->level = 11;
        $stage->img = '/images/schema/luk/luk11.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 20;
        $stage->level = 12;
        $stage->img = '/images/schema/luk/luk12.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 21;
        $stage->level = 13;
        $stage->img = '/images/schema/luk/luk13.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 22;
        $stage->level = 14;
        $stage->img = '/images/schema/luk/luk14.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 23;
        $stage->level = 15;
        $stage->img = '/images/schema/luk/luk15.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 24;
        $stage->level = 16;
        $stage->img = '/images/schema/luk/luk16.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 25;
        $stage->level = 17;
        $stage->img = '/images/schema/luk/luk17.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 26;
        $stage->level = 18;
        $stage->img = '/images/schema/luk/luk18.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = 27;
        $stage->level = 19;
        $stage->img = '/images/schema/luk/luk19.jpg';
        $stage->save();
        
        // Классическая технология
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory7->id; //10;
        $stage->stage_id = 28;
        $stage->level = 1;
        $stage->img = '/images/schema/classic-technology/classic-technology1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory7->id; //10;
        $stage->stage_id = 29;
        $stage->level = 2;
        $stage->img = '/images/schema/classic-technology/classic-technology2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory7->id; //10;
        $stage->stage_id = 30;
        $stage->level = 3;
        $stage->img = '/images/schema/classic-technology/classic-technology3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory7->id; //10;
        $stage->stage_id = 31;
        $stage->level = 4;
        $stage->img = '/images/schema/classic-technology/classic-technology4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory7->id; //10;
        $stage->stage_id = 32;
        $stage->level = 5;
        $stage->img = '/images/schema/classic-technology/classic-technology5.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory7->id; //10;
        $stage->stage_id = 33;
        $stage->level = 6;
        $stage->img = '/images/schema/classic-technology/classic-technology6.jpg';
        $stage->save();
        
        // Min-Till
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory8->id; //11;
        $stage->stage_id = 28;
        $stage->level = 1;
        $stage->img = '/images/schema/min-till/min-till1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory8->id; //11;
        $stage->stage_id = 29;
        $stage->level = 2;
        $stage->img = '/images/schema/min-till/min-till2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory8->id; //11;
        $stage->stage_id = 30;
        $stage->level = 3;
        $stage->img = '/images/schema/min-till/min-till3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory8->id; //11;
        $stage->stage_id = 31;
        $stage->level = 4;
        $stage->img = '/images/schema/min-till/min-till4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory8->id; //11;
        $stage->stage_id = 32;
        $stage->level = 5;
        $stage->img = '/images/schema/min-till/min-till5.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory8->id; //11;
        $stage->stage_id = 33;
        $stage->level = 6;
        $stage->img = '/images/schema/min-till/min-till6.jpg';
        $stage->save();
        
        TechSchemaStage::model()->deleteAll('schema_id=:id', array('id'=>13));
        
        // Vertical-Till
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory10->id; //13;
        $stage->stage_id = 34;
        $stage->level = 1;
        $stage->img = '/images/schema/vertical-till/vertical-till1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory10->id; //13;
        $stage->stage_id = 28;
        $stage->level = 2;
        $stage->img = '/images/schema/vertical-till/vertical-till2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory10->id; //13;
        $stage->stage_id = 29;
        $stage->level = 3;
        $stage->img = '/images/schema/vertical-till/vertical-till3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory10->id; //13;
        $stage->stage_id = 31;
        $stage->level = 4;
        $stage->img = '/images/schema/vertical-till/vertical-till4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory10->id; //13;
        $stage->stage_id = 32;
        $stage->level = 5;
        $stage->img = '/images/schema/vertical-till/vertical-till5.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory10->id; //13;
        $stage->stage_id = 33;
        $stage->level = 6;
        $stage->img = '/images/schema/vertical-till/vertical-till6.jpg';
        $stage->save();
        
        // No-Till
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory9->id; //12;
        $stage->stage_id = 34;
        $stage->level = 1;
        $stage->img = '/images/schema/no-till/no-till1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory9->id; //12;
        $stage->stage_id = 29;
        $stage->level = 2;
        $stage->img = '/images/schema/no-till/no-till2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory9->id; //12;
        $stage->stage_id = 31;
        $stage->level = 3;
        $stage->img = '/images/schema/no-till/no-till3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory9->id; //12;
        $stage->stage_id = 32;
        $stage->level = 4;
        $stage->img = '/images/schema/no-till/no-till4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory9->id; //12;
        $stage->stage_id = 33;
        $stage->level = 5;
        $stage->img = '/images/schema/no-till/no-till5.jpg';
        $stage->save();
        
        ////////////////////////////////////////////////////
        /*
        $model = MenuItems::model()->findByPk(953);
        $model->mightiness_ico = '/images/mightiness/label_classic.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(789);
        $model->mightiness_ico = '/images/mightiness/label_kombain.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(1311);
        $model->mightiness_ico = '/images/mightiness/label_kormorazd.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(1157);
        $model->mightiness_ico = '/images/mightiness/label_oprysk.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(1083);
        $model->mightiness_ico = '/images/mightiness/label_ovoschi.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(1333);
        $model->mightiness_ico = '/images/mightiness/label_peregr.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(865);
        $model->mightiness_ico = '/images/mightiness/label_pogrTractIcon.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(1345);
        $model->mightiness_ico = '/images/mightiness/label_poliv.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(1045);
        $model->mightiness_ico = '/images/mightiness/label_propash.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(891);
        $model->mightiness_ico = '/images/mightiness/label_shirokozahvat.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(845);
        $model->mightiness_ico = '/images/mightiness/label_teleskop.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(797);
        $model->mightiness_ico = '/images/mightiness/label_tractor.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(1187);
        $model->mightiness_ico = '/images/mightiness/label_udobr.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(1221);
        $model->mightiness_ico = '/images/mightiness/label_zagot.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(1387);
        $model->mightiness_ico = '/images/mightiness/label_zerno.png';
        $model->saveNode();
        $model = MenuItems::model()->findByPk(1363);
        $model->mightiness_ico = '/images/mightiness/label_zhatki.png';
        $model->saveNode();*/
        //////////////////////////////////////////
    }
}