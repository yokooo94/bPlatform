<?php
/* Smarty version 3.1.30, created on 2018-04-18 00:14:59
  from "/Users/i337799/VS Code Workspace/bPlatform/views/cabinet/signIn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad671e3f278e7_82760129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc51c50653f151dd41cf1a0da3d570205956965f' => 
    array (
      0 => '/Users/i337799/VS Code Workspace/bPlatform/views/cabinet/signIn.tpl',
      1 => 1523999154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad671e3f278e7_82760129 (Smarty_Internal_Template $_smarty_tpl) {
?>

<p><?php echo $_smarty_tpl->tpl_vars['Error']->value;?>
</p>
<form action="" method="post">
    <p>E-mail: <input type="email" name="email" /></p>
    <p>Пароль: <input type="password" name="password" /></p>
    <p><input type="submit" /></p>
</form>

<a href="/cabinet/signUp">Регистрация</a><?php }
}
