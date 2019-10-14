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
<a href="http://www.designnominees.com/themes/seohub-multipurpose-html5-template" title="Design Nominees"
   style="width:70px;height:130px;position:fixed;top:100px;right:0px;z-index:99999;text-indent:-9999px;background: url(http://www.designnominees.com/ribbons/designnominees-ribbon-totd-white-right.png) no-repeat;"
   target="_blank">Design Nominees</a>

<a href="http://www.csslight.com/website/20358/SEOhub-Multipurpose-HTML5-Template" title="CSS Light"
   style="width:84px;height:29px;position:fixed;top:300px;right:0px;z-index:99999;text-indent:-9999px;background: url(http://www.csslight.com/ribbons/small-csslight-ribbon-right.png) no-repeat;"
   target="_blank">CSS Light Web Gallery</a>

<a href=""
   style="background: url(http://webguruawards.com/awards/GOTD/img_guru_of_the_day_gray.png) no-repeat scroll 0 0 rgba(0, 0, 0, 0);width:75px;height:111px;position:fixed;top:370px;right:5px;z-index:99999;"
   target="_blank"></a>

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