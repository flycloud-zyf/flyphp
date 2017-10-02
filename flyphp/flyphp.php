<?php


class flyphp
{

    public static $initialized = false;
    public static $inits = [];

    public static function init($callable)
    {
        self::$inits[] = $callable;
    }

    /**
     * 自动加载注册
     * @param string $class
     */
    public static function autoload($class)
    {
        //支持'_'加载
        if (false !== strpos($class, '_')) {
            $path = __DIR__ . '/' . str_replace('_', '/', $class) . '.php';
            list(, $className) = explode('_', $class);
            $class = $className;
        }

        $path = __DIR__ . '/' . $class . '.php';

        if (!file_exists($path)) {
            return;
        }
        require $path;
        //call_user_func($init);
    }

    /**
     * 框架初始化
     * */
    public static function run()
    {
        //路由加载
        $request = new core\route();

        $ctrlClass = '\\' . MODULE . '\ctrl\\' . $request->ctrl . 'Ctrl';

        $action = $request->action;
        $ctrlFile = APP . 'ctrl/' . $request->ctrl . 'Ctrl.php';

        if (is_file($ctrlFile)) {
            include $ctrlFile;
        } else {
            show404();
        }
        $ctrl = new $ctrlClass();
        //restful
        if (\core\config::get('OPEN_RESTFUL', 'system')) {
            $action = strtolower($request->method()) . ucfirst($action);
        }
        $ctrl->$action();
    }

}

