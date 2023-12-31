<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6d056c5a0c3b0685318c9c7770dce4d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fazpass\\Phpseamless\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fazpass\\Phpseamless\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite6d056c5a0c3b0685318c9c7770dce4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6d056c5a0c3b0685318c9c7770dce4d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite6d056c5a0c3b0685318c9c7770dce4d::$classMap;

        }, null, ClassLoader::class);
    }
}
