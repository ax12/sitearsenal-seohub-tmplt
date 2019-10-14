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

        if ($_SERVER['REQUEST_URI'] == '/') { //если запрос на главную страницу
            require_once ROOT . '/controllers/ViewsController.php'; //подключаем файл с контроллерами для главной
            $mainObject = new ViewsController; //создали объект класса
            $mainObject->actionMainAdmin(); // обратились к экшену объект а
        }
        /*Выход админа, переход по адресу do=logaut (в Массиве $_GET['do'] попадает значение logout) */



        foreach ($this->routers as $uriPattern => $path) { //листаем массив с роутами из файла routes.php
                echo 'Форич';
            /* $uriPattern сравниваем то что пришло в строке запроса с нашими маршрутами в routers.php
            $uroPattern  - то что указано в маршрутах, $uri - то что пришло из строки браузера */
            if (preg_match("~^$uriPattern\b~", $uri)) {
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
                    echo "Подключен файл контроллера" . $conrollerFile;
                    include_once($conrollerFile);
                }

                /*Создаем объект класса и вызываем нужный экшен из класса контроллера*/
                $conrolerObject = new $controllerName;
                $result = $conrolerObject->$actionName();
                if ( $GLOBALS['$devMess']) echo $actionName();
                if ($result = !null) {
                    break;
                }


            }
        }

    }

    /*для всех пользователей*/
    public function runAll()
    {
        $uri = $this->getURI(); //обращаемся к (private function getURI) и получаем строку запроса в переменную $uri из private функции этого класса;

        if ($_SERVER['REQUEST_URI'] == '/') { //если запрос на главную страницу
            require_once ROOT . '/controllers/ViewsController.php'; //подключаем файл с контроллерами для главной
            $mainObject = new ViewsController; //создали объект класса
            $mainObject->actionMainAll(); // обратились к экшену объект а

//        }
        foreach ($this->routers as $uriPattern => $path) { //листаем массив с роутами из файла routes.php

            /* $uriPattern сравниваем то что пришло в строке запроса с нашими маршрутами в routers.php
            $uroPattern  - то что указано в маршрутах, $uri - то что пришло из строки браузера */
            if (preg_match("~^$uriPattern\b~", $uri)) {
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
                    include_once($conrollerFile);
                    echo "Подключен файл контроллера" . $conrollerFile;
                }

                /*Создаем объект класса и вызываем нужный экшен из класса контроллера*/
                $conrolerObject = new $controllerName;
                $result = $conrolerObject->$actionName();
                if ($result = !null) {
                    break;
                }


            }
        }

    }
}}