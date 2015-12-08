<?php
class FinanceController extends Controller
{
    public function actionIndex()
    {
        $domain=Yii::app()->getBaseUrl(true);
        $url=$domain.'/finance/products/';
        Yii::app()->request->redirect($url,true);
    }

   
}