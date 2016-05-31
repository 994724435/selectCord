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

    <!-- main container -->
     <!-- settings changer -->

        <div class="container-fluid">
            <div id="pad-wrapper" class="users-list">
                <div class="row-fluid header">
                    <h3 class="">查找</h3>
                     <form action="" method="post">
                    <div class="span10 pull-right">
                        <input type="text" name="search" class="span5 search" placeholder="Type a thing's name..." />
                        
                        <!-- custom popup filter -->
                        <!-- styles are located in css/elements.css -->
                        <!-- script that enables this dropdown is located in js/theme.js -->
                        <div class="ui-dropdown">     
                              
                                   <input type="submit" class="btn-glow primary" value="搜索" />    
                               </form>                     
                                                              
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Users table -->
                <div class="row-fluid table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="span4 sortable">
                                   名     称：
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>录入时间
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>地 点
                                </th>
                                <th class="span3 sortable align-right">
                                    <span class="line"></span>操    作
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                 <?php if(is_array($list)): foreach($list as $key=>$vo): ?><!-- row -->
                        <tr class="first">
                            <td>
                                <img src="__ROOT__<?php echo ($vo["Lsmall_img"]); ?>" class="img-circle avatar hidden-phone" />
                                <a href="" class="name"><?php echo ($vo["Lname"]); ?></a>
                                
                                <span class="subtext" id="dis">
                                           <?php echo ($vo["Ldi"]); ?>
                                </span>
                            </td>
                            <td>
                                    <?php echo ($vo["Ltime"]); ?>
                            </td>
                            <td>
                                <?php echo ($vo["Lplace"]); ?>
                            </td>
                            <td class="align-right">
                                <a href="__ROOT__/index.php/Index/detail/Lid/<?php echo ($vo["Lid"]); ?>">详情</a> &nbsp;
                                <a href="__ROOT__/index.php/Index/delete/Lid/<?php echo ($vo["Lid"]); ?>">删除</a>
                            </td>
                        </tr>
                        <!-- row --><?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="pagination pull-right">
                    <ul>
                        <li><a href="#">&#8249;</a></li>
                        <li><a class="<?php if($_GET['p']==1){echo 'active';} ?>" href="__ROOT__/index.php/Index/AllList/p/1">1</a></li>
                        <li><a class="<?php if($_GET['p']==2){echo 'active';} ?>" href="__ROOT__/index.php/Index/AllList/p/2">2</a></li>
                        <li><a class="<?php if($_GET['p']==3){echo 'active';} ?>" href="__ROOT__/index.php/Index/AllList/p/3">3</a></li>
                        <li><a class="<?php if($_GET['p']==4){echo 'active';} ?>" href="__ROOT__/index.php/Index/AllList/p/4">4</a></li>
                        <li><a class="<?php if($_GET['p']==5){echo 'active';} ?>"href="__ROOT__/index.php/Index/AllList/p/5">5</a></li>
                        <li><a href="#">&#8250;</a></li>
                    </ul>
                </div>
                <!-- end users table -->
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

            // add uniform plugdictor.html elements
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

<script type="text/javascript">
function testAuto(thisId,needLeng){
 var ididid = document.getElementById(thisId);
 var nowLeng = ididid.innerHTML.length;
 if(nowLeng > needLeng){
  var nowWord = ididid.innerHTML.substr(0,needLeng)+'...';
  ididid.innerHTML = nowWord;
 }
}
</script> 
<script type="text/javascript">
// testAuto('dis',10);
</script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>