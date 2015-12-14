<?php
if($data['show_header']=='1'  || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/print_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
 ?>
 <div class="table w-800">
<!-- Блок Первый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
               
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <a href="" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        <img src="http://www.lbr.ru/images/kp/274-kir1_5/1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                    </a>
                                </td>
                            </tr>
                            <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                <tr>
                                    <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                            <?php echo $data['product_info1']; ?>
                                        </p>
                                    </td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <td style="padding: 10px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; color: black;line-height:18px; ">
                                                    <b>РОТОРНАЯ КОСИЛКА КИР-1,5</b> используется для скашивания, измельчения и погрузки многолетних
                                                    сеянных, кукурузы, подсолнечника и других силосных культур, а также для зеленой подкормки
                                                    животных в весенний, летний и осенний период, или для уборки вышеперечисленных культур в
                                                    силос.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                             <tr>
                                <td style="padding: 5px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                               <img src="http://www.lbr.ru/images/kp/274-kir1_5/line.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="380">
                                                <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="65" style="padding:0px 5px 0px 0px;" align="right">
                                                            <img src="http://www.lbr.ru/images/kp/274-kir1_5/tick.jpg" width="40" style="border: 0; float: right;" alt="Картинки не отображаются">
                                                        </td>
                                                        <td width="295">
                                                            <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:justify; color: #f24942;line-height:20px;font-weight: bold; ">
                                                                КАЧЕСТВЕННОЕ ИЗМЕЛЬЧЕНИЕ
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="400">
                                                 <table width="400" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="95" style="padding:0px 5px 0px 0px;" align="right">
                                                            <img src="http://www.lbr.ru/images/kp/274-kir1_5/tick.jpg" width="40" style="border: 0; float: right;" alt="Картинки не отображаются">
                                                        </td>
                                                        <td width="305">
                                                            <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:justify; color: #f24942;line-height:20px; font-weight: bold;">
                                                                УДОБНАЯ ВЫГРУЗКА
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="380" style="padding:5px 0px 0px 0px;">
                                               <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="110" style="padding:0px 10px 0px 0px;" align="left" valign="top">
                                                            <img src="http://www.lbr.ru/images/kp/274-kir1_5/2.jpg" width="100" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                        </td>
                                                        <td width="250" style="padding:0px 20px 0px 0px;">
                                                            <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; color: black;line-height:18px; ">
                                                                Благодаря замене режущего
                                                                аппарата косилочного типа
                                                                на измельчающий барабан,
                                                                который вращается с частотой 
                                                                1500 оборотов в минуту,
                                                                вследствие чего достигается
                                                                высокая степень измельчения 
                                                                силосной массы.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="400">
                                                <table width="400" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="140" style="padding:0px 10px 0px 0px;" align="left" valign="top">
                                                            <img src="http://www.lbr.ru/images/kp/274-kir1_5/3.jpg" width="130" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                        </td>
                                                        <td width="260" style="padding:0px 20px 0px 0px;" valign="top">
                                                            <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; color: black;line-height:18px; ">
                                                                Погрузка из косилки в транспортное средство 
                                                                осуществляется в
                                                                движении в положение рядом
                                                                слева и сбоку или в тележку,
                                                                прицепленную сзади.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                               <img src="http://www.lbr.ru/images/kp/274-kir1_5/line.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="380">
                                                <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="65" style="padding:0px 5px 0px 0px;" align="right">
                                                            <img src="http://www.lbr.ru/images/kp/274-kir1_5/tick.jpg" width="40" style="border: 0; float: right;" alt="Картинки не отображаются">
                                                        </td>
                                                        <td width="295">
                                                            <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:justify; color: #f24942;line-height:20px;font-weight: bold; ">
                                                                АГРЕГАТИРОВАНИЕ
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="400">
                                                 <table width="400" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="95" style="padding:0px 5px 0px 0px;" align="right">
                                                            <img src="http://www.lbr.ru/images/kp/274-kir1_5/tick.jpg" width="40" style="border: 0; float: right;" alt="Картинки не отображаются">
                                                        </td>
                                                        <td width="305">
                                                            <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:justify; color: #f24942;line-height:20px; font-weight: bold;">
                                                                ДОПОЛНИТЕЛЬНЫЕ ОПЦИИ
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="380" style="padding:5px 0px 0px 0px;" valign="top">
                                               <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="110" style="padding:0px 10px 0px 0px;" align="left" valign="top">
                                                            <img src="http://www.lbr.ru/images/kp/274-kir1_5/5.jpg" width="100" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                        </td>
                                                        <td width="250" style="padding:0px 20px 0px 0px;">
                                                            <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; color: black;line-height:18px; ">
                                                                Косилки-измельчители КИР
                                                                1,5 обычно агрегатируют с
                                                                тракторами МТЗ любых модификаций, 
                                                                а также с тракторами ДТ-75, ДТ-54А и Т-74.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="400">
                                                <table width="400" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="140" style="padding:0px 10px 0px 0px;" align="left" valign="top">
                                                            <img src="http://www.lbr.ru/images/kp/274-kir1_5/6.jpg" width="130" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                        </td>
                                                        <td width="260" style="padding:0px 20px 0px 0px;" valign="top">
                                                            <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; color: black;line-height:18px; ">
                                                                Конструкцией предусмотрено
                                                                применение обгонной муфты, что
                                                                исключает поломку вала отбора
                                                                мощности трактора при попадании 
                                                                посторонних предметов в
                                                                рабочую зону, а также при резком
                                                                включении или отключении
                                                                аппарата.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                               <img src="http://www.lbr.ru/images/kp/274-kir1_5/line.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            
                             <tr>
                                <td style="padding: 0px 0px 0px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="40" style="padding:0px 10px 0px 0px;">
                                               <img src="http://www.lbr.ru/images/kp/274-kir1_5/arrow.jpg" width="40" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="720" style="padding:0px 0px 0px 0px;" valign="middle">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:justify; font-weight:bold;color: #63b357;line-height:18px; ">
                                                    СЕНОКОСИЛКА ФУНКЦИОНИРУЕТ ПО СЛЕДУЮЩЕМУ ПРИНЦИПУ:
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            
                             <tr>
                                <td style="padding: 0px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                           <td style="padding:0px 0px 0px 20px;" valign="middle">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; color: black;line-height:18px; ">
                                                    фронтальный щит наклоняет растение вперед, способствуя хорошему измельчению стебля. Трава
                                                    срезается ножами ротора. Ударные нагрузки снижаются благодаря спиральному расположению
                                                    ножей. Срезанные растения измельчаются в барабане и с помощью создаваемого воздушного
                                                    потока направляются по трубе к козырьку. Угол наклонного козырька регулирует сам оператор.
                                                    Измельченная масса распределяется по всей ширине тележки.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="padding: 0px 0px 0px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <img src="http://www.lbr.ru/images/kp/274-kir1_5/grass.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                           
                        </table>
                    </td></tr>
            
                    
                <!-- Контент первого блока; -->
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
 </table>
<!-- Блок Первый; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Второй: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                    <td  style="padding: 20px 20px 0;">
                        <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:center; color: black;line-height:20px;text-transform:uppercase;font-weight:bold; ">
                            ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ КИР-1,5:
                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td  style="padding: 10px 20px 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #cecece; background-clip: padding-box; ">Производительность, т /ч</td>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">От 15 до 45</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #cecece; background-clip: padding-box; ">Ширина захвата, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,5</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #cecece; background-clip: padding-box; ">Высота среза, мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">не менее 50</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #cecece; background-clip: padding-box; ">Привод</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">От ВОМ трактора</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #cecece; background-clip: padding-box; ">Рабочая скорость, км/ч</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7-10</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #cecece; background-clip: padding-box; ">Количество ножей, шт</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">28</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #cecece; background-clip: padding-box; ">Габариты рабочие (с удлинителем)
                                        <br>(длина*ширина*высота), мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4800 x 2400 x 3920</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #cecece; background-clip: padding-box; ">Требуемая мощность, л .с</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">От 30</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #cecece; background-clip: padding-box;">Цена с НДС, руб.<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price1']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
               
                <tr valign="top">
                    <td style="padding: 5px 20px 20px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
     <tr valign="top">
        <td style="padding: 0px 20px 0;">
            <?php
            if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
                Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
            endif;
        ?>
        </td>
    </tr>
 </table>
<!-- Блок Второй; -->

</div>
</body>
</html>
