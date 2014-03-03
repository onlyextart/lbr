<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <link href="http://www.lbr.ru/css/kp.css" type="text/css" rel="stylesheet" />
        <title></title>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div class="left-75 header-text">
                    <span class="header-2"><? echo $data['header']; ?> </span></div>
                <div class="right-20">
                    <img src="http://www.lbr.ru/images/kp/logo.jpg" alt="Logo" style="border: 0;"/>
                </div>
            </div>
            <div class="one-page head-first-page">
                <div class="content-page" style="padding: 20px 20px 10px;">
                    <img src="http://www.lbr.ru/images/kp/rostokes.png" style="position: absolute; z-index: 1; top: 4px; left: 15px;"/>
                    <span class="bg-orange-header" style="width: 95%; text-align: right; font-size: 48px;">
                        СИЛА ТЕХНОЛОГИЙ!<br>GASPARDO
                    </span>
                    <span class="second-header-text" style="font-size: 38px;">
                        ПРОФЕССИОНАЛЬНЫЙ СЕВ<br>
                        ПРОПАШНЫХ КУЛЬТУР<br>
                        ПО-ЕВРОПЕЙСКИ
                    </span>
                </div>
                 <div style="text-align: justify;">
                <?php
	$finance_block = $data['finance_block'];
        if ($finance_block=='1')
        {
            $this->renderPartial('finance_zont', array('finance_block_text'=>$data['finance_block_text']));
        }
?>
                </div>
            </div>
            <div class="one-page body-first-page">
                <div class="content-page" style="padding-bottom: 10px;">
                    <div class="head-content">
                        <div class="h-2 left-75" style="line-height: 28px; font-size: 18px;"><span>Навесная пневматическая сеялка точного высева SP 8</span></div>
                        <div class="logo-maker right-25"><img src="http://www.lbr.ru/images/kp/gaspardo-logo.jpg" border="0" /></div>
                    </div>
                    <div class="body-content">
                        <div class="width-100 image">
                            <img src="http://www.lbr.ru/images/kp/gaspardo-1.jpg" style="width:100%" border="0" />
                        </div>
                        <div class="left-50">
                            <span class="text" style="margin: 5px 0 0;">
                                Сеялка <b>SP DORADA</b> – новое поколение высокоточных универсальных сеялок.
                            </span>
                            <span class="text" style="margin: 5px 0 0;">
                                Сеялка сочетает в себе две важных концепции: <b>МОДУЛЬНОСТИ и ПРОСТОТЫ</b>, как с конструктивной точки зрения, так и 
                                с точки зрения практичности использования. Одно из дополнительных преимуществ – это богатая комплектация.
                            </span>
                            <span class="text" style="margin: 5px 0 0;">
                                Агрегатируются с МТЗ 82 с комплектом усиления навески или МТЗ 1221
                            </span>
                            <table width="380" style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; font-size: 14px; margin-top: 5px;" align="left" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1">
                                <tbody>
                                    <tr>
                                        <td width="60%"><span>Модель</span></td>
                                        <td><span>SP 8 DORADA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Количество рядов, шт.</span></td>
                                        <td><span>8</span></td>

                                    </tr>
                                    <tr>
                                        <td><span>Междурядное расстояние, см </span></td>
                                        <td><span>70</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Высевающий аппарат</span></td>
                                        <td><span>Анкерный типа SP</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Цена с НДС</span></td>
                                        <td><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price1']; ?></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="right-50 image" style="text-align: right;">
                            <img src="http://www.lbr.ru/images/kp/gaspardo-2.jpg" style="width: 92%" border="0" />
                        </div>
                    </div>
                    <div class="footer-content"></div>
                </div>
            </div>
            <div class="page-break"></div>
            <div class="after-page-break"></div>
            <div class="one-page body-page">
                <div class="content-page">
                    <div class="one-item">
                        <div class="head-content">
                            <div class="h-2 left-75" style="line-height: 28px; font-size: 18px;"><span>Навесная пневматическая сеялка точного высева МТ 8</span></div>
                            <div class="logo-maker right-25"><img src="http://www.lbr.ru/images/kp/gaspardo-logo.jpg" border="0" /></div>
                        </div>
                        <div class="body-content">
                            <div class="width-100 image">
                                <img src="http://www.lbr.ru/images/kp/gaspardo-3.jpg" style="width:100%" border="0" />
                            </div>
                            
                            <div class="left-50">
                            <table width="360" style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; font-size: 14px; margin-top: 25px;" align="left" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1">
                                <tbody>
                                    <tr>
                                        <td width="60%"><span>Модель</span></td>
                                        <td><span>МТ 8</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Количество рядов, шт.</span></td>
                                        <td><span>8</span></td>

                                    </tr>
                                    <tr>
                                        <td><span>Междурядное расстояние, см </span></td>
                                        <td><span>70</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Высевающий аппарат </span></td>
                                        <td><span>Дисковый</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Цена с НДС</span></td>
                                        <td><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price2']; ?></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="right-50">
                            <span class="text" style="margin: 5px 0 0;">
                                Сеялка <b>MT  8</b> –  новое  поколение  высокоточных  профессиональных  сеялок.  Фундаментально  важная  концепция <b>МОДУЛЬНОСТИ</b> в модели MT 8 была развита и дополнена концепцией <b>ПРОСТОТЫ</b>, как с конструктивной точки зрения, так 
                                и с точки зрения практичности использования.
                            </span>
                            <span class="text" style="margin: 5px 0 0;">
                                Агрегатируются с МТЗ 82 с комплектом усиления навески или МТЗ 1221
                            </span>
                        </div>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="info-block" style="padding-bottom: 10px;">
                            <span>
                                Всю подробную информацию по заинтересовавшим Вас моделям техники, а также опыт эксплуатации и отзывы потребителей Вы сможете получить у Вашего персонального менеджера.
                            </span>
                        </div>
                        <div class="filial">
                            <span>Ждем Вас в филиале ЛБР-АгроМаркет (<b><? echo $filial['name']; ?></b>)!</span>
                            <span><? echo $filial['work_time']; ?></span>
                            <span><? echo $filial['address']; ?></span>
                            <span><? echo $filial['telephone']; ?></span>
                        </div>
                        <div class="user">
                            <span>Ваш персональный менеджер:</span>
                            <span>
                                <? echo $data['user_info']; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>