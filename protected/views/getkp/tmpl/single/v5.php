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
        <tr>
            <tr><td>
            <span style="font-family: Calibri, sans-serif; font-size:32px; font-weight: bolder; color: #d1232a; text-align: left;">ПРИГЛАШАЕМ ПОСЕТИТЬ<br /></span>
            </td></tr>
            <tr><td align="right">
            <span style="font-family: Calibri, sans-serif; font-size:32px; font-weight: bolder; color: #d1232a; text-align: right;">ЭКСПОЗИЦИЮ ТЕХНИКИ!</span>
            </td></tr>
            <tr><td align="justify">
            <span style="width: 100%; clear: both; float: none; font-family: Calibri, sans-serif; font-size: 17px; color: black; text-transform: uppercase;">На площадке АгроМаркета вас ждут самые популярные модели</span>
            </td></tr>
            <tr><td align="right">
            <span style="font-family: Calibri, sans-serif;  font-size:38px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">телескопических <br />погрузчиков Dieci</span>
            </td></tr>
            <tr><td align="center">
            <span style="font-family: Calibri, sans-serif; font-size:38px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Выберите свой погрузчик!</span>
            </td></tr>
            </td>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Телескопические погрузчики Agri Farmer</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/dieci-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                <img src="http://www.lbr.ru/images/kp/dieci-main.jpg" width="638" border="0" />
                                    <td>
                                        <br />
                                                                              
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">• Надежный ремонтопригодный двигатель Perkins с интеркулером мощностью 101 л.с.<br />• Гидростатическая трансмиссия – плавность движений и точность при погрузо-разгрузочных работах.<br />
                                        • Уникальная гидравлика рулевого управления имеет 3 режима работы: координированное управление передними колесами, поворотом всех колес в одном направлени (крабовый ход) или передних и задних в разные стороны (колея в колею).<br />• Механизм, предотвращающий опрокидывание машины при резких движениях.</span>
                                        
                                        
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                                                       
                                </tr>
                            </table>
                        </td>
                        
                    </tr><tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <td colspan="2">
                                   <table width="638" border="1" cellspacing="0" cellpadding="0" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                    <tr bgcolor="#d1d3d4">
                                        <td width="50%" align="left"><span style="font-family:Calibri, sans-serif; font-size: 14px;">&nbsp;Модель</span></td>
                                        <td width="25%"><span style="font-family:Calibri, sans-serif; font-size: 14px;">Agri Farmer Mini</span></td>
                                        <td width="25%"><span style="font-family:Calibri, sans-serif; font-size: 14px;">Agri Farmer 30.7</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px; font-weight: bold;">&nbsp;Максимальная высота подъема, м</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; font-weight: bold;">6,35</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; font-weight: bold;">6,35</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">&nbsp;Максимальная грузоподъемность, кг</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">2800</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">3000</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 12px;">&nbsp;Горизонтальный вылет, м </span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">3,65</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">3,65</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 12px;">&nbsp;Грузоподъемность на максимальном вылете, кг </span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">700</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">700</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">&nbsp;Грузоподъемность на максимальной высоте, кг </span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">2000</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">2000</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">&nbsp;Двигатель (марка, мощность), кВт/л.с. </span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">Perkins, 74/101</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">Perkins, 74/101</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">&nbsp;Трансмиссия</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">гидростатическая</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">гидростатическая</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">&nbsp;Гидравлическая система (производительность), л/мин; бар</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">110/230</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">110/230</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">&nbsp;Эксплуатационная масса, кг </span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">6100</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">6100</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">&nbsp;Габариты (длина х ширина х высота), мм </span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">4760х2000х2000</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">4760х2220х2000</span></td>
                                    </tr>
                                    <tr>                                       
                                        <td align="left"><span style="font-family: Calibri, sans-serif; font-size: 15px; color: rgb(211,35,42);">&nbsp;Цена руб с НДС</span><span style="color:#cc3333; font-size:15px;">*</span></td>
                                        <td><span style="font-family: Calibri, sans-serif; font-size: 15px; color: rgb(211,35,42);"><? echo $data['price1']; ?></span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 15px; color: rgb(211,35,42);"><? echo $data['price2']; ?></span></td>
                                    </tr>
                            </table>
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                            * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                        </p>
                                   </td>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Телескопические погрузчики Agri Star</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/dieci-logo.jpg" border="0" /></td>
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
                                       
                                        <br>
                                        
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">• Надежный ремонтопригодный двигатель Perkins с интеркулером мощностью 101 л.с.<br />
                                        <br />• Гидростатическая трансмиссия – плавность движений и точность при погрузо-разгрузочных работах.<br />
                                        <br />• Уникальная гидравлика рулевого управления имеет 3 режима работы: координированное управление передними колесами, поворотом всех колес в одном направлени (крабовый ход) или передних и задних в разные стороны (колея в колею).<br />
                                        <br />• Механизм, предотвращающий опрокидывание машины при резких движениях.<br /></span>
                                        
                                        
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/dieci-1.jpg" width="300" border="0" />
                                    </td>
                                   
                                </tr>
                            </table>
                        </td>
                        
                    </tr><tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <td colspan="2">
                                   <table width="638" border="1" cellspacing="0" cellpadding="0" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                    <tr bgcolor="#d1d3d4">
                                        <td width="49%" align="left"><span style="font-family: Calibri, sans-serif; font-size: 14px;">&nbsp;Модель</span></td>
                                        <td width="17%"><span style="font-family:Calibri, sans-serif; font-size: 14px;">Agri Star 37.7</span></td>
                                        <td width="17%"><span style="font-family:Calibri, sans-serif; font-size: 14px;">Agri Star 35.10</span></td>
                                        <td width="17%"><span style="font-family:Calibri, sans-serif; font-size: 14px;">Agri Star 38.10</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px; font-weight: bold;">&nbsp;Максимальная высота подъема, м</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; font-weight: bold;">7,35</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; font-weight: bold;">9,75</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; font-weight: bold;">9,75</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">&nbsp;Максимальная грузоподъемность, кг</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">3700</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">3500</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">3800</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 12px;">&nbsp;Горизонтальный вылет, м </span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">4,00</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">6,50</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">6,45</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 12px;">&nbsp;Грузоподъемность на максимальном вылете, кг </span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">1.100</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">400</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">450</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">&nbsp;Грузоподъемность на максимальной высоте, кг </span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">3500</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">2200</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">2200</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">&nbsp;Двигатель (марка, мощность), кВт/л.с. </span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">Iveco, 74/101 или 93/127</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">Iveko, 93/127</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">Iveko, 93/127</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">&nbsp;Трансмиссия</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">гидростатическая</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">гидростатическая</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">гидростатическая</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">&nbsp;Гидравлическая система (производительность), л/мин; бар</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">110/230</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">110/230</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">110/230</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">&nbsp;Эксплуатационная масса, кг </span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">7.100</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">7.700</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">7.900</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">&nbsp;Габариты (длина х ширина х высота), мм </span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">4950х2220х2310</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">4950х2220х2310</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">4950х2220х2310</span></td>
                                    </tr>
                                    <tr>                                       
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 15px; color: rgb(211,35,42);">&nbsp;Цена руб с НДС</span><span style="color:#cc3333; font-size:15px;">*</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 15px; color: rgb(211,35,42);"><? echo $data['price3']; ?></span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 15px; color: rgb(211,35,42);"><? echo $data['price4']; ?></span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 15px; color: rgb(211,35,42);"><? echo $data['price5']; ?></span></td>
                                    </tr>
                                </table>
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                            * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                        </p>
                                   </td>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Телескопические погрузчики Agri Tech</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/dieci-logo.jpg" border="0" /></td>
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
                                       
                                        <br>
                                        
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">• Инновационная трансмиссия «Vario System», имеющая 4 режима работы.<br />
                                        <br />• Новая и высокоэффективная механическая система управления отбором мощности с двумя скоростями (540 и 1000 оборотов в минуту) и мощностью 100 л.с. может передавать всю имеющуюся мощность к приспособлениям.<br />
                                        <br />• Трехточечная навеска с силовым и позиционным регулированием (аналогичная устанавливается на трактора New Holland) последнего поколения грузоподъемностью 4 тонны позволяет использовать телескопический погрузчик вместо трактора.<br />
                                        <br />• Бак с дизельным топливом на 140 литров и оптимизированное потребление гарантируют рекордную автономность, что означает уменьшение остановок для дозаправки на 20-30%.<br /></span>
                                        
                                        
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/dieci-1.jpg" width="470" border="0" />
                                    <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/><br />
                                    <table width="470" border="1" cellspacing="0" cellpadding="0" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                    <tr bgcolor="#d1d3d4">
                                        <td width="49%" align="left"><span style="font-family:Calibri, sans-serif; font-size: 14px;">&nbsp;Модель</span></td>
                                        <td width="17%"><span style="font-family:Calibri, sans-serif; font-size: 14px;">Agri Tech 35.7 VS</span></td>
                                        <td width="17%"><span style="font-family:Calibri, sans-serif; font-size: 14px;">Agri Tech 32.9 VS</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">Максимальная высота подъема, м</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">7</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">9</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">Максимальная грузоподъемность, кг</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">3500</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">3200</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 12px;">Горизонтальный вылет, м</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">3,83</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">6,04</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 12px;">Грузоподъемность на максимальном вылете, кг</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">1.200</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">400</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">Грузоподъемность на максимальной высоте, кг</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">2500</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">1500</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">Мощность механического ВОМа, л.с.</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">100</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">100</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">Грузоподъемность задней трехточечной навески, кг</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">4000</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">4000</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">Двигатель (марка, мощность), кВт/л.с.</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">Iveko, 93/127</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">Iveko, 93/127</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">Трансмиссия</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">Vario System</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">Vario System</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">Гидравлическая система (производительность), л/мин; бар</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">110/240</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px; ">110/240</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">Эксплуатационная масса, кг</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">7.600</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">8000</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 13px;">Габариты (длина х ширина х высота), мм</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">5550х2400х2500</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 13px;">5550х2400х2500</span></td>
                                    </tr>
                                    <tr>                                       
                                        <td align="left"><span style="font-family:Calibri, sans-serif; font-size: 15px; color: rgb(211,35,42);">&nbsp;Цена руб с НДС</span><span style="color:#cc3333; font-size:15px;">*</span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 15px; color: rgb(211,35,42);"><? echo $data['price6']; ?></span></td>
                                        <td><span style="font-family:Calibri, sans-serif; font-size: 15px; color: rgb(211,35,42);"><? echo $data['price7']; ?></span></td>
                                    </tr>
                                </table>
                                    <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                        * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                    </p>
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
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px;">
                                <tr>
                                    <td><span style="display:block; background: rgb(245,130,32); color: white; font-family:Calibri, sans-serif; font-size: 24px; text-align: center; margin-top: 10px; padding: 5px 0;">ВО ВСЕХ ТЕЛЕСКОПИЧЕСКИХ ПОГРУЗЧИКАХ DIECI<br /> ОБЕСПЕЧИВАЕТСЯ:</span></td>
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
                                       
                                        <br>
                                        <span style="font-family: Calibri, sans-serif; font-size: 20px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">ОБЗОР 360°</span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">С приподнятого водительского сиденья обеспечивается видимость на 360° благодаря инновационной системе защиты от падений, расположенной внутри салона. Стеклоочиститель в форме параллелограмма очищает переднее стекло в верхней части кабины. Два независимых зеркала заднего вида с обеих сторон уменьшают до минимума непросматриваемые углы.<br />
                                        </span>
                                        <span style="font-family: Calibri, sans-serif; font-size: 20px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">ЗАБОТА ОБ ОПЕРАТОРЕ!</span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">Самая большая дверь среди аналогичной продукции обеспечивает легкий доступ к водительскому месту. Внутри салона все служит для облегчения работы оператора. Благодаря подлокотнику на правой панели, достигается наилучший доступ к джойстику. Звуконепроницаемость, регулируемый по высоте и глубине руль, электрический стеклоподъемник, кондиционер - все это позволяет работать оператору в условиях полного комфорта.<br />
                                        </span>
                                        <span style="font-family: Calibri, sans-serif; font-size: 20px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">МАКСИМАЛЬНАЯ БЕЗОПАСНОСТЬ</span>
                                        <span style="display: block; text-align: justify; font-family: Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">Для обеспечения максимальной безопасности все машины оборудованы электронной системой, позволяющей держать под постоянным контролем нагрузку на вилы или на другое оборудование во время работы.<br /> Ограничитель нагрузки обеспечивает гибкое и точное управление как серийным, так и специальным оборудованием.<br />
                                        </span>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/dieci-3.jpg" width="300" border="0" />
                                    
                                    
                                    </td>
                                   
                                </tr>
                            </table>
                        </td>
                        
                    </tr><tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <td colspan="2">
                                <span style="font-family: Calibri, sans-serif; font-size: 20px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">ШИРОКИЙ ВЫБОР РАБОЧИХ ОРГАНОВ!</span>
                                   <img src="http://www.lbr.ru/images/kp/dieci-4.jpg" width="638" border="0" />
                                   </td>
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
