<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc40fa57ddad70b604592f2992889b3a
{
    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'Qrcode\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Qrcode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Qrcode\\PQrcode' => __DIR__ . '/../..' . '/src/PQrcode.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc40fa57ddad70b604592f2992889b3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc40fa57ddad70b604592f2992889b3a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc40fa57ddad70b604592f2992889b3a::$classMap;

        }, null, ClassLoader::class);
    }
}