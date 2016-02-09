<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<!-- Блок Первый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-bottom: 3px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/zernovye-seyalki/646-seyalka-zernotukovaya-astra-sz-3-6a/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        СЕЯЛКА ЗЕРНОТУКОВАЯ СЗ 3,6 А И ЕЕ МОДИФИКАЦИИ
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                <!-- Заголовок со ссылкой и логотипом; -->
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/232-seyalka-C33_6A/mail-2.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                <td style="padding: 20px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align:justify; color: black; ">
                                                    <b>СЗ 3,6А</b> - сеялка зернотуковая прессовая для рядового посева семян зерновых, зернобобовых
                                                    культур с одновременным внесением при посеве (или отдельно) гранулированных минеральных
                                                    удобрений и подсевом сыпучих и несыпучих семян трав.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin: 5px 0px 0px 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align:justify; color: black; ">
                                                    <b>СЗ 3,6А – 06</b> – отлично повторяет форму рельефа поля и дополнительно прикатывает почву в
                                                    засеянных рядках (в комплектации с вариатором).
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                <tr><td style="padding: 0px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                            <tr valign="top">
                                <td width="190" style="padding: 15px 15px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/232-seyalka-C33_6A/mail-3.jpg" width="190" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="570" style="padding: 15px 0px 0px 10px;">
                                    <table width="540" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: normal; text-transform:uppercase; text-align: justify; color: black; ">
                                                    ОСОБЕННОСТИ КОНСТРУКЦИИ
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 15px 0px;">
                                                <table width="540" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="40" style="padding: 10px 5px 5px 10px;">
                                                            <img src="http://www.lbr.ru/images/kp/232-seyalka-C33_6A/mail-4.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                        </td>
                                                        <td width="490" style="padding: 10px 0px 5px 3px;" valign="top">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                                                Сокращение время на дозагрузку и простои
                                                            </p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                                - объем бункера для семян и удобрений увеличен в
                                                                1,5 раза (туковые - 400 дм3, зерновые - 600 дм3);
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 20px 0px 3px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                                    Долговечность рабочих органов
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 3px 0px 15px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    Зерновые и туковые высевающие аппараты выполнены из
                                                    металлокерамического материала.
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 20px 0px 3px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                                    Точная норма внесения удобрений
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 3px 0px 7px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    Норма высева задается регулировкой рабочей длины катушки,
                                                    групповой регулировкой клапанов высевающих аппаратов и
                                                    изменением частоты вращения вала высевающих аппаратов.
                                                    Настройка нормы внесения удобрений производится рукояткой.
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 7px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    Редуктор имеет шесть передаточных отношений, которые
                                                    переключаются с помощью рычага.
                                                </p> 
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
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Блок Первый; -->

<!-- Блок Второй: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                 <tr valign="top">
                    <td style="padding:10px 20px 10px 20px">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center"  valign="top" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="190" style="padding: 0px 15px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/232-seyalka-C33_6A/mail-5.jpg" width="190" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="570" style="padding: 0px 0px 0px 10px;">
                                   <table width="545" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center"  valign="top" style="border: 0; border-collapse: collapse; background: white;">
                                       <tr>
                                            <td style="padding: 0px 0px 5px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                                    Идеальная борозда при посеве
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td style="padding: 5px 0px 10px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    Двухдисковые сошники аккуратно разрезают землю, подготавливая семяложе. 
                                                    Специальный сплав из стали, которая
                                                    содержит бор, делает диски более износостойкими.
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 5px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                                    Три варианта сеялки под потребности агрария:
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    • с двухдисковыми сошниками (стандартная комплектация)<br>
                                                    • с двухдисковыми сошниками и прикатывающими колесами
                                                    (СЗ 3,6А – 06)(в комплектации с вариатором)<br>
                                                    • для узкорядного посева с двухдисковыми, двухстрочными
                                                    сошниками со смещенными дисками и пальцевыми загортачами (СЗ 3,6А – 04).
                                                </p> 
                                            </td>
                                        </tr>
                                   </table>
                                </td>
                            </tr>
                            
                            
                            
                        </table>
                    </td>
                </tr>
                
                <tr valign="top">
                    <td style="padding:10px 20px 10px 20px">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center"  valign="top" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="560" valign="top" style="padding:0px 10px 0px 0px;">
                                    <table width="540" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px 0px 5px 0px;">
                                                <table width="540" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="40" style="padding: 10px 5px 5px 10px;">
                                                            <img src="http://www.lbr.ru/images/kp/232-seyalka-C33_6A/mail-6.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                        </td>
                                                        <td width="490" style="padding: 10px 0px 5px 3px;" valign="top">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                                                Прикатывающие катки
                                                            </p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                               – отличное решение при посеве во влажную почву.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 10px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    В сеялке СЗ 3,6А – 06 единая конструкция узла «сошник-прикатывающий каток» 
                                                    позволяет настраивать сошник на
                                                    глубину с интервалом в 1 см. Секции прикатывающих
                                                    катков с помощью вилок присоединяются шарнирно к
                                                    раме сеялки. Благодаря такой конструкции катки копируют 
                                                    форму рельефа поля и уплотняют грунт после посева,
                                                    но не утрамбовывают.
                                                </p>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;" >
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    Прессование почвы в рядках производится с целью создания
                                                    контакта между семенами и влажной почвой на дне
                                                    борозд, обеспечивает капиллярный подъем влаги в плотных зонах, 
                                                    что создает благоприятные условия для более
                                                    раннего и дружного прорастания семян при посеве в
                                                    засушливых районах и в районах, подверженных ветровой
                                                    эрозии почвы. Газообмен осуществляется благодаря
                                                    открытым зонам, что способствует не только более раннему 
                                                    прорастанию семян, но и гибели сорняков в неуплотненных холмиках.
                                                </p>
                                            </td> 
                                        </tr>
                                    </table>
                                </td>
                                       
                                <td width="200" style="padding:0px 0px 0px 10px;">
                                    <img src="http://www.lbr.ru/images/kp/232-seyalka-C33_6A/mail-7.jpg" width="190" style="border: 0; float: left;" alt="Картинки не отображаются">
                                 </td>
                            </tr>           
                        </table>
                    </td>
                </tr>
                
                <tr valign="top">
                    <td style="padding:10px 20px 10px 20px">
                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: justify; color:#f58220; ">
                            Сеялки С3 просты в применении и идеально подходят для агрегатирования с самыми
                            ходовыми тракторами от 65 л.с.
                        </p> 
                    </td>
                </tr>
                
                <tr valign="top">
                    <td style="padding:10px 20px 10px 20px">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center"  valign="top" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="240" style="padding: 0px 15px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/232-seyalka-C33_6A/mail-8.jpg" width="240" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="520" valign="middle" style="padding: 0px 0px 0px 10px;">
                                   <table width="495" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center"  valign="top" style="border: 0; border-collapse: collapse; background: white;">
                                       <tr>
                                            <td style="padding: 0px 0px 5px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-transform: uppercase; text-align: justify; color:#f58220; ">
                                                    НЕСКОЛЬКО СЕЯЛОК СЗ МОЖНО ПРЕОБРАЗОВАТЬ
                                                    В ШИРОКОЗАХВАТНЫЙ КОМПЛЕКС
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td style="padding: 5px 0px 10px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    При помощи сцепки СП-11Г с прицепом 8160.000.000 и маркером можно создавать
                                                    широкозахватные посевные агрегаты из трех сеялок.
                                                    Сеялки в агрегате соединяются между собой в шахматном
                                                    порядке. Требуемая мощность трактора 
                                                    для агрегатирования 3-х сеялок в сцепке – 150 л.с.
                                                </p> 
                                            </td>
                                        </tr>
                                   </table>
                                </td>
                            </tr>
                            
                            
                            
                        </table>
                    </td>
                </tr>
                
                
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Блок Второй; -->

<!-- Блок Третий: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                    <td  style="padding: 10px 20px 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td width="55%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; border-right: 1px solid grey; border-bottom: 1px solid grey;  background-color: #9c9d9d;background-clip: padding-box; color:white;">Модель</td>
                                    <td width="15%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center;  border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #9c9d9d;background-clip: padding-box; color:white;">СЗ 3,6А</td>
                                    <td width="15%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #9c9d9d;background-clip: padding-box; color:white;">СЗ 3,6А-04</td>
                                    <td width="15%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center;  border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #9c9d9d;background-clip: padding-box; color:white;">СЗ 3,6А-06</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Ширина захвата, м</td>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,6</td>
                                </tr>
                                <tr>
                                <td colspan="4" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;  background-color: #ececec;background-clip: padding-box;">Количество рядов, шт</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">- для однострочных сошников</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">24</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">&nbsp;</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">24</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;  background-color: #ececec;background-clip: padding-box;">- для двухстрочных сошников</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">&nbsp;</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">48</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;  ">Ширина междурядья, см</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">- для однострочных сошников</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">15</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normalbold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">&nbsp;</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">15</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">- для двухстрочных сошников</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">&nbsp;</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">7,5</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Нормы высева, кг/га</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">- для семян</td>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">15-400</td>
                                </tr><tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">- для удобрений</td>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">25-200</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Глубина заделки семян и удобрений, мм</td>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">40-80</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Рабочая скорость, км/час</td>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">9-12</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Производительность, га/час</td>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">3,2-4,3</td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Емкость бункеров, (суммарная), куб.дм</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">- для семян</td>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">600</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">- для удобрений</td>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">400</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Габаритные размеры, мм</td>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4300х3700х1650</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;  background-color: #ececec;background-clip: padding-box;">Масса, кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">1380</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">1440</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">1530</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Требуемая мощность трактора, л.с.</td>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">от 65</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;"><?php echo $data['price1']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;"><?php echo $data['price2']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;"><?php echo $data['price3']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr valign="top">
                    <td style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/zernovye-seyalki/646-seyalka-zernotukovaya-astra-sz-3-6a/',
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Блок Третий; -->

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;