<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91470d93f5c2fcbae3f1d88b0d1aa630
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'paytmpg\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'paytmpg\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JsonMapper' => 
            array (
                0 => __DIR__ . '/..' . '/netresearch/jsonmapper/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit91470d93f5c2fcbae3f1d88b0d1aa630::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91470d93f5c2fcbae3f1d88b0d1aa630::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit91470d93f5c2fcbae3f1d88b0d1aa630::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
