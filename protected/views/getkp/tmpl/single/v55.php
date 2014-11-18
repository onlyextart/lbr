<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" style="min-height: 100%">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><? echo $template->title; ?></title>
</head>
<body style="min-height: 100%;">
    <table width="638" style="border-collapse: collapse; border-bottom: 4px solid #d1232a" cellspacing="1" cellpadding="1" align="center" bgcolor="#FFFFFF">
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
                                    <td><span style="font-family:  sans-serif; font-size: 18px; font-weight: bolder;">Пневматические сеялки точного высева SIGMA 5</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/sfoggia_logo.jpg" border="0" style="height: 30px; width: 100px;" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/sigma.jpg" width="638" style="display: block; margin-top: 2px;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr><td width="638" colspan="2"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                                <tr><td width="400">
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
                    </table>
            </td>
            </tr>   
            <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr><td colspan="2"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
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
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                                
                                    <tr>
                                    <table>
                                    <tr>
                                    <td width="400">
                                   <span style="display: block; text-align: justify; font-family: sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Процесс высевания Sigma 5 начинается с разрыхления борозды двумя дисками в форме “V”, создающими семенное ложе, куда в дальнейшем будет высеваться культура. 
                                    Два больших боковых колеса, прилегающие к дискам, определяют глубину борозды и, следовательно, глубину посева.<br />
                                    Трубка выхода семян, расположенная внутри дисков, закругленной формы специальной траектории падения, проводит семя от точки отделения до закладки в семенное ложе. 
                                    Малый сошник, установленный у нижнего основания двух дисков, позволяет улучшить борозду, намеченную дисками. <br />
                                    Процесс высевания завершается окучиванием, осуществляющимся задними колесами в форме “V”, которые аккуратно прикатывают почву по бокам борозды, обеспечивая тем самым благоприятный контакт семян с почвой, устраняя воздушные ямы и препятствуя образованию поверхностной корки.
                                    </span> 
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>                                   
                                    </td> 
                                    <td width="238"><img align="right" src="http://www.lbr.ru/images/kp/sigma_2.jpg" style="width: 100%;" border="0" />
                                    <span style="display: block; text-align: justify; font-family: sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Система высевания с двумя дисками и боковыми колесами контроля глубины, гарантирует неизменную глубину высева даже в затруднительных условиях.
                                    </span></td>                                   
                                    </tr></table></tr>                                    
                            </table>
                        </td>
                        
                    </tr>
                     <tr><td><img src="http://www.lbr.ru/images/kp/sigma_3.jpg" width="638" border="0" /></td></tr>
                     <tr><td width="638">
                     <span style="display: block; text-align: justify; font-family: sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                        Навесные сеялки SIGMA 5 могут исполняться с междурядьем 38-85 см с жесткой рамой, с телескопической или складывающейся рамой, а так же в прицепном исполнении. 
                        Для работы в тяжелых условиях рабочие органы могут быть дополнены следующими опциями (слева направо): плавающий лемех-разгребатель, ротационный очиститель растительных остатков, режущий турбо-диск, зубчатый диск-рыхлитель борозды, набор для сева No-Till 
                        (ротационный очиститель и турбо-диск), прикатывающие колесико Pro.
                     </span>
                     </td></tr>
                     <tr><td>
                     <span style="display: block; text-align: justify; font-weight: bolder; font-family: sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                        Оснащение секции в тяжелых условиях</span>
                     </td></tr>
                     <tr><td><img src="http://www.lbr.ru/images/kp/sigma_4.jpg" width="638" border="0" /></td></tr>
                     
                     <tr><td>
                     <table width="638" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285; margin-top: 10px;">
                                        
                                        <tbody>
                                        
                                            <tr style="background-color: #d1d3d4;">
                                                <td width="50%" style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>&nbsp;&nbsp;Модель</strong></span></td>
                                                <td width="50%" style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>SIGMA 5</strong></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;">&nbsp;&nbsp;Ширина рамы, м</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">6</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;">&nbsp;&nbsp;Кол-во высевающих модулей для сева кукурузы и подсолнечника, шт.</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">8 на 70 см</span></td>
                                            </tr>  
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;"> &nbsp;&nbsp;Высевающие диски</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">8 дисков под кукурузу (26 отв., диам. 4,5 мм),<br />8 дисков под подсолнечник (26 отв., диам. 2,5 мм).</span></td>
                                            </tr> 
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;">&nbsp;&nbsp;Объем бункеров под семена, л</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">50</td>
                                            </tr> 
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;">&nbsp;&nbsp;Прикатывающие колеса</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">V образные, диам. 320х50 мм</span></td>
                                            </tr> 
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;">&nbsp;&nbsp;Колеса</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">4 колеса 5.00-15, диам. 630 х 130 мм</span></td>
                                            </tr> 
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;">&nbsp;&nbsp;Коробка переключения скоростей</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">42</span></td>
                                            </tr> 
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;">&nbsp;&nbsp;Гидравлические маркеры</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">+</span></td>
                                            </tr> 
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;">&nbsp;&nbsp;Турбина- привод от ВОМ</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">на 540 об/мин</span></td>
                                            </tr> 
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;">&nbsp;&nbsp;Масса сеялки, кг</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">1600</span></td>
                                            </tr> 
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;">&nbsp;&nbsp;Производительность, га/час</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">5,6 (при скорости 9 км/час при посеве кукурузы)</span></td>
                                            </tr> 
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;">&nbsp;&nbsp;Мощность трактора, л.с.</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">80-100</span></td>
                                            </tr> 
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;">&nbsp;&nbsp;Удобрения с дисковым сошником</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">4 бункера из ПВХ по 220 л каждый</span></td>
                                            </tr> 
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;">&nbsp;&nbsp;Контроль высева</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">Muller Elektronik</span></td>
                                            </tr> 
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 12px;">&nbsp;&nbsp;Максимальная скорость, км/ч</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 12px;">10-12</span></td>
                                            </tr>                                              
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family:  sans-serif; font-size: 14px; font-weight: bolder;"">&nbsp;&nbsp;Цена</span><span style="color:#cc3333; font-size:12px;">*</span></td>
                                                <td><span style="font-family:  sans-serif; font-size: 14px; font-weight: bolder;"><? echo $data['price1']; ?></span></td>
                                            </tr>  
                                                                                      
                                            
                                        </tbody>
                                </table>
                     
                     </td></tr>
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
            </td>
        </tr>
    </table>
</body>
</html>
