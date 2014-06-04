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
                            <td><span style="color: #6e7071; background: none !important; font-size: 16px; font-weight: normal; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;"><? echo $data['header']; ?> </span></td>
                            <td width="160" align="right"><span style="text-decoration: none;"><a style="text-decoration: none;" href="http://www.lbr.ru/" target="_blank"><img src="http://www.lbr.ru/images/kp/logo.jpg" alt="Логотип ЛБР-Агромаркет" width="150" height="100" border="0" /></a></span></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px;">
        <tr align="right">
            <td>            
            <span style="display:block; font-family: Calibri, sans-serif;  text-align: justify; font-size:33px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Выгодные инвестиции в картофель!!!</span>
            </td>
        </tr>
        <tr><td colspan="2"><span>
        <?php 
	$finance_block = $data['finance_block'];
        if ($finance_block=='1')
        {
            $this->renderPartial('finance_block', array('finance_block_text'=>$data['finance_block_text']));
        }
?>
        </span></td></tr>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Гребнеобразователи FORMA</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/unia-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">
                                    
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">1. Две операции за один проход!<br /></span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Гребнеобразователи FORMA предназначены для глубокого разрыхления почвы (15-25 см), одновременного формирования и уплотнения гребней под картофель с междурядьем 70-75 см. 
                                   Специальные лапки разрушают крупные комки земли, культивируют почву и образуют трапециевидные гребни, создавая оптимальные условия для выращивания картофеля.
                                    </span>
                                   <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />2. Используй в качестве окучника по всходам!<br /></span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        При снятии задней гребнеобразующей крышки, возможно, использовать гребнеобразователь FORMA в качестве окучника по всходам.
                                    </span>
                                     <table width="328" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tbody>
                                            <tr style="background-color: #d1d3d4;">
                                                <td style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>&nbsp;Модель</strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><strong>FORMA 2</strong></strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><strong>FORMA 4</strong></strong></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Рабочая ширина, м</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1,5</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">3,0</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Количество гребней</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Производительность,га/ч</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">0,5-0,7</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1,0-1,4</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Требуемая мощность трактора, л.с.</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">От 35</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">От 55</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Габариты:<br /> длина/ширина/высота, мм</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1890/1770/1120</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1890/3280/1120</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Вес, кг</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">420</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">700</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; text-align: left;">&nbsp;Цена руб, с НДС</span></td>
                                                <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price1']; ?></span></td>
                                                <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price2']; ?></span></td>
                                            </tr>
                                        </tbody>
                                </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/invest-potato.jpg" width="300" border="0" /><br />
                                    <img style="margin-top: 10px;" src="http://www.lbr.ru/images/kp/invest-potato2.jpg" width="300" border="0" />
                                    </td>
                                   
                                </tr>
                            </table>
                        </td>
                        
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Гребнеобразователи IMAC</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/imac-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">
                                    
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">1. Качественное измельчение почвы!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Усиленные зубья, изготовленные из сверхпрочной стали обрабатывают почву, создавая равномерные и объемные гребни. 
                                   Гребнеобразователь интенсивно обрабатывает почву и разрушает комки земли, создавая рыхлую почву, что способствует повышению производительности при уборке.
                                    </span>
                                   <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />2. Мощный редуктор!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Передача крутящего момента на гребнеобразователе осуществляется посредством мощного редуктора с шестеренчатой передачей.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />3. Прочные и еще прочнее!<br /></span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        В стандартной комплектации уже стоят усиленные лапки, но для особо каменистых почв, рекомендуется установка ножей из сверхтвердого сплава. 
                                    Такие ножи по прочности сравнимы с алмазом. 
                                    </span>
                                     <table width="328" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tbody>
                                            <tr style="background-color: #d1d3d4;">
                                                <td style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>&nbsp;Модель RR</strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><strong>4F75</strong></strong></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Количество рядков</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Расстояние между рядками, см</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">75</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Количество зубъев</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">64</span></td>
                                            </tr>                                            
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Необходимая мощность, л.с.</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">90</span></td>
                                            </tr>                                            
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; text-align: left;">&nbsp;Цена руб, с НДС</span></td>
                                                <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price3']; ?></span></td>
                                            </tr>
                                        </tbody>
                                </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/invest-potato3.jpg" width="300" border="0" /><br />
                                    <img style="margin-top: 10px;" src="http://www.lbr.ru/images/kp/invest-potato4.jpg" width="300" border="0" />
                                    </td>
                                   
                                </tr>
                            </table>
                        </td>
                        
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Гребнеобразователь с активной фрезой Struik</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/struik-logo.jpg" width="100" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">
                                    
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">1.	УНИВЕРСАЛЬНЫЙ ПОМОЩНИК. </span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Предназначен для активного измельчения почвы с междурядьем для посадки картофеля 70, 75 и 90 см. После легкого переоборудования возможно использование гребнеобразователя в качестве фрезы для предварительной обработки почвы (опция).
                                    </span>
                                   <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />2.	ПОД КАРТОФЕЛЬ И ПОД ОВОЩИ! </span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Возможна установка прикатывающих роликов с гидравлическим приводом для создания гряды для выращивания моркови, свеклы и других овощей (опция). Диаметр роликов возможен от 480 до 580 мм.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />3.	4 В 1<br /></span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Возможность комбинации гребнеобразующей фрезы с овощной сеялкой или картофелесажалкой в единый агрегат. Таким образом, агрегат выполняет 4 функции одновременно: обработка почвы,  посадка картофеля, внесение удобрений, создание гребней.
                                    </span>
                                     <table width="328" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tbody>
                                            <tr style="background-color: #d1d3d4;">
                                                <td width="46%" style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>&nbsp;Модель</strong></span></td>
                                                <td width="18%" style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><strong>2RF165</strong></strong></span></td>
                                                <td width="18%" style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><strong>4RF310</strong></strong></span></td>
                                                <td width="18%" style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><strong>4 RF375</strong></strong></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Количество рядков</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2 x 75</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4 x 75</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4 x 90</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Вес, кг</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">980</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1400</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1800</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Ширина, см</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1500</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">3650</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Необходимая мощность трактора, мин л.с</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">60</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">110</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">120</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;ВОМ, об./мин</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1000</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1000</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1000</span></td>
                                            </tr> 
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Производительность, га/час</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">0,25-0,45</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">0,45-0,90</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">0,54 - 1,1 </span></td>
                                            </tr>                                            
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; text-align: left;">&nbsp;Цена руб, с НДС</span></td>
                                                <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price4']; ?></span></td>
                                                <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price5']; ?></span></td>
                                                <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price6']; ?></span></td>
                                            </tr>
                                        </tbody>
                                </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/struik_grebn.jpg" width="300" border="0" />
                                    </td>
                                   
                                </tr>
                            </table>
                        </td>
                        
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
                 
            </td>
        </tr>       
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Картофелесажалки KORA</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/unia-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">
                                    
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">1. ПРОСТАЯ И НАДЕЖНАЯ!!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Картофелесажатели KORA оснащены натяжным устройством для ленты и высаживающими лопатками, которые обеспечивают сортировку и выборку клубней размером от 35 мм до 60 мм. 
                                   Опциональные вкладыши дают возможность высаживать клубни большего или меньшего размера.
                                    </span>
                                   <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />2. МНОГООБРАЗИЕ РЕШЕНИЙ!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Опционально сажалка KORA 2 и KORA 4 может быть оснащена подсеивателем гранулированных удобрений и протравливателем клубней.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />3. ТОЧНАЯ ПОСАДКА – РАВНОМЕРНЫЕ ВСХОДЫ!<br /></span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Копирующие колеса, установленные на сажалке KORA 4 и KORA 4HP, позволяют соблюдать одинаковую глубину посадки во всех рядах, несмотря на неровности почвы.
                                    </span>
                                     <table width="328" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tbody>
                                            <tr style="background-color: #d1d3d4;">
                                                <td style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>&nbsp;Тип</strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><strong>KORA 2</strong></strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><strong>KORA 4</strong></strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><strong>KORA 4HP</strong></strong></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Количество рядов, шт.</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Ширина междурядий, см</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">70/75</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">75</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">75</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Грузоподъемность картофельного бункера, кг</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">400</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">840</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2000</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Производительность, га/ч</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">0,3-0,5</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">0,6-1,1</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1,6</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Требуемая мощность трактора,л.с.</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">50</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">75</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">75</span></td>
                                            </tr>                                            
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; text-align: left;">&nbsp;Цена руб, с НДС</span></td>
                                                <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price7']; ?></span></td>
                                                <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price8']; ?></span></td>
                                                <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price9']; ?></span></td>
                                            </tr>
                                        </tbody>
                                </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/invest-potato5.jpg" width="300" border="0" /><br />
                                    <img style="margin-top: 10px;" src="http://www.lbr.ru/images/kp/invest-potato6.jpg" width="300" border="0" />
                                    </td>
                                   
                                </tr>
                            </table>
                        </td>
                        
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 1060625
                 
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Ботвоудалитель Struik</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/struik-logo.jpg" width="100" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">
                                    
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">1. Быстрее и эффективнее!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Предназначен для удаления ботвы картофеля.  Агрегат приподнимает, срезает и измельчает ботву, равномерно укладывая остатки в междурядье. Машина может навешиваться на заднюю или переднюю часть трактора (в стандартной комплектации навешивается позади трактора).
                                    </span>
                                   <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />2.	Идеальное копирование гребня! </span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Вертикально расположенные ножи различной длины предназначены для копирования гребня, что обеспечивает качественное удаление и измельчение ботвы по всей форме гребня.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />3.	Простота – залог успеха! <br /></span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        «Окошки» расположенные в верхней части ботвоудалителя обеспечивают свободный доступ к рабочим органам, позволяя без проблем проводить техническое обслуживание ботвоудалителя.
                                    </span>
                                     <table width="328" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tbody>
                                            <tr style="background-color: #d1d3d4;">
                                                <td style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>&nbsp;Модель</strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><strong>2 LKA 75</strong></strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><strong>4 LKA 75</strong></strong></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Количество рядков</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2 x 75</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4 x 75</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Вес, кг</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">480</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">870</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Ширина, см</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">160</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">315</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Необходимая мощность трактора, л.с.</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">55</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">70-80</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;ВОМ, об./мин</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1000</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1000</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">&nbsp;Производительность, га/час</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">0,6 – 1,1</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1,2-2,1</span></td>
                                            </tr>                                            
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; text-align: left;">&nbsp;Цена руб, с НДС</span></td>
                                                <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price10']; ?></span></td>
                                                <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price11']; ?></span></td>
                                            </tr>
                                        </tbody>
                                </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="center"><img src="http://www.lbr.ru/images/kp/stuik_botv.jpg" width="300" border="0" /><br />
                                    <img style="margin-top: 10px;" src="http://www.lbr.ru/images/kp/stuik_botv1.jpg" width="148" height="120" border="0" />
                                    
                                    <img style="margin-top: 10px;" src="http://www.lbr.ru/images/kp/stuik_botv2.jpg" width="148" height="120" border="0" />
                                    </td>
                                   
                                </tr>
                            </table>
                        </td>
                        
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
                 
            </td>
        </tr>
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Картофелекопалки WEGA и PYRUS</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/unia-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">1. БЕРЕЖНАЯ УБОРКА - КАЧЕСТВЕННЫЙ КАРТОФЕЛЬ!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Каждый второй прутик имеет оболочку из полимерного материала, что облегчает транспортировку картофеля и способствует минимизации повреждений.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">2. УНИВЕРСАЛЬНОСТЬ ПО ХОРОШЕЙ ЦЕНЕ!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Копалку WEGA можно использовать для выкапывания картофеля, лука (при использовании специальной насадки), столовой свеклы, моркови и других культур, что делает копалку идеальным помощником для овощных хозяйств.
                                    </span>
                                                                         
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/invest-potato9.jpg" width="300" border="0" />
                                    
                                    </td>
                                   
                                </tr>
                                
                            </table>
                            <table width="638" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tr bgcolor="#d1d3d4">
                                            <td width="31%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="18%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">WEGA 1400</span></td>
                                            <td width="18%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">WEGA 1600</span></td>
                                            <td width="18%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">WEGA 1600 PLUS</span></td>
                                            <td width="18%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">PYRUS</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Рабочая ширина, мм</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">1400 (1500)</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">1600</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">1600</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">1400</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Ширина междурядий, см</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">70-75</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">75-90</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">70-90</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">70-75</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Количество рядов, шт.</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">2</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">2</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">2</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">2</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">55</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">60</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">50</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">60</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Количество транспортеров</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">1</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">1</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">1</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">2</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price12']; ?></span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price13']; ?></span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price14']; ?></span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price15']; ?></span></td>
                                        </tr>
                                </table>
                        </td>
                        
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
                 
            </td>
        </tr>
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Картофелекопалки с боковой выгрузкой IMAC</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/imac-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">
                                    
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">1. Экономичная альтернатива!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Картофелекопалка PD предназначена для комбинированной уборки картофеля, моркови, чеснока, лука и т.д по схеме 2+2. 
                                    Копалка поднимает два рядка и укладывает картофель между 2 следующими рядками. После этого 2 рядный картофелеуборочный комбайн убирает 4 рядка одновременно. 
                                    Этот способ уборки увеличивает производительность комбайнов в 1,5-2 раза.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">2. Весомый результат!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Двойной просеивающий транспортер обеспечивает качественное отделение почвы, даже на тяжелых почвах. 
                                    Передние катки гарантируют равномерную глубину работы лемехов, а четыре дисковых сошника обеспечивают качественное удаление ботвы картофеля.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">3. Выгрузка в любом направлении!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Гидравлический транспортер с боковой выгрузкой позволяет выгружать картофель между неубранными рядками для последующей уборки картофелеуборочным комбайном. 
                                    Направление выгрузки можно менять.
                                    </span>
                                   
                                     <table width="328" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tr bgcolor="#d1d3d4">
                                            <td width="15%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="15%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">PD1400</span></td>
                                            <td width="15%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">PD1650</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Междурядье, см</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">70-75</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">75</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Вес, кг</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">945</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">985</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Диаметр ботвоудаляющих дисков, мм</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">500</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">500</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Производительность в час</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">0,42-0,84</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">0,49 – 0,99</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Длина с валкоукладчиком, см</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">360</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">360</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Необходимая мощность трактора, л.с.</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">От 80</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">От 110</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price16']; ?></span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price17']; ?></span></td>
                                        </tr>
                                </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/invest-potato10.jpg" width="300" border="0" /><br />
                                    <img style="margin-top: 10px;" src="http://www.lbr.ru/images/kp/invest-potato11.jpg" width="300" border="0" />
                                    </td>
                                   
                                </tr>
                            </table>
                        </td>
                        
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Картофелеуборочный комбайн BOLKO</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/unia-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">1. КОМБАЙН ПО ЦЕНЕ ИМПОРТНОЙ КОПАЛКИ!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Комбайн BOLKO оснащен бункером емкостью 1250 кг с подвижным полом и транспортерами для ступенчатой очистки картофеля от грязи.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">2. ОТДЕЛЯЕТ, ОЧИЩАЕТ, УДАЛЯЕТ!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Очистительные механизмы эффективно удаляют ботву картофеля, очищают его от грязи и обеспечивают отделение камней от картофеля с выгрузкой камней в специальный бункер емкостью 100 кг.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">3. УНИВЕРСАЛЬНЫЙ КОМБАЙН ДЛЯ ОВОЩНИКОВ!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Возможно доукомплектация агрегата приставками, что дает возможность собирать морковь с обрезанной ботвой, а также лук, выкопанный копателем и уложенный в валок.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">4. ТРИ ВАРИАНТА ИСПОЛНЕНИЯ!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Комбайн BOLKO выпускается в трех видах: комбайн с бункером на 1250 кг, с выгрузным транспортером и с площадкой для выгрузки картофеля в мешки или ящики.
                                    </span>
                                     
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/invest-potato12.jpg" width="300" border="0" />
                                    <img style="margin-top: 15px;" src="http://www.lbr.ru/images/kp/invest-potato13.jpg" width="300" border="0" />
                                    
                                    </td>
                                   
                                </tr>
                                
                            </table>
                            <table width="638" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tr bgcolor="#d1d3d4">
                                            <td width="31%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="18%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">BOLKO</span></td>
                                            <td width="18%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">BOLKO S</span></td>
                                            <td width="18%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">BOLKO T</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Характеристика</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">с бункером 1250 кг</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">с площадкой для выгрузки в мешки,грузоподъемность – 500 кг</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">с транспортером</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Рабочая ширина, см</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">62,5-75</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">62,5-75</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">62,5-5</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Производительность, га/ч</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">до 0,15</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">до 0,15</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">до 0,15</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Высота разгрузки, мм</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">1250-2500</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">-</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">до 3100</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Грузоподъемность бункера для камней,кг</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">100</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">100</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">100</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">40</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">40</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">40</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Бункер для камней, кг</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">100</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">100</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">100</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Масса, кг</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">1800</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">1200</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">1500</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price18']; ?></span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price19']; ?></span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price20']; ?></span></td>
                                        </tr>
                                </table>
                        </td>
                        
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Картофелеуборочный комбайн PYRA</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/unia-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">
                                    
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">1. Меньше радиус поворота на краю поля!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        За счет использования поворотных колес и дышла с гидравлическим управлением картофелеуборочные комбайны PYRA позволяют обеспечить меньший радиус разворота комбайна.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">2. Качественная сепарация почвы!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Благодаря использованию многих современных решений комбайн PYRA собирает картофель при минимальном показателе механических повреждений с одновременным очищением растений от всякого рода загрязнений.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">3. Бережная уборка картофеля - всегда!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Комбайн оснащен бункером для картофеля с гидравлическим приводом объемом 3000 кг. 
                                    В стандартной комплектации на выходе из бункера установлен эластичный рукав, предназначенный для минимизации степени повреждения картофеля при падении.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">4. Универсальный помощник!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Комбайн можно оснастить специальными приставками, что позволяет выкапывать морковь, с предварительно удаленной ботвой и подбирать лук, уложенный в валок.
                                    </span>
                                   
                                     <table width="328" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tr bgcolor="#d1d3d4">
                                            <td width="15%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="15%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">PYRA 3000</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Емкость бункера, кг</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">3000</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Высота разгрузки, м</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">1,25-3,14</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Ходовые колеса</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">16,0/70-20</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">80</span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price21']; ?></span></td>
                                        </tr>
                                </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/invest-potato14.jpg" width="300" border="0" /><br />
                                    </td>
                                   
                                </tr>
                            </table>
                        </td>
                        
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Сортировщики картофеля и лука</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/krukowiak-logo.jpg" border="0" style="width: 50px;" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">
                                    
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">1. КОМПАКТНЫЕ И УДОБНЫЕ!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Площадь хранения сортировщика составляет всего 7 кв.м! 
                                    Конструкция рамы шасси позволяет быстро сложить комплекс одному человек и легко перемещать машину в любое место помещения с твердым полом.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">2. РАБОТА В УДОВОЛЬСТВИЕ!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Сортировщик М 616 и М 900 имеют осветительное устройство с флуоресцентными лампами и подогрев рабочего стола, что существенно облегчает работу операторов.
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">3. СОРТИРОВКА ПО РАЗМЕРУ!</span>
                                        <span style="display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Сортировщики предназначены для сортировки картофеля и лука округлой формы на 3 фракции. 
                                    Имеет в комплекте обменные сита, которые позволяют менять размер сортируемой фракции с шагом 5 мм.
                                    </span>
                                    
                                     
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/invest-potato15.jpg" width="300" border="0" /><br />
                                    <img src="http://www.lbr.ru/images/kp/invest-potato16.jpg" width="300" border="0" />
                                    <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                    </td>
                                   
                                </tr>
                            </table>
                        </td>
                        <table width="638" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tr bgcolor="#d1d3d4">
                                            <td width="30%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="15%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">M-647 MINI</span></td>
                                            <td width="15%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">M-647</span></td>
                                            <td width="15%"><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">M 900</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Размеры окошек сита, мм</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">35-40-50</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">35-40-50</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">От 25х25 до 80х80</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Масса, кг</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">600</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">850</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">950</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">Производительность, т/ч</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">2</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">4-6</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px;">6-9</span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price22']; ?></span></td>
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price23']; ?></span></td> 
                                            <td><span style="font-family:FuturisC, Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price24']; ?></span></td>
                                        </tr>
                                </table>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
                 
            </td>
        </tr>
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block; "/></td></tr>
        
               
        
               
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    
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
