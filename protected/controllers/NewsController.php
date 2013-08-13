<?php

class NewsController extends Controller
{
	public function actionIndex()
	{
            
            $dataProvider = new CActiveDataProvider ('News', 
                array(
                    //'criteria'=>$criteria,
                    'pagination'=>array(
                        'pageSize'=>'10'
                    )
                )
            );
            //var_dump($dataProvider->getData());
            
            $this->render('index', array('dataProvider'=>$dataProvider));
	}
    
    public function actionView()
	{
		$model = News::model()->findAllByAttributes(array('id'=>12));
                
        $this->render('view', array('model'=>$model));
	}
    
}