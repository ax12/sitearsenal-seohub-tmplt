<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require_once 'inc/style_scripts_header_inc.php' // connect css files?>
    <?php require_once 'inc/site_settings_array.php' // connect settings arrays?>
</head>

<body>
<!--=================================
    loading -->

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
<header id="header" class="transparent">
    <!--=================================
        mega menu -->
   <?php require_once 'inc/megamenu_inc.php' //including horizontal main megamenu;?>

</header>
<!--=================================
header -->

<!--=================================
search and side menu content -->
<div class="menu-overlay"></div>
<div class="side-content" id="scrollbar">
    <div class="side-content-info">
        <div class="menu-toggle-hamburger menu-close"><span class="ti-close"> </span></div>
        <div class="side-logo">
            <img class="img-fluid mb-3" src="assets/images/logo-dark.png" alt="">
            <p>Culpa molestias mollitia natus labore perspiciatis ipsa lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Sit aut explicabo mollitia, sed, eos, magni quos laborum dolores ab distinctio
                voluptates quae ipsam.</p>
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
        <img class="img-fluid center-block" src="assets/images/04.png" alt="">
    </div>
</div>
<!--=================================
search and side menu content -->

<!--=================================
slider -->
<?php require_once 'inc/main_slider.php' //главный слайдер ;?>
<!--=================================
slider -->

<!--=================================
multi-page -->
<section class="demo-sec light-blue-bg page-section-ptb plr-6 sec-relative" id="scroll-buttons">
    <marquee class="animated-text o-hidden white">Home pages</marquee>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title text-center">
                    <span>stunning Home Demos </span>
                    <h2 class="mb-3">Multi- Home Layout</h2>
                </div>
            </div>
        </div>
        <div class="portfolio">
            <div class="row">
                <div class="col-md-4">
                    <div class="item demo-1">
                        <a target="_blank" href="index-1.html">
                            <div class="item-box">
                                <div class="item-inside">
                                    <span class="demo-img"
                                          style="background-image: url(assets/images/demo/home-1.jpg);"></span>
                                    <img class="lazy" src="assets/images/demo/loading.jpg"
                                         data-original="assets/images/demo/home-1.jpg" alt="">
                                </div>
                            </div>
                        </a>
                        <div class="demo-box"><a href="index-1.html">Home Layout 1</a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item demo-2">
                        <a target="_blank" href="index-2.html">
                            <div class="item-box">
                                <div class="item-inside">
                                    <span class="demo-img"
                                          style="background-image: url(assets/images/demo/home-2.jpg);"></span>
                                    <img class="lazy" src="assets/images/demo/loading.jpg"
                                         data-original="assets/images/demo/home-2.jpg" alt="">
                                </div>
                            </div>
                        </a>
                        <div class="demo-box"><a href="index-2.html">Home Layout 2</a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item demo-3">
                        <a target="_blank" href="index-3.html">
                            <div class="item-box">
                                <div class="item-inside">
                                    <span class="demo-img"
                                          style="background-image: url(assets/images/demo/home-3.jpg);"></span>
                                    <img class="lazy" src="assets/images/demo/loading.jpg"
                                         data-original="assets/images/demo/home-3.jpg" alt="">
                                </div>
                            </div>
                        </a>
                        <div class="demo-box"><a href="index-3.html">Home Layout 3</a></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="item demo-4 mb-0">
                        <a target="_blank" href="index-4.html">
                            <div class="item-box">
                                <div class="item-inside">
                                    <span class="demo-img"
                                          style="background-image: url(assets/images/demo/home-4.jpg);"></span>
                                    <img class="lazy" src="assets/images/demo/loading.jpg"
                                         data-original="assets/images/demo/home-4.jpg" alt="">
                                </div>
                            </div>
                        </a>
                        <div class="demo-box"><a href="index-4.html">Home Layout 4</a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item demo-5 mb-0">
                        <a target="_blank" href="index-5.html">
                            <div class="item-box">
                                <div class="item-inside">
                                    <span class="demo-img"
                                          style="background-image: url(assets/images/demo/home-5.jpg);"></span>
                                    <img class="lazy" src="assets/images/demo/loading.jpg"
                                         data-original="assets/images/demo/home-5.jpg" alt="">
                                </div>
                            </div>
                        </a>
                        <div class="demo-box"><a href="index-5.html">Home Layout 5</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
multi-page -->

<!--=================================
Our FEATURES -->
<section class="white-bg page-section-ptb pb-6 plr-6 sec-relative core-fearture">
    <marquee class="animated-text o-hidden dark">Our Core Features</marquee>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <span>we ARE seohUB AND</span>
                    <h2 class="text-center">OUR CORE FEATURES</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 feature-item">
                <div class="feature-box-01 text-left mb-4">
                    <div class="feature-box-img"><img src="assets/images/icon/01.png" alt=""></div>
                    <div class="feature-box-info">
                        <h5 class="mb-2 mt-2">Revolution slider included</h5>
                        <p>Includes revolution slider jquery plugin worth <b>$14</b> which will make your website more
                            impactful.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 feature-item">
                <div class="feature-box-01 text-left mb-4">
                    <div class="feature-box-img"><img src="assets/images/icon/02.png" alt=""></div>
                    <div class="feature-box-info">
                        <h5 class="mb-2 mt-2">Responsive Mega Drop Down Menu</h5>
                        <p>Horizontal, vertical left, vertical right, 6 drop down animations, multilevel drop down and
                            much more...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 feature-item">
                <div class="feature-box-01 text-left mb-4">
                    <div class="feature-box-img"><img src="assets/images/icon/03.png" alt=""></div>
                    <div class="feature-box-info">
                        <h5 class="mb-2 mt-2">Fully Responsive & retina ready</h5>
                        <p>Seohub automatically resize to fit the different screen size and make it look great on all
                            device.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 feature-item">
                <div class="feature-box-01 text-left mb-4">
                    <div class="feature-box-img"><img src="assets/images/icon/04.png" alt=""></div>
                    <div class="feature-box-info">
                        <h5 class="mb-2 mt-2">Support all major Browsers</h5>
                        <p>Seohub support all major browsers like Google Chrome, Mozilla Firefox, Safari, Opera,
                            Internet Explorer 9 and Above.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 feature-item">
                <div class="feature-box-01 text-left mb-4">
                    <div class="feature-box-img"><img src="assets/images/icon/05.png" alt=""></div>
                    <div class="feature-box-info">
                        <h5 class="mb-2 mt-2">Well organized & customized code</h5>
                        <p>We have built Seohub to be the ultimate HTML5 template with clean, clear, commented and
                            customizable code.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 feature-item">
                <div class="feature-box-01 text-left mb-4">
                    <div class="feature-box-img"><img src="assets/images/icon/06.png" alt=""></div>
                    <div class="feature-box-info">
                        <h5 class="mb-2 mt-2">Home layouts options</h5>
                        <p>Seohub has more 5 stunning home page layouts options to choose from. Change as per your
                            requirement.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 feature-item">
                <div class="feature-box-01 last-1 text-left mb-4">
                    <div class="feature-box-img"><img src="assets/images/icon/07.png" alt=""></div>
                    <div class="feature-box-info">
                        <h5 class="mb-2 mt-2">blog layout options</h5>
                        <p>Each story needs a beautiful design. modern and unique blog layouts including classic and
                            masonary that you can place anywhere</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 feature-item">
                <div class="feature-box-01 last-2 text-left mb-4">
                    <div class="feature-box-img"><img src="assets/images/icon/08.png" alt=""></div>
                    <div class="feature-box-info">
                        <h5 class="mb-2 mt-2">Detailed documentation</h5>
                        <p>Seohub Documentation has been carefully detailed and completed with super easy to understand
                            instructions giving you the full access to all of its features.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 feature-item">
                <div class="feature-box-01 last-3 text-left mb-4">
                    <div class="feature-box-img"><img src="assets/images/icon/09.png" alt=""></div>
                    <div class="feature-box-info">
                        <h5 class="mb-2 mt-2">Ultimate customizability</h5>
                        <p>Choose the right color, layout, background pattern and background image with our theme
                            customizer module.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
Our FEATURES -->

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
                    <div class="item"><img class="img-fluid" src="assets/images/shortcode/img1.png" alt=""></div>
                    <div class="item"><img class="img-fluid" src="assets/images/shortcode/img2.png" alt=""></div>
                    <div class="item"><img class="img-fluid" src="assets/images/shortcode/img3.png" alt=""></div>
                    <div class="item"><img class="img-fluid" src="assets/images/shortcode/img4.png" alt=""></div>
                    <div class="item"><img class="img-fluid" src="assets/images/shortcode/img5.png" alt=""></div>
                    <div class="item"><img class="img-fluid" src="assets/images/shortcode/img6.png" alt=""></div>
                    <div class="item"><img class="img-fluid" src="assets/images/shortcode/img7.png" alt=""></div>
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
                    <div class="item"><img class="img-fluid lazy" src="assets/images/header/loading.jpg"
                                           data-original="assets/images/header/style1.jpg" alt=""></div>
                    <div class="item"><img class="img-fluid lazy" src="assets/images/header/loading.jpg"
                                           data-original="assets/images/header/style2.jpg" alt=""></div>
                    <div class="item"><img class="img-fluid lazy" src="assets/images/header/loading.jpg"
                                           data-original="assets/images/header/style3.jpg" alt=""></div>
                    <div class="item"><img class="img-fluid lazy" src="assets/images/header/loading.jpg"
                                           data-original="assets/images/header/style4.jpg" alt=""></div>
                    <div class="item"><img class="img-fluid lazy" src="assets/images/header/loading.jpg"
                                           data-original="assets/images/header/style5.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
Multi-Header -->

<!--=================================
HIGH QUALITY DOCUMENTATION -->
<section class="high-documentation sec-relative pt-5 pb-5 white-bg plr-6">
    <marquee class="animated-text o-hidden dark">DOCUMENTATION</marquee>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title text-left mt-6">
                    <h2 class="mb-3">HIGH QUALITY <br>
                        DOCUMENTATION</h2>
                    <p class="">Sephub Documentation has been carefully detailed and completed with super easy to
                        understand instructions giving you the full access to all of its features. Our Documentation
                        will give you an understanding of how Seohub is structured and guide you in performing common
                        functions.

                        Documentation also comes with a lot of code structure to help you. If the documentation is not
                        enough contact us on our support forum.</p>
                </div>
            </div>
            <div class="col-md-6 text-right">
                <img class="img-fluid" style="display:inline; width:550px" src="assets/images/mockup.png" alt="">
            </div>
        </div>
    </div>
</section>

<!--=================================
HIGH QUALITY DOCUMENTATION -->


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

<footer class="page-section-ptb footer bg fixed bg-overlay-black-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-widget text-center">
                    <h2 class="title text-white">Get Seohub Template Now!</h2>
                    <p class="text-white">All live demo pages are included in the download package <br>with Seohub
                        Documentation</p>
                    <a target="_blank" class="button purchase-btn"
                       href="https://themeforest.net/item/seohub-seo-marketing-social-media-multipurpose-html5-template/20234006/?ref=Potenzaglobalsolutions"><i
                                class="fa fa-cart-arrow-down" aria-hidden="true"></i> Purchase now</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--=================================
Footer-->

<!--=================================
back to top -->
<div class="back-to-top">
    <span><img src="assets/images/rocket.png" data-src="assets/images/rocket.png" data-hover="assets/images/rocket.gif"
               alt=""></span>
</div>
<!--=================================
back to top -->

<!--=================================
jquery -->

<!-- jquery  -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<!-- mega-menu -->
<script type="text/javascript" src="assets/js/mega-menu/mega_menu.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="assets/js/owl-carousel/owl.carousel.min.js"></script>

<!-- lazyload -->
<script type="text/javascript" src="assets/js/jquery.lazyload.min.js"></script>

<!-- Hover 3D -->
<script type="text/javascript" src="assets/js/jquery.hover3d.min.js"></script>

<!-- custom -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
        src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- custom -->
<!--  <script type="text/javascript" src="assets/js/custom.js"></script> -->


<script type="text/javascript">
    var tpj = jQuery;

    var revapi12;
    tpj(document).ready(function () {
        if (tpj("#rev_slider_12_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_12_1");
        } else {
            revapi12 = tpj("#rev_slider_12_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "assets/revolution/js",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    onHoverStop: "off",
                },
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: 1600,
                gridheight: 900,
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "enterpoint",
                    speed: 400,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    type: "mouse",
                },
                shadow: 0,
                spinner: "spinner0",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
    /*ready*/
</script>

<script type="text/javascript">
    $(function () {
        $("img.lazy").lazyload({
            event: "sporty"
        });
    });
    $(window).bind("load", function () {
        var timeout = setTimeout(function () {
            $("img.lazy").trigger("sporty")
        }, 100);
    });
</script>

<script>
    $(".feature-item").hover3d({
        selector: ".feature-box-01 ",
        sensitivity: 10,
        perspective: 1000,
        shine: true
    });
</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-49980377-11', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>