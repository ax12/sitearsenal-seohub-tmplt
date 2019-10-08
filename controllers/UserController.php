<?php


class UserController
{
    public function actionLogin()
    {
        $login = '';
        $password = '';

        if (isset($_POST['submit'])) { //получаем данные из формы views/user/login.php
            $login = $_POST['login'];
            $password = $_POST['password'];
        }
        //проверяем наличие пользователя
        $userId = User::checkUserData($login, $password);

        if ($userId == false) { //сообщение если пользователя нет
            echo 'Ой, не прокатило!';

        }else {
            User::auth($userId); //если все Ок, создаем сессию для пользователя
        //перенаправляем на главную страницу
            header("Location:/");
        }
        require_once ROOT . 'views/user/login.php';
    }
}