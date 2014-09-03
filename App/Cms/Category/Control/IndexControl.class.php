<?php
//测试控制器类
class IndexControl extends AuthControl{
	private $_db;
	//缓存
	private $_category;


    public function __construct(){
    parent::__construct();
    $this->_db=K("Category");//加载当前应用下的model
    $this->_category=F("category",false,CATEGORY_CACHE_PATH);
    if ($this->_category) {
    $this->_db->update_cache();
    $this->_category=F("category",false,CATEGORY_CACHE_PATH);
    }
    }

    public function index(){
    $this->assign("category",$this->_category);//向模板分配数据
    $this->display();//调用模板
    }

    public  function update_cache(){
    $this->_db->update_cache();
    $this->success("更新缓存成功！");

    }
	function add(){
	if (IS_POST) {
		if ($this->_db->cat_add()) {
			$this->success("添加栏目成功");
		}else{
			$this->error($this->_db->error());
		}
	}else{
	$pname='顶级栏目';
	if ($pid=Q("get.pid")) {
		$pname=$this->_category[$pid]['cat_name'];
	}
	$this->assign("pname",$pname);
	$this->display();
	}

	}

	public function check_cat_name(){
	$cname=$_POST['cat_name'];
	$field=$this->_db->where("cat_name='".$cname."'")->find();
	if ($field) {
		echo 0;
	}else{
	  echo 1;
	}
	exit;
	}

	function del(){
	$cid=Q("get.cid");
	if ($this->_db->where("pid='".$cid."'")->find()) {
	$this->error("请先移除下面的子栏目！");
	}
	if ($this->_db->table("content")->where("category_cid='".$cid."'")->find()) {
	$this->error("请先移除栏目下的文章！");
	}
	$this->_db->del_category($cid);
	$this->success("删除成功！");
	}

	function edit(){
	if (IS_POST) {
	if ($this->_db->update_category()) {
		$this->success("栏目修改成功！");
	}
	}else{
	$cate="==一级栏目==";
	$arr=array();
	if ($cid=Q("get.cid")) {
	$field=$this->_category[$cid];

		foreach($this->_category as $i =>$v){
		$selected=$disabled="";
		if ($v["cid"]==$field['cid']) {
			$disabled="disabled";
		}
		if ($v["cid"]==$field['pid']) {
			$selected="selected";
		}
		$this->_category[$i]['_html']="<option  value='{$v['cid']}' {$selected} {$disabled}>".$v['cat_name'].
		"</option>";
		}
	}
	$this->field=$field;
	$this->category=$this->_category;
	$this->display();
	}
	}

}
?>