<?php
/**
 * Created by PhpStorm.
 * User: hanxiao
 * Date: 2017/2/16
 * Time: 10:51
 */
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Config;
use think\Db;

class Index extends Base{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $user = model('User');
        $user->login('admin','kzkx666!');
    }
    public function login()
    {
        return $this->view->fetch('/login');
    }
    public function userLogin()
    {
        //校验用户登录密码
        $username = $_POST['username'];
    }
}