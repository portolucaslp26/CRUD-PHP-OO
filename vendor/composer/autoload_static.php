<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit24031e380ec700f5fc30b5dd89f69819
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit24031e380ec700f5fc30b5dd89f69819::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit24031e380ec700f5fc30b5dd89f69819::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit24031e380ec700f5fc30b5dd89f69819::$classMap;

        }, null, ClassLoader::class);
    }
}
