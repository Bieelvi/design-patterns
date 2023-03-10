<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit680ce5049d1b9326d878001affc2c8ba
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit680ce5049d1b9326d878001affc2c8ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit680ce5049d1b9326d878001affc2c8ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit680ce5049d1b9326d878001affc2c8ba::$classMap;

        }, null, ClassLoader::class);
    }
}
