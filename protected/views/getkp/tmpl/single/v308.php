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
               
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <a href="#" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        <img src="http://www.lbr.ru/images/kp/308-op/1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                    <td style="padding-top: 3px;">
                                        <img src="http://www.lbr.ru/images/kp/308-op/2.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">

                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 5px 0px 0px 0px;">
                                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td width="365" valign="top" style="padding: 0px 10px 20px 0px;">
                                                    <table width="345" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td style="padding: 0px 0px 20px 0px;">
                                                                <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:justify; color: black;">
                                                                    На опрыскивателях установлены
                                                                    мембранно-поршневые насосы Imovilli
                                                                    pompe (Италия), которые могут
                                                                    использоваться не только для
                                                                    опрыскивания, но и для самонаполения
                                                                    водой.                                               
                                                                </p>                                                                
                                                            </td>
                                                        </tr>                                                    
                                                    </table>
                                                </td>
                                                <td width="37" valign="top" style="padding: 0px 0px 20px 10px;">
                                                    <table width="350" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td style="padding: 0px 0px 20px 0px;">
                                                                <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:justify; color: black;">
                                                                    Управление расходом рабочей
                                                                    жидкости вне зависимости от скорости
                                                                    движения может осуществляться благодаря
                                                                    опциональной установке компьютера и
                                                                    гидрораспределителя Arag (Италия).                                              
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
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/308-op/3.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 0px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="370" valign="top">
                                                <img src="http://www.lbr.ru/images/kp/308-op/4.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="370" valign="top" style="padding: 0px 0px 20px 0px;">
                                                <table width="350" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td style="padding: 0px 0px 50px 0px;">
                                                            <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:justify; color: black;">
                                                                Гашение и стабилизация колебаний
                                                                штанги обеспечивается за счет
                                                                оборудования опрыскивателя маятниковой
                                                                системой и параллелограмным подъемным
                                                                механизмом.
                                                                Опрыскиватели Ремком стандартно
                                                                оснащены пневмоподушкой, гасящей
                                                                вертикальные колебания. Такой вид
                                                                стабилизации используется только в
                                                                опрыскивателях импортных производителей.
                                                            </p>
                                                        </td>
                                                    </tr>                                                    
                                                </table>
                                            </td>
                                            
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                <!-- Контент первого блока; -->
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
                
            <tr>
                <td style="padding: 5px 20px 0px 20px;">
                    <img src="http://www.lbr.ru/images/kp/308-op/5.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">

                </td>
            </tr>
            <tr>
                <td style="padding: 15px 20px 0px 20px;">
                    <img src="http://www.lbr.ru/images/kp/308-op/6.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">

                </td>
            </tr>

            <tr>
                 <td style="padding: 5px 20px 0px 20px;">
                     <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                         <tr>
                             <td width="370" valign="top">
                                 <img src="http://www.lbr.ru/images/kp/308-op/7.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                             </td>
                             <td width="390" valign="top" style="padding: 0px 0px 20px 0px;">
                                 <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                     <tr>
                                         <td style="padding: 0px 0px 50px 0px;">
                                             <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:justify; color: black;">
                                                 Богатая стандартная комплектация,
                                                 включая миксер для приготовления рабочего
                                                 раствора с дополнительными функциями
                                                 промывки тары из-под пестицидов и
                                                 растворение агрохимикатов порошковых
                                                 форм.                                                 
                                             </p>
                                             <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:justify; color: black;">
                                                 В модели опрыскивателя ОП-3000 в базовую
                                                 комплектацию также входит одноконтурная
                                                 пневматическая тормозная система.
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
                 <td>
                     <table width="700" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                         <tr>
                             <td style="padding: 5px 20px 0px 20px;">
                                 <table width="500" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                                     <tr>
                                         <td style="padding:0px 0px 0px 0px;">
                                             <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; text-align:center; color: black;line-height:20px; ">
                                                 ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ
                                             </p>
                                         </td>
                                     </tr>
                                 </table>
                             </td>
                         </tr>
                         <tr valign="top">
                             <td  align="center" style="padding: 0px 20px;">
                                 <table width="600" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                     <tbody>
                                         <tr>
                                             <td width="40%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bolder; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Наименование показателя</td>
                                             <td width="20%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bolder; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">Ед.измер.</td>
                                             <td width="20%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bolder; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">ОП-2500</td>
                                             <td width="20%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bolder; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">ОП-3000</td>
                                         </tr>
                                         <tr>
                                             <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Агрегатирование с трактором тягового класса, не менее</td>
                                             <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">кН</td>
                                             <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,4</td>
                                         </tr>
                                         <tr>
                                             <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Вместимость баков, не менее <br />- основного <br /> - дополнительного <br /> - для мытья рук</td>
                                             <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">л</td>
                                             <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><br/> 3000 <br/> 300 <br/> 15</td>
                                         </tr>
                                         <tr>
                                             <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Расход рабочей жидкости при обработке: <br />-пестицидами <br /> -жидкими минеральными удобрениями</td>
                                             <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">л/га</td>
                                             <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><br/> 100-300 <br/> 100-600</td>
                                         </tr>
                                         <tr>
                                             <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Агротехнический просвет</td>
                                             <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">мм</td>
                                             <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">550</td>
                                         </tr>
                                         <tr>
                                             <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина колеи (бесступенчатое регулирование)</td>
                                             <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">мм</td>
                                             <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1500-2100</td>
                                         </tr>                                         
                                         <tr>
                                             <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                             <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price1']; ?></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </td>
                         </tr>

                         <tr valign="top">
                             <td style="padding: 5px 0px 0px 20px;">
                                 <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: center;">
                                     * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                 </p> 
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
<!-- Блок Третий; -->
<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;

