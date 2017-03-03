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
        $conn = Db::connect();
        if (!$conn) {
            return false;
        }
        $res =  Db::query('select * from `user`');
        $username = $res[0]['username'];
        self::$mview->assign('a', $res[0]['username']);
        self::$mview->fetch('ask/index');
    }
}