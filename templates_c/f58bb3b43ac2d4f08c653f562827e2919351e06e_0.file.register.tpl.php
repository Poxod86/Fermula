<?php
/* Smarty version 3.1.48, created on 2023-05-05 11:05:37
  from 'H:\OSPanel\domains\Fermula\template\guest\pages\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6454b8d1ac0742_34605060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f58bb3b43ac2d4f08c653f562827e2919351e06e' => 
    array (
      0 => 'H:\\OSPanel\\domains\\Fermula\\template\\guest\\pages\\register.tpl',
      1 => 1683273934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6454b8d1ac0742_34605060 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">

<form action data-operation="register">
           <input name="login" type="text" class="inputs d-block mx-auto w-75" placeholder="Ваш Логин">
           <input name="email" type="email" class="inputs d-block mx-auto w-75" placeholder="Ваш Емайл">
           <input name="password" type="password" class="inputs d-block mx-auto w-75" placeholder="Пароль">
        <p class="text-center text-desc">
            Нажимая кнопка “Зарегистрироваться”, вы подтверждаете <a href="#" class="links">политику конфинденциальности</a>
        </p>
        <input  type="button" class="buttons-primary w-75 mt d-block mx-auto" value="Зарегистрироваться">
       
</form>

</div><?php }
}
