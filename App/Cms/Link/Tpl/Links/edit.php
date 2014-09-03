<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>友情链接管理</title>
<hdjs/>
<link rel="stylesheet" type="text/css" href="__CONTROL_TPL__/css/css.css">
<js file='__CONTROL_TPL__/js/validate.js'>
</head>

<body>
	<div class='warp'>
		<div class='menu_list'>
			<ul>
				<li><a href="{|U:'index'}">友情链接管理</a></li>
				<li><a href="javascript:;" class='action'>更改友情链接</a></li>
			</ul>
		</div>
		<table  class="table2 hd-form">
		<form enctype='multipart/form-data' method='post' action="__METH__">
			<input name='id' type='hidden' value='{$link.id}'/>
			<tr><td class="w100">网站名称</td><td><input name='webname' type='text' value='{$link.webname}'/></td></tr>
			<tr><td>网址</td><td><input name='url' type='text'  value='{$link.url}'/></td></tr>
			<tr><td>logo</td>
			<td>
			<input name='old_logo' type='hidden' value='{$link.logo}'/>
			<input name='logo' type='file'/><img height='30px' src="__ROOT__{$link.logo}"></td></tr>
			<tr><td>是否采纳</td>
			<td>
				<input name='status' type='radio' value='0' <if value="$link.status==0">checked</if>/>:否
				<input name='status' type='radio' value='1' <if value="$link.status==1">checked</if>/>:是
			</td>
			</tr>
			<tr><td><input type="submit"  class="hd-success" value='提交'/></td></tr>

		</form>
		</table>
	</div>
</body>
</html>