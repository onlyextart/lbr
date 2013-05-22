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
                        return true;
		}
		else
			return false;
	}
}
