<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>SMA Coin Wallet</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    @include ('assets/component/link-style')

    <style>
        .ion-carousel {
            font-size: 35px;
        }
    </style>
</head>

<body>

    <!-- loader -->
    <!-- <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div> -->
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <!-- <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a> -->
        </div>
        <div class="pageTitle">
            ฉัน
        </div>
        <div class="right">
            <a href="settings" class="headerButton">
                <ion-icon name="settings-outline"></ion-icon>
                <!-- <span class="badge badge-danger">4</span> -->
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section pt-3 pb-3 full gradientSection text-center">
            <div class="avatar-section">
                <a href="#">
                    <img src="<?php echo asset('img/sample/avatar/avatar1.jpg'); ?>" alt="avatar" class="imaged w100 rounded">
                    <span class="button">
                        <ion-icon name="camera-outline"></ion-icon>
                    </span>
                </a>
            </div>
            <div class="button-section px-3 pt-3">
                <div class="row">
                    <div class="col">
                        <a href="login" class="btn btn-block btn-success">
                            เข้าสู่ระบบ
                        </a>
                    </div>
                    <div class="col">
                        <a href="register" class="btn btn-block btn-secondary">
                            สมัครสมาชิก
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section full mt-2">
            <div class="section-title mb-1">เมนู</div>

            <!-- carousel small -->
            <div class="carousel-small splide">
                <div class="splide__track ">
                    <ul class="splide__list text-center">
                        <li class="splide__slide">
                            <a href="#">
                                <ion-icon name="cash-outline" class="ion-carousel bg-primary p-2 rounded-circle"></ion-icon>
                            </a>
                            <p>first</p>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <ion-icon name="cash-outline" class="ion-carousel bg-primary p-2 rounded-circle"></ion-icon>
                            </a>
                            <p>second</p>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <ion-icon name="cash-outline" class="ion-carousel bg-primary p-2 rounded-circle"></ion-icon>
                            </a>
                            <p>third</p>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <ion-icon name="cash-outline" class="ion-carousel bg-primary p-2 rounded-circle"></ion-icon>
                            </a>
                            <p>fourth</p>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <ion-icon name="cash-outline" class="ion-carousel bg-primary p-2 rounded-circle"></ion-icon>
                            </a>
                            <p>fifth</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- * carousel small -->

        </div>

        <div class="listview-title mt-1">ตั้งค่าการชำระเงิน</div>
        <ul class="listview image-listview text inset">
            <li>
                <a href="#" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>ยอดเงินคงเหลือ</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="item">
                    <div class="icon-box bg-primary">
                    <ion-icon name="logo-bitcoin"></ion-icon>
                    </div>
                    <div class="in">
                        <div>เหรียญ SMA ของฉัน</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="bank-account" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="reader-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>บัญชีธนาคารของฉัน</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="dc-card" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="card-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>บัตรเดบิต/เครดิตของฉัน</div>
                    </div>
                </a>
            </li>
        </ul>

    </div>
    <!-- * App Capsule -->



    <!-- App Bottom Menu -->
    @include ('assets/component/bottomComponent')
    <!-- * App Bottom Menu -->

    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')


</body>

</html>