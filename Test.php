<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/6/9
 * Time: 11:08
 */
require_once 'vendor/autoload.php';
date_default_timezone_set('PRC');

class Test
{
    public function getTest()
    {
        var_dump(\Qrcode\PQrcode::png('PHP QR Code :)'));
    }


}

(new Test())->getTest();