<?php
class TechSchemaController extends Controller
{
    public function actionIndex()
    {
        $schemaIds = $_POST['schemaIds'];
        if(!empty($schemaIds)) {
            $result = $productList = array();
            $view = $_POST['view'];
            $response = '';
            foreach($schemaIds as $id) {
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
            }

            if(!empty($result)) {
                if($view == 1){
                    foreach($result as $key => $value){
                        $label = TechSchema::model()->find('title=:title', array(':title'=>$key))->img;
                        if(!empty($label)) $label = '<img src="'.$label.'" />';
                        else $label = $key;
                        $response .= '<div><table class="table-tech-stage-with-img" border="0" cellspacing="5" cellpadding="5"><tr>';  
                        $response .= '<td>Этапы заготовки</td>';
                        
                        foreach($value as $v) {
                            $response .= '<td>'.$v.'</td>';
                        }

                        $response .= '</tr><tr><td>'.$label.'</td>';
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
                    }
                } else {
                    foreach($result as $key => $value){
                        $response .= '<div><table class="table-tech-stage" border="1" cellspacing="0" cellpadding="5"><tr>';  
                        $response .= '<td>Этапы заготовки</td>';
                        foreach($value as $v) {
                            $response .= '<td>'.$v.'</td>';
                        }
                        $response .= '</tr><tr><td>'.$key.'</td>';
                        foreach($productList[$key] as $products) {
                            $response .= '<td><ul>';
                            foreach($products as $product) {
                                if(!empty($product)) $response .= '<li><a href="'.$product['path'].'" target="_blank">'.$product['name'].'</a></li>';
                            }
                            $response .= '</ul></td>';
                        }

                        $response .= '</tr></table></div>';
                    }
                }
            }
            
            $array = array('data'=>$response);
            echo json_encode($array);
        } else $this->render('index', array('data'=>$result, 'productList'=>$productList));
    }
}