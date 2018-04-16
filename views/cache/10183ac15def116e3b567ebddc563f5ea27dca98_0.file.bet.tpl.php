<?php
/* Smarty version 3.1.30, created on 2018-04-16 23:09:22
  from "/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/bet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad5110274f795_31548983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10183ac15def116e3b567ebddc563f5ea27dca98' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/bet.tpl',
      1 => 1523912908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad5110274f795_31548983 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Ставка #<?php echo $_smarty_tpl->tpl_vars['Bet']->value['id'];?>
</h2>

<ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Content']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['row']->value->event->teamHome;?>

        <li><?php echo $_smarty_tpl->tpl_vars['row']->value->event->tour->season->league->sport->name;?>
. <?php echo $_smarty_tpl->tpl_vars['row']->value->event->tour->season->league->name;?>
. Тур : <?php echo $_smarty_tpl->tpl_vars['row']->value->event->tour->number;?>
. <?php echo $_smarty_tpl->tpl_vars['row']->value->event->date;?>
 Ставка :  <?php echo $_smarty_tpl->tpl_vars['row']->value->bettype->name;?>
, Коэффициент : <?php echo $_smarty_tpl->tpl_vars['row']->value->coefficient;?>
, Статус - <?php echo $_smarty_tpl->tpl_vars['row']->value->status;?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul><?php }
}
