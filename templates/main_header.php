<?php require '/inc/site_settings_array.php';
if ( $GLOBALS['$devMess']) echo '<div class="debug-msg position-relative">подключен(templates/main_header.php)</div>';
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<?php require_once ROOT . '/inc/style_scripts_header_inc.php'; // connect css files?>
<body>
<!--=================================
    loading -->
<?php require_once 'inc/topbar.php';?>
<?php //отключаем или подключаем загрузчик (ракету) настройка в site_settings_array.php
if ($loader) {
require_once 'inc/loader.php';};?>

<!--=================================
    loading -->
<!--=================================
    header -->

    <!--=================================
        mega menu -->
   <?php require_once 'inc/megamenu_inc.php' //including horizontal main megamenu;?>


<!--=================================
header -->



<!--=================================
slider -->
<?php require_once 'inc/main_slider.php' //главный слайдер ;?>
<!--=================================
slider -->