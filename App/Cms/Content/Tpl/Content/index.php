<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>文章管理</title>
    <hdjs/>
    <css file='__CONTROL_TPL__/css/css.css'/>
</head>
<body>
<div class='warp'>
    <div class="menu_list">
        <ul>
            <li><a href="javascript:;" class="action">文章列表</a></li>
            <li><a href="{|U:'add'}">添加文章</a></li>
        </ul>
    </div>
    <table class="table2">
        <thead>
        <tr>
            <td class="w80">id</td>
            <td>标题</td>
            <td class="100">栏目</td>
            <td class="100">栏目ID</td>
            <td class="w150">发表时间</td>
            <td class="w100">点击数</td>
            <td class="w150">操作</td>
        </tr>
        </thead>
        <list from='$data' name='d'>
        <tr>
            <td>{$d.id}</td>
            <td>{$d.title} <if value="$d.flag">[{$d.flag}]</if></td>
            <td>{$d.cat_name}</td>
            <td>{$d.category_cid}</td>
            <td>{$d.addtime|date:"Y-m-d H-i",@@}</td>
            <td>{$d.click}</td>
            <td>
                <a href="{|U:'del',array('id'=>$d['id'])}" onclick='return confirm("确定删除吗？")'>删除</a> |
                <a href="{|U:'edit',array('id'=>$d['id'])}">编辑</a> |
                <a href="{|U:'Index/index/content',array('id'=>$d['id'])}" target="_blank">查看</a>
            </td>
        </tr>
        </list>
    </table>
</div>
<div class="page1">
    {$page}
</div>
</body>
</html>














