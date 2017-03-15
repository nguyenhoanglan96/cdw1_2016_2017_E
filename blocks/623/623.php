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
        $less->compileFile('less/623.less', 'css/623.css');
        ?>
        <link href="css/623.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-623">
            <!-- About -->
            <div class="container content_wrap">
                <div class="row">
                    <!--- Title --->
                    <div class="content-about">
                        <h6 class="sub-content">FROM THE BLOG</h6>
                        <h2 class="sub-content-1">Learn About Our Leading Technologies</h2>
                    </div>
                    <!--- End Title --->
                    <!--- Slide Img --->
                    <div class="img-content">
                        <div class="img-content-1 col-ln">
                            <div class="post_info">
                                <span class="posted">
                                    <a href="#">posted</a>
                                </span>
                                <span class="number1"> 
                                    <a href="#">Feb 10, 2016</a>
                                </span>
                                <span class="number">
                                    <a href="#"> 400 </a>
                                </span>
                                <span class="number">
                                    <a href="#"> 0 </a>
                                </span>
                            </div>
                            <div>
                                <a>
                                    <img src="images/blog1.jpg" alt="" />
                                    <div class="hover"></div>
                                    <i class="about-hover fa fa-paperclip "></i>
                                </a>
                            </div>
                            <h4 class="title"><a href="#">Novel Technologies…</a></h4>
                            <p>Vestibulum iaculis lacinia est. Proin dicm elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed...</p>
                            <a href="#" class="learn-more">Learn more</a>
                        </div>
                        <div class="img-content-2 col-ln">
                            <div class="post_info">
                                <span class="posted">
                                    <a href="#">posted</a>
                                </span>
                                <span class="number1"> 
                                    <a href="#">Feb 10, 2016</a>
                                </span>
                                <span class="number">
                                    <a href="#"> 400 </a>
                                </span>
                                <span class="number">
                                    <a href="#"> 0 </a>
                                </span>
                            </div>
                            <div>
                                <a>
                                    <img src="images/blog2.jpg" alt="" />
                                    <div class="hover"></div>
                                    <i class="about-hover fa fa-paperclip "></i>
                                </a>
                            </div>
                            <h4 class="title"><a href="#">Novel Technologies…</a></h4>
                            <p>Vestibulum iaculis lacinia est. Proin dicm elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed...</p>
                            <a href="#" class="learn-more">Learn more</a>
                        </div>
                        <div class="img-content-3 col-ln">
                            <div class="post_info">
                                <span class="posted">
                                    <a href="#">posted</a>
                                </span>
                                <span class="number1"> 
                                    <a href="#">Feb 10, 2016</a>
                                </span>
                                <span class="number">
                                    <a href="#"> 400 </a>
                                </span>
                                <span class="number">
                                    <a href="#"> 0 </a>
                                </span>
                            </div>
                            <div>
                                <a>
                                    <img src="images/blog3.jpg" alt="" />
                                    <div class="hover"></div>
                                    <i class="about-hover fa fa-paperclip "></i>
                                </a>
                            </div>
                            <h4 class="title"><a href="#">Novel Technologies…</a></h4>
                            <p>Vestibulum iaculis lacinia est. Proin dicm elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed...</p>
                            <a href="#" class="learn-more">Learn more</a>
                        </div>
                    </div>
                    <!--- End Slide Img --->
                    <div class="sc_section_inner">
                        <div class="sc_line"></div>
                        <!--- Title --->
                        <h6 class="sub-content-2">QUOTATIONS</h6>
                        <h2 class="sc_item_title">Your Request Answered Within 24 Hours</h2>
                        <!--- End Title--->
                        <!--- button --->
                        <a href="#" class="button"> download the form </a>
                        <!--- End button --->
                    </div>
                </div>
            </div>
            <!-- /End About -->
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</html>