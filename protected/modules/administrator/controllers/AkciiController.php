<?php
class AkciiController extends Controller{
    
   public function actionIndex(){
        $catalog_rec=MenuItems::model()->find('alias = :alias', array(':alias'=>'tehnika'));
        $sql="Select id,level,name,published from menu_items where lft>=".$catalog_rec['lft']." AND rt<=".$catalog_rec['rt'].";";
        $menuModel = MenuItems::model()->findAllBySql($sql);
        $menuTreeArray = MenuItems::getMenuTree('getMenuManageRowForAkcii');
        //$this->addCreateItemButtonInTree($menuTreeArray);
        $this->render('index', array(
            'menuModel'=>$menuModel,
            'menuTreeArray'=>$menuTreeArray,
        ));
    }
    
    public function actionAddSolidType(){
        $command = Yii::app()->db->createCommand();
        $x=$command->insert('akcii_img_solid', array('id'=>0,'type'=>'Без плашки'));
        $x=$command->insert('akcii_img_solid', array('id'=>1,'type'=>'С плашкой-скидкой'));
    }
    
    //Получение дерева меню
    public function actionMenuTree(){
        $menuModel = MenuItems::model()->findAll();
        //$roots - Все корни меню
//        $roots = MenuItems::model()->roots()->findAll();
        $menuTreeArray = MenuItems::getMenuTree();
 //       $this->addCreateItemButtonInTree($menuTreeArray);
        $this->renderPartial('menuTree', array(
            'menuModel'=>$menuModel,
            'menuTreeArray'=>$menuTreeArray,
        ));
    }
    
    //Редактирование раздела
    public function actionEditGroup($id){
        
        $groupAkciiModel= AkciiGroup::model()->find('item_id=:id',array(':id'=>$id));
        if (empty($groupAkciiModel)){
            $groupAkciiModel= new AkciiGroup();
            $groupAkciiModel->item_id=$id;
        }
        
        if(isset($_POST['AkciiGroup'])){
            $groupAkciiModel->attributes = $_POST['AkciiGroup'];
            $groupAkciiModel->save();
        }
        
        if( isset($_GET['ajax']) ){
            $this->renderPartial('groupManage', array('groupAkciiModel'=>$groupAkciiModel), false, true); 
        }
          else{
            $this->render('groupManage', array('groupAkciiModel'=>$groupAkciiModel));
          }
    }
    
    //Редактирование товара
    public function actionEditProduct($id){
      $productAkciiModel= AkciiProduct::model()->find('item_id=:id',array(':id'=>$id));
      $productModel= MenuItems::model()->with('products')->find('t.id=:id',array(':id'=>$id));
      $product_img=$productModel->products[0]->image;
       
        if (empty($productAkciiModel)){
            $productAkciiModel= new AkciiProduct();
            $productAkciiModel->item_id=$id;
            
        }
        
        if(isset($_POST['AkciiProduct'])){
            $productAkciiModel->attributes = $_POST['AkciiProduct'];
            
            $item_info= MenuItems::model()->findByPk($id);
            $item_parent=$item_info->ancestors()->find('level=3');
            $group=AkciiGroup::model()->find('item_id=:id',array(':id'=>$item_parent->id+1));
            
            $productAkciiModel->group_id=$group->id;
            $productAkciiModel->item_id=$id;
            $productAkciiModel->save();  
        }
        
        if( isset($_GET['ajax']) ){
            $this->renderPartial('productManage', array('productAkciiModel'=>$productAkciiModel,'product_img'=>$product_img,'errors'=>$errors), false, true); 
        }
          else{
            $this->render('productManage', array('productAkciiModel'=>$productAkciiModel, 'product_img'=>$product_img,'errors'=>$errors));
          }
    }
    

}