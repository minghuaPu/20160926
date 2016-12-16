<?
// 控制器的父类
// 基类


class BaseController {

	protected $control;
	private $var=array();
	private $view;

	public function __construct(){
		$this->control=get_class($this);
		// JobController
	    $this->control=strtolower(str_replace('Controller', '', $this->control));

	    $this->view=new BaseView();

	}

	public function run()
	{
		// 怎么调用全局的变量
		global $config_arr;

		$this->control=$_REQUEST['c'];//控制器

		if (empty($this->control)) {
		 	$this->control=$config_arr['default_c'];
		}

		$action=$_REQUEST['a'];//做什么事情？
	   if (empty($action)) {
		 	$action=$config_arr['default_a'];
		}
	  

		 //权限管理
		 // 这个数组里面的控制器需要登录
		 $access_arr=array('job','message','info');

		//怎么判断一个字符串是否在数组里面	 
		 if (in_array($this->control, $access_arr)) {
		 	 //判断到底有没有登录
		 		if (empty($_SESSION['uid'])) {
		 			header("location:index.php");
		 		}
		 }elseif ($this->control=='login' && $action=='index' && $_SESSION['uid']) {
		 	 header("location:index.php?c=job");
		 } 

		 


		 $control_name=$this->control."Controller";


		 // 任务：怎么判断该类到底存不存在？
		 $contorl_path=ROOT_PATH."/controller/".$control_name.".php";
		 if (!file_exists($contorl_path)) {
		 	echo 'access run!';exit();
		 }

		 include_once $contorl_path;//执行和引入文件


		 $job_class=new $control_name();
		 // //对象的调用
		 $job_class->$action();

	}
	/**
	 * 加载模型
	 * @param  string $modelName 模型名称
	 * @return class            模型对象
	 */
	public function loadModel($modelName)
	{
		include_once ROOT_PATH.'/model/'.$modelName.'.php';
		$mysql=new $modelName();
		
		return $mysql;
	}

	/**
	 * 指向视图父类的模版变量赋值方法
	 * @param  [type] $tempate_key  [description]
	 * @param  [type] $template_val [description]
	 * @return [type]               [description]
	 */
	public function assigin($tempate_key,$template_val)
	{
		$this->view->assigin($tempate_key,$template_val);

	}

	/**
	 * 指引到视图的父类
	 * @param  string $view_name 视图名称
	 */
	public function display($view_name,$no_contro=false)
	{

		$this->view->display($view_name,$no_contro=false,$this->control);


	}
	

	public function is_cached($view_path)
	{

		//下一步判断这个页面到底有没有缓存
		return $this->view->is_cached($view_path);
	}


	public function clear_all_cache()
	{
		$this->view->clear_all_cache();
	}
	/**
	 * 指引到视图的跳转方法
	 * @param  string $tip_val 提示信息
	 * @param  string $go_val  跳转的url
	 */
	public function jump_do($tip_val,$go_val)
	{
		$this->view->jump_do($tip_val,$go_val);

	}
	
}


?>