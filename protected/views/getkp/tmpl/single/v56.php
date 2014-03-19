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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Пневматические сеялки точного высева SIGMA 5</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/sfoggia_logo.jpg" border="0" /></td>
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
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr><td width="638"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                                <tr>
                                    <td width="638">                                    
                                    <span style="font-family:  sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Высевающий аппарат SIGMA 5</span>
                                     <span style="display: block; text-align: justify; font-family: sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Изготовлен из сплава на основе алюминия, делающий его недеформируемым, нечувствительным к колебаниям температуры, крепким и легким, обеспечивая постоянное качество высевания даже после многих лет работы.
                                    <strong>Низкие уровни трения</strong> – отсутствие необходимости частого технического обслуживания.
                                    </span>                                    
                                   
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
                </table> 
                 
            </td>
        </tr>
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block; "/></td></tr>
       
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">
                                    
                                     <span style="font-family:  sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Высевающий аппарат SIGMA 5</span>
                                     <span style="display: block; text-align: justify; font-family: sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Изготовлен из сплава на основе алюминия, делающий его недеформируемым, нечувствительным к колебаниям температуры, крепким и легким, обеспечивая постоянное качество высевания даже после многих лет работы.
                                    <strong>Низкие уровни трения</strong> – отсутствие необходимости частого технического обслуживания.
                                    </span>
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
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
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
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Прицепные разбрасыватели RCW10000</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/unia-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                    <img src="http://www.lbr.ru/images/kp/organika-i-mineralka4.jpg" width="638" border="0" /></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">
                                    
                                    
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />1. МЕНЬШЕ ЕЗДИМ – БОЛЬШЕ ВОЗИМ!<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        <b>Экономический эффект.</b> В период проведения предпосевной подготовки или подкормки по всходам большое значение имеют сроки проведения работ по внесению минеральных удобрений. 
                                    Экономических эффект от применения прицепных разбрасывателей на площади от 300 га просчитывается достаточно легко. 
                                    При работе с минеральными удобрениями разбрасыватель на 5 000 литров при производительности 13 га в час обработает примерно 25 га за один выход в поле. 
                                    Навесной разбрасыватель минеральных удобрений на 1 000 литров – около 5 га за один выход в поле. 
                                    Отсюда видно, что применение прицепного разбрасывателя позволяет:<br /> 
                                    а) сократить время на внесение – экономия заработной платы;<br />
                                    б) уменьшить количество проходов по полю – экономия ГСМ;<br />
                                    в) сэкономить парк техники для внесения удобрений благодаря большому объёму и универсальности разбрасывателя.
                                    </span>
                                   <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />2. УНИВЕРСАЛЬНЫЙ СОЛДАТ:<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Предпосевная подготовка и подкормка по всходам. Минералка, доломит, известь, сухие дефекаты, костная мука и т.д. 
                                    <br /><b>«Проходимец»</b> – широкие колеса, обеспечивающие хорошее соприкосновение с почвой и постоянный привод подающего транспортёра. 
                                    <br /><b>«Заботливый»</b> – ленточный транспорт (в отличии от планчатого) обеспечивает бережную подачу гранул к разбрасывающим органам без их повреждений или разрушений. 
                                    <br /><b>Точный</b> – дозирующий аппарат позволяет оптимально подобрать норму внесения удобрений. 
                                    <br /><b>Универсальный</b> – комплектация двумя типами тарелок позволяет работать без дополнительных затрат с любыми типами удобрений, как гранулированными, так и порошкообразными или пылевидными. 
                                    Комплектация тарелками для крайнего высева позволяет работать по краю поля без потерь дорогостоящих удобрений.  
                                    </span>
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />3. DLG ПРЕДУПРЕЖДАЕТ! ЗАЧЕМ ПЕРЕПЛАЧИВАТЬ?<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Разбрасыватели удобрений RCW прошли аттестацию в независимой ассоциации сельхозпроизводителей Германии. 
                                    Результаты испытаний показали, что равномерность внесения находится в допустимых пределах и обеспечивает правильное и точное внесение удобрений. 
                                    Разбрасыватели RCW ни чем не уступают таким грандам, как Amazone, RAUH или Sulky, при этом выигрыш в цене составляет не менее 30%.
                                    </span>
                                    
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img style="margin-bottom: 10px; margin-top: 10px;" src="http://www.lbr.ru/images/kp/organika-i-mineralka4.jpg" width="300" border="0" /><br />
                                    
                                    <table width="300" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        
                                        <tbody>
                                        
                                            <tr style="background-color: #d1d3d4;">
                                                <td style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>Модель</strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>RCW 10000</strong></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Вместимость кузова, л</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">10000</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая ширина, м<br />– известь<br />– гранулированные удобрения</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;"><br />8-16<br />2-36</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Размеры, мм<br />– длина<br />– ширина<br />– высота</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;"><br />6800<br />2350<br />2560</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Вес, кг</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">3980</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Потребность в мощности, л.с.</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">120</span></td>
                                            </tr>
                                            
                                            <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price6']; ?></span></td>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Разбрасыватели минеральных удобрений MXL 3 000 на шасси Kastor</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/unia-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                    <img style="margin-bottom: 10px;" src="http://www.lbr.ru/images/kp/organika-i-mineralka6.jpg" width="638" border="0" /></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">
                                    
                                    
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">1. 2 в 1, лучшие качества от прицепных и навесных разбрасывателей!<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        • Объём 3 000 литров! Больше производительности при высокой точности внесения! <br />
                                    • Сокращение агротехнических сроков внесения удобрений, уменьшение парка техники.<br />
                                    • Высокая равномерность и точная регулировка! Управление дозой внесения с помощью шнекового дозатора, с плавной, бесступенчатой регулировкой.<br />
                                    • Меньше времени на настройки! Управление дозой внесения из кабины трактора.<br />
                                    • Система подачи материала на разбрасывающие диски, обеспечивает бережное обращение с гранулами, что повышает эффективность применения разбрасывателя.
                                    </span>
                                   <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />2. Уникальность в продуманности!<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        • Шасси, используемое для разбрасывателя MXL, имеет широкие колёса низкого давления на шинах 400/60 х 15.5 14 PR, и регулируемую колесную базу в диапазоне 1500 – 1800 мм. 
                                    Идеальное решение для подкормки по всходам!  
                                     
                                    </span>
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />3. Платить за название или за качество?!<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        • Уникальное соотношение ширины и точности внесения. Рассеивание удобрения в большом рабочем диапазоне (до 36 метров). Точность внесения подтверждена тестами DLG (Германия).<br />
                                    • Разбрасыватели ни чем, не уступают в равномерности и надёжности таким грандам как Amazone, RAUH или Sulky. Выигрыш в цене составляет не менее 30%!
                                    </span>
                                    
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right">
                                    
                                    <table width="300" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        
                                        <tbody>
                                        
                                            <tr style="background-color: #d1d3d4;">
                                                <td style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>Модель</strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>MXL 3000 на шасси KASTOR</strong></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Вместимость кузова, л</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">3000</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая ширина, м</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">10-18, 20-28, 30-36</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая скорость, км/ч</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">10-15</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Ширина колеи, регулируемая, мм</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">1500-1800</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Длина, м</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">2,5</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Ширина, м</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">2,7</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Высота, м</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">2,5</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Масса разбрасывателя, кг</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">1010</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Потребность в мощности, л.с.</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">35</span></td>
                                            </tr>
                                            
                                            <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Цена руб, с НДС</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price7']; ?></span></td>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Разбрасыватели универсальные PTU</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/lmr-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                    <img style="margin-bottom: 10px;" src="http://www.lbr.ru/images/kp/organika-i-mineralka8.jpg" width="317" border="0" />
                    <img style="margin-bottom: 10px;" src="http://www.lbr.ru/images/kp/organika-i-mineralka9.jpg" width="317" border="0" /></td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="317">
                                    
                                    
                                     <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">УНИВЕРСАЛЬНЫЙ ПРОФЕССИОНАЛ:<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        органика, известь, дефекат + перевозка зелённой массы и сенажа. Позволяет получить экономически эффект за счёт сокращения парка техники.
                                    </span>
                                   <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;"><br />ВЫСОКАЯ НАДЁЖНОСТЬ<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        <b>100% комплектации</b> поставляют ведущие европейские производители: ходовая часть FAD (Италия), цепи 6 – 8 класса прочности (разрывная нагрузка до 25 тонн), разбрасывающие органы (Италия), редукторы и карданные валы (Италия). 
                                    В стандартной комплектации: защита привода транспортера и защита разбрасывающих органов от заклинивания, автоматическое натяжение цепей, задний гидравлический борт.
                                     
                                    </span>
                                     
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td width="317">
                                    <span style="display: block; font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-align: left; text-transform: uppercase;">ПРИВЫЧКА ИЛИ ПЕРЕДОВЫЕ ТЕХНОЛОГИИ, ЧТО ВЫГОДНЕЙ?<br /></span>
                                        <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;">
                                        Например, ММТ-9 перевозит и вносит 7куб. м органики, а PTU 6.0/14S – 13 куб. м. 
                                    При этом используются одинаковые по мощности трактора 120 л.с. В первом приближении видно, что современные разбрасыватели PTU перевозят и вносят почти в 2 раза больше органических удобрений, при этом имеют высокую равномерность, ширину внесения и универсальность в работе.
                                    <br /><b>ЭКОНОМИЧЕСКИЙ ЭФФЕКТ</b> достигается за счёт меньшей собственной массы, большой ширины внесения, равномерности и увеличенной кубатуры. 
                                Это позволяет получать до 30% экономии ГСМ, до 50% сокращается время на внесение органики на поля. 
                                <br /><b>ПО СРАВНЕНИЮ С ДРУГИМИ ЕВРОПЕЙСКИМИ АНАЛОГАМИ</b> разбрасыватели PTU имеют доступную цену, при этом ничем не уступая в качестве изготовления, равномерности внесения и техническом оснащении.
                                    </span>
                                    
                                    
                                    </td>
                                   
                                </tr>
                            </table>
                            <table width="638" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        <tr bgcolor="#d1d3d4">
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">PTU-4.0/13A</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">PTU-6.0/13A</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">PTU-6.0/14B</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">PTU-6.0/14D</span></td>                                            
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">PTU-6.0/14S</span></td>
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">PTU-14B</span></td>                                            
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">PTU-14D</span></td>                                                                                        
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">PTU-14S</span></td>                                                                                       
                                            <td width="10%"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold;">PTU-20</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Грузоподъемность, т</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">5</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">8</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">10</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">10</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">10</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">14</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">14</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">14</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">20</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Ширина разбрасывания, м</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">6-8</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">6-8</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">12-14</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">14-20</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">12-14</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">12-14</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">14-20</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">12-14</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">12-14</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Рабочая скорость, км/ч</span></td>
                                            <td colspan="9"><span style="font-family:Calibri, sans-serif; font-size: 12px;">12</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Привод тормозов</span></td>
                                            <td colspan="9"><span style="font-family:Calibri, sans-serif; font-size: 12px;">гидро или пневмо</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Задний гидроборт</span></td>
                                            <td colspan="9"><span style="font-family:Calibri, sans-serif; font-size: 12px;">есть</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Привод транспортера</span></td>
                                            <td colspan="9"><span style="font-family:Calibri, sans-serif; font-size: 12px;">гидро</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">55-80</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">80-100</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">120-140</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">140-160</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">120-135</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">190-220</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">210-240</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">190-220</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">190-220 250-300</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;">Цена</span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;"><? echo $data['price8']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;"><? echo $data['price9']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;"><? echo $data['price10']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;"><? echo $data['price11']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;"><? echo $data['price12']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;"><? echo $data['price13']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;"><? echo $data['price14']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;"><? echo $data['price15']; ?></span></td>
                                            <td><span style="font-family:Calibri, sans-serif; font-size: 12px;"><? echo $data['price16']; ?></span></td>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Бочка для внесения жидких удобрений Питон 100</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/piton-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td width="328">                                        
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">1. 100 БЕД ОДИН ОТВЕТ!</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                         <b>Универсальность:</b><br />
                                    • вывоз и внесение органических удобрений на поля;<br />
                                    • подвоз воды в летние лагеря;<br />
                                    • подвоз воды для заправки опрыскивателей;<br />
                                    • пожарные ёмкости в период уборки и засухи;<br />
                                    • всасывание жидких отходов из лагун и колодцев с глубины до 6 метров.
                                    </span>
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">2. PITON УМИРАЕТ ПОСЛЕДНИМ!</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        <b>Оцинкованная бочка PITON 100 изготовлена их двухсторонне оцинкованной стали, стойкой к большинству известных агрессивных сред. 
                                    Надёжность:</b><br />
                                    • двусторонняя оцинковка бочки – срок службы в 4 раза больше, чем МЖТ;<br />
                                    • вакуумный насос JUDOR (Италия) – 1 насос работает для наполнения и загрузки;<br />
                                    • ходовая ADR - надёжность и скорость транспортировки. 
                                    </span>
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">3. PITON – РОЖДЕННЫЙ ПОЛЗАТЬ ТЕПЕРЬ «ЛЕТАЕТ»! ВСЕГО 4,5 МИНУТЫ – ВРЕМЯ НАПОЛНЕНИЯ И РАЗГРУЗКИ.<br /><br /></span>
                                    
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Высокоскоростная закачка и разгрузка: итальянский высоконадёжный вакуумный насос работает как на всасывание, так и на нагнетание. 
                                    К примеру, в бочках МЖТ установлено два насоса, что является дополнительным источником поломок.  
                                    </span> 
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">4. ЧИСТИТЬ? ПРОСТО!<br /><br /></span>
                                    
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        Обслуживание: для очистки внутренней части бочки в задней части установлен люк для её очистки. 
                                    Это позволяет удалить осадок в бочке, который возникает вследствие агрегации взвешенных частиц.  
                                    </span>  
                                                                      
                                     
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/organika-i-mineralka10.jpg" width="300" border="0" />
                                    <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                    <table width="300" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        
                                        <tbody>
                                        
                                            <tr style="background-color: #d1d3d4;">
                                                <td style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>Емкость, л</strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>10 000</strong></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Длина, мм</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">7 500</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Ширина, мм</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">2 550</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Высота, мм</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">2 900</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Собственная масса, кг</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">3 700</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Время заполнения, мин</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">около 4,5</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">100</span></td>
                                            </tr>
                                           
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold; text-align: left;">Цена</span></td>
                                                <td style="text-align: center;"><span style="font-family:Calibri, sans-serif; font-size: 12px; font-weight: bold; text-align: left;"><? echo $data['price17']; ?></span></td>
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
