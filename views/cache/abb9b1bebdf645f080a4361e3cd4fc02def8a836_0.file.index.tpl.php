<?php
/* Smarty version 3.1.30, created on 2018-04-16 21:45:31
  from "/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad4fd5b0206c0_51813176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abb9b1bebdf645f080a4361e3cd4fc02def8a836' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/index.tpl',
      1 => 1523907922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad4fd5b0206c0_51813176 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
</h2>

<a href="/cabinet/bets">Мои ставки</a>

<a href="/cabinet/settings">Настройки</a>
<a href="/cabinet/logOut">Выйти из системы</a><?php }
}
