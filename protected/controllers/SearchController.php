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
        if($_GET['ajax'])
        {
            $this->getAjaxResult($query);
            exit();
        }
        $noquery = array('', ' ', 'Найти на сайте...');
        $result = $pages = array();
        if ($query && !in_array($query, $noquery)){
            $search = new SearchLog();
            $icon = mb_detect_encoding($query, array('UTF-8', 'Windows-1251', 'KOI8-R', 'ISO-8859-5'));
            if($icon == 'Windows-1251' || $icon == 'ISO-8859-5' || $icon == 'KOI8-R'){
                $query = iconv('Windows-1251', 'UTF-8', $query);
            }
            if($search->prepareSqlite())
            {
                $count['catalog'] = $search->getResultCount($query, SearchLog::CATALOG);
                $count['news'] = $search->getResultCount($query, SearchLog::NEWS);
                $count['other'] = $search->getResultCount($query, SearchLog::OTHER);
                $limit = 7;
                $type = SearchLog::$types;
                foreach ($count as $name=>$i)
                {
                    if($i>0)
                    {
                        $pages[$name] = $this->getPagination($i, $limit, $name, $query);
                        $offset = (int)$pages[$name]->currentPage*(int)$pages[$name]->pageSize;
                        $result[$name] = $search->getSearchResult($query, $type[$name], $offset, $limit);
                    }
                }
            }
            $q = $search->getPhrasesArray($query);
        }
        if(empty($result) || in_array($query, $noquery) || !$query)
        {
            $empty = SearchRecommended::model()->findAll();
            $this->render('index', array('q'=>$query, 'empty'=>$empty, 'query'=>$q));
        }else{
            $this->render('index', array('q'=>$query, 'result'=>$result, 'pages'=>$pages, 'query'=>$q));
        }
    }
    
    public function getPagination($count, $size, $var, $query){
        $pages = new CSearchPagination($count);
        $pages->pageSize=$size;
        $pages->params = array('q'=>$query);
        $pages->pageVar = $var;
        return $pages;
    }
    public function getAjaxResult($q){
        
        echo "Ajax result. Query: ".$q;
//        $this->render('index', array('q'=>$query, 'result'=>$result, 'pages'=>$pages));
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
