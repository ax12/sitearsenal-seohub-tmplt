<section class="white-bg page-section-ptb pb-6 plr-6 sec-relative core-fearture">
    <marquee class="animated-text o-hidden dark"><?php echo $services_arr[background_text]; ?></marquee>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <span><?php echo $services_arr[first_header]; ?></span>
                    <h2 class="text-center"><?php echo $services_arr[second_header]; ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($services_items as $key) { //массив с данными для табов, находится в файле site_settings_array.php
                echo " <div class=\"col-lg-4 col-md-6 feature-item\">
                <div class=\"feature-box-01 text-left mb-4\">";
                echo "<div class=\"feature-box-img\"><img src=\"../assets/images/icon/$key[img]\" alt=\"\"></div>
                    <div class=\"feature-box-info\">";
                echo "  <h5 class=\"mb-2 mt-2\">  $key[header]  </h5>
                        <p>$key[description]</p>
                      </div>
                </div>
            </div> ";
            } //закончили разматывать массив с табами из файла services_tabs_inc.php
            ?>


        </div>
    </div>
</section>