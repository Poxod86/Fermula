<?php
/* Smarty version 3.1.48, created on 2023-05-05 10:14:17
  from 'H:\OSPanel\domains\Fermula\template\user\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6454acc91d81c8_53364032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '652c2fe7e805ecd754a98a3671d790fdc99a3e7f' => 
    array (
      0 => 'H:\\OSPanel\\domains\\Fermula\\template\\user\\main.tpl',
      1 => 1683270854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/pages/".((string)$_smarty_tpl->tpl_vars[\'page\']->value).".tpl' => 1,
    'file:user/pages/profile.tpl' => 1,
  ),
),false)) {
function content_6454acc91d81c8_53364032 (Smarty_Internal_Template $_smarty_tpl) {
?><main id="main" class="main">
<?php if ((isset($_smarty_tpl->tpl_vars['page']->value))) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:user/pages/".((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
  <?php $_smarty_tpl->_subTemplateRender("file:user/pages/profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

</main><?php }
}
