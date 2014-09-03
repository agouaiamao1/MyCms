<?php
//测试控制器类
class IndexControl extends AuthControl{
   private $_db;

   function __init(){
   	$this->_db=K("admin");

   }

   function change(){
   	if (IS_POST) {
   	$old_password=Q("post.old_password",null,"trim,md5");
   	$password=Q("post.password",null,"trim,md5");
   	$password2=Q("post.password2",null,"trim,md5");
   	if ($password2!==$password) {
   		$this->error("两次密码输入不一致");

   	}
		$f=$this->_db->where("aid='".session('AID')."'")->getField("password");
   	if ($old_password!=$f) {
   		$this->error("旧密码输入错误！");
   	}

   	$this->_db->save(array("aid"=>session("AID"),"password"=>$password));
   	session(null);
   	$this->success("密码重置成功！","",3);
   	}else{
   		$this->display();
   	}
   }
}
?>