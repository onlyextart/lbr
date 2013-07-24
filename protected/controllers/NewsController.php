<?php

class NewsController extends Controller
{
	public function actionIndex()
	{
            
            //$this->render('index', array('newsmodels'=>$newsmodels));
	}
    
    public function actionView()
	{
		$model = News::model()->findAllByAttributes(array('id'=>12));
                
        $this->render('view', array('model'=>$model));
	}
    
}