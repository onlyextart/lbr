<?php
class AkciiController extends Controller{
    
    protected function addCreateItemButtonInTree(&$menuTreeArray){
        foreach($menuTreeArray as &$menuItem){
            if(isset($menuItem[children])){
                $menuItem[children][] = array(
                    'id'=>'addMenuItem',
                    'text' => CHtml::link( 
                            '<img src="/images/addIcon.png" style="height:16px;">', 
                            '/administrator/menu/createMenuItem/rootId/'.$menuItem[id].'/ajax/true', 
                            array ( 
                                'class'=>'menuTreeViewLink',
                                'onclick'=>'menuTreeView.showForm(this); return false;',
                                'title'=>'Создать новый пункт меню',
                            )
                        ),
                    'expanded' => false,
                );
                if(is_array($menuItem[children])){
                    $this->addCreateItemButtonInTree($menuItem[children]);
                }
            }
        }
    }
    
    public function actionIndex(){
        $catalog_rec=MenuItems::model()->find('alias = :alias', array(':alias'=>'tehnika'));
        $subsections = $catalog_rec->children()->findAll();
        $sql="Select id,level,name,published from menu_items where lft>=".$catalog_rec['lft']." AND rt<=".$catalog_rec['rt'].";";
        $menuModel = MenuItems::model()->findBySql($sql);
        $menuTreeArray = MenuItems::getMenuTree('getMenuManageRowForAkcii',$sql);
        //$this->addCreateItemButtonInTree($menuTreeArray);
        $this->render('index', array(
            'menuModel'=>$menuModel,
            'menuTreeArray'=>$menuTreeArray,
        ));
    }
    
    //Получение дерева меню
    public function actionMenuTree(){
        $menuModel = MenuItems::model()->findAll();
        //$roots - Все корни меню
//        $roots = MenuItems::model()->roots()->findAll();
        $menuTreeArray = MenuItems::getMenuTree();
        $this->addCreateItemButtonInTree($menuTreeArray);
        $this->renderPartial('menuTree', array(
            'menuModel'=>$menuModel,
            'menuTreeArray'=>$menuTreeArray,
        ));
    }
    
    //Редактирование раздела
    public function actionUpdateGroup(){
        
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
//    public function actionUpdateGroup( $id ){
//        $model = MenuGroups::model()->findByPk( $id );
//        if( isset($_POST['MenuGroups']) ){
//            $model->attributes = $_POST['MenuGroups'];
//            if($model->save()){
//                $this->redirect('/administrator/menu/groups');
//            }
//        }
//        $this->render('groupManage', array('model'=>$model));
//    }
    
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
        }else{
            $parent = $model->parent()->find();
            $nextParent = $parent->next()->find();
            if($nextParent !== null){
                $model->moveAsLast($nextParent);
            }
        }
    }
    
    public function actionSortItemUp( $id ){
        $model = MenuItems::model()->findByPk( $id );
        $nextSibilingNode = $model->prev()->find();
        if( $nextSibilingNode !== null){
            $model->moveBefore($nextSibilingNode);
        }else{
            $parent = $model->parent()->find();
            $prevParent = $parent->prev()->find();
            if($prevParent !== null){
                $model->moveAsLast($prevParent);
            }
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
    
    /*
     * КАРТА САЙТА XML
     */
    public function actionSitemap(){
        $sitemapDate = filemtime('sitemap.xml');
        $this->render('sitemap', array('sitemapDate'=>$sitemapDate));
    }
    
    public function actionSaveSitemap(){
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
        $menuItems = Yii::app()->db->createCommand("SELECT path from menu_items where published='1' ORDER BY lft")->queryAll();
        foreach($menuItems as $menuItem){
            $path = $menuItem['path'];
            $find = strpos($path, 'www'); 
            
            if($find){
                $path = 'http://' . substr($path, $find); 
                $sitemap .='<url><loc>'.$path.'/</loc></url>';
            } else {
                if($path == '/index') { 
                    $path = '';
                }
                $sitemap .='<url><loc>http://www.lbr.ru'.$path.'/</loc></url>';
            }

        }
        $sitemap .='</urlset>';
        file_put_contents('sitemap.xml', $sitemap);
        $this->redirect('/administrator/menu/sitemap');
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
                    $menuModel->group_id = $menuGroupModel->id;
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