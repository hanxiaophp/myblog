<?php
namespace app\web\controller;
use app\web\controller\Base;
class Index extends Base
{
    public function index()
    {
        return $this->view->fetch('/index');
    }
    public function guestbook()
    {
        return $this->view->fetch('/guestbook');
    }
    public function learning()
    {
        return  $this->view->fetch('/learn');
    }
    public function note()
    {
        $this->view->assign('actionname', 'note');
        return  $this->view->fetch('/riji');
    }
    public function photo()
    {
        $this->view->assign('actionname', 'photo');
        return  $this->view->fetch('/xc');
    }
    public function aboutme()
    {
        return $this->view->fetch('/about');
    }
    public function shuo()
    {
        return $this->view->fetch('/shuo');
    }
}
