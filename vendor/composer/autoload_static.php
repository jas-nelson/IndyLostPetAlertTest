<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca57507e92e808f044f13ac3c64b93be
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitca57507e92e808f044f13ac3c64b93be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca57507e92e808f044f13ac3c64b93be::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}