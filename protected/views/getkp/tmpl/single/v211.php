<?php
    $email=str_replace(";","_",$data['email']);
    $email=str_replace(" ","",$email);

?>

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
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <a href="http://www.lbr.ru/?utm_source=EVP7&utm_medium=email&utm_term=glavnaya&utm_content=<?php echo $email;?>&utm_campaign=glavnaya" target="_blank">
                                    <img src="http://www.lbr.ru/images/kp/211-evp/header.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr><td style="padding:20px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-bottom: 13px;" width="250">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/344-seyalki-tochnogo-vyseva-pd-8070/?utm_source=EVP7&utm_medium=email&utm_term=Sejalka_PD-8070&utm_content=<?php echo $email;?>&utm_campaign=Mehanicheskaja_sejalka_tochnogo_vyseva_PD-8070" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #808080;">
                                       <p style="margin:0; color: #808080; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold;text-align: left; font-weight:800">
                                            МЕХАНИЧЕСКАЯ СЕЯЛКА<br>
                                            ТОЧНОГО ВЫСЕВА | PD-8070
                                       </p>
                                    </a>
                                </td>
                                <td rowspan="4" style="padding-bottom: 3px; " width="510">
                                    <img src="http://www.lbr.ru/images/kp/211-evp/1.jpg" width="460" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr>
                               <td width="250" valign="top" style="padding-top: 0px; text-align: left; ">
                                   <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                       <tr>
                                           <td style="border-left:1px solid #808080; padding-left: 10px; ">
                                                <p style="margin:0; color: #808080; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: left; ">
                                                    ПОСЕВ ПО NO-TILL ТЕХНОЛОГИИ<br>
                                                    CОЧЕТАНИЕ ЭФФЕКТИВНОСТИ,<br>
                                                    ФУНКЦИОНАЛЬНОСТИ<br>
                                                    И ПРОСТОТЫ В ЭКСПЛУАТАЦИИ
                                            </p>
                                          </td>
                                    </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td width="250" style="padding-top:10px;" valign="top">
                                    <img src="http://www.lbr.ru/images/kp/211-evp/1-price.jpg" width="150" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>   
                            </tr>
                            <tr>
                                <td width="250" valign="bottom">
                                    <p style="margin:0; color: #808080; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; ">
                                        Посев кукурузы, подсолнечника, сои, сорго, хлопка
                                        + внесение гранулированных удобрений            
                                    </p>
                                </td>   
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding: 0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                
                                            <td style="padding: 0px 0px 0px 0px;" colspan="2">
                                                <p style="margin:0; color: #808080; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; ">
                                                    Сеялка укомплектована турбо-дисками. Турбо-диски подготавливают (приподымают) почву в зоне борозды.<br>
                                                    • Посев на сухих, плотных почвах.<br>
                                                    • Контроль в течение всего процесса посева. С помощью Монитора Dickey-john.
                                                </p>
                                            </td>
                                        
                            </tr>
                        </table>
                    </td>
                </tr>
                 
                <tr>
                    <td style="padding:0px 0px 10px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td align="right" style="padding-top: 3px; text-align: right;">
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/344-seyalki-tochnogo-vyseva-pd-8070/?utm_source=EVP7&utm_medium=email&utm_term=Sejalka_PD-8070&utm_content=<?php echo $email;?>&utm_campaign=Mehanicheskaja_sejalka_tochnogo_vyseva_PD-8070" target="_blank">
                                    <img src="http://www.lbr.ru/images/kp/211-evp/push_me.png" width="160" style="border: 0; text-align: right;" alt="Изображения не отображаются">
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px 20px 20px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/mightiness/mashiny-dlya-traktora-120-ls/?utm_source=EVP7&utm_medium=email&utm_term=banner_evp7&utm_content=<?php echo $email;?>&utm_campaign=banner_evp7" target="_blank"><img src="http://www.lbr.ru/images/kp/211-evp/banner.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются"></a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:20px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="385" style="padding-top: 0px;">
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/?utm_source=EVP7&utm_medium=email&utm_term=Sejalki_YP-1630F_YP-2425F&utm_content=<?php echo $email;?>&utm_campaign=Mehanicheskie_sejalki_tochnogo_vyseva_YP-1630F_YP-2425F" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #808080;">
                                    <p style="margin:0; color: #808080; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold;text-align: left; ">
                                        МЕХАНИЧЕСКИЕ СЕЯЛКИ ТОЧНОГО ВЫСЕВА<br>
                                        YР-1630F И YР-2425F
                                    </p>
                                    </a>
                                </td>
                                <td width="375" style="padding-top: 0px;">
                                     <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/758-mehanicheskie-sejalki-yp-1625a/?utm_source=EVP7&utm_medium=email&utm_term=Sejalki_YP-1625A_YP-2425A&utm_content=<?php echo $email;?>&utm_campaign=Sejalki_tochnogo_vyseva_YP-1625A_YP-2425A" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #808080;">
                                        <p style="margin:0; color: #808080; padding: 0; font-family: 'Trebuchet MS', sans-serif;  font-size: 16px; font-weight: bold; text-align: left; ">
                                            СЕЯЛКИ ТОЧНОГО ВЫСЕВА<br>
                                            YР-1625А И YР-2425А
                                        </p>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/211-evp/2.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="390" style="padding-top: 0px; padding-left: 10px; text-align: left;  border-left:1px solid #808080;" >
                                     <p style="margin:0; color: #808080; font-family: 'Trebuchet MS', sans-serif;  font-size: 16px; font-weight: normal; text-align: left;  ">
                                        ВЫСОКАЯ ТОЧНОСТЬ ПОСЕВА<br />
                                        КАЛИБРОВАННОГО ЗЕРНА
                                    </p>
                                </td>
                                <td width="370" style="padding-top: 0px; padding-left: 10px; text-align: left;  border-left:1px solid #808080;">
                                     <p style="margin:0; color: #808080;  font-family: 'Trebuchet MS', sans-serif;  font-size: 16px; font-weight: normal; text-align: left;  ">
                                        ТОЧНОСТЬ ВЫСЕВА НА ЛЮБЫХ ПОЛЯХ<br />
                                        - ЗАЛОГ СВОЕВРЕМЕННЫХ ВСХОДОВ.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td valign="top" width="370" style="padding: 15px 15px 0px 0px; text-align: left; width: 370px;">
                                     <p style="margin:0; color: #808080; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; ">
                                         Высокая точность посева калиброванного зерна достигается 
                                         благодаря пальчиковому дозатору
                                         высева, который обеспечивает отличную точность
                                         посева зерен.<br>
                                         • Дисковый сошник, в котором диски смещены один относительно
                                         друг друга.<br>
                                         • Простая и точная настройка для каждого рядка глубины сева.
                                    </p>
                                </td>
                                <td valign="top" width="390" style="padding: 15px 0px 0px 20px; text-align: left; width: 390px;">
                                     <p style="margin:0; color: #808080; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; ">
                                         Каждый рядок настраивается индивидуально. Сеялки оборудованы
                                         пневматическим высевающим аппаратом на положительном давлении, позволяющим осуществлять более точный высев, не допуская
                                         просевов.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px 0px 0px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="370" style="padding-top: 3px; text-align: right;">
                                     <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/?utm_source=EVP7&utm_medium=email&utm_term=Sejalki_YP-1630F_YP-2425F&utm_content=<?php echo $email;?>&utm_campaign=Mehanicheskie_sejalki_tochnogo_vyseva_YP-1630F_YP-2425F" target="_blank">
                                     <img src="http://www.lbr.ru/images/kp/211-evp/push_me.png" width="160" style="border: 0; text-align: right;" alt="Изображения не отображаются">
                                     </a>
                                </td>
                                <td  width="390" style="padding-top: 3px; text-align: right;">
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/758-mehanicheskie-sejalki-yp-1625a/?utm_source=EVP7&utm_medium=email&utm_term=Sejalki_YP-1625A_YP-2425A&utm_content=<?php echo $email;?>&utm_campaign=Sejalki_tochnogo_vyseva_YP-1625A_YP-2425A" target="_blank">
                                    <img src="http://www.lbr.ru/images/kp/211-evp/push_me.png" width="160" style="border: 0; text-align: right;" alt="Изображения не отображаются">
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
               
                <tr><td style="padding:30px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-bottom: 3px;" width="670">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/714-seyalki-yp-825a/?utm_source=EVP7&utm_medium=email&utm_term=Sejalka_YP-825A&utm_content=<?php echo $email;?>&utm_campaign=Pnevmaticheskaja_propashnaja_sejalka_tochnogo_vyseva_YP-825A" target="_blank" style="font-size: 16px; font-weight: 800;font-family: 'Trebuchet MS', sans-serif; text-decoration: none; color: #808080;">
                                       ПНЕВМАТИЧЕСКАЯ ПРОПАШНАЯ <br> СЕЯЛКА ТОЧНОГО ВЫСЕВА | YP-825A
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/211-evp/3.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                    <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="border: 0; border-collapse: collapse; background: white;">
                                         <tr>
                                            <td style="padding: 0px 0px 0px 10px; text-align: left; border-left: 1px solid #808080;" >
                                                <p style="margin:0; color: #808080; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal;text-align: left; ">
                                                    ОТЗЫВ
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 0px 0px;">
                                                <p style="margin:0; color: #808080; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; ">
                                                    Высокоточный высевающий аппарат, работающий по принципу «избыточного давления воздуха», показал идеальную расстановку семян в
                                                    ряду, что впоследствии дало положительный результат на одновременном развитии растений. Высев проводился на среднюю глубину 5 см на
                                                    скорости 9-10 км/ч. В общей сложности сеялка отработала 600 га, и за все время не возникло ни одного сбоя в ее работе. Полученные 
                                                    равномерные всходы доказали правильность принятого нами решения в приобретении YP-825A.
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
                    <td style="padding:0px 10px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px; text-align: right;">
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/714-seyalki-yp-825a/?utm_source=EVP7&utm_medium=email&utm_term=Sejalka_YP-825A&utm_content=<?php echo $email;?>&utm_campaign=Pnevmaticheskaja_propashnaja_sejalka_tochnogo_vyseva_YP-825A" target="_blank">
                                    <img src="http://www.lbr.ru/images/kp/211-evp/push_me.png" width="160" style="border: 0; text-align: right;" alt="Изображения не отображаются">
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:20px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="385" style="padding-top: 3px;">
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/shirokozakhvatnye-seyalki/697-pnevmaticheskie-seyalki-spartan-607/?utm_source=EVP7&utm_medium=email&utm_term=Sejalka_SPARTAN-607&utm_content=<?php echo $email;?>&utm_campaign=UNP_pnevmaticheskaja_sejalka_SPARTAN-607" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #808080;">
                                    <p style="margin:0; color: #808080; padding: 0; font-size: 16px; font-weight: bold;text-align: left;font-family: 'Trebuchet MS', sans-serif; ">
                                        УТП ПНЕВМАТИЧЕСКАЯ СЕЯЛКА | <br>SPARTAN-607
                                    </p>
                                    </a>
                                </td>
                                <td width="375" style="padding-top: 3px; text-align: left;">
                                     <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/shirokozakhvatnye-seyalki/266-mekhanicheskie-seyalki-nulevogo-tsikla-cph-2000f/?utm_source=EVP7&utm_medium=email&utm_term=Sejalka_CPH-2000F&utm_content=<?php echo $email;?>&utm_campaign=Mehanicheskaja_diskovaja_sejalka_CPH-2000F" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #808080;">
                                     <p style="margin:0; color: #808080; padding: 0; font-size: 16px; font-weight: bold; text-align: left; font-family: 'Trebuchet MS', sans-serif;">
                                        МЕХАНИЧЕСКАЯ ДИСКОВАЯ СЕЯЛКА | <br>СPH-2000F
                                    </p>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/211-evp/4.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="390" style="padding-top: 0px; padding-left: 10px; text-align: left;  border-left:1px solid #808080;">
                                     <p style="margin:0; color: #808080; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: left; ">
                                         ПОСЕВ В УСЛОВИЯХ СТЕРНИ
                                         ИЛИ НА УВЛАЖНЕННОЙ ПОЧВЕ
                                    </p>
                                </td>
                                <td width="370" style="padding-top: 0px; padding-left: 10px; text-align: left;  border-left:1px solid #808080;">
                                     <p style="margin:0; color: #808080; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: left; ">
                                         КАЧЕСТВЕННЫЙ ПОСЕВ НА ТЫСЯЧИ ГЕКТАРОВ
                                         ПОСЕВ ПО NO-TILL И MIN-TIL
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="370" style="padding: 15px 15px 0px 0px; text-align: left;  width: 370px;">
                                     <p style="margin:0; color: #808080;  font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; ">
                                         Турбодиски установлены на отдельной раме, позволяют оператору
                                         устанавливать глубину работы режущих дисков.<br>
                                         Точность высева благодаря сошникам на параллелограмме с возможностью хода 24 см.
                                    </p>
                                </td>
                                <td width="390" style="padding: 15px 0px 0px 20px; text-align: left; width: 390px;">
                                     <p style="margin:0; color: #808080; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; ">
                                         Универсальная механическая прицепная сеялка.<br>
                                         Эксклюзивная конструкция высевающих катушек сеялок компании
                                         Great Plains обеспечивает высочайшую точность высева семян.<br>
                                         Превосходное копирование рельефа поля.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px 0px 0px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="370" style="padding: 3px 8px 0 0; text-align: right;">
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/shirokozakhvatnye-seyalki/697-pnevmaticheskie-seyalki-spartan-607/?utm_source=EVP7&utm_medium=email&utm_term=Sejalka_SPARTAN-607&utm_content=<?php echo $email;?>&utm_campaign=UNP_pnevmaticheskaja_sejalka_SPARTAN-607" target="_blank">
                                    <img src="http://www.lbr.ru/images/kp/211-evp/push_me.png" width="160" style="border: 0; text-align: right;" alt="Изображения не отображаются">
                                    </a>
                                </td>
                                <td width="390" style="padding-top: 3px; text-align: right;">
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/shirokozakhvatnye-seyalki/266-mekhanicheskie-seyalki-nulevogo-tsikla-cph-2000f/?utm_source=EVP7&utm_medium=email&utm_term=Sejalka_CPH-2000F&utm_content=<?php echo $email;?>&utm_campaign=Mehanicheskaja_diskovaja_sejalka_CPH-2000F" target="_blank">
                                    <img src="http://www.lbr.ru/images/kp/211-evp/push_me.png" width="160" style="border: 0; padding: 0; text-align: right;" alt="Изображения не отображаются">
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
             
                    <td style="padding:20px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="385" valign="top" style="padding-top: 3px;">
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/shirokozakhvatnye-seyalki/248-seyalka-mekhanicheskaya-2sf30/?utm_source=EVP7&utm_medium=email&utm_term=Sejalka_GREAT_PLAINS_2SF30&utm_content=<?php echo $email;?>&utm_campaign=Mehanicheskaja_sejalka_GREAT_PLAINS_2SF30" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #808080;">
                                     <p style="margin:0; color: #808080; padding: 0;font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold;text-align: left; ">
                                         МЕХАНИЧЕСКАЯ СЕЯЛКА GREAT PLAINS 2SF30
                                    </p>
                                    </a>
                                </td>
                                <td width="375" style="padding-top: 3px; text-align: left;">
                                     <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/731-seyalki-yp-825a-16tr/?utm_source=EVP7&utm_medium=email&utm_term=Sejalka_YP-825A-16TR&utm_content=<?php echo $email;?>&utm_campaign=Pnevmaticheskaja_propashnaja_sejalka_tochnogo_vyseva_YP-825A-16TR" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #808080;">
                                     <p style="margin:0; color: #808080; padding: 0;font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: left; ">
                                         ПНЕВМАТИЧЕСКАЯ ПРОПАШНАЯ СЕЯЛКА<br>
                                         ТОЧНОГО ВЫСЕВА | YP-825A-16TR
                                    </p>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/211-evp/5.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="390" style="padding-top: 0px; padding-left: 10px; text-align: left;  border-left:1px solid #808080;">
                                     <p style="margin:0; color: #808080;  font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: left; ">
                                        СОЗДАНЫ СПЕЦИАЛЬНО<br />
                                        ДЛЯ РАБОТЫ В СЛОЖНЫХ УСЛОВИЯХ
                                    </p>
                                </td>
                                <td width="370" style="padding-top: 0px; padding-left: 10px; text-align: left;  border-left:1px solid #808080;">
                                     <p style="margin:0; color: #808080; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: left;  ">
                                        УВЕЛИЧЕНИЕ УРОЖАЙНОСТИ В 1,5 РАЗА<br>
                                        &nbsp;
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td valign="top" width="370" style="padding: 15px 15px 0px 0px; text-align: left; width: 370px;">
                                     <p style="margin:0; color: #808080;  font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; ">
                                         Применение сеялки Great Plains модели 2SF30 обеспечивает превосходное 
                                         разрезание грунта благодаря открывающим сошникам со
                                         смещенными осями. Сеялки оборудованы высевающими катушками и
                                         механическим приводом высевающих аппаратов от колес, что 
                                         гарантирует максимально аккуратный посев.
                                     </p>
                                </td>
                                <td valign="top" width="390" style="padding: 15px 0px 0px 20px; text-align: left; width: 390px;">
                                     <p  style="margin:0; color:#808080; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; ">
                                         Частоту посева обеспечивают сдвоенные ряды, расположенные со
                                         смещением 10 см друг относительно друга. Таким образом, расстояние 
                                         между строчками составляет 20 см, а расстояние между 
                                         смежными рядами 56 см. При посеве со сдвоенными рядами обеспечивается
                                         увеличение урожайности в 1,5 раза.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px 0px 0px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="370" style="padding: 3px 8px 0 0; text-align: right;">
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/shirokozakhvatnye-seyalki/248-seyalka-mekhanicheskaya-2sf30/?utm_source=EVP7&utm_medium=email&utm_term=Sejalka_GREAT_PLAINS_2SF30&utm_content=<?php echo $email;?>&utm_campaign=Mehanicheskaja_sejalka_GREAT_PLAINS_2SF30" target="_blank">
                                    <img src="http://www.lbr.ru/images/kp/211-evp/push_me.png" width="160" style="border: 0; text-align: right;" alt="Изображения не отображаются">
                                    </a>
                                </td>
                                <td width="390" style="padding-top: 3px; text-align: right;">
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/731-seyalki-yp-825a-16tr/?utm_source=EVP7&utm_medium=email&utm_term=Sejalka_YP-825A-16TR&utm_content=<?php echo $email;?>&utm_campaign=Pnevmaticheskaja_propashnaja_sejalka_tochnogo_vyseva_YP-825A-16TR" target="_blank">
                                    <img src="http://www.lbr.ru/images/kp/211-evp/push_me.png" width="160" style="border: 0; padding: 0; text-align: right;" alt="Изображения не отображаются">
                                    </a>
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
  <?php
if($data['show_footer']=='1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
</body>






