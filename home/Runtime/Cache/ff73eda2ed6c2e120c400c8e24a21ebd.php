<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <!---->
    <!--
		<title>123</title>
-->
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
    <link href="__ROOT__/Public/index/css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="__ROOT__/Public/index/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="__ROOT__/Public/index/css/lib/morris.css" type="text/css" rel="stylesheet" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="__ROOT__/Public/index/css/compiled/chart-showcase.css" type="text/css" media="screen" />

    <!-- open sans font 
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />
-->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>


     <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <a class="brand" href="__ROOT__/index.php/User/user"><img src="__ROOT__/Public/index/img/logo.png" /></a>
            </div>
            </div>
              <!-- navbar           
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="__SELF__">主页</a></li>
                    <li ><a href="__ROOT__/index.php/Index/AllList">信息列表</a></li>
                    <li ><a href="__ROOT__/index.php/Index/detail">详情</a></li>
                    <li><a href="__ROOT__/index.php/Index/signin">登陆</a></li>
                </ul>
            </div>
            <ul class="nav pull-right">
                <li class="hidden-phone">
                    <input class="search" type="text" />
            </li>
                          <li class="notification-dropdown hidden-phone">
                    <a href="#" class="trigger">
                        <i class="icon-warning-sign"></i>
                        <span class="count">8</span>
                    </a>
             </li> 
              <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                            <div class="notifications">
                                <!--<h3>You have 6 new notifications</h3>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> New user registration
                                    <span class="time"><i class="icon-time"></i> 13 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> New user registration
                                    <span class="time"><i class="icon-time"></i> 18 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-envelope-alt"></i> New message from Alejandra
                                    <span class="time"><i class="icon-time"></i> 28 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> New user registration
                                    <span class="time"><i class="icon-time"></i> 49 min.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-download-alt"></i> New order placed
                                    <span class="time"><i class="icon-time"></i> 1 day.</span>
                                </a>
                                <div class="footer">
                                    <a href="#" class="logout">View all notifications</a>
                                </div>
                            </div>
                        </div>
                </div>
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
                        Your account
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <!--<li><a href="">Personal info</a></li>
                        <li><a href="#">Account settings</a></li>
                        <li><a href="#">Billing</a></li>
                        <li><a href="#">Export your data</a></li>
                        <li><a href="#">Send feedback</a></li>
                    </ul>   
             </li>       
              <li class="settings hidden-phone">
                    <a href="" role="button">
                        <i class="icon-cog"></i>
                    </a>
                </li>
                <li class="settings hidden-phone">
                    <a href="signin.html" role="button">
                        <i class="icon-share-alt"></i>
                    </a>
                </li>        
            </ul>
        </div>
    </div>-->
    <!-- end navbar -->

	<!-- main container .wide-content is used for this layout without sidebar :)  -->
    <div class="content wide-content">
        <div class="container-fluid">
            <div class="settings-wrapper" id="pad-wrapper">
                <!-- avatar column -->
                <div class="span2 avatar-box">
                    <div class="personal-image">
                        <img src="<?php echo ($user['headimgurl']); ?>" width="200px" style="margin-left:50px;" class="avatar img-circle" />
                    </div>
                </div>
                <!-- edit form column -->
                <div class="span7 personal-info">
                <a href="__ROOT__/index.php/User/prize">
                    <div class="alert alert-info">
                        <i class="icon-lightbulb"></i>
                         <strong>参与抽奖</strong> 
                    </div>
                    </a>
                    <h4 class="personal-title">个人信息</h4>

                    <form action="" method="post">
                        <div class="field-box">
                            <label>姓        名:</label>
                            <input class="span5 inline-input" type="text" value="<?php echo ($user['nickname']); ?>" name="name" />
                        </div>
                        <div class="field-box">
                            <label>姓        别:</label>
                            <input class="span5 inline-input" type="text" value="<?php echo ($user['sex']); ?>" name="sex" />
                        </div>                        
                        <div class="field-box">
                            <label>年   龄:</label>
                            <input class="span5 inline-input" type="text" value="<?php echo ($user['age']); ?>"  name="age" />
                        </div>
                        <div class="field-box">
                            <label>电话:</label>
                            <input class="span5 inline-input" type="text" value="<?php echo ($user['tel']); ?>" name="tel" />
                        </div>
                        <div class="field-box">
                            <label>邮件:</label>
                            <input class="span5 inline-input" type="text" value="<?php echo ($user['email']); ?>" name="email" />
                        </div>
                        <div class="field-box">
                            <label>地区:</label>                            
                                 <input class="span5 inline-input" type="text" value="<?php echo ($user['province']); ?>" name="adds" />
                        </div>
                        <div class="span6 field-box actions">
                            <input type="submit" class="btn-glow primary" value="保存修改" />
                            <span>OR</span>
                            <a href="__ROOT__/index.php/Index/AllList"><input type="button" class="btn-glow primary" value="返回" class="reset" /></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end main container -->
	<!-- scripts -->
    <script src="__ROOT__/Public/index/js/bootstrap.min.js"></script>
    <script src="__ROOT__/Public/index/js/theme.js"></script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>