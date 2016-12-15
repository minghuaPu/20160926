<?php
/* Smarty version 3.1.30, created on 2016-12-15 10:59:13
  from "D:\wamp\www\20160926\1212\dream_upgrade\template\job\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5852070161f8b2_07197771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f943c5cda1ed3a0180711bc3ad48f969bd5ef11e' => 
    array (
      0 => 'D:\\wamp\\www\\20160926\\1212\\dream_upgrade\\template\\job\\index.html',
      1 => 1481765818,
      2 => 'file',
    ),
    'f5532b936fd236320d8c958a617d7da5f66e2100' => 
    array (
      0 => 'D:\\wamp\\www\\20160926\\1212\\dream_upgrade\\template\\public\\header.html',
      1 => 1481699978,
      2 => 'file',
    ),
    '4bb09aadb257bbfb8f2e779daac743c2da6e231e' => 
    array (
      0 => 'D:\\wamp\\www\\20160926\\1212\\dream_upgrade\\template\\public\\footer.html',
      1 => 1481770582,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5852070161f8b2_07197771 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <title>职位管理列表</title>

  <!-- 引用jQuery -->
  <script type="text/javascript" src="http://localhost/20160926/1212/dream_upgrade/public/js/jquery.1.11.1.min.js"></script>
  <link rel="stylesheet" href="http://localhost/20160926/1212/dream_upgrade/public/bootstrap-3.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/20160926/1212/dream_upgrade/public/css/common.css"></head>
	
<body>
<!-- 怎么引入一个文件 -->
  <div class="container">
    <a href="http://localhost/20160926/1212/dream_upgrade/job/add" class="btn btn-success">添加招聘</a>
    <a href="http://localhost/20160926/1212/dream_upgrade/company" class="btn btn-success">企业管理</a>
    
    <br>
    <br>

    <div class="row mb10">
      <div class="col-md-4">排序：<a href="http://localhost/20160926/1212/dream_upgrade/job/index">默认</a> | <a href="http://localhost/20160926/1212/dream_upgrade/index.php?c=job&sort=time">时间升序</a>  | <a href="http://localhost/20160926/1212/dream_upgrade/index.php?c=job&sort=money">工资多到少</a></div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
          <form action="index.php?c=job" method="post">
            <input type="text" name="keywords" class="form-control in-block" placeholder="请输入岗位关键词">
            <input type="submit" class="btn btn-info">
          </form>

      </div>
    </div>

    <table class="table">
      <tr>
        <th>编号</th>
        <th>岗位名称</th>
        <th>工资</th>
        <th>要求</th>
        <th>发布时间</th>
        <th>操作</th>
      </tr>
    
    <tr>
      <td>22</td>
      <td>项目老板</td>
      <td>23234234</td>
      <td>234234</td>
      <td>2016-12-13 16:36</td>
      <td> <a href='index.php?c=job&a=edit&id=22'>修改</a> &nbsp;&nbsp;<a onclick=confim_do('index.php?c=job&a=delete&id=22') class='text-danger'  >删除</a></td>
    </tr>

    
    <tr>
      <td>21</td>
      <td>项目经理</td>
      <td>234234</td>
      <td>234234</td>
      <td>2016-12-13 16:35</td>
      <td> <a href='index.php?c=job&a=edit&id=21'>修改</a> &nbsp;&nbsp;<a onclick=confim_do('index.php?c=job&a=delete&id=21') class='text-danger'  >删除</a></td>
    </tr>

    
    <tr>
      <td>20</td>
      <td>产品经理</td>
      <td>123123</td>
      <td>123123</td>
      <td>2016-12-13 16:35</td>
      <td> <a href='index.php?c=job&a=edit&id=20'>修改</a> &nbsp;&nbsp;<a onclick=confim_do('index.php?c=job&a=delete&id=20') class='text-danger'  >删除</a></td>
    </tr>

    
    <tr>
      <td>19</td>
      <td>UI设计</td>
      <td>34234</td>
      <td>234234</td>
      <td>2016-12-13 16:35</td>
      <td> <a href='index.php?c=job&a=edit&id=19'>修改</a> &nbsp;&nbsp;<a onclick=confim_do('index.php?c=job&a=delete&id=19') class='text-danger'  >删除</a></td>
    </tr>

    
    <tr>
      <td>18</td>
      <td>前端工程师</td>
      <td>32232</td>
      <td>看见了空间</td>
      <td>2016-12-13 15:09</td>
      <td> <a href='index.php?c=job&a=edit&id=18'>修改</a> &nbsp;&nbsp;<a onclick=confim_do('index.php?c=job&a=delete&id=18') class='text-danger'  >删除</a></td>
    </tr>

    
    <tr>
      <td>16</td>
      <td>Java高级程师</td>
      <td>23234234</td>
      <td></td>
      <td>2016-12-12 16:32</td>
      <td> <a href='index.php?c=job&a=edit&id=16'>修改</a> &nbsp;&nbsp;<a onclick=confim_do('index.php?c=job&a=delete&id=16') class='text-danger'  >删除</a></td>
    </tr>

    
    <tr>
      <td>15</td>
      <td>JavaG程师</td>
      <td>88888</td>
      <td>sf斯蒂芬斯蒂芬</td>
      <td>2016-12-12 16:32</td>
      <td> <a href='index.php?c=job&a=edit&id=15'>修改</a> &nbsp;&nbsp;<a onclick=confim_do('index.php?c=job&a=delete&id=15') class='text-danger'  >删除</a></td>
    </tr>

    

      
    </table>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
        分页：4/8
          <a href="http://localhost/20160926/1212/dream_upgrade/index.php?c=job&p=1">第一页</a>
          <a href="http://localhost/20160926/1212/dream_upgrade/index.php?c=job&p=2">第二页</a>
        </div>
        <div class="col-md-2"></div>
    </div>
    <a href="http://localhost/20160926/1212/dream_upgrade/index.php?a=logout" class="btn btn-danger fr">退出</a>
  </div>
  <script>
      function confim_do (href_url) {
        if (window.confirm("确认删除这条信息吗？")) {
            location.href=href_url;
        }else{
          

        }
      }
  </script>



<div class="container" style="margin-top:80px">
	<div class="row">
		<div class="col-md-2">copyright @smith</div>
		<div class="col-md-7">
			<a href="">关于我们</a>
			|
			<a href="">联系我们</a>
		</div>
		<div class="col-md-3">

			<a href="http://localhost/20160926/1212/dream_upgrade/system/clear_all_cache">清除所有缓存</a>

		</div>
	</div>
</div>
</body>
</html>

<?php }
}
