<?php define('TOSIBOSI_LASITRASI', 1);
/*Front controller*/

require_once 'inc/get_lang_and_locations_inc.php'; //определяем язык или локацию

/*Main settings*/
ini_set('display_errors', 1);
error_reporting(E_ALL);

/*Подключаем файлы*/
define ('ROOT', dirname(__FILE__));
require_once (ROOT . '/components/Router.php');
/*call class Router*/
$router = new Router();
$router->run();
 ?>
