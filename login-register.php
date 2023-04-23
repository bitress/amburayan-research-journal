<?php

include_once "includes/config.php";

$con = Database::getInstance();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Amburayan Research Journal</title>
    <link rel="icon" type="image/icon type" href="assets/img/logo_ispsc.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/linearicons@1.0.2/dist/web-font/style.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/chartist.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color.css">
    <link rel="stylesheet" href="assets/css/transitions.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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
                        include_once 'templates/navbar.php';
                        ?>
                    </div>
                </div>
            </div>
        </header>
        <!--************************************
                Header End
        *************************************-->

        <div class="sj-innerbanner">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="sj-innerbannercontent">
                            <h1>A Brief Introduction</h1>
                            <ol class="sj-breadcrumb">
                                <li><a href="javascript:void(0);">Home</a></li>
                                <li><a href="javascript:void(0);">Login & Register</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--************************************
                         Main Start
                 *************************************-->
        <main id="sj-main" class="sj-main sj-haslayout sj-sectionspace sj-loginupdates">
            <div id="sj-twocolumns" class="sj-twocolumns">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <aside id="sj-sidebarvtwo" class="sj-sidebar">
                                <div class="sj-widget sj-widgetlogin">
                                    <div class="sj-widgetheading">
                                        <h3>Login Now</h3>
                                    </div>
                                    <div class="sj-widgetcontent">
                                        <form class="sj-formtheme sj-formlogin">
                                            <fieldset>
                                                <div class="form-group">
                                                    <input type="text" name="yourname" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group sj-forgotpass">
                                                    <div class="sj-checkbox">
                                                        <input type="checkbox" id="login">
                                                        <label for="login">keep me logged in</label>
                                                    </div>
                                                    <a class="sj-forgorpass" href="#">Forgot Password?</a>
                                                </div>
                                                <div class="sj-btnarea">
                                                    <button class="sj-btn sj-btnactive">Login</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                            <div id="sj-content" class="sj-content">
                                <div class="sj-registerarea">
                                    <div class="registernow">
                                        <div class="sj-borderheading">
                                            <h3>Register Now</h3>
                                        </div>
                                        <div class="sj-registerformholder">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                                    <form class="sj-formtheme sj-formregister">
                                                        <fieldset>

                                                            <div class="row">
                                                                    <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <input type="email" name="youremail" class="form-control" placeholder="First Name*">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <input type="email" name="youremail" class="form-control" placeholder="Middle Name*">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <input type="email" name="youremail" class="form-control" placeholder="Last Name*">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="email" name="youremail" class="form-control" placeholder="Position">
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="email" name="youremail" class="form-control" placeholder="Username">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" name="youremail" class="form-control" placeholder="Email*">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="password" class="form-control" placeholder="Password*">
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="sj-checkbox">
                                                                    <input type="checkbox" id="register">
                                                                    <label for="register">By registering, you accept our <a href="javascript:void(0);">Terms &amp; Conditions</a></label>
                                                                </div>
                                                            </div>
                                                            <div class="sj-btnarea">
                                                                <a class="sj-btn sj-btnactive" href="javascript:void(0);">Register</a>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                    <div class="sj-howtoregister">
                                                        <h3>Data Privacy</h3>
                                                        <div class="sj-description">
                                                            <p class="text-justify">We take data privacy seriously and comply with the Data Privacy Act of 2012 (RA 10173) to protect your personal information. Please be assured that your data will be handled securely and used only for the purpose of this registration process.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--************************************
                Main End
        *************************************-->

        <?php

        include_once 'templates/footer.php';

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
<script src="assets/js/vendor/jquery-3.3.1.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="assets/js/vendor/jquery-library.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/circle-progress.js"></script>
<script src="assets/js/scrollbar.min.js"></script>
<script src="assets/js/chartist.min.js"></script>
<script src="assets/js/countdown.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>