<?php

class AdministratorModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'administrator.models.*',
			'administrator.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			// Шаблон модуля administrator (modules/administrator/views/layouts/main.php
                        $controller->layout = 'main';
                        // Добавление css и javascript на страницу админки
                        Yii::app()->clientScript->registerCssFile('/css/ui/custom-theme/jquery-ui-1.9.2.custom.css');
                        Yii::app()->clientScript->registerCssFile('/css/admin/admin.css');
                        Yii::app()->clientScript->registerCssFile('/css/alertify/alertify.core.css');
                        Yii::app()->clientScript->registerCssFile('/css/alertify/alertify.default.css');
                        // Проверка на наличие Jquery
                        Yii::app()->clientScript->registerCoreScript('jquery');
                        Yii::app()->clientScript->registerScriptFile('/js/ui/jquery-ui-1.10.1.admin.min.js');
                        Yii::app()->clientScript->registerScriptFile('/js/alertify.min.js');
                        Yii::app()->clientScript->registerScriptFile('/js/admin/admin.js');
                        
                        if(Yii::app()->user->isGuest){
                            Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
                            Yii::app()->request->redirect('/users/login/');
                        }
                        else{
                            return true;
                        }
		}
		else
			return false;
	}
}