<?php

function sendResponse ($type, $message, $fields = array()) {
 $response['type'] = $type;
 $response['message'] = $message;
 foreach ($fields as $key => $value) $response[$key] = $value;
 die( json_encode($response));
}

function userRegister( $login, $email, $pass ){
 $user = R::dispense('users');
 $user ->login = $login;
 $user ->password = password_hash($pass,PASSWORD_DEFAULT);
 $user ->email = $email;

 $user ->group = 1;
 $user ->avatar = "default.png";
 $user ->last_ip = $_SERVER['REMOTE_ADDR'];
 $user ->is_active = 1;
 $user ->date_reg = time();
 $user ->date_profile_update = time();
 $user ->date_last_login = time();
 $user ->date_deleted = NULL;


 $user = R::store($user);
}

?>