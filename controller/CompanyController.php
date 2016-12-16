<?
/**
* 企业信息类
*/
class CompanyController extends BaseController
{
	
	public function index()
	{
		$pdo_model=new BaseModel();


		if ($_REQUEST['sort']=='time') {
			$order=' add_time asc';
		}

		$company_list=$pdo_model->lists("company",'',array('enterprise_id'=>$_SESSION['uid']),$order);
		 
	 

		$this->assigin("title",'企业信息管理列表');
		$this->assigin("company_list",$company_list);
		$this->display("index"); 
	}


	public function add()
	{
		$this->display("add"); 

	}

	public function save()
	{
		  $pdo_model=new BaseModel();
		list($name,$file_type)=explode('/', $_FILES['photo']['type']);
		
		$photo_path='/uploads/'.time().".".$file_type;

		move_uploaded_file($_FILES['photo']['tmp_name'], ROOT_PATH.$photo_path);
		
		$add_array['company_name']=$_POST['company_name'];
		$add_array['telphone']=$_POST['telphone'];
		$add_array['address']=$_POST['address'];
		$add_array['add_time']=time();

		$add_array['enterprise_id']=$_SESSION['uid'];
		$add_array['photo']=$photo_path;

		$pdo_model->add("company",$add_array);


		parent::jump_do("添加成功！","/company");
	}


	public function edit()
	{
		$pdo_model=new BaseModel();

		$id=intval($_REQUEST['id']);

		$info_arr=$pdo_model->get_info('company',array('id'=>$id));

		$this->assigin("info_arr",$info_arr);
		$this->display("edit"); 

	}

	public function update()
	{
		$pdo_model=new BaseModel();

		$id=intval($_REQUEST['id']);
		
		$_POST['enterprise_id']=$_SESSION['uid'];
		$pdo_model->update('company',$_POST,array('id'=>$id));

		jump_do("修改成功！","/company");
	}

	public function delete()
	{
		$pdo_model=new BaseModel();

		$id=intval($_REQUEST['id']);
		if ($id>0) {
			$pdo_model->delete('company',$id);
			parent::jump_do("删除成功！","/company");
		}else{
			parent::jump_do("操作有误！","/company");
		}
	}

}

?>