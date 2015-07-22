<?php

class SecurityController extends Controller
{
    public static function encrypt($text, $key = '!@#$%^&*')
    {
        return Yii::app()->securityManager->encrypt($text, $key);//trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))));
    }
    
    public static function decrypt($text, $key = '!@#$%^&*') 
    { 
        return Yii::app()->securityManager->decrypt($text, $key);//trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($text), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))); 
    }
}
