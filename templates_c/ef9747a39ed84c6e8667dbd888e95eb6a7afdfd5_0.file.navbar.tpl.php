<?php
/* Smarty version 3.1.48, created on 2023-05-06 19:49:49
  from 'H:\OSPanel\domains\Fermula\template\user\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6456852d8b18c5_20409769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef9747a39ed84c6e8667dbd888e95eb6a7afdfd5' => 
    array (
      0 => 'H:\\OSPanel\\domains\\Fermula\\template\\user\\navbar.tpl',
      1 => 1683391786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6456852d8b18c5_20409769 (Smarty_Internal_Template $_smarty_tpl) {
?>   <nav id="navbar" class="navbar">
        <div class="navbar-logo">Фермула</div>
        <div class="navbar-info">
            <div class="navbar-balance">
                <img src="template/assets/images/icons/coin.png" alt="coin">
                <span><?php echo $_smarty_tpl->tpl_vars['user']->value['balance'];?>
</span>
            </div>
            <div class="navbar-energy">
                <img src="template/assets/images/icons/lightning.png" alt="lightning">
                <span><?php echo $_smarty_tpl->tpl_vars['user']->value['lvl'];?>
</span>
            </div>
        </div>
    </nav><?php }
}
