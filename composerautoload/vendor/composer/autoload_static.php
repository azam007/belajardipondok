<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4dbe8ad0c8f312ff9945730617189a49
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Animals\\Lion' => __DIR__ . '/../..' . '/App/Animals/lion.php',
        'App\\Cars\\Car' => __DIR__ . '/../..' . '/App/Cars/Car.php',
        'App\\Countries\\Country' => __DIR__ . '/../..' . '/App/Countries/Country.php',
        'App\\Countries\\Indonesia' => __DIR__ . '/../..' . '/App/Countries/Indonesia.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4dbe8ad0c8f312ff9945730617189a49::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4dbe8ad0c8f312ff9945730617189a49::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4dbe8ad0c8f312ff9945730617189a49::$classMap;

        }, null, ClassLoader::class);
    }
}
