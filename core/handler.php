<?php
require_once( $_SERVER['DOCUMENT_ROOT'].'/init.php' );

$post = $_POST;



if ($post) {
  switch ($post['operation']) {
    case 'register':
   
      if(
        empty($post['login']) || 
        empty($post['email']) ||
        empty($post['password']) 
        )
        sendResponse('error','Пожалуйста заполните все поля');
      if (strlen($post['login'])> 20)
        sendResponse('error','Слишком длинный логин, воспользуйтесть ником короче 20 символов');
      if (strlen($post['login'])< 5)
        sendResponse('error','Логин должен быть не менее 5 символов');
      if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL))
      sendResponse('error','Укажите корректный Емайл');
      if (R::count('users','login = ?',array($post['login']))> 0)
      sendResponse('error','Пользователь с таким ником уже зарегистрирован');
      if (R::count('users','email = ?',array($post['email']))> 0)
      sendResponse('error','Пользователь с таким Email уже зарегистрирован');

      userRegister($post['login'], $post['email'], $post['password']);
      sendResponse('success','Регистрация успешна');
       break;
    default:
    break;
  }
  //
} else {
sendResponse('error','Ошибка');
}

?>