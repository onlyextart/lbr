<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <link href="http://www.lbr.ru/css/kp.css" type="text/css" rel="stylesheet" />
        <title></title>
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
                            
            <div class="header-red-line">РАБОЧИЕ ОРГАНЫ ДЛЯ ТЕЛЕСКОПИЧЕСКИХ ПОГРУЗЧИКОВ</div>
            <div class="one-page head-first-page">
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
                    <div class="one-item">
                        <div class="head-content">
                            <div class="h-2 left-80"><span style="line-height: 39px;">Рабочие органы для телескопических погрузчиков</span></div>
                            <div class="logo-maker right-20"><img src="http://www.lbr.ru/images/kp/dieci-logo.jpg" border="0" style="position: absolute; top: 25px; right: -2px;" /></div>
                        </div>
                        <div class="body-content">
                            <div class="width-100 image">
                                <img src="http://www.lbr.ru/images/kp/diechi-raboche_organi.jpg" style="width:100%" border="0" />
                            </div>
                            <div class="width-100">                                
                                <span class="text">
                                    На все телескопические погрузчики Dieci возможна установка широкого спектра рабочих органов, как для сельскохозяйственных, так и для строительных работ.
                                </span>
                            </div>
                            <div class="width-100">
                                <span class="h-4">БОЛЕЕ 30 ВИДОВ РАБОЧИХ ОРГАНОВ В НАЛИЧИИ И ПОД ЗАКАЗ:</span>
                                <span class="text">
                                    ковш для сыпучих материалов, ковш с зубьями для грунта, ковш с удерживающим захватом, многофункциональный ковш 4 в 1, вилы для рулонов, вилы с крокодилом, вилы с захватом, захваты для бревен, рулонов, тюков, крюк, люлька для подъема людей, лебедки, 
                                    дорожные щетки, отвал, снегоочиститель и другие.
                                </span>
                            </div>
                            <div class="width-100 image">
                                <img src="http://www.lbr.ru/images/kp/dieci-organ-1.jpg" style="width:100%" border="0" />
                            </div>
                            <div class="width-100">                            
                            <table width="760" style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; font-size: 13px;" align="left" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1">
                                    <tbody>
                                    <tr style="background: white; font-weight: normal;">
                                    <td width="15%"><span>Объем - 1,5 м<sup>3</sup></span></td>
                                    <td width="10%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">1<? echo $data['price1']; ?></span></td>
                                    <td width="15%" rowspan="3">Объем - 1,0 м<sup>3</sup></td>
                                    <td width="10%" rowspan="3"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">6<? echo $data['price6']; ?></span></td>
                                    <td width="15%" rowspan="5">Объем  - 1,7 м<sup>3</sup></td>
                                    <td width="10%" rowspan="5"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">8<? echo $data['price8']; ?></span></td>
                                    <td width="15%" rowspan="5">Объем  - 1,0 м<sup>3</sup></td>
                                    <td width="10%" rowspan="5"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">9<? echo $data['price9']; ?></span></td>
                                    </tr>
                                    <tr>
                                    <td><span>Объем - 2 м<sup>3</sup></span></td>
                                    <td><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">2<? echo $data['price2']; ?></span></td>
                                    </tr>
                                    <tr>
                                    <td><span>Объем - 2,5 м<sup>3</sup></span></td>
                                    <td><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">3<? echo $data['price3']; ?></span></td>
                                    </tr>
                                    <tr>
                                    <td><span>Объем - 3 м<sup>3</sup></span></td>
                                    <td><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">4<? echo $data['price4']; ?></span></td>
                                    <td width="100px" rowspan="2">Объем  - 1,5 м<sup>3</sup></td>
                                    <td rowspan="2"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">7<? echo $data['price7']; ?></span></td>
                                    </tr>
                                    <tr>
                                    <td><span>Объем - 3,5 м<sup>3</sup></span></td>
                                    <td><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">5<? echo $data['price5']; ?></span></td>
                                    </tr>
                                    </tbody>
                                    </table>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-break"></div>
            <div class="after-page-break"></div>
            <div class="one-page body-page">
                <div class="content-page">
                    <div class="one-item">
                        <div class="head-content">
                            <div class="h-2 left-80"><span style="line-height: 39px;">Рабочие органы для телескопических погрузчиков</span></div>
                            
                        </div>
                       <div class="width-100 image">
                                <img src="http://www.lbr.ru/images/kp/dieci-org-2.jpg" style="width:100%" border="0" />
                            </div>
                            <div class="width-100">                            
                            <table width="760" style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; font-size: 13px;" align="left" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1">
                                    <tbody>                                    
                                    <tr style="background: white; font-weight: normal;">
                                    <td width="25%" rowspan="2"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: rgb(211,35,42);">10<? echo $data['price10']; ?></span></td>
                                    <td width="25%" rowspan="2"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">11<? echo $data['price11']; ?></span></td>
                                    <td width="25%" rowspan="2"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">12<? echo $data['price12']; ?></span></td>
                                    <td width="15%" rowspan="2">Объем  - 3,35 м<sup>3</sup>
                                    <br />Ширина  -  2 м</td>
                                    <td width="10%" rowspan="2"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">13<? echo $data['price13']; ?></span></td>
                                    </tr>
                                    </tbody>
                                    </table>
                            </div>
                            <div class="width-100 image">
                                <img src="http://www.lbr.ru/images/kp/dieci-org-3.jpg" style="width:100%; margin-top: 15px;" border="0" />
                            </div>
                            <div class="width-100">                            
                            <table width="760" style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; font-size: 13px;" align="left" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1">
                                    <tbody>                                    
                                    <tr style="background: white; font-weight: normal;">
                                    <td width="25%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: rgb(211,35,42);">14<? echo $data['price14']; ?></span></td>
                                    <td width="25%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">15<? echo $data['price15']; ?></span></td>
                                    <td width="25%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">16<? echo $data['price16']; ?></span></td>
                                    <td width="25%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">17<? echo $data['price17']; ?></span></td>
                                    </tr>
                                    </tbody>
                                    </table>
                            </div>
                            <div class="width-100 image">
                                <img src="http://www.lbr.ru/images/kp/dieci-org-4.jpg" style="width:100%; margin-top: 15px;" border="0" />
                            </div>
                            <div class="width-100">                            
                            <table width="760" style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; font-size: 13px;" align="left" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1">
                                    <tbody>                                    
                                    <tr style="background: white; font-weight: normal;">
                                    <td width="25%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: rgb(211,35,42);">18<? echo $data['price18']; ?></span></td>
                                    <td width="25%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">19<? echo $data['price19']; ?></span></td>
                                    <td width="25%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">20<? echo $data['price20']; ?></span></td>
                                    <td width="25%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; font-weight: bold; color: rgb(211,35,42);">21<? echo $data['price21']; ?></span></td>
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
                    <div class="one-item">
                        <div class="head-content">
                            <div class="h-2 left-80"><span style="line-height: 39px;">Рабочие органы для телескопических погрузчиков</span></div>
                            
                        </div>
                       <div class="width-100 image">
                                <img src="http://www.lbr.ru/images/kp/dieci-org-5.jpg" style="width:100%" border="0" />
                            </div>
                            <div class="width-100">                            
                           <table style="border-collapse: collapse; height: 1px; border-bottom-width: 1px; border-bottom-color: black; border-bottom-style: solid; font-size: 13px; width: 760px;" border="1" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                <tbody>
                                <tr style="background: white; font-weight: normal;">
                                <td width="15%">Длина - 1,3 м <br />Грузоп-сть - 2 т</td>
                                <td width="10%"><span style="font-family: FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: #d3232a;">22<? echo $data['price22']; ?></span></td>
                                <td width="15%">Длина - 1,3 м <br />Грузоп-сть - 2 т</td>
                                <td width="10%"><span style="font-family: FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: #d3232a;">24<? echo $data['price24']; ?></span></td>
                                <td rowspan="2" colspan="2" width="12,5%"><span style="font-family: FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: #d3232a;">26<? echo $data['price26']; ?></span><span style="font-family: FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: #d3232a;"><? echo $data['price27']; ?></span></td>
                                <td rowspan="2" width="15%">Длина - 1 м <br />Грузоп-сть - 2,5 т</td>
                                <td rowspan="2" width="10%"><span style="font-family: FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: #d3232a;">27<? echo $data['price27']; ?></span></td>
                                </tr>
                                <tr>
                                <td>Длина - 2,5 м <br />Грузоп-сть - 1,2 т</td>
                                <td><span style="font-family: FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: #d3232a;">23<? echo $data['price23']; ?></span></td>
                                <td>Длина - 2,5 м <br />Грузоп-сть - 1,2 т</td>
                                <td><span style="font-family: FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: #d3232a;">25<? echo $data['price25']; ?></span></td>
                                </tr>
                                </tbody>
                                </table>
                            </div>
                            <div class="width-100 image">
                                <img src="http://www.lbr.ru/images/kp/dieci-organ-6.jpg" style="width:100%; margin-top: 15px;" border="0" />
                            </div>
                            <div class="width-100">                            
                            <table width="760" style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; font-size: 13px;" align="left" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1">
                                    <tbody>
                                        <tr style="background: white; font-weight: normal;">
                                        <td rowspan="2" width="25%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: rgb(211,35,42);">28<? echo $data['price28']; ?></span></td>
                                        <td width="15%"><span style="text-align: center;">Ширина - 2,1 м</span></td>
                                        <td width="10%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: rgb(211,35,42);">29<? echo $data['price29']; ?></span></td>
                                        <td width="15%"><span style="text-align: center;">Ширина - 2,1 м</span></td>
                                        <td width="10%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: rgb(211,35,42);">31<? echo $data['price31']; ?></span></td>
                                        <td rowspan="2" width="25%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: rgb(211,35,42);">33<? echo $data['price33']; ?></span></td>
                                        </tr>
                                        <tr>
                                        <td width="15%"><span style="text-align: center;">Ширина - 2,5 м</span></td>
                                        <td width="10%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: rgb(211,35,42);">30<? echo $data['price30']; ?></span></td>
                                        <td width="15%"><span style="text-align: center;">Ширина - 2,4 м</span></td>
                                        <td width="10%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: rgb(211,35,42);">32<? echo $data['price32']; ?></span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                            </div>
                            <div class="width-100 image">
                                <img src="http://www.lbr.ru/images/kp/dieci-organ-7.jpg" style="width:100%; margin-top: 15px;" border="0" />
                            </div>
                            <div class="width-100">                            
                            <table width="760" style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; font-size: 13px;" align="left" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1">
                                    <tbody>
                                        <tr style="background: white; font-weight: normal;">
                                        <td width="25%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: rgb(211,35,42);">34<? echo $data['price34']; ?></span></td>
                                        <td width="15%">Ширина - 2,5 м</td>
                                        <td width="10%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: rgb(211,35,42);">35<? echo $data['price35']; ?></span></td>
                                        <td width="15%">Объем  - 330 л</td>
                                        <td width="10%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: rgb(211,35,42);">36<? echo $data['price36']; ?></span></td>
                                        <td width="15%">Объем  - 400 л</td>
                                        <td width="10%"><span style="font-family:FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: rgb(211,35,42);">37<? echo $data['price37']; ?></span></td>
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
                    
                    <div class="footer">
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
