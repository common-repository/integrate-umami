<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ced79c8b7403fc79243204829f952e5
{
    public static $classMap = array (
        'Ancozockt\\Umami\\Manager' => __DIR__ . '/../..' . '/inc/class-manager.php',
        'Ancozockt\\Umami\\Options' => __DIR__ . '/../..' . '/inc/class-options.php',
        'Ancozockt\\Umami\\Settings' => __DIR__ . '/../..' . '/inc/class-settings.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit5ced79c8b7403fc79243204829f952e5::$classMap;

        }, null, ClassLoader::class);
    }
}
