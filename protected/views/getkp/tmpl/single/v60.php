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
    <table width="638" cellspacing="1" cellpadding="1" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px;">
        <tr align="right">
            <td><span style="font-family: Calibri, sans-serif; text-align: center; font-size:32px; font-weight: bolder; color: #d1232a;">ВОЗДЕЛЫВАНИЕ ПРОПАШНЫХ КУЛЬТУР</span>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 26px; font-weight: bolder;">Пневматические сеялки точного высева SIGMA 5</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/sfoggia_logo.jpg" style="display: block; width: 80px;"/></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/sigma.jpg" width="638" style="display: block; margin-top: 2px;"/></td></tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    
                    <tr>
                        <td> 
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr><td colspan="2"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                                <td width="400">
                                   <span style="display: block; text-align: justify; font-family: sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Навесные пневматические сеялки точного высева <strong>SIGMA 5</strong>, производства итальянской фирмы SFOGGIA, применяются для высева семян как в обработанную, так и в не обработанную почву (при наличии остатков культур) с использованием специальной комплектации высевающего модуля.<br />
                                    Прочная конструкция сеялки, удобство и гибкость в эксплуатации, а также соблюдение всех параметров посева, позволяют использовать сеялку на <strong>скорости 10-12 км/ч</strong>. 
                                    Двойные дисковые сошники и специальные боковые колеса, каждой высевающей секции, гарантируют постоянную глубину заделки семян даже при изменяющихся характере и структуре почвы.
                                    </span> 
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>                                   
                                    </td> 
                                    <td width="228"><span style="font-family:  sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a;">Сеялки SIGMA 5 могут применяться для сева <br /></span>                                
                                     <span class="text" style="font-size: 14px; line-height: 20px;">
                                    • кукурузы<br />
                                    • подсолнечника<br />
                                    • сои<br />
                                    • фасоли<br />
                                    • сорго<br />
                                    • гороха<br />
                                    • хлопка и прочих культур.<br />
                                    • сахарной свеклы и др. овощей – от совершенной формы до самой неправильной<br />
                                    </span></td>                                   
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
                <table width="628" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td width="638">                                    
                            <span style="font-family:  sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Высевающий аппарат SIGMA 5</span>
                            <span style="display: block; text-align: justify; font-family: sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Изготовлен из сплава на основе алюминия, делающий его недеформируемым, нечувствительным к колебаниям температуры, крепким и легким, обеспечивая постоянное качество высевания даже после многих лет работы.
                            <strong>Низкие уровни трения</strong> – отсутствие необходимости частого технического обслуживания.
                            </span>
                        </td>                                    
                        </tr>
                        <tr>
                        <td width="638">
                            <span style="display: block; text-align: justify; font-family: sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                            <img align="right" src="http://www.lbr.ru/images/kp/sigma_1.jpg" style="width: 40%;" border="0" />
                            <strong> Переключатель (А)</strong>, 4-х зубчатый, округленного профиля. 
                                    Отбирает семена более аккуратно и тщательно, это исключает попадание парных семян. 
                            <strong>Лопасть (В)</strong> перемешивает семена, которые прилипают к центрам отверстий диска, исключая таким образом разламывание семян и обеспечивая равномерность высева.
                            <strong>Язычок (шпонка) (С)</strong> облегчает отделение семян в пункте - гарантирует точное расстояние между семенами.
                            <strong>Тефлоновое уплотнительное кольцо высевающего диска (Е)</strong> обеспечивает постоянный уровень вакуума, кроме того, его легко заменить. 
                                    Секция снабжена: проверочным прозрачным и открывающимся окном и дверцей для разгрузки оставшихся семян в высевном элементе.
                        </span>
                        </td>                                    
                        </tr>
                </table>
            </td>
        </tr>
        <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
         <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; border-top: 4px solid #d1232a; height: 1px;">
        <tr align="center">
            <td><span style="font-family: Calibri, sans-serif; font-size:36px; font-weight: bolder; color: #AAAAAA;">СЕЯЛКИ ЗЕРНОВЫЕ И ПОСЕВНЫЕ КОМПЛЕКСЫ НА ИХ БАЗЕ</span></td>
        </tr>
        
    </table>
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                    <img style="margin-bottom: 10px;" src="http://www.lbr.ru/images/kp/polonez_dablo3.jpg" width="317" border="0" />
                    <img style="margin-bottom: 10px;" src="http://www.lbr.ru/images/kp/polonez_dablo4.jpg" width="317" border="0" /></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="317">
                                    
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Для регулировки давления сошников сеялка оборудована центральным гидравлическим прижимом. Также каждый сошник имеет индивидуальную пружину для индивидуальной регулировки заглубления.
                                    </span>
                                   <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; text-align: left; text-transform: uppercase;"><br />СТАНДАРТНОЕ ОБОРУДОВАНИЕ СЕЯЛКИ POLONEZ:<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        1.  Самоочищающиеся 2-х дисковые сошники. <br />
                                        2.  Гидравлические маркеры (следоразметчики). <br />
                                        3.  Загрузочный помост со ступеньками.<br />
                                        4. Центральная и индивидуальная система регулировки заглубления сошников.<br />
                                        <img style="margin-bottom: 10px;" src="http://www.lbr.ru/images/kp/polonez_dablo6.jpg" align="right" vspace="5" hspace="5" width="170px" border="0" />
                                        5. Комплект пружинных загортачей.<br />
                                        6. Следорыхлители тракторной колеи.<br />
                                        7. Бесступенчатая коробка передач. <br />
                                        8. Электрическая система создание технологической колеи.<br />
                                     
                                    </span>
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; text-align: left; text-transform: uppercase;"><br /><b>ОПЦИИ:</b><br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        <img style="margin-bottom: 10px;" src="http://www.lbr.ru/images/kp/polonez_dablo7.jpg" align="right" vspace="5" hspace="5" width="170px" border="0" />
                                        1. Анкерные сошники.
                                        2. Комплект прикатки за каждым сошником.
                                        3. Специальная комплектация Polonez «Травник» (обеспечивает с основным посевом зерновых подсев трав).
                                        
                                        
                                    </span>
                                    <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                    <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        <img style="margin-bottom: 10px;" src="http://www.lbr.ru/images/kp/polonez_dablo8.jpg" align="right" vspace="5" hspace="5" width="170px" border="0" />
                                        Специальная комплектация Polonez Dublo 4/1000 D – <span style="color: rgb(211, 35, 42)">ВНЕСЕНИЕ МИНЕРАЛЬНЫХ УДОБРЕНИЙ</span> совместно с основным посевом. В данном варианте бункер разделен на 2 части подвижной перегородкой: 600 дм3 – под зерно и 400 дм3 – под удобрения. При необходимости перегородку можно сдвинуть и уменьшить отделение под удобрения.
                                        
                                        
                                    </span>
                                     
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td width="317">
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; text-align: left; text-transform: uppercase;">ПРИВЫЧКА ИЛИ ПЕРЕДОВЫЕ ТЕХНОЛОГИИ, ЧТО ВЫГОДНЕЙ?<br /></span>
                                    <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Катушечный дозирующий механизм и бесступенчатая коробка передач обеспечивают точность и равномерность посева. Катушки выполнены из высокопрочного пластика, специальная конструкция позволяет высевать и зерновые, и мелкосеменные культуры без замены катушки.                                    
                                    </span>
                                    <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        <img style="margin-bottom: 10px; margin-right: 5px;" src="http://www.lbr.ru/images/kp/polonez_dablo5.jpg" align="left" vspace="5" hspace="0" width="170px" border="0" />
                                        2-х дисковые сошники расположены на расстоянии 26 см друг от друга в «шахматном» порядке, что обеспечивает бесперебойную работу без забивания. Также диски сошника расположены со смещением: производится самоочистка сошника, облегчается разрезание пожнивных остатков, улучшается проникновение сошника в почву, снижается налипание влажной почвы на диски. Использование закрытого подшипника увеличивает надежность данного узла.
                                    </span>
                                    <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Данная сеялка отлично работает <span style="color: rgb(211, 35, 42)">В СЦЕПКЕ С ПРЕДПОСЕВНЫМ КУЛЬТИВАТОРОМ ATLAS ИЛИ С ДИСКОВЫМ АГРЕГАТОМ ARES</span>, что позволяет производить почвообработку совместно с посевом. При использовании данной технологии происходит экономия ГСМ и снижается уплотнение почвы за счет сокращения количества проходов, производительность увеличивается на 40%.                                    
                                    </span>
                                    <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                    <img style="margin-bottom: 10px;" src="http://www.lbr.ru/images/kp/polonez_dablo9.jpg" width="317" border="0" />
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        <b>Технический ресурс сеялки составляет 5-7 лет</b> при средней степени загруженности 2 раза в год (озимый и яровой сев) по 250 га. При этом за счет надежности узлов и агрегатов исключаются простои в сезон посевной.                                    
                                    </span>
                                    <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                    <span style="display: block; text-align: justify; font-family: Calibri, sans-serif; font-size: 20px; color: rgb(211, 35, 42); font-weight: bold; margin: 0 0 5px 10px;">
                                                ЭКОНОМИЧЕСКАЯ ВЫГОДА:
                                    </span>
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        По сравнению с отечественными сеялки за счет точности и качества высева прирост урожайности составит от 15-20%, что даст прямую экономическую выгоду: при 250 га высеваемых площадей и при средней урожайности 25 ц с га около 1,2 млн. за сезон! <br />
                                        <b>POLONEZ – ВАШИ САМЫЕ ЭФФЕКТИВНЫЕ ИНВЕСТИЦИИ В ПОСЕВ!</b>                                    
                                    </span>
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
