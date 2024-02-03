<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="images/png" href="assets/img/tt-logo.png">
    <title>Tropical TanSpa | About Us</title>
</head>

<body>
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php $page_name = 'About Us' ?>
    <?php include('inc/banner-web.php') ?>
    <!-- banner and header page -->

    <!-- =======about us details ====== -->
    <section class="main-abt-us">
        <div class="container">
            <!-- <span class="highlight">About Us</span> -->
            <span class="highlight">Tropical TanSpa</span>
            <h1 class="page-h">Who We Are </h1>
            <p>Tropical Tanspa, LLC has over 30 years of experience in the tanning industry. We are a family owned
                business
                with friendly and knowledgeable staff eager to serve you. With some of the latest technology in tanning
                equipment, we are sure we can meet your tanning needs. We offer 9 UV tanning units, ranging from base
                beds
                to high power upgrades including stand-up units.</p>
        </div>
    </section>

    <section class="main-package">
        <div class="about-web">
            <div class="container">
                <div class="abt-pck-up-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="abt-why-us">
                                <h2 class="page-h">Why Choose Us</h2>
                                <p>Looking for the perfect place to get your tan on? Look no further than Tropical
                                    Tanspa LLC in Waverly! We've got everything you need for your next tanning
                                    adventure.Tropical Tanspa LLC is not just your average tanning salon. We pride
                                    ourselves on creating a tropical oasis right in the heart of Waverly. Our mission is
                                    to provide our customers with a rejuvenating and relaxing tanning experience that
                                    leaves you feeling refreshed and glowing.

                                    What sets us apart? Well, for starters, our state-of-the-art tanning equipment is
                                    top-of-the-line, ensuring that you achieve that perfect, sun-kissed glow every time.
                                    Our friendly and knowledgeable staff are always on hand to assist you and make sure
                                    you get the most out of your tanning session. Call now to book your next tanning
                                    session with us.</p>

                            </div>
                        </div>
                        <div class="col-md-6">
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


            </div>
        </div>
    </section>

    <!-- =========tt circle details =========== -->
    <section class="abt-pg-circle">
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
    </section>

    <!-- =====tt tanning rules ====== -->
    <section class="abt-us-rules">
        <div class="container">
            <!-- <span class="highlight">Tanning Rules</span> -->
            <h1 class="page-h">Your First Visit</h1>

            <strong class="small-h">Our Tanning Rules</strong>
            <ul class="abt-tan-rules">
                <li><i class="fa-regular fa-circle-check"></i>
                    <p>Please arrive before scheduled time. Late arrivals may not receive full session.</p>
                </li>
                <li><i class="fa-regular fa-circle-check"></i>
                    <p>Please remove makeup BEFORE session time.</p>
                </li>
                <li><i class="fa-regular fa-circle-check"></i>
                    <p>Please remove all jewelry and metal from swimwear. It scratches acrylic.</p>
                </li>
                <li><i class="fa-regular fa-circle-check"></i>
                    <p>Avoid using tanning oils and lotions except the INDOOR TANNING LOTIONS purchased here. Unapproved
                        lotion will damage the acrylics!</p>
                </li>
                <li><i class="fa-regular fa-circle-check"></i>
                    <p>For your health and safety, FDA requires that protective eyewear must be used at all times.</p>
                </li>
                <li><i class="fa-regular fa-circle-check"></i>
                    <p>Please dress and exit room quickly. The next appointment is waiting. Make sure you do not forget
                        anything.</p>
                </li>
                <li><i class="fa-regular fa-circle-check"></i>
                    <p>Please wait 24- 48 hours between appointments.</p>
                </li>
                <li><i class="fa-regular fa-circle-check"></i>
                    <p>Thank You for your cooperation. We are looking forward to seeing you at your next appointment!
                    </p>
                </li>
            </ul>
        </div>
    </section>





    <!-- ---------------------------footer starts--------------------- -->
    <?php

    include('inc/footer.php');
    include('inc/js.php')
        ?>

    <script>const navItems = document.querySelectorAll('.navbar-nav  > li a');
        if (navItems.length >= 2) {
            navItems[1].classList.add("active");
        }</script>
</body>

</html>