<?php

include_once ROOT . '/models/Page.php'; //подключили класса для получения данных для отображения на странице
class ViewsController
{

    public function actionMain()
    {
        if ( $GLOBALS['$devMess']) echo '<br>Сработал Экшен Mainpage:';
        require_once 'main-page.php';
    }
    public function actionAuthorization()
    {
        PageForAll::getMainHeader(); //обращаемся к методу Модели Page (models/Page.php)
        if ( $GLOBALS['$devMess']) echo '<br>Сработал Экшен Authorization';
        require ROOT . '/templates/login_template.php';
        PageForAll::getMainFooter(); //обращаемся к методу Модели Page (models/Page.php)


    }



    public function actionPortfolio()
    {
        PageForAll::getHeader(); //обращаемся к методу Модели Page (models/Page.php)
        require ROOT . '/templates/portfolio_template.php';
        PageForAll::getFooter(); //обращаемся к методу Модели Page (models/Page.php)
//
        return true;
    }

    public function actionDezign()
    {
        PageForAll::getHeader();
        echo 'actionDezign';
        PageForAll::getFooter(); //обращаемся к методу Модели Page (models/Page.php)
        return true;
    }
}