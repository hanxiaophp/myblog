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
    protected static $mview = null;

    public function __construct()
    {
        //初始化视图
        self::$mview = new Controller();
        //检查用户是否登录
    }
}