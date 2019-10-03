<?php

class Router
{
    private $routers; //массив с маршрутами
    //подключаем файл с роутами
    public function __construct()
    {
        $routesPath = ROOT.'/config/routers.php';
        $this->routers = include ($routesPath);
    }
    /*получаем строку запроса из адресной строки
    * браузера
     *
    */
    private function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }
    public function run()
    {

        $uri = $this->getURI();
        echo $uri;
    }
}