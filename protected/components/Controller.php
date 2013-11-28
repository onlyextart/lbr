<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
        
        public function init() {
            parent::init();
            $cook = $_COOKIE['region'];
            $def = Yii::app()->params['defaultRegionId'];
            $host = Yii::app()->params['host']; 
            $path = Yii::app()->request->pathInfo;
            $region = $def;
            if(isset($cook) && !strstr($path, 'administrator') && !strstr($path, 'getkp') && !strstr($path, 'users')){
                $domain = Yii::app()->db->createCommand(array(
                    'select' =>'domain',
                    'from' => 'contacts',
                    'where' => 'id=:id',
                    'params' => array(':id'=>$cook),
                ))->queryScalar();
                if($cook!=$def){
                    $region = $cook;
                }
                if('www.'.$domain.'.'.$host != $_SERVER['HTTP_HOST']){
                    Yii::app()->request->redirect('http://www.'.$domain.'.'.$host);     
                }
            }
            Yii::app()->params['regionId'] = $region;
            return true;
        }
}