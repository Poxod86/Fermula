<?php
/* Smarty version 3.1.48, created on 2023-05-06 16:00:01
  from 'H:\OSPanel\domains\Fermula\template\user\pages\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64564f510f07b9_20835928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bd99f440375771018e96d859c660d3a8092d8c6' => 
    array (
      0 => 'H:\\OSPanel\\domains\\Fermula\\template\\user\\pages\\menu.tpl',
      1 => 1683377647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64564f510f07b9_20835928 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="/?page=profile" class="buttons-primary d-block w-75 mx-auto mt">Профиль</a>
<a href="/?page=garage" class="buttons-primary d-block w-75 mx-auto mt">Гараж</a>
<a href="/?page=shop" class="buttons-primary d-block w-75 mx-auto mt">Магазин</a>
<a href="/?page=toplist" class="buttons-primary d-block w-75 mx-auto mt">ТОП Игроков</a>
<form action data-operation="logout"><button onclick="sendAjax(this)" type="button" class="buttons-primary d-block w-75 mx-auto mt">Выйти</button></form><?php }
}
