<?php

if (!function_exists('p')) {
    function p($var)
    {
        if (is_cli()) {
            if (is_array($var) || is_object($var)) {
                dump($var);
            } else {
                echo PHP_EOL;
                echo "\e[31m" . $var . "\e[37m" . PHP_EOL;
                echo PHP_EOL;
            }
        } else {
            if (is_bool($var)) {
                var_dump($var);
            } else if (is_null($var)) {
                var_dump(NULL);
            } else {
                echo "<pre style='position:relative;z-index:1000;padding:10px;border-radius:5px;background:#F5F5F5;border:1px solid #aaa;font-size:14px;line-height:18px;opacity:0.9;'>" . print_r($var, true) . "</pre>";
            }
        }
    }
}

if (!function_exists('redirect')) {
    function redirect($str)
    {
        header('Location:' . $str);
    }
}


if (!function_exists('http_method')) {
    function http_method()
    {
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            return 'POST';
        } else {
            return 'GET';
        }
    }
}

if (!function_exists('json')) {
    function json($array)
    {
        header('Content-Type:application/json; charset=utf-8');
        echo json_encode($array);
    }
}

if (!function_exists('show404')) {
    function show404()
    {
        header('HTTP/1.1 404 Not Found');
        header("status: 404 Not Found");
        exit();
    }
}