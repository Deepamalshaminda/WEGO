<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa876a3203c5b1ed0b73283ea3e2beb9
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa876a3203c5b1ed0b73283ea3e2beb9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa876a3203c5b1ed0b73283ea3e2beb9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa876a3203c5b1ed0b73283ea3e2beb9::$classMap;

        }, null, ClassLoader::class);
    }
}
