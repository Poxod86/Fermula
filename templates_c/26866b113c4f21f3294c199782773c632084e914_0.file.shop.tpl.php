<?php
/* Smarty version 3.1.48, created on 2023-05-10 09:44:37
  from 'H:\OSPanel\domains\Fermula\template\user\pages\shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_645b3d555815d1_04175643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26866b113c4f21f3294c199782773c632084e914' => 
    array (
      0 => 'H:\\OSPanel\\domains\\Fermula\\template\\user\\pages\\shop.tpl',
      1 => 1683701058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645b3d555815d1_04175643 (Smarty_Internal_Template $_smarty_tpl) {
?>     
       
       
        <ul class="shopping-card">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_tower_list']->value, 'tower');
$_smarty_tpl->tpl_vars['tower']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tower']->value) {
$_smarty_tpl->tpl_vars['tower']->do_else = false;
?>
            <li class="shopping-item">
                <img src="template/assets/images/towers/<?php echo $_smarty_tpl->tpl_vars['tower']->value['image'];?>
" width="80px" alt="" class="shopping-img">
                <div class="shopping-desc">
                    <span>
                    <?php echo $_smarty_tpl->tpl_vars['tower']->value['name'];?>
 • 
                    <small>
                    <?php echo $_smarty_tpl->tpl_vars['tower']->value['price'];?>

                    <img src="template/assets/images/icons/coin.png" alt="coin" width="10px">
                    </small>
                    </span>
                    <span><?php echo $_smarty_tpl->tpl_vars['tower']->value['description'];?>
</span>
                </div>
                <form action data-operation="buy_tower">
                <input type="hidden" name="tower" value="<?php echo $_smarty_tpl->tpl_vars['tower']->value['id'];?>
">
                <button type="button" class="shopping-button" onclick="sendAjax(this)">Купить</button>
                </form>

                
            </li>
        
         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

       <?php }
}
