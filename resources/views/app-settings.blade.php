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
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white">

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
            Settings
        </div>
        <div class="right">
            <!-- <a href="#" class="headerButton" onclick="toastbox('toast-example-1', 3000)">
                <ion-icon name="notifications-off-outline"></ion-icon>
            </a> -->
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="listview-title pt-3">Cryptocurrency</div>
        <ul class="listview image-listview inset mb-2">
            <li>
                <a href="crypto-index.html" class="item">
                    <div class="icon-box bg-info">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Home
                    </div>
                </a>
            </li>
            <li>
                <a href="crypto-coin-detail.html" class="item">
                    <div class="icon-box bg-info">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Coin Detail
                    </div>
                </a>
            </li>
            <li>
                <a href="crypto-exchange.html" class="item">
                    <div class="icon-box bg-info">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Exchange
                    </div>
                </a>
            </li>
            <li>
                <a href="crypto-portfolio.html" class="item">
                    <div class="icon-box bg-info">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Portfolio
                    </div>
                </a>
            </li>
            <li>
                <a href="crypto-transactions.html" class="item">
                    <div class="icon-box bg-info">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Transactions
                    </div>
                </a>
            </li>
        </ul>

        <div class="listview-title">Authentication</div>
        <ul class="listview image-listview inset mb-2">
            <li>
                <a href="app-login.html" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Login
                    </div>
                </a>
            </li>
            <li>
                <a href="app-register.html" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Register
                    </div>
                </a>
            </li>
            <li>
                <a href="app-forgot-password.html" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Forgot Password
                    </div>
                </a>
            </li>
            <li>
                <a href="app-sms-verification.html" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        SMS Verification
                    </div>
                </a>
            </li>
            <li>
                <a href="app-qr-code.html" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        QR Code Verification
                    </div>
                </a>
            </li>
        </ul>

        <div class="listview-title">Blog</div>
        <!-- <ul class="listview image-listview inset mb-2">
            <li>
                <a href="app-blog.html" class="item">
                    <div class="icon-box bg-secondary">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Blog Category
                    </div>
                </a>
            </li>
            <li>
                <a href="app-blog-post.html" class="item">
                    <div class="icon-box bg-secondary">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Blog Post
                    </div>
                </a>
            </li>
        </ul> -->

        <div class="listview-title">Theme</div>
        <ul class="listview image-listview inset mb-2">
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="moon-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Dark Mode</div>
                        <div class="form-check form-switch  ms-2">
                            <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodeSwitch">
                            <label class="form-check-label" for="darkmodeSwitch"></label>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div class="listview-title">Components</div>
        <ul class="listview image-listview inset mb-2">
            <li>
                <a href="app-components.html" class="item">
                    <div class="icon-box bg-dark">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Discover Components
                    </div>
                </a>
            </li>
        </ul>


        <div class="listview-title">Others</div>
        <ul class="listview image-listview inset mb-3">
            <li>
                <a href="about" class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        About Page
                    </div>
                </a>
            </li>
            <li>
                <a href="contact" class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Contact
                    </div>
                </a>
            </li>
            <li>
                <a href="faq" class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        FAQ
                    </div>
                </a>
            </li>
            <li>
                <a href="404" class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        404
                    </div>
                </a>
            </li>
            <!-- <li>
                <a href="app-splash.html" class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Splash Icon
                    </div>
                </a>
            </li>
            <li>
                <a href="app-splash-image.html" class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Splash Image
                    </div>
                </a>
            </li> -->
        </ul>

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