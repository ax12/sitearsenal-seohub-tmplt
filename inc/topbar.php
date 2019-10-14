<div class="topbar">
   <?php  if ($GLOBALS ['$mxDebugAllUsers'] || $GLOBALS['$devMess'])
       echo '<div class="debugallusers position-absolute"> Подключен (inc/topbar.php) -></div>';
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="topbar-left text-center text-md-left lang-toggle">
                    <ul class="list-inline text-left ">
                        <li><i class="fas fa-globe"></i> <a href="/en/">EN </a></li>
                        <li><a href="/">RU</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-4 col-12 float-right d-flex ">
                <div class="topbar-left text-left text-md-left text-light pl-4 ">
                    <div class="float-left mr-3 mx-font-marker"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="float-left mx-lineheight-top-bar"><a class="text-light"
                                                                     href="/"><?php echo $main_contacts['ekb']['city']; ?></a>
                        <br> <span
                                class="mx-adress-topbar white"><?php echo $main_contacts['ekb']['address'] . ', тел.' . $main_contacts['ekb']['phone']; ?></span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 float-right d-flex">
                <div class="topbar-left text-left text-md-left text-light pl-4 ">

                    <div class="float-left mr-3 mx-font-marker"><i class="fas fa-map-marker-alt"></i></div>
                    <div class=" float-left mx-lineheight-top-bar"><a class="text-light"
                                                                      href="/krasnodar/"><?php echo $main_contacts['krasnodar']['city']; ?></a><br>
                        <span class="mx-adress-topbar white"><?php echo $main_contacts['krasnodar']['address'] . ', тел.' . $main_contacts['krasnodar']['phone']; ?></span>
                    </div>
                </div>



            </div>


        </div>
    </div>
</div>