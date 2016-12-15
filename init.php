<?
//引入文件或者定义目录常量
//init.php
header("Content-type: text/html; charset=utf-8");   

session_start();

// 定义
define("ROOT_PATH",str_replace("\\","/",dirname(__FILE__)) );

//视图目录常量
//为什么定义？
define("TEMPLATE_PATH",str_replace("\\","/",dirname(__FILE__)).'/template/' );


//有多种模版、中英文的网站。中文是不是要在一个模版文件夹里、英文的视图又在另外一个文件夹

define("URL_PATH",'http://'.$_SERVER['HTTP_HOST'].'/'.str_replace($_SERVER['DOCUMENT_ROOT'],'', dirname($_SERVER['SCRIPT_FILENAME'])) );


// print_r($_SERVER);
 
// http://localhost/20160926/1208/enterprise/public

include_once(ROOT_PATH."/model/mysql.php");                
include_once(ROOT_PATH."/config.php");                
include_once(ROOT_PATH."/libraries/functions.php");                
include_once(ROOT_PATH."/libraries/smarty/Smarty.class.php");   
include_once(ROOT_PATH."/cores/BaseModel.php");                
include_once(ROOT_PATH."/cores/BaseView.php");                
include_once(ROOT_PATH."/cores/BaseController.php");                
 

 // 安全过滤
foreach ($_POST as $key => $value) {
	   $_POST[$key]=addslashes($value);
}

foreach ($_GET as $key => $value) {
	   $_GET[$key]=addslashes($value);
 }

	
 

?>