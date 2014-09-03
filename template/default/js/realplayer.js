$(
function(){
var ul=$('ul','.real-inner');
var lis=$("li",ul).size();
var num=0;
//定时器
var t=setInterval(move,2000);
//左侧滑动
var next=$(".next");
next.bind("click",function(){
   clearInterval(t);
   ul.stop();  //注意之前的动画让其静止！！！！！！
   move();
   t=setInterval(move,2000);

 
});
//向右滑动
var prev=$(".prev");
prev.bind("click",function(){
clearInterval(t);
ul.stop();
right_move();

t=setInterval(move,2000);
});
//move函数

function move(){
	num++;
//document.title=num;
	if (num==lis)
{
	ul.css("left",0);
	num=1;
}
	ul.animate({left:-996*num},400,"swing");

}
//right_move函数
function right_move(){

	if (num==0)
{
	ul.css("left",-2988);
	num=lis-1;
}
	ul.animate({left:(-996*(num-1))},400,"swing");
	num--;
}


})
