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
        <h1 class="display-5 mb-4 page-h">Services We Provided</h1>
            <div class="serv-pg-box serv-b-one">
                <div class="serv-pg-context order-2 order-md-1">
                    <h1 class="small-h">Aqua Massage</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias rerum fuga ab, ullam nemo
                        dignissimos optio vero id delectus, quia fugit rem voluptatibus consequatur in incidunt! Error
                        maxime rem modi!</p>
                </div>
                <div class="serv-pg-img order-1 order-md-2">
                    <img src="assets/img/tropicaltanspa_02.jpg" alt="tanspa">
                </div>
            </div>

            <div class="serv-pg-box">
                <div class="serv-pg-img">
                    <img src="assets/img/tropicaltanspa_04.jpg" alt="tanspa">
                </div>
                <div class="serv-pg-context">
                    <h1 class="small-h">Tanning Packages</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias rerum fuga ab, ullam nemo
                        dignissimos optio vero id delectus, quia fugit rem voluptatibus consequatur in incidunt! Error
                        maxime rem modi!</p>
                </div>
            </div>

            <div class="serv-pg-box serv-b-one">
                <div class="serv-pg-context order-2 order-md-1">
                    <h1 class="small-h">Tropical Tanning</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias rerum fuga ab, ullam nemo
                        dignissimos optio vero id delectus, quia fugit rem voluptatibus consequatur in incidunt! Error
                        maxime rem modi!</p>
                </div>
                <div class="serv-pg-img order-1 order-md-2">
                    <img src="assets/img/tropicaltanspa_10.jpg" alt="tanspa">
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
        if (navItems.length >= 3) {
            navItems[2].classList.add("active");
        }</script>
</body>

</html>