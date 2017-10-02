<?php

namespace core;

trait view
{

    /**
     * 模板赋值
     */
    public function assign($name, $data)
    {
        $this->assign[$name] = $data;
    }

    /**
     * 加载一个模板文件
     */
    public function display($file)
    {
        if (is_file(APP . 'views/' . $file)) {
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(APP . 'views/');
            $twig = new \Twig_Environment($loader, ['cache' => FLYPHP . '/log/template_cache', 'debug' => DEBUG,]);
            $this->assign('templatename', 'Twig template engine!');
            $this->assign('name', 'FLYPHP lightweight framework! Installation successful  ^_^!');
            $template = $twig->loadTemplate($file);
            $template->display($this->assign ? $this->assign : []);
        } else {
            header("HTTP/1.1 404 Not Found");
            header("Status: 404 Not Found");
        }
    }
}