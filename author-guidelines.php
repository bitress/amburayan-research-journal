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
                                        <h4>Author Guidelines</h4>
                                    </div>
                                </div>
                                <section id="editorial-board">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-lg-12 col-md-12">
                                                <h2>General Requirements</h2>
                                                <h5>1.1 Language</h5>
                                                <p>The Journal considers articles in English and Filipino. If Filipino is used, the abstract must be written in
                                                    English.</p>

                                                <h5>1.2 Length of Paper</h5>
                                                <p>The journal accepts papers that do not exceed the maximum number of pages which 20 including the references. The template stipulates the font size, style, margin, spacing, and other specifications of the paper</p>

                                                <h2>Word Processing Formats</h2>
                                                <p>The manuscript file should be provided in Microsoft Word format only.</p>

                                                <h2>Organization of Manuscript</h2>
                                                <p>The manuscript should follow the following order:</p>
                                                <ol>
                                                    <li>Title</li>
                                                    <li>List of authors, their affiliations and email addresses</li>
                                                    <li>Keywords</li>
                                                    <li>Abstract</li>
                                                    <li>Introduction</li>
                                                    <li>Literature review</li>
                                                    <li>Methodology</li>
                                                    <li>Results/Findings</li>
                                                    <li>Conclusion</li>
                                                    <li>Statements and Declarations</li>
                                                    <li>References</li>
                                                </ol>

                                                <h3>3.1 Title</h3>
                                                <p>The title should be a concise and informative description of the work that accurately reflects the main
                                                    scope and content of the paper. It should be no more than 12 words in length. Abbreviations and formulas
                                                    should be avoided where possible.</p>

                                                <h3>3.2 Author Information</h3>
                                                <ul>
                                                    <li>The name(s) of the author(s)</li>
                                                    <li>The affiliation(s) of the author(s), i.e. institution, (department), city, (state), country</li>
                                                    <li>A clear indication and an active e-mail address of the corresponding author</li>
                                                    <li>If available, the 16-digit ORCID of the author(s). If the address information is provided with the
                                                        affiliation(s), it will also be published.</li>
                                                </ul>
                                                <p>For authors that are (temporarily) unaffiliated we will only capture their city and country of residence,
                                                    not their e-mail address unless specifically requested.</p>

                                                <h3>3.3 Abstract</h3>
                                                <p>The abstract should state briefly the purpose of the research, design/methodology/approach, the main
                                                    results and major conclusions. It should not exceed 350 words. The abstract should not contain any
                                                    undefined abbreviations or unspecified references.</p>

                                                <h3>3.4 Keywords</h3>
                                                <p>The author should provide 4 to 6 keywords which can be used for indexing purposes.</p>

                                                <h3>3.5 Introduction</h3>
                                                <p>This section should be concise and define the background and significance of the research by considering the relevant literature, particularly the most recent publications. When preparing the introduction, please bear in mind that some readers will not be experts in your field of research.</p>

                                                <h3>3.6 Literature Review</h3>
                                                <p>This section is dedicated to the significant literature resources that contributed to the research. The author should survey scholarly articles, books and other sources relevant to the area of research, providing a description, summary, and critical evaluation of each work.
                                                </p>

                                                <h3>3.7 Methodology</h3>
                                                <p>This section should contain detailed information about the procedures and steps followed in the study. It can be divided into subsections if several methods are described.
                                                </p>

                                                <h3>3.8 Results/Findings</h3>
                                                <p>This section is a comparative or descriptive analysis of the study based on the results/findings, previous literature, etc. The results should be offered in a logical sequence, given the most important findings first and addressing the stated objectives of the study. The author should deal only with new or important aspects of the results obtained. The relevance of the findings in the context of existing literature or contemporary practice should be addressed as well.</p>

                                                <h3>3.9 Conclusion</h3>
                                                <p>The author should clearly explain the important conclusions of the research highlighting their significance and relevance.</p>

                                                <h3>3.10 Statements and Declarations</h3>
                                                    <ol type="a">
                                                        <li>Funding: Please add: “This research received no external funding” or “This research was funded by name of funder, grant number XXX” and “The APC was funded by XXX”.</li>
                                                        <li>Conflicts of Interest: Declare conflicts of interest or state “The authors declare no conflict of interest.”</li>
                                                        <li>Acknowledgments: Acknowledgments of people, grants, funds, etc. can be mentioned. The names of funding organizations should be written in full.</li>
                                                    </ol>

                                                <h3>3.11 References</h3>
                                                <p>It must be relevant and up-to-date. References used in the paper should follow the APA style and be carefully checked for accuracy and consistency. Please ensure that every reference cited in the text is also present in the reference list and vice versa.
                                                </p>

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