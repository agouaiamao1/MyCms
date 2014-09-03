<!DOCTYPE html>
<html lang="en">
<head>
<title>GW_CMS</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="__CONTROL_TPL__/css/bootstrap.min.css" />
<link rel="stylesheet" href="__CONTROL_TPL__/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="__CONTROL_TPL__/css/fullcalendar.css" />
<link rel="stylesheet" href="__CONTROL_TPL__/css/matrix-style.css" />
<link rel="stylesheet" href="__CONTROL_TPL__/css/matrix-media.css" />
<link href="__CONTROL_TPL__/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="__CONTROL_TPL__/css/jquery.gritter.css" />
<base target="content"/>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">GW_CMS</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" >
    <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i> 
     <span class="text">Welcome {$hd.session.username}</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
       <!--  <li><a href="#"><i class="icon-user"></i>工作</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i>简介</a></li> -->
        <li class="divider"></li>
        <li><a target="_top" href="{|U:'Login/outlogin'}"><i class="icon-key"></i>登出</a></li>
      </ul>
    </li>
  
    <li class=""><a target="_blank" href="{|U:'Index/Index/index'}"><i class="icon icon-cog"></i> <span class="text">返回首页</span></a></li>
    <li class=""><a  target="_top" href="{|U:'Login/outlogin'}"><i class="icon icon-share-alt"></i> <span class="text">登出</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar" style="position:relative;height:100%;"><a href="#" class="visible-phone"><i class="icon icon-home"></i> </a>
  <ul>
    <li class="active"><a href="{|U:'welcome'}"><i class="icon icon-home"></i> <span>欢迎</span></a> </li>
     <li class="submenu"> <a href="javascript:;"><i class="icon icon-file"></i> <span>内容管理</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{|U:'Category/Index/index'}">目录管理</a></li>
        <li><a href="{|U:'Content/Content/index'}">文章管理</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>系统配置</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{|U:'Config/Index/edit'}">网站配置</a></li>
        <li><a href="{|U:'Config/Index/tpl'}">模板选择</a></li>
      </ul>
    </li>
    <!--隐藏的侧边栏-->
    <li><a href="{|U:'Backup/Backup/index'}"><i class="icon icon-pencil"></i> <span>网站备份</span></a></li>
    <li><a href="{|U:'APassword/Index/change'}"><i class="icon icon-signal"></i> <span>管理员密码</span></a> </li>
    <li><a href="{|U:'Link/Links/index'}"><i class="icon icon-th"></i> <span>友情链接</span></a></li>
   
     <!-- <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    
   
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>-->
   


  </ul>
  <div class="row-fluid" style="bottom-margin:0px;position:absolute;bottom:90px;">
  <div id="footer" class="span12"> 2013 &copy; <a href="http://www.geekweb.cn" target="_blank">先为</a>. Brought to you by <a href="http://www.geekweb.cn" target="_blank">极客万博.in</a> </div>
  </div>
 </div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header"></div> 
  <iframe src="{|U:'welcome'}" frameborder='0' scrolling='auto' name="content" style='width:100%;height:620px;'></iframe>
</div>
<!--end-Footer-part-->




<script src="__CONTROL_TPL__/js/jquery.min.js"></script> 

<script src="__CONTROL_TPL__/js/bootstrap.min.js"></script> 

<script src="__CONTROL_TPL__/js/matrix.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
