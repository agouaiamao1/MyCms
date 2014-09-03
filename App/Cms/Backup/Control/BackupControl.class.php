<?php
//测试控制器类
class BackupControl extends AuthControl{
	
	public function __init(){


	}

    function index(){
    	$dirs=Dir::tree('backup/');
    	$this->dirs=$dirs;
        $this->display();
    }


  	public function backup(){
  		Backup::backup(array('url'=>U('Admin/Index/index')));
  	}

  	public function del(){
  		$_dir=Q('get._name','','trim');
  		if (Dir::del('backup/'.$_dir)) {
  			$this->success("删除成功！",U('index'));
  		}else{
  			$this->error('请修改backup文件夹权限为Apache可写！',U('index'));
  		}
  	}

  	public function recovery(){
  	$dir=Q('get._name','','');
  		if(Backup::recovery(array('dir'=>'./backup/'.$dir))){
  		//DIR为必填项
  			$this->success("还原成功！",U('index'));
  		}
  	}
}
?>