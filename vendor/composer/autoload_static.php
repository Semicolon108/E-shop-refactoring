<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf56b446f17ff06e2cd921d79d87519f0
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf56b446f17ff06e2cd921d79d87519f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf56b446f17ff06e2cd921d79d87519f0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf56b446f17ff06e2cd921d79d87519f0::$classMap;

        }, null, ClassLoader::class);
    }
}