<?php
namespace app\web\controller;
use think\Controller;

class Base extends Controller{
    protected static $mview = null;
    public function __construct()
    {
        self::$mview = new Controller();
    }
}