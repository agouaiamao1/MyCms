<?php
//文章控制器类
class ContentControl extends AuthControl{
	private $_db;
	private $_category;
	function __init(){
	$this->_db=K("content");
	$this->_category=F("category",false,CATEGORY_CACHE_PATH);
	}
   function index(){
    $count=$this->_db->count();
   $page=new Page($count,10);
   $data=$this->_db->limit($page->limit())->all();
   $this->assign(array('page'=>$page->show(),'data'=>$data));
   $this->display();
   }

   function add(){
   if (IS_POST) {
     $this->_db->content_add();
     $this->success("文章添加成功！");
   }else{
   $this->assign("category",$this->_category);
   $this->display();
   }
   
   }

   function edit(){
   if (IS_POST) {
    if ($this->_db->edit_content()) {
     $this->success("文章更改成功！");
    }
   }else{
    if($id=Q("get.id",'',"intval")){
    $category=$this->_category;
    $field=$this->_db->where("id=".$id)->find();
    $this->assign(array("category"=>$category,"field"=>$field));
    $this->display();
    }
    }
    }
    function del(){
    $id= Q("get.id",'','intval');
    if($this->_db->del_content($id)){
      $this->success("删除文章成功！");
    }

    }

   
}
?>