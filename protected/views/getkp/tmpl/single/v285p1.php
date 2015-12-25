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
                                    <a href="" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        <img src="http://www.lbr.ru/images/kp/285-kl1_4a/1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                <td style="padding: 5px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="380" style="padding-right:10px;">
                                                 <img src="http://www.lbr.ru/images/kp/285-kl1_4a/2.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="380" valign="top" style="padding-top: 0px;">
                                                 <p style="margin: 0px; padding: 0px 0px 0px 10px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                     Копатель-валкоукладчик лука КЛ-1,4А лука,
                                                     возделываемого на ровных профилированных 
                                                     поверхностях с междурядьями 70, 45 или
                                                     28 см. Частично отделяет луковицы от почвы
                                                     и укладывает их в валок на прокатанную
                                                     поверхность убранного поля.
                                                </p>
                                                <p style="margin: 0px; padding: 40px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    КЛ-1,4А комплектуется съемной балкой лемехов
                                                    для уборки картофеля и других корнеплодов.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                               <img src="http://www.lbr.ru/images/kp/285-kl1_4a/3.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                             <tr>
                                <td style="padding:5px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td  style="padding:0px 80px 0px 80px;">
                                               <img src="http://www.lbr.ru/images/kp/285-kl1_4a/4.jpg" width="600" style="border: 0;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#6d6a68" align="center" style="border: 0; border-collapse: collapse; background: #6d6a68;">
                                        <tr>
                                            <td>
                                                <p style="margin: 5px 0px 5px 80px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; text-align:justify; text-transform: uppercase; color: white; ">
                                                    <b>1</b> – РАМА, <b>2</b> – БИТЕР, <b>3</b> – НАГРЕБНОЙ БИТЕР, <b>4</b> – ЗУБЧАТЫЕ БОКОВЫЕ ДИСКИ,<br>
                                                    <b>5</b> – РЕГУЛИРУЕМЫЕ ОПОРНЫЕ КОЛЕСА, <b>6</b> – ОСНОВНОЙ ЭЛЕВАТОР, <b>7</b> – КАСКАДНЫЙ ЭЛЕВАТОР,<br>
                                                    <b>8</b> – КАРДАННЫЕ ПЕРЕДАЧИ, <b>9</b> – КАТОК, <b>10</b> – РЕДУКТОР, <b>11</b> – СУЖАЮЩИЕ ЩИТКИ,<br>
                                                    <b>12</b> – ЛОЖЕОБРАЗОВАТЕЛЬ, <b>13</b> – НАВЕСКА, <b>14</b> – ЧИСТИКИ.
                                                </p>
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
                <tr valign="top">
                    <td  style="padding: 10px 20px 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                           <tr>
                               <td width="100%">
                                    <img src="http://www.lbr.ru/images/kp/285-kl1_4a/5.jpg" width="60" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                           </tr>
                       </table>
                    </td>
                </tr>
                <tr valign="top">
                    <td  style="padding: 10px 20px 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                           <tr>
                               <td width="60" style="vertical-align: top; padding:5px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/285-kl1_4a/marker.jpg" width="15" style="margin:0px 15px 0px 30px; border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="700">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black; line-height: 20px;">
                                        <b>ПРОЧНАЯ РАМА</b> – полностью сварная конструкция из стандартных и специальных гнутых
                                        профилей.
                                    </p>
                                </td>
                           </tr>
                           <tr>
                               <td width="60" style="vertical-align: top; padding:5px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/285-kl1_4a/marker.jpg" width="15" style="margin:0px 15px 0px 30px; border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="700">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black; line-height: 20px;">
                                        <b>ПОДКАПЫВАЮЩИЙ БИТЕР</b> состоит из квадратного вала и подшипниковых узлов,
                                        которые крепятся к раме копателя.
                                    </p>
                                </td>
                           </tr>
                            <tr>
                               <td width="60" style="vertical-align: top; padding:5px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/285-kl1_4a/marker.jpg" width="15" style="margin:0px 15px 0px 30px; border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="700">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black; line-height: 20px;">
                                        <b>НАГРЕБНОЙ БИТЕР</b> - это вал с резиновыми лопастями. Служит для подачи вороха на
                                        основной элеватор и разрушения подкапываемого пласта.
                                    </p>
                                </td>
                           </tr>
                           <tr>
                               <td width="60" style="vertical-align: top; padding:5px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/285-kl1_4a/marker.jpg" width="15" style="margin:0px 15px 0px 30px; border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="700">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black; line-height: 20px;">
                                        <b>ЗУБЧАТЫЕ БОКОВЫЕ ДИСКИ</b> отлично обрезают ботву и помогают предотвратить
                                        попадание остатков ботвы на элеватор.<br>
                                        С помощью <b>РЕГУЛИРУЕМЫХ ОПОРНЫХ КОЛЕС</b> можно изменять глубину подкапывания.
                                    </p>
                                </td>
                           </tr>
                           <tr>
                               <td width="60" style="vertical-align: top; padding:5px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/285-kl1_4a/marker.jpg" width="15" style="margin:0px 15px 0px 30px; border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="700">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black; line-height: 20px;">
                                        <b>ДВА ПОСЛЕДОВАТЕЛЬНО РАСПОЛОЖЕННЫХ ЭЛЕВАТОРА</b> – основной и каскадный
                                        обрезинены, что дает сохранять овощи неповрежденными. Так же оба элеватора
                                        снабжены пассивными встряхивателями (эллипсовидные звездочки).
                                    </p>
                                </td>
                           </tr>
                           <tr>
                               <td width="60" style="vertical-align: top; padding:5px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/285-kl1_4a/marker.jpg" width="15" style="margin:0px 15px 0px 30px; border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="700">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black; line-height: 20px;">
                                        <b>КАТОК</b> – гладкий стальной цилиндр, подпружиненный. В процессе работы уплотняет
                                        убранный участок поля.
                                    </p>
                                </td>
                           </tr>
                           <tr>
                               <td width="60" style="vertical-align: top; padding:5px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/285-kl1_4a/marker.jpg" width="15" style="margin:0px 15px 0px 30px; border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="700">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black; line-height: 20px;">
                                        <b>СУЖАЮЩИЕ ЩИТКИ</b> сужают поток и укладывают массу лука на прикатанную
                                        поверхность убранного участка.
                                    </p>
                                </td>
                           </tr>
                           <tr>
                               <td width="60" style="vertical-align: top; padding:5px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/285-kl1_4a/marker.jpg" width="15" style="margin:0px 15px 0px 30px; border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="700">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black; line-height: 20px;">
                                        <b>ЛОЖЕОБРАЗОВАТЕЛЬ</b> препятствует раскатыванию корнеклубнеплодов.
                                    </p>
                                </td>
                           </tr>
                           <tr>
                               <td width="60" style="vertical-align: top; padding:5px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/285-kl1_4a/marker.jpg" width="15" style="margin:0px 15px 0px 30px; border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="700">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height: 20px; ">
                                        <b>ПРИВОД</b> передает крутящий момент от ВОМ трактора на сепарирующие элеваторы и
                                        битера. Элементом навески выступает треугольный замок автосцепки.
                                    </p>
                                </td>
                           </tr>
                           
                       </table>
                    </td>
                </tr>
               
                <tr valign="top">
                <td  align="center" style="padding: 20px 20px 0;">
                        <table width="540" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td width="270" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Производительность, Га/час</td>
                                    <td width="270" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0,45-0,9</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Ширина захвата, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">135</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Агрегатируется с трактором, л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Длина/ширина/высота мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4200 x 2100 x 1200</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Масса, кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">950</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">Цена с НДС, руб.<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price1']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
               
                <tr valign="top">
                    <td style="padding: 5px 20px 20px 130px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                
            </table>
            <!-- Внутренности блока; -->
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
<!-- Блок Второй; -->
</div>
</body>
</html>



