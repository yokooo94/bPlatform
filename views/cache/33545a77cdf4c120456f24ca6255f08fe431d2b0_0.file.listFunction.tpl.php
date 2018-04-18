<?php
/* Smarty version 3.1.30, created on 2018-04-18 00:09:50
  from "/Users/i337799/VS Code Workspace/bPlatform/views/cabinet/includes/listFunction.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad670ae4eee44_09664685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33545a77cdf4c120456f24ca6255f08fe431d2b0' => 
    array (
      0 => '/Users/i337799/VS Code Workspace/bPlatform/views/cabinet/includes/listFunction.tpl',
      1 => 1523999154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad670ae4eee44_09664685 (Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
    .myborder{
        border: 1px solid black;
    }
</style>

<div class="myborder">
    <p>Список функционала у пользователя</p>

<ul>
    <?php if (empty($_smarty_tpl->tpl_vars['User']->value->ownUserFunction)) {?>
        <li>Список пуст</li>
    <?php } else { ?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['User']->value->ownUserFunction, 'map');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['map']->value) {
?>
            <li>Статус: <?php echo $_smarty_tpl->tpl_vars['map']->value->status;?>
. Активен до : <?php echo $_smarty_tpl->tpl_vars['map']->value->dateLimitation;?>
 <?php echo $_smarty_tpl->tpl_vars['map']->value->function->name;?>
 (<?php echo $_smarty_tpl->tpl_vars['map']->value->function->description;?>
) [<?php echo $_smarty_tpl->tpl_vars['map']->value->function->price;?>
 р.]</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?>
</ul>
</div>
<?php }
}
