<load file="__PUBLIC__/public.html"/>
<body>
    <div class="hd_setup">
        <strong>欢迎使用后盾HD框架，通过HD框架手册或登录<a href="http://bbs.houdunwang.com/">后盾论坛</a>学习使用HD框架安装配置</strong>
        <h2>
        <a href="__CONTROL__" class="home">返回安装首页</a>
        <a href="javascript:void(0)"  class="home" onclick="window.close();return false;">关闭</a>
        <a href="__APP__/rbac/lock" class="home">锁定SETUP应用</a>
        </h2>
    </div>
    <form method="post" name="form1" id="form1" action="{|U:updateconfig}">
        <div class="setup">
            <dl>
                <dt>配置数据库</dt>
                <dd>
                    <table>
                        <tr>
                            <td width="200">数据库连接主机<b>*</b></td>
                            <td><input type="text" value="{$field.db_host}" name="dbhost" id="dbhost"/></td>
                        </tr>
                        <tr>
                            <td width="200">数据库连接端口</td>
                            <td><input type="text" name="dbport" id="dbport" value="{$field.db_port}"/></td>
                        </tr>
                        <tr>
                            <td width="200">数据库用户名<b>*</b></td>
                            <td><input type="text" name="dbuser" id="dbuser" value="{$field.db_user}"/></td></tr>
                        <tr>
                            <td width="200">数据库密码</td>
                            <td><input type="text" name="dbpwd" id="dbpwd" value="{$field.db_password}"/></td>
                        </tr>
                        <tr>
                            <td width="200">数据库名称<b>*</b></td>
                            <td><input type="text" name="dbname" id="dbname" value="{$field.db_database}"/></td>
                        </tr>
                        <tr>
                            <td width="200">表前缀</td>
                            <td><input type="text" name="dbfix" id="tbfix" value="{$field.db_prefix}"/></td>
                        </tr>
                        <tr>
                            <td  colspan="2">
                                <input type="submit" name="submit" value="确定"   class="query"/>
                            </td>
                        </tr>
                    </table>
                </dd>
        </div>
    </form>
    <script>
        $("#form1").submit(function(){
            var stat = true;
            $("#dbhost").next("span").remove();
            if($("#dbhost").val()==''){
                stat=false;
                $("#dbhost").after("<span>数据库主机不能为空</span>");

            }
            $("#dbuser").next("span").remove();
            if($("#dbuser").val()==''){
                stat=false;
                $("#dbuser").after("<span>数据库用户名不能为空</span>");
            }
            $("#dbname").next("span").remove();
            if($("#dbname").val()==''){
                stat=false;
                $("#dbname").after("<span>数据库名不能为空</span>");
            }
            if(!stat)return false;
        })
    </script>
</body>
</html>



