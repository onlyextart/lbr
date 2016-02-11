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
                                        Пресс-подборщик Entry 120/150
                                    <span>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="100">
                                    <img src="http://www.lbr.ru/images/makers/feraboli.jpg" width="80" style="border: 0; float: right;" alt="Логотип Feraboli">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/294-entry/1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                    <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td>
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding-left:5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #999999; text-align: justify; font-style: italic; ">
                                                    Пресс-подборщики с фиксированной камерой Entry 120/150 предназначены для подбора
                                                    и прессования в рулоны травяной массы на любой стадии высушивания: вяленая трава, в
                                                    состоянии сена, соломы и др.
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
                                <td width="378">
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="378" colspan="2">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    1. Результат работы пресс-подборщика – ОДНОРОДНЫЕ, ПЛОТНЫЕ РУЛОНЫ БЕЗ ПОТЕРЬ 
                                                    продукта и в условиях абсолютной безопасности для 
                                                    оператора.
                                                </p>
                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: justify; ">
                                                    Получение такого качественного рулона обеспечивается благодаря количеству вальцов транспортера:
                                                </p>
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: justify; ">
                                                    • 33 шт. в модели 
                                                    Entry 120,<br>
                                                    • 41 шт. в модели
                                                    Entry 150.<br>
                                                    Подборщик машины
                                                    имеет ширину 1 850
                                                    мм (опционально
                                                    2000 мм).
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="199">
                                               <img src="http://www.lbr.ru/images/kp/294-entry/2.jpg" width="199" style="border: 0; float: left;" alt="Изображения не отображаются"> 
                                            </td>
                                            <td width="179" style="padding:0px 0px 0px 10px;">
                                               <img src="http://www.lbr.ru/images/kp/294-entry/3.jpg" width="169" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>


                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="358" colspan="2">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                                2. Подбор варианта увязки рулона в зависимости
                                                                от продукта, с которым вы работаете, и условий
                                                                дальнейшего хранения и использования готовых
                                                                рулонов.
                                                            </p>
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:normal; text-align: justify; ">
                                                                В пресс-подборщиках
                                                                Entry возможны три
                                                                типа увязки рулона:<br>
                                                                • ОДНА НИТКА<br>
                                                                • ДВЕ НИТКИ<br>
                                                                • СЕТКА
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="139" valign="top" style="padding:15px 0px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/294-entry/4.jpg" width="139" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                        <td width="219" style="padding:15px 0px 0px 10px;">
                                                            <img src="http://www.lbr.ru/images/kp/294-entry/5.jpg" width="209" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight:normal; text-align: left; font-style:italic;">
                                                                Увязчик
                                                            </p>
                                                        </td>
                                                        <td style="padding:0px 0px 0px 10px;">
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight:normal; text-align: left; font-style:italic;">
                                                                Отделение для бобин (сетка-нить)
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
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: justify; ">
                                                    3. Обеспечивается полноценная работа пресс-
                                                    подборщика даже на полях с сильным уклоном или
                                                    с «тяжелым» продуктом.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: justify; ">
                                                    Благодаря гребенному укладчику с возвратно-поступательным 
                                                    движением прессуемый продукт деликатно
                                                    обрабатывается, подача его в камеру не затрудняется.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:#F58220; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: justify; ">
                                                    4. Работа осуществляется камерой постоянного
                                                    объема с прессующим транспортером из цепей и
                                                    валов с низким потреблением мощности.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: justify; ">
                                                    В результате хорошо удерживается травяная масса, обеспечивается 
                                                    отличное вращение скошенных культур.<br>
                                                    Можно обрабатывать как сухой, так и влажный продукт,
                                                    который в дальнейшем может запаковываться в пленку.
                                                    Камера пресс-подборщика надежна и проста в обслуживании.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:#F58220; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: justify; ">
                                                    5. Работа без простоев на обслуживающие операции!
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: justify; ">
                                                    Установленная в пресс-подборщике Entry АВТОМАТИЧЕСКАЯ 
                                                    СИСТЕМА СМАЗКИ позволяет автоматически
                                                    смазывать основные рабочие узлы машины в процессе
                                                    заготовки. При необходимости смазку можно нанести
                                                    на цепь полностью в ручном режиме. Важно, что при
                                                    этом полностью исключается загрязнение продукта
                                                    смазочными маслами.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="378" style="padding:5px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/294-entry/6.jpg" width="378" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="378" style="padding: 3px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:normal; text-align: left; font-style:italic;">
                                                    Размыкание и автоматическая система смазки цепей
                                                </p>
                                            </td>
                                        </tr>
                                        

                                    </table>
                                </td>
                                <td valign="top">
                                    <!-- Вторая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="padding:0px 0px 0px 0px; border: 0; border-collapse: collapse; background: white;">
                                         <tr>
                                            <td>
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td colspan="2" style="padding:0px 0px 0px 20px;">
                                                            <p style="margin:0; color:#F58220; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: justify; ">
                                                                6. Удобство, безопасность и контроль за работой
                                                                пресс-подборщика.
                                                            </p>

                                                        </td>
                                                    </tr>
                                                    <tr valign="top">   
                                                        <td colspan="2" style="padding:0px 0px 0px 20px;">
                                                            <img src="http://www.lbr.ru/images/kp/294-entry/7.jpg" width="158" style="border: 0; float: right; margin-left:5px;" alt="Изображения не отображаются">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: justify; ">
                                                               • толкатель рулонов – обеспечивается удобство и
                                                               простота выгрузки
                                                               готового рулона
                                                               без дополнительных перемещений;<br>
                                                               • счетчик рулонов –
                                                               для подсчета количества спрессованных и выгруженных
                                                               рулонов;<br>
                                                               • автоматическое отключение прессующего транспортера
                                                               при открытии камеры – защита приводных цепей от
                                                               повреждений при выгрузке рулона
                                                               
                                                            </p>
                                                            
                                                        </td>
                                                        
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="padding:0px 0px 0px 20px; border: 0; border-collapse: collapse; background: white;">
                                                    <tr>   
                                                        <td width="220" valign="top" style="padding:0px 0px 0px 20px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: justify; ">
                                                                • электрический
                                                                блок управления,
                                                                устанавливается в
                                                                кабине трактора,
                                                                прост и понятен в
                                                                использовании
                                                            </p>

                                                        </td>
                                                        <td width="158" style="padding: 0px 0px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/294-entry/8.jpg" width="158" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="378" style="padding:30px 0px 0px 10px;">
                                                <img src="http://www.lbr.ru/images/kp/294-entry/9.jpg" width="368" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>

                            </tr>

                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
       <td style="padding:5px 20px 0px 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="padding:0px 0px 0px 20px; border: 0; border-collapse: collapse; background: white;">
                <tr>
                    <td rowspan="2" width="500" style="padding: 0px 0px 0px 0px;" valign="top">
                        <table width="500" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: none; border-collapse: collapse; background-clip:padding-box;">
                            <tr>
                                <td>
                                    <table width="500" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                        <tr>
                                            <td width="50%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Entry 120</span></strong></td>
                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Entry 150</span></strong></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Размер камеры прессования, мм</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1200 x диам. 1200</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1200 x диам. 1500</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ширина подборщика, мм</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1.850</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Боковые шнеки подборщика</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Увязчик</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">нитевой увязчик</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Количество вальцов транспортера</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">33</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">41</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">45</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">55</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Габариты:
                                            длина, мм/ширина, мм/высота, мм</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3 500/
                                                2 150/
                                                2 000</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3 800/
                                                2 150/
                                                2 350</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Цена с НДС</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
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
                    <td width="260" valign="top" style="padding:0px 0px 0px 10px;" valign="top">
                        <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: left; ">
                            Опционально:                                        
                        </p>
                        <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: justify; ">
                            • 2-х нитевой увязчик;<br>
                            • сетевой увязчик;<br>
                            • гидравлическая тормозная система;<br>
                            • увеличенные колеса 400-15.5;<br>
                            • гомокинетический карданный вал;<br>
                            • широкий подборщик 2000 мм.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0px 0px 0px 10px;">
                        <img src="http://www.lbr.ru/images/kp/294-entry/10.jpg" width="240" style="border: 0; float: right;" alt="Изображения не отображаются">
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
<!--<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr><td style="padding:0px 20px 0px 20px;">
                        
                    </td>
                </tr>
                
                

            </table>
        </td>
    </tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>-->

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>






