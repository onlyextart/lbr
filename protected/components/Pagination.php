<?php
//Yii::import('system.web.CPagination');

class Pagination extends CPagination
{
    /*public function createPageUrl($controller,$page)
    {
           $params = $this->params === null ? $_GET : $this->params;
           if($page>0) // page 0 is the default
                    //$params[$this->pageVar] = 'kk';//$page + 1;
            //$this->pageVar = 'page-'.$page + 1;
            //else
              //      unset($params[$this->pageVar]);
            //var_dump($controller->createUrl('', $params)); exit;
            //$param = '';
            //if($page>0) 
                $param = 'page-'.($page + 1);
            return 'company/events/'.$param;
            //return $controller->createUrl($this->route, $params);
            //return Yii::app()->createUrl('company/events', $params = array('page'=>$page+1));
    }*/
}

