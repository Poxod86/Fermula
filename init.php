<?php

# Объявление констант
define( 'ROOT', $_SERVER['DOCUMENT_ROOT'] );
define( 'CORE_DIR', ROOT . '/core' );
define( 'LIBS_DIR', ROOT . '/libs' );
define( 'TEMPLATE_DIR', ROOT . '/template' );

# Подключение библиотек
include_once( ROOT . '/config.php');
include_once( CORE_DIR . '/functions.php');
include_once( LIBS_DIR . '/smarty/Smarty.class.php');
include_once( LIBS_DIR . '/redBean/rb-mysql.php');

# Инициализация библиотек
$smarty = new Smarty();

# Задаем правила для библиотек 
$smarty->setTemplateDir( TEMPLATE_DIR );
$smarty->setCompileDir( ROOT . '/templates_c/');
$smarty->setConfigDir( ROOT . '/configs/');
$smarty->setCacheDir( ROOT . '/cache/');

# Создание переменных
$smarty->assign('is_logged', true);
$smarty->assign('page', $_GET['page']);
$smarty->assign('page_name', 'Личный кабинет');

// die(print_r($_GET));

?>