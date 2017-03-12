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
        $less->compileFile('less/top-menu.less', 'css/top-menu.css');
        ?>
        <link href="css/top-menu.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="top-menu">
            <header>
                <div class="top_panel">
                    <div class="container content_wrap">
                        <div class=" content_panel">
                            <i aria-hidden="true"></i>
                            <p>Mon-Fri: 8.00 AM - 6.00 PM</p>
                        </div>
                        <div class=" content_panel">
                            <i  aria-hidden="true"></i>
                            <p>(800) 456-7890</p>
                        </div>
                        <div class=" content_panel">
                            <i aria-hidden="true"></i>
                            <p>info@yoursite.com</p>
                        </div>
                    </div>
                </div><!--End_top_panel-->
                 <div class="container  center-logo hidden">
                        <div class="reponsive-menu">
                            <i class="fa fa-bars item-menu"></i>
                        </div>
                        <div class="logo">
                            <a href="#">
                                <div class="left"><img class="img_logo" src="images/Logo.png" alt=""/></div>
                                <div class="logo_content">
                                    <div class="logo_text">Albertino</div>
                                    <div class="logo_slogan">Science research</div>
                                </div>
                            </a>
                        </div><!--End-Logo-->
                 </div>
                <div class="top_panel_middle" id="top_panel_middle">
                    <div class="container content_wrap">
                        <div class="logo">
                            <a href="#">
                                <div class="left"><img class="img_logo" src="images/Logo.png" alt=""/></div>
                                <div class="logo_content">
                                    <div class="logo_text">Albertino</div>
                                    <div class="logo_slogan">Science research</div>
                                </div>
                            </a>
                        </div><!--End-Logo-->
                        <div class="top_menu">
                            <nav class="main-menu">
                                <ul>
                                    <li class="current">
                                        <a id="current" class="show-active" href="#">HOME</a>
                                        <ul class="sub-menu">
                                            <li ><a class="show-active" href="#">Home(Slider1)</a></li>
                                            <li><a href="#">Home(Slider2)</a></li>
                                            <li><a href="#">Home(Slider3)</a></li>
                                        </ul>
                                    </li>
                                    <li class="current">
                                        <a id="current" href="#">FEATURES</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Shortcodes</a></li>
                                            <li><a href="#">Typography</a></li>
                                            <li><a href="#">Page-404</a></li>
                                        </ul>
                                    </li>
                                    <li class="current">
                                        <a id="current" href="#">ABOUT</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Lab Members</a></li>
                                            <li><a href="#">Single Lap Member</a></li>
                                            <li><a href="#">Work With Us</a></li>
                                            <li class="sub-current">
                                                <a href="#">Photo Gallery</a>
                                                <ul class="sub-menu1">
                                                    <li><a href="#">Grid</a></li>
                                                    <li><a href="#">Masonry</a></li>
                                                    <li><a href="#">Cobbles</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li class="sub-current">
                                                <a href="#">Donations</a>
                                                <ul class="sub-menu1">
                                                    <li><a href="#">Bacteria Isolation</a></li>
                                                    <li><a href="#">Cancer Treatment</a></li>
                                                    <li><a href="#">Eco Microbiology</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="current">
                                        <a id="current" href="#">RESEARCH</a>
                                    </li>
                                    <li class="current">
                                        <a id="current" href="#">PUBLICATIONS</a>
                                    </li>
                                     <li class="current">
                                        <a id="current" href="#">NEWS</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Standard Blog</a></li>
                                            <li><a href="#">Without Sidebar</a></li>
                                            <li class="sub-current">
                                                <a href="#">Masonry</a>
                                                <ul class="sub-right">
                                                    <li><a href="#">Masonry 2 Columns</a></li>
                                                    <li><a href="#">Masonry 3 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-current">
                                                <a href="#">Portfolio</a>
                                                <ul class="sub-right">
                                                    <li><a href="#">Portfolio 2 Columns</a></li>
                                                    <li><a href="#">Portfolio 3 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Post Formats</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class="quick-access">
                                <form action="#" method="get">
                                    <div class="form-search">
                                        <input id="search" type="text" placeholder="Search..." name="key" value="" class="input-text" maxlength="128" />
                                         <div class="button"><i class="fa fa-search"></i></div>
                                    </div>
                                </form>
                            </div>
                            <div style="clear: both;"></div>
                        </div><!--End-Top-Menu-->
                    </div>
                </div><!--End-Top-Panel-Middle-->
                <div class="main-menu-reponsive">
                    <div id="full-show"></div>
                    <ul class="menu-reponsive" id="reponsive-menu">
                        <li class="item-menu active-rp">
                            <a data-toggle="collapse" data-target=".navbar-collapse-home" href="#">
                                <span>HOME</span>
                                <span class="fa fa-chevron-down op"></span>
                                <span class="fa fa-chevron-up up"></span>
                            </a>
                            <div class="navbar-collapse-home collapse">
                                <ul >
                                    <li class="item-menu-1"><a href="#"><span>Home(Slider1)</span></a></li>
                                    <li class="item-menu-1"><a href="#"><span>Home(Slider2)</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="item-menu">
                            <a data-toggle="collapse" data-target=".navbar-collapse-features" href="#">
                                <span>FEATURES</span>
                                <span class="fa fa-chevron-down op"></span>
                                <span class="fa fa-chevron-up up"></span>
                            </a>
                            <div class="navbar-collapse-features collapse">
                                <ul >
                                    <li class="item-menu-1"><a href="#"><span>Shortcodes</span></a></li>
                                    <li class="item-menu-1"><a href="#"><span>Typography</span></a></li>
                                    <li class="item-menu-1"><a href="#"><span>Page-404</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="item-menu">
                            <a data-toggle="collapse" data-target=".navbar-collapse-about" href="#">
                                <span>ABOUT</span>
                                <span class="fa fa-chevron-down op"></span>
                                <span class="fa fa-chevron-up up"></span>
                            </a>
                            <div class="navbar-collapse-about collapse">
                                <ul >
                                    <li class="item-menu-1"><a href="#"><span>About Us</span></a></li>
                                    <li class="item-menu-1"><a href="#"><span>Lab Members</span></a></li>
                                    <li class="item-menu-1"><a href="#"><span>Single Lap Member</span></a></li>
                                    <li class="item-menu-1"><a href="#"><span>Work With Us</span></a></li>
                                    <li class="item-menu-1">
                                        <a data-toggle="collapse" data-target=".navbar-collapse-photo" href="#">
                                            <span>Photo Gallery</span>
                                            <span class="fa fa-chevron-down op"></span>
                                            <span class="fa fa-chevron-up up"></span>
                                        </a>
                                        <div class="navbar-collapse-photo collapse">
                                            <ul>
                                                <li class="item-menu-2"><a href="#"><span>Grid</span></a></li>
                                                <li class="item-menu-2"><a href="#"><span>Masonry</span></a></li>
                                                <li class="item-menu-2"><a href="#"><span>Cobbles</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="item-menu-1"><a href="#"><span>Contact Us</span></a></li>
                                    <li class="item-menu-1">
                                        <a data-toggle="collapse" data-target=".navbar-collapse-dona" href="#">
                                            <span>Donations</span>
                                            <span class="fa fa-chevron-down op"></span>
                                            <span class="fa fa-chevron-up up"></span>
                                        </a>
                                        <div class="navbar-collapse-dona collapse">
                                            <ul>
                                                <li class="item-menu-2"><a href="#"><span>Bacteria Isolation</span></a></li>
                                                <li class="item-menu-2"><a href="#"><span>Cancer Treatment</span></a></li>
                                                <li class="item-menu-2"><a href="#"><span>Eco Microbiology</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="item-menu"><a href="#"><span>RESEARCH</span></a></li>
                        <li class="item-menu"><a href="#"><span>PUBLICATIONS</span></a></li>
                        <li class="item-menu">
                            <a data-toggle="collapse" data-target=".navbar-collapse-news" href="#">
                                <span>NEWS</span>
                                <span class="fa fa-chevron-down op"></span>
                                <span class="fa fa-chevron-up up"></span>
                            </a>
                            <div class="navbar-collapse-news collapse">
                                <ul>
                                    <li class="item-menu-1"><a href="#"><span>Standard Blog</span></a></li>
                                    <li class="item-menu-1"><a href="#"><span>Without Sidebar</span></a></li>
                                    <li class="item-menu-1">
                                        <a data-toggle="collapse" data-target=".navbar-collapse-masonry" href="#">
                                            <span>Masonry</span>
                                            <span class="fa fa-chevron-down op"></span>
                                            <span class="fa fa-chevron-up up"></span>
                                        </a>
                                        <div class="navbar-collapse-masonry collapse">
                                            <ul>
                                                <li class="item-menu-2"><a href="#"><span>Masonry 2 Columns</span></a></li>
                                                <li class="item-menu-2"><a href="#"><span>Masonry 3 Columns</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="item-menu-1">
                                        <a data-toggle="collapse" data-target=".navbar-collapse-portfolio" href="#">
                                            <span>Portfolio</span>
                                            <span class="fa fa-chevron-down op"></span>
                                            <span class="fa fa-chevron-up up"></span>
                                        </a>
                                        <div class="navbar-collapse-portfolio collapse">
                                            <ul>
                                                <li class="item-menu-2"><a href="#"><span>Portfolio 2 Columns</span></a></li>
                                                <li class="item-menu-2"><a href="#"><span>Portfolio 3 Columns</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="item-menu-1"><a href="#"><span>Post Formats</span></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div><!--end-main-menu-reponsive-->
                <div class="" style="clear: both"></div>
            </header>
        </div>
        <div style="height: 1000px">
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/top-menu.js"></script>
</html>