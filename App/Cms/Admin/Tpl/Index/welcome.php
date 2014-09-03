<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>欢迎界面</title>
    <hdjs bootstrap="true"/>
    <css file='__CONTROL_TPL__/css/welcome.css'/>
</head>
<body>
<div class="warp">
    <h3><font color='#FDB246'>欢迎使用GW_CMS内容管理系统</font></h3>
    <table class="table2">
        <tr>
            <td class="w100">CMS版本:</td><td>{$hd.config.CMS_VERSION}</td>
        </tr>
        <tr>
            <td>PHP版本:</td><td>{$hd.const.PHP_OS}</td>
        </tr>
        <tr>
            <td>服务器:</td><td>{$hd.server.SERVER_SOFTWARE}</td>
        </tr>
        <tr>
            <td>项目负责人:</td><td>张晓宾</td>
        </tr>
        <tr>
            <td>官方网址:</td><td>http://www.geekweb.cn</td>
        </tr>
    </table>
</div>
</body>
</html>