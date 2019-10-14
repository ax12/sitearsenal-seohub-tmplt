<?php

include_once ROOT . '/models/Page.php'; //подключили класса для получения данных для отображения на странице
class ViewsController
{

    public function actionMainAll()
    {
        if ( $GLOBALS['$devMess'] || $GLOBALS ['$mxDebugAllUsers']) echo '<div class="debug-msg position-relative">Сработал экшен actionMainAll</div>';;
        PageForAdmin::getMainHeader();
        PageForAdmin::getMainPageContentAll();
        PageForAdmin::getMainFooter();
//
        return true;
    }
    public function actionAuthorization()
    {

        if ( $GLOBALS['$devMess']) echo '<div class="debug-msg position-relative">Сработал Экшен Authorization</div>';
        require ROOT . '/templates/login_template.php';
    }

/*главная для админа*/
    public function actionMainAdmin()
    {
        if ( $GLOBALS['$devMess']) echo '<div class="debug-msg position-relative">Сработал экшен actionMainAdmin</div>';;
        PageForAdmin::getMainHeader();
        PageForAdmin::getMainPageContentAdmin();
        PageForAdmin::getMainFooter();
    }




    public function actionPortfolio()
    {
        PageForAdmin::getHeader(); //обращаемся к методу Модели Page (models/Page.php)
        require ROOT . '/templates/portfolio_template.php';
        PageForAdmin::getFooter(); //обращаемся к методу Модели Page (models/Page.php)
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