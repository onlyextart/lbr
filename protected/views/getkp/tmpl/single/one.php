<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" style="min-height: 100%">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><? echo $template->title; ?></title>
</head>

<body style="min-height: 100%;">
<? if($data['show_header']=='1'  || !isset($data['show_footer'])):?>
<table width="638" style="border-collapse: collapse; border-bottom: 4px solid #d1232a" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
    <tr>
        <td>
            <table  style="border-collapse: collapse;" width="638" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
                <tbody>
                    <tr>
                        <td width="478"><span style="color: black; background: none !important; font-size: 16px; font-weight: bold; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;"> <? echo $data['client']; ?> </span> <br /> <span style="color: #6e7071; background: none !important; font-size: 16px; font-weight: normal; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;"><? echo $data['header']; ?> </span></td>
                        <td width="160" align="right"><span style="text-decoration: none;"><a style="text-decoration: none;" href="http://www.lbr.ru/" target="_blank"><img src="http://www.lbr.ru/images/kp/logo.jpg" alt="Логотип ЛБР-Агромаркет" width="150" height="100" border="0" /></a></span></td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>
<table width="638" style="border-collapse: collapse; border-bottom: 1px rgb(6, 69, 173) dashed" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
            <tr><td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
            <tr>
                <td>
                    <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; color: rgb(6, 69, 173); font-size: 14px;">ООО «Сеть Агромаркетов», в рамках программы по работе с ключевыми клиентами, предлагает вашему предприятию  приобрести оборудование для почвообработки в рассрочку на следующих условиях:
                    </span><span style="font-family: 'Trebuchet MS', Helvetica, sans-serif; font-weight: bold; font-size: 15px; color: rgb(6, 69, 173); "><br>Аванс- 25%.
                    Срок кредита – до 7 месяцев.
                    Промежуточные платежи – не более 10% в месяц.
                    % удорожания – 0%.
                    Дополнительное обеспечение не требуется!
                    </span> 
                </td>
            </tr>
            <tr><td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td></tr>
        </table>
<? endif;?>
<table width="638" cellspacing="0" cellpadding="0" align="center" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; page-break-after: always; ">
    <tbody>
        <tr valign="top">
            <td colspan="3"><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
        </tr>
        <tr>
            <td  width="11"><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
            <td>                   
                <table style="border-collapse: collapse;" width="616" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
                                    <tr>
                                        <td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    </tr>
                                    <tr>
                                        <td><img width="610" src="http://www.git-lbr.ru<? echo $template->big_image;?>" alt="<? echo $template->title;?>" title="<? echo $template->title;?>"/></td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="border-collapse: collapse;" width="616" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
                                                <tbody>
                                                    <tr>
                                                        <td width="10"><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block; width: 10px;"/></td>
                                                        <td width="410" valign="top">
                                                            <?
                                                                $desc = str_replace(array('<p>', '</p>', '{price1}', '{price2}', '{price3}', '{price4}', '{price5}', '{price6}', '{price7}', '../../../images/kp/10.gif', '/administrator/images/kp/10.gif'), array('<span>', '</span>', $data['price1'], $data['price2'], $data['price3'], $data['price4'], $data['price5'], $data['price6'], $data['price7'], 'http://www.git-lbr.ru/images/kp/10.gif', 'http://www.git-lbr.ru/images/kp/10.gif'), $template->description);
                                                                echo $desc;
                                                            ?>
                                                        </td>
                                                        <td width="196" valign="top">
                                                            <? 
                                                                $small = explode('||', $template->small_image);
                                                                foreach ($small as $img) {
                                                                    if($img!='br'){
                                                                        echo '<img width="190" src="http://www.git-lbr.ru'.$img.'" style="display: block;"/>';
                                                                        echo '<img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/>';
                                                                    }
                                                                            
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <? 
                                                $desc2 = str_replace(array('<p>', '</p>', '{price1}', '{price2}', '{price3}', '{price4}', '{price5}', '{price6}', '{price7}', '../../../images/kp/10.gif', '/administrator/images/kp/10.gif'), array('<span>', '</span>', $data['price1'], $data['price2'], $data['price3'], $data['price4'], $data['price5'], $data['price6'], $data['price7'], 'http://www.git-lbr.ru/images/kp/10.gif', 'http://www.git-lbr.ru/images/kp/10.gif'), $template->description2);
                                                echo $desc2;
                                                ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                                <tr>
                                                    <td width="10"><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                                    <td><span style="font-family: 'Trebuchet MS' sans-serif; font-size: 14px;"><? echo $data['filial_bottom'];?></span></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    </tr>
                                    <tr>
                                        <td style="border-top: 2px solid grey;"><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <? if($data['show_footer']=='1' || !isset($data['show_footer'])):?>
                                            <table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                                <tr>
                                                    <td width="10"><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                                    <td>
                                                        <span style="font-family: 'Trebuchet MS' sans-serif; font-size: 14px; font-weight: bold;">Ждем Вас в филиале ЛБР-АгроМаркет (<? echo $filial['name']; ?>)!</span><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                                    <td>
                                                        <span style="font-family: 'Trebuchet MS' sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['work_time']; ?></span><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                                    <td>
                                                        <span style="font-family: 'Trebuchet MS' sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['address']; ?></span><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                                    <td>
                                                        <span style="font-family: 'Trebuchet MS' sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['telephone']; ?></span>
                                                    </td>
                                                </tr>
                                            </table>
                                            <? endif;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <? if($data['show_footer']=='1' || !isset($data['show_footer'])):?>
                                            <table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                                <tr>
                                                    <td width="5"><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block; width: 7px;"/></td>
                                                    <td width="400" align="right" style="text-align: left;"><span style="font-family: 'Trebuchet MS' sans-serif; font-size: 14px;">
                                                            <span>Ваш персональный менеджер:</span><br>
                                                            <? echo $data['user_info']; ?>
                                                        </span></td>
                                                </tr>
                                            </table>
                                            <? endif;?>
                                        </td>
                                    </tr>
                            </table>
            </td>
            <td width="11" ><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
        </tr>
        <tr valign="bottom">
            <td colspan="3"><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
        </tr>
    </tbody>
</table>
</body>
</html>
