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
        $less->compileFile('less/624.less', 'css/624.css');
        ?>
        <link href="css/624.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-624">
            <!-------Slide text------>
            <div class="container slideshow-footer">
                <div class="row">
                    <div id="carousel" class="carousel slide content" data-ride="carousel">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <span class="icon-twitter">
                                    <i class="fa fa-twitter"></i>
                                </span>
                                <div class="content-main-slideshow-footer">
                                    <a href="#">@science_ancora</a>
                                    <span class="content-footer-slideshow"> 
                                        We are happy to present our new scientific WordPress theme Science Lab! 
                                        Check out all the amazing features and stay tuned for more updates!
                                    </span>
                                </div>
                            </div>
                            <div class="item">
                                <span class="icon-twitter">
                                    <i class="fa fa-twitter"></i>
                                </span>
                                <div class="content-main-slideshow-footer">
                                    <a href="#">@science_ancora</a>
                                    <span class="content-footer-slideshow"> 
                                        In our products you will find a great amount of the most useful and powerful 
                                        components for creating unique and user-friendly websites
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel nav -->
                        <div class="op">
                            <a class="fa fa-chevron-left" href="#carousel" data-slide="prev"></a>
                            <i class="fa fa-circle" id="circle"></i>
                            <a class="fa fa-chevron-right" href="#carousel" data-slide="next"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-------/End Slide text------>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</html>
