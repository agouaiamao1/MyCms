<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>更改管理员密码</title>
<link rel="stylesheet" type="text/css" href="__CONTROL_TPL__/css/css.css">
<hdjs/>
<js file='__CONTROL_TPL__/js/validation.js'/>
<base target="_top"/>
</head>

<body>
<form method='post' action="__METH__" class='hd-form'>

<div class='warp'>
	<div class="menu_list">
        <ul>
            <li><a href="javascript:;" class="action">网站配置</a></li>
        </ul>
    </div>
	<table class='table1'>
	<list from='$config' name="n">
	{$n._html}
	</list>

    </table>
	<input  class="hd-success"  type='submit' value='确认提交'>
</div>

</form>

</body>
</html>