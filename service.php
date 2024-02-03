<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="images/png" href="assets/img/tt-logo.png">
    <title>Tropical TanSpa | Our Services</title>
</head>

<body>
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and header page  -->
    <?php $page_name = 'Our Contact Details' ?>
    <?php include('inc/banner-web.php') ?>
    <!-- banner and header page -->

    <section class="serv-pg">
        <div class="container">
            <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s">
                <p class=" mb-2 highlight">Our Services</p>
                <h1 class="display-5 mb-4 page-h">Services We Provided</h1>
            </div>
            <!-- <div class="serv-pg-box serv-b-one">
                <div class="serv-pg-context order-2 order-md-1">
                    <h1 class="small-h">Aqua Massage</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias rerum fuga ab, ullam nemo
                        dignissimos optio vero id delectus, quia fugit rem voluptatibus consequatur in incidunt! Error
                        maxime rem modi!</p>
                </div>
                <div class="serv-pg-img order-1 order-md-2">
                    <img src="assets/img/tropicaltanspa_02.jpg" alt="tanspa">
                </div>
            </div> -->

            <div class="serv-pg-box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="serv-pg-img">
                            <img src="assets/img/tropicaltanspa_04.jpg" alt="tanspa">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="serv-pg-context">
                            <h1 class="small-h">Tanning Packages</h1>
                            <p>At Tropical Tan Spa, we offer a variety of Tanning packages to suit your tanning needs.
                                Plus, we have options for both single sessions and multiple visits. So, whether you're
                                just looking for a quick tan or want to keep that glow going all season long, we've got
                                you covered. So, come on in and find the perfect tanning package for you!</p>
                            <div class="tanspa-pg">
                                <ul class="time-ul">
                                    <li><i class="fa-regular fa-clock"></i>
                                        <p>75 Minutes</p>
                                    </li>
                                    <li><i class="fa-regular fa-clock"></i>
                                        <p>100 Minutes</p>
                                    </li>
                                    <li><i class="fa-regular fa-clock"></i>
                                        <p>200 Minutes</p>
                                    </li>
                                </ul>
                                <ul class="time-ul">
                                    <li><i class="fa-regular fa-clock"></i>
                                        <p>300 Minutes</p>
                                    </li>
                                    <li><i class="fa-regular fa-clock"></i>
                                        <p>400 Minutes</p>
                                    </li>
                                    <li><i class="fa-regular fa-clock"></i>
                                        <p>500 Minutes</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="serv-pg-box serv-b-one">
                <div class="serv-pg-context order-2 order-md-1">
                    <h1 class="small-h">Tropical Tanning</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias rerum fuga ab, ullam nemo
                        dignissimos optio vero id delectus, quia fugit rem voluptatibus consequatur in incidunt! Error
                        maxime rem modi!</p>
                </div>
                <div class="serv-pg-img order-1 order-md-2">
                    <img src="assets/img/tropicaltanspa_10.jpg" alt="tanspa">
                </div>
            </div> -->
        </div>
    </section>

    <!-- ---------------------------footer starts--------------------- -->
    <?php

    include('inc/footer.php');
    include('inc/js.php')
        ?>

    <script>const navItems = document.querySelectorAll('.navbar-nav  > li a');
        if (navItems.length >= 3) {
            navItems[2].classList.add("active");
        }</script>
</body>

</html>