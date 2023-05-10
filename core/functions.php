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
 $user ->lvl = 1;
 $user ->exp = 0;
 $user ->balance = 100;
 $user ->avatar = "default.png";
 $user ->last_ip = $_SERVER['REMOTE_ADDR'];
 $user ->is_active = 1;
 $user ->date_reg = time();
 $user ->date_profile_update = time();
 $user ->date_last_login = time();
 $user ->date_deleted = NULL;


 $user = R::store($user);
}

function checkLogged() {
  if ($_SESSION['logged_user']) {
    return true;
  } else {
    return false;
  }
}

function getExpToNextLevel($user_id){
  $query = R::getRow("SELECT `levels`.`exp_to_lvl` FROM levels 
    JOIN `users` ON `users`.`lvl` = `levels`.`lvl` WHERE `users`.`id` = {$user_id}");
    return $query['exp_to_lvl'];
}

function getExpToHereLevel($user_exp, $user_lvl){
  $query = R::getRow("SELECT {$user_exp} - exp_total FROM levels WHERE lvl = {$user_lvl}");
    return $query["{$user_exp} - exp_total"];
};

function getLevelPercent($user_id, $user_exp, $user_lvl)
{
    $percent = getExpToHereLevel($user_exp, $user_lvl) / getExpToNextLevel($user_id) * 100;
    return round($percent);
};

function updateUserLevel($user_exp, $user_id) {
  $query = R::getRow("SELECT MAX(lvl) FROM `levels` WHERE exp_total <= {$user_exp}");
    R::exec('UPDATE `users` SET `lvl` = :lvl WHERE id = :id', [
      'id' => $user_id,
      'lvl' => $query['MAX(lvl)']
  ]);
  $user = R::load('users', $user_id);
  return $user;
}

function getTowers($user_lvl){
  $towers = R::getAll("SELECT * FROM `towers` WHERE `lvl` <= ?", [$user_lvl]);
  return $towers;
}

function setLogs($user_id, $desc) {
  $logs = R::dispense('logs');
  $logs->u_id = $user_id;
  $logs->description = $desc;
  $logs->time = time();
  R::store($logs);
}

?>