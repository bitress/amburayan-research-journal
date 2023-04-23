<?php

include_once __DIR__. "/../includes/config.php";

$con = Database::getInstance();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Amburayan Research Journal</title>
    <link rel="icon" type="image/icon type" href="<?= APP_URL ?>/assets/img/logo_ispsc.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= APP_URL ?>/assets/css/normalize.css">
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/linearicons@1.0.2/dist/web-font/style.css">
    <link rel="stylesheet" href="<?= APP_URL ?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= APP_URL ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= APP_URL ?>/assets/css/chartist.css">
    <link rel="stylesheet" href="<?= APP_URL ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?= APP_URL ?>/assets/css/color.css">
    <link rel="stylesheet" href="<?= APP_URL ?>/assets/css/transitions.css">
    <link rel="stylesheet" href="<?= APP_URL ?>/assets/css/responsive.css">
    <script src="<?= APP_URL ?>/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <style>
        .card-body p.card-text {
            margin-bottom: 0;
        }

        .nav li {
            list-style-type: none;
        }
    </style>
</head>


<body class="sj-home">

<!--************************************
        Wrapper Start
*************************************-->
<div id="sj-wrapper" class="sj-wrapper">
    <!--************************************
            Content Wrapper Start
    *************************************-->
    <div class="sj-contentwrapper">
        <!--************************************
                Header Start
        *************************************-->
        <header id="sj-header" class="sj-header sj-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <?php
                        include_once __DIR__. '/../templates/navbar.php';
                        ?>
                    </div>
                </div>
        </header>
        <!--************************************
                Header End
        *************************************-->

        <div class="sj-innerbanner mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="sj-innerbannercontent">
                            <h1>A Brief Introduction</h1>
                            <ol class="sj-breadcrumb">
                                <li><a href="javascript:void(0);">Home</a></li>
                                <li><a href="javascript:void(0);">Focus & Scope</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--************************************
                            Main Start
                    *************************************-->
            <div class="container mb-4">
                <div class="row">

                    <div class="col-md-2 col-lg-2">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Manage Articles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Manage Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Manage Editions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Disabled</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-10 col-lg-10">
                        <div class="card">
                            <div class="card-header">Manage Articles</div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Volume</th>
                                            <th scope="col">Issue</th>
                                            <th scope="col">Journal</th>
                                            <th scope="col">Year</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">Some Tiyle</th>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cumque esse excepturi, laudantium libero magni minus, officia repellat, reprehenderit saepe sint temporibus ullam. Cumque error exercitationem iure nisi quibusdam quis!</td>
                                            <td>1</td>
                                            <td>100</td>
                                            <td>WAA</td>
                                            <td>2023</td>
                                            <td>January 1, 2023</td>
                                            <td>Published</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <!--************************************
                Main End
        *************************************-->


        <?php

         include_once __DIR__. '/../templates/footer.php';

        ?>

    </div>
    <!--************************************
            Content Wrapper End
    *************************************-->
</div>
<!--************************************
        Wrapper End
*************************************-->
<!--************************************
        Search Start
*************************************-->
<div id="sj-searcharea" class="sj-searcharea">
    <button type="button" class="close">×</button>
    <form class="sj-formtheme sj-formsearcmain">
        <input type="search" value="" placeholder="Search Here..." />
        <button type="submit" class="sj-btn sj-btnactive"><span>Search</span></button>
    </form>
</div>
<!--************************************
        Search End
*************************************-->
<script src="<?= APP_URL ?>/assets/js/vendor/jquery-3.3.1.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="<?= APP_URL ?>/assets/js/vendor/jquery-library.js"></script>
<script src="<?= APP_URL ?>/assets/js/vendor/bootstrap.min.js"></script>
<script src="<?= APP_URL ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?= APP_URL ?>/assets/js/circle-progress.js"></script>
<script src="<?= APP_URL ?>/assets/js/scrollbar.min.js"></script>
<script src="<?= APP_URL ?>/assets/js/chartist.min.js"></script>
<script src="<?= APP_URL ?>/assets/js/countdown.js"></script>
<script src="<?= APP_URL ?>/assets/js/appear.js"></script>
<script src="<?= APP_URL ?>/assets/js/main.js"></script>
</body>
</html>