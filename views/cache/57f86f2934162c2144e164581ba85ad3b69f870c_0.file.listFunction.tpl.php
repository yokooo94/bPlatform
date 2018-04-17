<?php
/* Smarty version 3.1.30, created on 2018-04-17 22:20:27
  from "/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/includes/listFunction.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6570becc402_60376205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57f86f2934162c2144e164581ba85ad3b69f870c' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/includes/listFunction.tpl',
      1 => 1523988464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6570becc402_60376205 (Smarty_Internal_Template $_smarty_tpl) {
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
