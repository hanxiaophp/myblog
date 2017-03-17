<?php
/**
 * Created by PhpStorm.
 * User: hanxiao
 * Date: 2017/2/16
 * Time: 13:30
 */
namespace app\admin\controller;
use think\Controller;
class Base extends Controller{
    public function __construct()
    {
        \think\Func::filterData();
        if (empty($_COOKIE['loginUser'])) {
            header("Location:/admin/login");
        }
    }
}