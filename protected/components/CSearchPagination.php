<?php

class CSearchPagination extends CPagination{
    
    public function createPageUrl($controller,$page)
    {
            $params=$this->params===null ? $_GET : $this->params;
            if($page>0) // page 0 is the default
                    $params[$this->pageVar]=$page+1;
            else
                    unset($params[$this->pageVar]);
            
            $url = array();
            foreach ($params as $par=>$var){
                array_push($url, $par.'='.$var);
            }
            return '?'.implode('&', $url);
    }
}
