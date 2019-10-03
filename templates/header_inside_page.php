<?php require 'inc/site_settings_array.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<?php require_once 'inc/style_scripts_header_inc.php' // connect css files?>

<body>
<!--=================================
  loading -->

<div id="loading">
    <div id="loading-center">
        <img src="images/loader.gif" alt="">
    </div>
</div>

<!--=================================
  loading -->

<!--=================================
    header -->
<header id="header" class="default">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="topbar-left text-center text-md-left">
                        <ul class="list-inline">
                            <li> <i class="ti-location-pin"> </i> Manhattan, New York</li>
                            <li> <i class="ti-headphone-alt"></i>+1 234 56789</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="topbar-right text-center text-md-right">
                        <ul class="list-inline">
                            <li><a href="#"> Check your rankings anytime anywhere </a> </li>
                            <li><a href="#"> Register for FREE!</a></li>
                            <li><a href="#"> Support & FAQ</a></li>
                            <li><a href="#">Login </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=================================
        mega menu -->

    <div class="menu">
        <!-- menu start -->
        <nav id="menu" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items plr-6">
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

                            <ul class="menu-links">

                                <?php
                                foreach ($main_menu as $key => $value) {
                                    echo " <li class=\"active\"><a href=\"javascript:void(0)\"> $key <i class=\"fa fa-angle-down fa-indicator\"></i></a> ";
                                    echo "<ul class=\"drop-down-multilevel\">";
                                    if (is_array($main_menu[$key])) {
                                        foreach ($main_menu[$key] as $key_in => $value_in) {
                                            echo "<li><a href=\"$value_in\"> $key_in </a></li >";
                                        }
                                    }
                                    echo "</ul>";
                                };

                                ?>
                                <li class="side-menu-main">
                                    <div class="side-menu">
                                        <div class="mobile-nav-button">
                                            <div class="mobile-nav-button-line"></div>
                                            <div class="mobile-nav-button-line"></div>
                                            <div class="mobile-nav-button-line"></div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
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
                <p><?php echo $right_side_bar['text_after_logo'];?></p>
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
        </div>
        <div class="side-content-image">
            <img class="img-fluid center-block" src="../assets/images/04.png" alt="">
        </div>
    </div>
    <!--=================================
    search and side menu content -->
<!--=================================
header -->
<!--=================================
intro-title -->
<section class="intro-title blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="intro-content">
                    <div class="intro-name">
                        <h3 class="text-white">Case Studie</h3>
                        <ul class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Case Studie</li>
                        </ul>
                    </div>
                    <div class="intro-img">
                        <img class="img-fluid" src="images/breadcrumb/01.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
intro-title -->



