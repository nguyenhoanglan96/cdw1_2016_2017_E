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
        $less->compileFile('less/654.less', 'css/654.css');
        ?>
        <link href="css/654.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="type-654">
            <div class="container">
                <div class="row">
                    <!-------Content------>
                    <div class="col-md-9">
                        <div class="row">
                            <!-----images 1------->
                            <div class="col-md-4 col-sm-6 col-xs-6 thumb">
                                <div class="thumbnail_container">
                                    <img src="images/kakissel_1-300x300.jpg" alt=""/>
                                    <!------hover:---->
                                    <a class="button add_to_cart_button">Add to cart</a>
                                    <a class="button show_details_button" href="#">Show details</a>
                                </div>
                                <!------text----->
                                <h3 >Nikon 18-70</h3>
                                <span class="price"><span>$220.00</span></span>
                            </div>
                            <!-----/images 1------->
                            <!-----images 2------->
                            <div class="col-md-4 col-sm-6 col-xs-6 thumb">
                                <div class="thumbnail_container">
                                    <img src="images/jeff_golden_1-300x300.jpg" alt=""/>
                                    <!----hover:--->
                                    <a class="button add_to_cart_button">Add to cart</a>
                                    <a class="button show_details_button" href="#">Show details</a>
                                </div>
                                <!----text--->
                                <h3 >Nikon 18-70</h3>
                                <span class="price"><span class="amount">$220.00</span></span>
                            </div>
                            <!-----/images 2------->
                            <!-----images 3------->
                            <div class="col-md-4 col-sm-6 col-xs-6 thumb">
                                <div class="thumbnail_container">
                                    <img src="images/jeff_golden_2-300x300.jpg" alt=""/>
                                    <!---hover: --->
                                    <a class="button add_to_cart_button">Add to cart</a>
                                    <a class="button show_details_button" href="#">Show details</a>
                                </div>
                                <!---text--->
                                <h3 >Nikon 18-70</h3>
                                <span class="price"><span class="amount">$220.00</span></span>
                            </div>
                            <!-----/.images 3------->
                            <!-----images 4------->
                            <div class="col-md-4 col-sm-6 col-xs-6 thumb">
                                <div class="thumbnail_container">
                                    <img src="images/linux-works-300x300.jpg" alt=""/>
                                    <a class="button add_to_cart_button">Add to cart</a>
                                    <a class="button show_details_button" href="#">Show details</a>
                                </div>
                                <h3 >Nikon 18-70</h3>
                                <span class="price"><span class="amount">$220.00</span></span>
                            </div>
                            <!-----/images 4------->
                            <!-----images 5------->
                            <div class="col-md-4 col-sm-6 col-xs-6 thumb">
                                <div class="thumbnail_container">
                                    <img src="images/kakissel_1-300x300.jpg" alt=""/>
                                    <a class="button add_to_cart_button">Add to cart</a>
                                    <a class="button show_details_button" href="#">Show details</a>
                                </div>
                                <h3 >Nikon 18-70</h3>
                                <span class="price"><span class="amount">$220.00</span></span>
                            </div>
                            <!-----/images 5------->
                            <div class="col-md-4 col-sm-6 col-xs-6 thumb">
                                <div class="thumbnail_container">
                                    <img src="images/jeff_golden_2-300x300.jpg" alt=""/>
                                    <a class="button add_to_cart_button">Add to cart</a>
                                    <a class="button show_details_button" href="#">Show details</a>
                                </div>
                                <h3 >Nikon 18-70</h3>
                                <span class="price"><span class="amount">$220.00</span></span>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 thumb">
                                <div class="thumbnail_container">
                                    <img src="images/kakissel_1-300x300.jpg" alt=""/>
                                    <a class="button add_to_cart_button">Add to cart</a>
                                    <a class="button show_details_button" href="#">Show details</a>
                                </div>
                                <h3 >Nikon 18-70</h3>
                                <span class="price"><span class="amount">$220.00</span></span>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 thumb">
                                <div class="thumbnail_container">
                                    <img src="images/kakissel_1-300x300.jpg" alt=""/>
                                    <a class="button add_to_cart_button">Add to cart</a>
                                    <a class="button show_details_button" href="#">Show details</a>
                                </div>
                                <h3 >Nikon 18-70</h3>
                                <span class="price"><span class="amount">$220.00</span></span>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 thumb">
                                <div class="thumbnail_container">
                                    <img src="images/kakissel_1-300x300.jpg" alt=""/>
                                    <a class="button add_to_cart_button">Add to cart</a>
                                    <a class="button show_details_button" href="#">Show details</a>
                                </div>
                                <h3 >Nikon 18-70</h3>
                                <span class="price"><span class="amount">$220.00</span></span>
                            </div>
                        </div>
                    </div>
                    <!-------/Content------>
                    <!-------Slidebar------>
                    <div class="col-md-3">
                        <div class="sidebar"><div class="widget widget_pages">
                                <!----PAGES--->
                                <h3 class="widgettitle">Pages</h3>
                                <ul>
                                    <li ><a href="#">Archive/Sitemap Template</a></li>
                                    <li ><a href="#">Aviacordion</a></li>
                                    <li ><a href="#">Beautiful Jewelry</a></li>
                                    <li ><a href="#">Blog</a></li>
                                    <li ><a href="#">Blog (Dual Sidebar, medium preview images)</a></li>
                                    <li ><a href="#">Blog (left Sidebar, small preview images)</a></li>
                                    <li ><a href="#">Caption Slider</a></li>
                                    <li ><a href="#">Cart</a></li>
                                    <li ><a href="#">Change Password</a></li>
                                    <li ><a href="#">Checkout</a></li>
                                    <li ><a href="#">Checkout → Pay</a></li>
                                    <li ><a href="#">Clothes &amp; latest fashion Trends</a></li>
                                    <li ><a href="#">Contact</a></li>
                                    <li ><a href="#">Edit My Address</a></li>
                                    <li ><a href="#">Fade Slider</a></li>
                                    <li ><a href="#">Frontpage</a></li>
                                    <li ><a href="#">Lost Password</a></li>
                                    <li ><a href="#">My Account</a></li>
                                    <li class=" 18"><a href="#">Order Received</a></li>
                                    <li ><a href="#">Page: Dual Sidebar</a></li>
                                    <li ><a href="#">Page: Fullwidth</a></li>
                                    <li ><a href="#">Page: Sidebar Left</a></li>
                                    <li ><a href="#">Page: Sidebar Right</a></li>
                                    <li ><a href="#">Piecemaker</a></li>
                                    <li ><a href="#">Sample Page</a></li>
                                    <li class=" 09"><a href="#">Shop</a></li>
                                    <li ><a href="#">Shortcodes</a></li>
                                    <li ><a href="#">Templates</a></li>
                                    <li ><a href="#">Top Camera Equipment</a></li>
                                    <li class=" 12"><a href="#">Track your order</a></li>
                                    <li ><a href="#">Video Tutorials</a></li>
                                    <li class=" 15"><a href="#">View Order</a></li>
                                    <li ><a href="#">Whats Hot?</a></li>
                                    <li ><a href="#">Gallery</a></li>
                                </ul>
                                <!---/PAGES--->
                            </div>
                            <div class="widget widget_categories"><h3 class="widgettitle">Categories</h3><ul>	<li ><a href="http://www.kriesi.at/themes/abundance/category/breaking/">Breaking</a>
                                    </li>
                                    <li ><a href="#">Featured</a>
                                    </li>
                                    <li class=" -16"><a href="#">News</a>
                                    </li>
                                    <li ><a href="#">Technology</a>
                                    </li>
                                </ul></div><div class="widget widget_archive"><h3 class="widgettitle">Archive</h3><ul>	<li><a href="#">March 2011</a></li>
                                    <li><a href="#">February 2011</a></li>
                                    <li><a href="#">January 2011</a></li>
                                    <li><a href="#">December 2010</a></li>
                                    <li><a href="#">August 2010</a></li>
                                    <li><a href="#">May 2010</a></li>
                                    <li><a href="#">March 2010</a></li>
                                </ul></div>
                        </div>
                    </div>
                    <!-------/Slidebar------>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </body>
</html>