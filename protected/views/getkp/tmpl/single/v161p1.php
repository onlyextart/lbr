<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/print_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<div class="table w-800">
    <!-- Первый блок -->
    <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
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
                                            Пресс-подборщики Omnia 125 TOPCUT/ULTRACUT
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
                                        <img src="http://www.lbr.ru/images/kp/161-omnia/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                        <td style="padding: 5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td>
                                        <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="top">
                                                <td>
                                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                </td>
                                                <td style="padding-left:5px;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #999999; text-align: justify; font-style: italic; line-height: 15px;">
                                                        Комбинированный пресс-подборщик с фиксированной камерой Omnia 125 предназначен
                                                        для прессования травяной массы, сена, соломы в рулоны с последующей их упаковкой
                                                        в пленку, тем самым избегая возможного загрязнения при соприкосновении с землей.
                                                        Данный пресс-подборщик идеален для работы с зеленой травяной массой: майские,
                                                        райграса, люцерна.
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
                        <td style="padding: 13px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                <tr valign="top">
                                    <td>
                                        <!-- Первая колонка-->
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td>
                                                    <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: justify; line-height:14px;">
                                                        Результат работы пресс-подборщика – плотный
                                                        равномерный рулон в пленке как внутри, так и снаружи. Производительность – до 50 рулонов час!
                                                    </p>
                                                    <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal;text-align: justify;line-height:14px; ">
                                                        Это обеспечивается благодаря тому, что процесс прессования в камере начинается одновременно с поступлением в нее травяной массы. 
                                                        Прессование осуществляется с помощью 18 высокопрочных стальных вальцов.
                                                        Роторный укладчик благодаря большому количеству
                                                        пальцев гарантирует постоянную и однородную подачу
                                                        продукта в камеру прессования.
                                                    </p>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 0px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/161-omnia/mail-2.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                                        <tr valign="top">
                                                            <td width="170">
                                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: justify;line-height:14px; ">
                                                                    Широкий и чистый
                                                                    подбор прессуемой
                                                                    травяной массы.
                                                                </p>
                                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight:normal; text-align: justify;line-height:14px; ">
                                                                    Ширина захвата под-
                                                                    борщика 2000 мм (оп-
                                                                    ционально 2200 мм) и
                                                                    низкий центр тяжести
                                                                    позволяет работать
                                                                    в труднодоступных
                                                                    районах и на склонах.
                                                                </p>

                                                            </td>
                                                            <td width="188" style="padding:5px 0px 0px 10px;">
                                                                <img src="http://www.lbr.ru/images/kp/161-omnia/mail-3.jpg" width="178" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 3px 0px 0px 20px;">
                                                    <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: justify; line-height:14px;">
                                                        Выбор типа увязки рулона под вашу технологию за-
                                                        готовки и хранения готовых рулонов.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0px 0px 0px 20px;">
                                                    <table width="300" align="left">
                                                        <tr>
                                                            <td width="80">
                                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:normal; text-align: justify;">
                                                                    • 2 нитки<br>
                                                                    • Сетка  
                                                                </p>  
                                                            </td>
                                                            <td width="100">
                                                                <img src="http://www.lbr.ru/images/kp/161-omnia/arrow.jpg" width="100" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                            </td>
                                                            <td width="120">
                                                                <p style="margin:0; color:black; padding: 5px 0px 0px 5px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:normal; text-align: justify; ">
                                                                    В пленку
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 3px 0px 0px 20px;">
                                                    <img src="http://www.lbr.ru/images/kp/161-omnia/mail-4.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
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
    <!-- Первый блок -->
</div>

<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
    <!-- Второй блок -->
    <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
            <td>
                <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                    <tr><td style="padding:5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td>
                                        <!-- Первая колонка-->
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td>
                                                    <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: justify; ">
                                                        Предварительное измельчение скошенной культуры.
                                                    </p>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                        <tr>
                                                            <td width="233" style="padding: 5px 0px 0px 0px;" valign="top">
                                                                <p style="margin:0; color:black; padding: 0px 0px 3px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:bold; text-align: justify; ">
                                                                    Система резки ULTRACUT:
                                                                </p>
                                                                <img src="http://www.lbr.ru/images/kp/161-omnia/mail-5.jpg" width="233" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                            </td>
                                                            <td width="145" style="padding:0px 15px 0px 10px;" valign="center">
                                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: left; ">
                                                                    25 ножей,<br>
                                                                    длина резки<br>
                                                                    4,5 см
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="233" style="padding: 30px 0px 0px 0px;" valign="top">
                                                                <p style="margin:0; color:black; padding: 5px 0px 3px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:bold; text-align: justify; ">
                                                                    Система резки TOPCUT:
                                                                </p>
                                                                <img src="http://www.lbr.ru/images/kp/161-omnia/mail-6.jpg" width="233" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                            </td>
                                                            <td width="145" style="padding:0px 15px 0px 10px;" valign="center">
                                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal;text-align: left; ">
                                                                    13 ножей<br>
                                                                    длина резки<br>
                                                                    9 см
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        
                                                    </table>
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                    <td valign="top">
                                        <!-- Вторая колонка-->
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="padding:0px 0px 0px 20px; border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td>
                                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr valign="top">   
                                                            <td width="190" style="padding:0px 0px 0px 20px;">
                                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: left; ">
                                                                    Надежная система
                                                                    привода                                         
                                                                </p>
                                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal;text-align: justify; line-height: 14px;">
                                                                    Создана на основе новейших технологий,
                                                                    обеспечивающих высокую производительность. 
                                                                    Надежная система трансмис-сии,
                                                                    шестерни и пальцы
                                                                    вальцов произведены
                                                                    из закаленного металла. 
                                                                    Проста в использовании. Данная систе-ма
                                                                    привода делает пресс-подборщик Omnia идеальной машиной при
                                                                    работе на любых типах
                                                                    почвы.
                                                                </p>

                                                            </td>
                                                            <td width="168" style="padding: 0px 0px 0px 10px;">
                                                                <img src="http://www.lbr.ru/images/kp/161-omnia/mail-8.jpg" width="168" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:10px 0px 0px 0px;">
                                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="padding:10px 0px 0px 20px; border: 0; border-collapse: collapse; background: white;">
                                                        <tr>   
                                                            <td width="260" style="padding:0px 0px 0px 20px;">
                                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: left;line-height: 14px; ">
                                                                    Удобство, безопасность и контроль
                                                                    за работой пресс-подборщика.                                        
                                                                </p>
                                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal;text-align: justify;line-height: 14px; ">
                                                                    Электронный многофункциональный
                                                                    блок управления пресс-подборщиком
                                                                    «BALE TRONIC» совместно с блоком
                                                                    управления обмотчиком установлен в
                                                                    кабине трактора и настроен в автоматическом режиме.
                                                                </p>

                                                            </td>
                                                            <td width="118" style="padding: 0px 0px 0px 10px;">
                                                                <img src="http://www.lbr.ru/images/kp/161-omnia/mail-9.jpg" width="118" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                            </td>
                                                        </tr>
                                                    </table>
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
                        <td width="233" style="padding: 20px 0px 0px 0px;" valign="top">
                            <img src="http://www.lbr.ru/images/kp/161-omnia/mail-7.jpg" width="233" style="border: 0; float: left;" alt="Изображения не отображаются">
                        </td>
                        <td width="185" style="padding:20px 0px 0px 10px;" valign="top">
                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; ">
                                Возможность
                                регулировки
                                плотности
                                прессования в
                                зависимости
                                от травостоя
                                или влажности травяной
                                массы.
                            </p>
                        </td>
                        <td style="padding:20px 0px 0px 20px;" width="358">
                            <img src="http://www.lbr.ru/images/kp/161-omnia/mail-10.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding:0px 20px 0px 20px;">
                <img src="http://www.lbr.ru/images/kp/161-omnia/mail-11.jpg" width="760" style="border: 0; float: right;" alt="Изображения не отображаются">
            </td>
        </tr>

    </table>
</td>
</tr>
</table>
</div>

<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
    <!-- Третий блок -->
    <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
            <td>
                <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr><td style="padding:0px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td>
                                        <!--Таблица с данными-->
                                        <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="1px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                            <tr>
                                                <td width="50%" align="left" colspan="2" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">OMNIA 125 TOPCUT</span></strong></td>
                                                <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">OMNIA 125 ULTRACUT</span></strong></td>
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
                                                <td width="25%" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4980</span></td>
                                                <td width="25%" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">5050</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" rowspan="3" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Габариты</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">длина, мм</span></td>
                                                <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">6200</span></td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">ширина, мм</span></td>
                                                <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2900</span></td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">высота, мм</span></td>
                                                <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2550</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="border: solid black 1px;" ><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Потребляемая мощность</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">кВт/л.с.</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">75/102</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">85/110</span></td>
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
                                                <td align="left" colspan="2" rowspan="4" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Упаковщик</span></td>
                                                <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">встроенная платформа с 3 вальцами для удержания рулона</span></td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2 держателя пленки 500/750</span></td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">автоматическая система резки пленки</span></td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">разгрузочный коврик для рулона</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Система увязки</span></td>
                                                <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2-х нитевая</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Тандемная ось</span></td>
                                                <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">400-15,5</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Карданный вал</span></td>
                                                <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">гомокинетический, с ограничителем крутящего момента и предохранительным болтом</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr valign="top">
                    <td style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                            * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                        </p> 
                    </td>
                </tr>
                    <tr><td style="padding:5px 20px 15px 20px;">
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
                                                    <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal;text-align: justify;text-height: 14px; ">
                                                        • сетевой увязчик;<br>
                                                        • увязчик для упаковки в пленку;<br>
                                                        • автоматическая система смазки цепей;<br>
                                                        • шины 19.0/45 - 17 LT;<br>
                                                        • тормозная система (гидравлическая);<br>
                                                        • широкий подборщик (2 200 мм).
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="http://www.lbr.ru/images/kp/161-omnia/mail-12.jpg" width="370" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="375" style="padding: 0px 0px 0px 10px;">
                                        <img src="http://www.lbr.ru/images/kp/161-omnia/mail-13.jpg" width="375" style="border: 0; float: right;" alt="Изображения не отображаются">
                                    </td>
                                </tr>
                            </table>
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
            </td>
        </tr>
    </table>

</div>
</body>
</html>





