<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d325940b8277b5fd97b76c2ca2cdd37
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'public\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'public\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d325940b8277b5fd97b76c2ca2cdd37::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d325940b8277b5fd97b76c2ca2cdd37::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}