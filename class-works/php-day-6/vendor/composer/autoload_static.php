<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd97da833113456b666c5276bbf63da54
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd97da833113456b666c5276bbf63da54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd97da833113456b666c5276bbf63da54::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd97da833113456b666c5276bbf63da54::$classMap;

        }, null, ClassLoader::class);
    }
}
