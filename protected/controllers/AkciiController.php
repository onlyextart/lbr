<?php
class AkciiController extends Controller
{
    public function actionIndex()
    {
        $response="";
        
        Yii::app()->params['meta_title']='Акции и скидки';
        $groups= AkciiGroup::model()->findAll(array('condition'=>'t.published=1','order'=>'t.range asc'));
        if(isset($groups)){
            foreach ($groups as $group){
               $products=AkciiProduct::model()->findAll('group_id=:id AND t.published=1',array(':id'=>$group->id));
               $colorCssClass='mightiness-menu-label menu_color_group_'.$group->menu_items->group_id;
               $group_label=$group->menu_items->mightiness_ico;
               $group_name=$group->menu_items->name;
               if(!empty($products)){
                    $response.='<div class="'.$colorCssClass.'" style="background-image: url('.Yii::app()->request->baseUrl.$group_label .')">';
                    $response.='<span>'.$group_name.'</span>';
                    $response.='</div>';
                    $response.='<div class="group_content">';
                    //выводим описание
                    if(isset($group->description)&&$group->description!=''){
                        $response.='<div class="group_description">'.$group->description.'</div>'; 
                    }
               }
               
          //     $response.='<div style="clear: both"></div>';
               
               //выводим акционные товары группы
               
               foreach ($products as $product){
                   $item_info= MenuItems::model()->with('products')->find('t.id=:item_id',array(':item_id'=>$product->item_id));
                   $product_img=$item_info->products[0]->image;
                   $response.='<div class = "mresults mresults-akcii">';
                   $response.='<div class = "m_header">';
                   $response.='<a href = "'.$item_info->path.'"><h3>'.$item_info->name.'</h3></a>';
                   $response.='</div>';
                   $response.='<div class = "m_image">';
                   
                   $response.='<div class = "akcii_img">';
                   $response.='<img src="'. Yii::app()->baseUrl.$product_img.'">';
                   $response.='</div>';
                   //добавляем плашку
                   if (isset($product->solid_type)&&($product->solid_type==AkciiProduct::DISCOUNT_IMAGE_TYPE)){
                       //вставка картинки плашки
                       $response.='<div class = "akcii_solid">';
                       $response.='<img src="'.Yii::app()->baseUrl.'/images/akcii/akcii_solid.png" class="img_solid">';
                       $response.='</div>';
                       //вставка текста на плашке
                       $response.='<div class = "akcii_solid">';
                       //процент скидки
                        $response.='<div style="width:80px;float:left;">';
                            if (isset($product->solid_percent)&&($product->solid_percent!=null)){
                                $response.='<div class="akcii_solid_percent_value" ><span>-'.$product->solid_percent.'</span></div>';
                                $response.='<div class="akcii_solid_percent"><span>%</span></div>';
                            }
                            $response.='&nbsp;';
                       $response.='</div>';
                       // сам текст на плашке
                       $response.='<div class = "akcii_solid_text">';
                        if (isset($product->solid_text_top)){
                           $response.=$product->solid_text_top; 
                        }
                       $response.='</div>';
                       $response.='</div>';
                   }
                   
                   $response.='</div>';
                   $response.='<div class="m_caption"><p style="word-wrap: break-word;">'.$product->description.'</p></div>';
    
                   $response.='</div>';
               }
              
              

               $response.='</div>';
               $response.='<div style="clear: both"></div>';
            }
        }    
        $this->render('index',array('response'=>$response));
    }

   
}