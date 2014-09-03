<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>添加文章</title>
    <hdjs/>
    <css file='__CONTROL_TPL__/css/css.css'/>
    <js file='__CONTROL_TPL__/js/validation.js'/>
</head>
<body>
<div class="warp">
    <div class="menu_list">
        <ul>
            <li><a href="{|U:'index'}">文章列表</a></li>
            <li><a href="javascript:;" class="action">添加文章</a></li>
        </ul>
    </div>
    <form action="__METH__" method="post" class="hd-form" enctype="multipart/form-data">
        <div class="tab">
            <ul class="tab_menu">
                <li lab="base">
                    <a> 基本设置 </a>
                </li>
                <li lab="ext">
                    <a> 其他设置 </a>
                </li>
            </ul>
            <div class="tab_content">
                <div id="base">
                    <table class="table2">
                        <tr>
                            <td class="w100">标题</td>
                            <td>
                                <input type="text" name='title' class="w300"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="w100">属性</td>
                            <td>
                                <label>
                                    <input type="checkbox" name='flag[]' value="置顶"/> 置顶
                                </label>
                                <label>
                                    <input type="checkbox" name='flag[]' value="推荐"/> 推荐
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="w100">栏目</td>
                            <td>
                                <select name="category_cid">
                                    <list from="$category" name="c">
                                        <option value="{$c.cid}">{$c._name}</option>
                                    </list>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="w100">缩略图</td>
                            <td>
                                <input type="file" name="thumb"/>
                            </td>
                        </tr>
                        <tr>
                            <td>正文</td>
                            <td>
                                <ueditor name="content" style="1"/>
                            </td>
                        </tr>
                    </table>
                </div>
                <!--                其他设置-->
                <div id="ext">
                    <table class="table1">
                        <tr>
                            <td>关键字</td>
                            <td>
                                <input type="text" class='w300' name="keywords"/>
                            </td>
                        </tr>
                        <tr>
                            <td>描述</td>
                            <td>
                                <textarea name="description" class="w400 h100"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>点击数</td>
                            <td>
                                <input type="text" class='w300' name="click" value="100"/>
                            </td>
                        </tr>
                        <tr>
                            <td>发表时间</td>
                            <td>
                                <input type="text" readonly="readonly" id="updatetime" name="addtime"
                                       value="{|date:'Y-m-d H:i:s'}"
                                       class="w150"/>
                                <script>
                                    $('#updatetime').calendar({format: 'yyyy/MM/dd HH:mm'});
                                </script>

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
			<input  class="hd-success" type="submit" class="btn btn-primary" value="确定"/>
            
        </div>
		
					
		
    </form>
</div>
</body>
</html>