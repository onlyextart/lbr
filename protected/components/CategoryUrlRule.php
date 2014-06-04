<?php
class CategoryUrlRule extends CBaseUrlRule
{
    public $connectionID = 'db';
    
    //Искомая страница
    private $desiredMenuItem = null;
    
    static $controllers = array(
        MenuItems::BANNERS_MENU_ITEM_TYPE=>'xbanner',
        MenuItems::PRODUCT_MENU_ITEM_TYPE=>'products',
        MenuItems::CONTACT_MENU_ITEM_TYPE=>'contacts',
        MenuItems::STATIC_MENU_ITEM_TYPE=>'pages',
        MenuItems::NEWS_MENU_ITEM_TYPE=>'news',
        MenuItems::MIGHTINESS_MENU_ITEM_TYPE=>'mightiness',
    );
    
    public function createUrl($manager, $route, $params, $ampersand)
    {
        $routeParts = explode('/',$route);
        if(in_array($routeParts[0], self::$controllers)){
            $pathParamsString = $this->paramsToString($params);
            return trim($this->getUrl($this->desiredMenuItem->id).'?'.$pathParamsString, '/');
        }
        return false;
    }
   
    public function parseUrl($manager, $request, $pathInfo, $rawPathInfo)
    {
        if( $pathInfo === ''){
            $this->desiredMenuItem = MenuItems::model()->find('level=:level', array(
                ':level'=>1,
            ));
        }
        else{
            $this->desiredMenuItem = MenuItems::model()->find(
                    'path=:path',
                    array(':path'=>'/'.$pathInfo)
            );
        }
        //Если не найден искомый пункт меню
        if($this->desiredMenuItem === null){
            return false; // не применяем данное правило
        }
        $ancestors=$this->desiredMenuItem->ancestors()->findAll();
        
        //Сохранияем в параметрах приложения id текущего пункта меню
        Yii::app()->params['currentMenuItem'] = $this->desiredMenuItem;
        
        //Сохранияем в параметрах приложения все ветку меню
        if(is_array($ancestors) && !empty($ancestors)){
            array_push($ancestors, $this->desiredMenuItem);
        }
        else{
            $ancestors = $this->desiredMenuItem;
        }
        
        $breadcrumbs = array();
        $breadcrumbsMenuBranch = $ancestors;
        
        if( is_array($ancestors) && $ancestors[1]->alias=='tehnika'){
            $rootmenu = isset(Yii::app()->request->cookies['rootmenu']) ? Yii::app()->request->cookies['rootmenu']->value : null;
            if($rootmenu===null){
                $rootmenuModel=MenuItems::model()->find('path=:path', array(':path'=>'/selskohozyaystvennaya-tehnika/type'));
            }
            else{
                $rootmenuModel=MenuItems::model()->findByPk($rootmenu);
            }
            $breadcrumbsCurrentMenuItem = $rootmenuModel->descendants()->find('alias=:alias', array(':alias'=>$ancestors[3]->alias));
            if($breadcrumbsCurrentMenuItem){
                $breadcrumbsMenuBranch=$breadcrumbsCurrentMenuItem->ancestors()->findAll();
                $breadcrumbsMenuBranch[] = $breadcrumbsCurrentMenuItem;
            }
        }
        
        foreach($breadcrumbsMenuBranch as $ancestor){
            if($ancestor->level == 1 || $ancestor->id == $this->desiredMenuItem->id )
                    continue;
            $breadcrumbs[$ancestor->name] = $ancestor->path.'/';
        }
        $breadcrumbs[]=$this->desiredMenuItem->name;
        Yii::app()->params['breadcrumbs'] = $breadcrumbs;
        
        Yii::app()->params['currentMenuBranch'] = $ancestors;
        
        return self::$controllers[$this->desiredMenuItem->type];
    }
    
    static function getUrl( $pageId, $recursive = false )
    {
        if(!$recursive){
            $menuItemModel=Yii::app()->db->createCommand("SELECT path from menu_items where id='".$pageId."'")->queryRow();
            return $menuItemModel[path];
        }
        $menuItemModel = MenuItems::model()->findByPk($pageId);
        if( $menuItemModel !== null ){
            $ancestors = $menuItemModel->ancestors()->findAll();
            $url = "";
            foreach( $ancestors as $ancestor){
                if($ancestor->level != 1){
                    $url .= '/'.$ancestor->alias;
                }
            }
            return $url.'/'.$menuItemModel->alias;
        }
        return false;
    }
    
    public static function getParents($id){
        if($id){
            $menuItem = MenuItems::model()->findByPk($id);
            $parents = $menuItem->ancestors()->findAll();
            if(!empty($parents))
            {
                $return = array();
                foreach ($parents as $parent){
                    array_push($return, array('id'=>$parent->id, 'header'=>$parent->header, 'path'=>$parent->path));
                }
                return $return;
            }
        }
    }


    private function paramsToString($params, $argumentName=null) {
        $pathParamsString = "";
        foreach($params as $name=>$value){
            if(is_array($value)){
                $pathParamsString .= $this->paramsToString($value, $name);
            } else{
                if($argumentName===null){
                    $pathParamsString .= $name.'='.$value.'&';
                } else{
                    $pathParamsString .= $argumentName.'['.$name.']'.'='.$value.'&';
                }
            }
        }
        return $pathParamsString;
    }
}
