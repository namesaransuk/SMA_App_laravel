<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Finapp</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="<?php echo asset('img/favicon.png'); ?>" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo asset('img/icon/192x192.png'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css'); ?>">
    <link rel="manifest" href="__manifest.json">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="<?php echo asset('img/loading-icon.png'); ?>" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            About
        </div>
        <div class="right">
            <!-- <a href="app-notifications.html" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">4</span>
            </a> -->
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">


        <div class="section full text-center">
            <img src="<?php echo asset('img/loading-icon.png'); ?>" alt="image" class="pt-2 imaged w-25 square">
        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">เกี่ยวกับเรา</h2>
                    Finapp is Bootstrap 5 based template for your wallet, banking, financial mobile projects.
                </div>
            </div>
        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Learn More</h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mollis iaculis aliquet. Duis euismod
                    nibh at neque gravida tincidunt. Nunc vitae fringilla augue. Nunc blandit tempor enim porttitor
                    bibendum. In ac blandit quam. Quisque laoreet ligula eu commodo cursus. In efficitur convallis
                    felis.
                </div>
            </div>
        </div>

        <div class="section full mt-3">

            <!-- carousel single -->
            <div class="carousel-single splide">
                <div class="splide__track">
                    <ul class="splide__list">

                        <li class="splide__slide">
                            <img src="<?php echo asset('img/sample/photo/wide1.jpg'); ?>" alt="alt" class="imaged w-100">
                        </li>

                        <li class="splide__slide">
                            <img src="<?php echo asset('img/sample/photo/wide2.jpg'); ?>" alt="alt" class="imaged w-100">
                        </li>

                        <li class="splide__slide">
                            <img src="<?php echo asset('img/sample/photo/wide3.jpg'); ?>" alt="alt" class="imaged w-100">
                        </li>

                    </ul>
                </div>
            </div>
            <!-- * carousel single -->

        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Have a Question?</h2>
                    <p>Feel free to contact us with any problems. We will get back to you as soon as possible.</p>
                    <a href="contact" class="btn btn-primary">
                        <ion-icon name="mail-open-outline"></ion-icon> Contact
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->


    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="<?php echo asset('js/lib/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="<?php echo asset('js/plugins/splide/splide.min.js'); ?>"></script>
    <!-- Base Js File -->
    <script src="<?php echo asset('js/base.js'); ?>"></script>


</body>

</html>