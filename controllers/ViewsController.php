<?php

include_once ROOT . '/models/Page.php'; //подключили класса для получения данных для отображения на странице
class ViewsController
{

    public function actionMain()
    {
        echo 'Сработал Экшен Mainpage';
        require_once 'main-page.php';
    }

    public function actionPortfolio()
    {
         Page::getHeader(); //обращаемся к методу Модели Page (models/Page.php)
        require ROOT . '/templates/portfolio_template.php';
         Page::getFooter(); //обращаемся к методу Модели Page (models/Page.php)
//
        return true;
    }

    public function actionDezign()
    {
        Page::getHeader();
        echo 'actionDezign';
        Page::getFooter(); //обращаемся к методу Модели Page (models/Page.php)
        return true;
    }
}