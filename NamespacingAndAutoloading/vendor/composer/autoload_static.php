<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73d1536b547208f6c507eac27e8a5632
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit73d1536b547208f6c507eac27e8a5632::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73d1536b547208f6c507eac27e8a5632::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit73d1536b547208f6c507eac27e8a5632::$classMap;

        }, null, ClassLoader::class);
    }
}
