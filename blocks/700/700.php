<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>700</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/700.less', 'css/700.css');
        ?>

        <link href="css/700.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-700">
            <div class="container wrapper-footer-container">
                <div class="row">
                    <div class="col-lg-12>">
                        <div class="footer">

                            <div class="footer1">
                                <!--Newsletter Style One-->
                                <div class="newsletter-style-one" style="background-image:url(image/newsletter-bg.png);">
                                    <div class="auto-container">
                                        <div class="sec-title-two">
                                            <h2>Signup for our Newsletter</h2>
                                        </div>
                                        <div class="newsletter-form">
                                            <form method="post" action="#">
                                                <div class="row clearfix">
                                                    <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12">
                                                        <div class="row clearfix">
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="text" name="text" value="" placeholder="Your Name" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="email" name="email" value="" placeholder="Your Email" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn-style-three theme-btn">SUBSCRIBE</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="footer2">
                                <!--Main Footer-->
                                <footer class="main-footer">
                                    <!--Footer Upper-->
                                    <div class="footer-upper">
                                        <div class="auto-container">
                                            <div class="row clearfix">
                                                <!--Two 4th column-->
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-7 col-sm-6 col-xs-12 column">
                                                            <div class="footer-widget logo-widget">
                                                                <div class="logo">
                                                                    <a href="#">
                                                                        <img src="image/logo-2.png" class="img-responsive" alt="" class="img-responsive">
                                                                    </a>
                                                                </div>
                                                                <div class="text">
                                                                    The year is and launches the last of that americas 
                                                                    deep space probes and we will our our way make all come true.
                                                                </div>
                                                                <ul class="contact-info">
                                                                    <li>
                                                                        <span class="icon fa fa-map-marker">
                                                                        </span> 3A07, Serif St, Orleans, USA-170A
                                                                    </li>
                                                                    <li>
                                                                        <span class="icon fa fa-phone">
                                                                        </span> +1 - 000 - 8990 - 1560
                                                                    </li>
                                                                    <li>
                                                                        <span class="icon fa fa-envelope-o">
                                                                        </span> support@domain.com
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!--Footer Column-->
                                                        <div class="col-lg-5 col-sm-6 col-xs-12 column">
                                                            <div class="sec-title-three">
                                                                <h2>Usefull Links</h2>
                                                            </div>
                                                            <div class="footer-widget links-widget">
                                                                <ul>
                                                                    <li><a href="#">Agriculture Processing</a></li>
                                                                    <li><a href="#">Chemical Research</a></li>
                                                                    <li><a href="#">Metal Engineering</a></li>
                                                                    <li><a href="#">Mechanical Engineering</a></li>
                                                                    <li><a href="#">Petroleum & Gas</a></li>
                                                                    <li><a href="#">Power & Energy</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Two 4th column End-->
                                                <!--Two 4th column-->
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="row clearfix">
                                                        <!--Footer Column-->
                                                        <div class="col-lg-6 col-sm-6 col-xs-12 column">
                                                            <div class="footer-widget twitter-widget">
                                                                <div class="sec-title-three">
                                                                    <h2>Twitter Feed</h2>
                                                                </div>
                                                                <div class="widget-content">
                                                                    <div class="feed">
                                                                        <div class="text">
                                                                            <span class="icon fa fa-twitter"></span> @
                                                                            <h4 class="author-title">Roffell</h4>
                                                                            this year is and launches the last of that deep : paragraph.co.in<br>
                                                                            <a href="#">about a month</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="feed">
                                                                        <div class="text"><span class="icon fa fa-twitter"></span> @
                                                                            <h4 class="author-title">Markel</h4>
                                                                            this year is and launches the last of that deep time to light the lights poster : abstract.co.in<br>
                                                                            <a href="#">about a month</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Footer Column-->
                                                        <div class="col-md-6 col-sm-6 col-xs-12 column">
                                                            <div class="footer-widget gallery-widget">
                                                                <div class="sec-title-three">
                                                                    <h2>Flickr Photos</h2>
                                                                </div>
                                                                <div class="clearfix">
                                                                    <figure class="image">
                                                                        <a href="image/footer-gallery-1.jpg" title="">
                                                                            <img src="image/footer-gallery-1.jpg" alt="" class="img-responsive">
                                                                        </a>
                                                                    </figure>
                                                                    <figure class="image">
                                                                        <a href="image/footer-gallery-2.jpg" title="">
                                                                            <img src="image/footer-gallery-2.jpg" alt="" class="img-responsive">
                                                                        </a>
                                                                    </figure>
                                                                    <figure class="image">
                                                                        <a href="image/footer-gallery-3.jpg" title="">
                                                                            <img src="image/footer-gallery-3.jpg" alt="" class="img-responsive">
                                                                        </a>
                                                                    </figure>
                                                                    <figure class="image">
                                                                        <a href="image/footer-gallery-4.jpg" title="">
                                                                            <img src="image/footer-gallery-4.jpg" alt="" class="img-responsive">
                                                                        </a>
                                                                    </figure>
                                                                    <figure class="image">
                                                                        <a href="image/footer-gallery-5.jpg" title="">
                                                                            <img src="image/footer-gallery-5.jpg" alt="" class="img-responsive">
                                                                        </a>
                                                                    </figure>
                                                                    <figure class="image">
                                                                        <a href="image/footer-gallery-6.jpg" title="">
                                                                            <img src="image/footer-gallery-6.jpg" alt="" class="img-responsive">
                                                                        </a>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Two 4th column End-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--Footer Bottom-->
                                    <div class="footer-bottom">
                                        <div class="auto-container">
                                            <div class="row clearfix">
                                                <!--Copyright-->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="copyright">
                                                        <p>
                                                            Copyrights &copy; 2016 Brighton. All Rights Reserved.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <ul class="footer-bottom-social">
                                                        <li style="margin-right: -32px;">
                                                            <a href="#">
                                                                <span class="fa fa-facebook-f"></span>
                                                            </a>
                                                        </li>
                                                        <li style="margin-right: -32px;">
                                                            <a href="#"><span class="fa fa-twitter"></span>
                                                            </a>
                                                        </li>
                                                        <li style="margin-right: -32px;">
                                                            <a href="#">
                                                                <span class="fa fa-google-plus"></span>
                                                            </a>
                                                        </li>
                                                        <li style="margin-right: -32px;">
                                                            <a href="#">
                                                                <span class="fa fa-linkedin"></span>
                                                            </a></li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="fa fa-flickr"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </footer>
                            </div>

                            <div class="footer3">
                                <div class="scroll-to-top" data-target=".main-footer" style="display: block;">
                                    <span class="icon fa fa-long-arrow-up"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>