<?php
	class LinksModel extends Model{
		public function __init(){

		}
		public $table="links";
		public $validate=array(
			array('webname','nonull','error.....',2,3)
		);
		 
		
		//自动处理上传logo操作
		public $auto=array(
			array("logo","_logo","method",2,3),
		);

		public function _logo(){
		if (empty($_FILES['logo']['name'])) {
			return Q("post.old_logo",'','trim');
			}else{
			$upload=new Upload('./upload/logos');
			$files=$upload->upload();
			return $files[0]['path'];
			}
		}

		public function add_link(){
			if ($this->create()) {
				$this->add();
				return true;
			}
		}

		public function del_link($id){
		if($this->where('id='.$id)->del()){
		 return true;
		}
		}

		public function edit_link(){
			if ($this->create()) {
				return $this->save();
			}
		}
		
		
	}