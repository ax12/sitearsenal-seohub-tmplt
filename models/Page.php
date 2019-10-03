<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 03.10.2019
 * Time: 21:29
 */

class Page
{
    public static function getHeader() {
        require ROOT . '/templates/header_inside_page.php';

    }
    public static function getFooter() {
        require ROOT . '/templates/footer_inside_page.php';

    }


}