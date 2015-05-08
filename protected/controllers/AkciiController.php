<?php
class AkciiController extends Controller
{
    public function actionIndex()
    {
        Yii::app()->params['meta_title']='Скидки и акции';
        $this->render('index', array());
    }

   
}