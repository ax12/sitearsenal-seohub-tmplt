<?php
if ( $GLOBALS['$devMess']) echo '<div class="debug-msg position-relative">подключен(inc/site_settings_array.php)</div>';
//общие настройки для всех версий
$url_page = $_SERVER['REQUEST_URI'];
$loader = false;
$dark_logo = '/img/dark-logo.png';
$light_logo = '/img/light-logo.png';
$img_header_inside = true; //картинка на внутреннем хедере под главным меню

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
if ($url_page) { //Екатеринбург, язык русский
    $lang = 'RU';
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
        'Главная' =>'/',
        'О компании' => array(
            'Портфолио' => 'portfolio',
            'Технологии' => '/',
        ),
        'Наши преимущества' => '/preimishestva',

        'Портфолио' => 'portfolio',
        'Блог' => 'blog',
        'Контакты' => 'contact',
    );
//правый выезжающий сайдбар с контактной информацией
    $right_side_bar = array(
        'text_after_logo' => 'Свяжитесь с нами удобным для вас способом. Мы готовы ответить на ваши вопросы, предложить наилучший вариант для решения вашей задачи. Мы можем договриться о встрече с вами для детального обсуждения вашего проекта.',
        'yekaterinburg' => array()
    );
//блок с текстом слева и картинкой справа (под хедером) Екатеринбург НАЧАЛО
    $about_row = array(
        'header1' => 'создаем сайты и',
        'header2' => 'делаем поисковую оптимизацию',
        'description' => 'Обратившись в нашу web студию в Екатеринбурге, вам доступны к заказу услуги как по созданию сайта так и по SEO продвижению. Мы проводим аудиты уже существующих сайтов с дальнейшей модернизациие и поисковой оптимизацией. Разрабатываем для вас семантическое ядро по вашим опорным запросам, изучаем спрос и ваших конкурентов.',
    );
//блок с текстом слева и картинкой справа (под хедером) Екатеринбург КОНЕЦ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^


//мультисервис НАЧАЛО
    $service_tabs_v2 = array(
        'header' => 'Почему лучше работать с нами?',
        'text1' => 'Наше преимущество - опыт и не всокие цены на наши услуги',
        'text2' => 'Благодаря огромному опыту наших специалистов, мы готовы предложить вам высококачественные услуги в области web разработки, дизайна, семантического анализа и поисковой оптимизации. Вы можете обратится к нам за бесплатной консультацией по существующим проектам',
        'button_name' => 'отправиь заявку',
        'button_url' => '/',
        /*надпись на кнопках в блоках услуг*/
        'button_items_text' => 'подробнее',

    );


    $_service_items_v2 = array(
        'design' => array(
            'img' => '04.png',
            'header' => 'WEB Дизайн',
            'description' => 'Разработка дизайнерских решений для представления вашего проекта. Разработаем логотип и фирменный стиль.',
            'btn_url' => 'info',
        ),

        'web_dev' => array(
            'img' => '01.png',
            'header' => 'WEB разработка',
            'description' => 'Разработка сайта согласно утверженному техзаданию, подготовко функционала и посадка дизайн-макета на CMS или HTML страницу ',
            'btn_url' => '#',
        ),
        'seo' => array(
            'img' => '02.png',
            'header' => 'SEO ОПТИМИЗАЦИЯ',
            'description' => 'Работы по поисковой оптимизации сайта',
            'btn_url' => '#',
        ),
        'seo_text' => array(
            'img' => '03.png',
            'header' => 'КОНТЕНТ УСЛУГИ',
            'description' => 'Все что связано с наполнением сайта, товары, описание и характеристики. Тематические статьи под ключевые запросы, распределение посадочных страниц',
            'btn_url' => '#',
        ),

        'seo2' => array(
            'img' => '05.png',
            'header' => 'семантика',
            'description' => 'Сбор семантического ядра по опорным запросам, распределение по кластерам. подготовка посадочных страниц',
            'btn_url' => '#',
        ),
        'seo_text3' => array(
            'img' => '06.png',
            'header' => 'АУДИТ и СОПРОВОЖДЕНИЕ',
            'description' => 'Анализ существующего или вновь созданного сайта в другой web студии, проверка на техническое и логическое соответсвие проекта',
            'btn_url' => '#',
        ),
    );


//мультисервис КОНЕЦ


} //end if main page in russian
/*Конец настроек для русскоязычной версии главной страницы*******************************************************ЕКАТЕРИНБУРГ END/

/*Настроки для русскоязычной версии главной страницы для КРАСНОДАРА *********************КРАСНОДАР***************begin**********************************/
if ($url_page == '/krasnodar/') { //Краснодар, язык русский
    $lang = 'RU';
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
        'Портфолио' => array(
            'Скорость' => '/',
            'Медленность' => '/',
            'Блаблаблашность' => '/',
        ),
        'Блог' => '/',
        'Контакты' => '/',
    );
//правый выезжающий сайдбар с контактной информацией
    $right_side_bar = array(
        'text_after_logo' => 'Свяжитесь с нами удобным для вас способом. Мы готовы ответить на ваши вопросы, предложить наилучший вариант для решения вашей задачи. Мы можем договриться о встрече с вами для детального обсуждения вашего проекта.',
        'yekaterinburg' => array()
    );
//блок с текстом слева и картинкой справа (под хедером) Екатеринбург НАЧАЛО
    $about_row = array(
        'header1' => 'создаем сайты и',
        'header2' => 'делаем поисковую оптимизацию',
        'description' => 'Обратившись в нашу web студию в Краснодаре, вам доступны к заказу услуги как по созданию сайта так и по SEO продвижению. Мы проводим аудиты уже существующих сайтов с дальнейшей модернизациие и поисковой оптимизацией. Разрабатываем для вас семантическое ядро по вашим опорным запросам, изучаем спрос и ваших конкурентов.',
    );
//блок с текстом слева и картинкой справа (под хедером) Екатеринбург КОНЕЦ
} //end if main page in russian
/*Конец настроек для русскоязычной версии главной страницы Краснодар*/

/*НАЧАЛО ****Массив данных для русскоязычного ПОРТФОЛИО, данные подходят для Краснодара и Екатеринбурга******************НАЧАЛО*/
$portfolio_arr = array( //используются в файле inc/multi_portfolio_inc.php
    'first_header' => 'вэбразработка',
    'second_header' => 'ПОРТФОЛИО',
);
//массив с проектами
//КАТЕГОРИИ ДЛЯ ФИЛЬТРА НА СТРАНИЦЕ portfolio
//указать без запятых в элементе массива 'type'
//        'dezign' => 'Дизайн',
//        'projects' => 'WEB Разработка',
//        'landing' => 'Лэндинг',
//        'ranking' => 'Текущие проекты',
//        'seo' => 'SEO',
//        'upwork' => 'Upwork projects',

$portfolio_items = array(
    'vecherya-soloha' => array(
        'url_link_button' => '#',
        'name_button' => 'Подробнее',
        'img_main_scroll' => '../img/vecherya-soloha-550px.jpg',
        'type' => 'dezign development  projects',
        'header' => 'Ресторан "Корчма Вечеря у солохи"',
        'description' => 'Сайт ресторана украинской кухни в Екатеринбурге, разработка дизайна, адаптивная верстка, CMS WordPress',
        'url' => 'https://vecherya-soloha.ru/',


    ),
    'instrument-ekat' => array(
        'url_link_button' => '#',
        'name_button' => 'Подробнее',
        'img_main_scroll' => '../img/instrument-ekat-550px.jpg',
        'type' => 'landing development',
        'header' => 'Прокат Инструмента',
        'description' => 'Прокат электро и бензоинструмента в Екатеринбурге. Лэндинг с возможностью расширения до полноценного каталога проката строительного инструмента',
        'url' => 'https://instrument-ekat.ru',
    ),
    'pelemeshka-ekb' => array(
        'url_link_button' => '#',
        'name_button' => 'Подробнее',
        'img_main_scroll' => '../img/pelemeshka-ekb-550px.jpg',
        'type' => 'seo development',
    ),
    '4elementstobacco' => array(
        'url_link_button' => '#',
        'name_button' => 'Подробнее',
        'img_main_scroll' => '../img/4elementstobacco-550px.jpg',
        'type' => 'dezign development upwork',
    ),
    'air-parking' => array(
        'url_link_button' => '#',
        'name_button' => 'Подробнее',
        'img_main_scroll' => '../img/air-parking-550px.jpg',
        'type' => 'landing development',
    ),
    'krasnodar.internet-doma' => array(
        'url_link_button' => '#',
        'name_button' => 'Подробнее',
        'img_main_scroll' => '../img/krasnodar.internet-doma-550px.jpg',
        'type' => 'landing seo development',
    ),
);
/*КОНЕЦ ****Массивы данных для русскоязычного ПОРТФОЛИО, данные подходят для Краснодара и Екатеринбурга******************КОНЕЦ*/

/*НАЧАЛО ****Массив данных для русскоязычного СЕРВИСА, данные подходят для Краснодара и Екатеринбурга******************НАЧАЛО*/
$services_arr = array( //используются в файле inc/services_tabs_inc.php
    'background_text' => 'разработка и оптимизация',
    'first_header' => 'мы предлагаем',
    'second_header' => 'наши услуги',
);
$services_items = array(
    'web_develop' => array(
        'img' => '01.png',
        'header' => 'WEB разработка',
        'description' => 'Создание корпоративных сайтов и Интеренет магазинов на различных CMS под ключ. Создание лэндингов',
    ),
    'semantic_core' => array(
        'img' => '02.png',
        'header' => 'Сбор семантического ядра',
        'description' => 'Наши умопомрачительные услуги самы помрачительные на рынке помрачительных учлуг 2',
    ),
);
/*КОНЕЦ ****Массив данных для русскоязычного СЕРВИСА, данные подходят для Краснодара и Екатеринбурга******************КОНЕЦ*/


/*НАСТРАИВАЕМ АНГЛОЯЗЫЧНУЮ ВЕРСИЮ ГЛАВНОЙ СТРАНИЦЫ*****************************АНГЛИЙСКИЙ ***********************************************/
if ($url_page == '/en/') { //выдача по адресу sitearsenal.ru/en/, язык Английский
    $lang = 'EN';
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
        'yekaterinburg' => array()
    );
}; //end if for /en/





