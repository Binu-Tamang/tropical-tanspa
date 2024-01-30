<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="images/png" href="assets/img/tt-logo.png">
    <title>Tropical Tanspa </title>
</head>

<body>
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner slider html  -->
    <section class="main-banner">
        <div class="over-lay">

        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/banner-4.jpg" class="d-block w-100" alt="banner photo">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/tropicaltanspa_04.jpg" class="d-block w-100" alt="banner photo">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/tropicaltanspa_08.jpg" class="d-block w-100" alt="banner photo">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/tropicaltanspa_10.jpg" class="d-block w-100" alt="banner photo">
                </div>
            </div>
            <div class="banner-context">
                <span>Welcome To Tropical TanSpa</span>
                <p>
                    Tropical Tanspa, LLC. brings 30+ years of expertise to the tanning industry. Our family-owned
                    business offers 9 cutting-edge UV tanning units, including stand-up options. Experience friendly
                    service, the latest technology, and a range of tanning solutions with us.</p>
                <!-- <div class="banner-btn">
                    <a class="web-a" href="#">Learn More</a>
                </div> -->
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- welcome part html -->
    <section class="main-wlcm">
        <div class="container">
            <div class="wlcm-heading">
                <span class="highlight">About</span>
                <h1 class="page-h">Welcome To Tropical TanSpa</h1>
                <p>Tropical Tanspa, LLC. has over 30 years of experience in the tanning industry. We are a family owned
                    business with friendly and knowledgeable staff eager to serve you.</p>
            </div>

            <div class="wlcm-mid-part">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="mid-box">
                                <img src="assets/img/spa-1.png" alt="spa-icon">
                                <strong>Body Relief</strong>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mid-box">
                                <img src="assets/img/spa-2.png" alt="spa-icon">
                                <strong>Family Business</strong>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-6">
                            <div class="mid-box">
                                <img src="assets/img/spa-3.png" alt="spa-icon">
                                <strong>Free Towel</strong>
                            </div>
                        </div> -->
                        <div class="col-lg-3 col-6">
                            <div class="mid-box">
                                <img src="assets/img/spa-4.png" alt="spa-icon">
                                <strong>Friendly Staff</strong>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mid-box">
                                <img src="assets/img/spa-5.png" alt="spa-icon">
                                <strong>Tanning Accessories</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-package">
        <div class="about-web">
            <div class="container">
                <div class="abt-pck-up-content">
                    <div class="row">
                        <div class="col-md-6 order-2 order-md-1">
                            <div class="abt-why-us">
                                <span class="highlight">Tropical TanSpa</span>
                                <h2 class="page-h">Why Choose Us</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsa at ex
                                    explicabo, quam rem necessitatibus sint laudantium cum a voluptates, expedita,
                                    placeat repudiandae quo provident quod odio sunt voluptatibus?</p>
                                <div class="web-btn text-left">
                                    <a class="web-a" href="gallery.php">View More +</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 order-1 order-md-2">
                            <div class="abt-detail-img">
                                <div class="abt-package abt-img data-container">
                                    <div class="btn-img">
                                        <img src="assets/img/tropicaltanspa_11.jpg" alt="happy client">
                                    </div>
                                </div>
                                <div class="abt-blnk-box"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="abt-pck-dwn-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="abt-dwm-img abt-img data-container">
                                <div class="btn-img">
                                    <img src="assets/img/tropicaltanspa_01.jpg" alt="tanning packages">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="abt-web-details">
                                <span class="highlight">Packages</span>
                                <h2 class="page-h">Our Tanning Packages</h2>
                                
                                <div class="tanspa-pg">
                                    <ul class="time-ul">
                                        <li><i class="fa-regular fa-clock"></i> 75 Minutes</li>
                                        <li><i class="fa-regular fa-clock"></i> 100 Minutes</li>
                                        <li><i class="fa-regular fa-clock"></i> 200 Minutes</li>
                                    </ul>
                                    <ul class="time-ul">
                                        <li><i class="fa-regular fa-clock"></i> 300 Minutes</li>
                                        <li><i class="fa-regular fa-clock"></i> 400 Minutes</li>
                                        <li><i class="fa-regular fa-clock"></i> 500 Minutes</li>
                                    </ul>
                                </div>
                                <div class="web-btn text-left">
                                    <a class="web-a" href="gallery.php">View More +</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====gallery part html========= -->
    <!-- isotope project -->
    <section class="isotope-project container-md-xxl">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s">
            <p class=" mb-2 highlight">Our Gallery</p>
            <h3 class="display-5 mb-2 page-h">Photo Of The Day</h3>
        </div>
        <div class="portfolio-menu">
            <ul class="isotope-ul">
                <li class="active isotope-li" data-filter="*">All</li>
                <li data-filter=".one-iso">One Title</li>
                <li data-filter=".two-iso">Two Title</li>
                <li data-filter=".three-iso">Three Title</li>
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
                    <div class="item three-iso">
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
                    <div class="item two-iso">
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
        <div class="web-btn text-center">
            <a class="web-a" href="gallery.php">View More +</a>
        </div>
    </section>
    <!-- isotope project -->

    <!-- =====section banner html -->
    <section class="banner-bg">
        <div class="container">
            <span>Get Up To 50% Off On Our Tanning Packages </span>
        </div>
    </section>

    <!-- testimonial plan -->
    <section class="testimonial-plan">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-left">
                        <span class="highlight">Testimonial</span>
                        <h4 class="page-h">What People Say About Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et
                            dolore magna</p>
                        <div class="web-a-wrap">
                            <a class="web-a"
                                href="https://www.google.com/search?q=tropical+tanspa&oq=tropical+tanspa&gs_lcrp=EgZjaHJvbWUqBggAEEUYOzIGCAAQRRg7MgcIARAAGIAEMgYIAhBFGEAyBggDEEUYPDIGCAQQRRg80gEINTkwM2owajSoAgCwAgA&sourceid=chrome&ie=UTF-8#lrd=0x87f009b683dac989:0x624e97c093048507,1,,,,">View
                                All Review</a>
                        </div>
                        <div class="web-a-wrap">
                            <a class="web-a"
                                href="https://www.google.com/search?q=tropical+tanspa&oq=tropical+tanspa&gs_lcrp=EgZjaHJvbWUqBggAEEUYOzIGCAAQRRg7MgcIARAAGIAEMgYIAhBFGEAyBggDEEUYPDIGCAQQRRg80gEINTkwM2owajSoAgCwAgA&sourceid=chrome&ie=UTF-8#lrd=0x87f009b683dac989:0x624e97c093048507,3,,,,">Write
                                A Review</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="testimonial-box-wrap">
                        <div class="owl-carousel owl-theme testimonial-owl">
                            <div class="item">
                                <div class="testimonial-boxes">
                                    <div class="user-id">
                                        <i class="fa-solid fa-user"></i>
                                        <strong>Megan Baldwin</strong>
                                    </div>
                                    <p>I've always loved going here. Support small/local businesses! It's always clean,
                                        and I've never had any issues! Mike and his mom have kept up with this amazing
                                        tanning destination ❤️</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-boxes">
                                    <div class="user-id">
                                        <i class="fa-solid fa-user"></i>
                                        <strong>Music guy</strong>
                                    </div>
                                    <p>Nice local tanning spot. Small family owned establishment with great customer
                                        service. Lots of options from old school laydown beds to nice stand ups. Not
                                        usually too busy, easy getting in and out.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-boxes">
                                    <div class="user-id">
                                        <i class="fa-solid fa-user"></i>
                                        <strong>Chris Borglum</strong>
                                    </div>
                                    <p>Appointments are necessary with Covid restrictions. Masks are not required any
                                        more. Same great tanning options and friendly service.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-boxes">
                                    <div class="user-id">
                                        <i class="fa-solid fa-user"></i>
                                        <strong>Valerie Ritter</strong>
                                    </div>
                                    <p>Nice guy running the show..very clean! Always smells nice when you walk in the
                                        front door. Beds are always clean.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-boxes">
                                    <div class="user-id">
                                        <i class="fa-solid fa-user"></i>
                                        <strong>pattie wymore</strong>
                                    </div>
                                    <p>Really clean, good atmosphere and friendly. Really like the discount Tuesdays.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- companylocation -->
    <section class="main-map contact-liveview">
        <div class="head-box">
            <span class=" mb-2 highlight"> Location</span>
            <h5 class="display-5 mb-4 page-h">Our Location</h5>
        </div>
        <div class="row">
            <div class="col-md-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m0!4v1502996662336!6m8!1m7!1sCAoSLEFGMVFpcE5WOE5QZjJFQnBSemh3a0UxcE9RZjBpVW51U2dHWkJQRmhCaThF!2m2!1d42.72479882657546!2d-92.48337417840958!3f271.68576733952756!4f-4.0819632986794545!5f1.9475567856862317"
                    frameborder="0" style="border:0" allowfullscreen></iframe>
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
        if (navItems.length >= 1) {
            navItems[0].classList.add("active");
        }</script>
</body>

</html>