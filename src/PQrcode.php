<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/6/9
 * Time: 11:18
 */

namespace Qrcode;


class PQrcode
{
    static public function png($text, $outfile = false, $level = 'L', $size = 3, $margin = 4, $saveandprint=false)
    {
        require_once("phpqrcode.php");

        return \QRcode::png($text, $outfile, $level, $size, $margin, $saveandprint);
    }

}