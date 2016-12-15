<?php
/**
 * 登录控制器对象
 */
class LoginController extends BaseController{

	public function index()
	{
		include_once ROOT_PATH.'/template/login.html';
	}

	public function do_login()
	{
		 if ($_POST['yzm_val']!=$_SESSION['yzm_code']) {
		 	
			jump_do("验证码不正确！","/login");

		 }

		 $pwd=md5($_POST['user_pwd']);

		 $pdo_model=new BaseModel();

		 $info= $pdo_model->get_info('enterprise_user',array('user_name'=>$_POST['user_name'],'user_pwd'=>$pwd)); 
		 

		if ($info) {
			 
			$_SESSION['uid']=$info['id'];

			// 记住我，7天免登录 
			setcookie("user_login_status",1,time()+(3600*24*7) );//给cookie设置对应的键值，没有第三个参数：时间，默认：是关闭会话离开过期
			
			parent::jump_do("登录成功！","/job");
			
		}else{
			$json_str=array('status'=>0,'msg'=>'用户名或密码不正确！');
			setcookie("user_login_status",0);//给cookie设置对应的键值
			parent::jump_do("用户名或密码不正确！","/login");
			
		}

	}

	// 退出登录
	public function logout()
	{
		setcookie('user_login_status');
		session_destroy();


		parent::jump_do("退出成功！","/login");
	}

	// 注册页面
	public function register()
	{
		include_once ROOT_PATH.'/template/register.html';
	}
	//处理注册
	public function do_register()
	{
		$user_name=$_POST['user_name'];
		$user_pwd=md5($_POST['user_pwd']);
		 
		// 添加数据的语法
		// insert into 表名 (列名1,列名2) values (列名1的值，列名2的值);
		
		// 怎么防止用户名重复?
		// 如果有记录则不能注册
		
		 $pdo_model=new BaseModel();

		 $info= $pdo_model->get_info('enterprise_user',array('user_name'=>$user_name)); 
		 
	 	 
		if (!empty($info)) {
			parent::jump_do("该用户已经存在！","/job");

		}else{
			

			// 添加sql语句
			$add_array["user_name"]=$_POST['user_name'];
			$add_array["user_pwd"]=$user_pwd;
			$add_array["reg_time"]=time();
			

			$pdo_model->add("enterprise_user",$add_array);

			parent::jump_do("注册成功！","/job");

		}
	}
}	        
	


 

	 
	



?>