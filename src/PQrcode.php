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
    /**
     * 调用原始方法
     * @param $text
     * @param bool $outfile
     * @param string $level
     * @param int $size
     * @param int $margin
     * @param bool $saveandprint
     */
    static public function png($text, $outfile = false, $level = 'L', $size = 3, $margin = 4, $saveandprint=false)
    {
        require_once("phpqrcode.php");

        return \QRcode::png($text, $outfile, $level, $size, $margin, $saveandprint);
    }

    /**
     * 获取QRcode类
     * @return string
     */
    static public function getQRcode()
    {
        require_once("phpqrcode.php");

        return \QRcode::class;
    }
}