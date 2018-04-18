<?php
/* Smarty version 3.1.30, created on 2018-04-18 20:42:36
  from "/Users/i337799/VS Code Workspace/bPlatform/views/cabinet/bet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad7919cd021c2_81372190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e841695c1f558137df94704ca18ba83321c7a6d' => 
    array (
      0 => '/Users/i337799/VS Code Workspace/bPlatform/views/cabinet/bet.tpl',
      1 => 1524001812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad7919cd021c2_81372190 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="/cabinet/bets">Назад</a>

<h2>Ставка #<?php echo $_smarty_tpl->tpl_vars['Bet']->value['id'];?>
</h2>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Bet']->value->ownBetcontent, 'content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
?>
        
        
        <p> <?php echo $_smarty_tpl->tpl_vars['content']->value->event->tour->season->league->sport->name;?>
.
            <?php echo $_smarty_tpl->tpl_vars['content']->value->event->tour->season->league->name;?>
.
            Тур : <?php echo $_smarty_tpl->tpl_vars['content']->value->event->tour->number;?>
.
                <?php echo $_smarty_tpl->tpl_vars['content']->value->event->teamHome;?>
 - <?php echo $_smarty_tpl->tpl_vars['content']->value->event->teamAway;?>

            <?php echo $_smarty_tpl->tpl_vars['content']->value->event->date;?>

            Ставка :  <?php echo $_smarty_tpl->tpl_vars['content']->value->bettype->name;?>
,
            Коэффициент : <?php echo $_smarty_tpl->tpl_vars['content']->value->coefficient;?>
,
            Статус - <?php echo $_smarty_tpl->tpl_vars['content']->value->status;?>

        </p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
