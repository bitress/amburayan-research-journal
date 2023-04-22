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
                                        <h4>Peer Review Process</h4>
                                    </div>
                                </div>
                                <section id="editorial-board">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-lg-12 col-md-12">
                                                <p class="text-justify">In the review of submitted researches, researchers are assured that that the process is rigorous and fair. The review process may take a month or two. Notably, the review process shall be double-blind peer review process to ensure the partiality and integrity of it. Following are the editorial processes that shall be followed:
                                                </p>
                                                <ol>
                                                    <li>The Editorial Board (EB) will announce the call for submission and the deadlines of submission through
                                                        the website of the Amburayan Journal.</li>
                                                    <li>The author submits the research manuscript following the paper format of the journal.</li>
                                                    <li>The EB through its Editor-in-Chief (EIC) or Associate Editors determines if the submitted paper is
                                                        within the focus and scopes of the journal.</li>
                                                    <li>If the submitted research is suitable for the journal, a notice of acceptance shall be sent to the
                                                        author through his/her email. If the paper is not within the foci and scopes of the journal, a notice
                                                        shall be sent to the author.</li>
                                                    <li>The submitted research must cite at least three (3) authors from previously published articles of the
                                                        Amburayan Journal.</li>
                                                    <li>The accepted paper will be sent to two or three reviewers/referees.</li>
                                                    <li>The reviewers/referees will send their comments/reviews/suggestions/perusal to the EIC.</li>
                                                    <li>Through the sent evaluation of the reviewers/referees, the EIC will decide if the paper will be
                                                        considered for publication or not.</li>
                                                    <li>The EB decision will be communicated to the authors within a month or two.</li>
                                                    <li>If the research paper is found worthy of publication, the author shall integrate the corrections,
                                                        comments, or suggestions of the EB for one or two weeks.</li>
                                                    <li>The author shall submit the edited paper to the designated email or link.</li>
                                                    <li>If there are corrections, the paper will be returned to the author for rectification. If there are no
                                                        corrections, the author will be asked to pay the publication charge and submit proof of publication to
                                                        the designated link or email.</li>
                                                    <li>Certificate of Publication shall be sent to the author if the paper is already published.</li>
                                                    <li>All papers to be submitted shall be subjected to similarity and plagiarism checked. To be considered for
                                                        publication, the paper must have only 20% or below similarity index.</li>
                                                </ol>

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