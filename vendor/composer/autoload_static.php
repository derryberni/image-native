<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit910537ba50712432285fe9d487b25b50
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Root\\ImageNative\\' => 17,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'M' => 
        array (
            'Mike42\\' => 7,
        ),
        'I' => 
        array (
            'Intervention\\Image\\' => 19,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Root\\ImageNative\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
            1 => __DIR__ . '/..' . '/psr/http-factory/src',
        ),
        'Mike42\\' => 
        array (
            0 => __DIR__ . '/..' . '/mike42/gfx-php/src/Mike42',
        ),
        'Intervention\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit910537ba50712432285fe9d487b25b50::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit910537ba50712432285fe9d487b25b50::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit910537ba50712432285fe9d487b25b50::$classMap;

        }, null, ClassLoader::class);
    }
}
