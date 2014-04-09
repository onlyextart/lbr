<?php

class WebUser extends CWebUser
{
    public $loginUrl=array('/users/login/');

    public function getIsRoot()
    {
            return $this->level==='0';
    }
    
    public function checkAccess($operation,$params=array(),$allowCaching=true)
    {
        if($this->getIsRoot())
            return true;
        else
            return parent::checkAccess($operation,$params,$allowCaching);
        
    }
    
}