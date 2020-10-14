<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf77861db4f9e1a1c59c5a1ae5baefa2e
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tools\\' => 6,
        ),
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf77861db4f9e1a1c59c5a1ae5baefa2e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf77861db4f9e1a1c59c5a1ae5baefa2e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}