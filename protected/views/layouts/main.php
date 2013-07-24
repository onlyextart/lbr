<?php /* @var $this Controller */ 
//$less = new lessc;
//$less->compileFile($_SERVER['DOCUMENT_ROOT'].'/css/input.less', $_SERVER['DOCUMENT_ROOT'].'/css/main.css');
?>
<!DOCTYPE html >
<html>
<head>
        <meta name="format-detection" content="telephone=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="all" name="robots">
        <meta content="dynamic" name="document-state">
        <meta content="2 days" name="revisit-after">
        <meta content="Global" name="distribution">
        <meta http-equiv="pragma" content="no-cache">
        <?php if(Yii::app()->params['currentMenuItem']->meta_keywords){ ?>
            <meta name="keywords" content="<?php echo Yii::app()->params['currentMenuItem']->meta_keywords; ?>">
        <? } ?>
        <meta name="description" content="<?php echo Yii::app()->params['currentMenuItem']->meta_description; ?>">
	<title><?php echo Yii::app()->params['currentMenuItem']->meta_title; ?></title>
        
        <?php
        // Добавление css и javascript на страницу сайта
//        Yii::app()->clientScript->registerCssFile('/css/ui/custom-theme/jquery-ui-1.9.2.custom.min.css');
        Yii::app()->clientScript->registerCssFile('/css/main.css');
        // Проверка на наличие Jquery
        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->clientScript->registerScriptFile('/js/site/main.js');
        ?>
        <!--[if IE]>
            <script type="text/javascript" src="<? echo Yii::app()->request->baseUrl;?>/js/html5.js"></script>
        <![endif]-->
        <!--[if lt IE 9]>
            <script type="text/javascript" src="<? echo Yii::app()->request->baseUrl;?>/js/selectivizr-min.js"></script>
            <link rel="stylesheet" type="text/css" href="<? echo Yii::app()->request->baseUrl;?>/css/ie.css" />
        <![endif]-->
</head>
<body>
    <header>
        <div class="logo">
            <a href="/">
                <img src="/images/logo.png" title="ЛБР-Агромаркет" alt="Логотип ЛБР-Агромаркет"/>
            </a>
            <div class="region">
                 <p style="font-size: 13px; font-weight: bold; margin-top: 0px;"> Ваш регион: <span class="contact-top-span">
                 <a href="/contacts/getregionstable/" id="show_regions_table_button">Не выбран</a></span></p>
                 <script>
                    $(function(){
                        $('#show_regions_table_button').click(function(e){
                            e.preventDefault();
                            $.ajax({
                                url:$(this).attr('href'),
                                type:'POST',
                                data:{requesrUri:"<?php echo Yii::app()->request->requestUri; ?>"},
                                success:function(data){
                                    $('body').append($(data));
                                },
                                error:function(){
                                    alert('Ошибка запроса к серверу.');
                                }
                            });
                        });
                        $(document).on('click', '.regions_table_cover', function(){
                            $(this).remove();
                            $('.regions_table_wrapper').remove();
                        });
                    });
                 </script>
                           
        </div>
        </div>
        <div class="menu main">
            <ul class="menuMainTop">
                <?php $href='selskohozyaystvennaya-tehnika'; ?>
                <li <?php if(is_numeric(strpos( mb_strtolower(Yii::app()->request->requestUri), $href)) || 
                        (Yii::app()->request->cookies['rootmenualias']->value =='selskohozyaystvennaya-tehnika' && Yii::app()->params['currentMenuItem']->level==5)) echo 'class="active"' ?> >
                    <a href="/selskohozyaystvennaya-tehnika/">
                        <img src="/images/mainMenuIcon/toppict1.png" alt="Сельскохозяйственная техника">
                        <span>Сельхоз техника</span>
                    </a>
                </li>
                <?php $href='stroitelnaya-tehnika'; ?>
                <li <?php if(is_numeric(strpos( mb_strtolower(Yii::app()->request->requestUri), $href)) || 
                        (Yii::app()->request->cookies['rootmenualias']->value =='stroitelnaya-tehnika' && Yii::app()->params['currentMenuItem']->level==5)) echo 'class="active"' ?> >
                    <a href="/stroitelnaya-tehnika/">
                        <img src="/images/mainMenuIcon/toppict4.png" alt="Строительная техника">
                        <span>Строительная техника</span>
                    </a>
                </li>
                <?php $href='komunalnaya-tehnika'; ?>
                <li <?php if(is_numeric(strpos( mb_strtolower(Yii::app()->request->requestUri), $href)) || 
                        (Yii::app()->request->cookies['rootmenualias']->value =='komunalnaya-tehnika' && Yii::app()->params['currentMenuItem']->level==5)) echo 'class="active"' ?> >
                    <a href="/komunalnaya-tehnika/">
                        <img src="/images/mainMenuIcon/toppict5.png" alt="Коммунальная техника">
                        <span>Коммунальная техника</span>
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
        <?php $this->widget('ext.mainMenuWidget.MainMenuWidget'); ?>
        <?php echo $content; ?>
        <?php $this->widget('ext.recentNewsWidget.RecentNewsWidget', array()); ?>
        <? if (Yii::app()->params['currentMenuItem']->seo_text){?>
        <div class="bottom-text">
            <div><? echo Yii::app()->params['currentMenuItem']->seo_text;?></div>
            <span class="bottom-more">Подробнее...</span>
        </div>
        <?}?>
        <?php if(!empty(Yii::app()->params['breadcrumbs']) && Yii::app()->params['currentMenuItem']->level!=1):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>Yii::app()->params['breadcrumbs'],
		)); ?><!-- breadcrumbs -->
	<?php endif?>
    </div>
    <footer>
        <div class="f-left">
            <img src="/images/logo-foot.gif" alt="Лого подвал ЛБР-Агромаркет" title="Логотип ЛБР-Агромаркет" />
        </div>
        <div class="f-center">
            <?php if(Yii::app()->params['currentMenuItem']->level==1){ ?>
            <a href="http://www.webcom-media.ru/">Продвижение сайта</a> - <a href="http://www.webcom-media.ru"> Webcom Media<sup>®</sup></a>
            <?php }
            else{ ?>
            <a href="http://www.webcom-media.ru"> Webcom Media<sup>®</sup></a>
            <?php } ?>
        </div>
        <div class="f-right">
            
        </div>
    </footer>
</body>
</html>
