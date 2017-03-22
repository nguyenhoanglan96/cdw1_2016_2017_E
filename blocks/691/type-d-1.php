<!DOCTYPE html>
<?php
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./less/type-d-1.less', 'css/style.css');
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap 101 Template</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="mod_k">   
            <div class="header-top">
                <div class="container">
                    <div class="row header-top-line">
                        <div class="col-md-12">

                            <div class="pull-left">
                                <div id="rb_email_widget-3" class="widget ">
                                    <a href="mailto:hello@rubenbristian.com">
                                        <i class="fa fa-envelope"></i>hello@rubenbristian.com</a>
                                </div>
                                <div id="rb_phone_widget-3" class="widget hidden-xs">
                                    <a href="tel:+460 123 456 789">
                                        <i class="fa fa-phone"></i>+460 123 456 789
                                    </a>
                                </div>
                            </div>

                            <div class="pull-right">
                                <div id="text-3" class="widget hidden-xs">		
                                   
                                        <div class="clearfix">
                                            <section class="rbSocial clearfix icons">
                                                <ul class="list-unstyled">

                                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
                                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href=""><i class="fa fa-cloud"></i></a></li>
                                                    <li><a href=""><i class="fa fa-feed"></i></a></li>


                                                </ul>
                                            </section>
                                        </div> 
                                   
                                </div>
                                <form class="navbar-form widget" role="search" id="searchform">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Search the site" name="s" id="s" type="text">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" id="searchsubmit"type="submit"><i class="glyphicon glyphicon-search iconsearch"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>                  
                </div> 
            </div>

           
                <div class="container">
                    <div class="row line-header-tottom1">
                        <div class="col-xs-12 hidden-xs col-sm-12 col-md-2">
                            <div class="logo">
                                <a href="">
                                    <img src="images/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-10">

                            <div class="navbar navbar-default" id="menu" role="navigation">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header hidden-sm">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand hidden col-xs-8 visible-xs" href="#"> <img src="images/logo.png"width="100%" height="130%" alt=""/></a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse navbar-ex1-collapse">
                                    <ul class="nav navbar-nav" id="menu-main-menu">
                                       <li class="dropdown"><a href="#" class="dropdown-toggle selected" data-toggle="dropdown">Homepage</a>
                                                <ul class="dropdown-menu">
                                                    <li class="active"><a href="#">Home 1 – Agency</a></li>
                                                    <li><a href="#">Home 2 – Complete</a></li>
                                                    <li><a href="#">Home 3 – Typography</a></li>
                                                    <li><a href="#">Home 4 – Blog</a></li>
                                                    <li><a href="">Home 5 – No Slider</a></li>
                                                    <li><a href="">Home 6 – Shop</a></li>
                                                    <li><a href="">Home 7 – Funding</a></li>



                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
                                                <ul class="dropdown-menu">


                                                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle1" data-toggle="dropdown">Regular</a>
                                                        <ul class="dropdown-menu">

                                                            <li><a href="">4 columns</a></li>
                                                            <li><a href="">3 columns</a></li>
                                                            <li><a href="">3 columns w/ sidebar</a> </li>
                                                            <li><a href="">2 columns</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle1" data-toggle="dropdown">AJAX</a>
                                                        <ul class="dropdown-menu">

                                                            <li><a href="">4 columns</a></li>
                                                            <li><a href="">3 columns</a></li>
                                                            <li><a href="">3 columns w/ sidebar</a> </li>
                                                            <li><a href="">2 columns</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle1" data-toggle="dropdown">Paginated</a>

                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="">Modern Blog</a></li>
                                                    <li><a href="">Classic Blog</a></li>



                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="">About Us </a></li>
                                                    <li><a href="">Our Services 1</a></li>

                                                    <li><a href="">Our Skills 1</a></li>

                                                    <li><a href="">Our Team</a></li>

                                                    <li><a href="">Pricing Tables</a></li>
                                                    <li><a href="">Testimonials </a></li>


                                                    <li><a href="">Passworded Page </a></li>
                                                    <li><a href="">Archives</a></li>
                                                    <li><a href="">Sitemap </a></li>
                                                    <li><a href="">404 Page</a></li>



                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Features</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="">All Shortcodes</a></li>
                                                    <li><a href="">Shop</a></li>
                                                    <li><a href="">Funding – Project 1</a></li>
                                                    <li><a href="">Funding – Project 2</a></li>
                                                    <li><a href="">Features List</a></li>

                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="">Contact Us 1</a></li>
                                                    <li><a href="">Contact Us 2</a></li>
                                                    <li><a href="">Contact Us 3</a></li>



                                                </ul>
                                            </li>
                                    </ul>
                                    
                                    
                                </div><!-- /.navbar-collapse -->
                            </div>

                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="cart-widget">
                                <a class="cart-contents" href="" title="View your shopping cart">
                                    <i class="fa fa-shopping-cart card"></i>
                                    <p class="col-xs hidden-xs">0 items	
                                        <span class="amount col-xs hidden-xs">
                                            <span class="col-xs hidden-xs">$0.00</span></span></p>							</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
           
            
            <div class="container-fluid">
                 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="images/full_bg1.jpg" alt="First slide"/>
                            <!-- Static Header -->
                            <div class="header-text hidden-xs">
                                <div class="col-md-12 text-center">
                                    <h2>
                                        <span>Welcome to <strong>LOREM IPSUM</strong></span>
                                    </h2>
                                    <br>
                                    <h3>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                    </h3>
                                    <br>
                                    <div class="">
                                        <a class="btn btn-theme btn-sm btn-min-block" href="#">Login</a><a class="btn btn-theme btn-sm btn-min-block" href="#">Register</a></div>
                                </div>
                            </div><!-- /header-text -->
                        </div>
                        <div class="item">

                            <img src="images/full_bg23.jpg" alt="Second slide"/>
                            <!-- Static Header -->
                            <div class="header-text hidden-xs">
                                <div class="col-md-12 text-center">
                                    <h2>
                                        <span>Welcome to LOREM IPSUM</span>
                                    </h2>
                                    <br>
                                    <h3>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                    </h3>
                                    <br>
                                    <div class="">
                                        <a class="btn btn-theme btn-sm btn-min-block" href="#">Login</a><a class="btn btn-theme btn-sm btn-min-block" href="#">Register</a></div>
                                </div>
                            </div><!-- /header-text -->
                        </div>
                        <div class="item">

                            <img src="images/full_bg3.jpg" alt="Third slide"/>
                            <!-- Static Header -->
                            <div class="header-text hidden-xs">
                                <div class="col-md-12 text-center">
                                    <h2>
                                        <span>Welcome to LOREM IPSUM</span>
                                    </h2>
                                    <br>
                                    <h3>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                    </h3>
                                    <br>
                                    <div class="">
                                        <a class="btn btn-theme btn-sm btn-min-block" href="#">Login</a><a class="btn btn-theme btn-sm btn-min-block" href="#">Register</a></div>
                                </div>
                            </div><!-- /header-text -->
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control left-moble" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-angle-left iconleft"></span>
                    </a>
                    <a class="right carousel-control right-mobile" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-angle-right iconright"></span>
                    </a>
                </div><!-- /carousel -->
            </div>

        </div>
<script src="js/javascript.js" type="text/javascript"></script>
    </body>
</html>
