<?php
/* Smarty version 3.1.30, created on 2018-04-17 23:48:50
  from "/Users/i337799/VS Code Workspace/bPlatform/views/cabinet/bets.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad66bc267f920_73635098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99d23b945c3e2102bd0a9ab9172630dd66308a61' => 
    array (
      0 => '/Users/i337799/VS Code Workspace/bPlatform/views/cabinet/bets.tpl',
      1 => 1523999154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad66bc267f920_73635098 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="/cabinet">Назад</a>

<h2><?php echo $_smarty_tpl->tpl_vars['TitleBets']->value;?>
</h2>


<ul>
    <?php if (empty($_smarty_tpl->tpl_vars['User']->value->ownBet)) {?>
        <li>Ставок пока нет</li>
    <?php } else { ?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['User']->value->ownBet, 'bet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bet']->value) {
?>
            <li><a href='/cabinet/bets/<?php echo $_smarty_tpl->tpl_vars['bet']->value->id;?>
'>Ставка #<?php echo $_smarty_tpl->tpl_vars['bet']->value->id;?>
</a> Общий коэффициент: <?php echo $_smarty_tpl->tpl_vars['bet']->value->coefficient;?>
 [Сумма : <?php echo $_smarty_tpl->tpl_vars['bet']->value->amount;?>
 р.] Статус - <?php echo $_smarty_tpl->tpl_vars['bet']->value->status;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?>
</ul><?php }
}
