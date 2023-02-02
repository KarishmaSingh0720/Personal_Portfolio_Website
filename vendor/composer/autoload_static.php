<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19eb99a7a31e680c0b49e5092d88080e
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit19eb99a7a31e680c0b49e5092d88080e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19eb99a7a31e680c0b49e5092d88080e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit19eb99a7a31e680c0b49e5092d88080e::$classMap;

        }, null, ClassLoader::class);
    }
}
