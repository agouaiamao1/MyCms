<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>backup</title>
<hdjs/>
<css file='__CONTROL_TPL__/css/css.css'/>
<base target='content'/>
</head>

<body>
	<div class='warp'>
	<div class='menu_list'>
		<ul>	
			<li><a href="javascript:;" class='action'>备份列表</a></li>
			<li><a href="backup">数据库备份</a></li>
		</ul>
	</div>
	<table class='table2'>
		<thead><td>名称</td><td>备份时间</td><td>大小</td><td>处理</td></thead>
		<list from='$dirs' name='c'>
			<tr>

				<td>{$c.name}</td>
				<td>{$c.name|date:"Y-m-d H:i:s",@@}</td>
				<td>{$c.size} B</td>
				<td>
				<a href="{|U:'del',array('_name'=>$c['name'])}" onclick='return confirm("确认删除备份吗？");'>[删除]</a>
				<a href="{|U:'recovery',array('_name'=>$c['name'])}" onclick='return confirm("确认删除备份吗？");'>[恢复]</a>
				</td>
			</tr>
		</list>
	</table>
	</div>
</body>
</html>