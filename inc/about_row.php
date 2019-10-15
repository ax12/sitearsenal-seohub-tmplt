<section class="high-documentation sec-relative pt-5 pb-5 gray-bg plr-6">
    <?php getIncludingFileName ('/inc/about_row.php');?>
    <marquee class="animated-text o-hidden dark">About Us</marquee>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-right">
                <img class="img-fluid" style="display:inline; width:550px" src="../assets/images/mockup.png" alt="">
            </div>
            <div class="col-md-6">
                <div class="section-title text-left mt-6">
                    <h2 class=""> <?php echo $about_row['header1']; ?>  <br>
                        <?php echo $about_row['header2']; ?></h2>
                    <p class=""><?php echo $about_row['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>