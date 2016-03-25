<?php
if($data['show_header']=='1'  || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/print_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
 ?>
 <div class="table w-800">
<!-- Background grey -->

<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse;">
                <tr>
                    <td style="padding: 10px 20px;">
                        <img src="http://www.lbr.ru/images/kp/311-korm-econom/header.jpg" width="760" style="border: 0; float: left;">
                    </td>
                </tr>                                
            </table>
        </td>
    </tr>
    </table>                
<!-- Блок Первый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
               <tr><td style="padding: 0 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 3px solid #F58220;">
                            <tr>
                                <td style="padding-bottom: 3px; text-align: justify;">
                                    <!-- Заголовок -->
                                    <a href="voobrabotki-i-seva/zernovye-seyalki/" target="_blank" style="font-size: 30px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #F58220;">
                                        КОСИЛКИ</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>


                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                        <tr>
                            <td style="padding-bottom: 3px;">
                             <!-- Заголовок -->
                             <span target="_blank" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Косилка роторная КРН-2,1</span>
                            </td>
                            <td style="padding-bottom: 3px;">
                                <img src="http://www.lbr.ru/images/makers/bezhselmash.jpg" width="30" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                        </tr>
                    </table>
                </td></tr> 
                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="320" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;">
                                            <img src="http://www.lbr.ru/images/kp/311-korm-econom/1.jpg" width="320" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                    <tr>
                                        <td width="320px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info1']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>                                                                                                                           
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="428" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">                                                        
                                        <td style="padding: 0 0 0 10px;">                                                
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Применяется для скашивания
                                                высокоурожайных и полеглых трав на
                                                повышенных, поступательных скоростях и
                                                укладывания скошенной массы в
                                                однородный валок.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 10px 0 0 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Машина применяется во всех
                                                природно-климатических зонах.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 25px 0 0 10px;">                                                
                                            <table width="418" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Производительность</td>
                                                        <td width="50%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">Не менее 2,85 га/ч</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, м</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,1</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемый класс трактора</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9-14 кН</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                                                        

                                </table>                               
                            </td>
                    </tr>
                </table>
              </td></tr> 
                       
               <tr><td style="padding: 20px 20px 0px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                        <tr>
                            <td style="padding-bottom: 3px;">
                             <!-- Заголовок -->
                             <span target="_blank" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Косилка ротационная навесная КРН-2,4</span>
                            </td>
                            <td style="padding-bottom: 3px;">
                                <img src="http://www.lbr.ru/images/makers/bezhselmash.jpg" width="30" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                        </tr>
                    </table>
                </td></tr> 
                <tr><td colspan="2" style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;" align="center">
                                            <img src="http://www.lbr.ru/images/kp/311-korm-econom/2.jpg" width="180" style="border: 0;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info2'] && !empty($data['product_info2'])): ?>
                                    <tr>
                                        <td width="370px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info2']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>                                                                                                                           
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">                                                        
                                        <td style="padding: 0 0 0 10px;">                                                
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Применяется для скашивания
                                                высокоурожайных и полеглых трав на
                                                повышенных, поступательных скоростях и
                                                укладывания скошенной массы в
                                                однородный валок.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 10px 0 0 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Машина применяется во всех
                                                природно-климатических зонах.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 25px 0 0 10px;">                                                
                                            <table width="368" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Производительность</td>
                                                        <td width="50%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">Не менее 4,3 га/ч</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, м</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,4</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемый класс трактора</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9-14 кН</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                                                        

                                </table>                               
                            </td>
                    </tr>
                </table>
              </td></tr>           
           
            
           
            <tr valign="top">
            <td style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
</table>
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
                <!-- Заголовок со ссылкой и логотипом: -->
                
                 <tr><td style="padding: 20px 20px 0px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                        <tr>
                            <td style="padding-bottom: 3px;">
                             <!-- Заголовок -->
                             <span style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Косилка дисковая КДН-210</span>
                            </td>
                            <td style="padding-bottom: 3px;">
                                <img src="http://www.lbr.ru/images/makers/agromash-logo-big.jpg" width="100" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                        </tr>
                    </table>
                </td></tr> 
                <tr><td colspan="2" style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;" align="center">
                                            <img src="http://www.lbr.ru/images/kp/311-korm-econom/3.jpg" width="370" style="border: 0;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info3'] && !empty($data['product_info3'])): ?>
                                    <tr>
                                        <td width="370" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info3']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>  
                                    <tr>
                                        <td width="370" style="padding:5px 0px 0px 0px;">
                                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                <tr valign="top"> 
                                                    <td width="100">
                                                       <img src="http://www.lbr.ru/images/kp/311-korm-econom/tractor.jpg" width="100" style="border: 0;" alt="Картинки не отображаются"> 
                                                    </td>
                                                    <td width="270" style="padding:0px 0px 0px 10px;">
                                                        <p style="margin: 0; padding: 0; font-weight:bold; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: #4a443d; text-align: left; ">
                                                            АГРЕГАТИРУЕТСЯ:<br>
                                                            Косилка агрегатируется с тракторами
                                                            класса 0,9 и 1,4 т.с., оборудованными
                                                            трехточечной задней навесной
                                                            системой.
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        
                                        </td>
                                    </tr>
                                        
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">                                                        
                                        <td style="padding: 0 0 0 10px;">                                                
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Косилка предназначена для скашивания
                                                естественных и сеяных трав, в том числе
                                                высокоурожайных и полеглых с укладкой
                                                скошенной массы в прокос.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 10px 0 0 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Косилка применяется во всех зонах, кроме
                                                горных, на выровненных лугах (сенокосах)
                                                не засоренных камнями.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 25px 0 0 10px;">                                                
                                            <table width="368" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Производительность</td>
                                                        <td width="50%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">0,95-2,85</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, м</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,1</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемый класс трактора</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9-14 кН</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                                                        

                                </table>                               
                            </td>
                    </tr>
                </table>
              </td></tr>           
           
            
            
            <tr><td style="padding: 20px 20px 10px 20px;">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 3px solid #F58220;">
                    <tr>
                        <td style="padding-bottom: 3px; text-align: justify;">
                            <!-- Заголовок -->
                            <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/kormozagotovka/valkoobrazovateli/" target="_blank" style="font-size: 30px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #F58220;">
                                ГРАБЛИ И ВАЛКООБРАЗОВАТЕЛИ
                            </a>
                        </td>
                    </tr>
                 </table>
            </td></tr>
           
             <tr><td style="padding: 0px 20px 0px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                        <tr>
                            <td style="padding-bottom: 3px;">
                             <!-- Заголовок -->
                             <span style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Грабли роторные ГВР-6Р</span>
                            </td>
                            <td style="padding-bottom: 3px;">
                                <img src="http://www.lbr.ru/images/makers/bezhselmash.jpg" width="30" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                        </tr>
                    </table>
                </td></tr> 
                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;" align="center">
                                            <img src="http://www.lbr.ru/images/kp/311-korm-econom/4.jpg" width="370" style="border: 0;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info4'] && !empty($data['product_info4'])): ?>
                                    <tr>
                                        <td width="370" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info4']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>  
                                    <tr>
                                        <td width="370" style="padding:5px 0px 0px 0px;">
                                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                <tr valign="top"> 
                                                    <td width="100">
                                                       <img src="http://www.lbr.ru/images/kp/311-korm-econom/tractor.jpg" width="100" style="border: 0;" alt="Картинки не отображаются"> 
                                                    </td>
                                                    <td width="270" style="padding:0px 0px 0px 10px;">
                                                        <p style="margin: 0; padding: 0; font-weight:bold; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: #4a443d; text-align: left; ">
                                                            АГРЕГАТИРУЮТСЯ:<br>
                                                            с тракторами класса 9-14кН.
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        
                                        </td>
                                    </tr>
                                        
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">                                                        
                                        <td style="padding: 0 0 0 10px;">                                                
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Предназначаются для сгребания в валки
                                                травы из прокосов и ворошения скошенной
                                                массы. Оборачивают и разбрасывают валки.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 20px 0 0 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-weight:bold; font-size: 14px; color: #4a443d; text-align: center; ">
                                                ВОРОШЕНИЕ ПРОКОСОВ, ОБОРАЧИВАНИЕ
                                                ИЛИ РАЗБРАСЫВАНИЕ ВАЛКОВ ПРИ
                                                ПРОМОКАНИИ ПОЗВОЛЯЕТ УСКОРИТЬ
                                                ПРОЦЕСС СУШКИ ТРАВЫ И ПОЛУЧИТЬ
                                                ВЫСОКОКАЧЕСТВЕННОЕ СЕНО.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 25px 0 0 10px;">                                                
                                            <table width="368" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Производительность</td>
                                                        <td width="50%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">7 га/ч</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, м</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6000 мм</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемый класс трактора</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9-14 кН</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price4']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                                                        

                                </table>                               
                            </td>
                    </tr>
                </table>
              </td></tr>           
             
            <tr><td style="padding: 10px 20px 0px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                        <tr>
                            <td style="padding-bottom: 3px;">
                             <!-- Заголовок -->
                             <span style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Грабли-ворошилки валкообразователи ГВВ-6А</span>
                            </td>
                            <td style="padding-bottom: 3px;">
                                <img src="http://www.lbr.ru/images/makers/bezhselmash.jpg" width="30" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                        </tr>
                    </table>
                </td></tr> 
                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;" align="center">
                                            <img src="http://www.lbr.ru/images/kp/311-korm-econom/5.jpg" width="370" style="border: 0;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info5'] && !empty($data['product_info5'])): ?>
                                    <tr>
                                        <td width="370" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info5']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>  
                                    <tr>
                                        <td width="370" style="padding:5px 0px 0px 0px;">
                                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                <tr valign="top"> 
                                                    <td width="100">
                                                       <img src="http://www.lbr.ru/images/kp/311-korm-econom/tractor.jpg" width="100" style="border: 0;" alt="Картинки не отображаются"> 
                                                    </td>
                                                    <td width="270" style="padding:0px 0px 0px 10px;">
                                                        <p style="margin: 0; padding: 0; font-weight:bold; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: #4a443d; text-align: left; ">
                                                            АГРЕГАТИРУЮТСЯ:<br>
                                                            с колесными тракторами класса 6-14 кН
                                                            (МТЗ-80.1, МТЗ-82, Беларус-923,
                                                            ЮМЗ-6АКМ и др.)
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        
                                        </td>
                                    </tr>
                                        
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">                                                        
                                        <td style="padding: 0 0 0 10px;">                                                
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Грабли предназначены для сгребания
                                                провяленной травы из прокосов в валки,
                                                ворошения ее в прокосах, оборачивания и
                                                сдваивания валков.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 5px 0 0 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Используется для уборки сеянных трав, а
                                                также трав естественных сенокосов
                                                урожайность свыше 10 ц/га на равнинах при
                                                влажности массы от 25 до 80 %.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 25px 0 0 10px;">                                                
                                            <table width="368" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Ширина захвата</td>
                                                        <td width="50%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">не более 6,0 м</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Наибольшая производительность за час</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7,2 га/ч</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price5']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                                                        

                                </table>                               
                            </td>
                    </tr>
                </table>
              </td></tr>     
           <tr valign="top">
            <td style="padding: 5px 20px 0px 20px;">
                <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                    * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                </p> 
            </td>
           </tr>
<!-- Заголовок со ссылкой и логотипом; -->
<!-- Контент первого блока: -->                


</table>
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
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding: 20px 20px 0px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                        <tr>
                            <td style="padding-bottom: 3px;">
                             <!-- Заголовок -->
                             <span style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Грабли-ворошилки ГВР-630</span>
                            </td>
                            <td style="padding-bottom: 3px;">
                                <img src="http://www.lbr.ru/images/makers/agromash-logo-big.jpg" width="100" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                        </tr>
                    </table>
                </td></tr> 
                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;" align="center">
                                            <img src="http://www.lbr.ru/images/kp/311-korm-econom/6.jpg" width="370" style="border: 0;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info6'] && !empty($data['product_info6'])): ?>
                                    <tr>
                                        <td width="370" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info6']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>  
                                    <tr>
                                        <td width="370" style="padding:5px 0px 0px 0px;">
                                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                <tr valign="top"> 
                                                    <td width="370" style="padding:0px 0px 0px 0px;">
                                                        <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Количество роторов</td>
                                                                    <td width="50%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, м</td>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Производительность, г/час</td>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемый класс трактора</td>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price6']; ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        
                                        </td>
                                    </tr>
                                        
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">                                                        
                                        <td style="padding: 0 0 0 10px;">                                                
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Грабли-ворошилки ГВР-630 предназначены
                                                для сгребания травы из прокосов в валки,
                                                ворошения травы в прокосах, оборачивания,
                                                разбрасывания валков.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 5px 0 0 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Основными достоинствами конструкции
                                                граблей ГВР-630 являются: универсальность
                                                машины, возможность выполнять несколько
                                                операций - сгребание, ворошение,
                                                оборачивание валков, их разбрасывание, что
                                                создает условия для большей
                                                производительности уборочных машин на
                                                последующих операциях.
                                            </p>
                                        </td>
                                    </tr>
                                                                        

                                </table>                               
                            </td>
                    </tr>
                </table>
              </td></tr>     
            <tr><td style="padding: 20px 20px 10px 20px;">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 3px solid #F58220;">
                    <tr>
                        <td style="padding-bottom: 3px; text-align: justify;">
                            <!-- Заголовок -->
                            <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/kormozagotovka/valkoobrazovateli/" target="_blank" style="font-size: 30px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #F58220;">
                                ПРЕСС-ПОДБОРЩИКИ
                            </a>
                        </td>
                    </tr>
                 </table>
            </td></tr>
            <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                        <tr>
                            <td style="padding-bottom: 3px;">
                             <!-- Заголовок -->
                             <span target="_blank" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Пресс-подборщик рулонный ПР-145С</span>
                            </td>
                            <td style="padding-bottom: 3px;">
                                <img src="http://www.lbr.ru/images/makers/bezhselmash.jpg" width="30" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                        </tr>
                    </table>
                </td></tr> 
                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;">
                                            <img src="http://www.lbr.ru/images/kp/311-korm-econom/7.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info7'] && !empty($data['product_info7'])): ?>
                                    <tr>
                                        <td width="370px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info7']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>                                                                                                                           
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">                                                        
                                        <td style="padding: 0 0 0 10px;">                                                
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Пресс-подборщик рулонный ПР-145С
                                                предназначен для подбора валков сена
                                                естественных и сеяных трав или соломы.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 10px 0 0 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Пресс-подборщик прессует валки в рулоны и
                                                одновременно автоматически обматывает
                                                шпагатом.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 10px 0 0 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Расположенное сбоку пресса устройство
                                                сницы значительно улучшает обзорность
                                                работы подбирающего узла и позволяет
                                                избегать наезда на валок сена или соломы.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 15px 0 0 10px;">                                                
                                            <table width="368" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Производительность: <br>- Сено
                                                        <br>- Солома</td>
                                                        <td width="50%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;"><br>5,5 тн/ч
                                                        <br>3,2 тн/ч</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Плотность рулона</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120-200 кг/м<sup>3</sup></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса рулона до</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">300 кг</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр рулона</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1450 мм</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price7']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                                                        

                                </table>                               
                            </td>
                    </tr>
                </table>
              </td></tr> 
                       
                
            <tr valign="top">
                <td colspan="2" style="padding: 5px 20px 0px 20px;">
                    <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                        * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                    </p> 
                </td>
            </tr>
        </table>
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
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                        <tr>
                            <td style="padding-bottom: 3px;">
                             <!-- Заголовок -->
                             <a href="http://www.lbr.ru/tehnika/kormozagotovka/press-podborshchiki/365-press-podborshchiki-rulonnye-bezremennye-prf/" target="_blank" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Пресс-подборщик рулонный ПРФ-145</a>
                            </td>
                            <td style="padding-bottom: 3px;">
                                <img src="http://www.lbr.ru/images/makers/agromash-logo-big.jpg" width="100" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                        </tr>
                    </table>
                </td></tr> 
                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;">
                                            <img src="http://www.lbr.ru/images/kp/311-korm-econom/8.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info8'] && !empty($data['product_info8'])): ?>
                                    <tr>
                                        <td width="370px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info8']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>                                                                                                                           
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">                                                        
                                        <td style="padding: 0 0 0 10px;">                                                
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Пресс-подборщик рулонный безременной с
                                                постоянной камерой прессования
                                                предназначен для подбора и прессования в
                                                рулоны (валки) сена естественных и сеянных
                                                трав, подвяленной травы, соломы с
                                                последующей обмоткой рулона шпагатом.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 5px 0 0 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Подача шпагата осуществляется с помощью
                                                электропривода.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 5px 0 0 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Плотность прессования позволяет
                                                производить упаковку рулонов в полимерную
                                                пленку.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 5px 0 0 10px;">                                                
                                            <table width="368" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Производительность </td>
                                                        <td width="50%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">4,0 – 5,5</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса рулона на сене, кг</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">220-375</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, м</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,45</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемый класс трактора</td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,4</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price8']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                                                        

                                </table>                               
                            </td>
                    </tr>
                </table>
              </td></tr> 
                       
             <tr><td style="padding: 20px 20px 0px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                        <tr>
                            <td style="padding-bottom: 3px;">
                             <!-- Заголовок -->
                             <span style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Пресс-подборщик тюковой ПТ-165М</span>
                            </td>
                            <td style="padding-bottom: 3px;">
                                <img src="http://www.lbr.ru/images/makers/agromash-logo-big.jpg" width="100" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                        </tr>
                    </table>
                </td></tr> 
                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;" align="center">
                                            <img src="http://www.lbr.ru/images/kp/311-korm-econom/9.jpg" width="370" style="border: 0;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info9'] && !empty($data['product_info9'])): ?>
                                    <tr>
                                        <td width="370" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info9']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>  
                                    <tr>
                                        <td width="370" style="padding:5px 0px 0px 0px;">
                                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                <tr valign="top"> 
                                                    <td width="370" style="padding:0px 0px 0px 0px;">
                                                        <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="55%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Производительность, т/ч</td>
                                                                    <td width="45%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">5-8</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Параметры тюка, (Д*Ш*В), м</td>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0,46х0,36х1,3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемый класс трактора</td>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price9']; ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        
                                        </td>
                                    </tr>
                                        
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">                                                        
                                        <td style="padding: 0 0 0 10px;">                                                
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Применяется для подбора валков сена,
                                                соломы, прессования их в прямоугольные
                                                тюки.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 5px 0 0 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • В отличие от рулонных пресс-подборщиков
                                                тюковая машина позволяет регулировать
                                                плотность тюка, к тому же выходные
                                                габариты и масса получаемого тюка намного
                                                меньше. Это позволяет разгружать и
                                                раздавать тюки не только с помощью
                                                техники, но и в ручную, это удобно и при
                                                последующем их скармливании.
                                                ПТ-165М предназначен для использования в
                                                небольших и фермерских хозяйствах.
                                            </p>
                                        </td>
                                    </tr>
                                                                        

                                </table>                               
                            </td>
                    </tr>
                </table>
              </td></tr>       
               

            <tr valign="top">
                <td style="padding: 5px 20px 0px 20px;">
                    <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                        * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                    </p> 
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
<!-- Блок Пятый; -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
               
            <tr><td style="padding: 0 20px 10px 20px;">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 3px solid #F58220;">
                    <tr>
                        <td style="padding-bottom: 3px; text-align: justify;">
                            <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/kormozagotovka/pritsepy-dlya-perevozki-tyukov-i-rulonov/" target="_blank" style="font-size: 26px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #F58220;">
                                ПРИЦЕПЫ ДЛЯ ПЕРЕВОЗКИ РУЛОНОВ И ТЮКОВ</a>
                        </td>
                    </tr>
                </table>
            </td></tr>
            <tr><td style="padding: 20px 20px 0px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                        <tr>
                            <td style="padding-bottom: 3px;">
                             <!-- Заголовок -->
                             <a href="http://www.lbr.ru/tehnika/kormozagotovka/pritsepy-dlya-perevozki-tyukov-i-rulonov/738-telezhki-samozagruzochnye-tp-10/" target="_blank" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Транспортировщик рулонов ТП-10</a>
                            </td>
                            <td style="padding-bottom: 3px;">
                                <img src="http://www.lbr.ru/images/makers/agromash-logo-big.jpg" width="100" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                        </tr>
                    </table>
                </td></tr> 
                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;" align="center">
                                            <img src="http://www.lbr.ru/images/kp/311-korm-econom/10.jpg" width="370" style="border: 0;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info10'] && !empty($data['product_info10'])): ?>
                                    <tr>
                                        <td width="370" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info10']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>  
                                    <tr>
                                        <td width="370" style="padding:5px 0px 0px 0px;">
                                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                <tr valign="top"> 
                                                    <td width="370" style="padding:0px 0px 0px 0px;">
                                                        <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="45%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Длина, м</td>
                                                                    <td width="55%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">9,15</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Грузоподъемность, т</td>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Емкость (ширина рулона)</td>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">17 шт. (1,2 м)/ 10 шт. (1,5 м)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price10']; ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        
                                        </td>
                                    </tr>
                                        
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">                                                        
                                        <td style="padding: 0 0 0 10px;">                                                
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Тележка ТП-10 используется для подъема,
                                                погрузки, транспортировки и разгрузки
                                                рулонов сена, соломы льна,
                                                сформированных пресс-подборщиком, а
                                                также для перевозки зеленой массы.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 5px 0 0 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • Легкая, прочная рама обеспечивает
                                                необходимую жесткость и достаточный
                                                объем.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 5px 0 0 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: left; ">
                                                • На тележку установлены транспортеры, с
                                                помощью которых при загрузке рулоны сена
                                                и соломы можно двигать вдоль бортов
                                                тележки. Благодаря транспортерам время
                                                выгрузки всего 3 минуты.
                                            </p>
                                        </td>
                                    </tr>                                    

                                </table>                               
                            </td>
                    </tr>
                </table>
              </td></tr>       
               

            
           
    
            <tr valign="top">
            <td  style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
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

</div>
</body>
</html>
