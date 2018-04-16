<?php
/* Smarty version 3.1.30, created on 2018-04-16 08:56:41
  from "/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/signIn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad4492901d2c1_07227642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9f8d483acbebf02aecce34e50ab5efc17ec0f0c' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/signIn.tpl',
      1 => 1523861786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad4492901d2c1_07227642 (Smarty_Internal_Template $_smarty_tpl) {
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
