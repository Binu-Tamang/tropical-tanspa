<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="images/png" href="">
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
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2 col-6">
                            <div class="mid-box">
                                <img src="assets/img/spa-1.png" alt="spa-icon">
                                <strong>Body Relief</strong>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="mid-box">
                                <img src="assets/img/spa-2.png" alt="spa-icon">
                                <strong>Mind Refreshment</strong>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="mid-box">
                                <img src="assets/img/spa-3.png" alt="spa-icon">
                                <strong>Free Towel</strong>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="mid-box">
                                <img src="assets/img/spa-4.png" alt="spa-icon">
                                <strong>Spray Tanning</strong>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="mid-box">
                                <img src="assets/img/spa-5.png" alt="spa-icon">
                                <strong>Tanning Accessories</strong>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>

                    </div>
                </div>
            </div>

            <div class="end-wlcm-wrap">
                <div class="row">
                    <div class="col-md-4">
                        <div class="end-wlcm-box">
                            <div class="end-wlcm-pic">
                                <img src="assets/img/tropicaltanspa_05.jpg" alt="welcome photo">
                            </div>
                            <div class="end-wlcm-text">
                                <span class="small-h">Aqua Massage</span>
                                <p>Massage is done fully clothed and dry!</p>
                                <div class="tanspa-pg">
                                    <ul class="time-ul">
                                        <li><i class="fa-regular fa-clock"></i> 10 Minutes</li>
                                        <li><i class="fa-regular fa-clock"></i> 20 Minutes</li>
                                        <li><i class="fa-regular fa-clock"></i> 30 Minutes</li>
                                    </ul>
                                    <ul class="time-ul">
                                        <li><i class="fa-regular fa-clock"></i> 40 Minutes</li>
                                        <li><i class="fa-regular fa-clock"></i> 60 Minutes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="end-wlcm-box">
                            <div class="end-wlcm-pic">
                                <img src="assets/img/tropicaltanspa_11.jpg" alt="welcome photo">
                            </div>
                            <div class="end-wlcm-text">
                                <span class="small-h">Tropical TanSpa Hours</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <ul class="time-ul">
                                    <li><i class="fa-regular fa-clock"></i> MON - TUE : 09:00 AM - 19:00
                                        PM</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="end-wlcm-box">
                            <div class="end-wlcm-pic">
                                <img src="assets/img/tropicaltanspa_07.jpg" alt="welcome photo">
                            </div>
                            <div class="end-wlcm-text">
                                <span class="small-h">Tannning Packages</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="tanspa-pg">
                                    <ul class="time-ul">
                                        <li><i class="fa-regular fa-clock"></i> 70 Minutes</li>
                                        <li><i class="fa-regular fa-clock"></i> 100 Minutes</li>
                                        <li><i class="fa-regular fa-clock"></i> 200 Minutes</li>
                                    </ul>
                                    <ul class="time-ul">
                                        <li><i class="fa-regular fa-clock"></i> 300 Minutes</li>
                                        <li><i class="fa-regular fa-clock"></i> 400 Minutes</li>
                                        <li><i class="fa-regular fa-clock"></i> 500 Minutes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="web-btn text-center">
                <a class="web-a" href="gallery.php">View More +</a>
            </div>
        </div>
    </section>

    <!--=============== services section html========== -->
    <section class="services-part">
        <div class="container">
            <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s">
                <p class=" mb-2 highlight">Our Services</p>
                <h1 class=" mb-2 page-h">Services We Provides</h1>
            </div>
            <div class="nav-serv">
                <div class="row">
                    <div class="col-md-4">
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">What We Do
                                </button>
                            <button class="tablinks" onclick="openCity(event, 'Paris')">Tropical Tanning</button>
                            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tanning Enhancements</button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div id="London" class="tabcontent">
                            <div class="wrap-serv">
                                <div class="tab-img">
                                    <img src="assets/img/tropicaltanspa_06.jpg" alt="services img">
                                </div>
                                <div class="tab-text">
                                    <h3 class="small-h">What We Do </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore molestias
                                        fugiat sit veritatis nostrum modi aliquid repudiandae harum incidunt doloremque
                                        ut soluta vel iste, temporibus odio voluptatum ratione nam earum.</p>
                                    <br>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima deleniti, quidem
                                        neque consequuntur est culpa sed. Ratione veniam beatae perferendis aperiam!
                                        Iure magni impedit excepturi autem perspiciatis omnis quisquam aut.</p>
                                </div>
                            </div>
                        </div>

                        <div id="Paris" class="tabcontent">
                            <div class="wrap-serv">
                                <div class="tab-img">
                                    <img src="assets/img/tropicaltanspa_10.jpg" alt="services img">
                                </div>
                                <div class="tab-text">
                                    <h3 class="small-h">Tropical Tanning</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error praesentium, odio
                                        ut quia corrupti delectus cupiditate molestiae laboriosam facere eveniet cumque
                                        nihil modi. Fugiat quidem mollitia dolorum cum omnis nobis!</p>
                                </div>
                            </div>
                        </div>

                        <div id="Tokyo" class="tabcontent">
                            <div class="wrap-serv">
                                <div class="tab-img">
                                    <img src="assets/img/tropicaltanspa_01.jpg" alt="services img">
                                </div>
                                <div class="tab-text">
                                    <h3 class="small-h">Tanning Enhancements</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus quidem non,
                                        dolores aperiam voluptate similique at earum voluptatum quod id impedit harum,
                                        sit alias a deleniti eum molestiae nam aliquam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="web-btn text-center">
                <a class="web-a" href="gallery.php">View More +</a>
            </div>
        </div>
    </section>

    <!-- =====gallery part html========= -->
    <!-- isotope project -->
    <section class="isotope-project container-md-xxl">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s">
            <p class=" text-uppercase mb-2 .highlight">Our Gallery</p>
            <h1 class="display-5 text-black mb-2 page-h">Photo Of The Day</h1>
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
            <span>Get 50% Off For Your First Visit</span>
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
                            <a class="web-a" href="#">View All Review</a>
                        </div>
                        <div class="web-a-wrap">
                            <a class="web-a" href="#">Write A Review</a>
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
                                        <strong>Person Name</strong>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec
                                        ullamcorper mattis.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-boxes">
                                    <div class="user-id">
                                        <i class="fa-solid fa-user"></i>
                                        <strong>Person Name</strong>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec
                                        ullamcorper mattis.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-boxes">
                                    <div class="user-id">
                                        <i class="fa-solid fa-user"></i>
                                        <strong>Person Name</strong>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec
                                        ullamcorper mattis.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-boxes">
                                    <div class="user-id">
                                        <i class="fa-solid fa-user"></i>
                                        <strong>Person Name</strong>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec
                                        ullamcorper mattis.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-boxes">
                                    <div class="user-id">
                                        <i class="fa-solid fa-user"></i>
                                        <strong>Person Name</strong>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec
                                        ullamcorper mattis.</p>
                                </div>
                            </div>
                        </div>
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
</body>

</html>