<?php

class Router
{
    private $routers; //массив с маршрутами

    //подключаем файл с роутами
    public function __construct()
    {
        $routesPath = ROOT . '/config/routers.php';
        $this->routers = include($routesPath);

    }

    /*проверить авторизацию*/

    /**
     * @return mixed
     */
    public function checkAuthorization()
    {
        if (!$_SESSION){
            require_once ROOT . '/controllers/ViewsController.php'; //подключаем файл с контроллерами для главной
            $mainObject = new ViewsController; //создали объект класса
            $mainObject->actionAuthorization(); // обратились к экшену объекта
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

    public function run()
    {
        $uri = $this->getURI(); //обращаемся к (private function getURI) и получаем строку запроса в переменную $uri из private функции этого класса;

        if ($_SERVER['REQUEST_URI'] == '/') { //если запрос на главную страницу
            require_once ROOT . '/controllers/ViewsController.php'; //подключаем файл с контроллерами для главной
            $mainObject = new ViewsController; //создали объект класса
            $mainObject->actionMain(); // обратились к экшену объект а

        }
        /*Выход админа, переход по адресу do=logaut (в Массиве $_GET['do'] попадает значение logaut) */
        if ($_GET['do']== 'logout') {
            unset($_SESSION['admin']);
            session_destroy();
            header("Location: /");
        }



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
                $actionName = 'action'. ucfirst(array_shift($segments_url));

                /*подключаем файл контроллера*/
                $conrollerFile = ROOT . '/controllers/'. $controllerName . '.php'; //записали имя файла

                if (file_exists($conrollerFile)) { //проверим его наличие
                    include_once ($conrollerFile);
                }

                /*Создаем объект класса и вызываем нужный экшен из класса контроллера*/
                $conrolerObject = new $controllerName;
                $result = $conrolerObject->$actionName();
                if ($result =! null) {
                    break;
                }


            }
        }

    }
}