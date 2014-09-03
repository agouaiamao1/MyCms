$(function(){
	$("form").validate({
	"username":{
		rule:{
		required:true
		},
		error:{
		required:"<font color=red>用户名不能为空</font>"
		}
	},
	"password":{
		rule:{
		required:true
		},
		error:{
		required:"<font color=red>密码不能为空</font>"
		}
	},
	"code":{
	rule:{
		required:true,
		ajax:CONTROL+"&m=checkcode"
	},
	error:{
		required:"<font color=red>验证码不能为空</font>",
		ajax:"<font color=red>验证码错误</font>"
	}
	}


	});

	$("form").submit(function(){
	if ($(this).is_validate()) {
	$.ajax({
	url:METH,
	data:$(this).serialize(),
	type:"post",
	dataType:"json",
	success:function(data){
	if (data.stat==1) {
	window.location.reload(true);
	}else{
	alert(data.msg);
	return false;
	}
	}
	})

	};
	})
})