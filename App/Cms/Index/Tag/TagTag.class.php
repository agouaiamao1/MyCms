<?php

	class TagTag{
	public $tag=array(
		"top"=>array('block' => 1, 'level' => 4),
		"news"=>array('block' => 1, 'level' => 4),
		"active"=>array('block' => 1, 'level' => 4),
		"views"=>array('block' => 1, 'level' => 4),
		"length"=>array('block' => 1, 'level' => 4),
		"cats"=>array('block' => 1, 'level' => 4),
		"arts"=>array('block' => 1, 'level' => 4),
	);

	function _top($attr,$content){
		$row=isset($attr['row'])?$attr['row']:4;
		$cid=isset($attr['cid'])?$attr['cid']:18;
		$php=<<<str
<?php
		\$where='';//为了防止干扰到其他栏目，必须先清空
		if($cid){
		\$where=" category_cid={$cid} and flag='推荐' ";
		}
		\$db=M('content');
		\$hots=\$db->where(\$where)->limit($row)->all();
		foreach(\$hots as \$field):
		\$field['url']=U('Index/content',array('id'=>\$field['id']));
		\$field['thumb']='__ROOT__/'.\$field['thumb'];
		?>
str;
		$php.=$content;
		$php.="<?php endforeach;?>";
		return $php;
	}
	function _news($attr,$content){
		$row=isset($attr['row'])?$attr['row']:4;
		$cid=isset($attr['cid'])?$attr['cid']:18;
		$php=<<<str
<?php
		\$where='';//为了防止干扰到其他栏目，必须先清空
		if($cid){
		\$where=" category_cid={$cid} and flag!='推荐' ";
		}
		\$db=M('content');
		\$hots=\$db->where(\$where)->limit($row)->all();
		foreach(\$hots as \$field):
		\$field['url']=U('Index/content',array('id'=>\$field['id']));
		\$field['thumb']='__ROOT__/'.\$field['thumb'];
		?>
str;
		$php.=$content;
		$php.="<?php endforeach;?>";
		return $php;
	}

		function _actives($attr,$content){
		$row=isset($attr['row'])?$attr['row']:3;
		$cid=isset($attr['cid'])?$attr['cid']:19;
		$php=<<<str
<?php
		\$where='';//为了防止干扰到其他栏目，必须先清空
		if($cid){
		\$where=" category_cid={$cid} and flag!='推荐' ";
		}
		\$db=M('content');
		\$hots=\$db->where(\$where)->limit($row)->all();
		foreach(\$hots as \$field):
		\$field['url']=U('Index/content',array('id'=>\$field['id']));
		\$field['thumb']='__ROOT__/'.\$field['thumb'];
		?>
str;
		$php.=$content;
		$php.="<?php endforeach;?>";
		return $php;
	}
			function _views($attr,$content){
		$row=isset($attr['row'])?$attr['row']:3;
		$cid=isset($attr['cid'])?$attr['cid']:20;
		$php=<<<str
<?php
		\$where='';//为了防止干扰到其他栏目，必须先清空
		if($cid){
		\$where=" category_cid={$cid} and flag!='推荐' ";
		}
		\$db=M('content');
		\$hots=\$db->where(\$where)->limit($row)->all();
		foreach(\$hots as \$field):
		\$field['url']=U('Index/content',array('id'=>\$field['id']));
		\$field['thumb']='__ROOT__/'.\$field['thumb'];
		?>
str;
		$php.=$content;
		$php.="<?php endforeach;?>";
		return $php;
	}


	function _length($attr,$content){
		$row=isset($attr['row'])?$attr['row']:10;
		$cid=isset($attr['cid'])?$attr['cid']:24;
		$php=<<<str
<?php
		\$where='';//为了防止干扰到其他栏目，必须先清空
		if($cid){
		\$where=" category_cid={$cid} and flag!='推荐' ";
		}
		\$db=M('content');
		\$hots=\$db->where(\$where)->limit($row)->all();
		foreach(\$hots as \$field):
		\$field['url']=U('Index/content',array('id'=>\$field['id']));
		\$field['thumb']='__ROOT__/'.\$field['thumb'];
		?>
str;
		$php.=$content;
		$php.="<?php endforeach;?>";
		return $php;
	}

	function _links($attr,$content){
	$row=isset($attr['row'])?$attr['row']:10;
	$php=<<<str
<?php
		\$where='';//为了防止干扰到其他栏目，必须先清空
		\$where="  status=1 ";
		\$db=M('links');
		\$hots=\$db->where(\$where)->limit($row)->all();
		foreach(\$hots as \$field):
		\$field['logo']='__ROOT__/'.\$field['logo'];
		?>
str;
		$php.=$content;
		$php.="<?php endforeach;?>";
		return $php;
	}

	function _cats($attr,$content){
	$row=isset($attr['row'])?$attr['row']:10;
	$cid=Q('get.cid','','');
	$php=<<<str
<?php
		\$where='';//为了防止干扰到其他栏目，必须先清空
		if($cid){
		\$where=" pid={$cid} ";
		}
		\$db=M('category');
		\$hots=\$db->where(\$where)->limit($row)->all();
		foreach(\$hots as \$field):
		\$field['url']=U('Index/category',array('cid'=>\$field['cid']));
		\$field['thumb']='__ROOT__/'.\$field['face_thumb'];
		?>
str;
		$php.=$content;
		$php.="<?php endforeach;?>";
		return $php;
	}

	function _arts($attr,$content){
	$row=isset($attr['row'])?$attr['row']:10;
	$cid=Q('get.cid','','');
	$php=<<<str
<?php
		\$where='';//为了防止干扰到其他栏目，必须先清空
		if($cid){
		\$where=" category_cid={$cid} ";
		}
		\$db=M('content');
		\$hots=\$db->where(\$where)->limit($row)->all();
		foreach(\$hots as \$field):
		\$field['url']=U('Index/content',array('id'=>\$field['id']));
		\$field['thumb']='__ROOT__/'.\$field['thumb'];
		?>
str;
		$php.=$content;
		$php.="<?php endforeach;?>";
		return $php;
	}

	}