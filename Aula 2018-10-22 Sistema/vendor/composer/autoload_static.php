<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7e88c780110d52914665fe5eb369792
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
            0 => __DIR__ . '/../..' . '/Sistema/Classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7e88c780110d52914665fe5eb369792::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7e88c780110d52914665fe5eb369792::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
