<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class User extends Model{
    /**
     * @param $name 用户名
     * @param $pwd  密码
     * @param $rtime   cookie设置时间需要传入秒
     * @return bool
     * @throws \think\exception\PDOException
     */
    public function login($name, $pwd, $rtime = 0)
    {
        if (!$name || !$pwd) {
            return false;
        }
        $key = Config('adminUserPWDKey');
        $realPWD = md5($key.$pwd);
        $conn = Db::connect();
        $res = $conn->query('select password from adminuser where username=?', [$name]);
        if (!$res) {
            return false;
        }
        if ($res[0]['password'] === $realPWD) {
            if (!$rtime) {
                setcookie('loginUser', $name, 0);
            } elseif ($rtime > 0) {
                setcookie('loginUser', $name, $rtime);
            }
            return true;
        } else {
            return false;
        }
    }
}