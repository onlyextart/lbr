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
                                    <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofeleuborochnye-kombajny/412-kartofeleuborochnye-kombajny-pyra-2/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Картофелеуборочные комбайны PYRA
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="100">
                                    <img src="http://www.lbr.ru/images/kp/152-pyra/unia.jpg" width="100" style="border: 0; float: right;" alt="Логотип Great Plains">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/152-pyra/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                                    Комбайны PYRA используются в уборке картофеля на почвах легкой и средней
                                                    плотности, на плантациях с шириной междурядий от 75 до 90 сантиметров.
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
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-transform:uppercase; text-align: justify; ">
                                                    Почему малогабаритный комбайн PYRA?
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 10px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: justify;">
                                                    1. Доступность применения
                                                </p>
                                                <p style="margin:0; color:black; padding: 5px 0px 10px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    Комбайны PYRA малогабаритны, просты и надежны
                                                    в эксплуатации. Агрегатируются с тракторами Беларус-80/82.
                                                </p>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 10px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: justify;">
                                                    2. Меньше радиус поворота на краю поля – сокращение время на уборку
                                                </p>
                                                <p style="margin:0; color:black; padding: 5px 0px 10px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    За счет использования поворотных колес и дышла с ги-
                                                    дравлическим управлением картофелеуборочные комбайны PYRA позволяют обеспечить меньший радиус
                                                    разворота комбайна.
                                                </p>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 10px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: justify;">
                                                    3. Качественная сепарация почвы
                                                </p>
                                                <p style="margin:0; color:black; padding: 5px 0px 10px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    Благодаря использованию многих современных решений, которые были учтены при разработке, комбайн
                                                    PYRA собирает картофель при минимальном показателе механических повреждений с одновременным очищением клубней от налипшей почвы.
                                                </p>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 10px;">
                                                <!--Таблица с данными-->
                                                <table width="378" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="50%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Тип</span></strong></td>
                                                        <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">PYRA 1500</span></strong></td>
                                                        <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">PYRA 3000</span></strong></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Емкость бункера, кг</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1500</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">3000</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Высота разгрузки, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,25-2,70</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">1,25-3,14</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Привод транспортера</span></td>
                                                        <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">гидравлический</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ходовые колеса</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">10/75-15,3</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">16,0/70-20</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">50</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">80</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;"><?php echo $data['price2']; ?></span></td>
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
                                            <td style="padding: 0px 0px 5px 20px;">
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: justify;">
                                                    4. Бережная уборка картофеля – всегда
                                                </p>
                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    Комбайн оснащен бункером для картофеля с гидрав-
                                                    лическим приводом объемом 1500 или 3000 кг. В стан-
                                                    дартной комплектации на выходе из бункера установлен
                                                    эластичный рукав, предназначенный для минимизации
                                                    степени повреждения картофеля при падении.
                                                </p>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 5px 20px;">
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: justify;">
                                                    5. И картофель, и лук, и морковь
                                                </p>
                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    Комбайн может быть оснащен валиком для подборки
                                                    лука и лемехом для выкапывания моркови.
                                                </p>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 5px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td rowspan="2" width="205" style="padding: 0px 5px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/152-pyra/mail-2.jpg" width="205" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                        </td>
                                                        <td width="152" style="padding: 5px 0px 5px 10px;">
                                                            <img src="http://www.lbr.ru/images/kp/152-pyra/mail-3.jpg" width="142" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="152" style="padding: 5px 0px 5px 10px;" >
                                                            <img src="http://www.lbr.ru/images/kp/152-pyra/mail-4.jpg" width="142" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="378" style="padding: 5px 0px 0px 20px;" >
                                                <img src="http://www.lbr.ru/images/kp/152-pyra/mail-5.jpg" width="358" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>

                            </tr>
                        </table>
                    </td>
                </tr>


                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofeleuborochnye-kombajny/412-kartofeleuborochnye-kombajny-pyra-2/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>

            </table>



        </td>
    </tr>



    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Первый блок -->


<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
