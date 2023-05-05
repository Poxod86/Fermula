<?php
/* Smarty version 3.1.48, created on 2023-05-05 09:06:49
  from 'H:\OSPanel\domains\Fermula\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64549cf9cf4885_90066194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f87b326adf9e7f07047414d90e79883e6351f8d3' => 
    array (
      0 => 'H:\\OSPanel\\domains\\Fermula\\template\\index.tpl',
      1 => 1683266806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/navbar.tpl' => 1,
    'file:user/header.tpl' => 1,
    'file:user/main.tpl' => 1,
    'file:user/footer.tpl' => 1,
    'file:guest/main.tpl' => 1,
  ),
),false)) {
function content_64549cf9cf4885_90066194 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template/assets/libs/carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="template/assets/libs/carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="template/assets/css/main.css">
    <link rel="stylesheet" href="template/assets/fonts/TTNorms/stylesheet.css">
    <title> Fermula | <?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
</title>
</head>

<body>

<?php if ($_smarty_tpl->tpl_vars['is_logged']->value === true) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:user/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
  <?php $_smarty_tpl->_subTemplateRender("file:user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:user/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
  <?php $_smarty_tpl->_subTemplateRender("file:user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
<?php } else { ?>
  <?php $_smarty_tpl->_subTemplateRender("file:guest/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php }?>


<?php echo '<script'; ?>
 src="template/assets/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="template/assets/libs/carousel/owl.carousel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="template/assets/js/main.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
