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
        'redirect' => '/?page=auth'
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

# Покупка зданий
case 'buy_tower':
  $user = $user->export();
  $tower = R::getRow('SELECT * FROM `towers` WHERE id = :id', [
    'id'=>$post['tower']
  ]);

  $user_tower = R::count('tower_cart', 't_id = ?', [$post['tower']] );

  if($user_tower > 0) sendResponse('error','Здание уже приобретено!');
  if(!$tower) sendResponse('error','Ошибка получения данных о здании <br> Пожалуйста обновите страницу');
  if ($user['balance'] < $tower['price']) sendResponse('error','На вашем счету недостаточно средств для покупки!');
  
  setLogs($user['id'],"Покупка здания \"{$tower['name']} \" за {$tower['price']} монет");
  R::exec("UPDATE `users` SET `balance` =`balance` -:price WHERE `id` = :id", [
    'id'=>$user['id'],
    'price'=>$tower['price'],
  ]);

  $tower_cart = R::xdispense('tower_cart');
  $tower_cart->u_id = $user['id'];
  $tower_cart->t_id = $tower['id'];
  $tower_cart->time = time();
  R::store($tower_cart);

  sendResponse('success','Вы успешно приобрели здание!');
 break;

    default:
    break;
  }
  //
} else {
sendResponse('error','Ошибка');
}

?>