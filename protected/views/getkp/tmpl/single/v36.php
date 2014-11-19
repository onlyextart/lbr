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
                <td colspan="3" align="left">
                    <img src="http://www.lbr.ru/images/kp/zirka-big-logo.jpg" width="400" height="60" border="0"> 
                </td>
            </tr>
            <tr>
                <td align="left" width="22"><img src="http://www.lbr.ru/images/kp/left-orange.jpg" width="22" height="75" border="0" style="display: block;"></td>
                <td align="center" bgcolor="#f68121" width="594">
                    <span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 20px; color: white; font-weight: 900;">ВСЯ ЛИНЕЙКА ТЕХНИКИ ОТ ПРОИЗВОДИТЕЛЯ <br>СО 140-ЛЕТНИМ СТАЖЕМ!</span>
                </td>
                <td align="right" width="22"><img src="http://www.lbr.ru/images/kp/right-orange.jpg" width="22" height="75" border="0" style="display: block;"></td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 40px; color: rgb(211, 35, 42); font-weight: 900;">СТАРЫЙ ДРУГ ЛУЧШЕ<br> НОВЫХ ДВУХ!</span>
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

        <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px;">
            <tr align="left">
                <td><img src="http://www.lbr.ru/images/kp/10.gif" width="20" height="20" style="display: block;"/></td>
            </tr>
    <!--        <tr align="center">
                <td><span  style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 18px; color: #AAAAAA; font-weight: 900;">КЛАССИЧЕСКИЕ ТЕХНОЛОГИИ ПОЧВООБРАБОТКИ И СЕВА</span></td>
            </tr>-->
            <tr align="left">
                <td><img src="http://www.lbr.ru/images/kp/10.gif" width="10" height="10" style="display: block;"/></td>
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
                                        <td><span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 20px; font-weight: 900;">Сеялки зерновые АСТРА 5,4 (CЗ, СЗТ)</span></td>
                                        <td align="right"><img src="http://www.lbr.ru/images/kp/zirka-small-logo.jpg" width="35" height="32" style="display: block;"/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/zirka-1.jpg" width="638" style="display: block; margin-top: 2px;"/></td></tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td> 
                                <table width="638" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                    <tbody>
                                        <tr bgcolor="#d1d3d4">
                                            <td width="36%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="11%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">АСТРА СЗ5,4</span></td>
                                            <td width="11%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">АСТРА СЗ5,4-06</span></td>
                                            <td width="11%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">АСТРА СЗ5,4-04</span></td>
                                            <td width="11%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">АСТРА СЗТ5,4</span></td>
                                            <td width="20%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">АСТРА НОВА СЗ5,4 С ВАРИАТОРОМ</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Ширина захвата, м </span></td>
                                            <td colspan="5"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">5,4</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Количество рядов</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">36</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">36</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">72</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">36 (+35)</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">36</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Ширина междурядий, см</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">15</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">15</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">7,5</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">15 (7,5)</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">15</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Нормы высева для семян, кг/га</span></td>
                                            <td colspan="4"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">15-400</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">4-400</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Нормы высева для удобрений, кг/га</span></td>
                                            <td colspan="4"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">25-200</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">25-200</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Емкость бункеров для семян, дм<sup>3</sup></span></td>
                                            <td colspan="4"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">680</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">1000</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Емкость бункеров удобрений, дм<sup>3</sup></span></td>
                                            <td colspan="4"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">318</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">500</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Требуемая мощность трактора, л.с.</span></td>
                                            <td colspan="5"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">от 80</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена с НДС</span><span style="color:#cc3333; font-size:12px;">*</span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price1']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price2']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price3']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price4']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price5']; ?></span></td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </td>
                        </tr>
                        <tr valign="top">
                            <td style="padding: 5px 0px 0px 0px;">
                                <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                    * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                </p> 
                            </td>
                        </tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td align="center"><span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 14px; font-weight: 900; color: rgb(211,35,42);">Со сцепкой СП 10,8 и двумя сеялками АСТРА 5,4 – производительность<br> до 13 га/час! Трактор – от 150 л.с.!</span></td>
                        </tr>
                    </table> 
                </td>
            </tr>
            <!-- 1-BLOCK END -->
            <tr align="left"><td><img src="http://www.lbr.ru/images/kp/10.gif" width="10" height="10" style="display: block;"/></td></tr>
            <!-- 2-BLOCK START -->
            <tr>
                <td>
                    <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td>
                                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr>
                                        <td><span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 20px; font-weight: 900;">Сеялки зерновые АСТРА 3,6 (СЗ, СЗТ, СЗП)</span></td>
                                        <td align="right"><img src="http://www.lbr.ru/images/kp/zirka-small-logo.jpg" width="35" height="32" style="display: block;"/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/zirka-2.jpg" width="638" style="display: block; margin-top: 2px;"/></td></tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td> 
                                <table width="638" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                    <tbody>
                                        <tr bgcolor="#d1d3d4">
                                            <td width="40%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="12%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">СЗ3,6А</span></td>
                                            <td width="12%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">СЗ3,6А-04</span></td>
                                            <td width="12%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">СЗ3,6А-06</span></td>
                                            <td width="12%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">СЗТ3,6</span></td>
                                            <td width="12%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">СЗП3,6</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Ширина захвата, м </span></td>
                                            <td colspan="5"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">3,6</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Количество рядов</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">24</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">48</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">24</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">24 (+23)</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">24</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Ширина междурядий, см</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">15</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">7,5</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">15</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">15 (7,5)</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">15</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Нормы высева для семян, кг/га</span></td>
                                            <td colspan="5"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">15-400</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Нормы высева для удобрений, кг/га</span></td>
                                            <td colspan="5"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">25-200</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Глубина заделки семян и удобрений, мм</span></td>
                                            <td colspan="5"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">40-80</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Емкость бункеров для семян, дм<sup>3</sup></span></td>
                                            <td colspan="2"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">453</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">600</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">453</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">600</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Емкость бункеров удобрений, дм<sup>3</sup></span></td>
                                            <td colspan="2"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">212</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">400</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">212</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">400</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Требуемая мощность трактора, л.с.</span></td>
                                            <td colspan="5"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">от 65</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена с НДС</span><span style="color:#cc3333; font-size:12px;">*</span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price6']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price7']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price8']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price9']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price10']; ?></span></td>
                                        </tr>
                                    </tbody>

                                </table> 
                            </td>
                        </tr>
                        <tr valign="top">
                    <td style="padding: 5px 0px 0px 0px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
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
                                        <td><span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 20px; font-weight: 900;">Культиваторы универсальные Полярис (КШУ)</span></td>
                                        <td align="right"><img src="http://www.lbr.ru/images/kp/zirka-small-logo.jpg" width="35" height="32" style="display: block;"/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/zirka-3.jpg" width="638" style="display: block; margin-top: 2px;"/></td></tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td> 
                                <table width="638" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                    <tbody>
                                        <tr bgcolor="#d1d3d4">
                                            <td width="43%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Полярис 8,5</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Полярис 4</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Способ агрегатирования</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">Прицепной</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">Прицепной</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Рабочая скорость, км/ч </span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">до 12</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">до 12</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Рабочая ширина захвата, мм </span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">8380</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">3895</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Глубина обработки, см </span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">6-12</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">6-12</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Количество плоскорежущих лап</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">31</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">15</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Глубина обработки, см </span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">6-12</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">6-12</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Ширина захвата плоскорежущей лапы, мм</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">330</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">330</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Требуемая мощность трактора, л.с.</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">от 150</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">от 80</span></td>
                                        </tr>

                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена с НДС</span><span style="color:#cc3333; font-size:12px;">*</span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price11']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price12']; ?></span></td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </td>
                        </tr>
                        <tr valign="top">
                    <td style="padding: 5px 0px 0px 0px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td align="center"><span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 14px; font-weight: 900; color: rgb(211,35,42);">И ДЛЯ ПРЕДПОСЕВНОЙ ОБРАБОТКИ ПОЧВЫ, И ДЛЯ ПАРОВ!</span></td>
                        </tr>
                    </table> 
                </td>
            </tr>
            <!-- 3-BLOCK END -->
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
                                        <td><span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 18px; font-weight: 900;">Бороны дисковые 2-ух рядные ПАЛЛАДА(БДН, БДП)</span></td>
                                        <td align="right"><img src="http://www.lbr.ru/images/kp/zirka-small-logo.jpg" width="35" height="32" style="display: block;"/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/zirka-4.jpg" width="638" style="display: block; margin-top: 2px;"/></td></tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td> 
                                <table width="638" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                    <tbody>
                                        <tr bgcolor="#d1d3d4">
                                            <td width="36%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="16%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">ПАЛЛАДА 2400</span></td>
                                            <td width="16%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">ПАЛЛАДА 3200</span></td>
                                            <td width="16%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">ПАЛЛАДА 4000</span></td>
                                            <td width="16%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">ПАЛЛАДА 6000</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Тип агрегата</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">навесной</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">прицепной</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">прицепной</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">прицепной</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Производительность, га/час</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">до 2,88</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">до 3,8</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">до 4,8</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">до 7,2</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Рабочая скорость, км/час</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">до 12</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">до 12</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">до 12</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">до 12</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Ширина захвата, м</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">2,4</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">3,2</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">4</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">4</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Глубина обработки, мм</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">120±20</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">120±20</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">120±20</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">120±20</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Угол атаки дисков, град.</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">0...30</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">0...30</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">0...30</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">0...30</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Количество рядов</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">2</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">2</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">2</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">2</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Количество режущих узлов</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">18</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">24</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">30</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">30</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Расстояние между рядами дисков, мм </span></td>
                                            <td colspan="4"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">950</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Диаметр рабочих органов, мм</span></td>
                                            <td colspan="4"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">560</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Масса конструкционная, кг</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">880</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">1612</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">2268</span></td>
                                            <td><span>3208</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Требуемая мощность трактора, л.с</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">от 80</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">от 90</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">от 150</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">от 300</span></td>
                                        </tr>

                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена с НДС</span><span style="color:#cc3333; font-size:12px;">*</span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price13']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price14']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price15']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price16']; ?></span></td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </td>
                        </tr>
                        <tr valign="top">
                    <td style="padding: 5px 0px 0px 0px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                    </table> 
                </td>
            </tr>
            <!-- 4-BLOCK END -->
            <tr align="left"><td><img src="http://www.lbr.ru/images/kp/10.gif" width="10" height="10" style="display: block;"/></td></tr>
            <!-- 5-BLOCK START -->
            <tr>
                <td>
                    <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td>
                                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr>
                                        <td><span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 20px; font-weight: 900;">Бороны дисковые 4-х рядные Антарес (БДП)</span></td>
                                        <td align="right"><img src="http://www.lbr.ru/images/kp/zirka-small-logo.jpg" width="35" height="32" style="display: block;"/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/zirka-5.jpg" width="638" style="display: block; margin-top: 2px;"/></td></tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td> 
                                <table width="638" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                    <tbody>
                                        <tr bgcolor="#d1d3d4">
                                            <td width="40%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Антарес 3х4</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Антарес 4х4</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Антарес 6х4</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Тип агрегата</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">Прицепной</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">Прицепной</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">Прицепной</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Рабочая скорость, км/час </span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">до 12</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">до 12</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">до 12</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Ширина захвата, м </span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">3 </span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">4 </span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">6</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Глубина обработки, мм</span></td>
                                            <td colspan="3"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">80-180</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Угол атаки дисков, град.</span></td>
                                            <td colspan="3"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">0...30</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Количество рядов</span></td>
                                            <td colspan="3"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">4</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Количество режущих узлов </span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">30</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">42</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">60</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Расстояние между рядами дисков, мм </span></td>
                                            <td colspan="3"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">700</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Диаметр рабочих органов, мм </span></td>
                                            <td colspan="3"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">560</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Требуемая мощность трактора, л.с. </span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">150</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">200</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">300</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена с НДС</span><span style="color:#cc3333; font-size:12px;">*</span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price17']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price18']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price19']; ?></span></td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </td>
                        </tr>
                        <tr valign="top">
                    <td style="padding: 5px 0px 0px 0px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                    </table> 
                </td>
            </tr>
            <!-- 5-BLOCK END -->
            <tr align="left"><td><img src="http://www.lbr.ru/images/kp/10.gif" width="35" height="35" style="display: block;"/></td></tr>
            <tr align="left" style="border-bottom: 2px solid #d1232a;">
                <td><span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 18px; color: #AAAAAA; font-weight: 900;">КЛАССИЧЕСКИЕ ТЕХНОЛОГИИ ПОЧВООБРАБОТКИ И СЕВА</span></td>
            </tr>
            <tr align="left"><td><img src="http://www.lbr.ru/images/kp/10.gif" width="10" height="10" style="display: block;"/></td></tr>
            <!-- 6-BLOCK START -->
            <tr>
                <td>
                    <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td>
                                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr>
                                        <td><span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 15px; font-weight: 900;">Пневматическая сеялка точного высева Веста 8-02 (УПС 8-02)</span></td>
                                        <td align="right"><img src="http://www.lbr.ru/images/kp/zirka-small-logo.jpg" width="35" height="32" style="display: block;"/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td>
                                <table width="638" cellspacing="0" cellpadding="0" align="right" border="0" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center;">
                                    <tr>
                                        <td width="50%">
                                            <table width="319" cellspacing="0" cellpadding="0" align="right" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                                <tbody>
                                                    <tr bgcolor="#d1d3d4">
                                                        <td width="75%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                                        <td width="25%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Веста 8</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Тип машины</span></td>
                                                        <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">Навесная</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Ширина захвата, м</span></td>
                                                        <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">5,6</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Количество рядов</span></td>
                                                        <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">8</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Рабочая скорость, км/ч</span></td>
                                                        <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">2,5-9</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Емкость бункеров (суммарная) для семян, дм<sup>3</sup></span></td>
                                                        <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">200</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Емкость бункеров (суммарная) для удобрений, дм<sup>3</sup></span></td>
                                                        <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">192</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Нормы высева для семян, шт./п.м</span></td>
                                                        <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">2-57</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Нормы высева для удобрений, кг/га</span></td>
                                                        <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">50-250</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Глубина заделки семян, мм </span></td>
                                                        <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">40-120</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Масса, кг </span></td>
                                                        <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">1 278</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Требуемая мощность трактора, л.с. </span></td>
                                                        <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">80</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена с НДС</span><span style="color:#cc3333; font-size:12px;">*</span></td>
                                                        <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price20']; ?></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td width="50%" valign="top" align="center">
                                            <img src="http://www.lbr.ru/images/kp/zirka-6.jpg" width="310" style="display: block;"/><br>
                                            <span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 13px; font-weight: 900; color: rgb(211,35,42);">И ДЛЯ ПРЕДПОСЕВНОЙ ОБРАБОТКИ ПОЧВЫ, И ДЛЯ ПАРОВ!</span><br>
                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 11px; text-align: left; line-height: 22px">Теперь с электронной системой контроля высева «Факт».</span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr valign="top">
                    <td style="padding: 5px 0px 0px 0px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                    </table> 
                </td>
            </tr>
            <!-- 6-BLOCK END -->
            <tr align="left"><td><img src="http://www.lbr.ru/images/kp/10.gif" width="10" height="10" style="display: block;"/></td></tr>
            <!-- 7-BLOCK START -->
            <tr>
                <td>
                    <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td>
                                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr>
                                        <td><span style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 16px; font-weight: 900;">Пропашные культиваторы Альтаир 5,6-04 (КРНВ 5,6-04)</span></td>
                                        <td align="right"><img src="http://www.lbr.ru/images/kp/zirka-small-logo.jpg" width="35" height="32" style="display: block;"/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/zirka-7.jpg" width="638" style="display: block; margin-top: 2px;"/></td></tr>
                        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                        <tr>
                            <td> 
                                <table width="638" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                    <tbody>
                                        <tr bgcolor="#d1d3d4">
                                            <td width="50%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="25%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">«Альтаир5,6 04» с внесением удобрений</span></td>
                                            <td width="25%"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; font-weight: bold;">«Альтаир5,6 02» с внесением удобрений</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Производительность, га/ч </span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">5,6</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">5,6</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Ширина захвата, м</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">5,6</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">5,6</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Количество обрабатываемых рядков</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">8</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">12</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Ширина междурядий, см</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">70</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">45</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Норма высева туков, кг/га</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">50-250</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">50-250</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Емкость бункеров (суммарная), дм<sup>3</sup></span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">384</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">288</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Нормы высева для семян, шт./п.м</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">2-57</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">2-57</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Рабочая скорость, км/ч</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">5-10</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">5-10</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Глубина обработки, см </span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">6-16</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">6-16</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Масса, кг</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">880</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">925</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Требуемая мощность трактора, л.с.</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">от 80</span></td>
                                            <td><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px;">от 80</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 12px; margin-left: 5px;">Цена с НДС</span><span style="color:#cc3333; font-size:12px;">*</span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price21']; ?></span></td>
                                            <td><span style="font-family:'Trebuchet MS', Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price22']; ?></span></td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </td>
                        </tr>
                        <tr valign="top">
                    <td style="padding: 5px 0px 0px 0px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                    </table> 
                </td>
            </tr>
            <!-- 7-BLOCK END -->
            <!-- MAIN BLOCK START -->
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
                                        <td width="400" align="right" style="text-align: left;">
                                            <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-size: 14px;">
                                                Ваш персональный менеджер<br><br>
                                                <? echo $data['user_info']; ?>
                                            </span>
                                        </td>
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