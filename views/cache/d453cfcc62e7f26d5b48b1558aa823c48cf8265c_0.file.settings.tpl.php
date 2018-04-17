<?php
/* Smarty version 3.1.30, created on 2018-04-17 17:40:43
  from "/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6157b9d5417_45875874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd453cfcc62e7f26d5b48b1558aa823c48cf8265c' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/settings.tpl',
      1 => 1523979641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6157b9d5417_45875874 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="/cabinet">Назад</a>

<h2><?php echo $_smarty_tpl->tpl_vars['TitleSettings']->value;?>
</h2>


<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PathListFunction']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<?php }
}
