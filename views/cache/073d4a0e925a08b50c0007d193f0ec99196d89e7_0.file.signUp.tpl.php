<?php
/* Smarty version 3.1.30, created on 2018-04-18 00:15:00
  from "/Users/i337799/VS Code Workspace/bPlatform/views/cabinet/signUp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad671e4dc7679_99315864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '073d4a0e925a08b50c0007d193f0ec99196d89e7' => 
    array (
      0 => '/Users/i337799/VS Code Workspace/bPlatform/views/cabinet/signUp.tpl',
      1 => 1523999154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad671e4dc7679_99315864 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p><?php echo $_smarty_tpl->tpl_vars['Error']->value;?>
</p>
<form action="" method="post">
    <p>Логин: <input type="text" name="login" /></p>
    <p>E-mail: <input type="email" name="email" /></p>
    <p>Пароль: <input type="password" name="password" /></p>
    <p><input type="submit" /></p>
</form>

<a href="/cabinet/signIn">Вход в систему</a><?php }
}
