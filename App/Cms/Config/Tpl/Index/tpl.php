<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<hdjs/>
<css file='__CONTROL_TPL__/css/css.css'/>
</head>

<body>
<div class='warp'>
	<div class='menu_list'>
		<ul>	
			<li><a href="javascript:;" class='action'>请选择网站模板</a></li>
		</ul>
		<form action="__METH__" method='post'>
		<table class='table2'>
			<thead><td>模板名称</td><td>缩略图</td><td>选择</td></thead>
			<list from='$tpl' name='n'>
				<tr>
				<td><strong>{$n.name}</strong></td>
				
				<td><img src="__ROOT__/template/{$n.name}/thumb.jpg" height='60px;' /></td>

				<if value="$n['name']==$hd.config.tpl_type">
				<td><input type='radio' name='11' value='{$n.name}' checked='checked'/></td>
				<else>
				<td><input type='radio' name='11' value='{$n.name}'/></td>
				</if>
				</tr>
			</list>
			<tr><td></td><td></td><td><input  class="hd-success" type='submit'  value='确认提交'/></td></tr>
		</table>	
		</form>
	</div>
</div>
</body>
</html>