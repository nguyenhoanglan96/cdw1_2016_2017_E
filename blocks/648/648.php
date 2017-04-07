<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/648.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/648.less', 'css/648.css');
        ?>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-648">
            <div class="container">
                <div class="row ">
                    <div class=" col-md-9">
                        <div class="slider-banner">
                            <div id="wowslider-container1">
                                <div class="ws_images">
                                    <ul>
                                        <li><img src="images/banner/featured1_6x3.jpg" alt=""/></li>
                                        <li>
                                            <img src="images/banner/featured2_6x3.jpg" alt=""/>
                                        </li>
                                        <li>
                                            <img src="images/banner/featured3_6x3.jpg" alt=""/>
                                        </li>
                                        <li>
                                            <img src="images/banner/featured4_6x3.jpg" alt=""/>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ws_bullets"><div>
                                        <a href="#" >
                                            <img src="images/tooltips/featured1.jpg" alt=""/>
                                            1
                                        </a>
                                        <a href="#" >
                                            <img src="images/tooltips/featured2.jpg" alt=""/>
                                            2
                                        </a>
                                        <a href="#" > <img src="images/tooltips/featured3.jpg" alt=""/>3</a>
                                        <a href="#" ><img src="images/tooltips/featured4.jpg" alt=""/>4</a>
                                    </div>
                                </div>
                            </div>	
                        </div>
                    </div>

                    <div class=" col-md-3 ">
                        <div class="slider-show">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="carousel thin" >
                                        <a class="prev">
                                            <span class="glyphicon glyphicon-chevron-up"></span>
                                        </a>
                                        <div class="window">
                                            <ul>     
                                                <li class="item">
                                                    <img src="images/slider/0.jpg" alt="" />
                                                </li>
                                                <li class="item">
                                                    <img src="images/slider/1.jpg" alt=""/>
                                                </li>
                                                <li class="item">
                                                    <img src="images/slider/2.jpg" alt=""/>
                                                </li>
                                                <li class="item">
                                                    <img src="images/slider/3.jpg" alt=""/>
                                                </li>                                               
                                            </ul>
                                        </div> <!-- .window -->
                                        <a class="next"><span class="glyphicon glyphicon-chevron-down"></span></a>
                                    </div> <!-- .carousel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="js/wowslider.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script src="js/slider.js" type="text/javascript"></script>


</html>