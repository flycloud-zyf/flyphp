<?php

namespace core;

class config
{
    public static $config = [];

    /**
     * 加载系统配置
     */
    public static function get($name, $file = 'config')
    {
        if (isset(self::$config[$file][$name])) {
            return self::$config[$file][$name];
        } else {
            $config = APP . 'config/' . $file . '.php';
            if (is_file($config)) {
                self::$config[$file] = include $config;
                return isset(self::$config[$file][$name]) ? self::$config[$file][$name] : false;
            } else {
                return false;
            }
        }

    }

    /**
     * 加载整个配置文件
     */
    static public function all($file)
    {
        if (isset(self::$config[$file])) {
            return self::$config[$file];
        } else {
            $config = APP . '/config/' . $file . '.php';
            if (is_file($config)) {
                self::$config[$file] = include $config;
                return self::$config[$file];
            } else {
                return;
            }
        }
    }
}