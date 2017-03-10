<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Gas &amp; Oil Industry HTML Template">
    <meta name="author" content="Gautam Thapar">

    <title>Offshore &#8211; Responsive Gas &amp; Oil Industry HTML Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="slider/owl-carousel/owl.carousel.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="slider/owl-carousel/owl.theme.css">

    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-5.less', 'css/type-5.css');
        ?>

        <link href="css/type-5.css" rel="stylesheet" type="text/css" />
</head>

<body>
        <div class="clearfix" style="margin-top: 150px;"></div>
        <div class="type_footer">
            <footer>

                <div class="footer">
                    <div class="container">
                        <!-- Prefooter Section -->
                        <div class="row pre-footer eq-columns">
                            <div class="widget widget-count-3 col-md-4 col-sm-12 col-xs-6">
                                <div class="contact-box">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <div class="contact-details">
                                        <h4 class="pre-footer-title">HEAD OFFICE</h4>
                                        <p>PO Box 16122, Collins Street West,
                                            <br> Victoria 8007 Australia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-count-3 col-md-4 col-sm-12 col-xs-6">
                                <div class="contact-box">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div class="contact-details">
                                        <h4 class="pre-footer-title">CALL US</h4>
                                        <p>SUPPORT: 1800 425 4646
                                            <br> OFFICE: +1 (253) 2587 220</p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-count-3 col-md-4 col-sm-12 col-xs-6">
                                <div class="contact-box">
                                    <i class="fa fa-file-audio-o" aria-hidden="true"></i>
                                    <div class="contact-details">
                                        <h4 class="pre-footer-title">EMAIL US</h4>
                                        <p>hello@offshoreindustry.com
                                            <br> sales@offshoreindustry.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Prefooter Section -->

                        <!-- Footer widgets -->
                        <div class="row widgets footer-widgets">
                            <div class="widget widget-count-4 col-md-3 col-sm-6">
                                <div class="textwidget">
                                    <div class="about-txt"><img src="images/footer-logo.png" alt="logo"></div>
                                    <p></p>
                                    <p>Collaboratively deliver partnerships progressive alignments. Assertively premier supply chains before emerging solutions. Monetize high-payoff action items before wireless internal or "organic" sources exceptional action items. </p>

                                    <div class="widgets-social">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-count-4 col-md-3 col-sm-6">
                                <h2 class="widget-title">Quick Links</h2>
                                <ul>
                                    <li class="cat-item cat-item-2"><a href="#">Careers</a>
                                    </li>
                                    <li class="cat-item cat-item-3"><a href="#">Environment</a>
                                    </li>
                                    <li class="cat-item cat-item-4"><a href="#">Marketing &amp; Sales</a>
                                    </li>
                                    <li class="cat-item cat-item-6"><a href="#">Technology</a>
                                    </li>
                                    <li class="cat-item cat-item-7"><a href="#">The Company</a>
                                    </li>
                                    <li class="cat-item cat-item-8"><a href="#">Transportation</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-count-4 col-md-3 col-sm-6">
                                <h2 class="widget-title">Our Services</h2>
                                <div class="textwidget">
                                    <ul>
                                        <li> <a href="#"> Chemicals &amp; Commercial Fuels </a> </li>
                                        <li> <a href="#"> Aviation Fuels &amp; Marine Fuels </a> </li>
                                        <li> <a href="#"> Lubricants Services </a> </li>
                                        <li> <a href="#"> Liquified Petrolium Gas </a> </li>
                                        <li> <a href="#"> Shell Sulphur, Trading &amp; Supply </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget widget-count-4 col-md-3 col-sm-6">
                                <div class="newsletter widget">
                                    <h2 class="widget-title">Newsletter</h2>
                                    <p>Subscribe to our newsletters to receive latest news and updates.</p>
                                    <form id="offshore-mc-form" novalidate="true">
                                        <div class="form-group">
                                            <input type="email" id="mc-email" name="EMAIL" placeholder="Enter your email">
                                        </div>
                                        <button type="submit" class="btn btn-block">Subscribe Now!</button>
                                    </form>
                                    <p id="offshore-mc-result" style="display:none;"></p>
                                    <a id="offshore-mc-try" href="javascript:void(0)" style="display:none;">Try again</a>
                                </div>

                            </div>
                        </div>
                        <!-- Footer widgets -->
                    </div>
                </div>

                <!-- Copyright -->
                <div class="copyright">
                    <div class="container">
                        <div class="row copyright-bar">

                            <div class="col-md-6">
                                <div class="widget footer-widgets footer-bottom-widgets">
                                    <div class="textwidget">Copyright © 2016 Offshore Industries. All rights reserved.</div>
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="widget footer-widgets footer-bottom-widgets">
                                    <div class="menu-footer-bottom-container">
                                        <ul id="menu-footer-bottom" class="menu">
                                            <li id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156"><a href="#">Terms of use</a></li>
                                            <li id="menu-item-157" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-157"><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget footer-widgets footer-bottom-widgets">
                                    <div class="textwidget"><span> | </span> Made with <i class="fa fa-heart" aria-hidden="true"></i> by Surjith S M &amp; Gautam Thapar</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- back-to-top link -->
            <a href="#" class="cd-top cd-is-visible cd-fade-out">Top</a>
        </div>
    </div>
</body>

</html>