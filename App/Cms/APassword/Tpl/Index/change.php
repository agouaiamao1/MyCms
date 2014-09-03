<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>更改管理员密码</title>
<link rel="stylesheet" type="text/css" href="__CONTROL_TPL__/css/css.css">
<hdjs bootstrap='true'/>

<js file='__CONTROL_TPL__/js/validation.js'/>
<base target="_top"/>
</head>

<body>
<form method='post' class='hd-form'>

<div class='warp'>
	<div class="menu_list">
        <ul>
            <li><a href="javascript:;" class="action">密码更改</a></li>
        </ul>
    </div>
	<table class='table1'>
	<tr>
		<td class='w100'>原密码</td>
		<td><input name='old_password' type='password'/></td>
	</tr>
	<tr>
		<td class='w100'>新密码</td>
		<td><input name='password' type='password'/></td>
	</tr>
	<tr>
		<td class='w100'>重复新密码</td>
		<td><input name='password2' type='password'/></td>
	</tr>

</table>
	<input type='submit'   class="hd-success" value='确认提交'>
</div>

</form>

</body>
</html>