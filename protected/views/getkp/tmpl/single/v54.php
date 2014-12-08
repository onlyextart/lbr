<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" style="min-height: 100%">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><? echo $template->title; ?></title>
</head>
<body style="min-height: 100%;">
    <table width="638" style="border-collapse: collapse; border-bottom: 4px solid #d1232a" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
        <tr>
            <td>
                <table  style="border-collapse: collapse;" width="638" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
                    <tbody>
                        <tr>
                            <td><span style="color: #6e7071; background: none !important; font-size: 16px; font-weight: normal; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;"><? echo $data['header']; ?> </span></td>
                            <td width="160" align="right"><span style="text-decoration: none;"><a style="text-decoration: none;" href="http://www.lbr.ru/" target="_blank"><img src="http://www.lbr.ru/images/kp/logo.jpg" alt="Логотип ЛБР-Агромаркет" width="150" height="100" border="0" /></a></span></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px;">
        <tr align="right">
            <td><span style="font-family: Calibri, sans-serif; font-size:32px; font-weight: bolder; color: #d1232a;">РАБОЧИЕ ОРГАНЫ ДЛЯ ТЕЛЕСКОПИЧЕСКИХ ПОГРУЗЧИКОВ</span>
            </td>
        </tr>
        <tr><td colspan="2"><span>
        <?php 
	$finance_block = $data['finance_block'];
        if ($finance_block=='1')
        {
            $this->renderPartial('finance_block', array('finance_block_text'=>$data['finance_block_text']));
        }
?>
        </span></td></tr>
    </table>
    <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
        <tr><td><img width="20" src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                <tr>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 18px; font-weight: bolder;">Рабочие органы для телескопических погрузчиков</span></td>
                                    <td align="right"><img src="http://www.lbr.ru/images/kp/dieci-logo.jpg" border="0" style="height: 30px; width: 100px;" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>                    
                    <tr><td align="center">
                    <img src="http://www.lbr.ru/images/kp/diechi-raboche_organi_e.jpg" style="width: 638px;" border="0" />
                    </td></tr>
                    <tr>
                        <td>
                            <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                                <tr valign="top">
                                    <td colspan="2" width="628">                                        
                                    <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        На все телескопические погрузчики Dieci возможна установка широкого спектра рабочих органов, как для сельскохозяйственных, так и для строительных работ.
                                    </span>
                                    <span style="font-family: Calibri, sans-serif; font-size: 16px; font-weight: bolder; color: #d1232a; text-transform: uppercase;">БОЛЕЕ 30 ВИДОВ РАБОЧИХ ОРГАНОВ В НАЛИЧИИ И ПОД ЗАКАЗ:</span>
                                     <span style="display: block; text-align: justify; font-family:Calibri, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 16px;">
                                        ковш для сыпучих материалов, ковш с зубьями для грунта, ковш с удерживающим захватом, многофункциональный ковш 4 в 1, вилы для рулонов, вилы с крокодилом, вилы с захватом, захваты для бревен, рулонов, тюков, крюк, люлька для подъема людей, лебедки, дорожные щетки, отвал, снегоочиститель и другие.
                                        </span>                                    
                                    </tr>                                     
                                    </td>  
                                
                            </table>
                             </td>
                            </tr>
                            <tr><td align="center" width="638px"><img src="http://www.lbr.ru/images/kp/dieci-organ-1e.jpg" style="width: 638px;" /></td></tr>
                            <tr><td align="center"><table width="638" style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; font-size: 13px;" align="left" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1">
                                    <tbody>
                                    <tr style="background: white; font-weight: normal;">
                                    <td width="15%" align="center"><span>Объем - 1,5 м<sup>3</sup></span></td>
                                    <td width="10%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price1']; ?></span></td>
                                    <td width="15%" align="center" rowspan="3"><span>Объем - 1,0 м<sup>3</sup></span></td>
                                    <td width="10%" align="center" rowspan="3"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price6']; ?></span></td>
                                    <td width="15%" align="center" rowspan="5"><span>Объем  - 1,7 м<sup>3</sup></span></td>
                                    <td width="10%" align="center" rowspan="5"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price8']; ?></span></td>
                                    <td width="15%" align="center" rowspan="5"><span>Объем  - 1,0 м<sup>3</sup></span></td>
                                    <td width="10%" align="center" rowspan="5"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price9']; ?></span></td>
                                    </tr>
                                    <tr>
                                    <td align="center"><span>Объем - 2 м<sup>3</sup></span></td>
                                    <td align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price2']; ?></span></td>
                                    </tr>
                                    <tr>
                                    <td align="center"><span>Объем - 2,5 м<sup>3</sup></span></td>
                                    <td align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price3']; ?></span></td>
                                    </tr>
                                    <tr>
                                    <td align="center"><span>Объем - 3 м<sup>3</sup></span></td>
                                    <td align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price4']; ?></span></td>
                                    <td align="center" width="100px" rowspan="2">Объем  - 1,5 м<sup>3</sup></td>
                                    <td rowspan="2" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price7']; ?></span></td>
                                    </tr>
                                    <tr>
                                    <td align="center"><span>Объем - 3,5 м<sup>3</sup></span></td>
                                    <td align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price5']; ?></span></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td></tr>
                                <tr><td align="center"><img width="638px" src="http://www.lbr.ru/images/kp/dieci-org-2e.jpg"/></td></tr>
                            <tr><td align="center">
                            <table width="638px" style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; font-size: 13px;" align="center" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1">
                                    <tbody>                                    
                                    <tr style="background: white; font-weight: normal;">
                                    <td width="25%" align="center" rowspan="2"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price10']; ?></span></td>
                                    <td width="25%" align="center" rowspan="2"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price11']; ?></span></td>
                                    <td width="25%" align="center" rowspan="2"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price12']; ?></span></td>
                                    <td align="center" width="15%" rowspan="2">Объем  - 3,35 м<sup>3</sup>
                                    <br />Ширина  -  2 м</td>
                                    <td width="10%" align="center" rowspan="2"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price13']; ?></span></td>
                                    </tr>
                                    </tbody>
                                    </table>
                            </td></tr> 
                            <tr><td align="center"><img width="638px" src="http://www.lbr.ru/images/kp/dieci-org-3e.jpg"/></td></tr>
                            <tr><td align="center">
                            <table width="638px" style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; font-size: 13px;" align="center" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1">
                                    <tbody>                                    
                                    <tr style="background: white; font-weight: normal;">
                                    <td width="25%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price14']; ?></span></td>
                                    <td width="25%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price15']; ?></span></td>
                                    <td width="25%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price16']; ?></span></td>
                                    <td width="25%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price17']; ?></span></td>
                                    </tr>
                                    </tbody>
                                    </table>
                            </td></tr> 
                            <tr><td align="center"><img width="638px" src="http://www.lbr.ru/images/kp/dieci-org-4e.jpg"/></td></tr>
                            <tr><td align="center">
                            <table width="638px" style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; font-size: 13px;" align="center" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1">
                                    <tbody>                                    
                                    <tr style="background: white; font-weight: normal;">
                                    <td width="25%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price18']; ?></span></td>
                                    <td width="25%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price19']; ?></span></td>
                                    <td width="25%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price20']; ?></span></td>
                                    <td width="25%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price21']; ?></span></td>
                                    </tr>
                                    </tbody>
                                    </table>
                            </td></tr> 
                            <tr><td align="center"><img width="638px" src="http://www.lbr.ru/images/kp/dieci-org-5e.jpg"/></td></tr>
                            <tr><td align="center">
                            <table width="638px" style="border-collapse: collapse; height: 1px; border-bottom-width: 1px; border-bottom-color: black; border-bottom-style: solid; font-size: 13px;" border="1" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
                                <tbody>
                                <tr style="background: white; font-weight: normal;">
                                <td width="15%">Длина - 1,3 м <br />Грузоп-сть - 2 т</td>
                                <td width="10%" align="center"><span style="font-family: FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: #d3232a;"><? echo $data['price22']; ?></span></td>
                                <td width="15%">Длина - 1,3 м <br />Грузоп-сть - 2 т</td>
                                <td width="10%" align="center"><span style="font-family: FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: #d3232a;"><? echo $data['price24']; ?></span></td>
                                <td rowspan="2" align="center" colspan="2" width="12,5%"><span style="font-family: FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: #d3232a;"><? echo $data['price26']; ?></span><span style="font-family: FuturisC,  sans-serif; font-size: 15px; text-align: center; font-weight: bold; color: #d3232a;"><? echo $data['price27']; ?></span></td>
                                <td rowspan="2" width="15%">Длина - 1 м <br />Грузоп-сть - 2,5т</td>
                                <td rowspan="2" align="center" width="10%"><span style="font-family: FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: #d3232a;"><? echo $data['price27']; ?></span></td>
                                </tr>
                                <tr>
                                <td>Длина - 2,5 м <br />Грузоп-сть - 1,2т</td>
                                <td align="center"><span style="font-family: FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: #d3232a;"><? echo $data['price23']; ?></span></td>
                                <td>Длина - 2,5 м <br />Грузоп-сть - 1,2т</td>
                                <td align="center"><span style="font-family: FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: #d3232a;"><? echo $data['price25']; ?></span></td>
                                </tr>
                                </tbody>
                                </table>
                            </td></tr> 
                            <tr><td align="center"><img width="638px" src="http://www.lbr.ru/images/kp/dieci-organ-6e.jpg"/></td></tr>
                            <tr><td align="center">
                            <table width="638px" style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; font-size: 13px;" align="center" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1">
                                    <tbody>
                                        <tr style="background: white; font-weight: normal;">
                                        <td rowspan="2" align="center" width="25%"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price28']; ?></span></td>
                                        <td width="15%" align="center"><span style="text-align: center;">Ширина - 2,1 м</span></td>
                                        <td width="10%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price29']; ?></span></td>
                                        <td width="15%" align="center"><span style="text-align: center;">Ширина - 2,1 м</span></td>
                                        <td width="10%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price31']; ?></span></td>
                                        <td rowspan="2" align="center" width="25%"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price33']; ?></span></td>
                                        </tr>
                                        <tr>
                                        <td width="15%" align="center"><span style="text-align: center;">Ширина - 2,5 м</span></td>
                                        <td width="10%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price30']; ?></span></td>
                                        <td width="15%" align="center"><span style="text-align: center;">Ширина - 2,4 м</span></td>
                                        <td width="10%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price32']; ?></span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                            </td></tr> 
                            <tr><td align="center"><img width="638px" src="http://www.lbr.ru/images/kp/dieci-organ-7e.jpg"/></td></tr>
                            <tr><td align="center">
                            <table width="638px" style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; font-size: 13px;" align="center" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1">
                                    <tbody>
                                        <tr style="background: white; font-weight: normal;">
                                        <td width="25%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price34']; ?></span></td>
                                        <td width="15%" align="center">Ширина - 2,5 м</td>
                                        <td width="10%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price35']; ?></span></td>
                                        <td width="15%" align="center">Объем  - 330 л</td>
                                        <td width="10%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price36']; ?></span></td>
                                        <td width="15%" align="center">Объем  - 400 л</td>
                                        <td width="10%" align="center"><span style="font-family:FuturisC,  sans-serif; font-size: 14px; text-align: center; font-weight: bold; color: rgb(211,35,42);"><? echo $data['price37']; ?></span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                            </td></tr> 
                            <tr valign="top">
                    <td style="padding: 5px 0px 0px 0px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цены сформированы по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                    <tr><td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
                </table>               
            </td>
        </tr>        
        <tr>
            <td>
                <table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; ">
                    
                  <tr>
                        <td>
                            <table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                <tr>
                                    <td width="10"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td><span style="font-family: Calibri, sans-serif; font-size: 14px;"><? echo $data['filial_bottom'];?></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                    </tr>
                    <tr style="border-top: 2px solid grey; height: 10px; width: 100%">
                        <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                    </tr>
                    <tr>
                        <td>
                            <table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                <tr>
                                    <td width="10"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 14px; text-align: justify;">
                                            Всю подробную информацию по заинтересовавшим Вас моделям техники, а также опыт эксплуатации и отзывы потребителей Вы сможете получить у Вашего персонального менеджера.
                                        </span>
                                    </td>
                                </tr>
                            </table>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                    </tr>
                    <tr>
                        <td>
                            <table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                <tr>
                                    <td width="10"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold;">Ждем Вас в филиале ЛБР-АгроМаркет (<b><? echo $filial['name']; ?></b>)!</span><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['work_time']; ?></span><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['address']; ?></span><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    <td>
                                        <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['telephone']; ?></span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                    </tr>
                    <tr>
                        <td>
                            <table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                <tr>
                                    <td width="5"><img src="http://www.lbr.ru/images/kp/10.gif" style="display: block; width: 7px;"/></td>
                                    <td width="400" align="right" style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 14px;">
                                            Ваш персональный менеджер<br><br>
                                            <? echo $data['user_info']; ?>
                                        </span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table> 
            </td>
        </tr>
    </table>
</body>
</html>
