<?php
class MenuController extends Controller{
    
    public function actionIndex(){
        $menuModel = MenuItems::model()->findAll();
        $menuTreeArray = MenuItems::getMenuTree();
        $this->render('index', array(
            'menuModel'=>$menuModel,
            'menuTreeArray'=>$menuTreeArray,
        ));
    }
    
    //Получение дерева меню
    public function actionMenuTree(){
        $menuModel = MenuItems::model()->findAll();
        //$roots - Все корни меню
        $roots = MenuItems::model()->roots()->findAll();
        $menuTreeArray = MenuItems::getMenuTree($roots);
        $this->renderPartial('menuTree', array(
            'menuModel'=>$menuModel,
            'menuTreeArray'=>$menuTreeArray,
        ));
    }
    
    //Создание нового меню
    public function actionCreateMenu(){
        $menuModel = new MenuItems();
        
        if(isset($_POST['MenuItems'])){
            //Если пользователь нажал кнопку "Закрыть" перенаправить на 
            //вид index (страница со списком всех существующих меню)
            
            $menuModel->attributes = $_POST['MenuItems'];
            if( $menuModel->saveNode() ){
                //Задать сообщение ползователь
                Yii::app()->user->setFlash('saved','Меню успешно создано!');
            }
        }
        
        $this->render('menuManage', array('menuModel'=>$menuModel));
    }
    
    //Редактирование меню. Принимает параметр ID меню
    public function actionUpdateMenu($id){
        $menuModel = MenuItems::model()->findByPk($id);
        
        if(isset($_POST['MenuItems'])){
            //Если пользователь нажал кнопку "Закрыть" перенаправить на 
            //вид index (страница со списком всех существующих меню)
            
            $menuModel->attributes = $_POST['MenuItems'];
            if( $menuModel->saveNode() ){
                //Задать сообщение ползователью
                Yii::app()->user->setFlash('saved','Меню успешно создано!');
            }
        }
        if( isset($_GET['ajax']) ){
            $this->renderPartial('menuManage', array('menuModel'=>$menuModel), false, true);
        }
        else{
            $this->render('menuManage', array('menuModel'=>$menuModel));
        }
    }
    
    /*
     * УПРАВЛЕНИЕ ПУНКТАМИ МЕНЮ
     */
    public function actionCreateMenuItem( $rootId ){
        $menuModel = new MenuItems();
        
        if(isset($_POST['MenuItems'])){
            //$root - родительский узел дерева
            $root = MenuItems::model()->findByPk( $rootId );
            $menuModel->attributes = $_POST['MenuItems'];
            if( $menuModel->appendTo($root) ){
                //Задать сообщение пользователью
                Yii::app()->user->setFlash('saved','Меню успешно создано!');
            }
        }
        if( isset($_GET['ajax']) ){
            $this->renderPartial('menuManage', array('menuModel'=>$menuModel), false, true);
        }
        else{
            $this->render('menuManage', array('menuModel'=>$menuModel));
        }
    }
    
    public function actionUpdateMenuItem( $id ){
        $menuModel = MenuItems::model()->findByPk( $id );
        
        if(isset($_POST['MenuItems'])){
            $menuModel->attributes = $_POST['MenuItems'];
            if( $menuModel->saveNode() ){
                //Задать сообщение ползователь
                Yii::app()->user->setFlash( 'saved', 'Меню успешно создано!' );
            }
        }
        if( isset($_GET['ajax']) ){
            $this->renderPartial( 'menuManage', array( 'menuModel'=>$menuModel ), false, true );
        }
        else{
            $this->render('menuManage', array( 'menuModel'=>$menuModel ) );
        }
    }
    
    public function actionDeleteMenuItem( $id ){
        $menuModel = MenuItems::model()->findByPk( $id );
        $patentNode = $menuModel->parent()->find();
        if( $menuModel !== null ){
            $menuModel->deleteNode();
        }
        /*if( isset($_GET['ajax']) ){
            $this->renderPartial('menuManage', array('menuModel'=>$menuModel), false, true);
        }*/
        else{
            $this->render('menuManage', array('menuModel'=>$patentNode));
        }
    }
    
    
    
    /*
     * УПРАВЛЕНИЕ ГРУППАМИ МЕНЮ
     */
    public function actionGroups(){
        $dataProvider = new CActiveDataProvider('MenuGroups', array(
            'pagination'=>false
        ));
        $this->render('groups', array('dataProvider'=>$dataProvider));
    }
    
    
    //Добавить новую группу меню
    public function actionCreateGroup(){
        $model = new MenuGroups();
        if( isset($_POST['MenuGroups']) ){
            $model->attributes = $_POST['MenuGroups'];
            if($model->save()){
                $this->redirect('/administrator/menu/groups');
            }
        }
        $this->render('groupManage', array('model'=>$model));
    }
    
    //Редактировать группу меню
    public function actionUpdateGroup( $id ){
        $model = MenuGroups::model()->findByPk( $id );
        if( isset($_POST['MenuGroups']) ){
            $model->attributes = $_POST['MenuGroups'];
            if($model->save()){
                $this->redirect('/administrator/menu/groups');
            }
        }
        $this->render('groupManage', array('model'=>$model));
    }
    
    //Удалить группу меню
    public function actionDeleteGroup( $id ){
        MenuGroups::model()->deleteByPk( $id );
        $this->redirect('/administrator/menu/index');
    }
    
    /*
     * СОРТИРОВКА ПУНКТОВ МЕНЮ
     */
    public function actionSortItemDown( $id ){
        $model = MenuItems::model()->findByPk( $id );
        $nextSibilingNode = $model->next()->find();
        if( $nextSibilingNode !== null){
            $model->moveAfter($nextSibilingNode);
        }
    }
    
    public function actionSortItemUp( $id ){
        $model = MenuItems::model()->findByPk( $id );
        $nextSibilingNode = $model->prev()->find();
        if( $nextSibilingNode !== null){
            $model->moveBefore($nextSibilingNode);
        }
    }
    
    /*
     * УПРАВЛЕНИЕ ПУБЛИКАЦИЕЙ
     */
    public function actionChangePublishing( $id ){
        $model = MenuItems::model()->findByPk( $id );
        if( $model !== null){
            ($model->published == 1)?$model->published = 0:$model->published = 1;
            $model->saveNode();
        }
    }
    
    public function actionTransfer(){
        exit();
        $connectionJlbrDb=new CDbConnection('mysql:host=localhost;dbname=lbr_jlbr','mysql','mysql');
        $connectionJlbrDb->active=true;
        function lower($str){return mb_strtolower($str, "UTF-8");}
        Yii::app()->db->getPdoInstance()->sqliteCreateFunction('lower', 'lower', 1);
        $xml=simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/catalog.xml');
        /*
         * /index/tehnika/
         */
        $catalogRootId = 91;
        /*
         * /index/selskohozyaystvennaya/type/
         */
        $shCatologRootId = 58;
        $_POST['itemNum']=0;
        function builtCatalogMenu($xml, $partOfPath, $connectionJlbrDb, $roots){
            static $level = 0;
            static $menuGroupModel;
            foreach($xml->li as $menuLevel){
                $path = trim($menuLevel->a['href'],'/');
                $link = trim(str_replace($partOfPath, "", $menuLevel->a['href']),'/');
                if($level==2){
                    $menuItemType = MenuItems::PRODUCT_MENU_ITEM_TYPE;
                    preg_match('/\d*[^-]/', $link, $productIdArray);
                    $productId=$productIdArray[0];
                    $productRecordFromJlbr = $connectionJlbrDb->createCommand('SELECT seo_description, seo_title FROM jlbr_xbaner where id='.$productId)->queryRow();
                    $menu_item_meta_title = $productRecordFromJlbr[seo_title];
                    $menu_item_meta_description = $productRecordFromJlbr[seo_description];
                    $menu_item_header = $menuLevel->a;
                    $menu_item_seo_text = "";
                }
                else{
                    $menuItemType = MenuItems::BANNERS_MENU_ITEM_TYPE;
                    $menuRecordFromJlbr = $connectionJlbrDb->createCommand("SELECT params FROM jlbr_menu where path='".$path."'")->queryRow();
                    $menuRecordFromJlbr = json_decode($menuRecordFromJlbr[params]);
                    $menu_item_meta_title = $menuRecordFromJlbr->page_title;
                    $menu_item_meta_description = $menuRecordFromJlbr->{'menu-meta_description'};
                    $menu_item_header = $menuRecordFromJlbr->page_heading;
                    $menu_item_category_record = $connectionJlbrDb->createCommand("SELECT description FROM jlbr_categories where path='".str_replace('tehnika/',"",$path)."'")->queryRow();
                    $menu_item_seo_text = $menu_item_category_record[description];
                }
                if($level == 0){
                    $menuGroupModel = MenuGroups::model()->find('lower(name)=lower(:name)', array(
                        ':name'=>$menuLevel->a
                    ));
                    echo($menuLevel->a." ($link) ($path)<br>");
                    var_dump($_POST['itemNum']);
                }
                //var_dump($roots);
                $newRoots = array();
                foreach($roots as $rootId){
                    $rootModel = MenuItems::model()->findByPk( $rootId );
                    $menuModel = new MenuItems();
                    $menuModel->name = $menuLevel->a;
                    $menuModel->alias = $link;
                    $menuModel->meta_title = $menu_item_meta_title;
                    $menuModel->meta_description = $menu_item_meta_description;
                    $menuModel->header = $menu_item_header;
                    $menuModel->group = $menuGroupModel->id;
                    $menuModel->seo_text = $menu_item_seo_text;
                    $menuModel->published = '1';
                    $menuModel->type = $menuItemType;
                    $menuModel->appendTo($rootModel);
                    $newRoots[]=$menuModel->id;
                }
                
//                echo(str_repeat(' - ', $level+1).$menuLevel->a." ($link) ($path)<br>");
//                echo str_repeat(' - ', $level+1)."title:  $menu_item_meta_title <br>";
//                echo str_repeat(' - ', $level+1)."description:  $menu_item_meta_description<br>";
//                echo str_repeat(' - ', $level+1)."header:  $menu_item_header<br>";
//                echo str_repeat(' - ', $level+1)."group:  $menuGroupModel->name<br>";
//                echo str_repeat(' - ', $level+1)."menu_item_seo_text:  $menu_item_seo_text<br>";
//                echo "-----------------------------------------------------<br>";
                $_POST['itemNum']++;
                if($menuLevel->ul->count()>0){
                    $level++;
                    builtCatalogMenu($menuLevel->ul, (string) $menuLevel->a['href'], $connectionJlbrDb, $newRoots);
                    $level--;
                }
            }
        }
        
        builtCatalogMenu($xml, '/tehnika', $connectionJlbrDb, array(
                'catalogRootId' => $catalogRootId,
                'shCatologRootId' => $shCatologRootId
            )
        );
        echo($_POST['itemNum']);
        echo('done');
        exit();
    }
    
    public function actionChangeGroups(){
        $models = MenuItems::model()->findAll('level=4');
        foreach($models as $model){
            $childrens = $model->children()->findAll();
            foreach($childrens as $children){
                $children->group_id=$model->group_id;
                $children->saveNode();
            }
        }
        echo('done');
    }
    
    public function actionSetPath(){
        exit();
        $models = MenuItems::model()->findAll();
        foreach($models as $model){
            if($model->saveNode())
                echo($model->path.'<br>');
        }
    }
} 
?>
