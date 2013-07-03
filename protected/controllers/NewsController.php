<?php

class NewsController extends Controller
{
	public function actionIndex()
	{
		$models = News::model()->findAllByAttributes(array('id'=>12));
                
        $this->render('index', array('models'=>$models));
	}
    
    public function actionView()
	{
		$model = News::model()->findAllByAttributes(array('id'=>12));
                
        $this->render('view', array('model'=>$model));
	}
    
}