$(function(){
	$("form").validation({
	"cat_name":{
			rule:{
				required:true
				},
			error:{
				required:"目录名不能为空！"
				}
			}
	});

})