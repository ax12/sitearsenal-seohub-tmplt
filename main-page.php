<?php require 'inc/site_settings_array.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<?php require 'inc/style_scripts_header_inc.php'; // connect css files?>
<body>
<!--=================================
    loading -->
<?php require_once 'inc/topbar.php';?>
<?php //отключаем или подключаем загрузчик (ракету) настройка в site_settings_array.php
if ($loader) {
require_once 'inc/loader.php';};?>
<a href="http://www.designnominees.com/themes/seohub-multipurpose-html5-template" title="Design Nominees"
   style="width:70px;height:130px;position:fixed;top:100px;right:0px;z-index:99999;text-indent:-9999px;background: url(http://www.designnominees.com/ribbons/designnominees-ribbon-totd-white-right.png) no-repeat;"
   target="_blank">Design Nominees</a>

<a href="http://www.csslight.com/website/20358/SEOhub-Multipurpose-HTML5-Template" title="CSS Light"
   style="width:84px;height:29px;position:fixed;top:300px;right:0px;z-index:99999;text-indent:-9999px;background: url(http://www.csslight.com/ribbons/small-csslight-ribbon-right.png) no-repeat;"
   target="_blank">CSS Light Web Gallery</a>

<a href=""
   style="background: url(http://webguruawards.com/awards/GOTD/img_guru_of_the_day_gray.png) no-repeat scroll 0 0 rgba(0, 0, 0, 0);width:75px;height:111px;position:fixed;top:370px;right:5px;z-index:99999;"
   target="_blank"></a>

<!--=================================
    loading -->
<!--=================================
    header -->

    <!--=================================
        mega menu -->
   <?php require_once 'inc/megamenu_inc.php' //including horizontal main megamenu;?>


<!--=================================
header -->



<!--=================================
slider -->
<?php require_once 'inc/main_slider.php' //главный слайдер ;?>
<!--=================================
slider -->

<!--=================================
HIGH QUALITY DOCUMENTATION -->
<?php require_once 'inc/about_row.php';?>

<!--=================================
HIGH QUALITY DOCUMENTATION -->
<?php require_once 'inc/tabs.php' ?>
<!--=================================
Our FEATURES -->
<?php require_once 'inc/services_tabs_inc_v2.php';?>
<!--=================================
Our FEATURES -->

<!--=================================
multi-page -->
<?php require_once 'inc/multi_portfolio_inc.php' ?>

<!--=================================
multi-page -->



<!--=================================
Multi-Header -->
<section class="light-blue-bg page-section-ptb sec-relative plr-0 pb-0">
    <marquee class="animated-text o-hidden white">50+ Templates</marquee>
    <div class="container-fluid plr-0">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <span>Very Easy to Use</span>
                    <h2 class="text-center">50+ Templates Included</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="false" data-items="4" data-sm-items="3"
                     data-xs-items="2" data-loop="true" data-auto="true" data-space="0">
                    <div class="item"><img class="img-fluid" src="../assets/images/shortcode/img1.png" alt=""></div>
                    <div class="item"><img class="img-fluid" src="../assets/images/shortcode/img2.png" alt=""></div>
                    <div class="item"><img class="img-fluid" src="../assets/images/shortcode/img3.png" alt=""></div>
                    <div class="item"><img class="img-fluid" src="../assets/images/shortcode/img4.png" alt=""></div>
                    <div class="item"><img class="img-fluid" src="../assets/images/shortcode/img5.png" alt=""></div>
                    <div class="item"><img class="img-fluid" src="../assets/images/shortcode/img6.png" alt=""></div>
                    <div class="item"><img class="img-fluid" src="../assets/images/shortcode/img7.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
Multi-Header -->

<!--=================================
Multi-Header -->
<section class="black-bg page-section-ptb plr-6 sec-relative core-fearture">
    <marquee class="animated-text o-hidden white2">Our Core Features</marquee>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <span>No limits for creativity</span>
                    <h2 class="text-center text-white">Multiple header styles</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="true" data-items="4" data-md-items="3"
                     data-sm-items="2" data-xs-items="2" data-loop="true">
                    <div class="item"><img class="img-fluid lazy" src="../assets/images/header/loading.jpg"
                                           data-original="../assets/images/header/style1.jpg" alt=""></div>
                    <div class="item"><img class="img-fluid lazy" src="../assets/images/header/loading.jpg"
                                           data-original="../assets/images/header/style2.jpg" alt=""></div>
                    <div class="item"><img class="img-fluid lazy" src="../assets/images/header/loading.jpg"
                                           data-original="../assets/images/header/style3.jpg" alt=""></div>
                    <div class="item"><img class="img-fluid lazy" src="../assets/images/header/loading.jpg"
                                           data-original="../assets/images/header/style4.jpg" alt=""></div>
                    <div class="item"><img class="img-fluid lazy" src="../assets/images/header/loading.jpg"
                                           data-original="../assets/images/header/style5.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
Multi-Header -->




<!--=================================
Rating -->
<section class="rating blue-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="rating-block">
                    <h3 class="title text-white">Don't forget to rate us.</h3>
                    <ul class="list-inline">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
Rating -->


<!--=================================
Footer-->

<?php
require_once 'footer.php';
?>

<!--=================================
Footer-->

<!--=================================
back to top -->
<div class="back-to-top">
    <span><img src="../assets/images/rocket.png" data-src="../assets/images/rocket.png" data-hover="../assets/images/rocket.gif"
               alt=""></span>
</div>
<!--=================================
back to top -->

<?php require_once 'inc/scripts_footer_inc.php' ?>
</body>
</html>