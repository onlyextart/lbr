<?php
    $email=str_replace(";","_",$data['email']);
    $email=str_replace(" ","",$email);

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
    <a href="http://www.lbr.ru/akcii/?sb=test_cookie&utm_medium=email&utm_term=test&ct=<?php echo SecurityController::encrypt($email);?>&lk=test" target="_blank">Ссылка</a><br>
      
<!-- Background grey; -->
</body>






