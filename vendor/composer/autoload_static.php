<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20904728172410f92dd1cdc6d67252a4
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit20904728172410f92dd1cdc6d67252a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20904728172410f92dd1cdc6d67252a4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
