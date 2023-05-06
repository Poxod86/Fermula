<?php
/* Smarty version 3.1.48, created on 2023-05-06 15:15:46
  from 'H:\OSPanel\domains\Fermula\template\user\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_645644f25d2db0_00154111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '652c2fe7e805ecd754a98a3671d790fdc99a3e7f' => 
    array (
      0 => 'H:\\OSPanel\\domains\\Fermula\\template\\user\\main.tpl',
      1 => 1683375342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/pages/menu.tpl' => 1,
    'file:user/pages/".((string)$_smarty_tpl->tpl_vars[\'page\']->value).".tpl' => 1,
    'file:errors/404.tpl' => 1,
  ),
),false)) {
function content_645644f25d2db0_00154111 (Smarty_Internal_Template $_smarty_tpl) {
?><main id="main" class="main">
<?php $_smarty_tpl->_assignInScope('page_file', (('template/user/pages/').($_smarty_tpl->tpl_vars['page']->value)).(".tpl"));?> 
      
      <?php if (empty($_smarty_tpl->tpl_vars['page']->value)) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:user/pages/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php } else { ?>
            <?php if (file_exists($_smarty_tpl->tpl_vars['page_file']->value)) {?>
              <?php $_smarty_tpl->_subTemplateRender("file:user/pages/".((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php } else { ?>
              <?php $_smarty_tpl->_subTemplateRender("file:errors/404.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
      <?php }?>

</main><?php }
}
