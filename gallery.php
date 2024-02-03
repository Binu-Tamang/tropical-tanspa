<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="images/png" href="assets/img/tt-logo.png">
    <title>Tropical TanSpa | Our Gallery</title>
</head>

<body>
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and header page  -->
    <?php $page_name = 'Our Gallery' ?>
    <?php include('inc/banner-web.php') ?>
    <!-- banner and header page -->

    <!-- =======Our Gallery section ====== -->
    <section class="isotope-project container-md-xxl gallery-box">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s">
            <p class=" mb-2 highlight">Our Gallery</p>
            <h1 class="display-5 mb-2 page-h">Photo Of The Day</h1>
        </div>
        <div class="portfolio-menu">
            <ul class="isotope-ul">
                <li class="active isotope-li" data-filter="*">All</li>
                <li data-filter=".one-iso">Tanning Beds</li>
                <li data-filter=".two-iso">UV tanning Units</li>
                <li data-filter=".three-iso">Our SPA Store</li>
            </ul>
        </div>

        <div class="portfolio-item container" id="open-popup">
            <div class="row">
                <div class="col-md-4 col-sm-4 w-content">
                    <div class="item one-iso">
                        <a href="assets/img/tropicaltanspa_01.jpg" class="image-link-js test-popup-link" id="my-popup"
                            data-lightbox="pop-images" title="pop images">
                            <img class="pop-images aos-init aos-animate" src="assets/img/tropicaltanspa_01.jpg" alt=""
                                width="100" height="100"></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 w-content">
                    <div class="item two-iso">
                        <a href="assets/img/tropicaltanspa_03.jpg" class="image-link-js test-popup-link" id="my-popup"
                            data-lightbox="pop-images" title="pop images">
                            <img class="pop-images aos-init aos-animate" src="assets/img/tropicaltanspa_03.jpg" alt=""
                                width="100" height="100"></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 w-content">
                    <div class="item two-iso">
                        <a href="assets/img/tropicaltanspa_05.jpg" class="image-link-js test-popup-link" id="my-popup"
                            data-lightbox="pop-images" title="pop images">
                            <img class="pop-images aos-init aos-animate" src="assets/img/tropicaltanspa_05.jpg" alt=""
                                width="100" height="100"></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 w-content">
                    <div class="item one-iso">
                        <a href="assets/img/tropicaltanspa_07.jpg" class="image-link-js test-popup-link" id="my-popup"
                            data-lightbox="pop-images" title="pop images">
                            <img class="pop-images aos-init aos-animate" src="assets/img/tropicaltanspa_07.jpg" alt=""
                                width="100" height="100"></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 w-content">
                    <div class="item three-iso">
                        <a href="assets/img/tropicaltanspa_09.jpg" class="image-link-js test-popup-link" id="my-popup"
                            data-lightbox="pop-images" title="pop images">
                            <img class="pop-images aos-init aos-animate" src="assets/img/tropicaltanspa_09.jpg" alt=""
                                width="100" height="100"></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 w-content">
                    <div class="item three-iso">
                        <a href="assets/img/tropicaltanspa_11.jpg" class="image-link-js test-popup-link" id="my-popup"
                            data-lightbox="pop-images" title="pop images">
                            <img class="pop-images aos-init aos-animate" src="assets/img/tropicaltanspa_11.jpg" alt=""
                                width="100" height="100"></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 w-content">
                    <div class="item one-iso">
                        <a href="assets/img/tropicaltanspa_02.jpg" class="image-link-js test-popup-link" id="my-popup"
                            data-lightbox="pop-images" title="pop images">
                            <img class="pop-images aos-init aos-animate" src="assets/img/tropicaltanspa_02.jpg" alt=""
                                width="100" height="100"></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 w-content">
                    <div class="item one-iso">
                        <a href="assets/img/tropicaltanspa_04.jpg" class="image-link-js test-popup-link" id="my-popup"
                            data-lightbox="pop-images" title="pop images">
                            <img class="pop-images aos-init aos-animate" src="assets/img/tropicaltanspa_04.jpg" alt=""
                                width="100" height="100"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------------------------footer starts--------------------- -->
    <?php

    include('inc/footer.php');
    include('inc/js.php')
        ?>

    <script>const navItems = document.querySelectorAll('.navbar-nav  > li a');
        if (navItems.length >= 4) {
            navItems[3].classList.add("active");
        }</script>
</body>

</html>