<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc091fbbf81fb43a42c7ef12560d178af
{
    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'ChrisKonnertz\\BBCode' => 
            array (
                0 => __DIR__ . '/..' . '/chriskonnertz/bbcode/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc091fbbf81fb43a42c7ef12560d178af::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc091fbbf81fb43a42c7ef12560d178af::$classMap;

        }, null, ClassLoader::class);
    }
}