<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ae3d52076d31e5c794b9e28b4aa7719
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'ValidateCI\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ValidateCI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/ValidateCI',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ae3d52076d31e5c794b9e28b4aa7719::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ae3d52076d31e5c794b9e28b4aa7719::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
