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
    );
    
    public function createUrl($manager, $route, $params, $ampersand)
    {
        $routeParts = explode('/',$route);
        if(in_array($routeParts[0], self::$controllers)){
            $pathParamsString = $this->paramsToString($params);
            return $this->getUrl($this->desiredPage->id).$routeParts[1].'?'.$pathParamsString;
        }
        return false;
    }
   
    public function parseUrl($manager, $request, $pathInfo, $rawPathInfo)
    {
        //$start = microtime(true);
        if( $pathInfo === ''){
            $this->desiredMenuItem = MenuItems::model()->find('level=1');
        }
        else{/*
            //Разбиваем запрос на массив по символу "/"
            $queryPathArray = explode('/', 'index/'.$pathInfo );
            //"переворачиваем" его для обхода начиная с последнего елемента
            $queryPathArrayReversed = array_reverse( $queryPathArray );
            foreach( $queryPathArrayReversed as $i=>$partOfPath ){
                //находим модели всех пунктов меню в которых поле alias равен части пути
//                $menuItemsModel = MenuItems::model()->findAll(
//                    'lower(alias)=:alias AND published=1',
//                    array(
//                        ':alias'=>mb_strtolower($partOfPath),
//                    )
//                );
                $menuItemsModel = MenuItems::model()->findAll(
                    array(
                        'condition'=>'alias=:alias',
                        'params'=>array(':alias'=>mb_strtolower($partOfPath)),
                        'select'=>'level, alias, lft, rt, root',
                    )
                );
                //Если не найдено ни одной записи
                if( empty($menuItemsModel) ){
                    return false; // не применяем данное правило
                }

                foreach( $menuItemsModel as $menuItemModelNum => $menuItemModel ){
                    //Предки пункта меню
                    $ancestors = $menuItemModel->ancestors()->findAll();
                    //если первый предок является корневым пунктом меню
                    //и количество предков (+ текущий узел) в базе данных совпадает с количесвом уровней в url
                    if( $ancestors[0]->level == '1' && (count($ancestors)+1)==count($queryPathArray) ){
                        //проверяем соответствие частей пути полям alias соответствующих предков
                        foreach($ancestors as $ancestorNum => $ancestor){
                            if(mb_strtolower($ancestor->alias) !== mb_strtolower($queryPathArray[$ancestorNum])){
                                continue(2);
                            }
                        }
                        $this->desiredMenuItem = $menuItemModel;
                        break;
                    }
                    else{
                        continue;
                    }
                }
                if($this->desiredMenuItem !== null){
                    break;
                }
            }
         */
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
        Yii::app()->params['currentMenuBranch'] = $ancestors;
        return self::$controllers[$this->desiredMenuItem->type];
    }
    
    static function getUrl( $pageId, $recursive = false ){
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
    
    private function paramsToString($params, $argumentName=null){
        $pathParamsString = "";
        foreach($params as $name=>$value){
            if(is_array($value)){
                $pathParamsString .= $this->paramsToString($value, $name);
            }
            else{
                if($argumentName===null){
                    $pathParamsString .= $name.'='.$value.'&';
                }
                else{
                    $pathParamsString .= $argumentName.'['.$name.']'.'='.$value.'&';
                }
            }
        }
        return $pathParamsString;
    }
}
?>
