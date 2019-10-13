<?php


class PageForAdmin
{
    public static function getMainHeader() //Хедер главной страницы, используется так же для неавторизованых ашеров
    {//тут подключаем готовые разделы для продакшен, это увидетя поисковики и незареганые пользователи
        require ROOT .  '/inc/site_settings_array.php';
        require_once ROOT .  '/inc/style_scripts_header_inc.php'; // connect css files
        require_once ROOT .  '/inc/topbar.php';
        require_once 'inc/loader.php';
       //отключаем или подключаем загрузчик (ракету) настройка в site_settings_array.php
        require_once ROOT .  '/inc/megamenu_inc.php'; //including horizontal main megamenu;
        require_once ROOT .  '/inc/main_slider.php'; //главный слайдер ;
        require_once ROOT .  '/inc/about_row.php';
        require_once ROOT .  '/inc/multi_portfolio_inc.php';

    }

    public static function getMainFooter()
    {
        require_once ROOT . '/inc/scripts_footer_inc.php' ;
        require ROOT . '/templates/footer_inside_page.php';
    }


    public static function getHeader()
    {
        require ROOT . '/templates/header_inside_page.php';
    }

    public static function getFooter()
    {
        require ROOT . '/templates/footer_inside_page.php';
    }


}class PageForAll
{
    public static function getMainHeader() //Хедер главной страницы, используется так же для неавторизованых ашеров
    {//тут подключаем готовые разделы для продакшен, это увидетя поисковики и незареганые пользователи
        require ROOT .  '/inc/site_settings_array.php';
        require_once ROOT .  '/inc/style_scripts_header_inc.php'; // connect css files
        require_once ROOT .  '/inc/topbar.php';
        require_once 'inc/loader.php';
       //отключаем или подключаем загрузчик (ракету) настройка в site_settings_array.php
        require_once ROOT .  '/inc/megamenu_inc.php'; //including horizontal main megamenu;
        require_once ROOT .  '/inc/main_slider.php'; //главный слайдер ;
        require_once ROOT .  '/inc/about_row.php';
        require_once ROOT .  '/inc/multi_portfolio_inc.php';

    }

    public static function getMainFooter()
    {
        require_once ROOT . '/inc/scripts_footer_inc.php' ;
        require ROOT . '/templates/footer_inside_page.php';
    }


    public static function getHeader()
    {
        require ROOT . '/templates/header_inside_page.php';
    }

    public static function getFooter()
    {
        require ROOT . '/templates/footer_inside_page.php';
    }


}