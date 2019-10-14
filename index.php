<?php define('TOSIBOSI_LASITRASI', 1);
/*стартуем сессию*/
session_start();
/*сообщения отладки*/
$GLOBALS ['$mxDebugAllUsers'] = 1; //отладочные сообщения для неавторизованных пользователей

require_once 'inc/get_lang_and_locations_inc.php'; //определяем язык или локацию


/*Подключаем файлы*/
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/php/functions.php'); //файл с функциями
require_once(ROOT . '/components/Router.php');

if ($_GET['do'] == 'logout') {
    unset($_SESSION['admin']);
    session_destroy();
    header("Location: /");
}


/*call class Router*/
if ($_SESSION['admin'] == true) {
    $GLOBALS['$devMess']=1;
        if ($GLOBALS['$devMess'] == true) { /*Для автоизованных пользователей включим нотисы*/
            // показ сообщений нотисов и своих параметр только для авторизованных
            //// on/off мои сообщения о подключении контроллеров и вызовов методов класса и прочего ->
            //    // -> конроля всякой поеботы, но то что не должны видеть на продакшен

            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            echo "Пользователь:" . $_SESSION['admin'] . "<br> Режим отладки ВКЛ, вспомогательные сообщения ВКЛ";
        }


    /*Авторизованные пользователи получают доступ к контроллеру*/
    $router = new Router();
    $router->runAdmin();
    echo "runAdmin";
    /*Блок для не авторизованных пользователей*/
} else {

    $router = new Router();
    $router->runAll();
//    if ($GLOBALS ['$mxDebugAllUsers']) echo '<div class="debugallusers position-relative"> Вызов формы авторизации из index.php -> $router->getAuthorization(); </div>';
//    $router->getAuthorization();
}

if ( $GLOBALS['$devMess']) {
    /*список подключенных скриптов*/
    getFilesInclud();

    echo 'Массив $_SESSION <br>';
    print_r($_SESSION);
    echo '<br>Массив $_GET <br>';
    print_r($_GET);
};