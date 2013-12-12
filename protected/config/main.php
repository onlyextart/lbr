<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'LBR',
        'sourceLanguage' => 'ru',
        'language' => 'ru',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1','*'),
		),
                'administrator',
                'users',
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName'=>false,
			'rules'=>array(
                                '<_m:users>/<_a:(login|logout)>' => 'users/default/<_a>',
                                '<_a:sitemap>' => 'site/<_a>/',
                                //'company/events/page/<page:\d+>/*'=>'news/index',
                            
                                //'<controller>/<action>/<page:\d+>/*'=>'<controller>/<action>',
                            
                                
                                //'company/events' => '',
                                //'<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',
                                
//				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
//				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
//				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
//                                ''=>'xbanner/index',
                            
                                array(
                                    'class'=>'application.components.CategoryUrlRule',
                                    'connectionID'=> 'db',
                                ),
			),
		),
		
		'db'=>array(
                        'class'=>'CDbConnection',
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/lbr.db',
                        'initSQLs'=>array(
                            'PRAGMA foreign_keys = ON',
                        ),
                        // включаем профайлер
                        'enableProfiling'=>true,
                        // показываем значения параметров
                        'enableParamLogging' => true,
		),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
                    'class'=>'CLogRouter',
                    'routes'=>array(
                      array(
                        'class'=>'CWebLogRoute',  'levels'=>'trace, info, error, warning',
                      ),
                      array(
                        'class'=>'CFileLogRoute',  'levels'=>'trace, info, error, warning',
                      ),
                    )
                  ),
                'preload'=>array('log'),
                'authManager'=>array(
                    'class'=>'CDbAuthManager',
                    'connectionID'=>'db',
                ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail' => 'webmaster@lbr.ru',
                'defaultRegionId' => 0,
                'regionId' => 0,
                'superGroup' => 1,
                'host'=>'git-lbr.ru',
                'menuadmin'=>array(
                    'Меню'=>array(
                        'Меню'=>'/administrator/menu/',
                        'Группы меню'=>'/administrator/menu/groups',
                        'Карта сайта'=>'/administrator/menu/sitemap',
                        'Карта сайта Html'=>'/administrator/map/',
                    ),
                    'Каталог'=>array(
                        'Каталог'=>'/administrator/banners/',
                        'Производители'=>'/administrator/makers/',
                        'Страницы товаров'=>'/administrator/products/',
                    ),
                    'Пользователи'=>array(
                        'Пользователи'=>'/administrator/users/',
                        'Группы пользователей'=>'/administrator/users/group/',
                        'Роли'=>'/administrator/users/role/',
                        'Операции'=>'/administrator/users/operation/'
                    ),
                    'Новости'=>'/administrator/news/',
                    'Контакты'=>array(
                        'Контакты'=>'/administrator/contacts/',
                        'Регионы'=>'/administrator/regions/',
                    ),
                    'Разные страницы'=>'/administrator/pages/',
                    'Поиск'=>array(
                        'Поисковые запросы'=>'/administrator/search/',
                        'Индексирование страниц'=>'/administrator/search/indexing/',
                        'Топ запросов'=>'/administrator/search/'
                    ),
                    'КП'=>array(
                        'КП'=>'/administrator/templateKp/',
                        'Шаблоны'=>'/administrator/template/',
                        ),
                        
                 ),   
                'breadcrumbs'=>array(),
                'districts'=>array(
                    '0'=>'Дальневосточный федеральный округ',
                    '1'=>'Приволжский федеральный округ',
                    '2'=>'Северо-Западный федеральный округ',
                    '3'=>'Северо-Кавказский федеральный округ',
                    '4'=>'Сибирский федеральный округ',
                    '5'=>'Уральский федеральный округ',
                    '6'=>'Центральный федеральный округ',                           
                    '7'=>'Южный федеральный округ',
               ),
	),
);
