<?php
header("content-type:text/html;charset=utf-8");

// 系统目录，定义thinkphp框架的路径
define("THINK_PATH", "./ThinkPHP/");

define("APP_DEBUG",True);

// 项目目录
define("APP_PATH", "./home/");

// 项目名称
define("APP_NAME", "home");

// 导入库

require THINK_PATH.'ThinkPHP.php';
