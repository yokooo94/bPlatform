<?php
/* Smarty version 3.1.30, created on 2018-04-18 21:24:34
  from "/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/addBet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad79b72349747_35338662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39389dc85a79b8ba9be01aae1b8afbca766e2565' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/bPlatform/views/cabinet/addBet.tpl',
      1 => 1524079470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad79b72349747_35338662 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2><?php echo $_smarty_tpl->tpl_vars['TitleAddBet']->value;?>
</h2>

<form action="" method="post">
    <p>Event: <input type="text" name="event" /></p>
    <p>BetType: <input type="text" name="bettype" /></p>
    <p>Коэффициент: <input type="text" name="coefficient" /></p>

    <p>Сумма: <input type="text" name="amount" /></p>
    <p>Общий Коэффициент: <input type="text" name="coefficientBet" /></p>
    <p><input type="submit" /></p>
</form>
<?php }
}
