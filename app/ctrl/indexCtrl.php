<?php
/**
 * 控制器
 */

namespace app\ctrl;

use core\view;

class indexCtrl extends \flyphp
{
    use view;

    public function index()
    {
        $this->display('index/index.html');
    }
}