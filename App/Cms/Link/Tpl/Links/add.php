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
				<li><a href="javascript:;" class='action'>新建友情链接</a></li>
			</ul>
		</div>
		<form class="hd-form" enctype='multipart/form-data' method='post' action="__METH__">
		<table  class="table2">		
			<tr><td class="w100">网站名称</td><td><input name='webname' type='text'/></td></tr>
			<tr><td>网址</td><td><input name='url' type='text'/></td></tr>
			<tr><td>logo</td><td><input name='logo' type='file'/></td></tr>
			<tr><td>是否采纳</td>
			<td>
				<input name='status' type='radio' value='0' checked/>:否
				<input name='status' type='radio' value='1'/>:是
			</td>
			</tr>
			<tr><td><input  class="hd-success" type="submit" value='提交'/></td></tr>		
		</table>
		</form>
	</div>
</body>
</html>