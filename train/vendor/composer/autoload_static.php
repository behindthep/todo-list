<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita473f696dd97cf7311088a19aad791bc
{
    public static $files = array (
        '23f09fe3194f8c2f70923f90d6702129' => __DIR__ . '/..' . '/illuminate/collections/functions.php',
        '60799491728b879e74601d83e38b2cad' => __DIR__ . '/..' . '/illuminate/collections/helpers.php',
        'c9557e7edca8eed670dd0132c869503e' => __DIR__ . '/../..' . '/src/Runner.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
        'A' => 
        array (
            'Alex\\Train\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/collections',
            1 => __DIR__ . '/..' . '/illuminate/conditionable',
            2 => __DIR__ . '/..' . '/illuminate/macroable',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Alex\\Train\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita473f696dd97cf7311088a19aad791bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita473f696dd97cf7311088a19aad791bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita473f696dd97cf7311088a19aad791bc::$classMap;

        }, null, ClassLoader::class);
    }
}