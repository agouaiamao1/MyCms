<?php
if(!defined("HDPHP_PATH"))exit("No direct script access allowed");
//更多配置请查看hdphp/Config/config.php
return array_merge(
    require 'data/config/db.inc.php',
    require 'data/config/config.inc.php',
    array(
    	'CHECK_FILE_CASE'               => TRUE,      //windows区分大小写
    	//cms版本
    	"CMS_VERSION"							=>"GWCMS1.0",
        //默认访问应用
        'DEFAULT_APP'   => 'Index',
        //模板文件后缀
        'TPL_FIX'       =>'.php',
        'TPL_ERROR'                     => 'error.php',     //错误信息模板
        'TPL_SUCCESS'                   => 'success.php',   //正确信息模板
        'URL_REWRITE'                   => false,     //url重写模式
        'route' => array(
            "/^id_(\d+).html$/"=>"Index/Index/content/id/#1",
            "/^cid_(\d+).html$/"=>"Index/Index/category/cid/#1",
            "/^index.html$/"=>"Index/Index/index"
        ),                             //路由规则
    )
);
?>