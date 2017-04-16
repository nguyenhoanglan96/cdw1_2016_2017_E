<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

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
        $less->compileFile('less/645.less', 'css/645.css');
        ?>
        <link href="css/645.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-645">
            <div class="container">
                <div class="row">
                    <footer id="footer">
                        <!-- 960 Container -->
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <!-- About -->
                                <div class="columns">
                                    <img id="logo-footer" src="images/logo-footer.png" alt="" />
                                    <p>Morbi gravida imperdiet rutrum fusce mattis, lectus consequat vestibulum, duinibh fermentum ligula.</p>
                                </div>
                            </div>
                            <!-- Contact Details -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="columns">
                                    <h4>Contact Details</h4>
                                    <ul class="contact-details-alt">
                                        <li><i class="halflings white map-marker"></i> <p><strong>Address:</strong> 123 Seward Street, Oklahoma City, USA</p></li>
                                        <li><i class="halflings white user"></i> <p><strong>Phone:</strong> +48 880 440 110</p></li>
                                        <li><i class="halflings white envelope"></i><p><strong>Email:</strong> <a href="#">mail@example.com</a></p></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Photo Stream -->
                            <div class="col-md-3 col-sm-6 col-xs-12 ">
                                <div class="columns">
                                    <h4>Photo Stream</h4>
                                    <div class="flickr-widget">
                                        <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=72179079@N00">
                                        </script>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Twitter -->
                            <div class="col-md-3 col-sm-6 col-xs-12 ">
                                <div class="columns">
                                    <h4>Twitter</h4>
                                    <ul id="twitter">
                                        <li>
                                            <span>
                                                WPVoyager - The Best Travel Blog Theme for WordPress
                                                <a href="#">http://t.co/wh0f9rS1Xn</a> przez@
                                                <a href="#">Vasterad</a>
                                            </span>
                                            <br>
                                            <b>
                                                <a href="#">459 days ago</a>
                                            </b>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- Footer / End -->
                    <!-- Footer Bottom / Start  -->
                    <footer id="footer-bottom">
                        <!-- 960 Container -->
                        <div class="container">
                            <!-- Copyrights -->
                            <div class="eight columns">
                                <div class="copyright">
                                    © Copyright 2015 by <a href="#">Nevia</a>. All Rights Reserved.
                                </div>
                            </div>
                            <!-- Menu -->
                            <div class="eight columns">
                                <nav id="sub-menu">
                                    <ul>
                                        <li><a href="#">FAQ's</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- 960 Container / End -->
                    </footer>
                </div>
            </div>
        </div>
    </body>

</html>