<?php
//测试控制器类
/*
*class IndexControl
*@author geekharvey<geekwebcn@gmail.com>
*/

class IndexControl extends AuthControl{
    function index(){
        header("Content-type:text/html;charset=utf-8");
        $this->display();
    }

    function welcome(){
    	$this->display();
    }
}
?>