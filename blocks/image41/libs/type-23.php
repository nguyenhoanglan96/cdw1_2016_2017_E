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
        $less->compileFile('less/type-23.less', 'css/type-23.css');
        ?>
        <link href="css/type-23.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-23">
            <header>
                <div class="top_panel">
                    <div class="container content_wrap">
                        <div class="top_panel_home content_panel">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <p>Mon-Fri: 8.00 AM - 6.00 PM</p>
                        </div>
                        <div class="top_panel_phone content_panel">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>(800) 456-7890</p>
                        </div>
                        <div class="top_panel_email content_panel">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <p>info@yoursite.com</p>
                        </div>
                    </div>
                </div><!--End_top_panel-->
                <div class="top_panel_middle">
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
                                <ul class="menu">
                                    <li class="current">
                                        <a id="current" class="show-active" href="#">HOME</a>
                                        <ul class="sub-menu">
                                            <li><a class="show-active" href="#">Home(Slider1)</a></li>
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
                                        <a id="current" href="#">ABOUT</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Standard Blog</a></li>
                                            <li><a href="#">Without Sidebar</a></li>
                                            <li><a href="#">Masonry</a></li>
                                            <li><a href="#">Masonry</a></li>
                                            <li><a href="#">Post Formats</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div><!--End-Top-Menu-->
                    </div>
                </div><!--End-Top-Panel-Middle-->
                <div class="slideshow slide-width">
                    <div class="slide-one">
                        <div id="img">
                            <div id="img11"><a id="img1" class="active-img" href="#"><img src="images/home-slide-1.jpg" alt=""/></a></div>
                            <div id="img22"> <a id="img2" href="#"><img src="images/home-slide-2.jpg" alt=""/></a></div>
                            <div id="img33"><a id="img3" href="#"><img src="images/home-slide-3.jpg" alt=""/></a></div> 
                        </div>
                    </div>
                </div><!--ens-slide-show-->
                <div class="Slide-show-content container content_wrap">
                    <div class="content-1">
                        <div class="icon" style="height: 50%"></div>
                        <h6 class="title">Pharmaceuticals</h6>
                        <h6 class="content">A Full Range of Services to Support Drug…</h6>
                    </div>
                    <div class="content-2">
                        <div class="icon" style="height: 50%"></div>
                        <h6 class="title">Biopharmaceuticals</h6>
                        <h6 class="content">Cost Effective & Rapid Labelling…</h6>
                    </div>
                    <div class="content-3">
                        <div class="icon" style="height: 50%"></div>
                        <h6 class="title">Chemicals</h6>
                        <h6 class="content">Risk Assessment for Chemicals Our…</h6>
                    </div>
                </div><!--end-Slide-Show-Content-->
                <div class="" style="clear: both"></div>
                <div class="" style="height: 1000px; background-color: #204d74"></div>
            </header>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</html>