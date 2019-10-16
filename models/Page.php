<?php


class PageForAdmin
{
    public static function getMainHeader() //Хедер главной страницы, используется так же для неавторизованых ашеров
    {        require ROOT . '/inc/site_settings_array.php'; //
        require ROOT . '/templates/main_header.php';

    }

    public static function getMainPageContentAdmin()
    { //контент главной страницы для Админа

        require ROOT . '/inc/site_settings_array.php'; //подключаю повторно, не видит при подключении из хедера
        require_once ROOT . '/inc/about_row.php';
        require_once ROOT . '/inc/multi_portfolio_inc.php';
        require_once ROOT . '/inc/tabs.php';
        require_once ROOT . '/inc/services_tabs_inc_v2.php';
        require_once ROOT . '/inc/multi_portfolio_inc.php';


    }

    public static function getMainPageContentAll()
    { //контент главной страницы в продакшен
        require ROOT . '/inc/site_settings_array.php'; //подключаю повторно, не видит при подключении из хедера
        require_once ROOT . '/inc/about_row.php';
        require_once ROOT . '/inc/multi_portfolio_inc.php';
//        require_once ROOT . '/inc/tabs.php';
        require_once ROOT . '/inc/services_tabs_inc_v2.php';
        require_once ROOT . '/inc/multi_portfolio_inc.php';

//        if ($GLOBALS ['$mxDebugAllUsers']) echo '<div class="debugallusers position-relative"> Подключен (/templates/login_template.php) в методе getMainPageContentAll -></div>';
//        require_once ROOT . '/templates/login_template.php';


    }

    public static function getMainFooter()
    {
        require ROOT . '/inc/site_settings_array.php';
        require ROOT . '/templates/footer_inside_page.php';
        require ROOT . '/inc/scripts_footer_inc.php';
    }


    public static function getHeader()
    {
        require ROOT . '/inc/site_settings_array.php';
        require ROOT . '/templates/header_inside_page.php';
    }

    public static function getFooter()
    {
        require ROOT . '/inc/site_settings_array.php';
        require ROOT . '/templates/footer_inside_page.php';
        require ROOT . '/inc/scripts_footer_inc.php';
    }
    public static function get404()
    {
        require ROOT . '/inc/style_scripts_header_inc.php';
        require ROOT . '/templates/404.php';
    }


}

class PageForAll
{
    public static function getMainHeader() //Хедер главной страницы, используется так же для неавторизованых ашеров
    {//тут подключаем готовые разделы для продакшен, это увидетя поисковики и незареганые пользователи
        require ROOT . '/inc/site_settings_array.php'; //
        require ROOT . '/templates/main_header.php';

    }

    public static function getMainFooter()
    {
        require_once ROOT . '/inc/scripts_footer_inc.php';
        require ROOT . '/templates/footer_inside_page.php';
    }


    public static function getHeader()
    {
        require ROOT . '/templates/header_inside_page.php';
    }

    public static function getFooter()
    {
        require ROOT . '/templates/footer_inside_page.php';
        require ROOT . '/inc/scripts_footer_inc.php';
    }

    public static function get404()
    {

        require ROOT . '/inc/style_scripts_header_inc.php';
        require ROOT . '/templates/404.php';
    }
}