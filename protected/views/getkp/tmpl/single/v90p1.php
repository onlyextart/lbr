<?php
if($data['show_header']=='1'  || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/print_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
 ?>
 <div class="table w-800">
<!-- Блок Первый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/chizeli-i-glubokorykhliteli/689-glubokorykhliteli-cultiplow-s-prikatyvayushchim-katkom/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Глубокорыхлитель Cultiplow c прикатывающим катком</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/makers/Agrisem-logo.JPG" height="30" style="border: 0; float: right;" alt="Логотип Unia">
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
                                    <img src="http://www.lbr.ru/images/kp/90-cultiplow/cultiplow.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
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

                        </table>
                    </td></tr>
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td style="padding: 10px 0 0;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 10px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 10px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #999999; text-align: center; ">Разрушает плужную подошву, разбивает комки почвы.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 10px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 10px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #999999; text-align: center; ">Повышает пористость почвы без смешивания слоев. Технология Agrisem образует на почве складку и перемещает ее в виде волны.
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 10px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 10px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #999999; text-align: center; ">Увеличивает стойкость почвы к ветряной и водной эрозии.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 10px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 10px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #999999; text-align: center; ">Удобрения лучше усваиваются, не скапливаются в верхних слоях и проникают глубже в почву.
                                                </p>
                                            </td>
                                        </tr>                                                             
                                        <tr>
                                            <td colspan="2" style="padding: 20px 10px 10px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Обработка почвы без плуга на глубину до 40 см даже при высоком содержании соломы.</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="padding: 10px 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                Благодаря <strong>Cultiplow</strong> стерня обрабатывается по безотвальной технологии — глубокорыхлитель позволяет сохранить на поверхности поля до 85-90% стерни.
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 20px 10px 15px 0;">
                                                            <img src="http://www.lbr.ru/images/kp/90-cultiplow/cultiplow4.jpg" width="370" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>                                                    
                                                </table>
                                            </td>
                                        </tr>                                                 
                                    </table>
                                </td>
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                                        
                                            <td style="padding: 10px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/90-cultiplow/cultiplow1.jpg" width="380" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                         <tr valign="top">                                                        
                                            <td style="padding: 10px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/90-cultiplow/cultiplow2.jpg" width="380" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                         <tr valign="top">                                                        
                                            <td style="padding: 10px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/90-cultiplow/cultiplow3.jpg" width="380" style="border: 0; float: left;" alt="double-disk">
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
</table>
<!-- Блок Первый; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Второй: -->
            <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
                <tr>
                    <td>
                        <!-- Внутренности блока: -->
                        <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <!-- Контент первого блока: -->
                            <tr><td style="padding: 0 20px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-top: 3px;">
                                                <img src="http://www.lbr.ru/images/kp/90-cultiplow/cultiplow5.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
                                            </td>
                                        </tr>
                                    </table>
                                </td></tr>
                            <tr><td style="padding: 0 20px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr valign="top">
                                            <td style="padding: 10px 0 0;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">


                                                    <tr>
                                                        <td colspan="2">
                                                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                                <tr>
                                                                    <td colspan="2" style="padding: 10px 0 0;">
                                                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                                            <span style="font-weight: bold; color: #f58220;">Советы профессионалов:</span>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr valign="top">
                                                                    <td style="padding: 5px 10px 0 0;">
                                                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                            • При отказе от оборота пласта почвы (использования плуга) заменяйте процесс обработки почвы глубокорыхлителем на малую глубину (20-30 см). 
                                                                            Это создаст благоприятные условия для всходов посева, отразится на повышении урожайности.
                                                                        </p>

                                                                    </td> 

                                                                </tr>
                                                                <tr valign="top">
                                                                    <td style="padding: 5px 10px 0 0;">
                                                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                            • Ежегодно проводить обработку чрезмерно уплотненных сельхозмашинами участков (полевые дороги, места разворотов техники и т.д.), склонов холмов, мест застоя влаги.
                                                                        </p>

                                                                    </td> 

                                                                </tr>



                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" style="padding: 10px 17px 0 0;">
                                                            <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                <tbody>
                                                                    
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,5</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4,0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная ширина, м</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,5</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4,0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество лап, шт.</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">220-260</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250-280</td>
                                                                    </tr>
                                                                    
                                                                    
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:10px; font-weight: bold;">*</span></td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                    <td colspan="2" style="padding: 5px 0px 0px 0px;">
                                                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                                            * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                                        </p> 
                                                    </td>
                                                </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                                    <td colspan="2" style="padding: 10px 0 0;">
                                                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                                            <span style="font-weight: bold; color: #f58220;">Критерии климата:</span>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr valign="top">
                                                                    <td style="padding: 0 15px 0 0;">
                                                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                            засушливая почва, посев по увлажненной почве, неравномерное выпадение осадков.
                                                                        </p>
                                                                    </td>                                                        
                                                                </tr>
                                                                <tr valign="top">                                                        
                                            <td style="padding: 10px 0 15px 0;">
                                                <img src="http://www.lbr.ru/images/kp/90-cultiplow/cultiplow6.jpg" width="380" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td style="padding: 10px 0 15px 0;">
                                                <img src="http://www.lbr.ru/images/kp/90-cultiplow/cultiplow7.jpg" width="380" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                                </table>                               
                                            </td>
                                        </tr> 
                                    </table>
                                </td></tr>  
                            <!-- Контент первого блока; -->
                            <tr valign="top">
                    <td colspan="2" style="padding: 0px 20px 0;">
                        <?php
                        if($data['show_footer']=='1' || !isset($data['show_footer'])):
                            Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
                        endif;
                        ?>
                    </td>
                </tr>
                        </table>
                        <!-- Внутренности блока; -->
                    </td>
                </tr>
</table>
<!-- Блок Второй; -->
</div>
</body>
</html>