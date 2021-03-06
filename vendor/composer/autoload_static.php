<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdbb3310c8429129709aff5e5745c217c
{
    public static $files = array (
        'cb41e0388a982d47dde4282046fbe505' => __DIR__ . '/../..' . '/app/Common/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chat\\sw\\' => 8,
        ),
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chat\\sw\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdbb3310c8429129709aff5e5745c217c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdbb3310c8429129709aff5e5745c217c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
