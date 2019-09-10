<?php //require_once 'topbar.php'?>
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
                            if ($main_menu) {
                                foreach ($main_menu );
                            }
                            ?>

                            <!-- active class -->
                            <li class="active"><a href="javascript:void(0)"> Home <i
                                        class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel">
                                    <li><a href="../index-1.html">home 01 </a></li>
                                    <li><a href="../index-2.html">home 02</a></li>
                                    <li><a href="../index-3.html">home 03</a></li>
                                    <li><a href="../index-4.html">home 04</a></li>
                                    <li><a href="../index-5.html">home 05</a></li>
                                </ul>
                            </li>
                            <!-- active class -->
                            <li><a href="javascript:void(0)"> services <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel">
                                    <li><a href="../service-list-01.html">Service list 01 </a></li>
                                    <li><a href="../service-list-02.html">Service list 02</a></li>
                                    <li><a href="../analytics-services.html">Analytics Services</a></li>
                                    <li><a href="../off-page-optimization.html">Off Page Optimization</a></li>
                                    <li><a href="../boost-your-conversion-rate.html">Boost Your Conversion Rate</a>
                                    </li>
                                    <li><a href="../search-engine-optimize.html">Search Engine Optimize</a></li>
                                    <li><a href="../social-media-marketing.html">Social Media Marketing</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Pages <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <div class="drop-down menu-bg grid-col-12">
                                    <!--grid row-->
                                    <div class="grid-row">
                                        <!--grid column 3-->
                                        <div class="grid-col-3">
                                            <h4>pages</h4>
                                            <ul>
                                                <li><a href="../about-01.html">About us 01 </a></li>
                                                <li><a href="../about-02.html">About us 02</a></li>
                                                <li><a href="../faq.html">faq</a></li>
                                                <li><a href="../login.html">login</a></li>
                                                <li><a href="../register.html">register</a></li>
                                                <li><a href="../our-clients.html">our clients</a></li>
                                            </ul>
                                        </div>
                                        <!--grid column 3-->
                                        <div class="grid-col-3">
                                            <h4>pages</h4>
                                            <ul>
                                                <li><a href="../team.html">team</a></li>
                                                <li><a href="../team-single.html">team single</a></li>
                                                <li><a href="../error-404.html">error 404</a></li>
                                                <li><a href="../contact-single-office.html">contact single offices</a>
                                                </li>
                                                <li><a href="../contact-multiple-offices.html">contact multiple
                                                        offices</a></li>
                                                <li><a href="../free-seo-analysis.html">free-seo-analysis</a></li>
                                            </ul>
                                        </div>
                                        <!--grid column 3-->
                                        <div class="grid-col-3">
                                            <h4>elements</h4>
                                            <ul>
                                                <li><a href="../under-constraction.html">Under constraction</a></li>
                                                <li><a href="../accordion.html">Accordion</a></li>
                                                <li><a href="../typography.html">Typography</a></li>
                                                <li><a href="../buttons.html">Buttons</a></li>
                                                <li><a href="../pricing-tables.html">Pricing Tables</a></li>
                                                <li><a href="../tab.html">Tab</a></li>
                                            </ul>
                                        </div>
                                        <!--grid column 3-->
                                        <div class="grid-col-3">
                                            <h4>page title</h4>
                                            <ul>
                                                <li><a href="../page-title-image.html">page title image</a></li>
                                                <li><a href="../page-title-dark-image.html">page title dark image</a>
                                                </li>
                                                <li><a href="../page-title-dark.html">page title dark</a></li>
                                                <li><a href="../page-title-light.html">page title light</a></li>
                                                <li><a href="../page-title-fixed.html">page title fixed</a></li>
                                                <li><a href="../page-title-parallax.html">page title parallax</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)">blog <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel">
                                    <li><a href="../blog-left-sidebar.html">Blog left sidebar</a></li>
                                    <li><a href="../blog-right-sidebar.html">Blog right sidebar</a></li>
                                    <li><a href="../blog-fullwidth.html">Blog fullwidth</a></li>
                                    <li><a href="../blog-masonry-2-columns.html">Blog masonry 2 columns</a></li>
                                    <li><a href="../blog-masonry-3-columns.html">Blog masonry 3 columns</a></li>
                                    <li><a href="../blog-masonry-4-columns.html">Blog masonry 4 columns</a></li>
                                    <li><a href="javascript:void(0)">Blog single <i
                                                class="fa fa-angle-right fa-indicator"></i></a>
                                        <!-- drop down second level -->
                                        <ul class="drop-down-multilevel">
                                            <li><a href="../blog-single-image-post.html">blog single image post</a>
                                            </li>
                                            <li><a href="../blog-single-blockquote-post.html">blog single blockquote
                                                    post</a></li>
                                            <li><a href="../blog-single-video-post.html">blog single video post</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Case Studies <i
                                        class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel">
                                    <li><a href="../case-studies-2-columns.html">case studies 2 columns</a></li>
                                    <li><a href="../case-studies-3-columns.html">case studies 3 columns</a></li>
                                    <li><a href="../case-studies-4-columns.html">case studies 4 columns</a></li>
                                    <li><a href="../case-studies-filter.html">case studies filter</a></li>
                                    <li><a href="../case-studies-full-screen.html">case studies full screen</a></li>
                                    <li><a href="../case-studies-single.html">case studies single</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)"> Shop <i class="fa fa-angle-down fa-indicator"></i>
                                </a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel">
                                    <li><a href="../shop.html">Shop</a></li>
                                    <li><a href="../shop-single.html">Shop Single</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)"> Contact us <i
                                        class="fa fa-angle-down fa-indicator"></i> </a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel">
                                    <li><a href="../contact-single-office.html">contact single office </a></li>
                                    <li><a href="../contact-multiple-offices.html">contact multiple offices</a></li>
                                    <li><a href="../free-seo-analysis.html">free seo analysis</a></li>
                                </ul>
                            </li>
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