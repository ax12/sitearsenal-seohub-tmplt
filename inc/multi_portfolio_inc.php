<section class="demo-sec light-blue-bg page-section-ptb plr-6 sec-relative" id="scroll-buttons">
    <marquee class="animated-text o-hidden white"><?php echo $portfolio_arr[second_header];?></marquee>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title text-center">
                    <span><?php echo $portfolio_arr[first_header]?> </span>
                    <h2 class="mb-3"><?php echo $portfolio_arr[second_header]?></h2>
                </div>
            </div>
        </div>
        <div class="portfolio">
            <div class="row">
                <?php //разматываем массив с проектами из файла site_settings_array.php
                foreach ($portfolio_items as $key) {
                    echo " <div class=\"col-md-4\"> <div class=\"item demo-1\">";
                    echo "<a target=\"_blank\" href=\"$key[url_link_button]\"> <div class=\"item-box\"> <div class=\"item-inside\">";
                    echo " <span class=\"demo-img\"
                                          style=\"background-image: url($key[img_main_scroll]);\"></span>  <img class=\"lazy\" src=\"../assets/images/demo/loading.jpg\" data-original=\"../img/vecherya-soloha-400px.jpg\" alt=\"\">";
                    echo " </div></div></a>";
                    echo " <div class=\"demo-box\"><a href=\"$key[url_link_button]\">  $key[name_button] </a></div>
                    </div>
                </div>";
                } //закончили разматывать массив с проектами из файла site_settings_array.php
                ?>




                            <div class="col-12 d-flex justify-content-center">
                                <a class="button border-bule text-center" href="#">смотреть еще</a>
                            </div>



            </div> <!--end row-->
        </div>

    </div>
</section>