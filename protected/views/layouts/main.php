<?php 
/* @var $this Controller */ 
$less = new lessc;
$less->compileFile($_SERVER['DOCUMENT_ROOT'].'/css/input.less', $_SERVER['DOCUMENT_ROOT'].'/css/main.css');
?>

<!DOCTYPE html>
<html>
    <head>
        <base href="/">
        <meta name="format-detection" content="telephone=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta content="all" name="robots">
        <meta content="dynamic" name="document-state">
        <meta content="2 days" name="revisit-after">
        <meta content="Global" name="distribution">
        <meta http-equiv="pragma" content="no-cache">
        <meta name="cmsmagazine" content="6b789e24d2d8a2491fc5c5b10c8c99a5">
        <?php if(Yii::app()->params['currentMenuItem']->meta_keywords): ?>
            <meta name="keywords" content="<?php echo Yii::app()->params['currentMenuItem']->meta_keywords; ?>">
        <?php endif; ?>
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
                     <div class="select-region">
                        <div class="you-region">
                            <span>Ваш регион:</span>
                        </div>
                        <div class="selected-region">
                            <div id="show_regions_table_button_wrapper">
                                <a id="show_regions_table_button" title="Не выбран">Не выбран</a>
                            </div>
                            <a class="arrow-wrapper"><span id="show_regions_table_button_arrow" class="arrow"></span></a>
                        </div>
                     </div>
                </div>
            </div>
            <div class="menu main">
                <ul class="menuMainTop">
                    <?php $href='selskohozyaystvennaya-tehnika'; ?>
                    <li <?php if(is_numeric(strpos( mb_strtolower(Yii::app()->request->requestUri), $href)) || 
                            (Yii::app()->request->cookies['rootmenualias']->value =='selskohozyaystvennaya-tehnika' && Yii::app()->params['currentMenuItem']->level==5)) echo 'class="active"' ?> >
                        <a href="/selskohozyaystvennaya-tehnika/type/">
                            <img src="/images/mainMenuIcon/toppict1.png" alt="Сельскохозяйственная техника">
                            <span>Сельхоз техника</span>
                        </a>
                    </li>
                    <?php $href='stroitelnaya-tehnika'; ?>
                    <!--<li <?php if(is_numeric(strpos( mb_strtolower(Yii::app()->request->requestUri), $href)) || 
                            (Yii::app()->request->cookies['rootmenualias']->value =='stroitelnaya-tehnika' && Yii::app()->params['currentMenuItem']->level==5)) echo 'class="active"' ?> >
                        <a href="/stroitelnaya-tehnika/type/">
                            <img src="/images/mainMenuIcon/toppict4.png" alt="Строительная техника">
                            <span>Строительная техника</span>
                        </a>
                    </li>
                    <?php $href='komunalnaya-tehnika'; ?>
                    <li <?php if(is_numeric(strpos( mb_strtolower(Yii::app()->request->requestUri), $href)) || 
                            (Yii::app()->request->cookies['rootmenualias']->value =='komunalnaya-tehnika' && Yii::app()->params['currentMenuItem']->level==5)) echo 'class="active"' ?> >
                        <a href="/komunalnaya-tehnika/type/">
                            <img src="/images/mainMenuIcon/toppict5.png" alt="Коммунальная техника">
                            <span>Коммунальная техника</span>
                        </a>
                    </li>-->
                    <li>
                        <a href="http://www.lbr.nichost.ru/spareparts/?c=83">
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
                        <a href="/company/" title="О компании">О компании</a>
                    </li>
                    <li>
                        <a href="http://carrer.git-lbr.ru/" title="Вакансии">Вакансии</a>
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
                    <span>Контакты</span>
                    <img src="/images/map.jpg" title="Контакты ЛБР-Агромаркет" alt="ЛБР-Агромаркет контакты"/>
                </a>
            </div>
            <? if (Yii::app()->params['currentMenuItem']->level==1){?>
                <div id="top_banner"><p>Более <span>2 тысяч</span> единиц техники на <span>22 площадках</span> по всей россии. <span>100 тысяч</span> позиций запасных частей в наличии.</p></div>
            <?}?>
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
            <div class="breadcrumbs">
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links'=>Yii::app()->params['breadcrumbs'],
                        'activeLinkTemplate'=>'<span typeof="v:Breadcrumb"><a property="v:title" rel="v:url" href="{url}">{label}</a></span>',
                        'inactiveLinkTemplate'=>'{label}',
                        'homeLink'=>'<span typeof="v:Breadcrumb"><a property="v:title" rel="v:url" href="/">Главная</a></span>',
                        'tagName'=>'span',
                        'htmlOptions'=>array(
                            'xmlns:v'=>'http://rdf.data-vocabulary.org/#',
                        ),
                )); ?><!-- breadcrumbs -->
            </div>
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
                <ul class="f-nav">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/company/">О компании</a></li>
                    <li><a href="/company/vacancy/">Вакансии</a></li>
                    <li class="parent"><a href="/company/contacts/">Контакты</a></li>
                    <li><a href="/sitemap/">Карта сайта</a></li>
                </ul>
            </div>
        </footer>
        <?php $this->widget('ext.adminPanelWidget.AdminPanelWidget'); ?>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
        var yaParams = {/*Здесь параметры визита*/};
        </script>

        <div style="display:none;">

        <script type="text/javascript">
        (function(w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter13203052 = new Ya.Metrika({id:13203052, enableAll: true, webvisor:true,params:window.yaParams||{ }});
                }
                catch(e) { }
            });
        })(window, "yandex_metrika_callbacks");
        </script>
        </div>
        <script src="http://mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
        <noscript><div><img src="//mc.yandex.ru/watch/13203052" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        <!-- Google Code for &#1058;&#1077;&#1075; &#1088;&#1077;&#1084;&#1072;&#1088;&#1082;&#1077;&#1090;&#1080;&#1085;&#1075;&#1072; -->
        <!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 937148831;
        var google_conversion_label = "3KwoCLnvnwUQn4PvvgM";
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/937148831/?value=0&amp;label=3KwoCLnvnwUQn4PvvgM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>
    </body>
</html>