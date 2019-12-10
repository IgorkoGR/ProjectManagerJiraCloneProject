<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a5d75baa6a913da4da8bd8860f57f1d
{
    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'form\\model\\' => 11,
            'form\\controller\\' => 16,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'form\\model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/apps/form/model',
        ),
        'form\\controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/apps/form/controller',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a5d75baa6a913da4da8bd8860f57f1d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a5d75baa6a913da4da8bd8860f57f1d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
