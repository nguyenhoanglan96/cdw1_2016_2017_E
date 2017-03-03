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
        $less->compileFile('less/618.less', 'css/618.css');
        ?>
        <link href="css/618.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-slide">
            <header>
                <div class="slideshow slide-width">
                    <section class="slide-one">
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
                    </section>
                </div><!--ens-618-->
                <div class="Slide-show-content container content_wrap">
                    <div class="content-1">
                        <aside class="content-icon">
                            <div class="fa fa-flask icon"></div>
                            <h6 class="title">Pharmaceuticals</h6>
                            <h6 class="content">A Full Range of Services to Support Drug…</h6>
                        </aside>
                    </div>
                    <div class="content-2">
                        <aside class="content-icon">
                            <div class="fa fa-flask icon"></div>
                            <h6 class="title">Biopharmaceuticals</h6>
                            <h6 class="content">Cost Effective & Rapid Labelling…</h6>
                        </aside>
                    </div>
                    <div class="content-3">
                        <aside class="content-icon">
                            <div class="fa fa-flask icon"></div>
                            <h6 class="title">Chemicals</h6>
                            <h6 class="content">Risk Assessment for Chemicals Our…</h6>
                        </aside>
                    </div>
                </div><!--end-Slide-Show-Content-->
            </header>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/slideshow.js"></script>
</html>