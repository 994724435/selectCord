<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action{
    public function index(){
    	if($_POST){
//    	  print_r($_POST);die;
    	  $shcool =M('school');
    	  $map[$_POST['type']]  = array('ELT',$_POST['score']);
    	  $map['type'] =$_POST['subject'];
    	  $map['provice'] =$_POST['province']; 
    	  $result = $shcool->where($map)->select();
//    	   print_r($result);die;
    	}
    	$this->assign('result',$result);
		$this->display();
    }
	
   
    
	// 显示系统常量
	public function systemList() {
		session('open_id','ddadfasfasdfaf');  //设置session
		print_r(session('open_id'));
		header ( "content-type:text/html;charset=utf-8" );
	
		$str1 = "网站根目录地址：__ROOT__ :******************" . __ROOT__ . "<br>";
		$str2 = "当前项目（入口文件）地址：__APP__ :******************" . __APP__ . "<br>";
		$str3 = "当前模块的URL地址 ：__URL__ :******************" . __URL__ . "<br>";
		$str4 = "当前操作的URL地址  ：__ACTION__ :******************" . __ACTION__ . "<br>";
		$str5 = "当前URL地址   ：__SELF__ :******************" . __SELF__ . "<br>";
		$str6 = "当前项目名     ：APP_NAME :******************" . APP_NAME . "<br>";
		$str7 = "当前项目路径     ：APP_PATH :******************" . APP_PATH . "<br>";
		$str8 = "系统框架路径    ：THINK_PATH :******************" . THINK_PATH . "<br>";
	
		echo $str1 . $str2 . $str3 . $str4 . $str5 . $str6 . $str7 . $str8 . $str9;
	
	}
}