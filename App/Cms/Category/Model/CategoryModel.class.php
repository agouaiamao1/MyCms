<?php
class CategoryModel extends Model{
	public $table='category';
	function __construct(){
		parent::__construct();
	}

	public $validate = array(
        array('cat_name', 'nonull', '栏目名不能为空', 2, 3),
    );
    public $auto=array(
    	array("face_thumb","_face_thumb","method",2,3)
    );

    public function _face_thumb(){
    	if (empty($_FILES['face_thumb']['name'])) {
    		return Q('post.old_face_thumb','','');
    	}else{
    	$upload=new Upload('./upload/face_thumb/');
    	$face=$upload->upload();
    	return $face[0]['path'];
    	}
    }

	function update_cache(){
	$data=$this->all();
	$cat=Data::tree($data,"cat_name");
	$_cat=array();
		foreach($cat as $v)
		{
			$_cat[$v["cid"]]=$v;
		}
		return F("category",$_cat,CATEGORY_CACHE_PATH);
	}

	function cat_add(){
	if($this->create()){
	$this->add();
	$this->update_cache();
	return true;
	}else{
	return false;
	}
	}

	function del_category($cid){
	$this->del(array($cid));
	return $this->update_cache();
	}

	function update_category(){
	if ($this->create()) {
		$this->save();
		return $this->update_cache();
	}
	}
	
}