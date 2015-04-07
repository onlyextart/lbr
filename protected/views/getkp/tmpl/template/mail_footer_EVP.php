            <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
                <tr>
                    <td style="padding: 25px 20px 10px 20px; background: white;">
                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;">Всю подробную информацию по заинтересовавшим Вас моделям техники, а также опыт эксплуатации и отзывы потребителей Вы сможете получить у Вашего персонального менеджера. </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0 20px; background: white;">
                       <table style="border-collapse: collapse;" width="760" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                            <tr>
                                <td><span style="font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">Ждем Вас в филиале ЛБР-АгроМаркет (<b><?php echo $filial['name']; ?></b>)!</span><br></td>
                            </tr>
                            <tr>
                                <td><span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $filial['work_time']; ?></span><br></td>
                            </tr>
                            <tr>
                                <td><span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $filial['address']; ?></span><br></td>
                            </tr>
                            <tr>
                                <td><span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $filial['telephone']; ?></span></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 20px; background: white;">
                        <?php echo AuthUser::getPasteboard($data['login'], 'email'); ?>
                    </td>
                </tr>
                </table>
            <!-- Background grey; -->
        </td>
    </tr>
</table>
<!-- Background grey; -->
</body>