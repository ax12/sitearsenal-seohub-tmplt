<?php define('TOSIBOSI_LASITRASI', 1);
/*стартуем сессию*/
session_start();
/*Front controller*/

require_once 'inc/get_lang_and_locations_inc.php'; //определяем язык или локацию

/*Main settings*/
//
//ini_set('display_errors', 1);
//error_reporting(E_ALL);


/*Подключаем файлы*/
define ('ROOT', dirname(__FILE__));
require_once (ROOT . '/components/Router.php');
/*call class Router*/
if ($_SESSION['admin']) {
    /*Для автоизованных пользователей включим нотисы*/
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $GLOBALS['$devMess'] = true; // показ сообщений нотисов и своих параметр только для авторизованных
    if ( $GLOBALS['$devMess']) echo '<br> Режим отладки ВКЛ, вспомогательные сообщения ВКЛ';
    // on/off мои сообщения о подключении контроллеров и вызовов методов класса и прочего ->
    // -> конроля всякой поеботы, но то что не должны видеть на продакшен

    /*Авторизованные пользователи получают доступ к контроллеру*/
    $router = new Router();
    $router->run();
}else {
// Если не авторизован, значит вызываем экшен checkAuthorization
     $router = new Router();
    $router->checkAuthorization();
}

 ?>
