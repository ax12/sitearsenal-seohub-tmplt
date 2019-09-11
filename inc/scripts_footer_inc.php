<!--=================================
jquery -->

<!-- jquery  -->
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/popper.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

<!-- mega-menu -->
<script type="text/javascript" src="../assets/js/mega-menu/mega_menu.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="../assets/js/owl-carousel/owl.carousel.min.js"></script>

<!-- lazyload -->
<script type="text/javascript" src="../assets/js/jquery.lazyload.min.js"></script>

<!-- Hover 3D -->
<script type="text/javascript" src="../assets/js/jquery.hover3d.min.js"></script>

<!-- custom -->
<script type="text/javascript" src="../assets/js/custom.js"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="../assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="../assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="../assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="../assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="../assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
        src="../assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="../assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="../assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="../assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="../assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="../assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!--awesome 5 ver-->
<script src="https://kit.fontawesome.com/eee62eb099.js"></script>
<!-- custom -->
<!--  <script type="text/javascript" src="assets/js/custom.js"></script> -->


<script type="text/javascript">
    var tpj = jQuery;

    var revapi12;
    tpj(document).ready(function () {
        if (tpj("#rev_slider_12_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_12_1");
        } else {
            revapi12 = tpj("#rev_slider_12_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "assets/revolution/js",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    onHoverStop: "off",
                },
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: 1600,
                gridheight: 900,
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "enterpoint",
                    speed: 400,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    type: "mouse",
                },
                shadow: 0,
                spinner: "spinner0",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
    /*ready*/
</script>

<script type="text/javascript">
    $(function () {
        $("img.lazy").lazyload({
            event: "sporty"
        });
    });
    $(window).bind("load", function () {
        var timeout = setTimeout(function () {
            $("img.lazy").trigger("sporty")
        }, 100);
    });
</script>

<script>
    $(".feature-item").hover3d({
        selector: ".feature-box-01 ",
        sensitivity: 10,
        perspective: 1000,
        shine: true
    });
</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-49980377-11', 'auto');
    ga('send', 'pageview');

</script>