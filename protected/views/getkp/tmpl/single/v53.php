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
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">УПС 6 – универсальная пневматическая <br />сеялка точного высева</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/zirka-logo.jpg" border="0" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <tr>
                        <td width="328px"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                            <table width="328" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr><td><img src="http://www.lbr.ru/images/kp/ups6.jpg" width="318" border="0" /></td></tr>
                                <tr valign="top">
                                    <td width="328">
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                         <strong>Сеялка УПС 6</strong> предназначена для пунктирного высеивания калиброванных и некалиброванных семян кукурузы, подсолнечника, клещевины, сорго, сои,
                                          а также семян кормовых бобов, фасоли, люпина с одновременным, раздельным от семян внесением гранулированных минеральных удобрений и прикатыванием почвы в рядках.<br />
                                    </span>
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">КАЧЕСТВЕННЫЙ ПОСЕВ</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        • Снижение дробления семян в 10 раз по сравнению с механическими сеялками.<br />
                                        • За счет расположения оси опорноприводных колес на одной линии с зерновыми сошниками достигается синхронное копирование рельефа поля как рамой, так и посевной секцией.<br /> 
                                        • Полуавтоматическая сцепка обеспечивает быстрое и безопасное соединение сеялки с трактором.<br />
                                    </span>
                                    
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">РАВНОМЕРНОСТЬ</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        • Точный однозерновой посев семян разных культур с нормой высева от 2 до 43 штук на погонный метр.<br />
                                        • Гребенчатый сбрасыватель двойников семян обеспечивает точный однозерновой посев. На высевающем диске установлена ворошилка.<br />
                                        • Прикатывание почвы в засеянных рядках улучшает контакт между семенами и влажной почвой на дне борозд, обеспечивает капилярный подъем влаги и создаёт благоприятные условия для более раннего и дружного прорастания семян.
                                    </span>  
                                      <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">ТУКОВЫСЕЕВАЮЩАЯ СИСТЕМА</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        • Через туковые сошники возможность внесения минеральных удобрений в стороне от рядка с необходимой величиной смещения, что исключает вредное воздействие туков на семена.<br />
                                        • Все валы привода зерновых и туковых высевающих аппаратов смонтированы на подшипниках качения.<br />
                                        • В туковом бункере установлены пластиковые втулки, которые препятствуют произвольному просыпанию минеральных удобрений.<br />
                                        • Предусмотрен разгрузочный люк для удаления остатков минеральных удобрений.<br />
                                        </span>                                
                                     
                                    </td>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                  </td>
                                  
                                  <td>
                                   
                                    <td><img src="http://www.lbr.ru/images/kp/ups6_1.jpg" width="300" border="0" />                                     
                                     <img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/>
                                    <table width="300" border="1" cellspacing="0" cellpadding="0" align="left" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                        
                                        <tbody>
                                        
                                            <tr style="background-color: #d1d3d4;">
                                                <td style="text-align: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>Модель</strong></span></td>
                                                <td style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong>УПС 6 02</strong></span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Тип машины</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">навесная</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Ширина захвата, м</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">4,2</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Количество рядков, шт.</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">6</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Ширина междурядий, мм</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">450,600,700,900</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Рабочая скорость, км/ч</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">3,6-9</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Производительность, га/ч</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">2,26-3,78</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Емкость бункера (суммарная), дм<sup>3</sup><br />
                                                - для семян<br />
                                                - для удобрений</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;"><br />150<br />192</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Нормы высева<br />
                                                - для семян, шт/п.м.<br />
                                                - для удобрений, кг/га</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;"><br />2-43<br />50-250</span></td>
                                            </tr>                                            
                                             <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Глубина заделки семян, мм</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">40-120</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Габаритные размеры, мм<br />
                                                - в рабочем положении<br />
                                                - в транспортном положении</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;"><br />1700х4900х1600<br />5450х2300х2360</span></td>
                                            </tr>
                                            <tr style="background-color: #d1d3d4;">
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Масса, кг</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">1074±3%</span></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Агрегатируется с тракторами, л.с. (тс)</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;">80 (1,4)</span></td>
                                            </tr>                                            
                                            <tr>
                                                <td style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 12px;">Цена</span><span style="color:#cc3333; font-size:12px;">*</span></td>
                                                <td><span style="font-family: Calibri, sans-serif; font-size: 12px;"><? echo $data['price1']; ?></span></td>
                                            </tr>
                                        </tbody>
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
