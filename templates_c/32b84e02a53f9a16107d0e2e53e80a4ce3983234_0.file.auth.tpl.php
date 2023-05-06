<?php
/* Smarty version 3.1.48, created on 2023-05-05 21:53:49
  from 'H:\OSPanel\domains\Fermula\template\guest\pages\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_645550bd10e0a4_57860332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32b84e02a53f9a16107d0e2e53e80a4ce3983234' => 
    array (
      0 => 'H:\\OSPanel\\domains\\Fermula\\template\\guest\\pages\\auth.tpl',
      1 => 1683312824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645550bd10e0a4_57860332 (Smarty_Internal_Template $_smarty_tpl) {
?><form action data-operation="authorisation">
           <input name="login" type="text" class="inputs d-block mx-auto w-75" placeholder="Введите Ваш Логин">
           
           <input name="password" type="password" class="inputs d-block mx-auto w-75" placeholder="Введите Ваш Пароль">
           <input  type="button" class="buttons-primary w-75 mt d-block mx-auto" value="Войти">
        <p class="text-center text-desc">
            Если у Вас нет игрового аккаунта, Вы можете <a href="/?page=register" class="links">зарегистрироваться</a>
        </p>
        <button class="buttons-primary w-75 mt d-block mx-auto"><span>Зарегистрироваться</span></button>
 </form><?php }
}
