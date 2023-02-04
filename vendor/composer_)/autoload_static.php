<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit045ca7a6869ff65e6d8784389affbebb
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wfm\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wfm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/vender/wfm',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit045ca7a6869ff65e6d8784389affbebb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit045ca7a6869ff65e6d8784389affbebb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit045ca7a6869ff65e6d8784389affbebb::$classMap;

        }, null, ClassLoader::class);
    }
}
