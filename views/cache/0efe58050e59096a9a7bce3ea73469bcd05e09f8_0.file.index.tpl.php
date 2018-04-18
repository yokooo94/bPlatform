<?php
/* Smarty version 3.1.30, created on 2018-04-17 23:48:45
  from "/Users/i337799/VS Code Workspace/bPlatform/views/cabinet/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad66bbdb5f9d2_24130621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0efe58050e59096a9a7bce3ea73469bcd05e09f8' => 
    array (
      0 => '/Users/i337799/VS Code Workspace/bPlatform/views/cabinet/index.tpl',
      1 => 1523999154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad66bbdb5f9d2_24130621 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
</h2>

<a href="/cabinet/bets">Мои ставки</a>

<a href="/cabinet/settings">Настройки</a>
<a href="/cabinet/logOut">Выйти из системы</a><?php }
}
