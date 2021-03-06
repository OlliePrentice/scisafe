<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit614f02d027ec69e320ae251bdd3c5340
{
    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Detection' => 
            array (
                0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Mobile_Detect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/Mobile_Detect.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit614f02d027ec69e320ae251bdd3c5340::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit614f02d027ec69e320ae251bdd3c5340::$classMap;

        }, null, ClassLoader::class);
    }
}
