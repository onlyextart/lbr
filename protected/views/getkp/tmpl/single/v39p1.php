<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <link href="http://www.lbr.ru/css/kp.css" type="text/css" rel="stylesheet" />
        <title></title>
        <style>
            .text{
                line-height: 1.5;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">           
                <div id="header">
                <div class="left-75 header-text">
                    
                    <span class="header-2"><? echo $data['header']; ?> </span></div>
                <div class="right-20">
                    <img src="http://www.lbr.ru/images/kp/logo.jpg" alt="Logo" style="border: 0;"/>
                </div>
            </div>
            <div class="one-page head-first-page">
                <div class="content-page">
                    <div class="dieci-header">
                        <span class="dieci-header-orange">Технология закрытия<br /> влаги по-американски</span>
                    </div>
                    </div>
                <div style="text-align: justify;">
                <?php
	$finance_block = $data['finance_block'];
        if ($finance_block=='1')
        {
            $this->renderPartial('finance_zont', array('finance_block_text'=>$data['finance_block_text']));
        }
?>
                </div>
            </div>
             <div class="one-page body-first-page">
                <div class="content-page">
                    <div class="one-item" style="margin-bottom: 0">
                        <div class="head-content">
                            <div class="h-2 left-75" style="text-transform: none; font-size: 21px; ">
                                <span>Тяжелая зубовая борона SUPERHARROW PLUS (США)</span>
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="width-100 image">
                                <img border="0" src="http://www.lbr.ru/images/kp/supernarrowplus-1.jpg" style="width:100%">
                            </div>
                            <div class="width-100">
                                <span class="h-4" style="font-size: 18px;  margin-top: 15px; text-align: left; text-transform: uppercase;">УНИВЕРСАЛЬНОСТЬ - 5 ОПЕРАЦИЙ ЗА ОДИН ПРОХОД:</span>
                                <span class="text">
                                    <ul style="margin-left: -25px;">
                                        <li>Ранневесеннее бороннование. Закрытие поверхностного слоя почвы на 2-3 см.
                                        </li>
                                        <li>Провокация сорняков на прорастание, уничтожение проросших сорняков.
                                        </li>
                                        <li>Выравнивание поверхности поля. Подготовка почвы к посеву.
                                        </li>
                                        <li>Заделка удобрений и пестицидов.
                                        </li>
                                        <li>Распределение пожнивных остатков. Длинные и толстые зубья с диаметром 1,46 см позволяют равномерно распределять солому после уборки.
                                        </li>
                                    </ul>
                                </span>
                            </div>
                            <div class="width-100">
                                <table width="760" height="1" cellspacing="0" cellpadding="0" border="1" bgcolor="#FFFFFF" align="center" style="height: 1px; text-align: center; vertical-align: middle;">
                                    <tbody>
                                        <tr style="background: none repeat scroll 0 0 #fff; font-weight: normal">
                                            <td width="32%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold;">Рабочая ширина, м</span>
                                            </td>
                                            <td width="17%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 14px;">14,4</span>
                                            </td>
                                            <td width="17%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 14px;">18,29</span>
                                            </td>
                                            <td width="17%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 14px;">21,95</span>
                                            </td>
                                            <td width="17%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 14px;">25,6</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="32%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold;">Требуемая мощность трактора, л.с.</span>
                                            </td>
                                            <td width="17%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 14px;">от 170</span>
                                            </td>
                                            <td width="17%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 14px;">от 200</span>
                                            </td>
                                            <td width="17%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 14px;">от 250</span>
                                            </td>
                                            <td width="17%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 14px;">от 280</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="32%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold;">Цена</span>
                                            </td>
                                            <td width="17%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 14px;"></span>
                                            </td>
                                            <td width="17%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 14px;"></span>
                                            </td>
                                            <td width="17%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 14px;"></span>
                                            </td>
                                            <td width="17%">
                                                <span style="font-family:FuturisC, sans-serif; font-size: 14px;"></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                           </div>
                           <div class="width-100" style="margin-top: 15px">
                                <div class="h-2 left-100" style="font-family: FuturisXC, sans-serif; margin-top: 10px; text-transform: none; font-size: 21px; border-bottom: 1px solid #000000; margin-bottom: 3px;">
                                    <span>Тяжелая зубовая борона BRANDT CONTOUR COMMANDER (КАНАДА)</span>
                                </div>
                           </div>
                           <div class="width-100">
                                <div class="width-100 image">
                                    <img border="0" src="http://www.lbr.ru/images/kp/supernarrowplus-2.jpg" style="width:100%">
                                </div>
                           </div>
                           <div class="width-100" style="margin-top: 15px">
                                <span class="h-4" style="color: #000; font-size: 18px; text-align: left; text-transform: uppercase;">1. НЕПРЕВЗОЙДЕННАЯ СИСТЕМА КОПИРОВАНИЯ РЕЛЬЕФА!</span>
                                <span class="h-4" style="color: #000; font-size: 18px; text-align: left; text-transform: uppercase;">2. СИСТЕМА ПАРАЛЛЕЛОГРАМНОЙ ПОДВЕСКИ СЕКЦИЙ БОРОНЫ С ХОДОМ 80 СМ!</span>
                           </div>
                           <div style="padding-top: 20px; color: #000; font-size: 18px; text-align: left; text-transform: uppercase; font-family: FuturisXC,sans-serif;">3. ТРЕБУЕМАЯ МОЩНОСТЬ ТРАКТОРА ОТ 250 Л.С.!</div>
                    <span class="text">
                        Широкозахватная зубовая борона предназначена для распределения растительных остатков после уборки и заделки в почву. 
                        Весной - для закрытия влаги перед севом, довсходового боронования посевов, заделки семян многолетних трав и повсходового боронования 
                        подсолнечника и пшеницы.
                    </span>
                    <table width="760" height="1" cellspacing="0" cellpadding="0" border="1" bgcolor="#FFFFFF" align="center" style="height: 1px; text-align: center; vertical-align: middle;">
                        <tbody>
                            <tr style="background: none repeat scroll 0 0 #fff; font-weight: normal">
                                <td width="32%">
                                    <span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold;">Модель</span>
                                </td>
                                <td width="17%">
                                    <span style="font-family:FuturisC, sans-serif; font-size: 14px;">Ширина, м</span>
                                </td>
                                <td width="17%">
                                    <span style="font-family:FuturisC, sans-serif; font-size: 14px;">Требуемая мощность, л.с.</span>
                                </td>
                                <td width="17%">
                                    <span style="font-family:FuturisC, sans-serif; font-size: 14px;">Масса, кг</span>
                                </td>
                                <td width="17%">
                                    <span style="font-family:FuturisC, sans-serif; font-size: 14px;">Цена, руб</span>
                                </td>
                            </tr>
                            <tr style="background: none repeat scroll 0 0 #fff; font-weight: normal">
                                <td width="32%">
                                    <span style="font-family:FuturisC, sans-serif; font-size: 15px; font-weight: bold;">Contour Commander</span>
                                </td>
                                <td width="17%">
                                    <span style="font-family:FuturisC, sans-serif; font-size: 14px;">21</span>
                                </td>
                                <td width="17%">
                                    <span style="font-family:FuturisC, sans-serif; font-size: 14px;">От 250</span>
                                </td>
                                <td width="17%">
                                    <span style="font-family:FuturisC, sans-serif; font-size: 14px;">6025</span>
                                </td>
                                <td width="17%">
                                    <span style="font-family:FuturisC, sans-serif; font-size: 14px;"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-break"></div>
            <div class="after-page-break"></div>
            <div class="one-page body-page">
                <div class="content-page">
                    
                    <div class="footer" style="margin-top: 20px">
                        <div class="info-block" style="padding-bottom: 10px;">
                            <span>
                                Всю подробную информацию по заинтересовавшим Вас моделям техники, а также опыт эксплуатации и отзывы потребителей Вы сможете получить у Вашего персонального менеджера.
                            </span>
                        </div>
                        <div class="filial">
                            <span>Ждем Вас в филиале ЛБР-АгроМаркет (<b><? echo $filial['name']; ?></b>)!</span>
                            <span><? echo $filial['work_time']; ?></span>
                            <span><? echo $filial['address']; ?></span>
                            <span><? echo $filial['telephone']; ?></span>
                        </div>
                        <div class="user">
                            <span>Ваш персональный менеджер:</span>
                            <span>
                                <? echo $data['user_info']; ?>
                            </span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>
<style>
.dieci-header-orange{width: 80%; text-align: left; font-family: FuturisXC, sans-serif; text-transform: uppercase; font-size: 28px; display: block; border-radius: 20px; padding: 10px 20px; background: rgb(245,130,32); color: white;}</style>