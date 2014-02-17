<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <title></title>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div class="left-75 header-text">
                    
                    <span class="header-2"><? echo $data['header']; ?> </span></div>
                <div class="right-20">
                    <img src="http://www.lbr.ru/images/kp/logo.jpg" alt="Logo" style="border: 0;"/>
                </div>
            </div>
            <div class="one-page head-first-page">
                <div class="content-page">
                    <span class="first-header-text">Техника Agrisem:</span>
                    <span class="second-header-text">обработка почвы<br>круглый год!</span>
                </div>
                <div style="text-align: justify;">
                <?php
	$finance_block = $data['finance_block'];
        if ($finance_block=='1')
        {
            $this->renderPartial('finance_zont', array('finance_block_text'=>$data['finance_block_text']));
        }
?>
                </div>
                <div style="width: 100%; height: 20px;"></div>
            </div>
            <div class="one-page body-first-page">
                <div class="content-page">
                    <div class="head-content">
                        <div class="h-2 left-75"><span>Дискаторы Agrisem</span></div>
                        <div class="logo-maker right-25"><img src="http://www.lbr.ru/images/kp/agrisem-logo.jpg" border="0" /></div>
                    </div>
                    <div class="body-content">
                        <div class="width-100 image">
                            <img src="http://www.lbr.ru/images/kp/agrisem1.jpg" style="width:100%" border="0" />
                        </div>
                        <div class="width-100">
                            <span class="h-4">ИДЕАЛЬНАЯ ЗАДЕЛКА РАСТИТЕЛЬНЫХ ОСТАТКОВ!</span>
                            <span class="text">
                                • Высокая скорость измельчения достигается благодаря увеличенному диаметру подшипников (в ступице SRE подшипник с внешним диаметром 100 мм, внутренним – 45 мм).
                                <br>• Два ряда дисков со спиральной антиударной системой защиты независимы друг от друга, что позволяет преодолевать препятствия и сохранять стабильность на высокой скорости.
                                <br>• Disc-O-Mulch эффективно работает даже при наличии большого количества растительных остатков, за счет высокого давления на каждый диск.                                
                            </span>
                            <table width="758" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                    <tr bgcolor="#d1d3d4">
                                        <td width="40%" align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Модель</span></td>
                                        <td width="20%"><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">Platinum, 6 m</span></td>
                                        <td width="20%"><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">Platinum, 8 m</span></td>
                                        <td width="20%"><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">Gold, 8 m</span>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Рабочая ширина, м</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">6</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">8</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">8</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">&nbsp;Транспортная ширина, м</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3</span></td> 
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">&nbsp;Количество дисков, шт.</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">36</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">48</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">65</span></td> 
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">&nbsp;Диаметр дисков переднего ряда, мм</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">660</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">660</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">610</span></td> 
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">&nbsp;Диаметр дисков заднего ряда, мм</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">610 или 660</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">610 или 660</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">560 или 610</span></td> 
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">&nbsp;Требуемая мощность трактора, л.с.</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">200 – 300</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">300 – 400</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">250 – 350</span></td> 
                                    </tr>
                                    <tr>                                       
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">&nbsp;Цена руб с НДС</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price1']; ?></span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price2']; ?></span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price3']; ?></span></td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                    <div class="footer-content"></div>
                </div>
            </div>
            <div class="page-break"></div>
            <div class="after-page-break"></div>
            <div class="one-page body-page">
                <div class="content-page">
                    <div class="one-item">
                        <div class="head-content">
                            <div class="h-2 left-75"><span style="font-size: 18px;">Культиваторы Maximulch с прикатывающим катком</span></div>
                            <div class="logo-maker right-25"><img src="http://www.lbr.ru/images/kp/agrisem-logo.jpg" border="0" /></div>
                        </div>
                        <div class="body-content">
                            <div class="left-50 image">
                                <img src="http://www.lbr.ru/images/kp/argisem2.jpg" border="0" />
                            </div>
                            <div class="right-50">
                                <span class="h-4">ОДОБРЕНО ВСЕМИ АГРОНОМАМИ ПЛАНЕТЫ!</span>
                                <span class="text">
                                    • Предназначен для обработки почв различной степени тяжести
                                    <br>• Запатентованная лапа со смещенным режущим элементом обеспечивает вертикальное поднятие, которое является полностью однородным, в отличие от других лап.
                                    <br>• Запатентованная технология Agrisem International заключается в образовании на почве складки и перемещении ее в виде волны, что исключает смешивание слоев почвы, способствует развитию корневой системы
                                    <br>• Убирающиеся лапы с регулировкой высоты позволяют самостоятельно устанавливать необходимую глубину обработки.
                                </span>
                            </div>
                            <div class="width-100">
                                <table width="758" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                    <tr bgcolor="#d1d3d4">
                                        <td width="40%" align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Модель</span></td>
                                        <td width="20%"><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">Maximulch, 4,5 m</span></td>
                                        <td width="20%"><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">Maximulch, 5 m</span></td>
                                        <td width="20%"><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">Maximulch, 6 m</span>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">&nbsp;Рабочая ширина, м</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">4,5</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">5</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px; font-weight: bold;">6</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">&nbsp;Транспортная ширина, м</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3</span></td> 
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">&nbsp;Количество дисков, шт.</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">28</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">32</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">36</span></td> 
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">&nbsp;Диаметр дисков, мм</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">610</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">610</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">610</span></td> 
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">&nbsp;Количество лап, шт.</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">10</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">10</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">12</span></td> 
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">&nbsp;Требуемая мощность трактора, л.с.</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">200 – 300</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">200 – 300</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">250 – 350</span></td> 
                                    </tr>
                                    <tr>                                       
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">&nbsp;Цена руб с НДС</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price4']; ?></span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price5']; ?></span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price6']; ?></span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="one-item">
                        <div class="head-content">
                            <div class="h-2 left-75"><span>Глубокорыхлители CultiPlow</span></div>
                            <div class="logo-maker right-25"><img src="http://www.lbr.ru/images/kp/agrisem-logo.jpg" border="0" /></div>
                        </div>
                        <div class="body-content">
                            <div class="left-50 image">
                                <img src="http://www.lbr.ru/images/kp/agrisem3.jpg" border="0" />
                                <span class="text" style="padding-right: 10px;">                                    
                                    • Запатентованная технология Agrisem International заключается в образовании на почве складки и перемещении ее в виде волны, что исключает смешивание слоев почвы, способствует развитию корневой системы
                                </span>
                            </div>
                            <div class="right-50">
                                <span class="h-4">СБАЛАНСИРОВАННОЕ ПОДНЯТИЕ ПОЧВЫ ПО ВСЕЙ РАБОЧЕЙ ШИРИНЕ!</span>
                                <span class="text">
                                    • Широкое расположение стоек с лапами и уникальное строение лапы позволяет уменьшить износ деталей и снизить потребление энергии.
                                    <br>• Запатентованная лапа со смещенным режущим элементом обеспечивает вертикальное поднятие, которое является полностью однородным, в отличие от других лап.
                                    <br>• Рабочая ширина глубокорыхлителя Cultiplow полностью совпадает с транспортной шириной, что обеспечивает его компактность.
                                </span>
                            </div>
                            <div class="width-100">
                                <table width="758" border="1" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; text-align: center; vertical-align: middle; border-color: #808285;">
                                    <tr>
                                        <td align="left" width="35%"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">&nbsp;Рабочая ширина, м</span></td>
                                        <td width="8%"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">2,5</span></td>
                                        <td width="8%"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">2,5</span></td>
                                        <td width="8%"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3,0</span></td>
                                        <td width="8%"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3,0</span></td>
                                        <td width="8%"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3,5</span></td>
                                        <td width="8%"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3,5</span></td>
                                        <td width="8%"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">4,0</span></td>
                                        <td width="8%"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">4,0</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">&nbsp;Транспортная ширина, м</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">2,5</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">2,5</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3,0</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3,0</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3,5</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3,5</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">4,0</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">4,0</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">&nbsp;Количество лап, шт.</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">3</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">4</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">4</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">5</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">5</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">6</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">6</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">7</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 12px;">&nbsp;Требуемая мощность трактора, л.с.</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">90 - 180</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">100 - 190</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">110 - 210</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">150 - 230</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">150 - 230</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">160 - 250</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">170 - 250</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 12px;">190 - 270</span></td> 
                                    </tr>
                                    <tr>                                       
                                        <td align="left"><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">&nbsp;Цена руб с НДС</span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price7']; ?></span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price8']; ?></span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price9']; ?></span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price10']; ?></span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price11']; ?></span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price12']; ?></span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price13']; ?></span></td>
                                        <td><span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price14']; ?></span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="info-block" style="padding-bottom: 10px;">
                            <span>
                                Всю подробную информацию по заинтересовавшим Вас моделям техники, а также опыт эксплуатации и отзывы потребителей Вы сможете получить у Вашего персонального менеджера.
                            </span>
                        </div>
                        <div class="filial">
                            <span>Ждем Вас в филиале ЛБР-АгроМаркет (<b>Барнаул</b>)!</span>
                            <span>Время работы: 8.00-17.00</span>
                            <span>Адрес филиала: 656067 Барнаул, ул. Попова, 216</span>
                            <span>Телефоны: +7 (3852) 60-17-33, +7(3852)29-9870, 29-9871, 29-9872, 29-9873</span>
                        </div>
                        <div class="user">
                            <span>Ваш персональный менеджер:</span>
                            <span>Есин Роман
                                <br>Тел.: 8(495) 980-97-64
                                <br>Моб.: 8(985) 771-84-59
                                <br>E-mail: esin@lbr.ru
                                <br>Skype: lbr-esin
                                <br>www.lbr.ru
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
<style>
/*    @font-face {
        font-family: FuturisC;  Имя шрифта 
        src: url(http://www.lbr.ru/images/kp/FuturisC.otf);  Путь к файлу со шрифтом 
    }
    @font-face {
        font-family: FuturisXC;  Имя шрифта 
        src: url(http://www.lbr.ru/images/kp/FuturisXC.otf);  Путь к файлу со шрифтом 
    }*/
    .after-page-break{display: block;}
    .after-page-break:after
    {
        content: '- - - - - - - - - - - - - - - - - - - - Разрыв страницы - - - - - - - - - - - - - - - - - - - -';
        display: block;
        text-align: center;
        color: grey;
        margin-top: 20px;
    }
    @media print
    {
      .page-break  { display:block; page-break-before:always; }
      #wrapper .after-page-break{width: 800px; height: 8px; display: block; color: white;}
      .after-page-break:after
      {
          content: '';
          display: none;
      }
    }
    .image img{width: 95%;}
    #wrapper
    {
        width: 820px;
        margin: 0 auto;
        padding: 0;
        border: 0;
        font-family: FuturisC, sans-serif;
    }
    
    .one-page{width: 800px; background: white; position: relative; border-radius: 20px; max-height: 1200px; margin:0; padding: 0; border: 0; box-shadow: 0 0 10px 5px rgb(200,200,200);}
    
    .head-first-page{margin-bottom: 20px; background: url('http://www.lbr.ru/images/kp/grynt.jpg') white no-repeat 25px 60px;}
    .content-page{padding: 20px 20px 0;}
    .first-header-text{display: block; text-transform: uppercase; background: rgb(211, 35, 42); color: white; text-align: center; font-size: 72px; padding: 0; font-family: FuturisXC, sans-serif;}
    .second-header-text{display: block; text-align: right; color: rgb(211, 35, 42);  text-transform: uppercase; font-size: 60px; font-family: FuturisXC, sans-serif;}
    .flag{position: absolute; left: 20px; bottom: 20px;}
    .header-1{display: block; color: black; background: none !important; font-size: 16px; font-weight: bold; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;}
    .header-2{display: block; color: #6e7071; background: none !important; font-size: 16px; font-weight: normal; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;}
    
    .body-page{margin-top: 20px;}
    .body-first-page .content-page{padding:0 20px 20px;}
    .head-content{border-bottom: 1px solid black; margin-bottom: 3px;}
    .head-content .h-2{font-family: FuturisXC, sans-serif; margin-top: 8px; font-size: 20px; text-transform: uppercase;}
    .head-content .logo-maker{text-align: right; margin-top: 4px;}
    .body-content .h-4{display: block; font-family: FuturisXC, sans-serif; color:rgb(211, 35, 42); margin-top: 8px; font-size: 21px;}
    
    .body-page .content-page{padding: 0 20px 10px;}
    .one-item{position: relative; margin-bottom: 30px;}
    .one-item:last-child{margin-bottom: 0}
    .one-page:after, .one-item:after, .head-content:after, .content-page:after, #header:after, .wrapper:after{content:''; clear: both; display: block;}
 
    .footer{border-top: 1px solid grey; padding-top: 20px;}
    .footer .user{margin-top: 10px;}
    .footer .user span
    {
        display: block;
    }
    .footer .filial span
    {
        display: block;
    }
    .footer .filial span:first-child, .footer .user span:first-child
    {
        margin-bottom: 4px;
        font-weight: bold;
    }
    .text{display: block; text-align: justify; font-family: FuturisC, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 18px;}
    .left-10, .left-20, .left-30, .left-40, .left-50, .left-60, .left-70, .left-80, .left-90, .left-75
    {
        float: left;
    }
    .right-10,.right-20,.right-30,.right-40,.right-50,.right-60,.right-70,.right-80,.right-90, .right-25, .right-45
    {
        float: right;
    }
    .left-10,.right-10{width:10%;}
    .left-20,.right-20{width:20%;}
    .left-30,.right-30{width:30%;}
    .left-40,.right-40{width:40%;}
    .left-50,.right-50{width:50%;}
    .left-60,.right-60{width:60%;}
    .left-70,.right-70{width:70%;}
    .left-80,.right-80{width:80%;}
    .left-90,.right-90{width:90%;}
    .width-100{width: 100%; clear: both; float: none;}
    .left-75{width: 75%}
    .right-25{width: 25%}
    .right-45{width: 45%;}
    table, td, tr
    {
        border: 1px solid grey !important;
    }
</style>