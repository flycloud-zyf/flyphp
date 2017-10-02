<?php
//根目录
define('ROOT_DIRECTORY', realpath(__DIR__ . '/../'));

//网站当前路径
define('FLYPHP', realpath(__DIR__));
//define('SITE_PATH', getcwd());
define('SITE_PATH', str_replace('\\', '/', getcwd()));

//FlyPHP核心
define('FLYPHP_PATH', './flyphp/');

//调试模式
define('DEBUG', true);
if (DEBUG) {
    ini_set('display_errors', true);
} else {
    ini_set('display_errors', false);
}

//系统路径
define('CORE', FLYPHP . '/flyphp/core/');
define('APP', FLYPHP . '/app/');
define('MODULE', 'app');

//composer
include FLYPHP . '/vendor/autoload.php';

//启动框架
include FLYPHP_PATH . 'init.php';