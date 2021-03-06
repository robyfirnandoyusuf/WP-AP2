<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0de53f50c48262b14df1309d623c5d0
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LLMS\\' => 5,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LLMS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WP_Async_Request' => __DIR__ . '/..' . '/deliciousbrains/wp-background-processing/classes/wp-async-request.php',
        'WP_Background_Process' => __DIR__ . '/..' . '/deliciousbrains/wp-background-processing/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0de53f50c48262b14df1309d623c5d0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0de53f50c48262b14df1309d623c5d0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc0de53f50c48262b14df1309d623c5d0::$classMap;

        }, null, ClassLoader::class);
    }
}
