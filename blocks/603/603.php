<!DOCTYPE html>

<html>

<head>
    <title>603</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/603.less', 'css/603.css');
        ?>
        <link href="css/603.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
</head>

<body>
    <div class="type-603">
        <div class="container-fluid gutter-lg-wrapper">
            <div class="row">
                <!------------Image and title--------------->
                <div class="col-md-5 col-sm-12 title-img">
                    <div class="media-container style2 h-615">
                        <div class="kl-bg-source">
                            <div class="kl-bg-source__bgimage" style="background-image:url(images/home-brochure.jpg); background-repeat:no-repeat; background-attachment:scroll; background-position-x:center; background-position-y:top; background-size:cover">
                            </div>
                            <div class="kl-bg-source__overlay" style="background:rgba(137,173,178,0.3); background: -moz-linear-gradient(left, rgba(137,173,178,0.3) 0%, rgba(53,53,53,0.65) 100%); background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(137,173,178,0.3)), color-stop(100%,rgba(53,53,53,0.65))); background: -webkit-linear-gradient(left, rgba(137,173,178,0.3) 0%,rgba(53,53,53,0.65) 100%); background: -o-linear-gradient(left, rgba(137,173,178,0.3) 0%,rgba(53,53,53,0.65) 100%); background: -ms-linear-gradient(left, rgba(137,173,178,0.3) 0%,rgba(53,53,53,0.65) 100%); background: linear-gradient(to right, rgba(137,173,178,0.3) 0%,rgba(53,53,53,0.65) 100%);">
                            </div>
                        </div>
                        <a class="media-container__link--btn media-container__link--style-borderanim2" href="#" data-lightbox="iframe">
                            <div class="borderanim2-svg">
                                <svg height="70" width="400" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="borderanim2-svg__shape" height="70" width="400"></rect>
                                </svg>
                                <span class="media-container__text">KALLYAS TEMPLATE</span>
                            </div>
                        </a>
                    </div>
                </div>
                <!------------/End Image and title--------------->

                <!-----------LIST Contact--------------->
                <div class="col-md-7 col-sm-12 contact-title">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <!-- Title element -->
                            <div class="kl-title-block clearfix text-left tbk-symbol--line tbk-icon-pos--after-title pbottom-0">
                                <!-- Title with montserrat font, custom size and line height bold style -->
                                <h3 class="tbk__title fs-38 lh-46 fw-bold">
                                        TRULY MULTI-PURPOSE 
                                        <span class=" fw-normal tcolor">&amp;
                                        </span> OUTSTANDING
                                    </h3>
                                <h4 class="tbk__subtitle fs-18 lh-32 fw-vthin">
                                        Dramatically expedite emerging ROI through diverse deliverables. 
                                        Phosfluorescently integrate covalent portals without cooperative e-services.
                                    </h4>
                            </div>
                            <div class="hg_separator style2 clearfix">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="text_box">
                                <p>
                                    Credibly build out-of-the-box functionalities before strategic expertise. Competently reconceptualize resource maximizing relationships via business synergy.
                                </p>
                                <p>
                                    Initiate user friendly content with low-risk high-yield human capital. &nbsp;Compellingly redefine 2.0 services via fully tested experiences. Monotonectally plagiarize market-driven alignments for team building.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="adbox video">
                                <img src="images/sleepy1_1x-400x300.jpg" alt="" title="">
                                <div class="video_trigger_wrapper">
                                    <div class="adbox_container">
                                        <a class="playVideo" data-lightbox="iframe" href="#"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-----------/End LIST Contact--------------->
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>