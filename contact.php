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
    <style>
        .card-body p.card-text {
            margin-bottom: 0;
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
                        include_once 'templates/navbar.php';
                        ?>
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
        <main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
            <div id="sj-twocolumns" class="sj-twocolumns">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                            <div id="sj-content" class="sj-content">
                                <div class="sj-authorguidelines">
                                    <div class="sj-introduction sj-sectioninnerspace">
                                        <h4>Contact</h4>
                                    </div>
                                </div>
                                <section id="editorial-board">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-lg-12 col-md-12">

                                                <section id="contact" class="contact">
                                                    <div class="container" data-aos="fade-up">

                                                        <div class="row">

                                                            <div class="col-lg-5 d-flex align-items-stretch">
                                                                <div class="info">
                                                                    <div class="address">
                                                                        <i class="bi bi-geo-alt"></i>
                                                                        <h4>Location:</h4>
                                                                        <p>Brgy. Quirino, Tagudin, Ilocos Sur</p>
                                                                    </div>

                                                                    <div class="email">
                                                                        <i class="bi bi-envelope"></i>
                                                                        <h4>Email:</h4>
                                                                        <p>researchofficetagudin@gmail.com</p>
                                                                    </div>

                                                                    <div class="phone">
                                                                        <i class="bi bi-phone"></i>
                                                                        <h4>Call:</h4>
                                                                        <p>+639-12-345-6789</p>
                                                                    </div>

                                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7633.474338219048!2d120.44381058113903!3d16.938252235295398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391e6a477e86e37%3A0x4dbcd7fff796de95!2sIlocos%20Sur%20Polytechnic%20State%20College%20-%20Tagudin%20Campus!5e0!3m2!1sen!2sph!4v1679469571286!5m2!1sen!2sph" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                                                                </div>

                                                            </div>

                                                            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                                                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="name">Your Name</label>
                                                                            <input type="text" name="name" class="form-control" id="name" required>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label for="name">Your Email</label>
                                                                            <input type="email" class="form-control" name="email" id="email" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="name">Subject</label>
                                                                        <input type="text" class="form-control" name="subject" id="subject" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="name">Message</label>
                                                                        <textarea class="form-control" name="message" rows="10" required></textarea>
                                                                    </div>

                                                                    <div class="text-center"><button class="sj-btn sj-btn-sm" type="submit">Send Message</button></div>
                                                                </form>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </section>

                                            </div>
                                        </div>
                                    </div>
                                </section>


                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                            <aside id="sj-sidebar" class="sj-sidebar">
                                <div class="sj-widget sj-widgetsearch">
                                    <div class="sj-widgetcontent">
                                        <form class="sj-formtheme sj-formsearch">
                                            <fieldset>
                                                <input type="search" name="search" class="form-control" placeholder="Search here">
                                                <button type="submit" class="sj-btnsearch"><i class="lnr lnr-magnifier"></i></button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="sj-widget sj-widgetnoticeboard">
                                    <div class="sj-widgetheading">
                                        <h3>Notice Board</h3>
                                    </div>
                                    <div class="sj-widgetcontent">
                                        <ul>
                                            <li><a href="javascript:void(0);">Adipisicing elitaium sed dotas eiusm tempor incididunt utae labore etiate dolore magna aliqua enim.</a></li>
                                            <li><a href="javascript:void(0);">Labore etiat dolore magna aliquaen ad minim veniam.</a></li>
                                            <li><a href="javascript:void(0);">Duis aute irure dolor in reprehender</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </aside>
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