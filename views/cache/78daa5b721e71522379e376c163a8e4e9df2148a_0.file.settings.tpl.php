<?php
/* Smarty version 3.1.30, created on 2018-04-18 00:09:50
  from "/Users/i337799/VS Code Workspace/bPlatform/views/cabinet/settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad670ae4d4817_33331702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78daa5b721e71522379e376c163a8e4e9df2148a' => 
    array (
      0 => '/Users/i337799/VS Code Workspace/bPlatform/views/cabinet/settings.tpl',
      1 => 1523999154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad670ae4d4817_33331702 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="/cabinet">Назад</a>

<h2><?php echo $_smarty_tpl->tpl_vars['TitleSettings']->value;?>
</h2>


<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PathListFunction']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<?php }
}
