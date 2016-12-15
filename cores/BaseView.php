<?
// 视图的父类
// 基类


class BaseView {

	private $var=array();
	private $view_smarty;

	public function __construct()
	{
		$this->view_smarty=new Smarty();
		$this->view_smarty->template_dir="template"; //template_dir  模版目录
		$this->view_smarty->compile_dir="compile";//编译的目录
		// $this->view_smarty->caching =true;//开启缓存

	}


	/**
	 * 模版（视图）变量赋值
	 * @param  [string] $tempate_key  [模版变量的键]
	 * @param  [string] $template_val [模版变量的值]
	 * @return [type]               [description]
	 */
	public function assigin($tempate_key,$template_val)
	{
		$this->var[$tempate_key]=$template_val;
	}

	/**
	 * 视图
	 * @param  string $view_name 视图名称
	 */
	public function display($view_name,$no_contro=false,$control='')
	{

		
		foreach ($this->var as $key => $value) {
			$this->view_smarty->assign($key,$value);
		}

		

		//如果有缓存，就用缓存
		
		if ($no_contro) {
			$this->view_smarty->display($view_name.".html");
		}else{
			$this->view_smarty->display($control."/".$view_name.".html");

		}
		
		// include_once ROOT_PATH."/template/".$this->control."/".$view_name.".html";
	}
	

	public function is_cached($view_path)
	{

		//下一步判断这个页面到底有没有缓存
		return  $this->view_smarty->isCached($view_path);
	}

	public function clear_all_cache()
	{
		$this->view_smarty->clearAllCache();
	}
	/**
	 * 跳转页面
	 * @param  string $tip_val 提示信息
	 * @param  string $go_val  跳转的url
	 */
	public function jump_do($tip_val,$go_val)
	{
		
		$this->assigin('tip_what',$tip_val);
		$this->assigin('go_where',URL_PATH.$go_val);
		$this->display("success",true);
	}
}


?>