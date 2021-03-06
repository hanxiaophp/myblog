<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"D:\wamp\www\myblog\public/../application/web\view\index.html";i:1488531497;s:59:"D:\wamp\www\myblog\public/../application/web\view\head.html";i:1488531493;s:60:"D:\wamp\www\myblog\public/../application/web\view\right.html";i:1488531534;s:61:"D:\wamp\www\myblog\public/../application/web\view\footer.html";i:1488531486;}*/ ?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>个人博客</title>
    <meta name="keywords" content="个人博客" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="/static/web/css/index.css"/>
    <link rel="stylesheet" href="/static/web/css/style.css"/>
    <?php if(isset($actionname)): if($actionname == 'note'): ?>
        <link rel="stylesheet" href="css/animate.css">
        <?php endif; endif; ?>
</head>
<body>
<!--header start-->
<div id="header">
    <h1>个人博客</h1>
    <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>
</div>
<!--header end-->
<!--nav-->
<div id="nav">
    <ul>
        <li><a href="/">首页</a></li>
        <li><a href="/aboutme">关于我</a></li>
        <li><a href="/shuo">碎言碎语</a></li>
        <li><a href="/note">个人日记</a></li>
        <li><a href="/photo">相册展示</a></li>
        <li><a href="/learning">学无止境</a></li>
        <li><a href="/guestbook">留言板</a></li>
        <div class="clear"></div>
    </ul>
</div>
<!--nav end-->
<!--content start-->
<div id="content">
    <!--left-->
    <div class="left" id="c_left">
        <div class="s_tuijian">
            <h2>文章<span>推荐</span></h2>
        </div>
        <div class="content_text">
            <!--wz-->
            <div class="wz">
                <h3><a href="#" title="浅谈：html5和html的区别">浅谈：html5和html的区别</a></h3>
                <dl>
                <dt><img src="/static/web/images/s.jpg" width="200"  height="123" alt=""></dt>
                    <dd>
                    <p class="dd_text_1">最近看群里聊天聊得最火热的莫过于手机网站和html5这两个词。可能有人会问，这两者有什么关系呢？随着这移动互联
                    网快速发展的时代，尤其是4G时代已经来临的时刻，加上微软对"XP系统"不提供更新补丁、维护的情况下。
                    html5+css3也逐渐的成为新一代web前端技术.....</p>
                    <p class="dd_text_2">
                        <span class="left author">段亮</span><span class="left sj">时间:2014-8-9</span>
                        <span class="left fl">分类:<a href="#" title="学无止境">学无止境</a></span>
                        <span class="left yd"><a href="#" title="阅读全文">阅读全文</a></span>
                        <div class="clear"></div>
                    </p>
                    </dd>
                <div class="clear"></div>
                </dl>
            </div>
            <!--wz end-->
        </div>
    </div>
    <!--left end-->
    <!--right-->
<div class="right" id="c_right">
    <div class="s_about">
        <h2>关于博主</h2>
        <img src="/static/web/images/my.jpg" width="230" height="230" alt="博主"/>
        <p>博主：XX</p>
        <p>职业：web前端、视觉设计</p>
        <p>简介：</p>
        <p>
            <a href="#" title="联系博主"><span class="left b_1"></span></a><a href="#" title="加入QQ群，一起学习！"><span class="left b_2"></span></a>
        <div class="clear"></div>
        </p>
    </div>
    <!--栏目分类-->
    <div class="lanmubox">
        <div class="hd">
            <ul><li>精心推荐</li><li>最新文章</li><li class="hd_3">随机文章</li></ul>
        </div>
        <div class="bd">
            <ul>
                <li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
                <li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
                <li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
                <li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
                <li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
            </ul>
        </div>
    </div>
    <!--end-->
    <!--<div class="link">
        <h2>友情链接</h2>
        <p><a href="http://www.duanliang920.com">段亮个人博客</a></p>
    </div>-->
</div>
<!--right end-->
<div class="clear"></div>
</div>
<!--content end-->
<!--footer start-->
<div id="footer">
    <p></p>
</div>
<!--footer end-->
<script type="text/javascript" src="/static/web/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="/static/web/js/jquery.SuperSlide.2.1.1.js"></script>
<?php if(isset($actionname) && $actionname == 'photo'): ?>
<script type="text/javascript" src="/static/web/js/common.js"></script>
<script type="text/javascript" src="/static/web/js/waterfall.js" ></script>
<?php endif; ?>
<!--[if lt IE 9]>
<script src="/static/web/js/html5.js"></script>
<![endif]-->
<script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
<script  type="text/javascript" src="/static/web/js/nav.js"></script>
<?php if(isset($actionname) && $actionname == 'photo'): ?>
<script>
    var timer, m = 0, m1 = $("img[rel='lazy']").length;
    function fade() {
        $("img[rel='lazy']").each(function () {
            var $scroTop = $(this).offset();
            if ($scroTop.top <= $(window).scrollTop() + $(window).height()) {
                $(this).hide();
                $(this).attr("src", $(this).attr("lazy_src"));
                $(this).attr("top", $scroTop.top);
                $(this).removeAttr("rel");
                $(this).removeAttr("lazy_src");
                $(this).fadeIn(600);
                var _left = $(this).parent().parent().attr("_left");
                if (_left != undefined)
                    $(this).parent().parent().animate({ left: _left }, 400);
                m++;
            }
        });
        if (m < m1) { timer = window.setTimeout(fade, 300); }
        else { window.clearTimeout(timer); }
    }
    $(function () {
        $("#wf-main img[rel='lazy']").each(function (i) {
            var _left = $(this).parent().parent().css("left").replace("px", "");
            $(this).parent().parent().attr("_left", _left);
            $(this).parent().parent().css("left", 0);
        });
        fade();
    });
    $(".loading").hide();
    $("#wf-main").show();
</script>
<?php endif; ?>
</body>
</html>
