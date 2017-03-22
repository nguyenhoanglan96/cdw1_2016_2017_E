<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-g-3.less', 'css/type-g-3.css');
        ?>
        <link href="css/type-g-3.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-g-3">  
            <div class="container">
                <div class="col-lg-9">
                    <div class="row">

                        <div id="first-slider">
                            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <!-- Item 1 -->
                                    <div class="item active slide1">
                                        <img src="images/img/s1_1.jpg" alt=""/>
                                        <div class="caption light1 top-right">
                                            <h2 class="heading permanent">Customizable Theme</h2>
                                            <p>You can change colors of almost every element</p>
                                            <p>You have never seen so many options</p>
                                        </div>                                 
                                    </div> 
                                    <!-- Item 2 -->
                                    <div class="item slide2">
                                        <img src="images/img/s1_2.jpg" alt=""/>
                                        <div class="caption dark2">
                                            <h2 class="heading permanent">Responsive</h2>
                                            <p class="permanent">This theme can adapt to any mobile screen resolution</p>
                                        </div>
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="item slide3">
                                        <img src="images/img/s1_3.jpg" alt=""/>
                                        <a class="caption dark feature-icon-hover" href="#" title="Click to see the product">
                                            <h2 class="hide-below-960" style="color: #fff; font-size: 35px; line-height: 60px; padding-right: 8px;">Super Promo</h2>
                                            <span class="ic ic-lg ic-char ib ib-size-xl"></span>
                                        </a>

                                    </div>
                                    <!-- Item 4 -->
                                    <div class="item slide4">
                                        <img src="images/img/s1_4.png" alt=""/>

                                    </div>
                                </div>
                                <!-- End Item 4 -->

                            </div>
                            <!-- End Wrapper for slides-->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="the-slideshow-banners slideshow-banners grid12-3 no-right-gutter hide-below-768">
                        <a class="banner fade-on-hover" href="#" title="Go to ThemeForest marketplace to buy this theme" style="opacity: 1;">
                            <img src="images/img/01.jpg" alt="Buy This Theme">
                            <div class="caption light1 full-width right main-font">
                                <p class="right">Buy This Theme</p>
                            </div>
                        </a>

                        <a class="banner fade-on-hover" href="http://ultimo.infortis-themes.com/demo/select-demo/" title="Click to see a list of all demos of this  Magento theme" style="opacity: 1;">
                            <img src="images/img/01.jpg" alt="List of all demos">
                        </a>

                        <a class="banner fade-on-hover" href="http://ultimo.infortis-themes.com/demo/default/downloadable/ebooks.html" title="Sell downloads in your Magento store (software, e-books, music, any digital products)" style="opacity: 1;">
                            <img src="images/img/01.jpg" alt="Sell Downloads">
                        </a>
                    </div>
                </div>
            </div>
        </div>    
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>