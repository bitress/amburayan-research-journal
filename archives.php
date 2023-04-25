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
        </header>
        <!--************************************
                Header End
        *************************************-->

        <div class="sj-innerbanner">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="sj-innerbannercontent">
                            <h1>Browse Research</h1>
                            <ol class="sj-breadcrumb">
                                <li><a href="javascript:void(0);">Home</a></li>
                                <li><a href="javascript:void(0);">Articles</a></li>
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
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">
                            <div id="sj-content" class="sj-content">
                                <div class="sj-authorguidelines">
                                    <div class="sj-introduction sj-sectioninnerspace">
                                        <h4>Archives</h4>
                                    </div>
                                </div>
                                <div class="accordion" id="accordionExample">
                                    <div class="card">

                                        <?php

                                        $article_obj = new Article();
                                        $joural_year = $article_obj->fetchJournalYear();

                                        foreach ($joural_year as $article):

                                        ?>

                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#<?= $article['issue_year'] ?>" aria-expanded="true" aria-controls="collapseOne">
                                                    <?= $article['issue_year'] ?>
                                                </button>
                                            </h2>
                                        </div>

                                        <?php
                                        endforeach;
                                        ?>

                                        <?php

                                        $journal_issues = $article_obj->fetchJournalIssues();

                                        foreach ($journal_issues as $issue):

                                        ?>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">

                                                <div class="row">

                                                <div class="col-md-4">
                                                    <a href="articles.php?vol=1&issue=1" type="button" class="badge badge-secondary text-wrap p-3">Volume 1, No. 1; Januray - February 2023</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="articles.php?vol=1&issue=1" type="button" class="badge badge-secondary text-wrap p-3">Volume 1, No. 2; March 2023</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="articles.php?vol=1&issue=1" type="button" class="badge badge-secondary text-wrap p-3">Volume 1, No. 3; April - May 2023</a>
                                                </div>

                                            </div>

                                            </div>
                                        </div>

                                        <?php
                                        endforeach;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                            <aside id="sj-sidebar" class="sj-sidebar sj-sidebarvtwo">
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