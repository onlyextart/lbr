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
            <td><span style="display: block; font-family: Calibri, sans-serif; font-size:32px; text-align: right; font-weight: bolder; color: #d1232a;">Когда 6 метров = 12 метров,<br />когда 9 метров = 18 метров…</span><br><span style="display:block; font-family: Calibri, sans-serif;  text-align: left; font-size:38px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Сеялки Spartan ОТ GREAT<br />PLAINS – двойная<br />производительность</span>
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
                            <span style="display: block; font-family: Calibri, sans-serif; color:rgb(211, 35, 42); font-size: 18px; font-weight: bolder; text-align: center;">При скорости работы в 12 – 15 км/ч сеялки с лёгкостью<br /> превосходят 12-ти и 18-ти метровые посевные комплексы с<br /> анкером или стрельчатой лапой, работающие со скоростью 8 км/ч,<br /> по производительности.</span>
                             
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>                    
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                
                                <tr>
                                <td width="328">                                        
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Двойная экономия при той же производительности:</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                    <br />Трактор 375 л.с. + сеялка 12 метров = 1500 Га яровых + 2000 Га озимых в год. Себестоимость гектара при сроке эксплуатации 10 лет - 500 рублей. 
                                    Трактор 200 л.с. + сеялка Spartan 6 метров = 1500 Га яровых + 2000 Га озимых в год. 
                                    Себестоимость гектара при сроке эксплуатации 10 лет - 250 рублей.
                                    </span>
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;"><br /><br /><br />ПЛЮСЫ:<br /></span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        + требуемая мощность тракторов – 170 л.с. и 250 л.с. для сеялок Spartan 607 (6 м) и Spartan 907 (9 м) соответственно! <br />
                                   + транспортная ширина – 3 метра! + 15-20% прирост урожайности по сравнению с агрегатами со стрельчатой лапой засчет точности и равномерности посева!<br />
                                   + работа по кукурузе и подсолнечнику <br />
                                   + работа по рапсу и зерновым без подработки<br />
                                    </span>
                                    
                                    
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td width="300">
                                    <img src="http://www.lbr.ru/images/kp/seyalki-spartan.jpg" width="300" border="0" />
                                    <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;" width="10"/>
                                    <img src="http://www.lbr.ru/images/kp/seyalki-spartan1.jpg" width="300" border="0" />
                                    </td>
                                    </tr>
                                    <tr><td colspan="3"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                                    <tr>
                                    <td colspan="3">                                    
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">1. Переходить на ноль стало ПРОЩЕ!<br /></span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px; width: 638px;"">
                                        Пневматическая зерновая сеялки Spartan 607 и Spartan 907 Great Plains предназначенsыдля работы по технологии минимальной или нулевой обработки почвы и имеет двухдисковый сошник с передним разрезным турбодиском, 
                                    такая концепция позволят использовать сеялки в других технологиях. 
                                    Режущие турбодиски оснащены предохранительными пружинами, которые содействуют лучшему проникновению дисков в почву. 
                                    Ничто не мешает их снять и работать по подготовленной почве.
                                    </span>
                                    </td>                                    
                                    </tr>
                                    <tr>
                                    <td colspan="3">                                    
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;"><br />2. Пропашной сошник на зерновой сеялке!<br /></span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px; width: 638px;">
                                        Независимый сошник на параллелограмме обеспечивает точность высева семян во всех условиях, начиная с тяжелых стерневых и заканчивая работой по обработанной почве. 
                                    Сошник оборудован двойными открывающими дисками со смещением, мягко укладывающим семена за счет длинной семенной трубки, за которым следует успокоитель, прижимая семена к дну борозды. 
                                    Контроль глубины сева осуществляется Т-образной рукояткой на каждом сошнике, сошники следующие по колее трактора имеют более жесткую настройку.
                                    </span>
                                    </td>                                    
                                    </tr>
                                    <tr><td colspan="3"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                                    <tr><td colspan="3"><img src="http://www.lbr.ru/images/kp/seyalki-spartan2.jpg" width="638" border="0" /></td></tr>
                                    <tr><td colspan="3"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                                    <tr>
                                    <td colspan="3">                                    
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">3. По равнинам и холмам.<br /></span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px; width: 638px;"">
                                        Отлично зарекомендовавшая себя в конструкция орудий Spartan 607 и Spartan 907 позволяет сеялке независимо опускаться и подниматься при работе на неровных поверхностях. 
                                    Система гидравлического перераспределения веса способствует увеличению гибкости сеялки и гарантирует равномерность распределения нагрузки по всей ширине захвата орудия. 
                                    Боковые секции могут опускаться вниз и подниматься вверх, что способствует превосходному копированию поверхности поля.
                                    </span>
                                    </td>                                    
                                    </tr>
                                    <tr><td width="314"><img src="http://www.lbr.ru/images/kp/seyalki-spartan3.jpg"  width="314" style="display: block;"/></td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td width="314"><img src="http://www.lbr.ru/images/kp/seyalki-spartan4.jpg"  width="314" style="display: block;"/></td>                                    
                                    </tr>
                                    <tr>
                                    <td colspan="3">                                    
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;"><br />4. По любой дороге!<br /></span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px; width: 638px;"">
                                        В транспортном положении ширина сеялки составляет всего 3 метра, что соответствует Европейским стандартам.
                                    </span>
                                    </td>                                    
                                    </tr>
                                    <tr><td width="314"><img src="http://www.lbr.ru/images/kp/seyalki-spartan5.jpg"  width="314" style="display: block;"/></td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td width="314"><img src="http://www.lbr.ru/images/kp/seyalki-spartan6.jpg"  width="314" style="display: block;"/></td>                                    
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
                                
                                <tr>
                                <td>
                                
                                <table width="638" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285; margin-top: 10px;">
                                        
                                        <tbody>                                       
                                            
                                            <tr>
                                                <td width="50%" style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая ширина, м</span></td>
                                                <td width="25%"><span style="font-family: Calibri, sans-serif; font-size: 12px;">6</span></td>
                                                <td width="25%"><span style="font-family: Calibri, sans-serif; font-size: 12px;">9</span></td>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Требуемая мощность трактора, л.с.</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">от 170</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">от 250</span></td>
                                            </tr>  
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Цена</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;"><? echo $data['price1']; ?></span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;"><? echo $data['price2']; ?></span></td>
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
