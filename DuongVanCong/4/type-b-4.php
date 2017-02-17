<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-b-4.less', 'css/type-b-4.css');
        ?>
        <link href="css/type-b-4.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-b-4">
            <section class="hg_section bg-white p-0">
                <div class="full_width">
                    <div class="row gutter-lg">
                        <div class="col-md-5 col-sm-12">
                            <!-- Media container style 2 element - with custom height(.h-615) -->
                            <div class="media-container style2 h-615">
                                <!-- Background -->
                                <div class="kl-bg-source">
                                    <!-- Background image -->
                                    <div class="kl-bg-source__bgimage" style="background-image:url(images/home-brochure.jpg); background-repeat:no-repeat; background-attachment:scroll; background-position-x:center; background-position-y:top; background-size:cover">
                                    </div>
                                    <!--/ Background image -->

                                    <!-- Gradient overlay -->
                                    <div class="kl-bg-source__overlay" style="background:rgba(137,173,178,0.3); background: -moz-linear-gradient(left, rgba(137,173,178,0.3) 0%, rgba(53,53,53,0.65) 100%); background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(137,173,178,0.3)), color-stop(100%,rgba(53,53,53,0.65))); background: -webkit-linear-gradient(left, rgba(137,173,178,0.3) 0%,rgba(53,53,53,0.65) 100%); background: -o-linear-gradient(left, rgba(137,173,178,0.3) 0%,rgba(53,53,53,0.65) 100%); background: -ms-linear-gradient(left, rgba(137,173,178,0.3) 0%,rgba(53,53,53,0.65) 100%); background: linear-gradient(to right, rgba(137,173,178,0.3) 0%,rgba(53,53,53,0.65) 100%); ">
                                    </div>
                                    <!--/ Gradient overlay -->
                                </div>
                                <!--/ Background -->

                                <!-- media container link button -->
                                <a class="media-container__link media-container__link--btn media-container__link--style-borderanim2 " href="https://www.youtube.com/watch?v=cVt-3vbENOQ" data-lightbox="iframe">
                                    <!-- SVG border -->
                                    <div class="borderanim2-svg">
                                        <!-- svg -->
                                        <svg height="70" width="400" xmlns="http://www.w3.org/2000/svg">
                                        <rect class="borderanim2-svg__shape" height="70" width="400"></rect>
                                        </svg>
                                        <!--/ svg -->

                                        <!-- Title text -->
                                        <span class="media-container__text">KALLYAS TEMPLATE</span>
                                        <!--/ Title text -->
                                    </div>
                                    <!--/ SVG border -->
                                </a>
                                <!--/ media container link button -->
                            </div>
                            <!--/ media-container style2 h-615 -->
                        </div>
                        <!--/ col-md-5 col-sm-12 -->

                        <div class="col-md-7 col-sm-12">
                            <div class="custom_container p-5">
                                <div class="row hg_col_eq_last">
                                    <div class="col-md-12 col-sm-12">
                                        <!-- Title element -->
                                        <div class="kl-title-block clearfix text-left tbk-symbol--line tbk-icon-pos--after-title pbottom-0">
                                            <!-- Title with montserrat font, custom size and line height bold style -->
                                            <h3 class="tbk__title montserrat fs-38 lh-46 fw-bold">TRULY MULTI-PURPOSE <span class="text-custom fw-normal tcolor">&amp;</span> OUTSTANDING</h3>
                                            <!--/ Title with montserrat font, custom size and line height bold style -->

                                            <!-- symbol -->
                                            <span class="tbk__symbol "><span></span></span>
                                            <!--/ symbol -->

                                            <!-- Sub-Title -->
                                            <h4 class="tbk__subtitle fs-18 lh-32 fw-vthin">Dramatically expedite emerging ROI through diverse deliverables. Phosfluorescently integrate covalent portals without cooperative e-services.</h4>
                                            <!--/ Sub-Title -->
                                        </div>
                                        <!--/ Title element -->

                                        <!-- separator -->
                                        <div class="hg_separator style2 clearfix">
                                        </div>
                                        <!--/ separator -->
                                    </div>
                                    <!--/ col-md-12 col-sm-12 -->

                                    <div class="col-md-8 col-sm-8">
                                        <!-- Text box -->
                                        <div class="text_box">
                                            <!-- Description -->
                                            <p>
                                                Credibly build out-of-the-box functionalities before strategic expertise. Competently reconceptualize resource maximizing relationships via business synergy.
                                            </p>
                                            <p>
                                                Initiate user friendly content with low-risk high-yield human capital.&nbsp;Compellingly redefine 2.0 services via fully tested experiences. Monotonectally plagiarize market-driven alignments for team building.
                                            </p>
                                            <!--/ Description -->
                                        </div>
                                        <!-- Text box -->
                                    </div>
                                    <!--/ col-md-8 col-sm-8 -->

                                    <div class="col-md-4 col-sm-4">
                                        <!-- Video box pop-up (adbox) element -->
                                        <div class="adbox video">
                                            <!-- Image -->
                                            <img src="images/sleepy1_1x-400x300.jpg" alt="" title="">
                                            <!-- Image -->

                                            <!-- Video trigger wrapper -->
                                            <div class="video_trigger_wrapper">
                                                <!-- Video box container -->
                                                <div class="adbox_container">
                                                    <!-- Video link -->
                                                    <a class="playVideo" data-lightbox="iframe" href="https://www.youtube.com/watch?v=cVt-3vbENOQ"></a>
                                                </div>
                                                <!--/ Video trigger container -->
                                            </div>
                                            <!--/ Video box wrapper -->
                                        </div>
                                        <!--/ Video box pop-up (adbox) element -->
                                    </div>
                                    <!--/ col-md-4 col-sm-4 -->
                                </div>
                                <!--/ row hg_col_eq_last -->
                            </div>
                        </div>
                        <!--/ col-md-7 col-sm-12 -->
                    </div>
                    <!--/ row gutter-lg -->
                </div>
                <!--/ full_width -->
            </section>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>