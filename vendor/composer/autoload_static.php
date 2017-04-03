<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8117a734560d30036fddbb92d55ec5ca
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CaT\\Libs\\ExcelWrapper\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CaT\\Libs\\ExcelWrapper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8117a734560d30036fddbb92d55ec5ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8117a734560d30036fddbb92d55ec5ca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}