<?php
//测试控制器类
class LinksControl extends AuthControl{
   private $_db;	
   public function __init(){
   		$this->_db=K("links");
   	}	

   
  	

   public function index(){
   $links=$this->_db->all();
   $this->field=$links;
   	$this->display();
   }
   
   public function add(){
   if (IS_POST) {
   	$this->_db->validate=array(
   				array("webname","nonull","网站名称不能为空！",2,3),
   				array("url","nonull","网址不能为空！",2,3),
   				array("url","http","请输入合法网址！",2,3),
   			);

   	if (!$this->_db->validate()) {
   		$this->error($this->_db->error);
   	}

   	if ($this->_db->add_link()) {
   		$this->success("添加友情链接成功！",'index');
   	}
   }else{
    $this->display();
   }
   
   }

   public function del(){
   $id=Q('get.id','','intval');
   	if ($this->_db->del_link($id)) {
   		$this->success("删除成功！");
   	}
   }

   public function edit(){
   	if (IS_POST) {
   	 $this->_db->edit_link();
   	 $this->success("更改成功！","index");
   	}else{
   	 $id=Q("get.id",'','intval');
   	 $this->link=$this->_db->where('id='.$id)->find();
   	 $this->display();
   	}
   	}
}
?>