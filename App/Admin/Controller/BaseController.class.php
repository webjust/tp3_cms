<?php

namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller
{
    /**
     * 初始化方法
     */
    public function _initialize()
    {
        if (!$this->checkIsLogin()) {
            $this->redirect('Login/login');
        }
    }

    public function checkIsLogin()
    {
        return true;
    }
}