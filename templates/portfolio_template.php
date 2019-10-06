<?php require_once 'content/portfolio-content.php' ?>
<?php require 'inc/site_settings_array.php' ?>
<section class="case-studies page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="case-studies-filters">
                    <div class="isotope-filters">
                        <button data-filter="" class="active">Все</button>

                        <?php foreach ($portfolio_inside as $filter => $name_part): ?>
                        <button data-filter=".<?php echo $filter ?>"><?php echo $name_part ?></button>
                        <?php endforeach; ?>

                    </div>
                    <div class=" row isotope popup-gallery ">
                        <?php foreach ($portfolio_items as $project_name => $items_projects): ?>
                        <div class="grid-item col-sm-12 col-md-4  <?php echo $items_projects['type']?>">
                            <div class="studies-entry">
                                <div class="entry-image clearfix mx-img-div ">

                                    <img class="img-fluid mx-img" src="<?php echo $items_projects['img_main_scroll']?>" alt="">
                                    <div class="entry-overlay">
                                        <a class="popup-img" href="<?php echo $items_projects['img_main_scroll']?>"> <span class="ti-zoom-in"></span></a>
                                    </div>
                                </div>
                                <div class="entry-detail text-left">
                                    <div class="entry-content mb-1">
                                        <a class="popup-img" href="<?php echo $items_projects['img_main_scroll']?>"><?php echo $items_projects['header']?></a>
                                        <p class="mt-1"><?php echo $items_projects['description']?></p>
                                    </div>
                                    <div class="entry-bottom mt-1 clearfix">
                                        <ul class="entry-tag list-style-none">
                                            <li> <noindex> <a href="<?php echo $items_projects['url']?>" target="_blank"><?php echo $items_projects['url']?></a></noindex></li>
                                        </ul>
                                        <div class="entry-like float-right">
                                            <a href="#"> <span class="ti-heart"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                       <!-- $portfolio_items = array(
                        'vecherya-soloha' => array(
                        'url_link_button' => '#',
                        'name_button' => 'Подробнее',
                        'img_main_scroll' => '../img/vecherya-soloha-550px.jpg',
                        ),-->

<!--                        <div class="grid-item projets ranking">-->
<!--                            <div class="studies-entry">-->
<!--                                <div class="entry-image clearfix">-->
<!--                                    <img class="img-fluid" src="images/case-studies/02.jpg" alt="">-->
<!--                                    <div class="entry-overlay">-->
<!--                                        <a class="popup-img" href="images/case-studies/02.jpg"> <span class="ti-zoom-in"></span></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="entry-detail text-left">-->
<!--                                    <div class="entry-content mb-1">-->
<!--                                        <a href="#">Free Techincal Audit</a>-->
<!--                                        <p class="mt-1">Established fact that It is a long a reader will be distracted by the readable content of a page when looking at its layout.</p>-->
<!--                                    </div>-->
<!--                                    <div class="entry-bottom mt-1 clearfix">-->
<!--                                        <ul class="entry-tag list-style-none">-->
<!--                                            <li><a href="#">SEO hub</a></li>-->
<!--                                        </ul>-->
<!--                                        <div class="entry-like float-right">-->
<!--                                            <a href="#"> <span class="ti-heart"></span></a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="grid-item marketing seo">-->
<!--                            <div class="studies-entry">-->
<!--                                <div class="entry-image clearfix">-->
<!--                                    <img class="img-fluid" src="images/case-studies/03.jpg" alt="">-->
<!--                                    <div class="entry-overlay">-->
<!--                                        <a class="popup-img" href="images/case-studies/03.jpg"> <span class="ti-zoom-in"></span></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="entry-detail text-left">-->
<!--                                    <div class="entry-content mb-1">-->
<!--                                        <a href="#">Online Marketing</a>-->
<!--                                        <p class="mt-1">Distracted by the readable It is a long established fact that a reader will be content of a page when looking at its layout.</p>-->
<!--                                    </div>-->
<!--                                    <div class="entry-bottom mt-1 clearfix">-->
<!--                                        <ul class="entry-tag list-style-none">-->
<!--                                            <li><a href="#">SEO hub</a></li>-->
<!--                                        </ul>-->
<!--                                        <div class="entry-like float-right">-->
<!--                                            <a href="#"> <span class="ti-heart"></span></a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="grid-item seo social">-->
<!--                            <div class="studies-entry">-->
<!--                                <div class="entry-image clearfix">-->
<!--                                    <img class="img-fluid" src="images/case-studies/04.jpg" alt="">-->
<!--                                    <div class="entry-overlay">-->
<!--                                        <a class="popup-img" href="images/case-studies/04.jpg"> <span class="ti-zoom-in"></span></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="entry-detail text-left">-->
<!--                                    <div class="entry-content mb-1">-->
<!--                                        <a href="#">Global Designing</a>-->
<!--                                        <p class="mt-1">Readable content of It is a long established fact that a reader will be distracted by the a page when looking at its layout.</p>-->
<!--                                    </div>-->
<!--                                    <div class="entry-bottom mt-1 clearfix">-->
<!--                                        <ul class="entry-tag list-style-none">-->
<!--                                            <li><a href="#">SEO hub</a></li>-->
<!--                                        </ul>-->
<!--                                        <div class="entry-like float-right">-->
<!--                                            <a href="#"> <span class="ti-heart"></span></a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="grid-item developing">-->
<!--                            <div class="studies-entry">-->
<!--                                <div class="entry-image clearfix">-->
<!--                                    <img class="img-fluid" src="images/case-studies/04.jpg" alt="">-->
<!--                                    <div class="entry-overlay">-->
<!--                                        <a class="popup-img" href="images/case-studies/04.jpg"> <span class="ti-zoom-in"></span></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="entry-detail text-left">-->
<!--                                    <div class="entry-content mb-1">-->
<!--                                        <a href="#">Разработка</a>-->
<!--                                        <p class="mt-1">Readable content of It is a long established fact that a reader will be distracted by the a page when looking at its layout.</p>-->
<!--                                    </div>-->
<!--                                    <div class="entry-bottom mt-1 clearfix">-->
<!--                                        <ul class="entry-tag list-style-none">-->
<!--                                            <li><a href="#">SEO hub</a></li>-->
<!--                                        </ul>-->
<!--                                        <div class="entry-like float-right">-->
<!--                                            <a href="#"> <span class="ti-heart"></span></a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="grid-item projets ranking">-->
<!--                            <div class="studies-entry">-->
<!--                                <div class="entry-image clearfix">-->
<!--                                    <img class="img-fluid" src="images/case-studies/05.jpg" alt="">-->
<!--                                    <div class="entry-overlay">-->
<!--                                        <a class="popup-img" href="images/case-studies/05.jpg"> <span class="ti-zoom-in"></span></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="entry-detail text-left">-->
<!--                                    <div class="entry-content mb-1">-->
<!--                                        <a href="#">Global Advertising</a>-->
<!--                                        <p class="mt-1">Dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>-->
<!--                                    </div>-->
<!--                                    <div class="entry-bottom mt-1 clearfix">-->
<!--                                        <ul class="entry-tag list-style-none">-->
<!--                                            <li><a href="#">SEO hub</a></li>-->
<!--                                        </ul>-->
<!--                                        <div class="entry-like float-right">-->
<!--                                            <a href="#"> <span class="ti-heart"></span></a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="grid-item marketing seo">-->
<!--                            <div class="studies-entry">-->
<!--                                <div class="entry-image clearfix">-->
<!--                                    <img class="img-fluid" src="images/case-studies/06.jpg" alt="">-->
<!--                                    <div class="entry-overlay">-->
<!--                                        <a class="popup-img" href="images/case-studies/06.jpg"> <span class="ti-zoom-in"></span></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="entry-detail text-left">-->
<!--                                    <div class="entry-content mb-1">-->
<!--                                        <a href="#">Global SEO</a>-->
<!--                                        <p class="mt-1">Eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ut labore et dolore magna aliqua.</p>-->
<!--                                    </div>-->
<!--                                    <div class="entry-bottom mt-1 clearfix">-->
<!--                                        <ul class="entry-tag list-style-none">-->
<!--                                            <li><a href="#">SEO hub</a></li>-->
<!--                                        </ul>-->
<!--                                        <div class="entry-like float-right">-->
<!--                                            <a href="#"> <span class="ti-heart"></span></a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="grid-item projets ranking">-->
<!--                            <div class="studies-entry">-->
<!--                                <div class="entry-image clearfix">-->
<!--                                    <img class="img-fluid" src="images/case-studies/07.jpg" alt="">-->
<!--                                    <div class="entry-overlay">-->
<!--                                        <a class="popup-img" href="images/case-studies/07.jpg"> <span class="ti-zoom-in"></span></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="entry-detail text-left">-->
<!--                                    <div class="entry-content mb-1">-->
<!--                                        <a href="#">Advertisement</a>-->
<!--                                        <p class="mt-1">Consectetur adipisicing Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
<!--                                    </div>-->
<!--                                    <div class="entry-bottom mt-1 clearfix">-->
<!--                                        <ul class="entry-tag list-style-none">-->
<!--                                            <li><a href="#">SEO hub</a></li>-->
<!--                                        </ul>-->
<!--                                        <div class="entry-like float-right">-->
<!--                                            <a href="#"> <span class="ti-heart"></span></a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="grid-item social ranking">-->
<!--                            <div class="studies-entry">-->
<!--                                <div class="entry-image clearfix">-->
<!--                                    <img class="img-fluid" src="images/case-studies/08.jpg" alt="">-->
<!--                                    <div class="entry-overlay">-->
<!--                                        <a class="popup-img" href="images/case-studies/08.jpg"> <span class="ti-zoom-in"></span></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="entry-detail text-left">-->
<!--                                    <div class="entry-content mb-1">-->
<!--                                        <a href="#">SCHEDULED POSTING</a>-->
<!--                                        <p class="mt-1">Eiusmod Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore et dolore magna aliqua.</p>-->
<!--                                    </div>-->
<!--                                    <div class="entry-bottom mt-1 clearfix">-->
<!--                                        <ul class="entry-tag list-style-none">-->
<!--                                            <li><a href="#">SEO hub</a></li>-->
<!--                                        </ul>-->
<!--                                        <div class="entry-like float-right">-->
<!--                                            <a href="#"> <span class="ti-heart"></span></a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="grid-item marketing projets last">-->
<!--                            <div class="studies-entry">-->
<!--                                <div class="entry-image clearfix">-->
<!--                                    <img class="img-fluid" src="images/case-studies/01.jpg" alt="">-->
<!--                                    <div class="entry-overlay">-->
<!--                                        <a class="popup-img" href="images/case-studies/01.jpg"> <span class="ti-zoom-in"></span></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="entry-detail text-left">-->
<!--                                    <div class="entry-content mb-1">-->
<!--                                        <a href="#">ONLINE SUPPORT</a>-->
<!--                                        <p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
<!--                                    </div>-->
<!--                                    <div class="entry-bottom mt-1 clearfix">-->
<!--                                        <ul class="entry-tag list-style-none">-->
<!--                                            <li><a href="#">SEO hub</a></li>-->
<!--                                        </ul>-->
<!--                                        <div class="entry-like float-right">-->
<!--                                            <a href="#"> <span class="ti-heart"></span></a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
</section>
