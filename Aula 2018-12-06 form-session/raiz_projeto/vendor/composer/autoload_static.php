<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef06789aec735e20cfab305dcb84c9b5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef06789aec735e20cfab305dcb84c9b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef06789aec735e20cfab305dcb84c9b5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
