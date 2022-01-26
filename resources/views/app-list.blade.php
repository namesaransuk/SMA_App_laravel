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
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            รายการ
        </div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Coin Status -->
        <div class="section full gradientSection">
            <div class="in coin-head">
                <h1 class="total">$ 32,517.50</h1>
                <h4 class="caption">
                    <span class="iconbox text-success">
                        <ion-icon name="caret-up"></ion-icon>
                    </span>
                    $2,325.19 <strong>(+1.50%)</strong>
                </h4>
            </div>
        </div>
        <!-- * Coin Status -->


        <!-- Coin Chart -->
        <div class="section mb-2">

            <div class="card coin-chart">
                <div class="card-body pt-1">
                    <!-- tabs -->
                    <ul class="nav nav-tabs lined" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tab-24h" role="tab">
                                24H
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-1w" role="tab">
                                1W
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-1m" role="tab">
                                1M
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-1y" role="tab">
                                1Y
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-all" role="tab">
                                All
                            </a>
                        </li>
                    </ul>
                    <!-- * tabs -->
                </div>


                <!-- tab content -->
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="tab-24h" role="tabpanel">
                        <div class="chart-example-1"></div>
                    </div>

                    <div class="tab-pane fade" id="tab-1w" role="tabpanel">
                        <div class="chart-example-2"></div>
                    </div>
                    <div class="tab-pane fade" id="tab-1m" role="tabpanel">
                        <div class="chart-example-3"></div>
                    </div>
                    <div class="tab-pane fade" id="tab-1y" role="tabpanel">
                        <div class="chart-example-4"></div>
                    </div>
                    <div class="tab-pane fade" id="tab-all" role="tabpanel">
                        <div class="chart-example-5"></div>
                    </div>
                </div>
                <!-- * tab content -->

            </div>
        </div>
        <!-- Coin Chart -->


        <!-- Buttons -->
        <div class="section">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="crypto-exchange.html" class="btn btn-block btn-lg btn-success">BUY</a>
                        </div>
                        <div class="col">
                            <a href="crypto-exchange.html" class="btn btn-block btn-lg btn-secondary">SELL</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Buttons -->

        <!-- Stats -->
        <div class="section mt-2 mb-4">
            <div class="card">
                <ul class="listview no-line transparent flush simple-listview">
                    <li>
                        <div class="text-muted">Daily Change</div>
                        <strong class="text-success">+5.10%</strong>
                    </li>
                    <li>
                        <div class="text-muted">High Price</div>
                        <strong>$56,367.23</strong>
                    </li>
                    <li>
                        <div class="text-muted">Low Price</div>
                        <strong>$18,529.90</strong>
                    </li>
                    <li>
                        <div class="text-muted">Market Supply</div>
                        <strong>BTC 14.62M</strong>
                    </li>
                    <li>
                        <div class="text-muted">Market Cap</div>
                        <strong>$526.48B</strong>
                    </li>
                </ul>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <div class="row mb-05 fontsize-sub">
                        <div class="col text-success"><strong>72% Buy</strong></div>
                        <div class="col text-secondary text-end"><strong>26% Sell</strong></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Stats -->

        <!-- Today -->
        <div class="section mt-2">
            <div class="section-title">วันนี้</div>
            <div class="card">
                <ul class="listview flush transparent no-line image-listview detailed-list mt-1 mb-1">
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box bg-success">
                                <ion-icon name="arrow-up-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Bitcoin</strong>
                                    <div class="text-small text-secondary">Sell</div>
                                </div>
                                <div class="text-end">
                                    <strong>$855,24</strong>
                                    <div class="text-small">
                                        Today 11:38 AM
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                </ul>
            </div>
        </div>
        <!-- * Today -->

        <!-- This Week -->
        <div class="section mt-2">
            <div class="section-title">อาทิตย์นี้</div>
            <div class="card">
                <ul class="listview flush transparent no-line image-listview detailed-list mt-1 mb-1">
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box bg-warning">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Etherium</strong>
                                    <div class="text-small text-secondary">Buy</div>
                                </div>
                                <div class="text-end">
                                    <strong>$40,68</strong>
                                    <div class="text-small">
                                        March 8, 2021
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box">
                                <img src="<?php echo asset('img/sample/avatar/avatar4.jpg') ?>" alt="image" class="imaged rounded w36">
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Bitcoin</strong>
                                    <div class="text-small text-secondary">Send</div>
                                </div>
                                <div class="text-end">
                                    <strong>$100,00</strong>
                                    <div class="text-small">
                                        March 4, 2021
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box bg-secondary">
                                <ion-icon name="swap-vertical-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Tether</strong>
                                    <div class="text-small text-secondary">Trade</div>
                                </div>
                                <div class="text-end">
                                    <strong>$2.405,48</strong>
                                    <div class="text-small">
                                        February 24, 2021
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                </ul>
            </div>
        </div>
        <!-- * This Week -->

        <!-- December -->
        <div class="section mt-2">
            <div class="section-title">December, 2021</div>
            <div class="card">
                <ul class="listview flush transparent no-line image-listview detailed-list mt-1 mb-1">
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box">
                                <img src="<?php echo asset('img/sample/avatar/avatar5.jpg') ?>" alt="image" class="imaged rounded w36">
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Etherium</strong>
                                    <div class="text-small text-secondary">Send</div>
                                </div>
                                <div class="text-end">
                                    <strong>$40,68</strong>
                                    <div class="text-small">
                                        December 22, 2021
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box">
                                <img src="<?php echo asset('img/sample/avatar/avatar8.jpg') ?>" alt="image" class="imaged rounded w36">
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Bitcoin</strong>
                                    <div class="text-small text-secondary">Send</div>
                                </div>
                                <div class="text-end">
                                    <strong>$100,00</strong>
                                    <div class="text-small">
                                        December 16, 2021
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box bg-success">
                                <ion-icon name="arrow-up-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Bitcoin</strong>
                                    <div class="text-small text-secondary">Sell</div>
                                </div>
                                <div class="text-end">
                                    <strong>$855,24</strong>
                                    <div class="text-small">
                                        December 15, 2021
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box bg-success">
                                <ion-icon name="arrow-up-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Cardano</strong>
                                    <div class="text-small text-secondary">Sell</div>
                                </div>
                                <div class="text-end">
                                    <strong>$1.625,24</strong>
                                    <div class="text-small">
                                        December 12, 2021
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box bg-secondary">
                                <ion-icon name="swap-vertical-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Etherium</strong>
                                    <div class="text-small text-secondary">Trade</div>
                                </div>
                                <div class="text-end">
                                    <strong>$516,48</strong>
                                    <div class="text-small">
                                        December 8, 2021
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                </ul>
            </div>
        </div>
        <!-- * December -->


        <div class="section mt-3 mb-3">
            <a href="#" class="btn btn-lg btn-block btn-primary">Load More</a>
        </div>


    </div>
    <!-- * App Capsule -->



    <!-- App Bottom Menu -->
    @include ('assets/component/bottomComponent')
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">

            <!-- sidebar body -->
            @include ('assets/component/drawer')
            <!-- sidebar body -->

        </div>
    </div>
    <!-- * App Sidebar -->


    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')

    <script>
        var chartExample1 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1500, 700, 1600, 1400, 1600, 2000, 1100, 501, 3000, 1000, 2000]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        var chartExample2 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1500, 700, 1700, 1600, 1400, 1600]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        var chartExample3 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1500, 700, 405, 666, 1090, 1309, 1400, 1500]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        var chartExample4 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1500, 700, 1000, 2000, 512, 405, 666, 1090, 1309, 1400, 1500]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        var chartExample5 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1309, 1400, 1500]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.chart-example-1').forEach(chart => new ApexCharts(chart, chartExample1).render());
            document.querySelectorAll('.chart-example-2').forEach(chart => new ApexCharts(chart, chartExample2).render());
            document.querySelectorAll('.chart-example-3').forEach(chart => new ApexCharts(chart, chartExample3).render());
            document.querySelectorAll('.chart-example-4').forEach(chart => new ApexCharts(chart, chartExample4).render());
            document.querySelectorAll('.chart-example-5').forEach(chart => new ApexCharts(chart, chartExample5).render());
        })
    </script>

</body>

</html>