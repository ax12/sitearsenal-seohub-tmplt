<?php


class Page
{
    public static function getMainHeader()
    {
        require 'inc/site_settings_array.php';


        require_once 'inc/style_scripts_header_inc.php'; // connect css files
        require_once 'inc/topbar.php';
       //отключаем или подключаем загрузчик (ракету) настройка в site_settings_array.php
        if ($loader) {
            require_once 'inc/loader.php';
        }

        require_once 'inc/megamenu_inc.php'; //including horizontal main megamenu;

        require 'inc/main_slider.php'; //главный слайдер ;
        require_once 'inc/about_row.php';

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