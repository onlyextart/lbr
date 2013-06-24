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
    <div class="wrapper">
        <?php echo $content;  ?>
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
