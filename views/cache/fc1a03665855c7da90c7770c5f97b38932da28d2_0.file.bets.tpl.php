<?php
/* Smarty version 3.1.30, created on 2018-04-17 20:26:58
  from "/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/bets.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad63c72e35749_24962992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc1a03665855c7da90c7770c5f97b38932da28d2' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/bets.tpl',
      1 => 1523989191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad63c72e35749_24962992 (Smarty_Internal_Template $_smarty_tpl) {
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
