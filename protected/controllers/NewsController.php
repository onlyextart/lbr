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

        $criteria = new CDbCriteria();
        $criteria->together = true;
        $criteria->with = array('newsRegions');
        $criteria->condition = 't.published=1';
        $criteria->compare('newsRegions.filial_id', array(Yii::app()->params['defaultRegionId'], Yii::app()->params['regionId']));
 
        $dataProvider = new CActiveDataProvider ('News', 
                        array(
                            'criteria'=>$criteria,
                            'pagination'=>array(
                                'pageSize'=>'10'
                            )
                        ));
 
        $this->render('index', array('data' => $dataProvider));

	}
    

 public function actionView($id)
  	{
 	     $data = News::model()->findByPk($id, 'published=1');
         $this->render('_view', array('data'=>$data));
  	}

    
}