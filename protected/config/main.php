<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'LBR',
    'sourceLanguage' => 'ru',
    'timeZone' => 'Europe/Minsk',
    'language' => 'ru',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.extensions.*',
        'application.controllers.*',
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool
//        'gii' => array(
//            'class' => 'system.gii.GiiModule',
//            'password' => 'admin',
//            // If removed, Gii defaults to localhost only. Edit carefully to taste.
//            'ipFilters' => array('127.0.0.1', '::1', '*'),
//        ),
        'administrator',
        'users',
    ),
    // application components
    'components' => array(
        'ePdf' => array(
            'class' => 'ext.yii-pdf.EYiiPdf',
            'params' => array(
                'mpdf' => array(
                    'librarySourcePath' => 'application.extensions.mpdf.*',
                    'constants' => array(
                        '_MPDF_TEMP_PATH' => Yii::getPathOfAlias('application.runtime'),
                    ),
                'class' => 'mpdf', // Для некоторых "регистрочувствительных" систем
                /* 'defaultParams'     => array( // Детальней: http://mpdf1.com/manual/index.php?tid=184
                  'mode'              => '', //  This parameter specifies the mode of the new document.
                  'format'            => 'A4', // format A4, A5, ...
                  'default_font_size' => 0, // Sets the default document font size in points (pt)
                  'default_font'      => '', // Sets the default font-family for the new document.
                  'mgl'               => 15, // margin_left. Sets the page margins for the new document.
                  'mgr'               => 15, // margin_right
                  'mgt'               => 16, // margin_top
                  'mgb'               => 16, // margin_bottom
                  'mgh'               => 9, // margin_header
                  'mgf'               => 9, // margin_footer
                  'orientation'       => 'P', // landscape or portrait orientation
                  ) */
                ),                
            ),
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'session' => array(
            'timeout' => 32400, // 9 часов
            'class' => 'system.web.CDbHttpSession',
            'connectionID' => 'db',
            'sessionTableName' => 'lbr_session',
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            //'caseSensitive'=>false,
            'rules' => array(
                '<_m:users>/<_a:(login|logout)>' => 'users/default/<_a>',
                '<_a:sitemap>' => 'site/<_a>/',
                //'company/events/*'=>'news/index',
                //'company/events/page-<page:\d+>'=>'news/index',
                //'<controller>/<action>/<page:\d+>/*'=>'<controller>/<action>',
                //'company/events' => '',
                //'<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',
//				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
//				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
//				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
//                                ''=>'xbanner/index',
                array(
                    'class' => 'application.components.CategoryUrlRule',
                    'connectionID' => 'db',
                ),
            ),
        ),
        'db' => array(
            'class' => 'CDbConnection',
            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/lbr.db',
            'initSQLs' => array(
                'PRAGMA foreign_keys = ON',
            ),
            // включаем профайлер
            'enableProfiling' => true,
            // показываем значения параметров
            'enableParamLogging' => true,
        ),
        'db_auth' => array(
            'class' => 'CDbConnection',
            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../../../data/auth.db',
            'initSQLs' => array(
                'PRAGMA foreign_keys = ON',
            ),
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
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CWebLogRoute', 'levels' => 'trace, info, error, warning',
                ),
                array(
                    'class' => 'CFileLogRoute', 'levels' => 'trace, info, error, warning',
                ),
            )
        ),
        'preload' => array('log'),
        'authManager' => array(
            'class' => 'CDbAuthManager',
            'connectionID' => 'db',
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@lbr.ru',
        'defaultRegionId' => 0,
        'regionId' => 0,
        'superGroup' => 1,
        'host' => 'lbr.ru',
        //'host'=>'lbr.test',
        'menuadmin' => array(
            'Меню' => array(
                'Меню' => '/administrator/menu/',
                'Группы меню' => '/administrator/menu/groups',
                'Карта сайта XML' => '/administrator/menu/sitemap',
                'Карта сайта Html / Excel' => '/administrator/map/',
            ),
            'Каталог' => array(
                'Каталог' => '/administrator/banners/',
                'Производители' => '/administrator/makers/',
                'Страницы товаров' => '/administrator/products/',
                'Технологический цикл' => '/administrator/tehcikl/',
            ),
            'Пользователи' => array(
                'Пользователи' => '/administrator/users/',
                'Группы пользователей' => '/administrator/users/group/',
                'Роли' => '/administrator/users/role/',
                'Операции' => '/administrator/users/operation/'
            ),
            'Новости' => '/administrator/news/',
            'Контакты' => array(
                'Контакты' => '/administrator/contacts/',
                'Регионы' => '/administrator/regions/',
            ),
            'Разные страницы' => '/administrator/pages/',
            'Сайт' => array(
                'Аналитика' => '/administrator/analitics/',
                'Поисковые запросы' => '/administrator/search/',
                'Индексирование страниц' => '/administrator/search/indexing/',
                'Топ запросов' => '/administrator/search/top/'
            ),
            'Акции' => '/administrator/akcii/',
            'КП' => array(
                'КП' => '/administrator/templateKp/',
                'Шаблоны' => '/administrator/template/',
            ),
        ),
        'breadcrumbs' => array(),
        'districts' => array(
            '0' => 'Дальневосточный федеральный округ',
            '1' => 'Приволжский федеральный округ',
            '2' => 'Северо-Западный федеральный округ',
            '3' => 'Северо-Кавказский федеральный округ',
            '4' => 'Сибирский федеральный округ',
            '5' => 'Уральский федеральный округ',
            '6' => 'Центральный федеральный округ',
            '7' => 'Южный федеральный округ',
        ),
        'meta_title' => '',
        'meta_description' => '',
        'meta_keywords' => '',
        'meta_pagerNext' => '',
        'meta_pagerPrev' => ''
    ),
);
