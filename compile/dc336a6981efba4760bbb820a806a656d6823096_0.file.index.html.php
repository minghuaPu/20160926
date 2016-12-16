<?php
/* Smarty version 3.1.30, created on 2016-12-16 16:31:49
  from "D:\wamp\www\20160926\dream_upgrade\template\job\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5853a6757a24e5_56933936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc336a6981efba4760bbb820a806a656d6823096' => 
    array (
      0 => 'D:\\wamp\\www\\20160926\\dream_upgrade\\template\\job\\index.html',
      1 => 1481877107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
    'file:public/footer.html' => 1,
  ),
),false)) {
function content_5853a6757a24e5_56933936 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\20160926\\dream_upgrade\\libraries\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- 怎么引入一个文件 -->
  <div class="container">
    <a href="<?php echo URL_PATH;?>
/job/add" class="btn btn-success">添加招聘</a>
    <a href="<?php echo URL_PATH;?>
/company" class="btn btn-success">企业管理</a>
    
    <br>
    <br>

    <div class="row mb10">
      <div class="col-md-4">排序：<a href="<?php echo URL_PATH;?>
/job/index">默认</a> | <a href="<?php echo URL_PATH;?>
/index.php?c=job&sort=time">时间升序</a>  | <a href="<?php echo URL_PATH;?>
/index.php?c=job&sort=money">工资多到少</a></div>
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['job_list']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>

    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['value']->value['job_name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['value']->value['money'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['value']->value['job_require'];?>
</td>
      <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['add_time'],'Y-m-d H:i');?>
</td>
      <td> <a href='index.php?c=job&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'>修改</a> &nbsp;&nbsp;<a onclick=confim_do('index.php?c=job&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
') class='text-danger'  >删除</a></td>
    </tr>

    <?php
}
} else {
?>

    <tr>
      <td colspan="6">没有相关信息！</td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


      
    </table>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
       当前：第<?php echo $_smarty_tpl->tpl_vars['page_args']->value['page'];?>
页，总共：<?php echo $_smarty_tpl->tpl_vars['page_args']->value['total_page'];?>
页
         <?php echo $_smarty_tpl->tpl_vars['page_args']->value['p_li_html'];?>

        </div>
        <div class="col-md-2"></div>
    </div>
    <a href="<?php echo URL_PATH;?>
/index.php?a=logout" class="btn btn-danger fr">退出</a>
  </div>
  <?php echo '<script'; ?>
>
      function confim_do (href_url) {
        if (window.confirm("确认删除这条信息吗？")) {
            location.href=href_url;
        }else{
          

        }
      }
  <?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
