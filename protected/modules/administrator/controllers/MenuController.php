<?php
class MenuController extends Controller{
    
    public function actionIndex(){
        $menuModel = MenuItems::model()->findAll();
        //$roots - Все корни меню
        $roots = MenuItems::model()->roots()->findAll();
        $menuTreeArray = MenuItems::getMenuTree($roots);
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
        $dataProvider = new CActiveDataProvider('MenuGroups');
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
} 
?>
