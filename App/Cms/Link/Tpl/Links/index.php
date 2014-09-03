<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>友情链接管理</title>
<hdjs/>
<link rel="stylesheet" type="text/css" href="__CONTROL_TPL__/css/css.css">

</head>

<body>
	<div class='warp'>
		<div class='menu_list'>
			<ul>
				<li><a href="javascript:;" class='action'>友情链接管理</a></li>
				<li><a href="{|U:'add'}">新建友情链接</a></li>
			</ul>
		</div>
		<table  class="table2">
			
		<thead><td  class='w60'>id</td><td class='w100'>网站名称</td><td  class='w200'>网址</td>
		<td class='w200'>logo</td><td>是否采纳</td><td>处理</td></thead>
			<list from='$field' name='f'>

			<tr>
				<td>{$f.id}</td>
				<td>{$f.webname}</td>
				<td>{$f.url}</td>
				<td><img height='30px;' src="__ROOT__{$f.logo}"></td>
				<td>
					<if value='$f[status]==0'>
						<font color='red'>否</font>
					<else>
						<font color='green'>是</font>
					</if>
				</td>
				<td>
					<a href="{|U:'del',array('id'=>$f['id'])}" onclick='return confirm("是否确认删除！");'>[删除]</a>
					<a href="{|U:'edit',array('id'=>$f['id'])}">[编辑]</a>
				</td>
			</tr>
			

			</list>
		</table>
	</div>
</body>
</html>