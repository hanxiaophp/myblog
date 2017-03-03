<?php
namespace app\web\controller;
use app\web\controller\Base;
class Index extends Base
{
    public function index()
    {
        return self::$mview->fetch('/index');
    }
    public function guestbook()
    {
        return self::$mview->fetch('/guestbook');
    }
    public function learning()
    {
        return  self::$mview->fetch('/learn');
    }
    public function note()
    {
        self::$mview->assign('actionname', 'note');
        return  self::$mview->fetch('/riji');
    }
    public function photo()
    {
        self::$mview->assign('actionname', 'photo');
        return  self::$mview->fetch('/xc');
    }
    public function aboutme()
    {
        return self::$mview->fetch('/about');
    }
    public function shuo()
    {
        return self::$mview->fetch('/shuo');
    }
}
