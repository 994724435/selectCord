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

    <!-- navbar   
     <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <a class="brand" href="__ROOT__/index.php/User/user"><img src="__ROOT__/Public/index/img/logo.png" /></a>
            </div>
            </div>
                  
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



    <!-- main container -->
   <div class="content">
        
        <!-- settings changer -->
        <!--  <div class="skins-nav">
          <a href="#" class="skin first_nav selected">
                <span class="icon"></span><span class="text">Default</span>
            </a>
            <a href="#" class="skin second_nav" data-file="__ROOT__/Public/index/css/skins/dark.css">
                <span class="icon"></span><span class="text">Dark skin</span>
            </a>
        </div>-->
        
        <div class="container-fluid">
            <div id="pad-wrapper" class="user-profile">
                <!-- header -->
                <div class="row-fluid header">
                    <div class="span8">
                      <!--    <img src="__ROOT__<?php echo ($list["Lsmall_img"]); ?>" class="avatar img-circle" />-->
                        <h3 class="name"><?php echo ($list["Lname"]); ?></h3><br><br>
                        <span class="area">录入时间：<?php echo ($list["Ltime"]); ?></span>&nbsp&nbsp
                        <span class="area">所在地点：<?php echo ($list["Lplace"]); ?></span>&nbsp&nbsp
                        <span class="area">负责人 ：<?php echo ($list["Ladmin"]); ?></span>
                </div>
                      
                   
                <div class="row-fluid profile">
                    <!-- bio, new note & orders column -->
                    <div class="span9 bio">
                        <div class="profile-box">
                            <!-- biography -->
                                          <h6>视频介绍</h6>  
              <!--<p>http://movie.ks.js.cn/flv/other/1_0.mp4</p>-->
<div id="video" style="position:relative;z-index: 10;float: left;margin-buttom:30px;"><div id="a1"></div></div>
<script type="text/javascript" src="__ROOT__/Public/index/js/ckplayer/ckplayer.js" charset="utf-8"></script>
<script type="text/javascript">
	var flashvars={
		f:'http://movie.ks.js.cn/flv/other/1_0.flv',
		c:0,
		b:1
		};
	var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always'};
	CKobject.embedSWF('ckplayer/ckplayer.swf','a1','ckplayer_a1','600','400',flashvars,params);
	/*
	CKobject.embedSWF(播放器路径,容器id,播放器id/name,播放器宽,播放器高,flashvars的值,其它定义也可省略);
	下面三行是调用html5播放器用到的
	*/
	var video=['__ROOT__/demo.mp4->video/mp4'];
	var support=['iPad','iPhone','ios','android+false','msie10+false','webKit'];
	CKobject.embedHTML5('video','ckplayer_a1',360,180,video,flashvars,support);
  </script>
  <br> <br> <br>
                            <div class="span12 section">
                                <h6>详情简介</h6>
                                
                                <img src="__ROOT__<?php echo ($list["Lbig_img"]); ?>" style="width: 90%;"/>
                                <br><br>
                                <p> 
                                    <?php echo ($list["Ldis"]); ?>
                               </p>

                             
                              <div class="span10 submit-box pull-right">
                                        <a href="__ROOT__/index.php/Index/collct/Lid/<?php echo ($list["Lid"]); ?>"><input type="submit" class="btn-glow primary" value="收藏" /></a>
                                        <span>OR</span>
                                         <a href="__ROOT__/index.php/Index/AllList"><input type="submit" class="btn-glow primary" value="查看" /></a> 
                                </div>                             
                                 <!-- new comment form -->
                             <div class="span12 section comment">
                                <h6>留下您的问题</h6>
                                <p>管理员会很快给你回复</p>
                                <form action="" method="post">
	                                <textarea name="text"></textarea>
	                                <input type="hidden" name="id" id="id" value="<?php  echo $_GET['Lid']?>" />
	                                <div class="span12 submit-box pull-right">
	                                    <input type="submit" class="btn-glow primary" value="提交" />
	                                    <span>OR</span>
	                                    <input type="reset" value="Cancel" class="reset" />
	                                </div>
                                </form>
                            </div>
                           
                            </div>
                        </div>
                    </div>

                    <!-- side address column -->
                    <div class="span3 address pull-right">                    
                        <ul>
                             <h6>地址：</h6>
                            <li>重庆市南岸区崇文路2号
                            </li>
                            <li class="ico-li">
                                <i class="ico-phone"></i>
                                1817 274 2933
                            </li>
                             <li class="ico-li">
                                <i class="ico-mail"></i>
                                <a href="#">alejandra@detailcanvas.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
 
    <!-- end main container -->


    <!-- this page scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="__ROOT__/Public/index/js/bootstrap.min.js"></script>
    <script src="__ROOT__/Public/index/js/theme.js"></script>


   <script src="__ROOT__/Public/index/js/wysihtml5-0.3.0.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="__ROOT__/Public/index/js/bootstrap.min.js"></script>
    <script src="__ROOT__/Public/index/js/bootstrap-wysihtml5-0.0.2.js"></script>
    <script src="__ROOT__/Public/index/js/bootstrap.datepicker.js"></script>
    <script src="__ROOT__/Public/index/js/jquery.uniform.min.js"></script>
    <script src="__ROOT__/Public/index/js/select2.min.js"></script>
    <script src="__ROOT__/Public/index/js/theme.js"></script>

    <!-- call this page plugins -->
    <script type="text/javascript">
        $(function () {

            // add uniform plugin styles to html elements
            $("input:checkbox, input:radio").uniform();

            // select2 plugin for select elements
            $(".select2").select2({
                placeholder: "Select a State"
            });

            // datepicker plugin
            $('.datepicker').datepicker().on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });

            // wysihtml5 plugin on textarea
            $(".wysihtml5").wysihtml5({
                "font-styles": false
            });
        });
    </script>    
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>