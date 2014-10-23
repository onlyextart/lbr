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
            <td><span style="font-family: Calibri, sans-serif; font-size:32px; font-weight: bolder; color: #d1232a;">Опрыскиватели от А до Я - для любых задач и любого бюджета!</span>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Навесной опрыскиватель MOSQUITO</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mosquito-logo.jpg" width="80px" border="0" /></td>
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
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; text-align: left; color: #d1232a; text-transform: uppercase;">1. САМАЯ ПОПУЛЯРНАЯ СЕРИЯ НАВЕСНЫХ ОПРЫСКИВАТЕЛЕЙ В РОССИИ!<br /></span>
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Каждый год в России продается более 900 навесных опрыскивателей Mosquito.                               
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; text-align: left; color: #d1232a; text-transform: uppercase;">2. ЛУЧШИЙ В БОРЬБЕ С САРАНЧОЙ!<br /></span>
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Высокая скорость работы в сочетании с низкой ценой опрыскивателя, позволили опрыскивателю стать одним из лучших и экономичных решений для быстрой обработки полей против нашествия саранчи.                               
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; text-align: left; color: #d1232a; text-transform: uppercase;">3. КОМПАКТНОСТЬ И МАНЕВРЕННОСТЬ!<br /></span>
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Благодаря компактности и высокой маневренности навесных опрыскивателей Mosquito (производство Польша), их часто используют при краевой обработке полей, где не могут работать прицепные или самоходные.                               
                                    </span>
                                     
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/opriskovateli_ot_a_do_ya.jpg" width="300" border="0" />
                                    
                                    </td>
                                   
                                </tr>
                                
                            </table>
                            <table width="638" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tr bgcolor="#d1d3d4">
                                            <td width="30%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">300/12</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">600/12</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">800/12</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">800/12 Full Hydr.</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">800/15</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">1000/15</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">1000/18</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Рабочая ширина захвата штанги, м</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">12</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">12</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">12</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">15</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">15</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">15</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">18</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Резервуар, л</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">300</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">600</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">800</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">600</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">800</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">1000</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">1000</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Диапазон регулирования высоты распылителей над землей, см</span></td>
                                            <td colspan="7"><span style="font-family:Calibri, sans-serif; font-size: 12px;">50-140</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Требуемая мощность трактора, л.с.</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">30</span></td>
                                            <td colspan="4"><span style="font-family:Calibri, sans-serif; font-size: 12px;">50</span></td>
                                            <td colspan="2"><span style="font-family:Calibri, sans-serif; font-size: 12px;">80</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price1']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price2']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price3']; ?></span></td>                                            
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price4']; ?></span></td>                                            
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price5']; ?></span></td>                                            
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price6']; ?></span></td>                                            
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price7']; ?></span></td>                                           
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Прицепной опрыскиватель OZONE 2000</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/ozone-logo.jpg" border="0" /></td>
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
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; text-align: left; color: #d1232a; text-transform: uppercase;">1.СОБРАН ИЗ ИТАЛЬЯНСКИХ КОМПЛЕКТУЮЩИХ!!<br /></span>
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        a. Поршневой мембранный насос марки UDOR производительностью 170 л/минуту обеспечивает норму расхода химикатов от 60 до 650 л/га. <br />
                                   b. Распределители марки ARAG позволяют проводить отключение любой из 5 секций опрыскивателя. <br />
                                   c. Лазерная сварка гарантирует высокое качество сварных швов и долговечность штанги, а качественная импортная сборка позволит использовать опрыскиватель в течение нескольких сезонов.<br />                               
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; text-align: left; color: #d1232a; text-transform: uppercase;">2. МАКСИМАЛЬНАЯ РЕНТАБЕЛЬНОСТЬ – ЭФФЕКТИВНЫЕ ИНВЕСТИЦИИ!!<br /></span>
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Цена опрыскивателя позволяет окупить его приобретение в течение одного сезона использования.                               
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; text-align: left; color: #d1232a; text-transform: uppercase;">3. ПРОХОДЫ БЕЗ ВРЕДА ДЛЯ РАСТЕНИЙ!!<br /></span>
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Изменяемая колея опрыскивателя дает возможность использовать его на различных типах междурядья при химической защите овощей, пропашных и зерновых культур.                               
                                    </span>
                                     
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/opriskovateli_ot_a_do_ya1.jpg" width="300" border="0" />
                                    
                                    </td>
                                   
                                </tr>
                                
                            </table>
                            <table width="638" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tr bgcolor="#d1d3d4">
                                            <td width="30%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">OZONE 2000</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">OZONE 2000</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">OZONE 3000</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">OZONE 3000 с компьютером ARAG BRAVO 180</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Рабочая ширина захвата штанги, м</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">18</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">21</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">24</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">24</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Резервуар, л</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">2000</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">2000</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">3000</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">3000</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Диапазон регулировки высоты штанги над землей</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">500-1700</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">500-1700</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">500-2000</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">500-2000</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Мощность трактора, л.с.</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">45-50</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">55-60</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">80</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">80</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price8']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price9']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price10']; ?></span></td>                                            
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price11']; ?></span></td>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Прицепной опрыскиватель BARGAM</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/bargam-logo.jpg" width="125" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                    <img src="http://www.lbr.ru/images/kp/opriskovateli_ot_a_do_ya2.jpg" width="638" border="0" /></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td colspan="2" width="628">                                        
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">1. Экономия химикатов до 30%!!</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Прицепные опрыскиватели Bargam оснащены компьютером ARAG BRAVO 180, который позволяет соблюдать установленную норму внесения химикатов вне зависимости от скорости движения опрыскивателя.
                                    </span>
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">2. Точность внесения превыше всего!</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Прицепные опрыскиватели Bargam оснащены специально сконструированной для российских условий, системой стабилизации штанги. Система состоит из блока пневмоподушек и специальных стабилизаторов, что позволяет минимизировать колебания штанги при движении опрыскивателя.
                                    </span>
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">3. Большая площадь покрытия химикатами!</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Использование технологии воздушного рукава (опция) позволяет увеличить площадь покрытия листьев растений в 8-10 раз, что способствует повышению эффективности вносимых продуктов и снижению расходов на химикаты.
                                    </span>
                                    
                                    
                                    
                                    </tr>
                                     
                                    </td>
                                    
                                   
                                </tr>
                            </table>
                            <table width="638" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tr bgcolor="#d1d3d4">
                                            <td width="30%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">ELIOS BDL</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">FOX BDL</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">Compact</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">ELIOS BDL AIR</span></td>                                            
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">FOX BDL AIR</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Рабочая ширина захвата штанги</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">24</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">28</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">36</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">18</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">24</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Резервуар</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">3000</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">3000</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">3700</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">2700</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">4000</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Диапазон регулировки высоты штанги над землей</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">500-1200</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">500-1200</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">500-2100</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">500-1200</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">500-2100</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Мощность трактора</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">80</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">80</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">100</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">100</span></td>                                            
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">1200</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Воздушный рукав</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">-</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">+</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">-</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">+</span></td>                                            
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">-</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price12']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price13']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price14']; ?></span></td>                                            
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price15']; ?></span></td>                                            
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price16']; ?></span></td>
                                        </tr>
                                </table>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Прицепной опрыскиватель BRANDT</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/bargam-logo.jpg" width="125" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                    <img src="http://www.lbr.ru/images/kp/opriskovateli_ot_a_do_ya3.jpg" width="638" border="0" /></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td colspan="2" width="628">                                        
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">1. ЗАПАТЕНТОВАННЫЕ КОНУСНЫЕ НАКОНЕЧНИКИ – РАБОТА ПРИ СКОРОСТИ ВЕТРА БОЛЕЕ 30 КМ/ЧАС</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Все опрыскиватели оснащены запатентованными конусными колпаками для защиты угла распыла от ветра. Технология снижения турбулентности WindCone, позволяет сохранить факел распыла, что существенно увеличивает эффективность химической защиты. 
                                   Легкие конусные наконечники не заслоняют видимость и не влияют на вес штанги и в отличии от обычных экранов предотвращают скопление химикатов.
                                    </span>
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">2. ТОЧНАЯ СИСТЕМА – ЭКОНОМИЯ КАЖДОЙ КАПЛИ!!</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Монитор MicroTrak 3405FII (GPS совместимый, 5 автоматический контроллер норм внесения рабочей жидкости) позволяет поддерживать постоянной установленную норму расхода рабочей жидкости вне зависимости от скорости движения опрыскивателя.
                                    </span>
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">3. ВЫГОДНЫЕ ИНВЕСТИЦИИ – НАДЕЖНОЕ ВЛОЖЕНИЕ!!</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        На все опрыскиватели Brandt наносится специальное порошковое покрытие, которое в 10 раз! более износостойкое, чем обычная краска, что позволяет опрыскивателю выглядеть как новый, даже через несколько лет использования.
                                    </span>
                                    
                                    
                                    
                                    </tr>
                                    
                                    </td>
                                    
                                   
                                </tr>
                            </table>
                             <table width="638" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tr bgcolor="#d1d3d4">
                                            <td width="40%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="30%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">QF1500-80</span></td>
                                            <td width="30%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">QF2500-100</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Рабочая ширина захвата штанги</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">24</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">30</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Резервуар</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">3800</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">5700</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Диапазон регулировки высоты штанги над землей</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">330-1400</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">330-1400</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Мощность трактора</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">80</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">100</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Расстояние между колесами</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">213-350</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">213-350</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price17']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price18']; ?></span></td>
                                        </tr>
                                </table>
                        </td> 
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Прицепной опрыскиватель ОП-2500</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/remkom.jpg" width="80px" border="0" /></td>
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
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; text-align: left; color: #d1232a; text-transform: uppercase;">1. Опрыскиватель с итальянской начинкой! <br /></span>
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Итальянские комплектующие гарантируют качественную работу и долгий срок службы. Высокопроизводительный итальянский насос  Imovilli pompe позволяет вносить не только пестициды, но и жидкие и минеральные удобрения.                                 
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; text-align: left; color: #d1232a; text-transform: uppercase;">2. Комфортное и легкое управление!  <br /></span>
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Полная гидравлика штанги позволяет легко поднимать и раскладывать штангу. А автономное управление, как левой, так и правой частью штанги  очень удобно при объезде препятствия, или движения по краю поля.                               
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; text-align: left; color: #d1232a; text-transform: uppercase;">3. Прохождение препятствий без колебаний! <br /></span>
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Гидроаккумулятор на штанге гасит колебания, передаваемые с колес на штангу опрыскивателя во время движения.                               
                                    </span>
                                     
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/opriskovateli_ot_a_do_ya4.jpg" width="300" border="0" />
                                    
                                    </td>
                                   
                                </tr>
                                
                            </table>
                            <table width="638" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tr bgcolor="#d1d3d4">
                                            <td width="40%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="15%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">ОП-2500-18</span></td>
                                            <td width="15%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">ОП-2500-18К</span></td>
                                            <td width="15%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">ОП-2500-24</span></td>
                                            <td width="15%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">ОП-2500-24К</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Рабочая ширина захвата штанги, мм</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">1800, полная гидравлика</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">1800, полная гидравлика</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">2400, полная гидравлика</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">2400, полная гидравлика</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Объем бака, л</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">2500</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">2500</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">2500</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">2500</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Высота установки штанги относительно поверхности поля, мм</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">До 2100</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">До 2100</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">До 2100</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">До 2100</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">РПроизводительность насоса, л/мин</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">160</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">160</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">205</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">205</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Мощность трактора, л.с.</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">80</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">80</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">80</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">80</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Ширина колеи (бесступенчатое регулирование), мм</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">1400-2100</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">1400-2100</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">1400-2100</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">1400-2100</span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price19']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price20']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price21']; ?></span></td>                                            
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price22']; ?></span></td>                                            
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
