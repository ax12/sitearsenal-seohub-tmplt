<?php
/*Выводит имя файла в котором она написана*/

class Router
{
    private $routers; //массив с маршрутами

    //подключаем файл с роутами
    public function __construct()
    {
        $routesPath = ROOT . '/config/routers.php';
        $this->routers = include($routesPath);

    }

    /*если не авторизован*/
    public function getAuthorization()
    {
        if (!$_SESSION) {
            require_once ROOT . '/controllers/ViewsController.php'; //подключаем файл с контроллерами для главной
            $mainObject = new ViewsController; //создали объект класса
            $mainObject->actionAuthorization();// обратились к экшену объекта
        }
    }


    /*получаем строку запроса из адресной строки
    * браузера
     */
    private function getURI()
    {

        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }

    }

    public function runAdmin()
    {
        $uri = $this->getURI(); //обращаемся к (private function getURI) и получаем строку запроса в переменную $uri из private функции этого класса;

        if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/en/' || $_SERVER['REQUEST_URI'] == '/krasnodar/') { //если запрос на главную страницу
            require_once ROOT . '/controllers/ViewsController.php'; //подключаем файл с контроллерами для главной
            $mainObject = new ViewsController; //создали объект класса
            $mainObject->actionMainAdmin(); // обратились к экшену объект а
            return true;
        }
        /*Выход админа, переход по адресу do=logaut (в Массиве $_GET['do'] попадает значение logout) */


        foreach ($this->routers as $uriPattern => $path) { //листаем массив с роутами из файла routes.php

            if ($GLOBALS['$devMess']) echo
            '<div class="debug-msg position-relative"> сработал foreach в Router::runAdmin  <br></div>';
            $uri_array = (explode('/', $uri)); //разбираем адресную строку в массив через разделитель слэш (/)
            $first_uri = array_shift($uri_array); //берем первый элемент массива, его сравниваем далее с роутами
            /* $uriPattern сравниваем то что пришло в строке запроса с нашими маршрутами в routers.php
           $uriPattern  - то что указано в маршрутах, $uri_array - то что пришло из строки браузера и попало в этот массив*/
            if (preg_match("~^$uriPattern\b~", $first_uri) and count($uri_array) < 1) { // тут count($uri_array)< 1 смотрит если адрес третьего и более уровня
                //(на сайте нет таких страниц, все только до второго уровня)отправляет все на 404 в условие else этого if  {
                /*определяем какой контроллер и какой экшен в нем будет опрабатывать запрос
                для этого в переменную $segments запишем массив из составляющих адресной строки, каждый элемент
                массива отделен косой чертой   */
                $segments_url = explode('/', $path);
                //вычисляем имя контроллера для этого запроса
                $controllerName = array_shift($segments_url) . 'Controller'; //array_shift возвращает первый элемент массива, удаляя его из массива
                $controllerName = ucfirst($controllerName); //делаем первую букву заглавной
                /*определяем какой экшен будет использоваться*/
                $actionName = 'action' . ucfirst(array_shift($segments_url));

                /*подключаем файл контроллера*/
                $conrollerFile = ROOT . '/controllers/' . $controllerName . '.php'; //записали имя файла

                if (file_exists($conrollerFile)) { //проверим его наличие
                    if ($GLOBALS['$devMess']) echo
                    '<div class="debug-msg position-relative"> Подключен файл контроллера . $conrollerFile . через Router::runAdmin() -> foreach <br></div>';
                    include_once($conrollerFile);
                }

                /*Создаем объект класса и вызываем нужный экшен из класса контроллера*/
                $conrolerObject = new $controllerName;
                $result = $conrolerObject->$actionName();
                if ($GLOBALS['$devMess']) echo $actionName();
                if ($result = !null) {
                    break;
                }


            } else { //если такого адреса нет или он имеет вложенность больше двух уровней
                require_once ROOT . '/controllers/ViewsController.php';
                $mainObject = new ViewsController;
                $mainObject->action404();
                break;
            }
        }

    }

    /*для всех пользователей*/
    public function runAll()
    {
        if ($GLOBALS ['$mxDebugAllUsers']) echo '<div class="debugallusers position-relative"> Router::runAll -></div>';
        $uri = $this->getURI(); //обращаемся к (private function getURI) и получаем строку запроса в переменную $uri из private функции этого класса;

        if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/en' || $_SERVER['REQUEST_URI'] == '/krasnodar') { //если запрос на главную страницу
            if ($GLOBALS ['$mxDebugAllUsers']) echo '<div class="debugallusers position-relative"> Подключили /controllers/ViewsController.php из метода runAll -></div>';
            require_once ROOT . '/controllers/ViewsController.php'; //подключаем файл с контроллерами для главной
            $mainObject = new ViewsController; //создали объект класса
            $mainObject->actionMainAll(); // обратились к экшену объект а
            return true;
        }

        foreach ($this->routers as $uriPattern => $path) { //листаем массив с роутами из файла routes.php




            if (preg_match("~^$uriPattern\b~", $uri) and count($segments_url = explode('/', $uri)) < 2) // тут count($uri_array)< 1 смотрит если адрес третьего и более уровня

            {  $conrollerFile = ROOT . '/controllers/ViewsController.php'; //записали имя файла
                $segments_url = explode('/', $path);

               ucfirst(array_shift($segments_url));
              $actionName = 'action' . ucfirst(array_shift($segments_url));
                /*определяем какой контроллер и какой экшен в нем будет опрабатывать запрос
                для этого в переменную $segments запишем массив из составляющих адресной строки, каждый элемент
                массива отделен косой чертой   */


                /*определяем какой экшен будет использоваться*/


                /*подключаем файл контроллера*/


                if (file_exists($conrollerFile)) { //проверим его наличие
                    include_once($conrollerFile);
                    if ($GLOBALS ['$mxDebugAllUsers'])
                        echo '<div class="debugallusers position-relative"> Подключен файл контроллера . $conrollerFile . через Router::runAll() -> foreach <br></div>';

                }

                /*Создаем объект класса и вызываем нужный экшен из класса контроллера*/
                $conrolerObject = new ViewsController;
                $result = $conrolerObject->$actionName();
                if ($result = !null) {
                    break;
                }


            }
        }
        if (!preg_match("~^$uriPattern\b~", $uri) or  count($segments_url = explode('/', $uri)) >= 2){ //если такого адреса нет или он имеет вложенность больше двух уровней
            require_once ROOT . '/controllers/ViewsController.php';
            $mainObject = new ViewsController;
            $mainObject->action404();


        }

    }
}