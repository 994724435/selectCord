<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>后台登陆</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="__ROOT__/Public/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="__ROOT__/Public/admin/css/style.css" rel='stylesheet' type='text/css' />
<link href="__ROOT__/Public/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="__ROOT__/Public/admin/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="__ROOT__/Public/admin/js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <!-- <a href="index.html"><img src="__ROOT__/Public/admin/images/logo.png" alt=""/> </a>-->
  	<!--<div style="font-size:20px;width:100px;height:40px;line-height:40px;margin:auto;text-align:center;color:black;font-weight:bold;">登录</div>-->
  </div>
  <!--<h2 class="form-heading">微信展览小助手后台</h2>-->
  <div style="font-size:20px;width:250px;height:40px;line-height:40px;margin:auto;text-align:center;color:black;font-weight:bold;">高考自愿填报后台登陆</div>
  <div class="app-cam">
	  <form action="__URL__/loginDo" method="post">
		<input type="text" name="name" class="text" value="用户名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '用户名';}">
		<input type="password" name="pwd" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit" value="Login"></div>
		<ul class="new">
			<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
			<li class="new_right"><p class="sign">New here ?<a href="__URL__/reg" target='_blank'> Sign Up</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
   <div class="copy_layout login">
      <p>Copyright &copy; 2016.Company name All rights reserved.</p>
   </div>
</body>
</html>