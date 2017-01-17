<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit804967b99cdec47c5dbfc4ed2ce5b0fb
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LLMS\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LLMS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit804967b99cdec47c5dbfc4ed2ce5b0fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit804967b99cdec47c5dbfc4ed2ce5b0fb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}