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
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;" width="660">
                                    <!-- Заголовок -->
                                     <span style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                      Трактора Case JX 110 Farmall
                                      </span>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="100">
                                    <img src="http://www.lbr.ru/images/makers/case.jpg" width="100" style="border: 0; float: right;" alt="Логотип Case">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/190-case/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                <td width="348" style="padding:5px 0px 0px 0px;">
                                    <!-- Первая колонка-->
                                    <table width="348" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <table width="348" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td width="25" style="padding:5px 0px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="25" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td width="323" valign="middle" style="padding:5px 0px 0px 5px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color:#F58220; text-align: justify;">
                                                                Максимальная мощность + min расход топлива
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    Farmall JX оснащены двигателями с турбонадувом и
                                                    промежуточным охлаждением для обеспечения максимальной 
                                                    мощности при сниженном расходе топлива.
                                                </p>
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    Вырабатываемая мощность подается именно на тот
                                                    узел, в котором она требуется больше всего — на колеса, 
                                                    на тягово-сцепное устройство, на концы тяги, на
                                                    МОМ или в гидравлическую систему.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <table width="348" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td width="25" style="padding:5px 0px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="25" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td width="323" valign="middle" style="padding:5px 0px 0px 5px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color:#F58220; text-align: justify;">
                                                                Удобный доступ к системе охлаждения
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    Цельный капот обеспечивает простой доступ к ком-
                                                    плекту элементов системы охлаждения для очистки.
                                                    При установке дополнительного эжектора пыли увеличивается 
                                                    интервал обслуживания воздушного фильтра.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/190-case/mail-2.jpg" width="348" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <!-- Вторая колонка-->
                                <td width="206" style="padding:5px 0px 0px 10px;">
                                    <table width="196" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <img src="http://www.lbr.ru/images/kp/190-case/mail-3.jpg" width="196" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/190-case/mail-4.jpg" width="196" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <!-- Третья колонка-->
                                <td width="206" style="padding:5px 0px 0px 10px;">
                                    <table width="196" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:30px 0px 30px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color:#F58220; text-align: justify;">
                                                    Объем топливного бака – <span style="font-size: 16px;">110 литров</span>
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td>
                                                <img src="http://www.lbr.ru/images/kp/190-case/mail-5.jpg" width="196" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:20px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: justify; ">
                                                    Простой доступ и отличный обзор
                                                </p>
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    Узкие стойки, большие
                                                    зеркала и широкое ветровое стекло 
                                                    обеспечивают
                                                    Farmall JX лучший обзор
                                                    погрузчиков и прицепных
                                                    или навесных орудий среди 
                                                    подобных машин в этом
                                                    диапазоне мощности.
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
<!-- Первый блок -->

<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr><td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="378">
                                    <img src="http://www.lbr.ru/images/kp/190-case/mail-6.jpg" width="196" style="border: 0; float: left;  margin-right: 10px;" alt="Изображения не отображаются">
                                    <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                        <span style="color:#F58220;font-weight: bold;">Рычаг переключения,
                                        встроенный в рулевую
                                        колонку<br></span>
                                        Дополнительный рычаг
                                        переключения, встро-
                                        енный в рулевую колон-
                                        ку, позволяет изменять
                                        направление движения
                                        без сцепления, что иде-
                                        ально подойдет <span style="color:#F58220;font-weight: bold; text-transform: uppercase;">ДЛЯ
                                        ВЫПОЛНЕНИЯ ПОГРУЗОЧНЫХ РАБОТ, ОЧИСТКИ
                                        ПЛОЩАДКИ И ПОЛЕВЫХ РАБОТ</span>, требующих крутых
                                        поворотов по краю. Забудьте о боли в левой ноге после
                                        долгого трудового дня.
                                    </p>
                                </td>
                                <td width="378" style="padding:0px 0px 0px 10px;">
                                    <img src="http://www.lbr.ru/images/kp/190-case/mail-7.jpg" width="196" style="border: 0; float: left; margin-right: 10px;" alt="Изображения не отображаются">
                                    <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                        Функция переключения
                                        отлично подойдет <span style="color:#F58220;font-weight: bold; text-transform: uppercase;"> ДЛЯ
                                        РАБОТЫ ПОГРУЗЧИКА</span> на скотоводческих
                                        фермах, обеспечивая
                                        плавное изменение направления и 
                                        повышенную произ-водительность.
                                    </p>  
                                </td>
                            </tr>
                            <tr valign="top">
                                <td colspan="2" style="padding:10px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/190-case/mail-8.jpg" width="760" style="border: 0; float: right;" alt="Изображения не отображаются">
                                 </td>
                            </tr> 

                            <tr valign="top">
                                <td  colspan="2" style="padding:10px 0px 0px 0px;">
                    
                                    <!--Таблица с данными-->
                                    <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                        <tr>
                                            <td width="60%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Двигатель</span></strong></td>
                                            <td width="40%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">S8000</span></strong></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Номинальная мощность — ISO TR14396 — ECE R120 (кВт/л.с.)</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">81/110</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Номинальная частота вращения двигателя (об/мин)</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2300</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Емкость топливного бака (л)</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">110</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Трансмиссия</span></strong></td>
                                            <td align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Synchro Shuttle™ 12x12 (30 км/ч)</span></strong></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Угол поворота управляемых колес с приводом с одной/двумя ведущими осями (°)</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">55/40</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Подача главного насоса (л/мин)</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">36</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рычажный механизм</span></strong></td>
                                            <td align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"></span></strong></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Макс. грузоподъемность при сферических цапфах (кг)</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3565</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Максимальная грузоподъемность подъемника по всей площади рабочей зоны (на 610 мм за сферическими цапфами) (кг)</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2700</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Размеры по задним шинам</span></strong></td>
                                            <td align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">16.9R38</span></strong></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                        </tr>
                                    </table>
                               </td>
                        </tr>
                        <tr valign="top">
                                   <td style="padding:0px 0px 0px 0px;">
                                        <p style="margin:0; color:#cc3333; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                            * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
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


<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>






