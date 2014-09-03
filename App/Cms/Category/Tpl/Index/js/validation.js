$(function () {
   $("form").validate({
   "cat_name":{
    rule:{
        required:true,
        ajax:CONTROL+"/check_cat_name"
    },
    error:{
        required:"栏目名不能为空！",
        ajax:"栏目名已经存在！"
    }
   }
   })


})


