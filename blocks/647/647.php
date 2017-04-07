<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/647.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/647.less', 'css/647.css');
        ?>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/menu.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-647">
            <div class="container">
            <div class="header">
                <header>
                    <div class="container cnheader">
                        <div class="row">
                            <div class="logo col-md-6 col-sm-6 col-xs-12 ">
                                <a href="type-3.php">
                                    <img src="images/skin-minimal/logo.png" alt="" />
                                </a>
                            </div>
                            <div class="  col-md-6 col-sm-6 col-xs-12 ">
                                <div class="search">
                                    <form action="http://www.kriesi.at/themes/abundance/" id="searchform" method="get">
                                        <div>
                                            <input type="submit" value="" id="searchsubmit">
                                            <input type="text" id="s" name="s" value="search site">
                                        </div>
                                    </form>
                                    <ul class="social_bookmarks">
                                        <li class="rss"><a href="http://www.kriesi.at/themes/abundance/feed/">RSS</a></li>
                                        <li class="twitter"><a href="http://twitter.com/envato">Twitter</a></li>
                                        <li class="facebook"><a href="http://www.facebook.com/kriesi.at">Twitter</a></li>
                                    </ul>
                                </div>
                                <!-- end searchform-->
                            </div>
                        </div>
                </header>

            </div>
            <div class="menu" style="background-color: #2c3547"  >
                <div class="login-shopping">
                    <ul>
                        <li>
                            <a href="http://www.kriesi.at/themes/abundance/my-account/">Log In</a>
                        </li>
                        <li>
                            <a href="http://www.kriesi.at/themes/abundance/cart/">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="http://www.kriesi.at/themes/abundance/checkout/">Checkout</a>
                        </li>
                    </ul>
                </div>
                <div class="container">
                    <nav class="navbar navbar-inverse">
                      
                            <button class="navbar-toggle " type="button" data-toggle="collapse" data-target=".js-navbar-collapse" style="background-color: #2c3547">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        
                        
                        <div class="collapse navbar-collapse js-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <!--HOME-->
                                <li class="dropdown mega-dropdown">
                                    <a href="#" data-toggle="dropdown" data-toggle="dropdown">Home <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-caret-right"> Fade Slider</i></a></li>
                                        <li><a href="#"><i class="fa fa-caret-right"> Aviacordion</i></a></li>
                                        <li><a href="#"><i class="fa fa-caret-right"> Piecemaker</i></a></li>
                                        <li><a href="#"><i class="fa fa-caret-right"> Caption Slider</i></a></li>
                                    </ul>
                                </li>
                                <!--BLOG-->
                                <li class="dropdown ">
                                    <a href="#" data-toggle="dropdown">Blog<span class="caret"></span></a>
                                    <ul class="dropdown-menu blog">
                                       <li><a href="#"><i class="fa fa-caret-right"> Blog (default) </i></a></li>
                                        <li><a href="#"><i class="fa fa-caret-right"> Blog (Dual Sidebar, medium <br> preview images)</i></a></li>
                                        <li><a href="#"><i class="fa fa-caret-right"> Blog (left Sidebar, small  <br>preview images)</i></a></li>
                                    </ul>
                                </li>
                                <!--SHOP-->
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<span class="caret"></span></a>
                                    <ul class="dropdown-menu mega-dropdown-menu">
                                        <li class="col-sm-3 fix-col">
                                            <h4 class="cufon_headings">–</h4>
                                            <a href="http://www.kriesi.at/themes/abundance/product-category/photography/">
                                                <img src="images/menu/featured2-210x100.jpg" alt="" />
                                                <span class="image_overlay_effect external_image">
                                                    <span class="image_overlay_effect_inside"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="col-sm-3 fix-col">
                                            <h4 class="cufon_headings">–</h4>
                                            <a href="http://www.kriesi.at/themes/abundance/product-category/photography/">
                                                <img src="images/menu/featured1-210x100.jpg" alt="" />
                                                <span class="image_overlay_effect external_image">
                                                    <span class="image_overlay_effect_inside"></span>
                                                </span>
                                            </a>

                                        </li>
                                        <li class="col-sm-3 fix-col">
                                            <h4 class="cufon_headings">–</h4>
                                            <a href="http://www.kriesi.at/themes/abundance/product-category/photography/">
                                                <img src="images/menu/featured3-210x100.jpg" alt="" />
                                                <span class="image_overlay_effect external_image">
                                                    <span class="image_overlay_effect_inside"></span>

                                                </span>
                                            </a>

                                        </li>
                                        <li class="col-sm-3 fix-col">
                                            <h4 class="cufon_headings">–</h4>
                                            <a href="http://www.kriesi.at/themes/abundance/product-category/photography/">
                                                <img src="images/menu/featured_4-210x100.jpg" alt="" />
                                                <span class="image_overlay_effect external_image">
                                                    <span class="image_overlay_effect_inside"></span>

                                                </span>
                                            </a>

                                        </li>
                                        <li class="avia_mega_hr"></li>
                                        <li class="col-sm-3 ">
                                            <h4 class="cufon_headings">Shop</h4>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-caret-right"> Shop Overview – All Products</i></a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"> Everything reduced: what’s hot?</i></a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"> Small and Large gifts for her: Jewelry</i></a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"> Photographers unite!</i></a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"> Latest fashion and clothing trends</i></a></li>

                                            </ul>
                                        </li>
                                        <li class="col-sm-3 ">
                                            <h4 class="cufon_headings">Blog Categories</h4>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-caret-right"> Latest News</i></a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"> Featured News</i></a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"> Breaking! And really hot!</i></a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"> Latest Technology Trends</i></a></li>

                                            </ul>
                                        </li>
                                        <li class="col-sm-3 ">
                                            <h4 class="cufon_headings">Product Categories</h4>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-caret-right"> Fashion</i></a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"> Photography</i></a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"> For Sale</i></a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"> Jewelry</i></a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3 ">
                                            <h4 class="cufon_headings">Account Links</h4>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-caret-right"> My Account</i></a></li>
                                                <li><a href="#">Photography</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"> Cart</i></a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"> Checkout</i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!--Template-->
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Templates<span class="caret"></span></a>
                                    <ul class="dropdown-menu mega-dropdown-menu">
                                        <li class="col-sm-3">
                                            <h4 class="cufon_headings">Page Templates</h4>
                                            <ul>
                                                <li><a href="#">Sample Page</a></li>
                                                <li><a href="#">Page: Dual Sidebar</a></li>
                                                <li><a href="#">Page: Fullwidth</a></li>
                                                <li><a href="#">Page: Sidebar Left</a></li>
                                                <li><a href="#">Page: Sidebar Right</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <h4 class="cufon_headings">Interesting Stuff</h4>
                                            <ul>
                                                <li><a href="#">Archive/Sitemap Template</a></li>
                                                <li><a href="#">Shortcodes</a></li>
                                                <li><a href="#">Video Tutorials</a></li>
                                                <li><a href="#">Gallery</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <h4 class="cufon_headings">Why Mega Menus?</h4>
                                            <ul>
                                                <li>
                                                    For bigger sites with many features, regular drop-down menus typically hide most of the user’s options. As a result, you can’t visually compare all your choices; you have to rely on short-term memory.
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <h4 class="cufon_headings">So what?</h4>
                                            <ul>
                                                <li>
                                                    People have enough on their minds, and messing with short-term memory reduces their ability to accomplish their tasks on your site. Mega-drop-downs let you visually emphasize relationships among items which helps users understand their choices.
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!--Contact-->
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
                                </li>
                            </ul>
                            <!----->
                            <ul class="nav navbar-nav navbar-right">
                                <li class="cart_dropdown_first">
                                    <a class="cart_dropdown_link">Cart</a>
                                    <span class="cart_subtotal">$28.00</span>
                                </li>
                            </ul>
                        </div><!-- /.nav-collapse -->
                    </nav>
                </div>
            </div>
            </div>
        </div>
    </body>

</html>
