<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc792184ac266a85658b142a6ded261b4
{
    public static $files = array (
        'fc73bab8d04e21bcdda37ca319c63800' => __DIR__ . '/..' . '/mikecao/flight/flight/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Korisnik\\RecipesApp\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Korisnik\\RecipesApp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc792184ac266a85658b142a6ded261b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc792184ac266a85658b142a6ded261b4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc792184ac266a85658b142a6ded261b4::$classMap;

        }, null, ClassLoader::class);
    }
}
