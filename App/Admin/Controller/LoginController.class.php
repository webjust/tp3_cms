<?php

namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function login()
    {
        if ($this->checkIsLogin()) {
            $this->redirect('Index/index');
        }
        $this->display();
    }

    public function checkIsLogin()
    {
        return true;
    }
}