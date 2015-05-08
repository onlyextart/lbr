<?php
class AkciiController extends Controller
{
    public function actionIndex()
    {
        Yii::app()->params['meta_title']='Акции и скидки';
        $this->render('index', array());
    }

   
}