<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite6810f2312d5ac3f7d90dffc6cb5c96b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInite6810f2312d5ac3f7d90dffc6cb5c96b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite6810f2312d5ac3f7d90dffc6cb5c96b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite6810f2312d5ac3f7d90dffc6cb5c96b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
