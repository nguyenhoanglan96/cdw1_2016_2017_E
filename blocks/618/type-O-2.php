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
        $less->compileFile('less/slide-show.less', 'css/slide-show.css');
        ?>
        <link href="css/slide-show.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-slide">
            <header>
                <div class="slideshow slide-width">
                    <div class="slide-one">
                        <div id="img">
                            <div id="slide1">
                                <a id="img1" class="active-img" href="#">
                                    <img src="images/home-slide-1.jpg" alt=""/>
                                </a>
                            </div>
                            <div id="slide2">
                                <a id="img2" href="#">
                                    <img src="images/home-slide-2.jpg" alt=""/>
                                </a>
                            </div>
                            <div id="slide3">
                                <a id="img3" href="#">
                                    <img src="images/home-slide-3.jpg" alt=""/>
                                </a>
                            </div> 
                        </div>
                    </div>
                </div><!--ens-slide-show-->
                <div class="Slide-show-content container content_wrap">
                    <div class="content-1">
                        <div class="content-icon">
                            <div class="fa fa-flask icon"></div>
                            <h6 class="title">Pharmaceuticals</h6>
                            <h6 class="content">A Full Range of Services to Support Drug…</h6>
                        </div>
                    </div>
                    <div class="content-2">
                        <div class="content-icon">
                            <div class="fa fa-flask icon"></div>
                            <h6 class="title">Biopharmaceuticals</h6>
                            <h6 class="content">Cost Effective & Rapid Labelling…</h6>
                        </div>
                    </div>
                    <div class="content-3">
                        <div class="content-icon">
                            <div class="fa fa-flask icon"></div>
                            <h6 class="title">Chemicals</h6>
                            <h6 class="content">Risk Assessment for Chemicals Our…</h6>
                        </div>
                    </div>
                </div><!--end-Slide-Show-Content-->
            </header>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/slideshow.js"></script>
</html>