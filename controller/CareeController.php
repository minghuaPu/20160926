<?
/**
 * 职位控制器
 */
class CareeController extends BaseController{

	public function index()
	{
		$this->display("index");
	}


	public function show_list_ajax()
	{
		//第一步：职位列表查出来
		
		$mysql=$this->loadModel('mysql');
		$limit_start=0;
		$page_num=4;

		$scroll_count=$_POST['scroll_count'];
		if ($scroll_count>0) {
			$limit_start=$scroll_count*$page_num;//1
			
		}

		$job_list=$mysql->lists("job",$limit_start.','.$page_num);


		//第二步：输出json格式
		 
		echo json_encode($job_list);

	}

	public function show_job()
	{
		$mysql=$this->loadModel('mysql');

		$info=$mysql->get_info('job',array('id'=>$_GET['id']));
		

		$company_info=$mysql->get_info('company',array('enterprise_id'=>$info['enterprise_id']));

		$this->assigin('info',$info);
		$this->assigin('company_info',$company_info);
		$this->display("show_job");
	}

}


?>