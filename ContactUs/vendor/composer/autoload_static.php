<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe718bcb244e1bf075acf1788e0cfd7f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe718bcb244e1bf075acf1788e0cfd7f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe718bcb244e1bf075acf1788e0cfd7f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
