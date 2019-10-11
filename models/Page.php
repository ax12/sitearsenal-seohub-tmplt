<?php


class Page
{
    public static function getHeader() {
        require ROOT . '/templates/header_inside_page.php';

    }
    public static function getFooter() {
        require ROOT . '/templates/footer_inside_page.php';

    }


}