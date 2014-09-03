<?php

class ContentModel extends RelationModel{
	public $table="content";
	public $join=array('category' => array(
            'type' => BELONGS_TO,
            'parent_key' => 'cid', //栏目表主键
            'foreign_key' => 'category_cid' //文章表的外键
        ));


/*自动处理过程：
*@keywords
*@thumb缩略图
*@description描述
*@flag
*@addtime
*@admin_id
*/


    public $auto=array(
    	array("keywords","_keywords","method",2,3),
    	array("thumb","_thumb","method",2,3),
    	array("description","_description","method",2,3),
    	array("flag","_flag","method",2,3),
    //注意：function为php自己的函数，而method为当前控制器指定 的方法
    	array("addtime","strtotime","function",2,3),
    	array("admin_id","_admin_id","method",2,3)
    );
//自动处理所要加载的函数

	public function _admin_id(){
		return session("AID");
	}

	public function _keywords($val){
		if (!empty($val)) {
		return $val;
		}
		$keywords=Q("post.content",'',"trim,strip_tags");
		$keys=String::splitWord($keywords);
		$words=array();
		for($i=0;$i<8;$i++){
			$words[]=key($keys);
			if (!array_shift($keys)) {
				break;
			}
	}
		return implode(",",$words);

	}

	public function _thumb(){
		if (empty($_FILES['thumb']['name'])) {
		
		return Q("post.old_thumb",'','');
		}else{
		 $upload = new Upload('./upload/' . date("Y") . '/' . date('m') . '/' . date('d'));
		$file=$upload->upload();
		return $file[0]['path'];
		}
	}

	public function _flag($val){
	//$val为数组，所以要转化为字符串,因为插入到值时必须要 转化为"置顶，热门"等等！
	return empty($val)?"":implode(",",$val);
	}

	public function _description($val){
	if (!empty($val)) {
		return $val;
	}else{
		$content=Q("post.content",'',"trim,strip_tags");
		$desc=mb_substr($content,0,80,"utf8");
		return $desc;
	}
	}

    public function content_add(){
    if ($this->create()) {
    	return $this->add();
    }
	}

	public function edit_content(){
	if ($this->create()){
		return $this->save();
	}
	}

	public function del_content($id){
	if ($this->del($id)) {
		return true;
	}

	}
    

}