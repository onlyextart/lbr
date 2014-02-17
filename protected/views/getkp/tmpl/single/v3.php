<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" style="min-height: 100%">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><? echo $template->title; ?></title>
</head>
<body style="min-height: 100%;">
    <table width="638" style="border-collapse: collapse; border-bottom: 4px solid #d1232a" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
        <tr>
            <td>
                <table  style="border-collapse: collapse;" width="638" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
                    <tbody>
                        <tr>
                            <td><span style="color: #6e7071; background: none !important; font-size: 16px; font-weight: bolder; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;"><? echo $data['header']; ?> </span></td>
                            <td width="160" align="right"><span style="text-decoration: none;"><a style="text-decoration: none;" href="http://www.lbr.ru/" target="_blank"><img src="http://www.lbr.ru/images/kp/logo.jpg" alt="Логотип ЛБР-Агромаркет" width="150" height="100" border="0" /></a></span></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px;">
        <tr align="right">
            <td><span style="font-family: Calibri, sans-serif; font-size:42px; font-weight: bolder; color: #d1232a;">Австрийский пакет решений</span><br><span style="font-family: Calibri, sans-serif;  text-align: right; font-size:48px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">для обработки<br>почвы</span></td>
        </tr>
        <tr><td>
        <?php
	$finance_block = $data['finance_block'];
        if ($finance_block=='1')
        {
            $this->renderPartial('finance_block', array('finance_block_text'=>$data['finance_block_text']));
        }
?>
        </td></tr>
    </table>
     <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
        <tr><td><img width="20" src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Плуги полунавесные оборотные VN plus HEKTOR</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/logo1.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">ОРУДИЕ ПОВЫШЕННОЙ МАНЕВРЕННОСТИ И ТОЧНОСТИ НА ПАХОТЕ!</span>
                                        <br>
                                        <span style="font-family: Calibri, sans-serif; font-size: 13px;">
                                            •	Самый легкий, маневренный и доступный плуг – балка рамы имеет сечение 150х150 мм с толщиной стенки 12 мм! 
                                            <br>•	Полунавесное колесо серий но оснащено гидропневматическим амортизатором. 
                                            <br>•	Все рабочие органы из сверхпрочного материала Permanit ©plus
                                            <br>•	 Изогнутый универсальный отвал WY 400 для средних и тяжелых почв, целинных участков и склонов. Особенно легко идет по чистой борозде. Глубина обработки – до 30 см.
                                            <br>•	 Предплужники универсальные - для универсального применения: от перепашки луга до кукурузной стерни.

                                        </span>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/hektor.jpg" width="300" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                    <tr bgcolor="#d1d3d4">
                                        <td width="15%" rowspan="2"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                        <td width="15%" rowspan="2"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Ширина захвата на корпус, см</span></td>
                                        <td width="15%" rowspan="2"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Высота рамы, см</span></td>
                                        <td width="25%" rowspan="2"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Максимальная мощность трактора, л.с.</span></td>
                                        <td width="30%" colspan="3"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Вес, кг, - корпусной</span></td>
                                    </tr>
                                    <tr  bgcolor="#d1d3d4">
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">6-</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">8-</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">9-</span></td>
                                    </tr>
                                    <tr>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Hektor 1000</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">36/40/44/48</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">76/82</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">170-350</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">3070</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">3610</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">3880</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42); border-left-width:10px; border-right-width: 10px;"><? echo $data['price1']; ?></span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42); border-left-width:10px; border-right-width: 10px;"><? echo $data['price2']; ?></span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42); border-left-width:10px; border-right-width: 10px;"><? echo $data['price3']; ?></span></td>
                                    </tr>
                            </table>
                        </td>
                    </tr>
                </table> 
            </td>
        </tr>
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block; "/></td></tr>
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Плуги полунавесные оборотные VN plus HERKULES</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/logo1.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Первопроходчик: большой и сильный, с мощной рамой!</span>
                                        <br>
                                        <span style="font-family: Calibri, sans-serif; font-size: 13px;">
                                            •	Все рабочие органы из сверхпрочного материала Permanit ©plus 
                                            <br>•	Гидравлически управляемый шарнирный узел рамы, серийно оснащенный автоматическим устройством для оптимального приспособления к неровностям почвы. Опорное колесо – на задней части рамы.
                                            <br>•	В исполнении «ПО ПОЛЮ» опорное колесо двигается перед плугом в борозде. Таким образом, достигается оптимальный контроль глубины, исключается опрокидывание агрегата через продольную ось. Надежная полностью гидравлическая регулировка качения для более легкого оборота плуга.
                                        </span>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right">
                                        <img src="http://www.lbr.ru/images/kp/HERKULES.jpg" width="300" border="0" />
                                        <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                        <table width="288" cellspacing="0" cellpadding="0" align="right" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                            <tr>
                                                <td align="left" width="70%"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">&nbsp;Количество корпусов, шт.</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">9</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" width="70%"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">&nbsp;Высота рамы, см</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">82, плуги ST- 78</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" width="70%"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">&nbsp;Ширина захвата на корпус, см</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">36, 40, 44, 48</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" width="70%"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">&nbsp;Требуемая мощность трактора, л.с.</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">280-350</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" width="70%"><span style="font-family: Calibri, sans-serif; font-size: 13px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42); border-left-width:10px; border-right-width: 10px;"><? echo $data['price4']; ?></span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
            </td>
        </tr>
        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Плуги полунавесные оборотные VN plus HERОS</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/logo1.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">12 корпусов – это серьезно;<br>5,5 га/час – это рентабельно!<br>ВСПАШКА ПО-ВЗРОСЛОМУ!</span>
                                        <br>
                                        <span style="font-family: Calibri, sans-serif; font-size: 13px;">
                                            •	Производительность 12-ти корпусного плуга – до 5,5 га/час! 
                                            <br>•	Самая мощная балка рамы с диаметром 200х200 мм в передней части, задняя часть 200х100 мм.
                                            <br>•	Для тракторов, не оборудованных 3-х точечной навеской, специальное решение – тележка Top Lift!
                                            <br>•	 Самая мощная балка рамы с диаметром 200х200 мм в передней части, задняя часть – 200х100 мм.
                                        </span>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/HERОS.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                    <tr bgcolor="#d1d3d4">
                                        <td width="15%" rowspan="2"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                        <td width="15%" rowspan="2"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Ширина захвата на корпус, см</span></td>
                                        <td width="15%" rowspan="2"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Высота рамы, см</span></td>
                                        <td width="25%" rowspan="2"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Максимальная мощность трактора, л.с.</span></td>
                                        <td width="30%" colspan="4"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Вес, кг, - корпусной</span></td>
                                    </tr>
                                    <tr  bgcolor="#d1d3d4">
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">9-</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">10-</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">11-</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">12-</span></td>
                                    </tr>
                                    <tr>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">HEROS 1000 ON LAND</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">36/40/44/48</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">76/82</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">до 450</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">5233</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">5526</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">5819</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">6112</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42); border-left-width:10px; border-right-width: 10px;"><? echo $data['price5']; ?></span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42); border-left-width:10px; border-right-width: 10px;"><? echo $data['price6']; ?></span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42); border-left-width:10px; border-right-width: 10px;"><? echo $data['price7']; ?></span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42); border-left-width:10px; border-right-width: 10px;"><? echo $data['price8']; ?></span></td>
                                    </tr>
                            </table>
                        </td>
                    </tr>
                </table> 
            </td>
        </tr>
        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Плуги навесные М950 и XMS 950</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/logo1.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">ДОСТУПНЫЕ НАВЕСНЫЕ ПЛУГИ ПРЕМИУМ-СЕГМЕНТА!</span>
                                        <br>
                                        <br>
                                        <span style="font-family: Calibri, sans-serif; font-size: 13px;">
                                            • Все рабочие органы из сверхпрочного материала Permanit ©plus 
                                            <br>• Балка рамы изготовлена из высокопрочной стали с сечением 120х100х8 мм серия M и 150х100х12 мм серия XMS!
                                            <br>• Автоматический оборотный цилиндр двойного действия (возможность работы с регулирующим клапаном простого действия и обратным ходом).
                                            <br>• Защита от камней на «срезной болт». Под нагрузкой срезной болт ломается в определенной точке, и корпус плуга отклоняется и уходит от препятствия вверх.
                                        </span>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right">
                                        <img src="http://www.lbr.ru/images/kp/М950.jpg" border="0" />
                                        <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                        <table width="300" cellspacing="0" cellpadding="0" align="right" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                            <tr bgcolor="#d1d3d4">
                                                <td align="left" width="50%"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">&nbsp;Модель</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">М 950 3+1</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">XMS 950 4+1</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" width="50%"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">&nbsp;Масса, кг</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">1160</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">1360</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" width="50%"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">&nbsp;Количество корпусов</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">4 (3+1)</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">5 (4+1)</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" width="50%"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">&nbsp;Просвет под рамой, см</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">78</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">82</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" width="50%"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">&nbsp;Требуемая мощность, л.с.</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; "> 90-130</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; ">150-200</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" width="70%"><span style="font-family:Calibri, sans-serif; font-size: 13px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42); border-left-width:10px; border-right-width: 10px;"><? echo $data['price9']; ?></span></td>
                                                <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42); border-left-width:10px; border-right-width: 10px;"><? echo $data['price10']; ?></span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
            </td>
        </tr>
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Глубокорыхлители Terra Dig</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/logo1.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a;">Реально ГЛУБОКОрыхлитель!</span>
                                        <br>
                                        <span style="font-family: Calibri, sans-serif; font-size: 13px;">
                                            • Уничтожает плужную подошву, работая на глубину до 55 (70) см, 
                                            <br>• Обе версии (XS и XXS) оснащены в большинстве случаев двойным игольчатым катком, что способствует лучшему измельчению почвы и более интенсивному перемешиванию растительных остатков, оставляя за собой слегка спрессованную открытую поверхность почвы.
                                        </span>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/terra.jpg" width="300" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                    <tr bgcolor="#d1d3d4">
                                        <td width="37%" align="left"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Модель</span></td>
                                        <td width="9%"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">XS/5</span></td>
                                        <td width="9%"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">XS/7</span></td>
                                        <td width="9%"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">XS/9</span></td>
                                        <td width="9%"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">XXS/5</span></td>
                                        <td width="9%"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">XXS/7</span></td>
                                        <td width="9%"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">XXS/9</span></td>
                                        <td width="9%"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">XXS/11</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Рабочая ширина, см</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">250</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">300</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">400</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">250</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">300</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">400</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">500</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Шаг лап, см</span></td>
                                        <td colspan="7"><span style="font-family: Calibri, sans-serif; font-size: 12px;">43-50</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Количество лап, шт</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">5</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">7</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">9</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">5</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">7</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">9</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">11</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Ширина рамы, см</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">230</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">290</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">385</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">230</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">290</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">385</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">490</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Высота рамы, см</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">95</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">95</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">95</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">110</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">110</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">110</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">110</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Вес со вторым игольчатым катком, кг</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">1700</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">2000</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">2300</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">2300</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">2700</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">3100</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">3600</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Требуемая мощность, л.с.</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">100-200</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">140-250</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">180-300</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">140-300</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">180-350</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">200-400</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">250-500</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family: Calibri, sans-serif; font-size: 13px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price11']; ?></span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price12']; ?></span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price13']; ?></span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price14']; ?></span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price15']; ?></span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price16']; ?></span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price17']; ?></span></td>
                                    </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                <tr>
                                    <td width="10"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 14px;"><? echo $data['filial_bottom'];?></span></td>
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
                                        <span style="font-family: Calibri, sans-serif; font-size: 14px; text-align: justify;">
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
                                        <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold;">Ждем Вас в филиале ЛБР-АгроМаркет (<b><? echo $filial['name']; ?></b>)!</span><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['work_time']; ?></span><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['address']; ?></span><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['telephone']; ?></span>
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
                                    <td width="400" align="right" style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 14px;">
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
    </table>
</body>
</html>
