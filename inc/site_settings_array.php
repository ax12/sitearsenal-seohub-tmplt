<?php
$antihack_msg = 'OFF, FUCK OFF';
if (!defined('TOSIBOSI_LASITRASI')) {
    echo $antihack_msg;
    die();
}
//общие настройки для всех версий
$loader = true;
$dark_logo = '/img/dark-logo.png';
$light_logo = '/img/light-logo.png';

    $main_contacts = array(
        'ekb' => array(
            'city' => 'г. Екатеринбург',
            'address' => 'проспект Академика Сахарова, 16',
            'phone' => ' <a  href="tel:+73433825859">+7 (343) 382-58-59</a>',
            'gsm_phone' => '<a href="tel:+7226018171">+7 (922) 601-81-71</a>',
        ),
        'krasnodar' => array(
            'city' => 'Краснодар',
            'address' => 'ул. Красная, 16',
            'phone' => ' <a  href="tel:+78612042471">+7 (861) 204-24-71</a>',
            'gsm_phone' => '<a href="tel:+7226018171">+7 (922) 601-81-71</a>',
        ),
        'english' => array(
            'city1' => 'Yekaterinburg City',
            'address1' => 'Sahorov street, 16',
            'city2' => 'Krasnodar City',
            'address2' => 'Krasnaya street, 22',
            'phone' => ' <a  href="tel:+700000000">+7 (343) 000-58-59</a>',
            'gsm_phone' => '<a href="tel:+7226018171">+7 (922) 601-81-71</a>',
        ),
    );
//main settings END

/*Настроки для русскоязычной версии главной страницы************************ЕКАТЕРИНБУРГ***************************************/
if ($url_page == '/') { //Екатеринбург, язык русский
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

//главное меню сайта
    $main_menu = array(
        'Главная' => array(
            'О компании' => '/',
            'Портфолио' => '/',
            'Технологии' => '/',
        ),
        'Услуги' => array(
            'WEB разработка' => '/',
            'WEB Дизайн' => '/',
            'Продвижение' => '/',
        ),
        'Наши преимущества' => array(
            'Скорость' => '/',
            'Медленность' => '/',
            'Блаблаблашность' => '/',
        ),
        'Портфолио' => '/',
        'Блог' => '/',
        'Контакты' => '/',
    );
//правый выезжающий сайдбар с контактной информацией
    $right_side_bar = array(
        'text_after_logo' => 'Свяжитесь с нами удобным для вас способом. Мы готовы ответить на ваши вопросы, предложить наилучший вариант для решения вашей задачи. Мы можем договриться о встрече с вами для детального обсуждения вашего проекта.',
        'yekaterinburg' => array(

        )
    );

} //end if main page in russian
/*Конец настроек для русскоязычной версии главной страницы*******************************************************ЕКАТЕРИНБУРГ END/

/*Настроки для русскоязычной версии главной страницы для КРАСНОДАРА *********************КРАСНОДАР***************begin**********************************/
if ($url_page == '/krasnodar/') { //Екатеринбург, язык русский
    $main_header_settings = array(
        'contacts' => array(
            'address' => 'Краснодар, ул. Красная, дом 99 тел. +7 (861) 204-24-71',
            'phone' => ' <a  href="tel:+78612042471">+7 (861) 204-24-71</a>',
//            'gsm_phone' => '<a href="tel:+7226018171">+7 (922) 601-81-71</a>',
        ),

        'slogan' => 'РАЗРАБОТКА КОРПОРАТИВНЫХ САЙТОВ в краснодаре',
        'sub_slogan' => 'WEB Разработка адаптивных корпоративных сайтов и лэндингов, поддержка и SEO оптимизация.
                    <br><i class="fa fa-street-view" aria-hidden="true"></i></i>&nbsp; г. Краснодар, ул. Красная &nbsp;
                    <a href="tel:+78612042471"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;+7 (861) 204-24-71</a>',
        'bg_text_move' => 'Краснодар   &nbsp;&nbsp;&nbsp;&nbsp; SiteArsenal <br> &nbsp;&nbsp;&nbsp; Studio',
        'button' => array(
            'name' => 'заказать сайт',
            'url' => '/',
        )
    );

//главное меню сайта
    $main_menu = array(
        'Главная' => array(
            'О компании' => '/',
            'Портфолио' => '/',
            'Технологии' => '/',
        ),
        'Услуги' => array(
            'WEB разработка' => '/',
            'WEB Дизайн' => '/',
            'Продвижение' => '/',
        ),
        'Наши преимущества' => array(
            'Скорость' => '/',
            'Медленность' => '/',
            'Блаблаблашность' => '/',
        ),
        'Портфолио' => '/',
        'Блог' => '/',
        'Контакты' => '/',
    );
//правый выезжающий сайдбар с контактной информацией
    $right_side_bar = array(
        'text_after_logo' => 'Свяжитесь с нами удобным для вас способом. Мы готовы ответить на ваши вопросы, предложить наилучший вариант для решения вашей задачи. Мы можем договриться о встрече с вами для детального обсуждения вашего проекта.',
        'yekaterinburg' => array(

        )
    );

} //end if main page in russian
/*Конец настроек для русскоязычной версии главной страницы*/

/*НАЧАЛО ****Массив данных для русскоязычного ПОРТФОЛИО, данные подходят для Краснодара и Екатеринбурга******************НАЧАЛО*/
$portfolio_arr = array( //используются в файле inc/multi_portfolio_inc.php
  'first_header' => 'вэбразработка',
  'second_header' => 'ПОРТФОЛИО',
);
    //массив с проектами
  $portfolio_items = array(
    'vecherya-soloha' => array(
        'url_link_button' => '#',
        'name_button' => 'Подробнее',
        'img_main_scroll' => '../img/vecherya-soloha-550px.jpg',
    ),
      'instrument-ekat' => array(
        'url_link_button' => '#',
        'name_button' => 'Подробнее',
        'img_main_scroll' => '../img/instrument-ekat-550px.jpg',
    ),
      'pelemeshka-ekb' => array(
        'url_link_button' => '#',
        'name_button' => 'Подробнее',
        'img_main_scroll' => '../img/pelemeshka-ekb-550px.jpg',
    ),
      '4elementstobacco' => array(
        'url_link_button' => '#',
        'name_button' => 'Подробнее',
        'img_main_scroll' => '../img/4elementstobacco-550px.jpg',
    ),
      'air-parking' => array(
        'url_link_button' => '#',
        'name_button' => 'Подробнее',
        'img_main_scroll' => '../img/air-parking-550px.jpg',
    ),
      'krasnodar.internet-doma' => array(
        'url_link_button' => '#',
        'name_button' => 'Подробнее',
        'img_main_scroll' => '../img/krasnodar.internet-doma-550px.jpg',
    ),
);
/*КОНЕЦ ****Массивы данных для русскоязычного ПОРТФОЛИО, данные подходят для Краснодара и Екатеринбурга******************КОНЕЦ*/

/*НАЧАЛО ****Массив данных для русскоязычного СЕРВИСА, данные подходят для Краснодара и Екатеринбурга******************НАЧАЛО*/
$services_arr = array( //используются в файле inc/services_tabs_inc.php
    'background_text' => 'разработка и оптимизация',
    'first_header' => 'мы предлагаем',
    'second_header' => 'наши услуги',
);


/*НАСТРАИВАЕМ АНГЛОЯЗЫЧНУЮ ВЕРСИЮ ГЛАВНОЙ СТРАНИЦЫ*****************************АНГЛИЙСКИЙ ***********************************************/
if ($url_page == '/en/') { //выдача по адресу sitearsenal.ru/en/, язык Английский
    $main_header_settings = array(
        'contacts' => array(
            'address' => 'Yekaterinburg, Akademik Saharov, 16',
            'phone' => ' <a  href="tel:+73433825859">+7 (343) 382-58-59</a>',
            'gsm_phone' => '<a href="tel:+7226018171">+7 (922) 601-81-71</a>',
        ),

        'slogan' => 'DEVELOPMENT OF CORPORATE WEBSITES',
        'sub_slogan' => 'WEB development of adaptive corporate websites and landing pages, support and SEO.
                    <br><i class="fa fa-street-view" aria-hidden="true"></i></i>&nbsp; Russia, Ural, Yekaterinburg &nbsp;
                    <a href="tel:+73433825859"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;+7 (343) 382-58-59</a>',
        'bg_text_move' => 'Russia   &nbsp;&nbsp;&nbsp;&nbsp; SiteArsenal <br> &nbsp;&nbsp;&nbsp; Studio',
        'button' => array(
            'name' => 'order website',
            'url' => '#',
        )
    );

//главное меню сайта на английском
    $main_menu = array(
        'Main page' => array(
            'About' => '/en/',
            'Portfolio' => '/',
            'Technologies' => '/',
        ),
        'Services' => array(
            'WEB разработка' => '/',
            'WEB Дизайн' => '/',
            'Продвижение' => '/',
        ),
        'Advantages' => array(
            'High development speed' => '/',

        ),
        'Portfolio' => '/',
        'Blog' => '/',
        'Contacts' => '/',
    );
//правый выезжающий сайдбар с контактной информацией
    $right_side_bar = array(
        'text_after_logo' => 'Свяжитесь с нами удобным для вас способом. Мы готовы ответить на ваши вопросы, предложить наилучший вариант для решения вашей задачи. Мы можем договриться о встрече с вами для детального обсуждения вашего проекта.',
        'yekaterinburg' => array(

        )
    );
}; //end if for /en/





