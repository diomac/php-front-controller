<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7a9c4792793bcbceb2fbc9d5c864541
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Predis\\' => 7,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'D' => 
        array (
            'Diomac\\FrontController\\' => 23,
            'Diomac\\API\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Diomac\\FrontController\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Diomac\\API\\' => 
        array (
            0 => __DIR__ . '/..' . '/diomac/php-api-rest/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7a9c4792793bcbceb2fbc9d5c864541::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7a9c4792793bcbceb2fbc9d5c864541::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
