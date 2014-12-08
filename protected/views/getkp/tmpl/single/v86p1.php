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
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/kultivatory-sternevye/339-kultivatory-cross/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Культиватор стерневой Cross
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right">
                                    <img src="http://www.lbr.ru/images/makers/unia-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
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
                                    <img src="http://www.lbr.ru/images/kp/86-cross/cross.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                            <tr>
                                <td>
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="40" style="padding: 10px 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 10px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                                    Культиваторы Cross – универсальные агрегаты, предназначенные для обработки земли без вспашки, 
                                                    применяются как в технологии упрощенной обработки почвы, так и для послеуборочного лущения благодаря специальным зубьям.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>                        
                        </table>
                    </td></tr>
                    <tr><td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Тройной подход к подготовке почвы:
                                                </p>
                                            </td>
                                        </tr>
                                       
                                        <tr valign="top">                                            
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <b>I. ЗУБЬЯ</b>: разрезание, крошение почвы без влияния на ее структуру;
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                            
                                            <td style="padding: 5px 10px 0 0;">
                                                 <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <b>II. ДИСКИ</b>: рыхление и перемешивание растительных остатков, соломы с почвой;
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                            
                                            <td style="padding: 5px 10px 0 0;">
                                                 <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <b>III. КАТОК</b>: выравнивание и уплотнение почвы, финальная подготовка к посеву.
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                            
                                            <td style="padding: 5px 10px 0 0;">
                                                  <img src="http://www.lbr.ru/images/kp/86-cross/cross1.jpg" width="370" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>                                  
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Надежные и мощные рабочие зубья культиватора.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                            
                                            <td style="padding: 5px 0 0 0; vertical-align: middle; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/86-cross/cross2.jpg" width="150" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 5px 0 0 15px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black">3 ряда тяжелых зубьев CX с подрезами с пружинной защитой:</span>
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   • работа на глубине до 25 см;
                                                </p>
                                                 <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   • отлично зарекомендовали себя в послеуборочном лущении благодаря быстрой замене подрезателей по полному подрезу верхнего слоя почвы. 
                                                </p>
                                            </td>
                                            </tr>
                                            </table>
                                            </td>
                                        </tr>                                                          
                                    </table>
                                </td>
                                <td width="380" style="padding: 0 0 0 10px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Эффективное смешивание почвы с растительными остатками и выравнивание перед проходом вала</span> – ряды дисков (на выбор) из высокопрочной закаленной стали, работа на глубине до 15 см.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 10px 0 10px;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                            
                                            <td style="padding: 5px 0 0 0; vertical-align: middle; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/86-cross/cross3.jpg" width="180" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 5px 10px 0 10px; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black">Заделывающие бороны</span> 
                                                   
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: left; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black">Cекция дисков выравнивает разрыхленную почву.</span> 
                                                   
                                                </p>
                                                
                                            </td>
                                            </tr>
                                            </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="185px" style="padding: 5px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: center; color: black;">
                                                    <span style="font-weight: bold; color: black; text-align: center;">или</span>
                                                </p>
                                            </td>
                                            <td width="185px" style="padding: 5px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: center; color: black;">
                                                    <span style="font-weight: bold; color: black; text-align: center;">&nbsp;</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 10px 0 10px;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                            
                                            <td style="padding: 5px 0 0 0; vertical-align: middle; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/86-cross/cross4.jpg" width="180" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 5px 10px 0 10px; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black">Выравнивающие бороны</span> 
                                                   
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: left; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black">Два ряда агрессивных дисков измельчает и перемешивает пожнивные растительные остатки с почвой.</span> 
                                                   
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: left; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black">(доп.опция для агрегатов с цельной рамой)</span> 
                                                   
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
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td colspan="2" style="padding: 15px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Подготовка почвы под посев – подбор подходящего под ваши условия уплотняющего катка:</span>
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 10px 0 5px 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <b>Трубчатый</b> диам. 600 мм (все модели)
                                                </li>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px; text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/86-cross/cross5.jpg" width="250" style="border: 0;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 10px 0 5px 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <b>Резиновый</b> диам. 500 мм (все модели) или диам. 700 мм (модели 4H / 5H / 6H)
                                                </li>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px; text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/86-cross/cross6.jpg" width="250" style="border: 0;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 10px 0 5px 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <b>Спиральный</b> диам. 600 мм (все модели)
                                                </li>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px; text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/86-cross/cross7.jpg" width="250" style="border: 0;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 10px 0 5px 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <b>Пружинный</b> диам. 600 мм (модели 3 / 4 / 4H / 6H)
                                                </li>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px; text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/86-cross/cross8.jpg" width="250" style="border: 0;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 10px 0 5px 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <b>Паккер</b> диам. 500 мм (все модели) или диам. 700 мм (модели 4H / 5H / 6H)
                                                </li>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px; text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/86-cross/cross9.jpg" width="250" style="border: 0;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>                                   
                       </table>
                                </td>
                                <td width="380" style="padding-left: 10px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Гарантия работы без забивания землей и растительными остатками рабочих органов:</span> конструкция с большим просветом под рамой (85 см) и оптимальным расстоянием между дисками и зубьями.
                                                </p>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td colspan="2" style="padding: 10px 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Удобная и простая регулировка рабочей глубины агрегата</span> путем перестановки шплинтов на нужный уровень – особенно рекомендуется на почвах со сменной структурой (мозаиковые почвы).
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            
                                            <td style="padding: 15px 0 0 0; vertical-align: middle; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/86-cross/cross10.jpg" width="370" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                         <tr>
                                            <td colspan="2" style="padding: 20px 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Уверенность в правильном агрегатировании и требуемом уровне нагрузки на ваш трактор:</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 5px 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <b>жесткая и прочная рама культиватора</b> сделана из шведской стали и обеспечивает <b>идеальное расположение массы и распределение нагрузки</b> по всей рабочей ширине агрегата;
                                                </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 5px 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <b>полунавесная версия для агрегатов с рабочей шириной от 4 метров</b> – облегчает нагрузку на систему навески используемого трактора.
                                                </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 30px 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    Наличие опорных колес –<span style="font-weight: bold; color: #f58220;">обеспечение в работе неизменной заданной глубины обработки по всей ширине захвата и стабильности машины.</span>
                                                </p>
                                            </td>
                                        </tr>
                                       
                                    </table>                                    
                                </td>
                            </tr>
                        </table>
                    </td></tr> 
                    <tr valign="top">
                                <td style="padding: 0 20px 0 0;">   
                                <img src="http://www.lbr.ru/images/kp/86-cross/cross11.jpg" width="760" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            
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
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">2 функции в одном устройстве – версия drive:</span>
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">УПЛОТНЕНИЕ ПОЧВЫ+ТРАНСПОРТИРОВКА.</span>
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 10px 0 5px; text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/86-cross/cross12.jpg" width="370" style="border: 0;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 10px 0 5px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    В версии <b>drive</b> агрегаты комплектуются резиновотранспортным катком, который:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px 15px">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    используется для уплотнения и выравнивания почвы;
                                                </li>
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    уменьшает нагрузку на трактор;
                                                </li>
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    выполняет транспортную функцию.
                                                </li>
                                            </td>
                                        </tr>                        
                       </table>
                                </td>
                                <td width="380" style="padding-left: 10px;">
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Решение проблем с транспортировкой:</span>
                                                </p>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td colspan="2" style="padding: 0 0 5px 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    Версии культиватора с рабочей шириной от 4 метров <b>снабжены гидравлически складываемой рамой (версия H)</b>, которая в сложенном виде не превышает 3 метров, благодаря чему агрегат просто транспортируется по дорогам общественного пользования.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            
                                            <td style="padding: 0; vertical-align: middle; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/86-cross/cross13.jpg" width="370" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>                                    
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                    <tr valign="top">
                        <td style="padding: 5px 0 0 0;">   
                              <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                <tbody>
                                    <tr>
                                        <td width="40%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                        <td width="12%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">3</td>
                                        <td width="12%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">4</td>
                                        <td width="12%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">4H</td>
                                        <td width="12%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">5H</td>
                                        <td width="12%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">6H</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина захвата, м</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,0</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4,0</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4,0</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,0</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,0</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1990</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2540</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4300</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5200</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5800</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество зубьев, шт.</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">13</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">13</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">17</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">19</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">150-180</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">170-200</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">180-240</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">240-280</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">280-320</td>
                                    </tr>                                    
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:10px; font-weight: bold;">*</span></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price4']; ?></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price5']; ?></td>
                                    </tr>
                                </tbody>
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
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Блок Третий; -->
</div>
</body>
</html>