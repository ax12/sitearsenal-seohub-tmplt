<?php
$antihack_msg = 'OFF, FUCK OFF';
if (!defined('TOSIBOSI_LASITRASI')) {
    echo $antihack_msg;
    die();
}
$loader = false;

$main_header_settings = array(
    'contacts' => array(
        'address' => 'Екатеринбург, проспект Академика Сахарова, 16',
        'phone' => ' <a  href="tel:+73433825859">+7 (343) 382-58-59</a>',
        'gsm_phone' => '<a href="tel:+7226018171">+7 (922) 601-81-71</a>',
    ),

    'slogan' => 'РАЗРАБОТКА КОРПОРАТИВНЫХ САЙТОВ',
    'sub_slogan' => 'WEB Разработка адаптивных корпоративных сайтов и лэндингов, поддержка и SEO оптимизация.
                    <br><i class="fa fa-street-view" aria-hidden="true"></i></i>&nbsp; г. Екатеринбург &nbsp;
                    <a href="tel:+73433825859"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;+7 (343) 382-58-59</a>',
    'bg_text_move' => 'Web   &nbsp;&nbsp;&nbsp;&nbsp; SiteArsenal <br> &nbsp;&nbsp;&nbsp; Studio',
    'button' => array(
        'name' => 'заказать сайт',
        'url' => '/',
    )
);

$main_menu = array(
    'Главная' => array(
        'WEB разработка' => '/',
        'WEB Дизайн' => '/',
        'Продвижение' => '/',
    ),
    'Услуги' => array(
        'WEB разработка' => '/',
        'WEB Дизайн' => '/',
        'Продвижение' => '/',
    ),
    'Наши преимущества' => '/',
    'Портфолио' => '/',
    'Блог' => '/',
    'Контакты' => '/',
);