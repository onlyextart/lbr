<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<!-- Первый блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->
               
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                <tr>                     
                                    <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                            <?php echo $data['product_info1']; ?>
                                        </p>
                                    </td>
                                </tr>
                            <?php endif; ?>

                        </table>
                    </td></tr>

                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal;text-align: justify; ">
                                        Бороны дисковые 3-х рядные предназначены для традиционной минимальной основной и
                                        предпосевной обработки почвы (до 15 см) под зерновые, технические и кормовые культуры
                                        с измельчением пожнивных остатков и заделкой их в обрабатываемый слой почвы без
                                        предварительной вспашки.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="300" style="padding: 0px 0px 0px 10px;">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/2.jpg" width="290" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                                <td width="460" valign="middle" style="padding: 0px 0px 0px 20px;">
                                    <table width="440" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td width="50" style="padding: 2px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/305-bdm/marker_ok.jpg" width="50" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="390" style="padding: 0px 0px 0px 10px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal;text-align: justify; ">
                                                    Оригинальная расстановка рабочих органов на 3-х
                                                    рядных орудиях позволяет значительно улучшить
                                                    технические характеристики в сравнении с
                                                    характеристиками 4-х рядных дисковых борон.
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
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <p style="margin:0; color:#4a443d; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold;text-align: justify; ">
                                        ПРЕИМУЩЕСТВА 3-ЕХ РЯДНОЙ ДИСКОВОЙ БОРОНЫ НАД 4-ЕХ РЯДНЫМ ДИСКАТОРОМ:
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="30">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/marker.jpg" width="30" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                                <td width="730" style="padding:0px 0px 0px 15px;">
                                    <p style="margin:0; color:#e08b58; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                        ПОВЫШЕНИЕ ПРОИЗВОДИТЕЛЬНОСТИ НА 20-50%
                                    </p>
                                    <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                        За счет снижения тягового усилия 3-х рядной дисковой бороны, в сравнении с
                                        аналогичным 4-х рядным дискатором. Трактор агрегатируется с 3-х рядной дисковой
                                        бороной большей ширины захвата. На одну стойку в 4-х рядном дискаторе приходится
                                        4.5 – 5 л.с. тягового усилия трактора.<br>
                                        На одну стойку в 3-х рядной дисковой бороне приходится 3,5 л.с. тягового усилия
                                        трактора.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                 <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="30">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/marker.jpg" width="30" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                                <td width="730" style="padding:0px 0px 0px 15px;">
                                    <p style="margin:0; color:#e08b58; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                        ПОВЫШЕНИЕ КУРСОВОЙ УСТОЙЧИВОСТИ
                                    </p>
                                    <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                        Первый ряд 3-х рядной дисковой бороны исполнен по оригинальной схеме, что
                                        повышает курсовую устойчивость агрегата, исключает увод в сторону и образование
                                        огрехов, присущих 4-х рядным дискаторам.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="30">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/marker.jpg" width="30" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                                <td width="730" style="padding:0px 0px 0px 15px;">
                                    <p style="margin:0; color:#e08b58; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                        СНИЖЕНИЕ УПЛОТНЕНИЯ ПОЧВЫ
                                    </p>
                                    <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                        За счет агрегатирования трактора с 3-х рядной дисковой бороной большей ширины
                                        захвата, уменьшается количество проходов агрегата по полю, что снижает уплотнение
                                        почвы.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 15px 20px 20px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="30">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/marker.jpg" width="30" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                                <td width="730" style="padding:0px 0px 0px 15px;">
                                    <p style="margin:0; color:#e08b58; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                        ПОВЫШЕНИЕ КАЧЕСТВА ТЕХНОЛОГИЧЕСКОГО ПРОЦЕССА
                                    </p>
                                    <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                        Конструктивно 3-х рядная дисковая борона изготавливается с большим расстоянием
                                        между рядами дисков. В 4-х рядных дискаторах расстояние между дисками - 700 мм;
                                        в 3-х рядных дисковых боронах расстояние между дисками - 900 мм. Это исключает
                                        забивание пожнивными остатками, присущим классическим 4-х рядным дискаторам.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
               
            </table>



        </td>
    </tr>



    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Первый блок -->

<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
               <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="30">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/marker.jpg" width="30" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                                <td width="730" style="padding:0px 0px 0px 15px;">
                                    <p style="margin:0; color:#e08b58; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                        СНИЖЕНИЕ ТЯГОВОГО УСИЛИЯ НА 18-20%
                                    </p>
                                    <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                        За счет меньшего числа рядов, а также за счет уменьшения междискового расстояния
                                        в ряду, 3-х рядная дисковая борона меньше перемещает почву, снижая этим тяговое
                                        сопротивление и распыление почвы.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="30">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/marker.jpg" width="30" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                                <td width="730" style="padding:0px 0px 0px 15px;">
                                    <p style="margin:0; color:#e08b58; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                        СНИЖЕНИЕ РАБОЧЕЙ СКОРОСТИ ДО 10-12 КМ/Ч
                                    </p>
                                    <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                        За счет уменьшения междискового расстояния в ряду, требуется меньше
                                        энергозатрат на перемещение почвы до канавки следующего диска. Рабочая скорость
                                        может быть снижена без ухудшения качества работы агрегата.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="30">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/marker.jpg" width="30" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                                <td width="730" style="padding:5px 0px 0px 15px;">
                                    <p style="margin:0; color:#e08b58; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                        СНИЖЕНИЕ РАСХОДА ГСМ НА 15-18% В РАСЧЕТЕ НА 1 ГА
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="30">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/marker.jpg" width="30" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                                <td width="730" style="padding:5px 0px 0px 15px;">
                                    <p style="margin:0; color:#e08b58; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                        СНИЖЕНИЕ НАГРУЗКИ НА НАВЕСНОЕ УСТРОЙСТВО ТРАКТОРА
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold;text-align: justify; ">
                                        ОСОБЕННОСТИ КОНСТРУКЦИИ:
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 5px 20px 0px 20px; ">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380" align="center" style="padding: 5px 0px 0px 0px; border-top:2px solid #5c5853; border-right:2px solid #5c5853;">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/3.jpg" width="290" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                                <td width="380" align="center" style="padding: 5px 0px 0px 0px; border-top:2px solid #5c5853;">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/4.jpg" width="120" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                             <tr valign="top">
                                <td width="380" align="center" style="padding: 5px 10px 0px 0px; border-right:2px solid #5c5853;">
                                   <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td width="20">
                                                <img src="http://www.lbr.ru/images/kp/305-bdm/marker_red.jpg" width="20" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="350" style="padding:0px 0px 0px 10px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal;text-align: justify; ">
                                                    Борона дисковая БДМ ПКШК представляет
                                                    собой секционную конструкцию.
                                                </p>
                                            </td>
                                        </tr>
                                   </table>
                                </td>
                                <td rowspan="2" width="378" align="center" style="padding: 5px 0px 0px 10px; border-bottom:2px solid #5c5853;">
                                    <table width="368" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td width="20">
                                                <img src="http://www.lbr.ru/images/kp/305-bdm/marker_red.jpg" width="20" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="348" style="padding:0px 0px 0px 10px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal;text-align: justify; ">
                                                    Конструкция серьги форкопа, состоящая из
                                                    2-х листовых деталей, укрепленных ребрами
                                                    и втулки с фасками, позволила существенно
                                                    повысить долговечность данного узла.
                                                </p>
                                            </td>
                                        </tr>
                                   </table>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td width="380" align="center" style="padding: 5px 0px 0px 0px; border-bottom:2px solid #5c5853; border-right:2px solid #5c5853;">
                                   <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding:6px;background-color: #e08b58;" bgcolor="#e08b58">
                                                <p style="margin:0; color:white; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: center; ">
                                                    ТРАНСПОРТНАЯ ШИРИНА – 4 М.
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
                    <td style="padding: 15px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border:0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="180" rowspan="2" style="padding: 0px 10px 10px 0px; border-bottom:2px solid #5c5853;">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/5.jpg" width="150" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                                <td width="580" style="padding: 0px 0px 0px 0px;">
                                    <table width="580" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td width="20" style="padding: 0px 0px 10px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/305-bdm/marker_red.jpg" width="20" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="560" style="padding:0px 0px 0px 10px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal;text-align: justify; ">
                                                    Механизм параллельного подъема и регулировки вектора тяги на форкопе
                                                    выполнен в виде регулируемого стопора, состоящего из набора откидных
                                                    регулировочных шайб. Регулировка происходит путем изменения
                                                    количества шайб, работающих в упор. Данный стопор так же выполняет
                                                    функции механизма остановки гидроцилиндра в транспортном положении.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td width="580" style="padding: 0px 0px 0px 0px; border-bottom:2px solid #5c5853;">
                                    <table width="580" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td width="20">
                                                <img src="http://www.lbr.ru/images/kp/305-bdm/marker_red.jpg" width="20" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="560" style="padding:0px 0px 0px 10px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal;text-align: justify; ">
                                                    Конструкция шасси обладает повышенной жёсткостью за счет перехода от
                                                    раздельного шасси к шасси на единой раме. Что позволило избавиться от
                                                    эффекта «переваливания» при переводе орудия в транспортное
                                                    положения (орудие сначала опирается на одно колесо, а потом на второе).
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
                    <td style="padding: 15px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="410" style="padding: 0px 10px 0px 0px;">
                                    <table width="400" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td width="20">
                                                <img src="http://www.lbr.ru/images/kp/305-bdm/marker_red.jpg" width="20" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="380" style="padding:0px 0px 0px 10px;">
                                                <p style="margin:0; color:#e08b58; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Борона укомплектована опорным
                                                    СПИРАЛЬНЫМ КАТКОМ:
                                                </p>
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal;text-align: justify; ">
                                                    ● <b>ОПОРНОГО ТИПА</b> – можно регулировать глубину
                                                    обработки почвы катком, а не изменением углов
                                                    атаки дисков.<br>
                                                    ● <b>ИДЕАЛЕН ДЛЯ НОРМАЛЬНОЙ И СУХОЙ ПОЧВЫ</b>
                                                    (разбивает «грудки» почвы, образующиеся после
                                                    прохода дисковой бороны).<br>
                                                    ● <b>НЕ РЕКОМЕНДУЕТСЯ ИСПОЛЬЗОВАТЬ ПРИ
                                                    ПОВЫШЕННОЙ ВЛАЖНОСТИ</b> - возможно
                                                    забивание.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="350" align="center" style="padding: 0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/6.jpg" width="280" style="border: 0;" alt="Изображения не отображаются">
                               </td>
                            </tr>
                        </table>
                    </td>
                </tr>
   
</table>
</td>
</tr>
<tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>

<!-- Третий блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr><td style="padding:0px 20px 0px 20px;">
                         <tr>
                    <td style="padding: 15px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border:0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="180" rowspan="2" style="padding: 0px 10px 10px 0px; ">
                                    <img src="http://www.lbr.ru/images/kp/305-bdm/7.jpg" width="150" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                                <td width="580" style="padding: 0px 0px 0px 0px;">
                                    <table width="580" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td width="20" style="padding: 0px 0px 10px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/305-bdm/marker_red.jpg" width="20" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="560" style="padding:0px 0px 0px 10px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal;text-align: justify; ">
                                                    <b>БОРОНЫ ДИСКОВЫЕ МОГУТ КОМПЛЕКТОВАТЬСЯ СФЕРИЧЕСКИМИ
                                                    ДИСКАМИ ПРОИЗВОДСТВА «BELLOTA» С ВЫРЕЗНЫМИ
                                                    ОТВЕРСТИЯМИ</b> (на фото нижний). Диаметр такого диска, как и у
                                                    обычного - 560мм, твердость стали - 48…52 HRC, сталь – 65Г
                                                    борированная, количество отверстий под болты – 6 шт. (опция)
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td width="580" style="padding: 0px 0px 0px 0px; ">
                                    <table width="580" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td width="60" rowspan="4" style="padding: 5px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/305-bdm/marker_ok.jpg" width="50" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="520" style="padding:5px; background-color:#e08b58; ">
                                                <p style="margin:0; color:white; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal;text-align: justify; ">
                                                    Применение дисков с вырезными отверстиями позволяет за счет
                                                    меньшей массы дисков, а также за счет "перетекания" почвы
                                                    через дополнительные отверстия:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                           <td width="520" style="padding:3px 0px 0px 10px;">
                                                <img src="http://www.lbr.ru/images/kp/305-bdm/m1.jpg" width="25" style="border: 0; float: left;margin-right:3px;" alt="Изображения не отображаются">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal;text-align: justify; ">
                                                    исключить залипание дисков при работе с увлажненной
                                                    почвой.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                           <td width="520" style="padding:3px 0px 0px 10px;">
                                                <img src="http://www.lbr.ru/images/kp/305-bdm/m2.jpg" width="25" style="border: 0; float: left; margin-right:3px;" alt="Изображения не отображаются">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal;text-align: justify; ">
                                                    улучшить измельчение почвы.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                           <td width="520" style="padding:3px 0px 0px 10px;">
                                                <img src="http://www.lbr.ru/images/kp/305-bdm/m3.jpg" width="25" style="border: 0; float: left;margin-right:3px;" alt="Изображения не отображаются">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal;text-align: justify; ">
                                                    уменьшить тяговое сопротивление на трактор, что
                                                    положительно сказывается на работе двигателя и сокращает
                                                    расход топлива.
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
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <p style="margin:0; color:#4a443d; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold;text-align: center; ">
                                        Технические характеристики
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
       <tr>
       <td style="padding:5px 20px 0px 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="center" style="padding:0px 0px 0px 20px; border: 0; border-collapse: collapse; background: white;">
                <tr>
                    <td width="700" style="padding: 0px 0px 0px 0px;" valign="top">
                        <table width="700" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: none; border-collapse: collapse; background-clip:padding-box;">
                            <tr>
                                <td>
                                    <table width="700" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                        <tr>
                                            <td width="25%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">БДМ -7х3ПКШК С</span></strong></td>
                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">БДМ-8х3ПКШК С</span></strong></td>
                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">БДМ-9х3ПКШК С</span></strong></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Тип рамы</span></td>
                                            <td colspan="3" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">прицепная, секционная</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Кол-во рабочих органов, шт</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">68</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">80</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">90</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочая ширина, м</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">7,0</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">8,0</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">9,0</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность л.с.</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">280-320</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">350-400</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">от 430</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Цена с НДС</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price3']; ?></span></td>
                                        </tr>
                                    </table> 
                                </td>
                            </tr>
                            <tr valign="top">
                            <td style="padding: 0px 0px 0px 10px;">
                                <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                    * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
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
        </td>
    </tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>






