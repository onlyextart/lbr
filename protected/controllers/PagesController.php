<?php
class PagesController extends Controller{
    
    
    public function actionIndex(){
        $page_id = Yii::app()->params['currentMenuItem']->menuItemsContents[0]->page_id;
        if (!$page_id)
             throw new CHttpException(404,Yii::t('yii','Страница не найдена'));
        
        $content = Pages::model()->findByPk($page_id);
        if ($content)
            $this->render('index', array('data'=>$content));
    }
    
}