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
            <td align="center"><span style="font-family: Calibri, sans-serif; font-size:32px; font-weight: bolder; color: #d1232a;">Трактор McCORMICK TTX 230, 230 л.с<br /> +<br /> американский посевной комплекс<br /> шириной захвата 13,7 метра</span><br><span style="display:block; font-family: Calibri, sans-serif;  text-align: left; font-size:38px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Экономия 400 тысяч рублей. Всего за 9,9 млн. руб.</span>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Трактор McCORMICK TTX 230</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mccormick-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/amity-disk.jpg" width="638" border="0" /></td></tr>
                    <tr>
                        <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">                                        
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">1.УДОБНАЯ ЗАМЕНА K-700</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                         Трехточечное навесное устройство. Грузоподъемность – до 10 500 кг. 
                                    Гидравлическая система (130 л/мин). Контроль глубины работы и подъема навесного оборудования.<br />
                                    6-ти цилиндровый двигатель IVECO мощностью 225 л.с.<br />
                                    </span>
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: black; text-transform: uppercase;">НИЗКИЕ ЭКСПЛУАТАЦИОННЫЕ РАСХОДЫ.</span>
                                    <span><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block; height: 5px;"/></span>
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: black; text-transform: uppercase;">МИНИМУМ ВРЕМЕНИ НА ПРОВЕДЕНИЕ ТО.</span>
                                    <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block; height: 5px;"/>
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;"><br />2. КОГДА ВОЖДЕНИЕ – ЭТО КОМФОРТ И УВЕРЕННОСТЬ</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        В базовой комплектации трактора:
                                        • одна из самых больших кабин в этом классе с эргономичным, понятным и надежным управлением;
                                        • кондиционер, отопление, вентиляция;
                                        • пневматическая подвеска кабины.
                                    </span>                                    
                                    
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                   
                                    <td>
                                    <table width="300" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        
                                        <tbody>
                                        
                                            <tr style="background-color: #d1d3d4;">
                                                <td style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>Модель</strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>TTX 230 М</strong></span></td>
                                            </tr>
                                            <tr style="background: #d1d3d4;">
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">ДВИГАТЕЛЬ</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">FTP IVECO Common Rail Euro III</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Число цилиндров, шт./рабочий объем, л</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">6 / 6728</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Максимальная мощность кВт (л.с.)</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">165 (225)</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Объем топливного бака, л</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">380</span></td>
                                            </tr>
                                            <tr style="background: #d1d3d4;">
                                                <td colspan="2" style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">ТРАНСМИССИЯ</span></td>
                                                
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Коробка передач</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">XtraSpeed 8 Powershifts/Shuttle</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Максимальная скорость, км/ч</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">40 – ограничена электроникой</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество передач<br /> вперед /назад</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">32/24</span></td>
                                            </tr>                                            
                                             <tr style="background: #d1d3d4;">
                                                <td colspan="2" style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">ГИДРАВЛИЧЕСКАЯ СИСТЕМА</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Производительность, л/мин</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">129</span></td>
                                            </tr>
                                            <tr style="background: #d1d3d4;">
                                                <td colspan="2" style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">НАВЕСНОЕ УСТРОЙСТВО</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Трехточечное, максимальная грузоподъемность на концах тяг, кг</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">10 500</span></td>
                                            </tr>
                                            <tr style="background: #d1d3d4;">
                                                <td colspan="2" style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">ГАБАРИТЫ (могут изменяться в зависимости от комплектации трактора)</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Колесная база (В)/ длина с балластом (С)/ ширина без спарки (Е)/ высота (А), мм</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">2 873 / 5 307 / 2 415 / 3000</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Масса без балласта (зависит от комплектации), кг</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">7 700</span></td>
                                            </tr>    
                                            
                                        </tbody>
                                </table>
                                    </td>
                                   
                                </tr>
                                <tr><td colspan="3"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                                <tr>
                                <td colspan="3">
                                <table width="638" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285; margin-top: 10px;">
                                        
                                        <tbody>
                                        
                                            <tr style="background-color: #d1d3d4;">
                                                <td width="70%" style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>Модель</strong></span></td>
                                                <td width="30%" style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>Цена</strong></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Трактор «MC TTX 230» (c механическим управлением диапазонов переключения передач)</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;"><? echo $data['price1']; ?></span></td>
                                            </tr>
                                           
                                        </tbody>
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
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block; "/></td></tr>
       
      <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Высокопроизводительная зерновая сеялка Double Disk с исключительной заделкой семян</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/amity-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/amity-disk1.jpg" width="638" border="0"  /><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                
                                <tr valign="top">
                                    <td width="328">
                                    
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">1. КЛАССИЧЕСКИЙ УНИВЕРСАЛ<br /></span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Дисковая сеялка Double Disk подходит для традиционной и минимальной технологий обработки почвы с одновременным внесением удобрений.                                                                      
                                    Каждый сошник имеет индивидуальную настройку глубины и усилия давления на почву, что позволяет эффективно сеять в том числе и по колее трактора.                                      
                                    Точность сохраняется даже на больших скоростях.                                                              
                                    На ровных полях сеялка способна производить посев на скорости до 15 км/ч.                                    
                                    Идеально подходит для высева рапса и других мелкосеменных культур, где очень важно производить посев на постоянную и малую глубину.<br />
                                    </span>
                                     <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">2. СОШНИК-ВЕЗДЕХОД<br /></span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Двухдисковый сошник опирается на прикатывающее колесо, которое служит одновременно копиром. 
                                        Такая конструкции позволяет производить индивидуальную сверхточную настройку глубины сева путем перемещения прикатывающего колеса относительно сошника.
                                        Также сошник имеет мощный литой двусторонний чистик дисков с автоматическим прижимом пружиной.<br />
                                    </span>
                                     <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">3. В УСЛОВИЯХ СТЕРНИ<br /></span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Если нужно посеять в твердую почву или в поле имеющие растительные остатки, можно увеличивать давление сошника на грунт, как отдельно для каждого сошника, так и сразу для всей сеялки гидравлически (из кабины трактора).
                                        Пружинная регулировка давления создает предварительное давление на каждый сошник.<br />
                                    </span>  
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">4. МЕНЬШЕ ВРЕМЕНИ НА ЗАГРУЗКУ!<br /></span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Бункер выполнен из нержавеющей стали, расположен за сеялкой, имеет две оси и широкие шины 23,1R26 для снижения давления на почву, снабжен самозагрузочным шнеком 20 см с пластиковой спиралью для снижения травмирования семян. 
                                        Общий объем бункера 9865 литров, разделен на две секции: 5920 л под семена и 3945 л под минеральные удобрения. 
                                        Можно использовать оба бункера под семена.
                                    </span>                                     
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/amity-disk2.jpg" width="300" border="0" /><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/><img src="http://www.lbr.ru/images/kp/amity-disk3.jpg" width="300" border="0" />
                                    <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/><img src="http://www.lbr.ru/images/kp/amity-disk4.jpg" width="300" border="0" />
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
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                
                                <tr valign="top">
                                    <td width="328">
                                    
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: black; text-transform: uppercase;">Сеялкой можно засеять 150 га за день работы в поле с трактором всего 220 л.с.!<br /></span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        • Экономия топлива при посеве
                                    <br />• Идеальный контроль глубины высева по каждому ряду
                                    <br />• Самоочищающиеся прикатывающие колёса
                                    <br />• Гидравлическое регулируемое давление прикатывающих колес 
                                    <br />• Исключительная заделка семян при высокой скорости движения
                                    <br />• Заднеприцепной бункер из нержавеющей стали 
                                    <br />• Возможность внесения сухих удобрений вместе с семенами<br />
                                    </span>                             
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/><img src="http://www.lbr.ru/images/kp/amity-disk5.jpg" width="300" border="0" /><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                    </td>
                                   
                                </tr>
                                <tr><td colspan="3"><img src="http://www.lbr.ru/images/kp/amity-disk6.jpg" width="638" border="0"  /><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
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
                                <tr valign="top">
                                    <td width="328">                                    
                                     <table width="328" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tbody>                                           
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая ширина, м</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">13,7</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Емкость бункера, л</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">9 865</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество дисковых сошников</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">90</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Диаметр дисков, см</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">35,6</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Прикатывающие колеса, см</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">35,6 x 7,6</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Система контроля высева</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">на распределитель</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Междурядье, см</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">15,2</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая скорость, км/ч</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">10-15</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Требуемая мощность трактора, л.с.</span></td>
                                                <td style="text-align: center;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">220</span></td>
                                            </tr>
                                            
                                        </tbody>
                                </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/amity-disk7.jpg" width="300" border="0" /><br />
                                    </td>
                                   
                                </tr>
                            </table>
                 
            </td>
        </tr>
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block; "/></td></tr>      
        <tr align="right">
            <td align="center"><span style="font-family: Calibri, sans-serif; font-size:32px; font-weight: bolder; color: #d1232a;">В наличии 5 тракторов и 5 посевных комплексов, предложение ограничено!</span>
            </td>
        </tr>       
        
               
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
                                            Всю подробную информацию по заинтересовавшим Вас моделям техники, а также опыт эксплуатации и отзывы потребителей Вы сможете получить у Вашего персонального менеджера.
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
