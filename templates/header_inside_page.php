
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<?php require_once 'inc/style_scripts_header_inc.php' // connect css files?>
<link rel="stylesheet" type="text/css" href="css/magnific-popup/magnific-popup.css" />


<body>
<!--=================================
  loading -->

<?php if ($loader) {
require_once 'inc/loader.php';};?>

<!--=================================
  loading -->

<!--=================================
    header -->
<header id="header" class="default">
    <?php require_once 'inc/topbar.php';?>

    <!--=================================
        mega menu -->

    <?php require_once 'inc/megamenu_inc.php'; ?>
<!--=================================
header -->


<!--=================================
intro-title -->
<section class="intro-title blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="intro-content">
                    <div class="intro-name">
                        <?php
                        $cur_url = trim($_SERVER['REQUEST_URI'], '/');
                        foreach ($main_menu as $key => $value) {
                            if (!is_array($value) and ($value == $cur_url)) {
                              echo "<h3 class=\"text-white\">  $key </h3>";
                              echo  " <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"/\">Главная</a></li>";
                            echo "<li class=\"breadcrumb-item active\">  $key </li> </ul>";
                            }

                        }
                        ?>


                    </div>
                    <div class="intro-img">
                        <img class="img-fluid" src=" <?php if ($img_header_inside){echo "images/breadcrumb/01.png";}?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
intro-title -->



