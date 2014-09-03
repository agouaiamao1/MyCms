<?php

//应用安装
//1 版权协议
//2 运行环境检测：运行函数检测  目录文件检测
//3 配置数据库
//4 建表与插入原始数据
//5 安装完成界面
header("Content-type:text/html;charset=utf8");
define("HDPHP_PATH", TRUE);
if (is_file('lock.php')) {
	echo "<center><div><h1><font>请将lock.php删除后再执行安装！</font></h1></div></center>";
	exit;
}

$step=isset($_GET['step'])?$_GET['step']:1;

switch ($step) {
	case 1:
		require "template/copyright.html";
		exit;
		break;
	
	case 2:
		$mysqli=extension_loaded("mysqli")?"<strong><font color=green>成功</font></strong>":"<strong><font color=red>失败</font></strong>";
		$gd=extension_loaded("gd")?"<strong><font color=green>成功</font></strong>":"<strong><font class='error'  color=red>失败</font></strong>";
		$func=array(
		 'mb_substr',
         'imagecreatetruecolor'
		);

		$dirs=array(
            '../data/Category',
            '../Backup',
            '../data/Config',
            '../upload',
            '../data/Config/config.inc.php',
            '../data/Config/db.inc.php',
        );

        require "template/check.html";
        exit;
		break;
		case 3:
		require "template/db.html";
		exit;
		break;
		case "check_db":
		if(!@mysql_connect($_POST['DB_HOST'],$_POST['DB_USER'],$_POST['DB_PASSWORD'])){
		error("数据库连接错误");
		}
		if (@mysql_select_db($_POST['DB_DATABASE'])) {
			error("数据库已存在！");
		}
		
		$db=new Db;
		$db_prefix='';
		$db->exe("CREATE DATABASE {$_POST['DB_DATABASE']} CHARSET UTF8");
		mysql_select_db($_POST['DB_DATABASE']);
		mysql_query("set names utf8");
		require "sql/structure.php";

		foreach(glob("sql/data/*") as $f){
		require $f;
		}
		$config=require "../data/config/db.inc.php";
		$config=array_merge($config,$_POST);
		$data="<?php if(!defined('HDPHP_PATH')) exit;\n return ".var_export($config,true).";?>";
		file_put_contents("../data/config/db.inc.php", $data);
		success("创建数据表成功！");
		break;
		case 5:
		file_put_contents("lock.php","");
		require "template/ok.html";
		break;
}

function error($msg){
    echo "<div style='border:solid 1px #f00;width:500px;padding:20px;'>$msg</div>";
    echo "<script>setTimeout(function(){window.history.go(-1)},2000);</script>";
    exit;
}
function success($msg){
    echo "<div style='border:solid 1px green;width:500px;padding:20px;'>$msg</div>";
    echo "<script>setTimeout(function(){location.href='?step=5'},2000);</script>";
    exit;
}
class Db{
    function exe($sql){
        if(!mysql_query($sql)){
            echo mysql_error();exit;
        }
    }
}