<section class="our-service no-gutter container-fluid mt-md-3 pb-md-4">
    <div class="row">
        <div class="col-lg-3 col-md-12  blue-bg mb-2">
            <div class="services-info h-100">
                <h3 class="text-white mb-3"><?php echo $service_tabs_v2['header']; ?></h3>
                <p class="text-white mb-2"><?php echo $service_tabs_v2['text1']; ?></p>
                <p class="text-white mb-4"><?php echo $service_tabs_v2['text2']; ?> </p>
                <a class="button border-white" href="<?php echo $service_tabs_v2['button_url']; ?>"><?php echo $service_tabs_v2['button_name']; ?></a>
            </div>
        </div>
        <div class="col-lg-9 col-md-12">
            <div class="row no-gutter bottom-service">
                <?php
                foreach ($_service_items_v2 as $key) { /*разматываем массив с табами из файла $_service_items_v2*/

                    echo '<div class="col-md-4 service-block mb-2">';
                    echo '<div class="feature-box-01 text-center gray-bg h-100">';
                        echo '<div class="feature-box-img mb-2">';
                            echo "<img class=\"img-fluid\" src=\"../images/icon/$key[img]\" alt=\"\">";
                       echo " </div>
                        <div class=\"feature-box-info mt-2\">
                            <h4 class=\"mb-2 mt-4\"> $key[header]</h4>";

                           echo " <p>$key[description]</p>
                        </div>
                        <div class=\"feature-box-button\">";
                            echo "<a class=\"button arrow\" href=\"$key[btn_url]\"> $service_tabs_v2[button_items_text]<i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>";


                }//закончили разматывать массив с табами из файла $_service_items_v2

                ?>

            </div>

        </div>
    </div>
</section>