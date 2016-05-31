<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="login-bg">
<head>
	<title>登陆</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <!-- bootstrap -->
    <link href="__ROOT__/Public/index/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="__ROOT__/Public/index/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="__ROOT__/Public/index/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="__ROOT__/Public/index/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Public/index/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Public/index/css/icons.css" />

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="__ROOT__/Public/index/css/lib/font-awesome.css" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="__ROOT__/Public/index/css/compiled/signin.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>


    <!-- background switcher -->
    <div class="bg-switch visible-desktop">
        <div class="bgs">
            <a href="#" data-img="landscape.jpg" class="bg active">
                <img src="__ROOT__/Public/index/img/bgs/landscape.jpg" />
            </a>
            <a href="#" data-img="blueish.jpg" class="bg">
                <img src="__ROOT__/Public/index/img/bgs/blueish.jpg" />
            </a>            
            <a href="#" data-img="7.jpg" class="bg">
                <img src="__ROOT__/Public/index/img/bgs/7.jpg" />
            </a>
            <a href="#" data-img="8.jpg" class="bg">
                <img src="__ROOT__/Public/index/img/bgs/8.jpg" />
            </a>
            <a href="#" data-img="9.jpg" class="bg">
                <img src="__ROOT__/Public/index/img/bgs/9.jpg" />
            </a>
            <a href="#" data-img="10.jpg" class="bg">
                <img src="__ROOT__/Public/index/img/bgs/10.jpg" />
            </a>
            <a href="#" data-img="11.jpg" class="bg">
                <img src="__ROOT__/Public/index/img/bgs/11.jpg" />
            </a>
        </div>
    </div>


    <div class="row-fluid login-wrapper">
        <a href="index.php">
         
        </a>

        <div class="span4 box">
                <div class="content-wrap">
                  <form method="" action="">  
                        <h6>登         陆</h6>                  
                        <input class="span12" type="text" placeholder="请输入您的用户名" />
                        <input class="span12" type="password" placeholder="请输入您的密码" />
                        <a href="#" class="forgot">忘记密码?</a>
                        <div class="remember">
                            <input id="remember-me" type="checkbox" />
                            <label for="remember-me">记住密码</label>
                        </div>
                        <input type="submit" class="btn-glow primary login" value="提交">
                    </div>
            </form>
        </div>
    
        <div class="span4 no-account">
            <p>Don't have an account?</p>
            <a href="">注册</a>
        </div>
    </div>

	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="__ROOT__/Public/index/js/bootstrap.min.js"></script>
    <script src="__ROOT__/Public/index/js/theme.js"></script>

    <!-- pre load bg imgs -->
    <script type="text/javascript">
        $(function () {
            // bg switcher
            var $btns = $(".bg-switch .bg");
            $btns.click(function (e) {
                e.preventDefault();
                $btns.removeClass("active");
                $(this).addClass("active");
                var bg = $(this).data("img");

                $("html").css("background-image", "url('__ROOT__/Public/index/img/bgs/" + bg + "')");
            });

        });
    </script>
</body>
</html>