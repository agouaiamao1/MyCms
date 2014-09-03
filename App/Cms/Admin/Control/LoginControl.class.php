<?php
class LoginControl extends Control{
	function __init(){

	}

	public function login(){
	if (session("AID")) {
		go("Index/index");
	}else{
		if (IS_POST) {
		$json=array("stat"=>1);
		if (session("code")!=strtoupper(Q("post.code"))) {
			$json=array("stat"=>0,"msg"=>"验证码输入有误！");
			$this->ajax($json);
			
		}
		$db=M("admin");
		$field=$db->where("username='".Q("username")."'")->find();
		if (!$field['username']) {
			$json=array("stat"=>0,"msg"=>"用户名输入有误");
			$this->ajax($json);
			
		}
		if(Q("password",NULL,"md5")!==$field['password']){
			$json=array("stat"=>0,"msg"=>"密码输入错误！");
			$this->ajax($json);
		
		}
		$_SESSION['AID']=$field['aid'];
		$_SESSION['username']=$field['username'];
		$json=array("stat"=>1,"msg"=>"登录成功！");
		$this->ajax($json);
		exit;

		}else{
		$this->display();
		}
	}
	}

	public function code(){
	$code=new Code();
	$code->show();
	}

	public function checkcode(){
	if ($code=Q("post.code")) {
		echo session("code")==strtoupper($code)?1:0;
		exit;
	}
	}


	public function outlogin(){
	session(null);//删除session；
	$this->success("登出成功！","login");
	}
}