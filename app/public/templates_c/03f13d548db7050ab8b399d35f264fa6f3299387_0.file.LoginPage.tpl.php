<?php
/* Smarty version 3.1.30, created on 2018-03-14 00:28:37
  from "C:\sites\www.projeto.com\app\template\LoginPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa86cb50e5e21_13562555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03f13d548db7050ab8b399d35f264fa6f3299387' => 
    array (
      0 => 'C:\\sites\\www.projeto.com\\app\\template\\LoginPage.tpl',
      1 => 1520987312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa86cb50e5e21_13562555 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Projeto</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>

body{
	 background-color: lightblue;
}

</style>
</head>
<body>
<H1><?php echo $_smarty_tpl->tpl_vars['teste']->value;?>
</H1>
<h2><?php echo $_smarty_tpl->tpl_vars['tt']->value;?>
</h2>
<h3><?php echo $_smarty_tpl->tpl_vars['pt']->value;?>
</h3>
<h4><?php echo $_smarty_tpl->tpl_vars['g']->value;?>
</h4>

</body>
</html><?php }
}
