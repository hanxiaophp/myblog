<?php
namespace app\web\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $this->assign('cc', '哈哈哈哈');
        return $this->fetch('\index');
    }
}
