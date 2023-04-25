<?php

    include_once "includes/config.php";

    $con = Database::getInstance();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="title" content="Amburayan Research Journal">
    <meta name="description" content="The Amburayan Research Journal is a double-blind peer reviewed journal, open access journal which publishes original articles published by CTE in ISPSC">
    <meta name="keywords" content="Amburayan, Research Journal, double-blind, peer-reviewed, open access, CTE, ISPSC, amburayan research journal">
    <meta name="author" content="ISPSC Tagudin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, nofollow">

    <title>Amburayan Research Journal</title>
    <link rel="icon" type="image/icon type" href="assets/img/logo_ispsc.png">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://amburayanresearchjournal.xyz/index.php">
    <meta property="og:title" content="Home | Amburayan Research Journal">
    <meta property="og:description" content="The Amburayan Research Journal is a double-blind peer reviewed journal, open access journal which publishes original articles published by CTE in ISPSC">
    <meta property="og:image" content="assets/img/arj_logo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://amburayanresearchjournal.xyz/index.php">
    <meta property="twitter:title" content="Home | Amburayan Research Journal">
    <meta property="twitter:description" content="The Amburayan Research Journal is a double-blind peer reviewed journal, open access journal which publishes original articles published by CTE in ISPSC">
    <meta property="twitter:image" content="assets/img/arj_logo.png">

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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DYXV999XT8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DYXV999XT8');
    </script>
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


        <!--************************************
                Home Banner Start
        *************************************-->
        <div id="sj-homebanner" class="sj-homebanner">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="sj-postbook">
                            <figure class="sj-featureimg">
                                <div class="sj-bookimg">
                                    <div class="sj-frontcover"><img src="assets/img/banner.png" alt="image description"></div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="sj-bannercontent">
                            <h1><span>Amburayan</span>Research Journal<span>ISPSC</span></h1>
                            <div class="sj-description">
                                <p>Advancing knowledge through diligent research and rigorous investigation is the cornerstone of academic excellence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Home Banner End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->
        <main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
            <div id="sj-twocolumns" class="sj-twocolumns">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                            <div id="sj-content" class="sj-content">

                                <!--************************************
                                        Previous Posts Start
                                *************************************-->
                                <section class="sj-haslayout sj-sectioninnerspace">
                                    <div class="sj-borderheading">
                                        <h3>Previous Issues</h3>
                                        <a class="sj-btnview" href="javascript:void(0);">View All</a>
                                    </div>
                                    <div class="sj-previousissues">
                                        <ul class="sj-navtabs nav" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                            </li>


                                        </ul>
                                        <div class="sj-tabcontent tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <div id="sj-issuesslider-2018" class="sj-issuesslider-2018 sj-issuesslider owl-carousel">
                                                    <div class="item">
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-04.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Colesjjman Hoff</a></span>
                                                                    <h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-05.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Kimberly Delapena</a></span>
                                                                    <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-06.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Milan Poat</a></span>
                                                                    <h3><a href="javascript:void(0);">Emergency Legal Authority &amp; the Crisis</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-07.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Camilla Hofstetter</a></span>
                                                                    <h3><a href="javascript:void(0);">Talaromyces marneffei Infection</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="item">
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-04.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Coleman Hoff</a></span>
                                                                    <h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-05.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Kimberly Delapena</a></span>
                                                                    <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-06.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Milan Poat</a></span>
                                                                    <h3><a href="javascript:void(0);">Emergency Legal Authority &amp; the Crisis</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-07.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Camilla Hofstetter</a></span>
                                                                    <h3><a href="javascript:void(0);">Talaromyces marneffei Infection</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="item">
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-04.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Coleman Hoff</a></span>
                                                                    <h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-05.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Kimberly Delapena</a></span>
                                                                    <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-06.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Milan Poat</a></span>
                                                                    <h3><a href="javascript:void(0);">Emergency Legal Authority &amp; the Crisis</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-07.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Camilla Hofstetter</a></span>
                                                                    <h3><a href="javascript:void(0);">Talaromyces marneffei Infection</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="contact-tab">
                                                <div id="sj-issuesslider-2013" class="sj-issuesslider-2013 sj-issuesslider owl-carousel">
                                                    <div class="item">
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-04.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Coleman Hoff</a></span>
                                                                    <h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-05.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Kimberly Delapena</a></span>
                                                                    <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-06.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Milan Poat</a></span>
                                                                    <h3><a href="javascript:void(0);">Emergency Legal Authority &amp; the Crisis</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-07.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Camilla Hofstetter</a></span>
                                                                    <h3><a href="javascript:void(0);">Talaromyces marneffei Infection</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="item">
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-04.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Coleman Hoff</a></span>
                                                                    <h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-05.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Kimberly Delapena</a></span>
                                                                    <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-06.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Milan Poat</a></span>
                                                                    <h3><a href="javascript:void(0);">Emergency Legal Authority &amp; the Crisis</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-07.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Camilla Hofstetter</a></span>
                                                                    <h3><a href="javascript:void(0);">Talaromyces marneffei Infection</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="item">
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-04.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Coleman Hoff</a></span>
                                                                    <h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-05.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Kimberly Delapena</a></span>
                                                                    <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-06.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Milan Poat</a></span>
                                                                    <h3><a href="javascript:void(0);">Emergency Legal Authority &amp; the Crisis</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="sj-post sj-editorchoice sj-smallpost">
                                                            <figure class="sj-postimg">
                                                                <img src="assets/images/editorchoice/img-07.jpg" alt="image description">
                                                            </figure>
                                                            <div class="sj-postcontent">
                                                                <div class="sj-head">
                                                                    <span class="sj-username"><a href="javascript:void(0);">Camilla Hofstetter</a></span>
                                                                    <h3><a href="javascript:void(0);">Talaromyces marneffei Infection</a></h3>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--************************************
                                        Previous Posts End
                                *************************************-->
                                <!--************************************
                                        News Articles Start
                                *************************************-->
                                <section class="sj-haslayout sj-sectioninnerspace">
                                    <div class="sj-borderheading">
                                        <h3>Latest Publications</h3>
                                        <a class="sj-btnview" href="javascript:void(0);">View All</a>
                                    </div>
                                    <div class="sj-newsposts">
                                        <div id="sj-newsarticlesslider" class="sj-newsarticlesslider sj-newsarticles owl-carousel">
                                            <div class="item">
                                                <div class="sj-newsarticle">
                                                    <figure class="sj-newsimg">
                                                        <img src="assets/images/news/img-01.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-newscontent">
                                                        <div class="sj-newshead">
                                                            <time datetime="2018-12-12" class="sj-posttimedate">Tuesday, Apr 21, 2017</time>
                                                            <h3><a href="javascript:void(0);">Moving Toward Better-Quality Compounded Drugs</a></h3>
                                                        </div>
                                                        <div class="sj-description">
                                                            <p>Consectetur adipisicing elit sed incididunt labore... <a href="javascript:void(0);">Read More</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="sj-newsarticle">
                                                    <figure class="sj-newsimg">
                                                        <img src="assets/images/news/img-02.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-newscontent">
                                                        <div class="sj-newshead">
                                                            <time datetime="2018-12-12" class="sj-posttimedate">Tuesday, Apr 21, 2017</time>
                                                            <h3><a href="javascript:void(0);">Moving Toward Better-Quality Compounded Drugs</a></h3>
                                                        </div>
                                                        <div class="sj-description">
                                                            <p>Consectetur adipisicing elit sed incididunt labore... <a href="javascript:void(0);">Read More</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="sj-newsarticle">
                                                    <figure class="sj-newsimg">
                                                        <img src="assets/images/news/img-03.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-newscontent">
                                                        <div class="sj-newshead">
                                                            <time datetime="2018-12-12" class="sj-posttimedate">Tuesday, Apr 21, 2017</time>
                                                            <h3><a href="javascript:void(0);">Moving Toward Better-Quality Compounded Drugs</a></h3>
                                                        </div>
                                                        <div class="sj-description">
                                                            <p>Consectetur adipisicing elit sed incididunt labore... <a href="javascript:void(0);">Read More</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="sj-newsarticle">
                                                    <figure class="sj-newsimg">
                                                        <img src="assets/images/news/img-01.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-newscontent">
                                                        <div class="sj-newshead">
                                                            <time datetime="2018-12-12" class="sj-posttimedate">Tuesday, Apr 21, 2017</time>
                                                            <h3><a href="javascript:void(0);">Moving Toward Better-Quality Compounded Drugs</a></h3>
                                                        </div>
                                                        <div class="sj-description">
                                                            <p>Consectetur adipisicing elit sed incididunt labore... <a href="javascript:void(0);">Read More</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="sj-newsarticle">
                                                    <figure class="sj-newsimg">
                                                        <img src="assets/images/news/img-02.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-newscontent">
                                                        <div class="sj-newshead">
                                                            <time datetime="2018-12-12" class="sj-posttimedate">Tuesday, Apr 21, 2017</time>
                                                            <h3><a href="javascript:void(0);">Moving Toward Better-Quality Compounded Drugs</a></h3>
                                                        </div>
                                                        <div class="sj-description">
                                                            <p>Consectetur adipisicing elit sed incididunt labore... <a href="javascript:void(0);">Read More</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--************************************
                                        News Articles End
                                *************************************-->
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