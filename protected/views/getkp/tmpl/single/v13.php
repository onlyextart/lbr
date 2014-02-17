<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" style="min-height: 100%">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><? echo $template->title; ?></title>
    </head>
    <body style="min-height: 100%;">
        <!-- HEADER START -->
        <table width="638" style="border-collapse: collapse; border-bottom: 4px solid #d1232a" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
            <tr>
                <td>
                    <table  style="border-collapse: collapse;" width="638" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
                        <tbody>
                            <tr>
                                <td><span style="color: #6e7071; background: none !important; font-size: 16px; font-weight: normal; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;"><? echo $data['header']; ?> </span></td>
                                <td width="160" align="right"><span style="text-decoration: none;"><a style="text-decoration: none;" href="http://www.lbr.ru/" target="_blank"><img src="http://www.lbr.ru/images/kp/logo.jpg" alt="Логотип ЛБР-Агромаркет" width="150" height="100" border="0" /></a></span></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
        <!-- HEADER END -->
        <!-- TOP BLOCK START -->
        <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px;">
            <tr>
                <td colspan="3" align="right"><img src="http://www.lbr.ru/images/kp/10.gif" width="10" height="10" style="display: block;"/></td>
            </tr>
            <tr>
                <td align="left" width="22"><img src="http://www.lbr.ru/images/kp/left-orange.jpg" width="22" height="75" border="0" style="display: block;"></td>
                <td align="left" bgcolor="#f68121" width="594">
                    <span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 26px; color: white; font-weight: 900;">СУШКА И ЛОГИСТИКА <br>ХРАНЕНИЯ</span>
                </td>
                <td align="right" width="22"><img src="http://www.lbr.ru/images/kp/right-orange.jpg" width="22" height="75" border="0" style="display: block;"></td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 40px; line-height: 48px; color: rgb(211, 35, 42); font-weight: 900;">КУКУРУЗУ И СЕМЕЧКУ<br>СУШИМ САМИ!!!</span>
                </td>
            </tr>
            <tr><td colspan="3">
        <?php
	$finance_block = $data['finance_block'];
        if ($finance_block=='1')
        {
            $this->renderPartial('finance_block', array('finance_block_text'=>$data['finance_block_text']));
        }
?>
        </td></tr>
        </table>
        <!-- TOP BLOCK END -->
        <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; margin: 10px auto; box-shadow: 0 0 10px rgb(200,200,200); border-radius: 25px;">
            <tr align="center">
                <td><img src="http://www.lbr.ru/images/kp/10.gif" width="20" height="20" style="display: block;"/></td>
            </tr>
            <tr align="center">
                <td><span  style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 20px; color: rgb(211, 35, 42); font-weight: 900;">РАСЧЕТ ЭКОНОМИЧЕСКОЙ ЦЕЛЕСООБРАЗНОСТИ:</span></td>
            </tr>
            <tr align="left">
                <td><img src="http://www.lbr.ru/images/kp/10.gif" width="10" height="10" style="display: block;"/></td>
            </tr>
            <tr align="left">
                <td style="padding-left: 15px;">
                    <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 14px;">
                        При расчетах используются следующие данные:<br>
                        Сушка и хранение 1000 тонн зерна кукурузы, влажность после уборки 24%, избыточная влажность 10%, избыточная засорен-ность 5%, срок хранения 6 месяцев. 
                    </span>
                </td>
            </tr>
            <tr align="left">
                <td><img src="http://www.lbr.ru/images/kp/10.gif" width="20" height="20" style="display: block;"/></td>
            </tr>
            <tr align="left">
                <td style="padding-left: 15px;"><span  style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 12px; color: black; font-weight: 900;">ЗАТРАТЫ СУШКИ И ХРАНЕНИЕ КУКУРУЗЫ НА ЭЛЕВАТОРЕ (ПО ЦЕНАМ В Г.КРАСНОДАР):</span></td>
            </tr>
            <tr align="left">
                <td><img src="http://www.lbr.ru/images/kp/10.gif" width="7" height="7" style="display: block;"/></td>
            </tr>
            <tr align="left">
                <td style="padding-left: 15px;">
                    <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 14px;">
                        1. Приемка с авто 1 т - 110 руб/т х 1000т. = 110 000 руб.<br>
                        2. Подработка 40 руб. т на 1% х 1000 т х 5% = 200 000 руб.<br>
                        3. Сушка 60 руб. 1% х1000т х 10% = 600 000 руб.<br>
                        4. Хранение 90 р. т/мес. х 1000т х 6 мес. = 540 000 руб.<br>
                        5. Отгрузка автотранспорт 230 р/т х 1000 т = 230 000 руб <br>
                    </span>
                </td>
            </tr>
            <tr align="left">
                <td><img src="http://www.lbr.ru/images/kp/10.gif" width="7" height="7" style="display: block;"/></td>
            </tr>
            <tr align="left">
                <td style="padding-left: 15px;"><span  style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 12px; color: black; font-weight: 900;">ИТОГО ЗАТРАТЫ: 1 680 000 РУБ. (СРОК ХРАНЕНИЯ 6 МЕС.)</span></td>
            </tr>
            <tr align="left">
                <td><img src="http://www.lbr.ru/images/kp/10.gif" width="20" height="20" style="display: block;"/></td>
            </tr>
            <tr align="left">
                <td style="padding-left: 15px;"><span  style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 14px; color: black; font-weight: 900;">ЗАТРАТЫ ПРИ РАБОТЕ НА ОБОРУДОВАНИИ MECMAR:</span></td>
            </tr>
            <tr align="left">
                <td><img src="http://www.lbr.ru/images/kp/10.gif" width="7" height="7" style="display: block;"/></td>
            </tr>
            <tr align="left">
                <td style="padding-left: 15px;">
                    <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 14px;">
                        1.  При условии работы сушилки на дизельном топливе, с расходом 1 литр для сниж. влажности на 1% 32руб./литр х 1000 т х 10% = 320 000 руб.
                        <br>2.  Затраты по электроэнергии составят 9,2 кВт/ч на 1 тонну зерна, при стоимости 6 руб. кВт/ч х 1000 т х 9,2 кВт/ч = 55 000 руб.
                    </span>
                </td>
            </tr>
            <tr align="left">
                <td><img src="http://www.lbr.ru/images/kp/10.gif" width="7" height="7" style="display: block;"/></td>
            </tr>
            <tr align="left">
                <td style="padding-left: 15px;"><span  style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 12px; color: black; font-weight: 900;">ИТОГО ЗАТРАТЫ: 375 000 РУБ.</span></td>
            </tr>
            <tr align="left">
                <td><img src="http://www.lbr.ru/images/kp/10.gif" width="20" height="20" style="display: block;"/></td>
            </tr>
            <tr align="left">
                <td style="padding-left: 15px;"><span  style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 11px; color: rgb(211, 35, 42); font-weight: 900;">ЭКОНОМИЯ НА СУШКЕ И ХРАНЕНИИ У ВАС В ХОЗЯЙСТВЕ СОСТАВИТ ОКОЛО 1 300 000 РУБЛЕЙ!</span></td>
            </tr>
            <tr align="center">
                <td><img src="http://www.lbr.ru/images/kp/10.gif" width="20" height="20" style="display: block;"/></td>
            </tr>
        </table>
        
        <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
            <!-- MAIN BLOCK START -->
            <!-- 1-BLOCK START -->
            <tr>
                <td>
                    <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td>
                                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr>
                                        <td><span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 20px; font-weight: 900;">МОБИЛЬНЫЕ ЗЕРНОСУШИЛКИ MECMAR</span></td>
                                        <td align="right"><img src="http://www.lbr.ru/images/kp/mecmar-logo.jpg" height="25" style="display: block;"/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td>
                                <table width="638" cellspacing="0" cellpadding="0" align="right" border="0" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center;">
                                    <tr>
                                        <td width="360" valign="top" align="left">
                                            <span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 12px; font-weight: 900;">Технические характеристики</span><br>
                                            <table width="360" cellspacing="0" cellpadding="0" align="right" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                                <tbody>
                                                    <tr bgcolor="#d1d3d4">
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Модель</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">MecMar 9/87 F</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">MecMar 13/119 т</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">MecMar 20/153 т</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">MecMar 25/210 т2</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">MecMar 34/255 т</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Емкость камеры сушки,т</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">9</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">13</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">20</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">25</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">34</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Производительность &ndash; с 20% до 15%, м3/сутки</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">125</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">167</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">218</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">284</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">357</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена в комплектации: Диз.горелка, ВОМ,&nbsp; сетка 2,5 мм</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price1']; ?></span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price2']; ?></span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price3']; ?></span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price4']; ?></span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price5']; ?></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td width="278" valign="top" align="right">
                                            <img src="http://www.lbr.ru/images/kp/sush-1.jpg" width="260" style="display: block;"/><br>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table> 
                </td>
            </tr>
            <!-- 1-BLOCK END -->
            <tr align="left"><td><img src="http://www.lbr.ru/images/kp/10.gif" width="20" height="20" style="display: block;"/></td></tr>
            <tr><td align="center"><span  style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 20px; color: rgb(211, 35, 42); font-weight: 900;">ВЫ ДУМАЕТЕ ЧТО ЗАГРУЖАЕТЕ БЫСТРО?</span></td></tr>
            <tr align="left"><td><img src="http://www.lbr.ru/images/kp/10.gif" width="10" height="10" style="display: block;"/></td></tr>
            <tr><td align="center"><span  style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 15px; font-weight: 900;">ВЫСОТА - 4,6 МЕТРА, ПРОИЗВОДИТЕЛЬНОСТЬ ДО 120 ТОН В ЧАС! <br>НЕ ТЕРЯЙТЕ ДРАГОЦЕННОЕ ВРЕМЯ НА ЛОГИСТИКУ!</span></td></tr>
            <tr align="left"><td><img src="http://www.lbr.ru/images/kp/10.gif" width="20" height="20" style="display: block;"/></td></tr>
            <!-- 2-BLOCK START -->
            <tr>
                <td>
                    <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td>
                                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr>
                                        <td><span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 16px; font-weight: 900;">ВАКУУМНЫЙ ПЕРЕГРУЗЧИК GRAIN VAC5200ЕХ</span></td>
                                        <td align="right"><img src="http://www.lbr.ru/images/kp/bandit-logo.jpg" height="30" style="display: block;"/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td>
                                <table width="638" cellspacing="0" cellpadding="0" align="right" border="0" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center;">
                                    <tr>
                                        <td width="345" valign="top" align="left">
                                            <span style="font-family: 'Arial Black', Gadget, sans-serif; line-height: 28px; font-size: 12px; font-weight: 900;">Технические характеристики</span><br>
                                            <table width="345" cellspacing="0" cellpadding="0" align="right" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                                <tbody>
                                                    <tr bgcolor="#d1d3d4">
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Размеры</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Диаметр шнека</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">25см</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Дальность действия шнека (сземли)</span><br>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">горизонтальная</span><br>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">вертикальная</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">&nbsp;</span><br>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">4,10м</span><br>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">4,17м</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Требуемая мощность трактора,л.с.</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">90-180</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Требования к мощности двигателя</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">мин. 80-90л.с. на ВОМ</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Производительность</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">До 120 тон в час!</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена,руб.</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price6']; ?></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td width="293" valign="top" align="right">
                                            <img src="http://www.lbr.ru/images/kp/sush-2.jpg" width="283" style="display: block;"/><br>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table> 
                </td>
            </tr>
            <!-- 2-BLOCK END -->
            <tr align="left"><td><img src="http://www.lbr.ru/images/kp/10.gif" width="10" height="10" style="display: block;"/></td></tr>
            <!-- 3-BLOCK START -->
            <tr>
                <td>
                    <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td>
                                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr>
                                        <td><span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 18px; font-weight: 900;">ПНЕВМАТИЧЕСКИЕ ТРАНПОРТЕРЫ POM AWGUSTOW</span></td>
                                        <td align="right"><img src="http://www.lbr.ru/images/kp/pom-logo.jpg" height="35" style="display: block;"/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td>
                                <table width="638" cellspacing="0" cellpadding="0" align="right" border="0" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center;">
                                    <tr>
                                        <td width="360" valign="top" align="center">
                                            <span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 12px; font-weight: 900; color: rgb(211,35,42);">НУЖНО ПЕРЕМЕСТИТЬ ЗЕРНО В ДЛИНУ НА<br>10, 20 ИЛИ 40 МЕТРОВ И ПОДНЯТЬ ВВЕРХ НА<br>3 МЕТРА? ЛЕГКО И БЫСТРО!</span><br><br>
                                            <table width="360" cellspacing="0" cellpadding="0" align="right" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                                <tbody>
                                                    <tr bgcolor="#d1d3d4">
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Модель</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">T 207/2</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Мощность двигателя, кВт</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">15</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Производительность, Д-10м/В-3м, т/час</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">14</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Производительность, Д-20м/В-3м, т/час</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">11,8</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Производительность, Д-30м/В-3м, т/час</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">10,6</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Производительность, Д-40м/В-3м, т/час</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">10</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена,руб.</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price7']; ?></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table width="360" style="border-collapse: collapse; height: 20px; border: 0px !important" align="left" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" height="20">
                                                <tbody>
                                                    <tr style="border: 0 !important; background: white;">
                                                        <td style="border: 0 !important; background: white; ">
                                                            <span>&nbsp;</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table width="360" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                                <tbody>
                                                    <tr bgcolor="#d1d3d4">
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Модель</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">T 450</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Производительность, т/час</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">до18</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Максимальная длина транспортировки, м</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">70</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Диаметр трубопровода нагнетательного, мм</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">160</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Мощность двигателя,кВт</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">22</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена, руб.</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price8']; ?></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td width="277" valign="top" align="right">
                                            <img src="http://www.lbr.ru/images/kp/sush-3.jpg" width="268" style="display: block;"/><br>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table> 
                </td>
            </tr>
            <!-- 3-BLOCK END -->
            <tr align="left"><td><img src="http://www.lbr.ru/images/kp/10.gif" width="20" height="20" style="display: block;"/></td></tr>
            <tr><td align="center"><span  style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 22px; color: rgb(211, 35, 42); font-weight: 900;">НЕЗАМЕНИМЫЕ ПОМОЩНИКИ</span></td></tr>
            <tr align="left"><td><img src="http://www.lbr.ru/images/kp/10.gif" width="10" height="10" style="display: block;"/></td></tr>
            <!-- 4-BLOCK START -->
            <tr>
                <td>
                    <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td>
                                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr>
                                        <td><span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 18px; font-weight: 900;">ШНЕКОВЫЕ ТРАНСПОРТЕРЫ POM AWGUSTOW</span></td>
                                        <td align="right"><img src="http://www.lbr.ru/images/kp/pom-logo.jpg" height="35" style="display: block;"/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td>
                                <table width="638" cellspacing="0" cellpadding="0" align="right" border="0" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center;">
                                    <tr>
                                        <td width="390" valign="top" align="left">
                                            <span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 14px; font-weight: 900; line-height: 31px;">Технические характеристики</span><br>
                                            <table width="390" cellspacing="0" cellpadding="0" align="right" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                                <tbody>
                                                    <tr bgcolor="#d1d3d4">
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Модель</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">T 206/2</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Производительность, т/час</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">4-9</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Основная рабочая длина,м</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">4</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Максимальная рабочая длина,м</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">6</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Высота подъема, м</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">5</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Максимальный угол работы,&deg;</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">до60</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Внутренний диаметр, мм</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">100</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Мощность двигателя, кВт/переменное напряжение, В</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">1,5/400</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена,руб.</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price9']; ?></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table width="390" style="border-collapse: collapse; height: 20px; border: 0px !important" align="left" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" height="20">
                                                <tbody>
                                                    <tr style="border: 0 !important; background: white;">
                                                        <td style="border: 0 !important; background: white; ">
                                                            <span>&nbsp;</span>
                                                        </td>
                                                    </tr>
                                                    <tr style="border: 0 !important; background: white;">
                                                        <td style="border: 0 !important; background: white; ">
                                                            <span>&nbsp;</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 14px; font-weight: 900; line-height: 31px;">Технические характеристики</span><br>
                                            <table width="390" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                                <tbody>
                                                    <tr bgcolor="#d1d3d4">
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Модель</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">T-447/3</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Производительность для пшеницы, т/час</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">48</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Основная рабочая длина,м</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">14,5</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Угол наклона, &deg;</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">40</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Внутренний диаметр, мм</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">200</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Мощность двигателя,кВт</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">11</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена, руб.</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price10']; ?></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table width="390" style="border-collapse: collapse; height: 20px; border: 0px !important" align="left" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" height="20">
                                                <tbody>
                                                    <tr style="border: 0 !important; background: white;">
                                                        <td style="border: 0 !important; background: white; ">
                                                            <span>&nbsp;</span>
                                                        </td>
                                                    </tr>
                                                    <tr style="border: 0 !important; background: white;">
                                                        <td style="border: 0 !important; background: white; ">
                                                            <span>&nbsp;</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 14px; font-weight: 900; line-height: 31px;">Технические характеристики</span><br>
                                            <table width="390" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                                <tbody>
                                                    <tr bgcolor="#d1d3d4">
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Модель</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">T 458</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Производительность, т/час</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">до25</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Длина гидравлических приводов, м</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">1,5</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Рабочая длина транспортера,м</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">4</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Внутренний диаметр, мм</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">140</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена, руб.</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price11']; ?></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table width="390" style="border-collapse: collapse; height: 20px; border: 0px !important" align="left" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" height="20">
                                                <tbody>
                                                    <tr style="border: 0 !important; background: white;">
                                                        <td style="border: 0 !important; background: white; ">
                                                            <span>&nbsp;</span>
                                                        </td>
                                                    </tr>
                                                    <tr style="border: 0 !important; background: white;">
                                                        <td style="border: 0 !important; background: white; ">
                                                            <span>&nbsp;</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 14px; font-weight: 900; line-height: 31px;">Технические характеристики</span><br>
                                            <table width="390" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                                <tbody>
                                                    <tr bgcolor="#d1d3d4">
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Модель</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">T 461</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Производительность, т/час</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">до 35</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Рабочая длина транспортера, м</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">5</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Внутренний диаметр, мм</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">200</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена, руб.</span>
                                                        </td>
                                                        <td>
                                                            <span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price12']; ?></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td width="248" valign="top" align="right">
                                            <img src="http://www.lbr.ru/images/kp/sush-4.jpg" width="230" style="display: block;"/><br>
                                            <img src="http://www.lbr.ru/images/kp/sush-5.jpg" width="200" style="display: block;"/><br>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table> 
                </td>
            </tr>
            <!-- 4-BLOCK END -->
            <!-- MAIN BLOCK END -->
            <!-- FOOTER START -->
            <tr>
                <td>
                    <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                        <tr>
                            <td>
                                <table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                    <tr>
                                        <td width="10"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                        <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 14px;"><? echo $data['filial_bottom']; ?></span></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                        </tr>
                        <tr style="border-top: 2px solid grey; height: 10px; width: 100%">
                            <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                        </tr>
                        <tr>
                            <td>
                                <table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                    <tr>
                                        <td width="10"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                        <td>
                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; text-align: justify;">
                                                Всю подробную информацию по заинтересовавшим Вас моделям техники, а так же опыт эксплуатации и отзывы потребителей Вы сможете получить у Вашего персонального менеджера.
                                            </span>
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                        <tr>
                            <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                        </tr>
                        <tr>
                            <td>
                                <table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                    <tr>
                                        <td width="10"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                        <td>
                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold;">Ждем Вас в филиале ЛБР-АгроМаркет (<b><? echo $filial['name']; ?></b>)!</span><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                        <td>
                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['work_time']; ?></span><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                        <td>
                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['address']; ?></span><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                        <td>
                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['telephone']; ?></span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                        </tr>
                        <tr>
                            <td>
                                <table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                    <tr>
                                        <td width="5"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block; width: 7px;"/></td>
                                        <td width="400" align="right" style="text-align: left;"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 14px;">
                                                Ваш персональный менеджер<br><br>
                                                <? echo $data['user_info']; ?>
                                            </span></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table> 
                </td>
            </tr>
            <!-- FOOTER END -->
        </table>
    </body>
</html>