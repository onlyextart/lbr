<?php

class ContactsController extends Controller
{
	

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
    
    public function actionIndex(){
     
    }
    public function actionGetRegionsTable()
	{
       
		$regionModel = Regions::model()->findAllByAttributes(array('published'=>'1'));
        $this->renderPartial('regionstable', array( 'regionModel'=>$regionModel,));
     
        
    }
                
            
    
}
