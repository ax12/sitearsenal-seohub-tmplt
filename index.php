<?php
/*Front controller*/
echo 'Front Controller Page <br>';

/*Main settings*/
ini_set('display_errors', 1);
error_reporting(E_ALL);

/*Подключаем файлы*/
define ('ROOT', dirname(__FILE__));
require_once (ROOT . '/components/Router.php');


/*call class Router*/
$router = new Router();
$router->run();



//echo '<br>запрошенный адрес ' . $_SERVER['REQUEST_URI'];
//$path = $_SERVER['REQUEST_URI'];
//if ($path == '/') require_once 'main-page.php';
//if ($path == '/portfolio') require_once 'portfolio.php'; ?>
