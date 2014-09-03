<?php

if (!is_file('./install/lock.php')) {
	header("location:install");
}
define("DEBUG",true);
define("GROUP_PATH","App/");
define("GROUP_NAME","Cms");
define("TEMP_PATH","Temp/");
define("CATEGORY_CACHE_PATH","data/category");
//引入框架入口文件
require "hdphp/hdphp/hdphp.php";
