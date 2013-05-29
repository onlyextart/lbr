<?php

class NewsController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('News');
        $this->render('index', array('dataProvider' => $dataProvider));
    }
    
    public function actionCreate()
    {
        $model = new News();
        if (isset($_POST['News'])){
           $model->attributes = $_POST['News'];
           $model->save();
           $this->redirect('/administrator/news'); 
        }
        $this->render('manage', array('model' => $model));
    }
    
    public function actionUpdate()
    {
        $model = News::model()->findByPk($_GET['id']);
        if($model === null){
            $this->redirect('/administrator/news'); 
        }
        if (isset($_POST['News'])){
           $model->attributes = $_POST['News'];
           $model->save();
           $this->redirect('/administrator/news'); 
        }
        $this->render('manage', array('model' => $model));
    }
    
}
