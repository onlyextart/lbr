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
                                    <a href="" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Пресс-подборщики Trotter 125 TOPCUT/ULTRACUT
                                    </a>
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
                                    <img src="http://www.lbr.ru/images/kp/162-trotter/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                                    Пресс-подборщики с фиксированной камерой Trotter 125 обеспечивают в процессе работы
                                                    высочайшую производительность. Машины Trotter 125 используются при любых условиях и
                                                    вне зависимости от местности: и на равнинах, и на холмистых участках. Пресс-подборщики
                                                    работают со всевозможными видами продукта: люцерна, зеленая масса, солома, пожнивные остатки 
                                                    (машина прекрасно зарекомендовала себя при работе с биомассой).
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
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Однородная подача продукта. Производительность
                                                    машины – до 50 рулонов в час!
                                                </p>
                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: justify; ">
                                                    Роторный укладчик благодаря большому количеству
                                                    пальцев гарантирует постоянную и однородную подачу
                                                    продукта в камеру прессования.  
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/162-trotter/mail-2.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 3px 0px;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="170">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                                Широкий и чистый
                                                                подбор прессуемой
                                                                травяной массы.
                                                            </p>
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:normal; text-align: justify; ">
                                                                Ширина захвата под-
                                                                борщика 2000 мм (оп-
                                                                ционально 2200 мм) и
                                                                низкий центр тяжести
                                                                позволяет работать
                                                                в труднодоступных
                                                                районах и на склонах.
                                                            </p>

                                                        </td>
                                                        <td width="208" style="padding:5px 0px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/162-trotter/mail-3.jpg" width="198" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>

                                                </table>
                                            </td>
                                        </tr>

                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr>
                                            <td style="padding: 0px 0px 0px 20px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Плотный равномерный рулон, который будет храниться длительное время без потери качества продукта.
                                                </p>
                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: justify; ">
                                                    Прессовальная камера формируем плотный ровный ру-
                                                    лон благодаря наличию в ней 18 высокопрочных сталь-
                                                    ных вальцов.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 3px 0px 0px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/162-trotter/mail-4.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
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
                                            <td style="padding: 3px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Подбор варианта увязки рулона в зависимости от
                                                    продукта, с которым вы работаете и условий даль-
                                                    нейшего хранения и использования готовых рулонов.
                                                </p>
                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: justify; ">
                                                    • 2 нитки<br>
                                                    • Сетка<br>
                                                    • Пленка
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 3px 0px 0px 00px;">
                                                <img src="http://www.lbr.ru/images/kp/162-trotter/mail-5.jpg" width="378" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:#F58220; padding: 10px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Предварительное измельчение скошенной культуры.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr>
                                                        <td width="268" style="padding: 10px 0px 0px 0px;" valign="top">
                                                            <p style="margin:0; color:black; padding: 5px 0px 5px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:bold; text-align: justify; ">
                                                                Система резки ULTRACUT:
                                                            </p>
                                                            <img src="http://www.lbr.ru/images/kp/162-trotter/mail-6.jpg" width="268" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                        </td>
                                                        <td width="110" style="padding:0px 15px 0px 10px;" valign="center">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: left; ">
                                                                25 ножей,
                                                                длина резки
                                                                4,5 см
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="268" style="padding: 10px 0px 0px 0px;" valign="top">
                                                            <p style="margin:0; color:black; padding: 5px 0px 5px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:bold; text-align: justify; ">
                                                                Система резки TOPCUT:
                                                            </p>
                                                            <img src="http://www.lbr.ru/images/kp/162-trotter/mail-7.jpg" width="268" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                        </td>
                                                        <td width="110" style="padding:0px 15px 0px 10px;" valign="center">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: left; ">
                                                                13 ножей,
                                                                длина резки<br>
                                                                9 см
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:#F58220; padding: 10px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Возможность регулировки плотности прессования
                                                    в зависимости от травостоя или влажности травяной массы.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="http://www.lbr.ru/images/kp/162-trotter/mail-8.jpg" width="268" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>

                                    </table>
                                </td>
                                <td valign="top">
                                    <!-- Вторая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="padding:0px 0px 0px 20px; border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:#F58220; padding: 5px 0px 0px 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Надежная система привода
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 10px 0px 0px 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: justify; ">
                                                    Создана на основе новейших технологий, обеспечива-
                                                    ющих высокую производительность. Надежная система
                                                    трансмиссии, шестерни и пальцы вальцов произведены
                                                    из закаленного металла. Проста в использовании. Данная система привода делает пресс-подборщик Trotter
                                                    идеальной машиной при работе на любых типах почвы.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=" padding: 10px 0px 0px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/162-trotter/mail-9.jpg" width="358" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="padding:0px 0px 0px 20px; border: 0; border-collapse: collapse; background: white;">
                                                    <tr>   
                                                        <td width="260" style="padding:5px 0px 0px 20px;">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: left; ">
                                                                Удобство, безопасность и контроль
                                                                за работой пресс-подборщика.                                        
                                                            </p>
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: justify; ">
                                                                Электронный многофункциональный
                                                                блок управления пресс-подборщиком
                                                                «BALE TRONIC» совместно с блоком
                                                                управления обмотчиком установлен в
                                                                кабине трактора и настроен в автоматическом режиме.
                                                            </p>

                                                        </td>
                                                        <td width="118" style="padding: 0px 0px 0px 10px;">
                                                            <img src="http://www.lbr.ru/images/kp/162-trotter/mail-10.jpg" width="118" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:30px 0px 0px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/162-trotter/mail-11.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>

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

<!-- Третий блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td>
                                    <!--Таблица с данными-->
                                    <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                        <tr>
                                            <td width="50%" align="left" colspan="2" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">TROTTER 125 TOPCUT</span></strong></td>
                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">TROTTER 125 ULTRACUT</span></strong></td>
                                        </tr>
                                        <tr>
                                            <td width="25%" align="left" rowspan="4" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Камера прессования</span></td>
                                            <td width="25%" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">тип</span></td>
                                            <td width="50%" colspan="2" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">фиксированная, с высокопрочными стальными вальцами</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">кол-во вальцов</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">18</span></td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">регулировка плотности</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">механическая, 7 позиций</span></td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">размеры рулона <br>(ширина/диаметр), см</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">120/125</span></td>
                                        </tr>
                                        <tr>
                                            <td width="25%" align="left" style="border: solid black 1px;" ><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Вес машины</span></td>
                                            <td width="25%" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">кг</span></td>
                                            <td width="25%" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3150</span></td>
                                            <td width="25%" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3200</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" rowspan="3" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Габариты</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">длина, мм</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3920</span></td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">ширина, мм</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2400</span></td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">высота, мм</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2400</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;" ><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Потребляемая мощность</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">кВт/л.с.</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">48/65</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">53/72</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" rowspan="2" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Подборщик</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">ширина захвата, мм</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2000</span></td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">подъем</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">гидравлический</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" rowspan="2" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Система измельчения «Feraboli Cut System»</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">кол-во ножей, шт.</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">13</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">25</span></td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">длина резки, см</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">9</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4,5</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Пульт управления</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">«Bale Tronic»</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">электронный, многофункциональный</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Частота вращения ВОМ</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">об./мин</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">540</span></td>
                                        </tr>

                                        <tr>
                                            <td align="left" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Система увязки</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2-х нитевая</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Колеса</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">11,5-15</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Карданный вал</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">гомокинетический, с ограничителем крутящего момента и предохранительным болтом</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color:grey;">Цена с НДС</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr valign="top">
                            <td style="padding: 5px 0px 0px 0px;">
                                <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                    * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                </p> 
                            </td>
                        </tr>
                        </table>
                    </td>
                </tr>
                <tr><td style="padding:15px 20px 15px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="370">
                                    <table width="370">
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: left; ">
                                                    Опционально можно укомплектовать
                                                    пресс-подборщик:                                        
                                                </p>
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: justify; ">
                                                    • увязка в пластиковую пленку;<br>
                                                    • сетевой увязчик;<br>
                                                    • толкатель рулонов;<br>
                                                    • увеличенные колеса 40015.5;<br>
                                                    • автоматическая система смазки цепей;<br>
                                                    • гидравлическая тормозная система;<br>
                                                    • широкий подборщик (2 200 мм).
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="http://www.lbr.ru/images/kp/162-trotter/mail-12.jpg" width="370" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="375" style="padding: 0px 0px 0px 10px;">
                                    <img src="http://www.lbr.ru/images/kp/162-trotter/mail-13.jpg" width="375" style="border: 0; float: right;" alt="Изображения не отображаются">
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








