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
                                <td style="padding-bottom: 3px;" width="670">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/opryskivateli/pritsepnye-opryskivateli/426-pritsepnye-opryskivateli-elios/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                       Прицепные опрыскиватели ELIOS BDL
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="20">
                                    <img src="http://www.lbr.ru/images/makers/bargam-logo-big.jpg" width="90" style="border: 0; float: right;" alt="Логотип Bargam">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/191-elios/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                         <tr>
                                            <td style="padding: 0px 0px 0px 0px;" colspan="2">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold;text-align: justify; ">
                                                    Прицепные опрыскиватели Bargam (Италия) ELIOS BDL 3000 предназначены для распыления 
                                                    химических веществ (удобрений, гербицидов, пестицидов и т.д.) на земельных участках
                                                    и полях с целью защиты сельскохозяйственных посевов от вредителей и болезней.
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
                                            <td style="padding:0px 0px 3px 0px;">
                                                <p style="margin:0; padding: 0; font-family: 'Trebuchet MS', sans-serif;  font-weight: bold; color:#F58220; font-size: 16px;text-align: justify; ">
                                                    100% надежность.
                                                </p>    
                                              
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    Штанга прицепных опрыскивателей с гидравлическим
                                                    механизмом бокового складывания изготовлена из
                                                    высококачественной стали, что гарантирует долгий срок
                                                    службы и бесперебойную работу опрыскивателя.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:15px 0px 3px 0px;">
                                                <p style="margin:0; padding: 0; font-family: 'Trebuchet MS', sans-serif;  font-weight: bold; color:#F58220; font-size: 16px;text-align: justify; ">
                                                    Нет проблемам с форсунками!
                                                </p>    
                                              
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    Все форсунки опрыскивателя находятся в глубине штанги,
                                                    что исключает их случайное повреждение и забивание.
                                                </p>

                                            </td>
                                        </tr>
                                       <tr>
                                            <td style="padding:15px 0px 3px 0px;">
                                                <p style="margin:0; padding: 0; font-family: 'Trebuchet MS', sans-serif;  font-weight: bold; color:#F58220; font-size: 16px;text-align: justify; ">
                                                    Эффективность выше на 30%.
                                                </p>    
                                              
                                            </td>
                                        </tr>
                                       <tr>
                                            <td>
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr>
                                                        <td width="200" style="padding:0px 0px 0px 0px;" valign="middle">
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                Опрыскиватели ELIOS BDL 3000
                                                                оборудованы <span style="color:#F58220;font-weight:bold;">специальной сис-
                                                                темой стабилизации</span> штанги,
                                                                сконструированной для работы
                                                                опрыскивателя в сложных российских условиях. 
                                                                Система состоит из
                                                                блока пневмоподушек и специальных стабилизаторов, 
                                                                что позволяет
                                                                минимизировать колебания во
                                                                время движения опрыскивателя.
                                                            </p> 
                                                            
                                                        </td>
                                                        <td width="158" style="padding:0px 0px 0px 5px;">
                                                            <img src="http://www.lbr.ru/images/kp/191-elios/mail-2.jpg" width="153" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                     <tr>
                                            <td style="padding:0px 0px 3px 0px;">
                                                <p style="margin:0; padding: 0; font-family: 'Trebuchet MS', sans-serif;  font-weight: bold; color:#F58220; font-size: 16px;text-align: justify; ">
                                                    Универсальность.
                                                </p>    
                                              
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    Опрыскивание и заправка производится одним насосом
                                                    (Annoni Reverberi), что позволяет быстро заполнить
                                                    основной бак без использования дополнительного насоса.
                                                </p>

                                            </td>
                                        </tr>
                                         <tr>
                                            <td style="padding:15px 0px 3px 0px;">
                                                <p style="margin:0; padding: 0; font-family: 'Trebuchet MS', sans-serif;  font-weight: bold; color:#F58220; font-size: 16px;text-align: justify; ">
                                                    Простота и безопасность.
                                                </p>    
                                              
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    Для упрощения внесения химикатов в бак, имеется 
                                                    <span style="font-weight: bold;">бачок-смеситель на 30 л</span>, который позволяет удобно и без риска
                                                    вносить химикаты с земли. Бачок имеет механизм подъема и опускания. 
                                                    Он может использоваться для приготовления рабочего раствора или заливки концентрата в
                                                    основной бак.
                                                </p>

                                            </td>
                                        </tr>
                                                    <tr>
                                                        <td style="padding: 10px 0px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/191-elios/mail-3.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
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
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                               <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr>
                                                    <td width="240" style="padding:0px 0px 0px 0px;" valign="top" >
                                                            <p style="margin:0; padding: 0; font-family: 'Trebuchet MS', sans-serif;  font-weight: bold; color:#F58220; font-size: 16px;text-align: justify; ">
                                                                Экологичность.
                                                            </p> 
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                                В бачке-смесителе имеется встроенная 
                                                                промывочная система канистр,
                                                                что очень важно для их дальнейшей
                                                                утилизации.
                                                            </p>
                                                        </td>
                                                        <td width="138" style="padding:0px 0px 0px 10px;" >
                                                            <img src="http://www.lbr.ru/images/kp/191-elios/mail-4.jpg" width="128" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                               </table>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <p style="margin:0; padding:15px 0px 0px 0px; color:#F58220; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold;text-align: justify; ">
                                                    Экономия химикатов до 25%.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 3px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    Некоторые модели опрыскивателей <span style="font-weight: bold">ELIOS BDL 3000</span>
                                                    могут быть оборудованы штангами с воздушным рукавом.
                                                </p>
                                                <p style="margin:0; color:black; padding: 2px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    <span style="font-weight: bold">Воздушный поток</span>, исходящий из отверстий в рукавах,
                                                    выполняет одновременно несколько функций:
                                                </p>
                                                <p style="margin:0; color:black; padding: 2px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    1. Повышает проникание распыляемых химикатов по
                                                    всему растению до грунта;
                                                <p style="margin:0; color:black; padding: 2px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    2. Повышает процент покрытия листьев с обеих сторон
                                                    распыляемыми химикатами.
                                                </p>
                                                <p style="margin:0; color:black; padding: 2px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    3. Уменьшает количество опрыскиваний, необходимых
                                                    растениям в течение одного вегетационного периода.
                                                </p>
                                                <p style="margin:0; color:black; padding: 2px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    4. Предоставляет возможность производить опрыскива-
                                                    ние в плохую, ветреную погоду, увеличив тем самым
                                                    коэффициент использования оборудования.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; padding:15px 0px 0px 0px; color:#F58220; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold;text-align: justify; font-style:italic">
                                                    Использование опрыскивателя с воздушным рукавом 
                                                    позволяет увеличить качество
                                                    проводимых обработок растений, а также
                                                    уменьшить тем самым затраты на 30-50%.
                                                </p>

                                            </td>
                                        </tr>
                                        
                                        
                                    </table>
                                </td>
                                <td valign="top">
                                    <!-- Вторая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px 0px 5px 20px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Технические характеристики:
                                                </p>

                                            </td>
                                        </tr>
                                       <tr>
                                            <td style="padding:5px 0px 0px 20px;">
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="40%" align="left" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                        <td width="30%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Elios</span></strong></td>
                                                        <td width="30%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Elios AIR (с воздушным рукавом)</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Рабочая ширина захвата штанги, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">24</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">18</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Резервуар, л</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3000</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3000</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Диапазон регулировки высоты штанги над землей, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">500-1500</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">500-1200</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Колея, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1400-2100</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1400-2100</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Клиренс, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">625</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">625</span></td>
                                                   </tr>
                                                   <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Цена с НДС, руб.</span><span style="color:red; font-size:10px;">*</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                        <td style="padding:0px 0px 0px 20px;">
                                            <p style="margin:0; color:red; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                                * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                            </p> 
                                        </td>
                                    </tr>
                                       
                                        <tr>
                                            <td style="padding:20px 0px 0px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/191-elios/mail-5.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                              </table>
                    </td>
                </tr>
                <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr>
                                                        <td width="183" style="padding:0px 0px 0px 0px;" valign="top" >
                                                            <img src="http://www.lbr.ru/images/kp/191-elios/mail-6.jpg" width="183" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                        <td width="196" style="padding:0px 0px 0px 5px;" valign="top" >
                                                            <img src="http://www.lbr.ru/images/kp/191-elios/mail-7.jpg" width="191" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                   </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </td>
                                <td valign="bottom">
                                    <!-- Вторая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                        <td style="padding:10px 0px 0px 20px;" valign="bottom">
                                                <img src="http://www.lbr.ru/images/kp/191-elios/mail-8.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
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
                    'link' => 'http://www.lbr.ru/tehnika/opryskivateli/pritsepnye-opryskivateli/426-pritsepnye-opryskivateli-elios/',
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






