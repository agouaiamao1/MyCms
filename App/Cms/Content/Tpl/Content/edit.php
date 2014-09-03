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
            <li><a href="javascript:;" class="action">修改文章</a></li>
        </ul>
    </div>
    <form action="__METH__" method="post" class="hd-form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{$field.id}"/>
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
                    <table class="table1">
                        <tr>
                            <td class="w100">标题</td>
                            <td>
                                <input type="text" name='title' class="w300" value="{$field.title}"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="w100">属性</td>
                            <td>
                                <label>
                                    <input type="checkbox" name='flag[]' value="置顶" <if value="strstr($field['flag'],'置顶')">checked='checked'</if>/> 置顶
                                </label>
                                <label>
                                    <input type="checkbox" name='flag[]' value="推荐" <if value="strstr($field['flag'],'推荐')">checked='checked'</if>/> 推荐
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="w100">栏目</td>
                            <td>
                                <select name="category_cid">
                                    <list from="$category" name="c">
                                        <option value="{$c.cid}" <if value="$c.cid==$field.category_cid">selected='selected'</if>>{$c._name}</option>
                                    </list>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="w100">缩略图</td>
                            <td>
                                <input type="file" name="thumb"/>
                                <input type="hidden" name="old_thumb" value="{$field.thumb}"/>
                                <img src="__ROOT__/{$field.thumb}" width="88"/>
                            </td>
                        </tr>
                        <tr>
                            <td>正文</td>
                            <td>
                                <ueditor name="content" style="1" content="{$field.content}"/>
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
                                <input type="text" class='w300' name="keywords" value="{$field.keywords}"/>
                            </td>
                        </tr>
                        <tr>
                            <td>描述</td>
                            <td>
                                <textarea name="description" class="w400 h100">{$field.description}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>点击数</td>
                            <td>
                                <input type="text" class='w300' name="click" value="{$field.click}"/>
                            </td>
                        </tr>
                        <tr>
                            <td>发表时间</td>
                            <td>
                                <input type="text" readonly="readonly" id="addtime" name="addtime"
                                       class="w150" value="{$field.addtime|date:'Y-m-d H:i',@@}"/>
                                <script>
                                    $('#addtime').calendar({format: 'yyyy/MM/dd HH:mm'});
                                </script>

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <input type="submit"  class="hd-success" value="确定"/>
        </div>
    </form>
</div>
</body>
</html>