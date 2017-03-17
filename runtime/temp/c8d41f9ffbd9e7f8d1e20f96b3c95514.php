<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"D:\wamp\www\myblog\public/../application/web\view\shuo.html";i:1488531541;s:59:"D:\wamp\www\myblog\public/../application/web\view\head.html";i:1488531493;s:61:"D:\wamp\www\myblog\public/../application/web\view\footer.html";i:1488531486;}*/ ?>
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
<div id="say">
    <div class="weizi">
        <div class="wz_text">当前位置：<a href="#">首页</a>><h1>碎言碎语</h1></div>
    </div>
    <ul class="say_box">
        <div class="sy">
            <p> 那个可以任意挥霍的年纪，人们叫它'青春'。</p>
        </div>
        <span class="dateview">2014-5-31</span>
    </ul>
    <ul class="say_box">
        <div class="sy">
            <p> 过去就像回形针，把青春一页页的固定，然后变成了一本不被出版的书。</p>
        </div>
        <span class="dateview">2014-5-31</span>
    </ul>
    <ul class="say_box">
        <div class="sy">
            <p> 时间好象一把尺子，它能衡量奋斗者前进的进程。
                时间如同一架天平，它能称量奋斗者成果的重量；
                时间就像一把皮鞭，它能鞭策我们追赶人生的目标。时间犹如一面战鼓，它能激励我们加快前进的脚步。</p>
        </div>
        <span class="dateview">2014-5-31</span>
    </ul>
    <ul class="say_box">
        <div class="sy">
            <p>青春，一半明媚，一半忧伤。
                它是一本惊天地泣鬼神的着作，而我们却读的太匆忙。
                于不经意间，青春的书籍悄然合上，以至于我们要重新研读它时，
                却发现青春的字迹早已落满尘埃，模糊不清。</p>
        </div>
        <span class="dateview">2014-5-31</span>
    </ul>
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
