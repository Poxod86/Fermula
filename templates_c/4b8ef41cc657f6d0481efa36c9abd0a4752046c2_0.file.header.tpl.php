<?php
/* Smarty version 3.1.48, created on 2023-05-07 17:50:30
  from 'H:\OSPanel\domains\Fermula\template\user\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6457bab680b6d8_37208473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b8ef41cc657f6d0481efa36c9abd0a4752046c2' => 
    array (
      0 => 'H:\\OSPanel\\domains\\Fermula\\template\\user\\header.tpl',
      1 => 1683471022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6457bab680b6d8_37208473 (Smarty_Internal_Template $_smarty_tpl) {
?><header id="header" class="header">
        <div class="page-name"><?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
</div>
</header>
<div class="header-level">
    <div class="header-level-progress" style="width: <?php echo $_smarty_tpl->tpl_vars['user_lvl_progress']->value;?>
%;"></div>
</div>
<style>
    .header-level {
        width: 100%;
        height: 3px;
        background: rgba(0, 0, 0, 0.25);
        overflow: hidden;
    }

    .header-level-progress {
        height: 100%;
        background-color: #FF8E3C;
    }
</style><?php }
}
