<?php
class TechschemaController extends Controller
{
    public function actionIndex()
    {
        $id = $_POST['schemaId'];
        if(!empty($id)) {
            $result = $productList = array();
            $response = '';
            $cycleName = TechSchema::model()->findByPk($id)->title;
            $stages = TechSchemaStage::model()->findAll(array('order'=>'level', 'condition'=>'schema_id = :id', 'params'=>array(':id'=>$id)));
            foreach($stages as $stage) {
                $result[$cycleName][$stage['id']] = TechStage::model()->findByPk($stage['stage_id'])->title;
                $products = ProductTechSchema::model()->findAll('stage_id = :id', array(':id'=>$stage['id']));
                if(!empty($products)) {
                    foreach($products as $product){
                        $item_id = MenuItemsContent::model()->find('page_id=:id', array(':id'=>$product['product_id']))->item_id;
                        $href = MenuItems::model()->findByPk($item_id)->path;
                        $productList[$cycleName][$stage['id']][] = array(
                            'name' => Products::model()->findByPk($product['product_id'])->name,
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
                    $mainImglabel = TechSchema::model()->find('title=:title', array(':title'=>$key))->img;
                    if(!empty($mainImglabel)) $mainImglabel = '<img src="'.$mainImglabel.'" />';
                    else $mainImglabel = $key;

                    if($rowCount == 1) {
                        $response .= '<div><table class="table-tech-stage-with-img" border="0" cellspacing="5" cellpadding="5"><tr>';  
                        $response .= '<td>Этапы заготовки</td>';
                        foreach($value as $v) {
                            $response .= '<td>'.$v.'</td>';
                        }

                        $response .= '</tr><tr><td>'.$mainImglabel.'</td>';
                        foreach($productList[$key] as $id => $products) {
                            $label = TechSchemaStage::model()->findByPk($id)->img;
                            $response .= '<td><div class="product-list-wrapper">';
                            if(!empty($label)) $response .= '<img src="'.$label.'" />';
                            $response .= '<ul>';
                            foreach($products as $product) {
                                if(!empty($product)) $response .= '<li><a href="'.$product['path'].'" target="_blank">'.$product['name'].'</a></li>';
                            }
                            $response .= '</ul></div></td>';
                        }

                        $response .= '</tr></table></div>';
                    } else {
                        $response .= '<div><table class="table-tech-stage-with-img" border="0" cellspacing="5" cellpadding="5">';
                        $response .= '<tr>';  
                        $response .= '<td class="label">Этапы технологии</td>';
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
                        $response .= '<tr><td>'.$mainImglabel.'</td>';
                        $count = 0;
                        //first row
                        foreach($productList[$key] as $id => $products) {
                            if($count < $dividend) {
                                $label = TechSchemaStage::model()->findByPk($id)->img;
                                $response .= '<td>';
                                $response .= '<div class="product-list-wrapper">';
                                if(!empty($label)) $response .= '<img src="'.$label.'" />';
                                $response .= '<ul>';
                                foreach($products as $product) {
                                    if(!empty($product)) $response .= '<li><a href="'.$product['path'].'" target="_blank">'.$product['name'].'</a></li>';
                                }
                                $response .= '</ul></div>';
                                if(($count + 1) != $dividend) $response .= '<div class="product-list-arrow"><img class="plarrow" src="/images/schema/small_arrow.png"/></div>';
                                $response .= '</td>';
                            }
                            $count++;
                        }

                        $response .= '</tr>';
                        //other rows
                        for($i = 1; $i < $rowCount; $i++){
                            $keyInDiapazon = array();
                            for($c = $i*$dividend; $c < count($temp); $c++){
                                if($c < ($i*$dividend + $dividend)) {
                                    $keyInDiapazon[] = $temp[$c]['key'];
                                }
                            }
                            $response .= '<tr><td class="label label-empty"></td>';
                            foreach($temp as $k=>$v) {
                                if(in_array($v['key'], $keyInDiapazon)) 
                                    $response .= '<td class="label">'.$v['val'].'</td>';
                            }
                            $response .= '</tr><tr><td>'.$mainImglabel.'</td>';
                            $count = 0;
                            foreach($productList[$key] as $id => $products) {
                                if(in_array($id, $keyInDiapazon)){
                                    $label = TechSchemaStage::model()->findByPk($id)->img;
                                    $response .= '<td><div class="product-list-wrapper">';
                                    if(!empty($label)) $response .= '<img src="'.$label.'" />';
                                    $response .= '<ul>';
                                    foreach($products as $product) {
                                        if(!empty($product)) $response .= '<li><a href="'.$product['path'].'" target="_blank">'.$product['name'].'</a></li>';
                                    }
                                    $response .= '</ul></div>';
                                    if(($count+1) < count($keyInDiapazon)) $response .= '<div class="product-list-arrow"><img class="plarrow" src="/images/schema/small_arrow.png"/></div>';
                                    $response .= '</td>';
                                    $count++;
                                }
                            }
                            $response .= '</tr>';   
                        }

                        $response .= '</table></div>';
                    }
                }
            }
            
            $array = array('data'=>$response);
            echo json_encode($array);
        } else $this->render('index', array('data'=>$result, 'productList'=>$productList));
    }
}