<?php

/**
 * 后台登录
 */

class LoginAction extends Action{
	// 后台登录页面
	public function login(){
		$this->display();
	}
	
	// 登录处理
	public function loginDo(){
		$admin = M('admin');
		$name = $_POST['name'];
		$pwd = $_POST['pwd'];
		$re = $admin->where(array('name'=>$name))->select();		
		if(!empty($re)){// 存在该用户
			// 比较密码		
			if(md5($pwd) == $re[0]['pwd']){
				
				// 密码正确，登录成功，记录该用户信息于session
				$_SESSION['name'] = $name;
				$this->success("登录成功",__APP__.'/Admin/main');
				//$this->redirect('admin/main');
			}
			else{
				$this->error("密码输入错误，返回重新输入！",'Login/login');
			}
		}else{
			$this->error("用户名不存在，返回重新输入！",'Login/login');
		}
	}
	
	// 后台注册
	public function reg(){
		$this->display();
	}
	
	// 处理注册事件
	public function regDo(){
		$_POST['pwd']  = md5($_POST['pwd']);
		$_POST['time'] = time();
		
		$admin = M('admin');
		$re = $admin->add($_POST);
		if($re){
			$this->success("注册成功",'login');
		}else{
			echo $re."<br/>";
			echo $admin->getLastSql();die();
		}
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}