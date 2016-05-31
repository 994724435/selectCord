<?php
header("content-type:text/html;charset=utf-8");

define("APP_DEBUG",True);

// 系统目录，定义thinkphp框架的路径
define("THINK_PATH", "./ThinkPHP/");

// 项目目录
define("APP_PATH", "./admin/");

// 项目名称
define("APP_NAME", "admin");
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
// 导入库

require THINK_PATH.'ThinkPHP.php';
