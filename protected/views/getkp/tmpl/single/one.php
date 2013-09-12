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
                        <td><span style="color: black; background: none !important; font-size: 16px; font-weight: bold; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;"> Уважаемый <? echo $data['client']; ?>! </span> <br /> <span style="color: #6e7071; background: none !important; font-size: 16px; font-weight: normal; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;"><? echo $data['header']; ?> </span></td>
                        <td width="160" align="right"><span style="text-decoration: none;"><a style="text-decoration: none;" href="http://www.lbr.ru/" target="_blank"><img src="http://www.lbr.ru/images/kp/logo.jpg" alt="Логотип ЛБР-Агромаркет" width="150" height="100" border="0" /></a></span></td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>
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
                                                                $desc = str_replace(array('<p>', '</p>', '{price1}', '{price2}', '{price3}'), array('<span>', '</span>', $data['price1'], $data['price2'], $data['price3']), $template->description);
                                                                echo $desc;
                                                            ?>
                                                        </td>
                                                        <td width="196" valign="top">
                                                            <? 
                                                                $small = explode('||', $template->small_image);
                                                                foreach ($small as $img) {
                                                                    echo '<img width="190" src="http://www.git-lbr.ru'.$img.'" style="display: block;"/>';
                                                                    echo '<img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/>';
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                                    <td><span style="font-family: Calibri, sans-serif; font-size: 14px;"><? echo $data['filial_bottom'];?></span></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    </tr>
                                    <tr style="border-top: 2px solid grey;">
                                        <td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                                <tr>
                                                    <td width="10"><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                                    <td>
                                                        <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold;">Ждем Вас в филиале ЛБР-АгроМаркет (<? echo $filial['name']; ?>)!</span><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                                    <td>
                                                        <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['work_time']; ?></span><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                                    <td>
                                                        <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['address']; ?></span><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                                    <td>
                                                        <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold;"><? echo $filial['telephone']; ?></span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block;"/></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                                                <tr>
                                                    <td width="5"><img src="http://www.git-lbr.ru/images/kp/10.gif" style="display: block; width: 7px;"/></td>
                                                    <td width="400" align="right" style="text-align: left;"><span style="font-family: Calibri, sans-serif; font-size: 14px;">
                                                            Ваш персональный менеджер:<br>
                                                            <? echo $data['user_info']; ?>
                                                        </span></td>
                                                </tr>
                                            </table>
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
