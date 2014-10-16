<?php
class TechtsiklController extends Controller
{
    public function actionIndex($sort = null)
    {
        $title = 'По технологическому циклу';
        $url = array(
            'Min-Till'=>'tsikl-min-till',
            'No-Till'=>'tsikl-no-till',
            'Vertical-Till'=>'tsikl-vertical-till',
            'Классическая технология'=>'tsikl-classic-technology',
            'Заготовка сенажа'=>'tsikl-senazh',
            'Заготовка сена'=>'tsikl-seno',
            'Заготовка соломы'=>'tsikl-soloma',
            'Заготовка силоса'=>'tsikl-silos',
            'Возделывание картофеля'=>'tsikl-kartofel',
            'Возделывание лука'=>'tsikl-luk',
            'Озимые'=>'tsikl-ozimye',
            'Яровые'=>'tsikl-yarovye',
        );

        if(!empty($sort)){
            $activeId = '';
            if ($sort == 'tsikl-min-till') $label = 'Min-Till';
            else if($sort == 'tsikl-no-till') $label = 'No-Till';
            else if($sort == 'tsikl-vertical-till') $label = 'Vertical-Till';
            else if($sort == 'tsikl-classic-technology') $label = 'Классическая технология';
            else if($sort == 'tsikl-senazh') $label = 'Заготовка сенажа';
            else if($sort == 'tsikl-seno') $label = 'Заготовка сена';
            else if($sort == 'tsikl-soloma') $label = 'Заготовка соломы';
            else if($sort == 'tsikl-silos') $label = 'Заготовка силоса';
            else if($sort == 'tsikl-luk') $label = 'Возделывание лука';
            else if($sort == 'tsikl-kartofel') $label = 'Возделывание картофеля';
            else if($sort == 'tsikl-ozimye') $label = 'Озимые';
            else if($sort == 'tsikl-yarovye') $label = 'Яровые';
            $activeId = TechSchema::model()->find('title like :title', array(':title'=>$label))->id;
            Yii::app()->params['meta_title'] = $label;
            $title = $label;
            if(!empty($activeId)) {
                $result = $productList = array();
                $response = '';
                $cycleName = TechSchema::model()->findByPk($activeId)->title;
                $stages = TechSchemaStage::model()->findAll(array('order'=>'level', 'condition'=>'schema_id = :id', 'params'=>array(':id'=>$activeId)));
                foreach($stages as $stage) {
                    $result[$cycleName][$stage['id']] = TechStage::model()->findByPk($stage['stage_id'])->title;
                    $products = ProductTechSchema::model()->findAll('stage_id = :id', array(':id'=>$stage['id']));
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
                            );
                        }
                    } else $productList[$cycleName][$stage['id']][] = null;
                }

                if(!empty($result)) {
                    foreach($result as $key => $value){
                        $dividend = 4;
                        $rowCount = (int)(count($value)/$dividend);
                        if(count($value)%$dividend != 0) $rowCount++;
                        
                        $currentSchema = TechSchema::model()->find('title=:title', array(':title'=>$key));
                        $mainImglabel = $currentSchema->img;
                        $additionalImg = $currentSchema->additional;
                        $additionalUrl = $currentSchema->additional_url;
                        //if(!empty($mainImglabel)) $mainImglabel = '<img src="'.$mainImglabel.'" />';
                        //else $mainImglabel = $key;
                        if(empty($mainImglabel)) $mainImglabel = $key;
                            
                        /*if($rowCount == 1) {
                            $response .= '<div><table class="table-tech-stage-with-img" border="0" cellspacing="5" cellpadding="5"><tr>';  
                            $response .= '<td>Этапы заготовки</td>';
                            foreach($value as $v) {
                                $response .= '<td>'.$v.'</td>';
                            }
                            
                            $response .= '</tr><tr><td>'.$mainImglabel.'</td>';
                            foreach($productList[$key] as $id => $products) {
                                $label = TechSchemaStage::model()->findByPk($id)->img;
                                $response .= '<td><div class="product-list-wrapper">';
                                if(!empty($label)) $response .= '<img src="'.$label.'" alt="Нет изображения" />';
                                $response .= '<ul>';
                                foreach($products as $product) {
                                    if(!empty($product)) $response .= '<li><a href="'.$product['path'].'" target="_blank">'.$product['name'].'</a></li>';
                                }
                                $response .= '</ul></div></td>';
                            }

                            $response .= '</tr></table></div>';
                        } else {*/
                            $response .= '<div><table class="table-tech-stage-with-img" border="0" cellspacing="0" cellpadding="0">';
                            $response .= '<tr><td class="table-spasing" colspan="'.($dividend+1).'"></td></tr>';
                            $response .= '<tr>';  
                            $response .= '<td class="label main-label"><div>Этапы технологии</div></td>';
                            
                            $count = 0;
                            $temp = array();
                            foreach($value as $k=>$v) {
                                $temp[] = array('key' => $k, 'val' => $v);
                            }

                            foreach($temp as $v) {
                                if($count < $dividend) $response .= '<td class="label">'.$temp[$count]['val'].'</td>';
                                $count++;
                            }
                            $response .= '</tr>';
                            /*$response .= '<tr><td class="table-main-img" rowspan="'.($rowCount*3-1).'" style="background-image:url('.$mainImglabel.');">'.
                                '<div class="product-list-arrow">
                                   <img class="plarrow" src="/images/schema/arrow_main_label.png">
                                </div>' .
                            '</td>';*/
                            $response .= '<tr><td class="table-main-img" rowspan="'.($rowCount*3-1).'">'.
                                '<img width="112px" src="'.$mainImglabel.'" />'.
                                '<div class="product-list-arrow">
                                   <img class="plarrow" src="/images/schema/arrow_main_label.png">
                                </div>' .
                            '</td>';
                            $count = 0;
                            //first row
                            foreach($productList[$key] as $id => $products) {
                                if($count < $dividend) {
                                    $label = TechSchemaStage::model()->findByPk($id)->img;
                                    $response .= '<td>';
                                    $response .= '<div class="product-list-wrapper">';
                                    if(!empty($label)) $response .= '<img src="'.$label.'" alt="Нет изображения"/>';
                                    
                                    $response .= '<ul>';
                                    foreach($products as $product) {
                                        if(!empty($product)) $response .= '<li><a href="'.$product['path'].'" target="_blank">'.$product['name'].'</a></li>';
                                    }
                                    $response .= '</ul></div>';
                                    //if(($count + 1) != $dividend) $response .= '<div class="product-list-arrow"><img class="plarrow" src="/images/schema/small_arrow.png"/></div>';
                                    if((count($temp)-$i*$dividend-($count+1)) > 0) $response .= '<div class="product-list-arrow"><img class="plarrow" src="/images/schema/small_arrow.png"/></div>';
                                    $response .= '</td>';
                                }
                                $count++;
                            }

                            $response .= '</tr>';
                            $response .= '<tr><td class="table-spasing" colspan="'.$dividend.'"></td></tr>';
                            //other rows
                            for($i = 1; $i < $rowCount; $i++){
                                $keyInDiapazon = array();
                                for($c = $i*$dividend; $c < count($temp); $c++){
                                    if($c < ($i*$dividend + $dividend)) {
                                        $keyInDiapazon[] = $temp[$c]['key'];
                                    }
                                }
                               
                                $response .= '<tr>';
                                $count = 0;
                                foreach($temp as $k=>$v) {
                                    if(in_array($v['key'], $keyInDiapazon)) {
                                        $response .= '<td class="label">'.$v['val'].'</td>';
                                        $count++;
                                    }
                                }
                                if($count < $dividend) {
                                    $union = $dividend - $count;
                                    //$response .= '<td rowspan="'.($union*2).'" colspan="'.$union.'" class="tech-schema-middle"><div class="additional-info-wrapper"><img src="'.$additionalImg.'" alt="Нет изображения"/></div></td>';
                                    $bgcolor = (!empty($additionalUrl)) ? 'background-color: #d0d0d0;':'background-color: #ffffff;';
                                    $response .= '<td rowspan="2" colspan="'.$union.'" class="tech-schema-middle" style="'.$bgcolor.'"><div class="additional-info-wrapper">';
                                    if(!empty($additionalUrl))$response .= '<a title="Сопутствующие товары" target="_blank" href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/kormozagotovka/shpagat-setka-plenka/">';
                                    $response .= '<img src="'.$additionalImg.'" alt="Нет изображения"/>';
                                    if(!empty($additionalUrl))$response .= '</a>';
                                    $response .= '</div></td>';
                                }
                                
                                $response .= '</tr><tr>';
                                $count = 0;
                                
                                foreach($productList[$key] as $id => $products) {
                                    if(in_array($id, $keyInDiapazon)){
                                        $label = TechSchemaStage::model()->findByPk($id)->img;
                                        $response .= '<td><div class="product-list-wrapper">';
                                        if(!empty($label)) $response .= '<img src="'.$label.'" alt="Нет изображения"/>';
                                        //$response .= '<img src="/images/schema/empty.png" />';
                                        $response .= '<ul>';
                                        foreach($products as $product) {
                                            if(!empty($product)) $response .= '<li><a href="'.$product['path'].'" target="_blank">'.$product['name'].'</a></li>';
                                        }
                                        $response .= '</ul></div>';
                                        //if(($count+1) < count($keyInDiapazon)) $response .= '<div class="product-list-arrow"><img class="plarrow" src="/images/schema/small_arrow.png"/></div>';
                                        if((count($temp)-$i*$dividend-($count+1)) > 0) $response .= '<div class="product-list-arrow"><img class="plarrow" src="/images/schema/small_arrow.png"/></div>';
                                        
                                        $response .= '</td>';
                                        $count++;
                                    }
                                }

                                $response .= '</tr>';
                                if(($i+1) < $rowCount)$response .= '<tr><td class="table-spasing" colspan="'.$dividend.'"></td></tr>';
                            }
                            $response .= '<tr><td class="table-spasing" colspan="'.$dividend.'"></td></tr>';
                            $response .= '</table></div>';
                        //}
                    }
                }
            } 

            $this->render('index', array('data'=>$response, 'activeId'=>$activeId, 'url'=>$url, 'title'=>$title));
        } else {
            Yii::app()->params['meta_title'] = $title;
            $response = '<div class="one_banner">
                    <h3><a href="/selskohozyaystvennaya-tehnika/techtsikl/sort/tsikl-min-till/">Min-Till</a></h3>
                    <div class="m_image">
                        <img src="'.Yii::app()->getBaseUrl(true).'/images/schema/menu/min-till-big.png" alt="Изображение цикла">
                    </div>
                    <div class="m_title">
                    Зерновые сеялки с захватом до 6 м; 3-х корпусные навесные плуги; культиваторы и бороны; техника для возделывания овощей; навесные и прицепные разбрасыватели удобрений; прицепы; косилки и другие хиты продаж под тракторы 80 л.с.
                    </div>
                </div>
                <div class="one_banner">
                    <h3><a href="/selskohozyaystvennaya-tehnika/techtsikl/sort/tsikl-soloma/">Заготовка соломы</a></h3>
                    <div class="m_image">
                        <img src="'.Yii::app()->getBaseUrl(true).'/images/schema/menu/soloma-big.png" alt="Изображение цикла">
                    </div>
                    <div class="m_title">
                    Зерновые сеялки с захватом до 6 м; 3-х корпусные навесные плуги; культиваторы и бороны; техника для возделывания овощей; навесные и прицепные разбрасыватели удобрений; прицепы; косилки и другие хиты продаж под тракторы 80 л.с.
                    </div>
                </div>
                '
            ;
            
            $this->render('index', array('data'=>$response, 'url'=>$url, 'title'=>$title));
        }
    }
    
    public function actionSetUrl()
    {
        $model = TechSchema::model()->findByPk(63);
        $model->additional_url = 'http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/kormozagotovka/shpagat-setka-plenka/';
        $model->saveNode();
        $model = TechSchema::model()->findByPk(64);
        $model->additional_url = 'http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/kormozagotovka/shpagat-setka-plenka/';
        $model->saveNode();
        $model = TechSchema::model()->findByPk(65);
        $model->additional_url = 'http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/kormozagotovka/shpagat-setka-plenka/';
        $model->saveNode();
    }
    
    public function actionAddValues()
    {
        /*
        TechSchema::model()->deleteAll();
        TechStage::model()->deleteAll();
        TechSchemaStage::model()->deleteAll();
        
        $root1 = new TechSchema;
        $root1->title = 'Широкозахватные технологии';
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
        $root4 = new TechSchema;
        $root4->title = 'Классические технологии';
        $root4->color = '009bdf';
        $root4->saveNode();
        
        $subCategory1 = new TechSchema;
        $subCategory1->title='Заготовка сена';
        $subCategory1->img='/images/schema/hay/hay.jpg';
        $subCategory1->menu_img='/images/schema/menu/seno.png';
        $subCategory1->additional='/images/schema/additional/seno.png';
        $subCategory2 = new TechSchema;
        $subCategory2->title='Заготовка сенажа';
        $subCategory2->img='/images/schema/senaz/senaz.jpg';
        $subCategory2->menu_img='/images/schema/menu/senaz.png';
        $subCategory2->additional='/images/schema/additional/senaz.png';
        $subCategory3 = new TechSchema;
        $subCategory3->title='Заготовка силоса';
        $subCategory3->img='/images/schema/silos/silos.jpg';
        $subCategory3->menu_img='/images/schema/menu/silos.png';
        $subCategory3->additional='/images/schema/additional/silos.png';
        $subCategory4 = new TechSchema;
        $subCategory4->title='Заготовка соломы';
        $subCategory4->img='/images/schema/soloma/soloma.jpg';
        $subCategory4->menu_img='/images/schema/menu/soloma.png';
        $subCategory4->additional='/images/schema/additional/soloma.png';
        //$root = TechSchema::model()->findByPk(1);
        $subCategory2->appendTo($root2);
        $subCategory1->insertAfter($subCategory2);
        $subCategory4->insertAfter($subCategory1);
        $subCategory3->insertAfter($subCategory4);
 
        $subCategory5 = new TechSchema;
        $subCategory5->title='Возделывание картофеля';
        $subCategory5->img='/images/schema/potato/potato.jpg';
        $subCategory5->menu_img='/images/schema/menu/potato.png';
        $subCategory5->additional='/images/schema/additional/potato.png';
        $subCategory6 = new TechSchema;
        $subCategory6->title='Возделывание лука';
        $subCategory6->img='/images/schema/luk/luk.jpg';
        $subCategory6->menu_img='/images/schema/menu/luk.png';
        $subCategory6->additional='/images/schema/additional/luk.png';
        //$root = TechSchema::model()->findByPk(2);
        $subCategory6->appendTo($root3);
        $subCategory5->insertAfter($subCategory6);
        
        $subCategory7 = new TechSchema;
        $subCategory7->title='Классическая технология';
        $subCategory7->img='/images/schema/classic-technology/classic-technology.jpg';
        $subCategory7->menu_img='/images/schema/menu/classic.png';
        $subCategory7->additional='/images/schema/additional/classic.png';
        $subCategory8 = new TechSchema;
        $subCategory8->title='Min-Till';
        $subCategory8->img='/images/schema/min-till/min-till.jpg';
        $subCategory8->menu_img='/images/schema/menu/min-till.png';
        $subCategory8->additional='/images/schema/additional/mintill.png';
        $subCategory9 = new TechSchema;
        $subCategory9->title='No-Till';
        $subCategory9->img='/images/schema/no-till/no-till.jpg';
        $subCategory9->menu_img='/images/schema/menu/no-till.png';
        $subCategory9->additional='/images/schema/additional/no-till.png';
        $subCategory10 = new TechSchema;
        $subCategory10->title='Vertical-Till';
        $subCategory10->img='/images/schema/vertical-till/vertical-till.jpg';
        $subCategory10->menu_img='/images/schema/menu/vertical.png';
        $subCategory10->additional='/images/schema/additional/vertical.png';
        
        //$root = TechSchema::model()->findByPk(3);
        $subCategory8->appendTo($root1);
        $subCategory9->insertAfter($subCategory8);
        $subCategory10->insertAfter($subCategory9);
        $subCategory7->insertAfter($subCategory10);
        
        $subCategory11 = new TechSchema;
        $subCategory11->title='Озимые';
        $subCategory11->img='/images/schema/ozimie/ozimie.jpg';
        $subCategory11->menu_img='/images/schema/menu/ozimie.png';
        $subCategory11->additional='/images/schema/additional/ozimie.png';
        $subCategory12 = new TechSchema;
        $subCategory12->title='Яровые';
        $subCategory12->img='/images/schema/yarovie/yarovie.jpg';
        $subCategory12->menu_img='/images/schema/menu/yarovie.png';
        $subCategory12->additional='/images/schema/additional/yarovie.png';
        //$root = TechSchema::model()->findByPk(2);
        $subCategory11->appendTo($root4);
        $subCategory12->insertAfter($subCategory11);

        ////////////////////////
        
        // Не менять
        $stage1 = new TechStage();
        $stage1->title = 'Скашивание';
        $stage1->save();
        $stage2 = new TechStage();
        $stage2->title = 'Ворошение';
        $stage2->save();
        $stage3 = new TechStage();
        $stage3->title = 'Сгребание';
        $stage3->save();
        $stage4 = new TechStage();
        $stage4->title = 'Подбор массы/прессование';
        $stage4->save();
        $stage5 = new TechStage();
        $stage5->title = 'Упаковка в пленку';
        $stage5->save();
        $stage6 = new TechStage();
        $stage6->title = 'Транспортировка';
        $stage6->save();
        $stage7 = new TechStage();
        $stage7->title = 'Разгрузка/укладка';
        $stage7->save();
        $stage8 = new TechStage();
        $stage8->title = 'Лущение стерни';
        $stage8->save();
        $stage9 = new TechStage();
        $stage9->title = 'Внесение минеральных удобрений';
        $stage9->save();
        $stage10 = new TechStage();
        $stage10->title = 'Внесение органики';
        $stage10->save();
        $stage11 = new TechStage();
        $stage11->title = 'Вспашка';
        $stage11->save();
        $stage12 = new TechStage();
        $stage12->title = 'Культивация';
        $stage12->save();
        $stage13 = new TechStage();
        $stage13->title = 'Внесение азотных удобрений';
        $stage13->save();
        $stage14 = new TechStage();
        $stage14->title = 'Фрезерование';
        $stage14->save();
        $stage15 = new TechStage();
        $stage15->title = 'Посадка';
        $stage15->save();
        $stage16 = new TechStage();
        $stage16->title = 'Нарезка гребней';
        $stage16->save();
        $stage17 = new TechStage();
        $stage17->title = 'Внесение гербицидов и хим.защита';
        $stage17->save();
        $stage18 = new TechStage();
        $stage18->title = 'Окучивание';
        $stage18->save();
        $stage19 = new TechStage();
        $stage19->title = 'Полив';
        $stage19->save();
        $stage20 = new TechStage();
        $stage20->title = 'Удаление ботвы';
        $stage20->save();
        $stage21 = new TechStage();
        $stage21->title = 'Уборка';
        $stage21->save();
        $stage22 = new TechStage();
        $stage22->title = 'Очистка и обрезка лука';
        $stage22->save();
        $stage23 = new TechStage();
        $stage23->title = 'Перевозка';
        $stage23->save();
        $stage24 = new TechStage();
        $stage24->title = 'Сортировка';
        $stage24->save();
        $stage25 = new TechStage();
        $stage25->title = 'Мойка';
        $stage25->save();
        $stage26 = new TechStage();
        $stage26->title = 'Расфасовка';
        $stage26->save();
        $stage27 = new TechStage();
        $stage27->title = 'Хранение';
        $stage27->save();
        $stage28 = new TechStage();
        $stage28->title = 'Обработка стерни, рыхление и выравнивание почвы';
        //$stage->title = 'Обработка стерни, рыхление переуплотненных слоев почвы, выравнивание';
        $stage28->save();
        $stage29 = new TechStage();
        $stage29->title = 'Распределение соломы и пожнивных остатков';
        //$stage->title = 'Мульчирование/распределение соломы и пожнивных остатков';
        $stage29->save();
        $stage30 = new TechStage();
        $stage30->title = 'Ранневесеннее боронование';
        $stage30->save();
        $stage31 = new TechStage();
        $stage31->title = 'Посев';
        $stage31->save();
        $stage32 = new TechStage();
        //$stage->title = 'Внесение гербицидов/инсектицидов/фунгицидов';
        $stage32->title = 'Внесение пестицидов';
        $stage32->save();
        $stage33 = new TechStage();
        $stage33->title = 'Рыхление подошвы и переуплотнений (3-5 лет)';
        $stage33->save();
        $stage34 = new TechStage();
        $stage34->title = 'Глубокорыхление';
        $stage34->save();
        $stage35 = new TechStage();
        $stage35->title = 'Весенняя культивация';
        $stage35->save();
        $stage36 = new TechStage();
        $stage36->title = 'Прикатывание';
        $stage36->save();
        $stage37 = new TechStage();
        $stage37->title = 'Внесение гербицидов';
        $stage37->save();
        
        /////////////////////////////////////////
        
        // солома
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory4->id; //7
        $stage->stage_id = $stage1->id;
        $stage->level = 1;
        $stage->img = '/images/schema/soloma/soloma1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory4->id; //7
        $stage->stage_id = $stage3->id;//3;
        $stage->level = 2;
        $stage->img = '/images/schema/soloma/soloma2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory4->id; //7
        $stage->stage_id = $stage4->id;//4;
        $stage->level = 3;
        $stage->img = '/images/schema/soloma/soloma3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory4->id; //7
        $stage->stage_id = $stage6->id;//6;
        $stage->level = 4;
        $stage->img = '/images/schema/soloma/soloma4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory4->id; //7
        $stage->stage_id = $stage7->id;//7;
        $stage->level = 5;
        $stage->img = '/images/schema/soloma/soloma5.jpg';
        $stage->save();
        
        // сено
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory1->id; //4;
        $stage->stage_id = $stage1->id;//1;
        $stage->level = 1;
        $stage->img = '/images/schema/hay/hay-skashivanie.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory1->id; //4;
        $stage->stage_id = $stage2->id;//2;
        $stage->level = 2;
        $stage->img = '/images/schema/hay/hay-voroshenie.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory1->id; //4;
        $stage->stage_id = $stage3->id;//3;
        $stage->level = 3;
        $stage->img = '/images/schema/hay/hay-sgrebanie.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory1->id; //4;
        $stage->stage_id = $stage4->id;//4;
        $stage->level = 4;
        $stage->img = '/images/schema/hay/hay-podbor.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory1->id; //4;
        $stage->stage_id = $stage6->id;//6;
        $stage->level = 5;
        $stage->img = '/images/schema/hay/hay-transportirovka.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory1->id; //4;
        $stage->stage_id = $stage7->id;//7;
        $stage->level = 6;
        $stage->img = '/images/schema/hay/hay-razgruzka.jpg';
        $stage->save();
        
        // сенаж
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory2->id; //5;
        $stage->stage_id = $stage1->id;//1;
        $stage->level = 1;
        $stage->img = '/images/schema/senaz/senaz1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory2->id; //5;
        $stage->stage_id = $stage3->id;//3;
        $stage->level = 2;
        $stage->img = '/images/schema/senaz/senaz2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory2->id; //5;
        $stage->stage_id = $stage4->id;//4;
        $stage->level = 3;
        $stage->img = '/images/schema/senaz/senaz3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory2->id; //5;
        $stage->stage_id = $stage5->id;//5;
        $stage->level = 4;
        $stage->img = '/images/schema/senaz/senaz5.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory2->id; //5;
        $stage->stage_id = $stage6->id;//6;
        $stage->level = 5;
        $stage->img = '/images/schema/senaz/senaz7.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory2->id; //5;
        $stage->stage_id = $stage7->id;//7;
        $stage->level = 6;
        $stage->img = '/images/schema/senaz/senaz9.jpg';
        $stage->save();
        
        // силос
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory3->id; //6;
        $stage->stage_id = $stage1->id;//1;
        $stage->level = 1;
        $stage->img = '/images/schema/silos/silos1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory3->id; //6;
        $stage->stage_id = $stage3->id;//3;
        $stage->level = 2;
        $stage->img = '/images/schema/silos/silos1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory3->id;//6;
        $stage->stage_id = $stage4->id;//4;
        $stage->level = 3;
        $stage->img = '/images/schema/silos/silos2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory3->id;//6;
        $stage->stage_id = $stage5->id;//5;
        $stage->level = 4;
        $stage->img = '/images/schema/silos/silos3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory3->id;//6;
        $stage->stage_id = $stage6->id;//6;
        $stage->level = 5;
        $stage->img = '/images/schema/silos/silos4.jpg';
        $stage->save();
        
        // картофель
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage8->id;//8;
        $stage->level = 1;
        $stage->img = '/images/schema/potato/potato1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage9->id;//9;
        $stage->level = 2;
        $stage->img = '/images/schema/potato/potato2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage10->id;//10;
        $stage->level = 3;
        $stage->img = '/images/schema/potato/potato3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage11->id;//11;
        $stage->level = 4;
        $stage->img = '/images/schema/potato/potato4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage12->id;//12;
        $stage->level = 5;
        $stage->img = '/images/schema/potato/potato5.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage13->id;//13;
        $stage->level = 6;
        $stage->img = '/images/schema/potato/potato6.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage14->id;//14;
        $stage->level = 7;
        $stage->img = '/images/schema/potato/potato7.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage15->id;//15;
        $stage->level = 8;
        $stage->img = '/images/schema/potato/potato8.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage16->id;//16;
        $stage->level = 9;
        $stage->img = '/images/schema/potato/potato9.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage17->id;//17;
        $stage->level = 10;
        $stage->img = '/images/schema/potato/potato10.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage18->id;//18;
        $stage->level = 11;
        $stage->img = '/images/schema/potato/potato11.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage19->id;//19;
        $stage->level = 12;
        $stage->img = '/images/schema/potato/potato12.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage20->id;//20;
        $stage->level = 13;
        $stage->img = '/images/schema/potato/potato13.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage21->id;//21;
        $stage->level = 14;
        $stage->img = '/images/schema/potato/potato14.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage23->id;//23;
        $stage->level = 15;
        $stage->img = '/images/schema/potato/potato15.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage24->id;//24;
        $stage->level = 16;
        $stage->img = '/images/schema/potato/potato16.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage25->id;//25;
        $stage->level = 17;
        $stage->img = '/images/schema/potato/potato17.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage26->id;//26;
        $stage->level = 18;
        $stage->img = '/images/schema/potato/potato18.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory5->id; //8;
        $stage->stage_id = $stage27->id;//27;
        $stage->level = 19;
        $stage->img = '/images/schema/potato/potato19.jpg';
        $stage->save();
        
        // лук
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage8->id;//8;
        $stage->level = 1;
        $stage->img = '/images/schema/luk/luk1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage9->id;//9;
        $stage->level = 2;
        $stage->img = '/images/schema/luk/luk2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage10->id;//10;
        $stage->level = 3;
        $stage->img = '/images/schema/luk/luk3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage11->id;//11;
        $stage->level = 4;
        $stage->img = '/images/schema/luk/luk4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage12->id;//12;
        $stage->level = 5;
        $stage->img = '/images/schema/luk/luk5.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage13->id;//13;
        $stage->level = 6;
        $stage->img = '/images/schema/luk/luk6.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage14->id;//14;
        $stage->level = 7;
        $stage->img = '/images/schema/luk/luk7.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage16->id;//16;
        $stage->level = 8;
        $stage->img = '/images/schema/luk/luk8.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage15->id;//15;
        $stage->level = 9;
        $stage->img = '/images/schema/luk/luk9.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage17->id;//17;
        $stage->level = 10;
        $stage->img = '/images/schema/luk/luk10.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage19->id;//19;
        $stage->level = 11;
        $stage->img = '/images/schema/luk/luk11.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage20->id;//20;
        $stage->level = 12;
        $stage->img = '/images/schema/luk/luk12.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage21->id;//21;
        $stage->level = 13;
        $stage->img = '/images/schema/luk/luk13.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage22->id;//22;
        $stage->level = 14;
        $stage->img = '/images/schema/luk/luk14.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage23->id;//23;
        $stage->level = 15;
        $stage->img = '/images/schema/luk/luk15.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage24->id;//24;
        $stage->level = 16;
        $stage->img = '/images/schema/luk/luk16.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage25->id;//25;
        $stage->level = 17;
        $stage->img = '/images/schema/luk/luk17.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage26->id;//26;
        $stage->level = 18;
        $stage->img = '/images/schema/luk/luk18.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory6->id; //9;
        $stage->stage_id = $stage27->id;//27;
        $stage->level = 19;
        $stage->img = '/images/schema/luk/luk19.jpg';
        $stage->save();
        
        // Классическая технология
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory7->id; //10;
        $stage->stage_id = $stage28->id;//28;
        $stage->level = 1;
        $stage->img = '/images/schema/classic-technology/classic-technology1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory7->id; //10;
        $stage->stage_id = $stage29->id;//29;
        $stage->level = 2;
        $stage->img = '/images/schema/classic-technology/classic-technology2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory7->id; //10;
        $stage->stage_id = $stage9->id; //9
        $stage->level = 3;
        $stage->img = '/images/schema/classic-technology/classic-technology3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory7->id; //10;
        $stage->stage_id = $stage30->id;//31;
        $stage->level = 4;
        $stage->img = '/images/schema/classic-technology/classic-technology4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory7->id; //10;
        $stage->stage_id = $stage31->id;//32;
        $stage->level = 5;
        $stage->img = '/images/schema/classic-technology/classic-technology5.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory7->id; //10;
        $stage->stage_id = $stage32->id;//33;
        $stage->level = 6;
        $stage->img = '/images/schema/classic-technology/classic-technology6.jpg';
        $stage->save();
        
        // Min-Till
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory8->id; //11;
        $stage->stage_id = $stage28->id;//28;
        $stage->level = 1;
        $stage->img = '/images/schema/min-till/min-till1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory8->id; //11;
        $stage->stage_id = $stage29->id;//29;
        $stage->level = 2;
        $stage->img = '/images/schema/min-till/min-till2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory8->id; //11;
        $stage->stage_id = $stage9->id;//9
        $stage->level = 3;
        $stage->img = '/images/schema/min-till/min-till3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory8->id; //11;
        $stage->stage_id = $stage30->id;//31;
        $stage->level = 4;
        $stage->img = '/images/schema/min-till/min-till4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory8->id; //11;
        $stage->stage_id = $stage31->id;//32;
        $stage->level = 5;
        $stage->img = '/images/schema/min-till/min-till5.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory8->id; //11;
        $stage->stage_id = $stage32->id;//33;
        $stage->level = 6;
        $stage->img = '/images/schema/min-till/min-till6.jpg';
        $stage->save();
        
        TechSchemaStage::model()->deleteAll('schema_id=:id', array('id'=>13));
        
        // Vertical-Till
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory10->id; //13;
        $stage->stage_id = $stage33->id;//34;
        $stage->level = 1;
        $stage->img = '/images/schema/vertical-till/vertical-till1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory10->id; //13;
        $stage->stage_id = $stage28->id;//28;
        $stage->level = 2;
        $stage->img = '/images/schema/vertical-till/vertical-till2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory10->id; //13;
        $stage->stage_id = $stage29->id;//29;
        $stage->level = 3;
        $stage->img = '/images/schema/vertical-till/vertical-till3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory10->id; //13;
        $stage->stage_id = $stage30->id;//31;
        $stage->level = 4;
        $stage->img = '/images/schema/vertical-till/vertical-till4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory10->id; //13;
        $stage->stage_id = $stage31->id;//32;
        $stage->level = 5;
        $stage->img = '/images/schema/vertical-till/vertical-till5.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory10->id; //13;
        $stage->stage_id = $stage32->id;//33;
        $stage->level = 6;
        $stage->img = '/images/schema/vertical-till/vertical-till6.jpg';
        $stage->save();
        
        // No-Till
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory9->id; //12;
        $stage->stage_id = $stage33->id;//34;
        $stage->level = 1;
        $stage->img = '/images/schema/no-till/no-till1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory9->id; //12;
        $stage->stage_id = $stage29->id;//29;
        $stage->level = 2;
        $stage->img = '/images/schema/no-till/no-till2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory9->id; //12;
        $stage->stage_id = $stage30->id;//31;
        $stage->level = 3;
        $stage->img = '/images/schema/no-till/no-till3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory9->id; //12;
        $stage->stage_id = $stage31->id;//32;
        $stage->level = 4;
        $stage->img = '/images/schema/no-till/no-till4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory9->id; //12;
        $stage->stage_id = $stage32->id;//33;
        $stage->level = 5;
        $stage->img = '/images/schema/no-till/no-till5.jpg';
        $stage->save();
        
        // Озимые
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory11->id;
        $stage->stage_id = $stage34->id;
        $stage->level = 1;
        $stage->img = '/images/schema/ozimie/ozimie1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory11->id;
        $stage->stage_id = $stage8->id;
        $stage->level = 2;
        $stage->img = '/images/schema/ozimie/ozimie2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory11->id;
        $stage->stage_id = $stage10->id;
        $stage->level = 3;
        $stage->img = '/images/schema/ozimie/ozimie3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory11->id;
        $stage->stage_id = $stage11->id;
        $stage->level = 4;
        $stage->img = '/images/schema/ozimie/ozimie4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory11->id;
        $stage->stage_id = $stage9->id;
        $stage->level = 5;
        $stage->img = '/images/schema/ozimie/ozimie5.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory11->id;
        $stage->stage_id = $stage12->id;
        $stage->level = 6;
        $stage->img = '/images/schema/ozimie/ozimie6.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory11->id;
        $stage->stage_id = $stage14->id;
        $stage->level = 7;
        $stage->img = '/images/schema/ozimie/ozimie7.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory11->id;
        $stage->stage_id = $stage36->id;
        $stage->level = 8;
        $stage->img = '/images/schema/ozimie/ozimie8.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory11->id;
        $stage->stage_id = $stage31->id;
        $stage->level = 9;
        $stage->img = '/images/schema/ozimie/ozimie9.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory11->id;
        $stage->stage_id = $stage30->id;
        $stage->level = 10;
        $stage->img = '/images/schema/ozimie/ozimie10.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory11->id;
        $stage->stage_id = $stage37->id;
        $stage->level = 11;
        $stage->img = '/images/schema/ozimie/ozimie11.jpg';
        $stage->save();
        
        // Яровые
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory12->id;
        $stage->stage_id = $stage34->id;
        $stage->level = 1;
        $stage->img = '/images/schema/yarovie/yarovie1.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory12->id;
        $stage->stage_id = $stage8->id;
        $stage->level = 2;
        $stage->img = '/images/schema/yarovie/yarovie2.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory12->id;
        $stage->stage_id = $stage10->id;
        $stage->level = 3;
        $stage->img = '/images/schema/yarovie/yarovie3.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory12->id;
        $stage->stage_id = $stage11->id;
        $stage->level = 4;
        $stage->img = '/images/schema/yarovie/yarovie4.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory12->id;
        $stage->stage_id = $stage9->id;
        $stage->level = 5;
        $stage->img = '/images/schema/yarovie/yarovie5.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory12->id;
        $stage->stage_id = $stage12->id;
        $stage->level = 6;
        $stage->img = '/images/schema/yarovie/yarovie6.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory12->id;
        $stage->stage_id = $stage9->id;
        $stage->level = 7;
        $stage->img = '/images/schema/yarovie/yarovie7.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory12->id;
        $stage->stage_id = $stage35->id;
        $stage->level = 8;
        $stage->img = '/images/schema/yarovie/yarovie8.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory12->id;
        $stage->stage_id = $stage36->id;
        $stage->level = 9;
        $stage->img = '/images/schema/yarovie/yarovie9.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory12->id;
        $stage->stage_id = $stage31->id;
        $stage->level = 10;
        $stage->img = '/images/schema/yarovie/yarovie10.jpg';
        $stage->save();
        $stage = new TechSchemaStage();
        $stage->schema_id = $subCategory12->id;
        $stage->stage_id = $stage37->id;
        $stage->level = 11;
        $stage->img = '/images/schema/yarovie/yarovie11.jpg';
        $stage->save();
        */
        ////////////////////////////////////////////////////
        /*
        //Не меняется
        //Мощность - маленькие иконки
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
        $model->saveNode();
         */
        //////////////////////////////////////////
    }
}