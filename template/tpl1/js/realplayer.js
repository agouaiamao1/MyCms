$(
function(){
var ul=$('ul','.real-inner');
var lis=$("li",ul).size();
var num=0;
//��ʱ��
var t=setInterval(move,2000);
//��໬��
var next=$(".next");
next.bind("click",function(){
   clearInterval(t);
   ul.stop();  //ע��֮ǰ�Ķ������侲ֹ������������
   move();
   t=setInterval(move,2000);

 
});
//���һ���
var prev=$(".prev");
prev.bind("click",function(){
clearInterval(t);
ul.stop();
right_move();

t=setInterval(move,2000);
});
//move����

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
//right_move����
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
