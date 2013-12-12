<?php
/**
 * The Finder
 *  
 * @author cheshenkov
 */
class SearchController extends Controller{
    
    protected function beforeAction($action)
    {
        if(parent::beforeAction($action))
        {
            Yii::app()->clientScript->registerScriptFile('/js/site/search.js');
        }
        return true;
    }
    
    public function actionIndex()
    {
        $query = trim($_GET['q']);
        if ($query){
            $search = new SearchLog();
            $icon = mb_detect_encoding($query, array('UTF-8', 'Windows-1251', 'KOI8-R', 'ISO-8859-5'));
            if($icon == 'Windows-1251' || $icon=='ISO-8859-5'){
                $query = iconv('Windows-1251', 'UTF-8', $query);
            }
            
            $result = $search->getSearchResult($query, $resultParams);
        }
        $this->render('index', array('q'=>$query, 'result'=>$result, 'pages'=>$pages, 'params'=>$resultParams));
    }
    
    public function actionQuickAjaxResult()
    {
        $query = trim($_GET['q']);
        if ($query){
            $search = new SearchLog();
            $icon = mb_detect_encoding($query, array('UTF-8', 'Windows-1251', 'KOI8-R', 'ISO-8859-5'));
            if($icon == 'Windows-1251' || $icon=='ISO-8859-5'){
                $query = iconv('Windows-1251', 'UTF-8', $query);
            }
            $result = $search->getQuickResult($query);
        }
        $this->renderPartial('quickAjaxResult', array('data' =>$result));
    }
    
    public function actionImage()
    {
        $query = $_GET['q'];
        $this->render('image', array('q'=>$query));
    }
}