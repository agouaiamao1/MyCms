<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台登录</title>

<link rel="stylesheet" href="__CONTROL_TPL__/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="__CONTROL_TPL__/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="__CONTROL_TPL__/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="__CONTROL_TPL__/css/bootstrap-theme.mini.css">
<link rel="stylesheet" type="text/css" href="__CONTROL_TPL__/css/login.css">
<hdjs/>
<script type="text/javascript" src='__CONTROL_TPL__/js/login.js'></script>

</head>

<body>
<div class='loginbox'>
    <div class='logo'></div>
    <div class='content'>
      <div class='slogan'></div>
      <div class="login_form">
      <h3>管理员登录</h3>


  <form   style='margin-top:-20px;' onsubmit='return false;'>
  <div class="control-group">
      <label class="control-label" for="username">Username</label>
    
    <div class="controls">
     <input type="text" style='width:60%;' name='username'  id="username" placeholder="Username">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" name='password' style='width:60%;' id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">验证码</label>
    <div class="controls">
      <input type="text" style='width:30%;' name="code"/>
      <img style='vertical-align:top;' src="{|U:'code'}" onclick="this.src='__CONTROL__/code/'+Math.random();">
    <span id="hd_code" ></span>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <input type="submit" class="btn btn-primary btn-large span3" value='Sign In'>
    </div>
  </div>
</form>
        </div>
    </div>
</div>
</body>
</html>