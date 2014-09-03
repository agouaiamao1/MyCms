<?php
//测试控制器类
class IndexControl extends Control{
	private $_db;

	function __init(){
	import("Content/Model/ContentModel");
    $tpl=C('tpl_type');
    define("TEMPLATE","template/{$tpl}/");
	define("__TEMPLATE__",__ROOT__."/template/{$tpl}/");
	}

    function index(){
        $this->display(TEMPLATE."index.html");
    }

    function category(){
    $cid=Q("get.cid",null,"intval");

    $list=M("category");
    $this->f=$list->find($cid);
    $p=$list->find($cid);
    $this->pf=$list->where('pid='.$p['pid'])->all();
    if ( $list->where("pid=".$cid)->find()) {
        $this->display(TEMPLATE."list.html");
    }else{
        $this->display(TEMPLATE."article-list.html");
    } 
    
    }

    function content(){
        $id=Q("get.id",'','intval');
        if ($id>0) {
            $content=M('content');
            $article=$content->find($id);
            $article['thumb']=__ROOT__."/{$article['thumb']}";
            $article['url']=U('Index/Index/content',array("id"=>$id));
            $this->assign("article",$article);
            $this->display(TEMPLATE."article.html");
        }
    }


}
?>