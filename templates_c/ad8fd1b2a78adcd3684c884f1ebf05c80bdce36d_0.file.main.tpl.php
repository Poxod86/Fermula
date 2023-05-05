<?php
/* Smarty version 3.1.48, created on 2023-05-05 08:24:37
  from 'H:\OSPanel\domains\Fermula\template\guest\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64549315929dc4_56606470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad8fd1b2a78adcd3684c884f1ebf05c80bdce36d' => 
    array (
      0 => 'H:\\OSPanel\\domains\\Fermula\\template\\guest\\main.tpl',
      1 => 1683264248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64549315929dc4_56606470 (Smarty_Internal_Template $_smarty_tpl) {
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
       <form action>
           <input type="text" class="inputs d-block mx-auto w-75" placeholder="Логин">
           <input type="email" class="inputs d-block mx-auto w-75" placeholder="Почта">
           <input type="password" class="inputs d-block mx-auto w-75" placeholder="Пароль">
        <p class="text-center text-desc">
            Нажимая кнопка “Зарегистрироваться”, вы подтверждаете <a href="#" class="links">политику конфинденциальности</a>
        </p>
        <button class="buttons-primary w-75 mt d-block mx-auto"><span>Зарегистрироваться</span></button>
        </form>
    </main>

    <footer id="footer" class="footer">
        fermula.mobi @ Recloud 2020, 12+
</footer><?php }
}
