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
                            foreach ($main_menu as $key => $value) {
                                echo " <li class=\"active\"><a href=\"javascript:void(0)\"> $key <i class=\"fa fa-angle-down fa-indicator\"></i></a></li> ";
                                    echo "<ul class=\"drop-down-multilevel\">";
                                         if (is_array($main_menu[$key])) {
                                                foreach ($main_menu[$key] as $key_in => $value_in) {
                                                    echo "<li><a href=\"$value_in\"> $key_in </a></li >";
                                                }
                                            }
                                    echo "</ul>";
                            };

                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </nav>
</div>    <!-- menu end -->