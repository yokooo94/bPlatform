<?php
/* Smarty version 3.1.30, created on 2018-04-15 19:31:18
  from "/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/signUp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad38c663bc317_34322609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7358e9395710a27d229363ab8f3f85c731731a4' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/signUp.tpl',
      1 => 1523813422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad38c663bc317_34322609 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p><?php echo $_smarty_tpl->tpl_vars['Error']->value;?>
</p>
<form action="" method="post">
    <p>Логин: <input type="text" name="login" /></p>
    <p>E-mail: <input type="email" name="email" /></p>
    <p>Пароль: <input type="password" name="password" /></p>
    <p><input type="submit" /></p>
</form><?php }
}
