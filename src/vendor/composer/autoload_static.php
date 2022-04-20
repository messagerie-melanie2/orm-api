<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38df98c26d1f0a1ba94f02b80f611456
{
    public static $files = array (
        '3a36fb0a6bafb8b516d4768ba4636f67' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/includes/includes_conf.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LibMelanie\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LibMelanie\\' => 
        array (
            0 => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Controller\\Addressbook' => __DIR__ . '/../..' . '/controller/addressbook.php',
        'Controller\\Calendar' => __DIR__ . '/../..' . '/controller/calendar.php',
        'Controller\\Contact' => __DIR__ . '/../..' . '/controller/contact.php',
        'Controller\\Controller' => __DIR__ . '/../..' . '/controller/controller.php',
        'Controller\\Event' => __DIR__ . '/../..' . '/controller/event.php',
        'Controller\\Share' => __DIR__ . '/../..' . '/controller/share.php',
        'Controller\\Task' => __DIR__ . '/../..' . '/controller/task.php',
        'Controller\\Taskslist' => __DIR__ . '/../..' . '/controller/taskslist.php',
        'Controller\\User' => __DIR__ . '/../..' . '/controller/user.php',
        'Lib\\Auth' => __DIR__ . '/../..' . '/lib/auth.php',
        'Lib\\Config' => __DIR__ . '/../..' . '/lib/config.php',
        'Lib\\Log' => __DIR__ . '/../..' . '/lib/log.php',
        'Lib\\Request' => __DIR__ . '/../..' . '/lib/request.php',
        'Lib\\Response' => __DIR__ . '/../..' . '/lib/response.php',
        'Lib\\Routing' => __DIR__ . '/../..' . '/lib/routing.php',
        'Lib\\Utils' => __DIR__ . '/../..' . '/lib/utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit38df98c26d1f0a1ba94f02b80f611456::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit38df98c26d1f0a1ba94f02b80f611456::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit38df98c26d1f0a1ba94f02b80f611456::$classMap;

        }, null, ClassLoader::class);
    }
}
