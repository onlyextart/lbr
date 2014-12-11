<?php
class MightinessController extends Controller
{
    public function actionIndex($sort = null)
    {//var_dump($sort);exit;
        if(empty($sort)){
            $title = 'По мощности трактора';
            $response = '<div class="one_banner">
                    <h3><a href="/selskohozyaystvennaya-tehnika/mightiness/mashiny-dlya-traktora-80-ls/">для тракторов 80 л.с.</a></h3>
                    <div class="m_image">
                        <img src="'.Yii::app()->getBaseUrl(true).'/images/products/323/35_1345813558lbr-UNIA-plug-IBIS-55.jpg" alt="Изображение товара">
                    </div>
                    <div class="m_title">
                    Зерновые сеялки с захватом до 6 м; 3-х корпусные навесные плуги; культиваторы и бороны; техника для возделывания овощей; навесные и прицепные разбрасыватели удобрений; прицепы; косилки и другие хиты продаж под тракторы 80 л.с.
                    </div>
                </div>
                <div class="one_banner">
                    <h3><a href="/selskohozyaystvennaya-tehnika/mightiness/mashiny-dlya-traktora-120-ls/">для тракторов 120 л.с.</a></h3>
                    <div class="m_image">
                        <img src="'.Yii::app()->getBaseUrl(true).'/images/products/338/64_1324902156LBR_Kos00.jpg" alt="Изображение товара">
                    </div>
                    <div class="m_title">
                    Зерновые сеялки; посевные комплексы; 4-х корпусные навесные плуги; культиваторы и бороны; глубокорыхлители; прицепные разбрасыватели удобрений; прицепы и другие хиты продаж под тракторы 120 л.с.
                    </div>
                </div>
                <div class="one_banner">
                    <h3><a href="/selskohozyaystvennaya-tehnika/mightiness/mashiny-dlya-traktora-150-ls/">для тракторов 150 л.с.</a></h3>
                    <div class="m_image">
                        <img src="'.Yii::app()->getBaseUrl(true).'/images/products/341/kret-plow-00.jpg" alt="Изображение товара">
                    </div>
                    <div class="m_title">
                    Широкозахватные сеялки до 9 метров захвата, 5-ти корпусные навесные плуги; культиваторы и бороны; глубокорыхлители; разбрасыватели органики и другие хиты продаж под тракторы 150 л.с.
                    </div>
                </div>
                <div class="one_banner">
                    <h3><a href="/selskohozyaystvennaya-tehnika/mightiness/mashiny-dlya-traktora-180-230-ls/">для тракторов 180 - 230 л.с.</a></h3>
                    <div class="m_image">
                        <img src="'.Yii::app()->getBaseUrl(true).'/images/products/324/36_1324367139Unia Vis XL 00.jpg" alt="Изображение товара">
                    </div>
                    <div class="m_title">
                    Широкозахватные сеялки до 15 метров захвата, 6-ти корпусные полунавесные плуги, стерневые культиваторы и глубокорыхлители, прицепы и другие хиты продаж под тракторы 180-230 л.с.
                    </div>
                </div>
                <div class="one_banner">
                    <h3><a href="/selskohozyaystvennaya-tehnika/mightiness/mashiny-dlya-traktora-250-350-ls/">для тракторов 250 - 350 л.с.</a></h3>
                    <div class="m_image">
                        <img src="'.Yii::app()->getBaseUrl(true).'/images/products/322/42_1324369833Hektor00.jpg" alt="Изображение товара">
                    </div>
                    <div class="m_title">
                    Пневматические широкозахватные сеялки, тяжелые бороны, 8-ми корпусные полунавесные плуги и другие хиты продаж под тракторы 250-350 л.с.
                    </div>
                </div>
                <div class="one_banner">
                    <h3><a href="/selskohozyaystvennaya-tehnika/mightiness/mashiny-dlya-traktora-svyshe-350-ls/">для тракторов свыше 350 л.с.</a></h3>
                    <div class="m_image">
                        <img src="'.Yii::app()->getBaseUrl(true).'/images/products/307/50_1324371222LBR_superharrows_Summers00.jpg" alt="Изображение товара">
                    </div>
                    <div class="m_title">
                    Пневматические широкозахватные сеялки, тяжелые бороны, глубокорыхлители, 8-ти корпусные полунавесные плуги и другие хиты продаж для тракторов свыше 350 л.с.
                    </div>
                </div>'
            ;
        } else {
            $active = $from = 350;
            $to = 1000;
            $title = 'Машины для трактора мощностью свыше 350 л.с.';
            $labelInterval = 'Лучшие машины для трактора свыше 350 л.с.';
            
            if ($sort == 'mashiny-dlya-traktora-80-ls'){
                $active = $from = 80;
                $to = 120;
                $title = 'Машины для трактора мощностью 80 л.с.';
                $labelInterval = 'Лучшие машины для трактора 80 л.с.';
            } else if($sort == 'mashiny-dlya-traktora-120-ls'){
                $active = $from = 120;
                $to = 150;
                $title = 'Машины для трактора мощностью 120 л.с.';
                $labelInterval = 'Лучшие машины для трактора 120 л.с.';
            } else if($sort == 'mashiny-dlya-traktora-150-ls'){
                $active = $from = 150;
                $to = 180;
                $title = 'Машины для трактора мощностью 150 л.с.';
                $labelInterval = 'Лучшие машины для трактора 150 л.с.';
            } else if($sort == 'mashiny-dlya-traktora-180-230-ls'){
                $active = $from = 180;
                $to = 230;
                $title = 'Машины для трактора мощностью 180-230 л.с.';
                $labelInterval = 'Лучшие машины для трактора 180 - 230 л.с.';
            } else if($sort == 'mashiny-dlya-traktora-250-350-ls'){
                $active = $from = 250;
                $to = 350;
                $title = 'Машины для трактора мощностью 250-350 л.с.';
                $labelInterval = 'Лучшие машины для трактора 250 - 350 л.с.';
            } else if($sort == 'mashiny-dlya-traktora-svyshe-350-ls'){
                $active = $from = 350;
                $to = 1000;
                $title = 'Машины для трактора мощностью свыше 350 л.с.';
                $labelInterval = 'Лучшие машины для трактора свыше 350 л.с.';       
            }
            
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
                                            $productRangeValue = ProductRangeValue::model()->find(array('condition'=>'tech_id=:id and range_id=:range_id and val_int >= :from and val_int < :to', 'params'=>array(':from'=>$from, ':to'=>$to, ':id'=>$productTechChar->id, ':range_id'=>$rangeItem->id)));

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
            if(!empty($result)) {
                $existsFrontTraktPogr = array();
                // set 'Фронтальные тракторные погрузчики' last in array
                if(array_key_exists('Фронтальные тракторные погрузчики', $result)){
                    $existsFrontTraktPogr = $result['Фронтальные тракторные погрузчики'];
                    unset($result['Фронтальные тракторные погрузчики']);
                }
                foreach($result as $key => $value) {
                    if(!empty($result[$key])){
                        $colorCssClass='menu_color_group_'.$groupInfo[$key]['color'];
                        $response .=  '<div class="mightiness-menu-label '.$colorCssClass.'" style="background-image: url('.Yii::app()->getBaseUrl(true).$groupInfo[$key]['img'].')"><span>'.mb_strtoupper($key, 'UTF-8').'</span><span class="labelInterval">'.$labelInterval.'</span></div>';
                        foreach($value as $product) {
                            $productPath = $product['path'];
                            if(substr($productPath, -1) != '/') $productPath = $productPath.'/';
                            $label = '<a href='.$productPath.'><h3>'.$product['parentName'].'</h3></a>';
                            if(trim($product['parentName']) != trim($product['name'])) $label .= '<a href='.$productPath.'>(модель '.$product['name'].')</a>';
                            $description = (!empty($product['description'])) ? $product['description'] : 'Нет описания';
                            $response .=  '<div class="mresults">';
                            $response .=  '<div class="m_header">'.$label.'</div>';
                            $response .=  '<div class="m_image"><img alt="Изображение товара" src="'.Yii::app()->getBaseUrl(true).$product['img'].'"/></div>';
                            $response .=  '<div class="m_caption"><p>'.$description.'</p></div>';
                            $response .=  '</div>';
                        }

                        $response .=  '<div style="clear: both"></div>';
                    }
                }
                if(!empty($existsFrontTraktPogr)){
                    $key = 'Фронтальные тракторные погрузчики';
                    $colorCssClass='menu_color_group_'.$groupInfo[$key]['color'];
                    $response .=  '<div class="mightiness-menu-label '.$colorCssClass.'" style="background-image: url('.Yii::app()->getBaseUrl(true).$groupInfo[$key]['img'].')"><span>'.mb_strtoupper($key, 'UTF-8').'</span><span class="labelInterval">'.$labelInterval.'</span></div>';
                    foreach($existsFrontTraktPogr as $product) {
                        $productPath = $product['path'];
                        if(substr($productPath, -1) != '/') $productPath = $productPath.'/';
                        $label = '<a href='.$productPath.'><h3>'.$product['parentName'].'</h3></a>';
                        if($product['parentName'] != $product['name']) $label .= '<a href='.$productPath.'>(модель '.$product['name'].')</a>';
                        $description = (!empty($product['description'])) ? $product['description'] : 'Нет описания';
                        $response .=  '<div class="mresults">';
                        $response .=  '<div class="m_header">'.$label.'</div>';
                        $response .=  '<div class="m_image"><img alt="Изображение товара" src="'.Yii::app()->getBaseUrl(true).$product['img'].'"/></div>';
                        $response .=  '<div class="m_caption"><p>'.$description.'</p></div>';
                        $response .=  '</div>';
                    }

                    $response .=  '<div style="clear: both"></div>';
                }
            } else $response =  '<span class="m_no_res">Нет товаров с выбранной мощностью</span>';
        }
        Yii::app()->params['meta_title'] = $title.' - продажа в ЛБР-Агромаркет';
        Yii::app()->params['meta_description'] = $title.' ➢Всегда в наличии ➢Умеренные цены ➢Сервис. ☎ в Вашем регионе!';
        $this->render('index', array('data'=>$response, 'active'=>$active, 'title'=>$title));
    }

    public function actionAddValues()
    {
        ////////////////////////////////////////////////////
        /*
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