<?php
session_start();
date_default_timezone_set("Asia/Shanghai");
define('RUNING_TIME', $_SERVER['REQUEST_TIME']);
define('FLYPHP_VERSION', '1.0.0');

//cli模式
if(PHP_SAPI == 'cli'){
    exit('CLI mode is not supported');
}

if(DEBUG) {
    //Whoops错误信息
    $flyWhoops = new \Whoops\Run;
    $errorPage = new \Whoops\Handler\PrettyPageHandler;
    $errorPage->setPageTitle("FLYPHP error message!");
    $flyWhoops->pushHandler($errorPage);
    $flyWhoops->register();
}

//加载function库
include CORE . 'function/function.php';

//加载入口文件
include FLYPHP_PATH . 'flyphp.php';

//注册自动加载
spl_autoload_register('flyphp::autoload');

if (PHP_SAPI == 'cli') {
    //todo ...
} else {
    //\flyphp\flyphp::run();
    flyphp::run();
}
