<?php
//测试控制器类
class IndexControl extends AuthControl{
   private $_db;

   function __init(){
   	$this->_db=K("config");

   }

   public function edit(){
   if (IS_POST) {
      $this->_db->edit_config();
      $this->success("修改配置文件成功！");
   }else{
      $this->config=$this->_db->get_all_config();
      $this->display();
   }
   }

   public function tpl(){

   if (IS_POST) {
      $this->_db->edit_tpl();
      $this->success("修改模板类型成功！");
   }else{
      $tpls=Dir::tree('template/');
      $this->tpl=$tpls;
      $this->display();
   }

   }
}
?>