<?php
/* Smarty version 3.1.48, created on 2023-05-05 10:35:58
  from 'H:\OSPanel\domains\Fermula\template\guest\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6454b1de7b08c1_69003591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad8fd1b2a78adcd3684c884f1ebf05c80bdce36d' => 
    array (
      0 => 'H:\\OSPanel\\domains\\Fermula\\template\\guest\\main.tpl',
      1 => 1683272115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:guest/pages/".((string)$_smarty_tpl->tpl_vars[\'page\']->value).".tpl' => 1,
    'file:guest/pages/index.tpl' => 1,
  ),
),false)) {
function content_6454b1de7b08c1_69003591 (Smarty_Internal_Template $_smarty_tpl) {
?><nav id="navbar" class="navbar">
  <div class="navbar-logo">Фермула</div>
</nav>
<header id="header" class="header">
  <div class="welcome-text">
     <h3>Фермула | построй свой завод</h3>
      <p>Cтрой заводы, прокачивай свой город <br> и поборись за первое место в топе</p>
  </div>
</header>

    <main id="main" class="main">
      <?php if ((isset($_smarty_tpl->tpl_vars['page']->value))) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:guest/pages/".((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
  <?php $_smarty_tpl->_subTemplateRender("file:guest/pages/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?> 
    </main>

    <footer id="footer" class="footer">
        fermula.mobi @ Recloud 2020, 12+
</footer><?php }
}
