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
                                <td style="padding-bottom: 3px;" width="720">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/kormorazdatchiki-i-kombikormovye-mini-zavody/izmelchiteli-rulonov-i-vyduvateli-solomy/389-izmelchiteli-rulonov-serii-uniball/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                       Измельчители рулонов серии «Унибалл»
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="40">
                                    <img src="http://www.lbr.ru/images/uploaded/RBS-(logo)_.jpg" width="40" style="border: 0; float: right;" alt="Логотип Feraboli">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/174-uniball/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                <td style="padding: 0px 0px 5px 0px;border-bottom: 3px solid #9c9d9d;">
                                    <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px; text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/174-uniball/mail-2.jpg" width="700" style="border: 0;" alt="Изображения не отображаются">
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
                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; color: black; text-align: justify; font-style: italic; ">
                            Измельчители рулонов серии «Унибалл» созданы для измельчения и смешивания таких материалов, как
                            сено и солома. Измельчители просты и неприхотливы в работе, измельчают, смешивают и одновременно
                            раздают корм животным.
                        </p> 
                    </td>
                </tr>


                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="300">
                                    <!-- Первая колонка-->
                                    <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td style="padding: 10px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                    Функция самозагрузки.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    С помощью гидравлического механизма
                                                    задний борт измельчителя поднимается и
                                                    подает рулон по направлению к дисковому
                                                    ротору, который измельчает его всего за
                                                    2-3 минуты!
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 25px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                    Качественное измельчение,<br> однородный материал.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    Дисковый ротор с увеличенным количеством ножей и 
                                                    измененной геометрией их
                                                    расположения позволяет повысить
                                                    качество измельчения, что приводит к
                                                    получению более однородного материала.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td width="458">
                                    <table width="458" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <table width="438" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td style="padding:0px;">
                                                            <img src="http://www.lbr.ru/images/kp/174-uniball/mail-3.jpg" width="438" style="border: 0;" alt="Изображения не отображаются">
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
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td colspan="2">
                                   <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                       <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                    Три варианта выгрузки!
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    Помимо стандартной выгрузки справа сверху, теперь опционально доступны комплекты выгрузки поворотным
                                                    раструбом сверху и снизу слева.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/174-uniball/mail-4.jpg" width="760" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 0px 0px;">
                                                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="28%">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center; ">
                                                                Стандартная выгрузка справа сверху
                                                            </p>
                                                        </td>
                                                        <td width="38%" valign="top">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center; ">
                                                                Выгрузка слева снизу
                                                            </p>
                                                        </td>
                                                        <td width="34%">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center; ">
                                                                Выгрузка слева сверху поворотным раструбом
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                       </tr>
                                       
                                        <tr>
                                            <td style="padding: 20px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                    Технические характеристики:
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                          <td style="padding: 5px 0px 0px 0px;">
                                               <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="50%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box;" ><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Длина х высота х ширина, м</span></td>
                                                        <td width="50%" align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3,57 х 2,47 х 2,05</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; " ><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Диаметр измельчаемого рулона, м</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">до 1,8</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box;" ><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Дальность разбрасывания, м</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1-15</span></td>
                                                    </tr>
                                                    <tr>
                                                    <td align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box;" ><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">60</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box;" ><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                                    </tr>
                                                </table> 
                                            </td> 
                                       </tr>
                                   </table>
                                </td>
                            </tr>
                            
                            
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="456" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/173-senior_goriz/mail-6.jpg" width="396" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                    'link' => 'http://www.lbr.ru/tehnika/kormorazdatchiki-i-kombikormovye-mini-zavody/izmelchiteli-rulonov-i-vyduvateli-solomy/389-izmelchiteli-rulonov-serii-uniball/',
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

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>









