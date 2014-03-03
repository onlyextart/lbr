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
            <td><span style="font-family: Calibri, sans-serif; font-size:32px; font-weight: bolder; color: #d1232a;">Сеялка Spartan от Great Plains 607 + Трактор McCormick = двойная выгода</span><br><span style="font-family: Calibri, sans-serif;  text-align: right; font-size:38px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Переходить на ноль стало проще!</span></td>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Трактор McCORMICK TTX 230</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mccormick-logo.jpg" border="0" /></td>
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
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">СОВРЕМЕННЫЙ.<br /> ЕВРОПЕЙСКИЙ. <br /> Лучший по цене!<br /></span>
                                        <br>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">1.УДОБНАЯ ЗАМЕНА K-700<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">Трехточечное навесное устройство. Грузоподъемность - до 10 500 кг. Гидравлическая система (130 л/мин). Контроль глубины работы и подъема навесного оборудования.<br /></span>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">2. ВСЕГО 20 000 РУБ. ЗА ЛОШАДЬ!<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">6-ти цилиндровый двигатель IVECO мощностью 225 л.с. НИЗКИЕ ЭКСПЛУАТАЦИОННЫЕ РАСХОДЫ. МИНИМУМ ВРЕМЕНИ НА ПРОВЕДЕНИЕ ТО.<br /></span>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">3. ТРАКТОРИСТ – ЭТО ЧЕЛОВЕК.<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">В данном классе тракторов реализована интегрированная концепция подвески и комфорта вождения.<br> В базовой комплектации трактора:<br />• одна из самых больших кабин в этом классе с эргономичным, понятным и надежным управлением;<br />• кондиционер, отопление, вентиляция;<br />• пневматическая подвеска кабины.</span>
                                        
                                        
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mccormick1.jpg" width="300" border="0" /><span style="font-family: Calibri, sans-serif; font-weight: bolder;"><br />Технические характеристики<br /></span>
                                    <table width="300" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: justify;">
                                    <tr bgcolor="#d1d3d4">
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Цена</span></td>                                                         
                                    </tr>
                                    
                                    <tr>
                                    <td width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">ДВИГАТЕЛЬ</span></td>
                                    <td width="70" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">FTP IVECO Common Rail Euro III</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Число цилиндров, шт./рабочий объем, л</span></td>
                                    <td width="70" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">6/6728</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Максимальная мощность, кВт (л.с)</span></td>
                                    <td width="70" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">165 (225)</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Объем топливного бака, л</span></td>
                                    <td width="70" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">380</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">ТРАНСМИССИЯ</span></td>
                                    <td width="70" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;"></span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Коробка передач</span></td>
                                    <td width="70" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">XtraSpeed 8 Powershifts/Shuttle</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Максимальная скорость, км/ч</span></td>
                                    <td width="70" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">40- ограничена электроникой</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество передач вперед/назад</span></td>
                                    <td width="70" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">32/24</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">ГИДРАВЛИЧЕСКАЯ СИСТЕМА</span></td>
                                    <td width="70" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;"></span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Производительность, л/мин</span></td>
                                    <td width="70" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">129</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">НАВЕСНОЕ УСТРОЙСТВО</span></td>
                                    <td width="70" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;"></span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Трехточечное, максимальная грузоподъемность на концах тяг, кг</span></td>
                                    <td width="70" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">10 500</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td colspan="2" width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">ГАБАРИТЫ (могут изменяться в зависимости от комплектации трактора)</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Колесная база (B)/ длина с балластом (C)/ ширина без спарки (E)/ высота (A), мм</span></td>
                                    <td width="70" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2 873 / 5 307 / 2 415 / 3 000</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="230"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Масса без балласта (зависит от комплектации), кг</span></td>
                                    <td width="70" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">7 700</span></td>
                                    </tr>
                                    
                                    </table></td>
                                   
                                </tr>
                            </table>
                        </td>
                        
                    </tr><tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <td colspan="2">
                                   <table cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: justify;">
                                    <tr bgcolor="#d1d3d4">
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Цена с НДС</span></td>                                                         
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Трактор “MC TTX 230” (c механическим управлением диапазонов переключения передач) пр-во РФ</span></td>
                                    <td align="center" width="150"><span style="font-family:Calibri, sans-serif; font-size: 14px;"><? echo $data['price1']?></span></td>
                                    </tr>
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Трактор McCORMICK TTX 230 E ( с электронным управлением диапазонов переключения передач) пр-во Италия</span></td>
                                    <td align="center" width="150"><span style="font-family:Calibri, sans-serif; font-size: 14px;"><? echo $data['price2']?></span></td>
                                    </tr>
                                    
                                    </table>
                                   </td>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
                 <span style="clear: both; display: block;  background: white; color: rgb(211, 35, 42); text-transform: uppercase; text-align: center; font-size: 15px; padding: 5px 0; font-family:Calibri,sans-serif; padding: 25px 0 20px;"> При скорости работы в 12 – 15 км/ч сеялки с лёгкостью превосходят<br /> 12-ти и 18-ти метровые посевные комплексы с анкером или стрельчатой лапой, работающие со скоростью 8 км/ч, по производительности.</span>
            </td>
        </tr>
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block; "/></td></tr>
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                    </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td>
                                     
                                     <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Двойная экономия при той же производительности:<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">Трактор 220 л.с. + сеялка 12 метров = 1500 Га яровых + 2000 Га озимых при себестоимости 5000 рублей на каждый посеянный гектар в год <br />Трактор 200 л.с. + сеялка Spartan 6 метров = 1500 Га яровых + 2000 Га озимых при себестоимости 2500 рублей на каждый посеянный гектар в год</span>
                                    
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><br /><img src="http://www.lbr.ru/images/kp/mccormick2.jpg" width="300" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
                <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;"><br />Плюсы:<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">+ требуемая мощность тракторов – 170 л.с. для сеялок Spartan 607 (6 м) соответственно!
                                        <br />+ транспортная ширина – 3 метра!
                                        <br />+ 15-20% прирост урожайности по сравнению с агрегатами со стрельчатой лапой за счет точности и равномерности посева!
                                        <br />+ работа по кукурузе и подсолнечнику
                                        <br />+ работа по рапсу и зерновым без подработки</span>
            <br /><br />
            <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">1. Переходить на ноль стало ПРОЩЕ!<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">Пневматическая зерновая сеялки Spartan 607 Great Plains предназначен для работы по технологии минимальной или нулевой обработки почвы и имеет двухдисковый сошник с передним разрезным турбодиском, такая концепция позволят использовать сеялки в других технологиях. Режущие турбодиски оснащены предохранительными пружинами, которые содействуют лучшему проникновению дисков в почву. Ничто не мешает их снять и работать по подготовленной почве.</span>
            
            <br /><br />
            <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">2. Пропашной сошник на зерновой сеялке!<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">Независимый сошник на параллелограмме обеспечивает точность высева семян во всех условиях, начиная с тяжелых стерневых и заканчивая работой по обработанной почве. Сошник оборудован двойными открывающими дисками со смещением, мягко укладывающим семена за счет длинной семенной трубки, за которым следует успокоитель, прижимая семена к дну борозды. Контроль глубины сева осуществляется Т-образной рукояткой на каждом сошнике, сошники следующие по колее трактора имеют более жесткую настройку.</span>
            
            </td>
        </tr>
        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
        <tr>
            <td>
            <span><img src="http://www.lbr.ru/images/kp/mccormick3.jpg"  width="638" border="0" /></span><br />
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td>
                                    
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">3. По равнинам и холмам.<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">Отлично зарекомендовавшая себя в конструкция орудий Spartan 607 позволяет сеялке независимо опускаться и подниматься при работе на неровных поверхностях. Система гидравлического перераспределения веса способствует увеличению гибкости сеялки и гарантирует равномерность распределения нагрузки по всей ширине захвата орудия. Боковые секции могут опускаться вниз и подниматься вверх, что способствует превосходному копированию поверхности поля.<br /></span>
                                        <br /><span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">4. По любой дороге!<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">В транспортном положении ширина сеялки составляет всего 3 метра, что соответствует Европейским стандартам.<br /></span>
                                        
                                        
                                        
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mccormick4.jpg" width="300" border="0" /><br /><br /><img src="http://www.lbr.ru/images/kp/mccormick5.jpg" width="300" border="0" />
                                    </td>
                                   
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
