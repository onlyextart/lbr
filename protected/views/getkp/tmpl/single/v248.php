<?php
    $email=str_replace(";","_",$data['email']);
    $email=str_replace(" ","",$email);
    $email1="";
    $email2="test1_mail@lbr.ru";
    $email3="test1_mail@lbr.ru_test2_mail@lbr.ru";
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <style>
        p{mso-line-height-rule:exactly !important; line-height: 13pt;}
        a, a:active, a:visited{color:black;}
    </style>
</head>
<body style="background: #eeeeee; margin: 0; padding: 0; border: 0;">
    <style>
        p{mso-line-height-rule: exactly !important; line-height: 13pt;}
        a, a:active, a:visited{color:black;}
    </style>
   <!--<a href="http://www.lbr.ru/akcii/?sb=test_cookie&utm_medium=email&utm_term=test&ct=<?php //echo SecurityController::encrypt($email1);?>&lk=test" target="_blank">Ссылка1</a><br>-->
    <a href="http://www.lbr.ru/akcii/?sb=test_cookie&utm_medium=email&utm_term=test&ct=<?php echo SecurityController::encrypt($email2);?>&lk=test" target="_blank">Ссылка2</a><br>
    <a href="http://www.lbr.ru/akcii/?sb=test_cookie&utm_medium=email&utm_term=test&ct=<?php echo SecurityController::encrypt($email3);?>&lk=test" target="_blank">Ссылка c 2 email</a><br>
       
<!-- Background grey; -->
</body>






