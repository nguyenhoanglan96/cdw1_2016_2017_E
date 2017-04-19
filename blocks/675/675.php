<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/675.less', 'css/675.css');
        ?>
        <link href="css/675.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="tem-675">
            <div class="footer-bottom dark_style">
                <div class="container ">
                    <div class="row">
                        
                        <div class="col-md-4 ">
                            <div class="footer_widget">
                                <div class="widget"><div class="title">About Recash</div>			
                                    <div>
                                        <p>Recash is modern community deals theme based on Rehub theme. It has support for BuddyPress, MyCred, has built in frontend submit plugin, user badges, ranks, clean, modern design and optimized for deals and coupons community websites</p>

                                        <p><a href="#">Contact Us</a> | <a href="#">Privacy Policy </a></p></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4  ">
                            <div class="footer_widget">
                                <div class="widget widget_nav_menu"><div class="title">Links</div><div ><ul class="menu"><li ><a href="#">About</a></li>
                                            <li ><a href="#">Privacy Policy</a></li>
                                            <li ><a href="#">Tutorials</a></li>
                                            <li ><a href="#">Description</a></li>
                                        </ul></div></div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 ">
                            <div class="footer_widget last">
                                <div class="widget last"><div class="title">Search</div><form role="search" method="get" action="#">
                                        <input type="text" name="s" placeholder="Search" data-posttype="post">
                                        <input type="hidden" name="post_type" value="post"> 	<button type="submit" ><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <footer id="theme_footer" class="dark_style">
                <div class="container ">
                    <div class="left">
                        <div class="f_text">2016 Wpsoul Design. All rights reserved.</div>
                    </div>
                </div>
            </footer>
        </div>

    </body>
</html>
