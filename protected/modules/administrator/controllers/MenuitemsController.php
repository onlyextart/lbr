<?php
class MenuitemsController extends Controller{
    
    public function actionIndex($id){
        $model = MenuItems::model()->findAll('menu_id='.$id);
        $this->render('index', array(
            'model'=>$model,
        ));
    }
    
    //Создание нового меню
    public function actionCreate(){
        $menuModel = new Menu();
        
        if(isset($_POST['Menu'])){
            //Если пользователь нажал кнопку "Закрыть" перенаправить на 
            //вид index (страница со списком всех существующих меню)
            if($_POST['buttonPressed']=='close'){
                Yii::app()->request->redirect('/administrator/menu/index');
            }
            
            $menuModel->attributes = $_POST['Menu'];
            if( $menuModel->save() ){
                //Задать сообщение ползователь
                Yii::app()->user->setFlash('saved','Меню успешно создано!');

                //Если пользователь нажал кнопку "Сохранить и закрыть" перенаправить на 
                //вид index (страница со списком всех существующих меню)
                if($_POST['buttonPressed']=='saveAndClose'){
                    $this->redirect('/administrator/menu/index');
                }

                //Если пользователь нажал кнопку "Сохранить" перенаправить на
                //страницу редактирования этой же страницы
                elseif($_POST['buttonPressed']=='save'){
                    $this->redirect('/administrator/menu/update/id/'.$menuModel->id);
                }
            }
        }
        
        $this->render('menuManage', array('menuModel'=>$menuModel));
    }
    
    //Редактирование меню. Принимает параметр ID меню
    public function actionUpdate($id){
        $menuModel = Menu::model()->findByPk( $id );
        
        if(isset($_POST['Menu'])){
            //Если пользователь нажал кнопку "Закрыть" перенаправить на 
            //вид index (страница со списком всех существующих меню)
            if($_POST['buttonPressed']=='close'){
                Yii::app()->request->redirect('/administrator/menu/index');
            }
            
            $menuModel->attributes = $_POST['Menu'];
            if( $menuModel->save() ){
                //Задать сообщение ползователь
                Yii::app()->user->setFlash('saved','Меню успешно сохранено!');

                //Если пользователь нажал кнопку "Сохранить и закрыть" перенаправить на 
                //вид index (страница со списком всех существующих меню)
                if($_POST['buttonPressed']=='saveAndClose'){
                    $this->redirect('/administrator/menu/index');
                }

                //Если пользователь нажал кнопку "Сохранить" перенаправить на
                //страницу редактирования этой же страницы
                elseif($_POST['buttonPressed']=='save'){
                    $this->redirect('/administrator/menu/update/id/'.$menuModel->id);
                }
            }
        }
        
        $this->render('menuManage', array('menuModel'=>$menuModel));
    }
    
} 
?>
