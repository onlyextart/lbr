<?php /* @var $this Controller */ 
$less = new lessc;
$less->compileFile($_SERVER['DOCUMENT_ROOT'].'/css/input.less', $_SERVER['DOCUMENT_ROOT'].'/css/main.css');
?>
<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <?php
        // Добавление css и javascript на страницу сайта
//        Yii::app()->clientScript->registerCssFile('/css/ui/custom-theme/jquery-ui-1.9.2.custom.min.css');
        Yii::app()->clientScript->registerCssFile('/css/main.css');
        // Проверка на наличие Jquery
        Yii::app()->clientScript->registerCoreScript('jquery');
//        Yii::app()->clientScript->registerScriptFile('/js/ui/jquery-ui-1.9.2.custom.min.js');
        Yii::app()->clientScript->registerScriptFile('/js/main.js');
        ?>
        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="<? echo Yii::app()->request->baseUrl;?>/css/ie.css" />
            <script type="text/javascript" src="<? echo Yii::app()->request->baseUrl;?>/js/html5.js"></script>
        <![endif]-->
</head>
<body>
    <header>
        <div class="logo">
            <a href="/">
                <img src="/images/logo.png" title="ЛБР-Агромаркет" alt="Логотип ЛБР-Агромаркет"/>
            </a>
        </div>
        <div class="menu main">
            <ul class="menuMainTop">
                <li>
                    <a href="/tehnika/">
                        <img src="/images/mainMenuIcon/toppict1.png" alt="Сельскохозяйственная техника">
                        <span>Сельскохозяйственная</span>
                    </a>
                </li>
                <li>
                    <a href="/strtehnika/">
                        <img src="/images/mainMenuIcon/toppict4.png" alt="Строительная техника">
                        <span>Строительная</span>
                    </a>
                </li>
                <li>
                    <a href="/komtehnika/">
                        <img src="/images/mainMenuIcon/toppict5.png" alt="Коммунальная техника">
                        <span>Коммунальная</span>
                    </a>
                </li>
                <li>
                    <a href="/zapchasty/">
                        <img src="/images/mainMenuIcon/toppict2.png" alt="Запасные части">
                        <span>Запчасти</span>
                    </a>
                </li>
                <li>
                    <a href="/service/">
                        <img src="/images/mainMenuIcon/toppict3.png" alt="Сервисное обслуживание">
                        <span>Сервис</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="menu second">
            <ul class="menuStaticTop">
                <li>
                    <a href="/company/" title="О компании">ЛБР</a>
                </li>
                <li>
                    <a href="/company/vacancy/" title="Карьера">Карьера</a>
                </li>
                <li>
                    <a href="/search/" title="Поиск по сайту">Поиск</a>
                </li>
                <li>
                    <a href="/users/login/" title="Вход на сайт"><? echo Yii::app()->user->isGuest? "Вход":"Выход"; ?></a>
                </li>
            </ul>
        </div>
        <div class="map">
            <a href="/company/contacts/">
                <span>Агромаркеты</span>
                <img src="/images/map.jpg" title="Контакты ЛБР-Агромаркет" alt="ЛБР-Агромаркет контакты"/>
            </a>
        </div>
    </header>
    <style>
        .main_menu_wrapper{
            width:100%;
        }
        .main_menu_wrapper ul{
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .main_menu_first_level{
            margin-left:200px;
            width: 800px;
            height:20px;
        }
        .main_menu_second_level{
            position: relative;
            background: -moz-linear-gradient(top, #ffffff, #ededed);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(100%,#ededed));
            background: -webkit-linear-gradient(top, #ffffff, #ededed);
            background: -o-linear-gradient(top, #ffffff, #ededed);
            background: -ms-linear-gradient(top, #ffffff, #ededed);
            background: linear-gradient(top, #ffffff, #ededed);
        }
        .main_menu_second_level:after{
            content:"";
            display: table;
            clear:both;
        }
        .main_menu_second_level:before{
            content:"";
            position: absolute;
            top:0;
            left:0;
            height:100%;
            width:100%;
            background: url('/images/top-line.png') no-repeat center 100px;
            opacity: 0.5;
        }
        .main_menu_first_level li{
            float: left;
            height:20px;
            margin: 0px;
            padding: 0px 15px;
        }
        .main_menu_second_level li{
            float: left;
            margin: 0px;
            padding: 0 0%;
            width: 12.5%;
            height: 100px;
            position: relative;
        }
        .main_menu_second_level li:hover{
            background: #dfdfdf;
        }
        .main_menu_second_level li span{
            position: absolute;
            top:0;
            opacity: 0;
        }
        .main_menu_second_level a{
            display: block;
            position: relative;
            overflow: hidden;
            height: 100%;
        }
        
        .main_menu_second_level a:after{
            content: '';
            display: block;
            width:100%;
            height:12px;
            background: red;
            position: absolute;
            top: 0px;
            left:0px;
        }
        
        /*TODO check necessary*/
        .main_menu_second_level li img{
            position: absolute;
            z-index: 10;
            display: block;
            bottom:-7px;
        }
        .main_menu_second_level li img:hover{
            top: 7px;
        }
        
        .main_menu_wrapper:after{
            content:"";
            display: table;
            clear:both;
        }
        
        /* COLOR GROUPS */
        .group_combains a:after{
            background: #d3a809;
        }
        .group_tractors a:after{
            background: #ed1d24;
        }
        .group_telescop a:after{
            background: #ffcb05;
        }
        .group_front a:after{
            background: #b11116;
        }
        .group_pochvoob a:after{
            background: #009bdf;
        }
        .group_korma a:after{
            background: #8dc63f;
        }
        /* END COLOR GROUPS */
    </style>
    <div class="wrapper">
        <div class="main_menu_wrapper">
            <div class="main_menu_first_level">
                <ul>
                    <li>
                        <a href="#">По типу машин</a>
                    </li>
                    <li>
                        <a href="#">Новости вашего региона</a>
                    </li>
                    <li>
                        <a href="#">Специальные предложения</a>
                    </li>
                </ul>
            </div>
            <div class="main_menu_second_level">
                <ul>
                    <li class="group_combains">
                        <a href="#">
                            <img src="/images/menuIcons/kombainsIcon.png" >
                            <span>Комбайны</span>
                        </a>
                    </li>
                    <li class="group_tractors">
                        <a href="#">
                            <img src="/images/menuIcons/tractorsIcon.png" >
                            <span>Тракторы</span>
                        </a>
                    </li>
                    <li class="group_telescop">
                        <a href="#">
                            <img src="/images/menuIcons/teleskopIcon.png" >
                            <span>Телескопические погрузчики</span>
                        </a>
                    </li>
                    <li class="group_front">
                        <a href="#">
                            <img src="/images/menuIcons/pogrTractIcon.png" >
                            <span>Тракторные погрузчики</span>
                        </a>
                    </li>
                    <li class="group_pochvoob">
                        <a href="#">
                            <img src="/images/menuIcons/shirokozahvatIcon.png" >
                            <span>Широкозахватные технологии</span>
                        </a>
                    </li>
                    <li class="group_pochvoob">
                        <a href="#">
                            <img src="/images/menuIcons/classicIcon.png" >
                            <span>Классические технологии</span>
                        </a>
                    </li>
                    <li class="group_pochvoob">
                        <a href="#">
                            <img src="/images/menuIcons/propashIcon.png" >
                            <span>Пропашные культуры</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/images/menuIcons/kombainsIcon.png" >
                            <span>Комбайны</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/images/menuIcons/kombainsIcon.png" >
                            <span>Комбайны</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/images/menuIcons/kombainsIcon.png" >
                            <span>Комбайны</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/images/menuIcons/kombainsIcon.png" >
                            <span>Комбайны</span>
                        </a>
                    </li>
                    <li class="group_korma">
                        <a href="#">
                            <img src="/images/menuIcons/kormorazdIcon.png" >
                            <span>Кормораздатчики и мини комбикормовые заводы</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/images/menuIcons/kombainsIcon.png" >
                            <span>Комбайны</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/images/menuIcons/kombainsIcon.png" >
                            <span>Комбайны</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/images/menuIcons/kombainsIcon.png" >
                            <span>Комбайны</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/images/menuIcons/kombainsIcon.png" >
                            <span>Комбайны</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="main_menu_third_level">
                
            </div>
        </div>
        <?php echo $content; ?>
    </div>
    <footer>
        <div class="f-left">
            <img src="/images/logo-foot.gif" alt="Лого подвал ЛБР-Агромаркет" title="Логотип ЛБР-Агромаркет" />
        </div>
        <div class="f-center">
            <a href="http://www.webcom-media.ru/">Продвижение сайта</a> - <a href="http://www.webcom-media.ru"> Webcom Media<sup>®</sup></a>
        </div>
        <div class="f-right">
            
        </div>
    </footer>
</body>
</html>
