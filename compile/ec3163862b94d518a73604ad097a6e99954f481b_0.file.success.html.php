<?php
/* Smarty version 3.1.30, created on 2016-12-16 09:23:10
  from "D:\wamp\www\20160926\dream_upgrade\template\success.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585341fe082075_01547461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec3163862b94d518a73604ad097a6e99954f481b' => 
    array (
      0 => 'D:\\wamp\\www\\20160926\\dream_upgrade\\template\\success.html',
      1 => 1481706035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585341fe082075_01547461 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<title>提示页面</title>

	<link rel="stylesheet" href="<?php echo URL_PATH;?>
/public/bootstrap-3.3.0/css/bootstrap.min.css"></head>

</head>

<body>
	<div class="container">
		<h1>
			<?php echo $_smarty_tpl->tpl_vars['tip_what']->value;?>
</h1>
		<a class="btn"  href="<?php echo $_smarty_tpl->tpl_vars['go_where']->value;?>
">立即跳转</a>
	</div>
</body>
</html><?php }
}
