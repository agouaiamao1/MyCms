<?php
	class ConfigModel extends Model{
	public $table="config";
	function get_all_config(){
		$config=$this->all();
		foreach ($config as $k => $v) {
			$html="<tr ><td>".$v['title'].":</td>";
			switch($v['show_type']){
			case 1:
				$html.="<td><input class='w200' name='{$v['id']}' type='text' value='{$v['value']}'/></td></tr>";
			break;
			case 2:
				$conf=explode(",",$v['conf']);
				$html.="<td>";
				foreach($conf as $k1 =>$v1){
				$s=explode(":",$v1);
				
				$va=intval($s[0])==1?1:0;
				$select=$s[0]==$v['value']?"checked='checked'":"";
				$html.="<label><input type='radio' name='{$v['id']}' value='{$va}' {$select}/>".$s[1]."</label>";
				}
				$html.="</td></tr>";
			break;
			case 3:
				$html.="<td><input class='w200' name='{$v['id']}' type='hidden' value='{$v['value']}'/></td></tr>";

			}
			$config[$k]['_html']=$html;
			}
			return $config;
		}

		function edit_config(){
		foreach ($_POST as $key => $value) {
			$this->save(array("id"=>$key,"value"=>$value));
		}
			$confs=$this->field("name,value")->all();
			$arr=array();
			foreach ($confs as $k => $v) {
				$arr[$v['name']]=$v['value'];
				if ($v['value'] =='1' ) {
					$arr[$v['name']]=1;
				}

				if ($v['value'] =='0') {
					$arr[$v['name']]=0;
				}
			}
			$data="<?php\n if(!defined('HDPHP_PATH')) exit;\nreturn ".var_export($arr,true).";?>";
			return file_put_contents("./data/config/config.inc.php",$data);
		}

		public function edit_tpl(){
				$t=Q('post.tpl','','');

				$this->where("id=11")->save(array('tpl_type'=>$t));
				$this->edit_config();
				return true;
		}

	}