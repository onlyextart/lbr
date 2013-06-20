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
        //Разбиваем запрос на массив по символу "/" 
        $queryPathArray = explode('/', $pathInfo );
        //"переворачиваем" его для обхода начиная с последнего елемента
        $queryPathArrayReversed = array_reverse( $queryPathArray );
        foreach( $queryPathArrayReversed as $i=>$partOfPath ){
            //находим модели всех пунктов меню в которых поле alias равен части пути
            $menuItemsModel = MenuItems::model()->findAll(
                'alias=:alias AND published=1',
                array(
                    ':alias'=>$partOfPath,
                )
            );
            //Если не найдено ни одной записи
            if( empty($menuItemsModel) ){
                return false; // не применяем данное правило
            }
            
            foreach( $menuItemsModel as $menuItemModel ){
                //если пункт меню корневой, то он является искомой страницей
                if($menuItemModel->level == '1'){
                    $this->desiredMenuItem = $menuItemModel;
                    break;
                }
                //Предки пункта меню
                $ancestors = $menuItemModel->ancestors()->findAll();
                //если первый предок является корневым пунктом меню
                if( $ancestors[0]->level == '1' ){
                    //проверяем соответствие частей пути полям alias соответствующих предков
                    foreach($ancestors as $ancestorNum => $ancestor){
                        if($ancestor->alias !== $queryPathArray[$ancestorNum]){
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
        //Если не найден искомый пункт меню
        if($this->desiredMenuItem === null){
            return false; // не применяем данное правило
        }
        //Сохранияем в параметрах приложения id текущего пункта меню
        Yii::app()->params['currentMenuItem'] = $this->desiredMenuItem;
        return self::$controllers[$this->desiredMenuItem->type];
    }
    
    static function getUrl( $pageId ){
        $menuItemModel = MenuItems::model()->findByPk($pageId);
        if( $menuItemModel !== null ){
            $ancestors = $menuItemModel->ancestors()->findAll();
            $url = "";
            foreach( $ancestors as $ancestor){
                $url .= '/'.$ancestor->alias;
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
