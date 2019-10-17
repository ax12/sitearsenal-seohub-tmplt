<header id="header" class="
<?php //определяем класс для меню, внутренний или главный хедер
if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/krasnodar/' || $_SERVER['REQUEST_URI'] == '/en/') {
    echo 'transparent'; //class="transparent"; - меню на главной странице прозрачное
} else {
    echo 'default'; //class="default"; - меню на внутренних страницах (белое)
}; ?>"

<div class="menu">
    <!-- menu start -->
    <nav>
        <?php getIncludingFileName ('/inc/megamenu_inc.php');?>
        <!-- menu list items container -->
        <section class="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- menu logo -->
                        <ul class="menu-logo">
                            <li>
                                <a href="../index-1.html"><img id="logo_light_img" src="../assets/images/logo-light.png"
                                                               alt="logo"> </a>
                            </li>
                        </ul>
                        <!-- menu links -->
                        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent">

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                <?php

                                foreach ($main_menu as $key => $value) {
                                    if (!is_array($value)) {
                                        $link = $value;
                                        $text = $key;
                                        echo " <li class=\"nav-item\"><a class=\"nav-link\" href=\"$link\"> $text </a> </li>";
                                    }

                                    if (is_array($main_menu[$key])) {
                                        echo "<li class=\"nav-item dropdown\"><a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\"
                                                              role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> $key </a>";
                                        echo " <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">";
                                        foreach ($main_menu[$key] as $key_in => $value_in) {
                                          echo " <a class=\"dropdown-item\" href=\"$value_in\">$key_in</a>";

                                        }
                                        echo "</div>";
                                        echo "</li >";
                                    }
                                };
                                ?>
                                    </ul>

                            </div>
                        </nav>
<!--<!--                            <?php
//
//                            foreach ($main_menu as $key => $value) {
//                                if (!is_array($value)) {
//                                    $link = $value;
//                                } else {
//                                    $link = 'javascript:void(0)';
//                                }
//                                echo "<ul class=\"navbar-nav\">";
//                                echo " <li class=\"nav-item\"><a class=\"nav-link\" href=\"$link\"> $key </a> </li>";
//
//                                echo "<ul class=\"navbar-nav\">";
//                                if (is_array($main_menu[$key])) {
//                                    foreach ($main_menu[$key] as $key_in => $value_in) {
//                                        echo "<li><a href=\"$value_in\"> $key_in </a></li >";
//                                    }
//                                }
//                                echo "</ul>";
//                            };
//
//                            ?>
                            <li class="side-menu-main">
                                <div class="side-menu">
                                    <div class="mobile-nav-button">
                                        <div class="mobile-nav-button-line"></div>
                                        <div class="mobile-nav-button-line"></div>
                                        <div class="mobile-nav-button-line"></div>
                                    </div>
                                </div>
                            </li>


                    </div>

                </div>
            </div>
        </section>
    </nav>
</div>    <!-- menu end -->

<!--=================================
search and side menu content -->
<div class="menu-overlay"></div>
<div class="side-content" id="scrollbar">
    <div class="side-content-info">
        <div class="menu-toggle-hamburger menu-close"><i class="mx-icons-hover far fa-times-circle"></i></div>
        <div class="side-logo">
            <img class="img-fluid mb-3" src="../assets/images/logo-dark.png" alt="">
            <p><?php echo $right_side_bar['text_after_logo']; ?></p>
            <hr class="mt-2 mb-3"/>
        </div>
        <div class="contact-address">
            <div class="address-title mb-3">
                <h4 class="mb-1">Office 01</h4>
                <p>mollitia omnis fuga, nihil suscipit lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deleniti sit quos.</p>
            </div>
            <div class="contact-box mb-2">
                <div class="contact-icon">
                    <i class="ti-direction-alt text-blue"></i>
                </div>
                <div class="contact-info">
                    <div class="text-left">
                        <h6>25, King St. 20170</h6>
                        <span>Melbourne Australia</span>
                    </div>
                </div>
            </div>
            <div class="contact-box mb-2">
                <div class="contact-icon">
                    <i class="ti-headphone-alt text-blue"></i>
                </div>
                <div class="contact-info">
                    <div class="text-left">
                        <h6>0011 234 56789</h6>
                        <span>Mon-Fri 8:30am-6:30pm</span>
                    </div>
                </div>
            </div>
            <div class="contact-box mb-2">
                <div class="contact-icon">
                    <i class="ti-email text-blue"></i>
                </div>
                <div class="contact-info">
                    <div class="text-left">
                        <h6>info@yoursite.com</h6>
                        <span>24 X 7 online support</span>
                    </div>
                </div>
            </div>
        </div>
        <?php

        if (!$_SESSION['admin']) { //подключение формы авторизации
            require_once ROOT . '/templates/login_template.php';
        }
        ?>

        <?php
        //кнопка выход для админа

        if ($_SESSION['admin']) { ?>
            <a class="button border" href="?do=logout">Выход</a>
        <?php }; ?>
    </div>
    <div class="side-content-image text-center center-block">

<!--        <img class="img-fluid center-block " src="../assets/images/04.png" alt="">-->

    </div>
</div>
<!--=================================
search and side menu content -->
</header>