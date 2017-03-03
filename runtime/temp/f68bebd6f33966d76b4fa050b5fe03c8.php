<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"D:\wamp\www\myblog\public/../application/admin\view\login.html";i:1488531367;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link rel="stylesheet" href="/static/common/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/static/admin/css/login.css" />
</head>
<body>
    <form class="loginForm">
        <div class="form-group">
            <label for="exampleInputEmail1">用户名：</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">密码：</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default" style="margin-left:40%;">登录</button>
    </form>
</body>
</html>
<script type="text/javascript" src="/static/common/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/login.js"></script>