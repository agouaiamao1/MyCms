<load file="__PUBLIC__/public.html"/>
<div class="hd_setup">
    <strong>欢迎使用后盾HD框架，通过HD框架手册或登录<a href="http://bbs.houdunwang.com/">后盾论坛</a>学习使用HD框架安装配置</strong>
    <h2>
        <a href="{|U:'showuser'}" target="_self">查看用户列表</a>&nbsp;&nbsp;&nbsp;
        <a href="{|U:'showrole'}" target="_self">查看用户组(角色)</a>&nbsp;&nbsp;&nbsp;
        <br/>
        <a href="__CONTROL__" class="home">返回安装首页</a>
        <a href="javascript:void(0)"  class="home" onclick="window.close();return false;">关闭</a>
        <a href="{|U:'rbac/lock'}" class="home">锁定SETUP应用</a>
    </h2>
</div>
<form method="post" name="form1" id="form1" action="{|U:'adduser'}">
    <input type="hidden" name="pid" value="<empty value='{$hd.get.pid}'>0<noempty/>{$hd.get.pid}</empty>"/>
    <div class="setup">
        <dl>
            <dt>添加用户</dt>
            <dd>
                <table>
                    <tr><td width="200">用户名称:</td>
                        <td>
                            <input type="text" name="username" id="username"/>
                        </td>
                    </tr>
                    <tr><td width="200">密码</td>
                        <td>
                            <input type="password" name="password" id="password"/>
                        </td>
                    </tr>
                    <tr><td width="200">所属组</td>
                        <td>
                            <select name="rid">
                                <list from="$role" name="$v">
                                <option value="{$v.rid}">{$v.title}</option>
                                </list>
                            </select>
                        </td>
                    </tr>
                    <tr><td width="200"><input type="submit" value="确认" class="query" name="submit"/></td></tr>
                </table>
            </dd>
        </dl>
    </div>
</form>
<script type="text/javascript">
    $("#form1").submit(function(){
        var stat = true;
        $("#password").next("span").remove();
        if($("#password").val()==''){
            stat = false;
            $("#password").after("<span>密码不能为空</span>");
        }
        if(!stat)return false;
    })
</script>
</body>
</html>
