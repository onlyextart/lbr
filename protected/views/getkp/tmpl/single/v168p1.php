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
                
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/header.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <?php if($data['product_info1'] && !empty($data['product_info1'])): ?>
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
            
                    <tr><td style="padding: 20px 0px 0px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380" style="text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-1.jpg" width="360" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                                <td width="380" style="text-align: center; padding: 0px 0px 0px 20px">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-2.jpg" width="360" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>  
                            <tr valign="top">
                                <td  colspan="2" width="760" style="padding: 20px 0 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-3.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
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
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="760" style="text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-4.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td width="760" style="padding: 20px 0 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-5.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td width="760" style="padding: 20px 0 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-6.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                        </table>
                    </td></tr>
                                           
                    
                    
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>

</table>
<!-- Блок Второй; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Третий: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="760" style="text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-7.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td width="760" style="padding: 5px 0 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-8.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td width="760" style="padding: 5px 0 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-9.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                            
                        </table>
                    </td></tr>
                                           
                    
                    
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
<!-- Блок Третий; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Четвертый: -->

<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                            <tr valign="top">
                                <td width="760" colspan="2" style="padding: 10px 0px 0px 0px; text-align:left;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-10.jpg" width="300" style="border: 0; float:left;" alt="Изображения не отображаются">
                                </td>
                            </tr>  
                            <tr valign="top">
                                <td width="210" style="padding: 0px 0 0 20px; text-align: left;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-11.jpg" width="190" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                                <td width="550" style="padding: 0px 0px 0px 20px; text-align: left;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">                                                   
                                        Компания Hydramet - европейский производитель сельскохозяйственных машин,
                                        реализующих свою продукцию на внутреннем рынке и на внешних рынках
                                        большинства европейских стран. Философией компании является постоянное
                                        развитие, позволяющие расширять предложения и непрерывно повышать качество и
                                        оптимизацию продуктов. Это возможно благодаря работе команды опытных
                                        инженеров в отделе дизайна, использованию современного программного
                                        обеспечения. Производственная база состоит из 4 цехов, на которых ежедневно
                                        работают около 150 сотрудников.
                                    </p>
                                </td>
                            </tr>
                                                       
                        </table>
                    </td></tr>
            
                    <tr><td style="padding: 20px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                            <td width="450" style="padding: 0px 0px 0px 0px; text-align: left;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-12.jpg" width="300" style="border: 0; float:left;" alt="Изображения не отображаются">
                                </td>
                                <td width="310" rowspan="2" style="padding: 0px 0px 0px 20px; text-align:right;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-13.jpg" width="290" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>  
                            <tr valign="top">
                                <td width="450" style="padding: 0px 0 0 20px; text-align: left;">
                                   <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">                                                   
                                       Всегда в наличии на филиальных складах комплекты
                                       запасных частей для ремонта и проведения ТО.
                                       Постоянно пополняющийся склад запасных частей на
                                       территории логистического центра в г.Смоленск
                                       позволяет доставлять необходимые запчасти для
                                       погрузчика в кратчайшие сроки.
                                    </p>
                                </td>
                               
                            </tr>
                                                       
                        </table>
                    </td></tr>
            
                    <tr><td style="padding: 20px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                            <td width="450" style="padding: 0px 0px 0px 0px; text-align: left;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-14.jpg" width="300" style="border: 0; float:left;" alt="Изображения не отображаются">
                                </td>
                                <td width="310" rowspan="2" style="padding: 0px 0px 0px 20px; text-align:right;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-15.jpg" width="290" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>  
                            <tr valign="top">
                                <td width="450" style="padding: 0px 0 0 20px; text-align: left;">
                                   <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">                                                   
                                       Инженеры сервисного центра постоянно повышают
                                       уровень своей квалификации на заводе-производителе. 
                                       Это гарантирует качественный ремонт техники, а
                                       также проведение очередного ТО.
                                    </p>
                                </td>
                               
                            </tr>
                                                       
                        </table>
                    </td></tr>
            
                    <tr><td style="padding: 20px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                            <td width="420" style="padding: 0px 0px 0px 0px; text-align: left;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-16.jpg" width="300" style="border: 0; float:left;" alt="Изображения не отображаются">
                                </td>
                                <td width="340" rowspan="2" style="padding: 0px 0px 0px 20px; text-align:right;">
                                    <img src="http://www.lbr.ru/images/kp/168-tur/mail-17.jpg" width="290" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>  
                            <tr valign="top">
                                <td width="420" style="padding: 0px 0 0 20px; text-align: left;">
                                   <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">                                                   
                                        Компания ЛБР уже более 10 лет представляет фронтальные погрузчики Hydramet на рынке России. 
                                        За это время уже более 3500 довольных клиентов! Объем продаж
                                        составляет до 500 шт. погрузчиков в год.
                                    </p>
                                </td>
                               
                            </tr>
                                                       
                        </table>
                    </td></tr>
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
<!-- Блок Четвертый; -->

</div>
</body>
</html>
