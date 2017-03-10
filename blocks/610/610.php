<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/610.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/610.less', 'css/610.css');
        ?>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-b-1">
            <!-------------------------------Begin Header------------------------------------>
            <header id="header" class="style2 cta_button">
                <div class="container">
                    <div class="logo-container hasInfoCard">
                        <h1 id="logo">
                            <a href="#">
                                <img src="images/logo.png" alt="Kallyas Template for Joomla" title="Click to return to Kallayas Template's homepage">
                            </a>
                        </h1>
                    </div><!--Logo-->
                    <ul class="topnav navRight">
                        <!-- BEGIN support clickable button -->
                        <li><a href="#" id="open_sliding_panel">
                                <span class="icon-remove-circle icon-white"></span> SUPPORT						</a>
                        </li>                
                        <li><a href="#login_panel" data-rel="prettyPhoto[login_panel]">LOGIN</a></li>
                    </ul><!--Top right-->
                    <ul class="topnav navLeft">
                        <li class="drop">
                            <a href="#">MY CART</a>
                            <div class="pPanel">
                                <div class="inner">
                                    <div class="vmCartModule" id="vmCartModule216">
                                        <p class="cart_details">
                                            <span class="total_products">Cart empty</span>
                                            <span class="total"></span>
                                            <a class="checkout" href="/kallyas_joomla/shop/shopping-cart"><span class=" icon-shopping-cart"></span> Show Cart</a>
                                        </p>
                                    </div><!-- end vmcartmodule -->
                                </div>
                            </div>
                        </li>
                        <li class="languages drop">
                            <a href="#"><span class="icon-globe icon-white"></span> LANGUAGES</a>
                            <div class="custom ">
                                <div class="mod-languages ">
                                    <div class="pPanel">
                                        <ul class="lang-inline inner">
                                            <li dir="ltr"><a href="#"> <img src="images/fr.gif" alt="French (FR)" title="French (FR)"> French (FR) </a></li>
                                            <li class="active" dir="ltr"><a href="#"> <img src="images/en.gif" alt="English (UK)" title="English (UK)"> English (UK) </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul><!--Top Left-->

                    <div id="search" class="">
                        <a href="#" class="searchBtn">
                            <span class="icon-search icon-white"></span>
                        </a>   
                    </div><!--Search-->

                    <a href="#" target="_self" id="ctabutton">
                        <strong>FREE</strong>QUOTE					
                        <svg version="1.1" class="trisvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" preserveAspectRatio="none" width="14px" height="5px" viewBox="0 0 14.017 5.006" enable-background="new 0 0 14.017 5.006" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.016,0L7.008,5.006L0,0H14.016z"></path></svg>
                    </a><!--Free QUOTE-->

                   <menu class="main_menu">
                        <div class="btn-group show-on-hover">
                            <a href="#">HOME</a>
                            <ul class="dropdown-menu" role="menu">
                                 <li><a href="#">ARIES Homepage</a></li>
                                <li><a href="#">ORION Homepage</a></li>
                                <li><a href="#">VEGA Homepage</a></li>
                                <li><a href="#">AURA Homepage</a></li>
                                <li><a href="#">Homepage AGENCY</a></li>
                                <li><a href="#">Homepage 1</a></li>
                                <li><a href="#">Homepage 2</a></li>
                                <li><a href="#">Homepage 3</a></li>
                                <li><a href="#">Homepage 4</a></li>
                                <li><a href="#">Homepage 5</a></li>
                                <li><a href="#">Homepage 6</a></li>
                            </ul>
                        </div><!--Home-->
                        <nav class="btn-group show-on-hover">
                            <a href="#">SLIDERS</a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-submenu">
                                    <a href="#">IOSSlider</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Main Slider</a></li>
                                        <li><a href="#">Fixed position(scroll)</a></li>
                                        <li><a href="#">Fixed Width Style</a></li>
                                        <li><a href="#">Faded effect</a></li>
                                        <li><a href="#">With thumb</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Createive Slider</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#">Fixed Slider</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Syle 1(Flex Slider)</a></li>
                                        <li><a href="#">Style 2(Nivo Slider)</a></li>
                                        <li><a href="#">Style 3(Wom Slider)</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">3D Cute Slider</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#">Circular Content</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Default Style</a></li>
                                        <li><a href="#">Alternative Style</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#">Static Content</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Default Style</a></li>
                                        <li><a href="#">Style 2/Boxed</a></li>
                                        <li><a href="#">Style 3/Video</a></li>
                                        <li><a href="#">Style 4/Maps</a></li>
                                        <li><a href="#">Style 5/Text pop</a></li>
                                        <li><a href="#">Style 6/Product Loupe</a></li>
                                        <li><a href="#">Style 7/Event Countdown</a></li>
                                        <li><a href="#">Style 8/Video Background</a></li>
                                        <li><a href="#">Style 9/Text & Login</a></li>
                                        <li><a href="#">Style 10/Simple Text</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Porfolio Slider Devices</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#">Porfolio Slider Frames</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Slding Vertically</a></li>
                                        <li><a href="#">Sliding Horionztally</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Laptop Slider</a></li>
                                <li><a href="#">iCarousel</a></li>
                                <li><a href="#">CSS3 Panels</a></li>
                            </ul>
                        </nav><!--Silders-->

                        <div class="btn-group show-on-hover">
                            <a href="#">HERO SCENES</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Shop Frontpage</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div><!--About Us-->

                        <div class="btn-group show-on-hover">
                            <a href="#">FEATURES</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Log</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#">Porfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Category Layout</a></li>
                                        <li><a href="#">Sortable Layout</a></li>
                                        <li><a href="#">Carousels Layout</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Photo Gallery</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#">PrettyPhoto(LightBox)</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">PrettyPhoto(open iframe)</a></li>
                                        <li><a href="#">PrettyPhoto(open iframe)</a></li>
                                        <li><a href="#">PrettyPhoto(open iframe)</a></li>
                                        <li><a href="#">PrettyPhoto(open iframe)</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Grid Positons/Structure</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#">Hollyday Slider</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Christmas</a></li>
                                        <li><a href="#">Easter</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Page Preloader</a></li>
                                <li><a href="#">Animated Header</a></li>
                            </ul>
                        </div><!--Features--> 

                        <div class="btn-group show-on-hover">
                            <a href="#">SHOP</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Shop Frontpage</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div><!--Shop-->

                        <div class="btn-group show-on-hover">
                            <a href="#">PAGES</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Process</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div><!--Pages-->

                        <div class="btn-group show-on-hover">
                            <a href="#">ELEMENTS</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Typoghaphy</a></li>
                                <li><a href="#">Table Design</a></li>
                                <li><a href="#">Button Desgin</a></li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">Button Desgin</a></li>
                                <li><a href="#">Button Desgin</a></li>
                            </ul>
                        </div><!--Style-->
                    </menu><!--Main Menu-->
                </div>
            </header>
            <!-------------------------------End Header------------------------------------>
            <div class="clearfix"></div>
            <!-------------------------------Begin SlideShow-------------------------------->
            <section class="section-white">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/iosmain.jpg" alt="">
                            <aside class="carousel-caption">
                                <div class="caption style1 fromleft">
                                    <h2 class="main_title" style="opacity: 1; margin-left: 0px;">HUGE SUMMER SALE</h2>
                                    <h3 class="title_big" style="left: 0px; opacity: 1;">UP TO 40%</h3>
                                    <a href="#" target="_self" class="more" style="left: 0px; opacity: 1;">
                                        <img src="images/arr01.png" alt="20% DISCOUNT">
                                    </a>
                                    <h4 class="title_small" style="left: 0px; opacity: 1;">FOR THE PRODUCTS IN OUR NEWEST COLLECTION</h4>
                                </div>
                            </aside>
                        </div><!--SLide 1-->

                        <div class="item">
                            <img src="images/iosmain.jpg" alt="">
                            <div class="carousel-caption">
                                <div class="caption style2 fromright">
                                    <h2 class="main_title" style="opacity: 1; margin-right: 0px;">YOUR LIVING<br>DESERVES BETTER</h2>
                                    <h3 class="title_big" style="right: 0px; opacity: 1;">IT'S YOUR COUCH</h3>
                                    <a href="#" target="_self" class="more" style="right: 0px; opacity: 1;">
                                        <img src="images/arr01.png" alt="IT'S YOUR COUCH">
                                    </a>
                                    <h4 class="title_small" style="right: 0px; opacity: 1;">CHOOSE WHAT YOU LIKE, COMBINE IT HOW YOU WANT</h4>
                                </div>
                            </div>
                        </div><!--Slide 2-->

                        <div class="item">
                            <img src="images/iosmain.jpg" alt="">
                            <aside class="carousel-caption">
                                <div class="caption style1 fromleft">
                                    <h2 class="main_title" style="opacity: 1; margin-left: 0px;">GRAND OPENING<br>NOVEMBER 2015</h2>
                                    <h3 class="title_big" style="left: 0px; opacity: 1;">50% OFF ON ANY ORDER</h3>
                                    <a href="#" target="_self" class="more" style="left: 0px; opacity: 1;">
                                        <img src="images/arr01.png" alt="50% OFF ON ANY ORDER">
                                    </a>
                                    <h4 class="title_small" style="left: 0px; opacity: 1;">BEST PLACE TO HAVE A DRINK IN OUR CITY</h4>
                                </div>
                            </aside>
                        </div><!--Slide 3-->

                        <div class="item">
                            <img src="images/iosmain.jpg" alt="">
                            <aside class="carousel-caption">
                                <div class="caption style3 fromright">
                                    <h2 class="main_title" style="opacity: 1; margin-right: 0px;">AUTUMN 2015<br>COLLECTION</h2>
                                    <h4 class="title_small" style="right: 0px; opacity: 1;">FOR THE PRODUCTS IN OUR NEWEST COLLECTION</h4>
                                    <h3 class="title_big" style="right: 0px; opacity: 1;"><span class="stronger">20%</span> DISCOUNT</h3>
                                </div>
                            </aside>
                        </div><!--Slide 4-->

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </section>
            <!------------------------------End SlideShow---------------------------------->
            <div class="clear"></div>
            <!-----------------------------Begin ???---------------------------------------->
            <aside id="action_box99" data-arrowpos="center" class="action_box ">
                <div class="container">
                    <div class="row">
                        <div class="span8">
                            <h4 class="text">Want to be updated with our latest offers?</h4>
                        </div>
                        <div class="span4 align-center">
                            <a href="#" target="_self" class="btn">JOIN OUR NEWSLETTER</a>
                        </div>
                    </div>
                </div>
            </aside>
            <!-----------------------------End ???------------------------------------------>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>

</html>