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


                    </div>
                </div>
            </div>
        </div>
</section>
