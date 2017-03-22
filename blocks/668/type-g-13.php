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
        $less->compileFile('less/type-g-13.less', 'css/type-g-13.css');
        ?>
        <link href="css/type-g-13.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-g-13">  
            <div class="container">
                <div class="row">
                    <div class="footer-secondary-container section-container">
                        <div class="footer-secondary footer container">
                            <div class="inner-container">

                                <div class="clearer">
                                    <div class="grid12-12">	<div class="std"><div class="grid12-9 no-gutter">

                                                <div class="grid12-3">
                                                    <div class="collapsible mobile-collapsible">
                                                        <h6 class="block-title heading">Questions?</h6>
                                                        <div class="block-content">

                                                            <ul class="bullet">
                                                                <li><a href="#">Terms</a></li>
                                                                <li><a href="#">Conditions</a></li>
                                                                <li><a href="#">About us</a></li>
                                                                <li><a href="#">Example</a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="grid12-3">
                                                    <div class="collapsible mobile-collapsible">
                                                        <h6 class="block-title heading">Shipping</h6>
                                                        <div class="block-content">

                                                            <ul class="bullet">
                                                                <li><a href="#">Delivery</a></li>
                                                                <li><a href="#">Track your order</a></li>
                                                                <li><a href="#">Buy gift cards</a></li>
                                                                <li><a href="#">Returns</a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="grid12-3">
                                                    <div class="collapsible mobile-collapsible">
                                                        <h6 class="block-title heading">About Us</h6>
                                                        <div class="block-content">

                                                            <ul class="bullet">
                                                                <li><a href="#">Responsive</a></li>
                                                                <li><a href="#">Magento themes</a></li>
                                                                <li><a href="#">E-commerce</a></li>
                                                                <li><a href="#">The company</a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="grid12-3">
                                                    <div class="collapsible mobile-collapsible">
                                                        <h6 class="block-title heading">News</h6>
                                                        <div class="block-content">

                                                            <ul class="bullet">
                                                                <li><a href="#">What's new</a></li>
                                                                <li><a href="#">Products</a></li>
                                                                <li><a href="#">Magento template</a></li>
                                                                <li><a href="#">Our sites</a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="grid12-3 no-right-gutter">
                                                <div class="collapsible mobile-collapsible">
                                                    <h6 class="block-title heading">Additional Info</h6>
                                                    <div class="block-content">

                                                        <div class="feature indent first feature-icon-hover">
                                                            <span class="ic ic-lg ic-pin ib" style="background-color: lightskyblue;">
                                                                <i class="fa fa-map"></i>
                                                            </span>
                                                            <p class="no-margin">Friends Inc., 90 Bedford St<br>New York, NY 041, USA</p>
                                                        </div>
                                                        <div class="feature indent feature-icon-hover">
                                                            <span class="ic ic-lg ic-twitter ib" style="background-color: lightskyblue;">
                                                                <i class="fa fa-twitter"></i>
                                                            </span>
                                                            <p class="no-margin">Follow us on our<br><a href="#">Twitter</a> account</p>
                                                        </div>
                                                        <br>

                                                    </div>
                                                </div>
                                            </div></div></div>				</div> <!-- end: footer-secondary section -->

                            </div> <!-- end: inner-container -->
                        </div> <!-- end: footer-secondary -->
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>

</html>