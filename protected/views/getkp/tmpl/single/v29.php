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
            <td><span style="font-family: Calibri, sans-serif; font-size:32px; font-weight: bolder; color: #d1232a;">Осенняя распродажа<br />тракторов McCormick</span><br><span style="display:block; font-family: Calibri, sans-serif;  text-align: left; font-size:38px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Современный,<br />европейский,<br />лучший по цене</span>
            </td>
        </tr>
        <tr><td><span>
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
                    <tr><td><img src="http://www.lbr.ru/images/kp/rasprodaga-mccormic.jpg" width="638" border="0" /></td></tr>
                    <tr>
                        <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">                                        
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">1.УДОБНАЯ ЗАМЕНА K-700</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                         Трехточечное навесное устройство. Грузоподъемность - до 10 500 кг. 
                                    Гидравлическая система (130 л/мин). Контроль глубины работы и подъема навесного оборудования.<br />
                                    </span>
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">2. ВСЕГО 20 000 РУБ. ЗА ЛОШАДЬ!</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        6-ти цилиндровый двигатель IVECO мощностью 225 л.с. НИЗКИЕ ЭКСПЛУАТАЦИОННЫЕ РАСХОДЫ. 
                                        МИНИМУМ ВРЕМЕНИ НА ПРОВЕДЕНИЕ ТО.
                                    </span>
                                    
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">3. ТРАКТОРИСТ – ЭТО ЧЕЛОВЕК.</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        В данном классе тракторов реализована интегрированная концепция подвески и комфорта вождения. <br />
                                        В базовой комплектации трактора: <br />
                                        • одна из самых больших кабин в этом классе с эргономичным, понятным и надежным управлением;<br />
                                        • кондиционер, отопление, вентиляция;<br />
                                        • пневматическая подвеска кабины.<br />
                                    </span>  
                                                                      
                                     
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                   
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                     <span style="font-family: Calibri, sans-serif; font-size: 30px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">СОВРЕМЕННЫЙ.<br />ЕВРОПЕЙСКИЙ.<br />ЛУЧШИЙ ПО ЦЕНЕ!</span>
                                     <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                    <table width="300" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        
                                        <tbody>
                                        
                                            <tr style="background-color: #d1d3d4;">
                                                <td style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>Модель</strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>TTX 230 M/У</strong></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">ДВИГАТЕЛЬ</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">FTP IVECO Common Rail Euro III</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Число цилиндров, шт./рабочий объем, л</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">6/6728</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Максимальная мощность, кВт (л.с)</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">165 (225)</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Объем топливного бака, см<sup>3</sup></span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">380</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">ТРАНСМИССИЯ</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;"></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Коробка передач</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">XtraSpeed 8 Powershifts/Shuttle</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Максимальная скорость, км/ч</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">40- ограничена электроникой</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество передач вперед/назад</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">32/24</span></td>
                                            </tr>                                            
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Масса без балласта (зависит от комплектации), кг</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">7 700</span></td>
                                            </tr>
                                            
                                        </tbody>
                                </table>
                                    </td>
                                   
                                </tr>
                                <table width="638" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285; margin-top: 10px;">
                                        
                                        <tbody>
                                        
                                            <tr style="background-color: #d1d3d4;">
                                                <td width="70%" style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>Модель</strong></span></td>
                                                <td width="30%" style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>Цена</strong></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Трактор “MC TTX 230” (c механическим управлением диапазонов переключения передач) пр-во РФ</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;"><? echo $data['price1']; ?></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Трактор McCORMICK TTX 230 E ( с электронным управлением диапазонов переключения передач) пр-во Италия</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;"><? echo $data['price2']; ?></span></td>
                                            </tr>                                            
                                            
                                        </tbody>
                                </table>
                                
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Трактор McCORMICK TTX 190</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mccormick-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/rasprodaga-mccormic1.jpg" width="638" border="0" /></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">                                        
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">1. McCORMICK – РЕАЛЬНО ВЫГОДНАЯ ЦЕНА!</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                         10 % выигрыша в цене на многофункциональный трактор с богатой базовой комплектацией среди европейских тракторов аналогичного класса.<br />
                                    </span>
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">2. НА ВСЕ РУКИ МАСТЕР!</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Тракторы многофункциональны и незаменимы в работе при агрегатировании с:<br />
                                        • зерноперегрузчиками;<br />
                                        • с прицепами;<br />
                                        • с косилкой-бабочкой;<br />
                                        • с пропашными 12-ти (16-ти)-рядными сеялками;<br />
                                        • с навесными и полунавесными плугами;<br />
                                        • с фронтальными погрузчиками;<br />
                                        • с бочками для внесения удобрений;<br />
                                        • свеклоуборочными комплексами «ВИК»;<br />
                                        • и так далее, и так далее, и так далее!
                                    </span>
                                    
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">3. КАБИНА КЛАССА ЛЮКС В СТАНДАРТНОЙ КОМПЛЕКТАЦИИ:</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        • одна из самых больших кабин в этом классе с эргономичным, понятным и надежным управлением;<br />
                                        • кондиционер, отопление, вентиляция;<br />
                                        • пневматическая подвеска кабины.<br />
                                    </span>  
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">4. ТРАКТОР – ДОЛГОЖИТЕЛЬ!</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Наработка 15 000 моточасов до 1-го капитального ремонта!<br />
                                    </span> 
                                                                      
                                     
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right">                                    
                                    <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                    <table width="300" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        
                                        <tbody>
                                        
                                            <tr style="background-color: #d1d3d4;">
                                                <td style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>Модель</strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>TTX 190 (T3)</strong></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">ДВИГАТЕЛЬ</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">FTP IVECO Common Rail Euro III</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Число цилиндров, шт./рабочий объем, л</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">6/6728</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Максимальная мощность, кВт (л.с)</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">146 (199)</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Объем топливного бака, см<sup>3</sup></span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">350</span></td>
                                            </tr>
                                            <tr style="background-color: #d1d3d4;">
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
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество передач вперед/назад</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">32/24</span></td>
                                            </tr>
                                            <tr style="background-color: #d1d3d4;">
                                                <td colspan="2" style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">ГИДРАВЛИЧЕСКАЯ СИСТЕМА</span></td>
                                                
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Производительность, л/мин</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">129</span></td>
                                            </tr>
                                            <tr style="background-color: #d1d3d4;">
                                                <td colspan="2" style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">НАВЕСНОЕ УСТРОЙСТВО</span></td>
                                                
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Трехточечное, максимальная грузоподъемность на концах тяг, кг</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">10 500</span></td>
                                            </tr>                                             
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Масса без балласта (зависит от комплектации), кг</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">7 700</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Цена</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;"><? echo $data['price3']; ?></span></td>
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
