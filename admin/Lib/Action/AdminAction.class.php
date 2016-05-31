<?php

/**
 * 后台管理
 */

class AdminAction extends Action{
	
	// 所有方法调用之前，先执行
	public function _initialize(){
		if(!$_SESSION['name']){
			$this->success("还没有登录",__APP__."/Login/login");
		}
		$this->assign('name',$_SESSION['name']);
	}
	
    public function deleteme(){
        $admin = M('admin');
        $result = $admin->where(array('id'=>$_GET['id']))->delete();
        if($result){
            echo "<script type='text/javascript'>alert('删除成功');
				     location.href='".__ROOT__."/admin.php/Admin/main';</script>"; 
        }
    }
	
	// 联合查询 记录
	public function reply(){
	    $reply =M('Reply');
	    $result = $reply->where(array('isshow'=>1))->join('list ON reply.Lid=list.Lid')->select();
		$this->assign('result',$result);
	    $this->display();
	}
	
//	添加密码
	public function AddPwd(){
		      $admin =M('admin');
//		      print_r($_POST);die;
		      $res =$admin->where(array('name'=>$_POST['name']))->select();
		      if($res){
		         echo "<script type='text/javascript'>alert('用户名已存在！');
				     location.href='".__ROOT__."/admin.php/Admin/main';</script>";exit();
		      }
		     if($_POST['pwd']){
			       if($_POST['pwd']==$_POST['pwd1']){
			       $result= $admin->add(array('pwd'=>md5($_POST['pwd']),'name'=>$_POST['name']));
			       if($result){
			         echo "<script type='text/javascript'>alert('添加成功');
				     location.href='".__ROOT__."/admin.php/Admin/main';</script>";
			       }
			       }else{
			         echo "<script type='text/javascript'>alert('密码不一致！');
				     location.href='".__ROOT__."/admin.php/Admin/main';</script>";
			       }
		       
		     }
	         $this->display();
	}
	
	//修改密码
	public function EditPwd(){
		     if($_POST['pwd']){
			       if($_POST['pwd']==$_POST['pwd1']){
			       $admin =M('admin');
			       $result= $admin->where(array('id'=>$_GET['id']))->save(array('pwd'=>md5($_POST['pwd'])));
			       if($result){
			         echo "<script type='text/javascript'>alert('修改成功');
				     location.href='".__ROOT__."/admin.php/Admin/main';</script>";
			       }
			       }else{
			         echo "<script type='text/javascript'>alert('密码不一致！');
				     location.href='".__ROOT__."/admin.php/Admin/main';</script>";
			       }
		       
		     }
	         $this->display();
	}
	// 后台主页(默认，显示管理员列表)
	public function main(){
		$admin  =M('admin');
		$re = $admin->select();
		$this->assign("re",$re);
		$this->assign('name',$_SESSION['name']);
		
		$this->display();
	}
	
	// 添加
	public function addBooks(){
		$this->display();
	}
	
	// 处理添加
	public function addSchoolDo(){
		$data['name'] = $_POST['name'];
		$data['provice'] = $_POST['province'];
		$data['type'] = $_POST['type'];
		$data['low'] = $_POST['low'];
		$data['heigh'] = $_POST['heign'];
		$data['avg'] = $_POST['avg'];
							
		$product = M("school");
		$result  = $product->where(array('name'=>$_POST['name']))->select();
		if($result){
			echo "<script type='text/javascript'>alert('该学校已经添加！');
				    location.href='".__ROOT__."/admin.php/Admin/addSchool';</script>";exit();
		}else{
			$re = $product->add($data);
		}
		
		if($re){
			$this->success("添加成功",__APP__."/Admin/main");
		}else{
			echo $product->getLastSql();die();
		}		
		
	
	}
	
	public function delete(){
		$school =M('school');
		$res    =$school->where(array('id'=>$_GET['id']))->delete();
	    if($res){
				    echo "<script type='text/javascript'>alert('删除成功！');
				    location.href='".__ROOT__."/admin.php/Admin/schoolList';</script>";exit();
				}
	}
	
	public function schoolList(){
		    $school =M('school');
		    $result = $school->select();
		    $this->assign("res",$result);
			$this->display();
		}
	
	public function EditList(){
		    $school =M('school');
		    $result = $school->where(array('id'=>$_GET['id']))->select();
		    if($_POST){
		        $data['name'] = $_POST['name'];
				$data['provice'] = $_POST['province'];
				$data['type'] = $_POST['type'];
				$data['low'] = $_POST['low'];
				$data['heigh'] = $_POST['heign'];
				$data['avg'] = $_POST['avg'];
				
				$result1  = $school->where(array('name'=>$_POST['name']))->select();
				if($result1){
				    echo "<script type='text/javascript'>alert('该学校已存在了！');
				    location.href='".__ROOT__."/admin.php/Admin/schoolList';</script>";exit();
				}
				$res = $school->where(array('id'=>$_GET['id']))->save($data);
				if($res){
			       echo "<script type='text/javascript'>alert('修改成功！');
				    location.href='".__ROOT__."/admin.php/Admin/schoolList';</script>";
					}else{
						echo $school->getLastSql();die();
					}	
		    }
		    $this->assign("res",$result[0]);
			$this->display();
		}
	
	
	
	
	
	
	
	
}