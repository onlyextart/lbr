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
                            <td><span style="color: #6e7071; background: none !important; font-size: 16px; font-weight: bolder; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;"><? echo $data['header']; ?> </span></td>
                            <td width="160" align="right"><span style="text-decoration: none;"><a style="text-decoration: none;" href="http://www.lbr.ru/" target="_blank"><img src="http://www.lbr.ru/images/kp/logo.jpg" alt="Логотип ЛБР-Агромаркет" width="150" height="100" border="0" /></a></span></td>
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
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px;">
        <tr align="right">
            <td><span style="font-family: Calibri, sans-serif; font-size:34px; font-weight: bolder; color: #f58220;">
                    Тракторы МТЗ по самым горячим ценам.<br />
                    Ограниченное предложение. <br />
                    Воспользуйте скидками уже сегодня!</span></td></tr>
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">МТЗ 2022 ПО УДАРНОЙ ЦЕНЕ!</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/belarus-logo.jpg" border="0" /></td>
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
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Трактор «БЕЛАРУС-2022»</span>
                                        <br>
                                        <table width="300" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; text-align: center;">
                                    <tr bgcolor="#d1d3d4">
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">&laquo;Беларус-2022.3&raquo;</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Двигатель</span></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Д.260.4S2</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Мощность,кВт(л.с.)</span></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">156 (212)</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Число цилиндров</span></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">6</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочий объем,л</span></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">7,12</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Емкость топливных баков,л</span></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">370</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Коробка передач</span></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">механическая,ступенчатая, синхронизированная, шестидиапазонная</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Число передач: вперед/назад</span></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">24/12</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Масса эксплуатационная, кг</span></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">7220</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Размеры шин (стандарт) передних колес</span></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">420/70R24</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Размеры шин (стандарт)задних колес</span></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">580/70R42</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Грузоподъемность гидронавесной системы на оси подвеса, кг</span></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">6500</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Отличительные особенности</span></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Дизель по выбросам вредных веществ соответствует экологическим требованиям ступени TierII, кондиционер,комплектдля сдваивания задних колес в стандартной комплектации</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;">Цена весенняя</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price1']; ?></span></td>
                                    </tr>
                                    
                                    
                                    </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mtz2022-1.jpg" width="300" border="0" /><br />
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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Плуг оборотный Vis L 5+1</span></td>
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
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Технические характеристики</span>
                                        <br>
                                        <table width="300" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr bgcolor="#d1d3d4">
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Vis L5+1</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Масса,кг</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2665</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Потребность мощности, л.с.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">160-180</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Просвет под рамой,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">85</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Расстояние между корпусами,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">100</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;">Цена весенняя</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;  color: blue; text-transform: uppercase;" ><? echo $data['price2']; ?></span></td>
                                    </tr>
                                             
                                    
                                    </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mtz2022-2.jpg" width="300" border="0" /></td>
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
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Плуг оборотный Hektor 6</span></td>
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
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Технические характеристики</span>
                                        <br>
                                        <table width="300" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr bgcolor="#d1d3d4">
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Hektor6</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Для тракторов, л.с.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">150-180</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Шаг корпусов,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">100</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Высота рамы,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">82</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Ширина захвата плуга,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">216-288 (36,40,44,48см на корпус)</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Формы корпусов</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">WY 400</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Размер трубы рамы,мм</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">150х150х12</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Производительность,га/ч</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2,7</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая скорость движения,км/ч</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">7-9</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Глубина пахоты,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">до 35</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Масса,кг</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">3070</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;">Цена весенняя</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price3']; ?></span></td>
                                    </tr>
                                    
                                    </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mtz2022-3.jpg" width="300" border="0" /></td>
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
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Борона дисковая Ares TXL 6,0</span></td>
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
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Технические характеристики</span>
                                        <br>
                                        <table width="300" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr bgcolor="#d1d3d4">
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Ares TXL6.0</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Диаметр диска,мм</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">560</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество рядов/дисков,шт.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2/48</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Масса,кг</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2380</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Потребность в мощности,л.с.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">170-210</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая ширина,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">6,0</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;">Цена весенняя</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price4']; ?></span></td>
                                    </tr>
                                    
                                    </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mtz2022-4.jpg" width="300" border="0" /></td>
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
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Культиваторы предпосевные Atlas XXL 6, 8, 9</span></td>
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
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Технические характеристики</span>
                                        <br>
                                        <table width="300" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr bgcolor="#d1d3d4">
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Тип</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">XXL 6,0</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">XXL 8,0</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">XXL 9,0</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Масса,кг</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4400</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">5300</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">5900</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Потребность мощности,л.с.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">170-220</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">200-230</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">220-260</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество зубьев,шт.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">24</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">32</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">36</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Производительность,га/ч</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4,2-6,6</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">5,6-8,8</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">6,3-9,0</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;">Цена весенняя</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price5']; ?></span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price6']; ?></span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price7']; ?></span></td>
                                    </tr>
                                             
                                    
                                    </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mtz2022-5.jpg" width="300" border="0" /></td>
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
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Культиватор предпосевной Полярис-12</span></td>
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
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Технические характеристики</span>
                                        <br>
                                        <table width="300" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr bgcolor="#d1d3d4">
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Полярис-12</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Способ агрегатирования</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Прицепной</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Производительность,га/час</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">7,9-8,02</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая скорость,км/ч</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">до 12</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Транспортная скорость,км/ч</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">до 20</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая ширина захвата,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">8,34</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Глубина обработки,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">от 6 до 12</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество плоскорежущих лап,шт.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">31</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Ширина захвата плоскорежущей лапы, мм</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">330</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество выравнивателей,шт.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество зубовыхборон,шт.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Габаритные размеры,мм (длина х ширина х высота)<br />&ndash;в рабочем положении<br />&ndash;транспортном положении</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;"><br /><br />4470х8380х1850<br />4470х4220х3250</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Масса машины,кг</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2500</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Мощность трактора (неменее),л.с.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">150</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;color: blue; text-transform: uppercase;">Цена весенняя</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price8']; ?></span></td>
                                    </tr>
                                    
                                    </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mtz2022-6.jpg" width="300" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
            </td>
        </tr>
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Культиватор стерневой Kos 5,4 и 6,0</span></td>
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
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Технические характеристики</span>
                                        <br>
                                        <table width="300" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr bgcolor="#d1d3d4">
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Тип</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">5.4BH</span></td> 
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">5.4SH</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">6.0BH</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">6.0SH</span></td>                                  
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая ширина захвата,м</span></td>
                                    <td colspan="2" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">5,4</span></td>
                                    <td colspan="2" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">6,0</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество зубцов,шт.</span></td>
                                    <td colspan="4" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">13</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество дисков,шт.</span></td>
                                    <td colspan="4" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">14</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая скорость,км/ч</span></td>
                                    <td colspan="4" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;"></span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Производительность,га/ч</span></td>
                                    <td colspan="2" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">3,78-5,40</span></td>
                                    <td colspan="2" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4,10-6,00</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Требуемая мощность,л.с.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">160-200</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">200-260</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">160-200</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">200-260</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Габариты:<br />Транспортная ширина,мм в рабочем положении,<br />длина,мм<br />ширина,мм<br />высота,мм</span></td>
                                    <td colspan="2" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;"><br />2950<br /><br />3250<br />5970<br />1480</span></td>
                                    <td colspan="2" align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;"><br />2950<br /><br />3250<br />6650<br />1480</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Масса (безоснащения), кг</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1780</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2276</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1900</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2400</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;">Цена весенняя</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price9']; ?></span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price10']; ?></span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price11']; ?></span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price12']; ?></span></td>
                                    </tr>
                                    
                                    </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mtz2022-7.jpg" width="300" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
            </td>
        </tr>
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>      
        
        
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Сеялка зерновая 3S-4000F</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/great-logo.jpg" border="0" /></td>
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
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Технические характеристики</span>
                                        <br>
                                        <table width="300" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr bgcolor="#d1d3d4">
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">3S-4000F</span></td>                                  
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Междурядье,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">15,2</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество сошников,шт.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">78</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Вес,кг</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">7983</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая ширина захвата,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">12</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Транспортная ширина,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4,5</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Дорожный просвет,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">0,43</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Высота,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2,23</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Длина,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">9</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Объем семенных ящиков,л</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4510</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Ход сошника,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">20</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Глубина высева,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">0-9</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Давление на сошник/давление на колтер,кг</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">40-82/-</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Необходимая мощность трактора,л.с.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">от 180</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;color: blue; text-transform: uppercase;">Цена весенняя</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price13']; ?></span></td>
                                    </tr>
                                             
                                    
                                    </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mtz2022-8.jpg" width="300" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
            </td>
        </tr>
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
        
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Посевной комплекс Mazur 6 + Atlas XXL 6,0</span></td>
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
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Технические характеристики</span>
                                        <br>
                                        <table width="300" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr bgcolor="#d1d3d4">
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Сцепка</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Сеялка Mazur6+ культиватор AtlasXXL 6,0</span></td>                         
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Требуемая мощность трактора,л.с.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">180-200</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;">Цена весенняя</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price14']; ?></span></td>
                                    </tr>
                                    
                                    </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mtz2022-9.jpg" width="300" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
            </td>
        </tr>
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Сеялка точного высева YP-1625A</span></td>
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
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Технические характеристики</span>
                                        <br>
                                        <table width="300" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr bgcolor="#d1d3d4">
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">YP-1625A</span></td>                         
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Междурядье,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">70</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество рядов</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">16</span></td>                                    
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая ширина,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">12,2</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Транспортная ширина,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">4,15</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Транспортная длина,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">12,5</span></td>                                    
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Дорожный просвет,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">0,56</span></td>                                    
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Высота,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">3,8</span></td>                                    
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Емкость семенных ящиков,л</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">2886л под семена и 1514л под ЖКУ</span></td>                                    
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Ход сошника,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">25</span></td>                                    
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Глубина высева,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">0-10</span></td>                                    
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Давление на сошник,кг</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">120-225</span></td>                                    
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Производительность,га.ч</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">9-10</span></td>                                    
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Требуемая мощность трактора,л.с.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">180-240</span></td>                                    
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;">Цена весенняя</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price15']; ?></span></td>
                                    </tr>
                                    
                                    </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mtz2022-10.jpg" width="300" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
            </td>
        </tr>
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
         <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Сеялка точного высева YP-1630F</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/great-logo.jpg" border="0" /></td>
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
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Технические характеристики</span>
                                        <br>
                                        <table width="300" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr bgcolor="#d1d3d4">
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">YP-1630F</span></td>                        
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Междурядье,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">70</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество рядов</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">16</span></td>                                   
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая ширина,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">12</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Транспортная ширина,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">3,8</span></td>
                                    </tr>
                                     
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Дорожный просвет,м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">0,56</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Емкость семенных ящиков,л</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">1120 л под семена и 3500 л под удобрения</span></td>
                                    </tr>
                                     
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Ход сошника,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">25</span></td>
                                    </tr>
                                     
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Глубина высева,см</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">0-10</span></td>
                                    </tr>
                                     
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Давление на открывающий турбодиск, кг</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">185-227(5 положений пружины)</span></td>
                                    </tr>
                                     
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Давление на сошник,кг</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">40-70</span></td>
                                    </tr>
                                     
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Требуемая мощность трактора,л.с.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">180-240</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;">Цена весенняя</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;" ><? echo $data['price16']; ?></span></td>
                                    </tr>
                                              
                                    
                                    </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mtz2022-11.jpg" width="300" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
            </td>
        </tr>
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
        
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Борона зубовая Superharrow 18 м</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/summers-logo.jpg" border="0" /></td>
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
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Технические характеристики</span>
                                        <br>
                                        <table width="300" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr bgcolor="#d1d3d4">
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Модель</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Ширина, м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Кол-во секций по 1,83 м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Масса, кг</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;  color: blue; text-transform: uppercase;">Цена весенняя</span></td>                                                     
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">9HD6022</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">60&rsquo;<br /> (18,3 м)</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">10</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">5298,01</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;  color: blue; text-transform: uppercase;" ><? echo $data['price17']; ?></span></td>
                                    </tr>
                                    
                                    </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mtz2022-12.jpg" width="300" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
            </td>
        </tr>
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Прикатывающий каток Maximus</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/logo-expom.jpg" style="width: 50px;" border="0" /></td>
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
                                        <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">Технические характеристики</span>
                                        <br>
                                        <table width="300" cellspacing="0" cellpadding="0" align="center" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr bgcolor="#d1d3d4">
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Вид и диаметр катка</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px; font-weight: bold;">Cambridge 530</span></td>
                                    </tr>
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Ширина захвата, м</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">12,0</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество дисков, шт.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">247</span></td>
                                    </tr>
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Масса, кг</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">6860</span></td>
                                    </tr>
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">Требуемая мощность трактора, л.с.</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;">160-200</span></td>
                                    </tr>
                                    
                                    
                                    <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 12px; color: blue; text-transform: uppercase;">Цена весенняя</span></td>
                                    <td align="center"><span style="font-family: Calibri, sans-serif; font-size: 12px;color: blue; text-transform: uppercase;" ><? echo $data['price18']; ?></span></td>
                                    </tr>
                                    
                                    </table>
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/mtz1523_23.jpg" width="300" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table> 
            </td>
        </tr>
        <tr style="page-break-after: always;"><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>        
        
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
