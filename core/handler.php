<?php
require_once( $_SERVER['DOCUMENT_ROOT'].'/init.php' );

$post = $_POST;



if ($post) {
  switch ($post['operation']) {
# Метод регистрации пользователя
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

      $fields = [
        'redirect' => '/'
      ];
      sendResponse('success','Регистрация успешна',$fields);
       break;

# Метод авторизации пользователя
       case 'authorisation':
        if(
          empty($post['login']) || 
          empty($post['password']) 
          )
          sendResponse('error','Пожалуйста заполните все поля');
          $user = R::findOne('users','login = ?', array($post['login']));
          if (!$user) sendResponse('error','Данного пользователя не существует');
          if (password_verify($post['password'], $user-> password)){
           $_SESSION['logged_user'] = $user->export();
          } else {
            sendResponse('error','Пароль не верен, проверьте еще раз');
          }
          $fields = [
            'redirect' => '/'
          ];

          sendResponse('success','Вы успешно вошли в игру',$fields);
         break;

# Метод выхода из игры пользователя
case 'logout':
    unset($_SESSION['logged_user']);
    $fields = [
      'redirect' => '/'
    ];
    sendResponse('success','Вы вышли из Игры', $fields);
   break;
    default:
    break;
  }
  //
} else {
sendResponse('error','Ошибка');
}

?>