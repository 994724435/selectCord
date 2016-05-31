<?php if (!defined('THINK_PATH')) exit();?>


<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="__ROOT__/Public/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="__ROOT__/Public/admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="__ROOT__/Public/admin/css/lines.css" rel='stylesheet' type='text/css' />
<link href="__ROOT__/Public/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="__ROOT__/Public/admin/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="__ROOT__/Public/admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="__ROOT__/Public/admin/js/metisMenu.min.js"></script>
<script src="__ROOT__/Public/admin/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="__ROOT__/Public/admin/js/d3.v3.js"></script>
<script src="__ROOT__/Public/admin/js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">当前登录员：<font color=red><?php echo ($name); ?></font></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
			</ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="__URL__/main"><i class="fa fa-dashboard fa-fw nav_icon"></i>管理员列表</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>学校管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	  <li>
                                    <a href="__URL__/addSchool">添加学校</a>
                                </li>
                                <li>
                                    <a href="__URL__/schoolList">学校列表</a>
                                </li>
                              
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="__ROOT__/admin.php/Login/login"><i class="fa fa-flask fa-fw nav_icon"></i>退出系统</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
           
        
        <div id="page-wrapper">
        <div class="graphs">	  
    <div class="content_bottom">
     <div class="col-md-12 span_3">
		  <div class="bs-example1" data-example-id="contextual-table">
		    <table class="table">
		      <thead>
		        <tr>
		          <th>编号</th>
		          <th>名称</th>
		          <th>省份</th>
		          <th>类型</th>
		          <th>最高分</th> 
		          <th>最低分</th> 
		          <th>平均分</th> 
		          <th>操作</th>
		        </tr>
		      </thead>
		      <tbody>
		     
		   
		      
		      <?php  $i = 1; ?>
		      <?php if(is_array($res)): foreach($res as $key=>$v): if(($i%2)==1){ echo "<tr class='active'>"; }else{ echo "<tr class='info'>"; } ?>
		        
		          <th scope="row"><?php echo ($v["id"]); ?></th>
		          <td><?php echo ($v["name"]); ?></td>
		          <td><?php echo ($v["provice"]); ?></td>
		          <td><?php echo ($v["type"]); ?></td>
		          <td><?php echo ($v["heigh"]); ?></td>
		          <td><?php echo ($v["low"]); ?></td>
		          <td><?php echo ($v["avg"]); ?></td>
		          <td><a href="EditList/id/<?php echo ($v["id"]); ?>">修 改</a> | <a href="delete/id/<?php echo ($v["id"]); ?>">删 除</a></td>
		        </tr>
		      	<?php $i++ ; endforeach; endif; ?>		      
		      </tbody>
		    </table>
		   </div>
	   </div>
		<div class="clearfix"> </div>
	    </div>
		<div class="copy">
            <p>Copyright &copy; 2016  All rights reserved.</p>
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="__ROOT__/Public/admin/js/bootstrap.min.js"></script>
</body>
</html>