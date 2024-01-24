<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="images/png" href="assets/img/tt-logo.png">
    <title>Tropical TanSpa | Contact Us</title>
</head>

<body>
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and header page  -->
    <?php $page_name = ' Contact Us' ?>
    <?php include('inc/banner-web.php') ?>
    <!-- banner and header page -->

    <section class="contact-form-box">
        <div class="container">
            <div class="head-box">
                <span class=" mb-2 highlight"> Contact Us</span>
                <h1 class="display-5 mb-4 page-h">Send Us Message</h1>
            </div>
            <div class="contact-form">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-location">
                            <div class="location-box">
                                <div class="location-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="location-details">
                                    <span>Phone Number:</span>
                                    <a href="tel:123 456 789">123 456 789</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-location">
                            <div class="location-box">
                                <div class="location-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="location-details">
                                    <span>Our Email:</span>
                                    <a href="mail:example@gmail.com">example@gmail.com</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-location">
                            <div class="location-box">
                                <div class="location-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="location-details">
                                    <span>Our Location:</span>
                                    <a href="#">
                                        Collegetowne Plaza (South side)</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 p-0 ">
                        <div class="bg-ternary contact-box-shadow h-100 d-flex flex-column justify-content-center wow zoomIn "
                            data-wow-delay="0.6s">
                            <div class="contact-box-wrap">
                                <!-- <h1 class="page-h mb-4">Send Message</h1> -->
                                <p>Fill
                                    in the form below to send us a message or to ask about any queries you might have.
                                </p>
                                <form id="contactForm " action="php/contact-form.php" method="post">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <input type="text" id="name" name="name" class="form-control border-2"
                                                required placeholder="Your First Name" style="height: 55px;">
                                            <small id="nameError" class="form-text text-danger"></small>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <input type="text" id="name" name="name" class="form-control border-2"
                                                required placeholder="Your Last Name" style="height: 55px;">
                                            <small id="nameError" class="form-text text-danger"></small>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <input type="tel" id="phone" name="phone"
                                                pattern="^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$"
                                                class="form-control border-2" required placeholder="Your Number"
                                                style="height: 55px;">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="email" id="email" name="email" class="form-control border-2"
                                                required placeholder="Your Email" style="height: 55px;">
                                        </div>

                                        <div class="col-12 contact-msg">
                                            Message Us
                                            <textarea id="message" class="form-control border-2" name="message" required
                                                placeholder="Your Message" rows="5"></textarea>
                                        </div>
                                        <div class="g-recaptcha"
                                            data-sitekey="6LeoDP8nAAAAANsoS36iwUXtJCAhXSAkLU1XjciX">
                                        </div>
                                        <div class="web-btn col-12 text-left enquire-btn">
                                            <button class="web-a mt-0" type="submit">Submit <i
                                                    class="fa-regular fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- live map location -->
    <section class="contact-liveview g-view-contact">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2930.985496237997!2d-92.48607442471537!3d42.72519771195638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f009b683dac989%3A0x624e97c093048507!2sTropical%20Tanspa%2C%20LLC.!5e0!3m2!1sen!2snp!4v1706097702945!5m2!1sen!2snp"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        if (navItems.length >= 5) {
            navItems[4].classList.add("active");
        }</script>
</body>

</html>