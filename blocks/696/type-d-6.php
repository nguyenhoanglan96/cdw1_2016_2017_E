<!DOCTYPE html>
<?php
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./less/type-d-6.less', 'css/type-d-1.css');
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Footer</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/type-d-1.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>


</head>

<body>
    <div class="mod_footer">
         <div class="container-fluid container-bacrow">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                         <div class="caption">
                        <div class="title">
                            <h5>About Us</h5>
                        </div>			
                        <div class="content">
                            Proin iaculis purus consequat sem cursus digni ssim. Donec porttitor entume suscipit. Aenean rhoncus posuere odio in tinciduis purus consequa.
                            Suscipit. Aenean rhoncus posuere odio in tincidunt litifonus libidkociums.
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="caption">
                        <div class="title">
                            <h5>Useful links</h5>
                        </div>

                        <div class="login">
                            <div class="icon">
                                <i class="fa fa-angle-right">
                                    <a href="#">Log in</a>
                                </i>

                            </div>
                        </div>

                        <div class="entries">
                            <div class="icon">
                                <i class="fa fa-angle-right">
                                    <a href="#">Entries RSS</a>
                                </i>

                            </div>
                        </div>

                        <div class="comments">
                            <div class="icon">
                                <i class="fa fa-angle-right">
                                    <a href="#">Comments RSS</a>
                                </i>
                            </div>
                        </div>

                        <div class="wordpress">
                            <div class="icon">
                                <i class="fa fa-angle-right">
                                    <a href="#">WordPress.org</a>
                                </i>

                            </div>
                        </div>


                    </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="caption">
                        <div class="title">
                            <h5>Flickr Stream</h5>
                        </div>			
                        <div class="images-list">
                            <div class="images">
                                <a href="#">
                                    <img src=" images/img-1.jpg " width="50" height="50">
                                    <img src=" images/img-2.jpg " width="50" height="50">
                                    <img src=" images/img-3.jpg " width="50" height="50">
                                    <img src=" images/img-4.jpg " width="50" height="50">
                                </a>
                            </div>

                            <div class="images">
                                <a href="#">
                                    <img src=" images/img-5.jpg " width="50" height="50">
                                    <img src=" images/img-6.jpg " width="50" height="50">
                                    <img src=" images/img-7.jpg " width="50" height="50">
                                    <img src=" images/img-8.jpg " width="50" height="50">
                                </a>
                            </div>

                            <div class="images">
                                <a href="#">
                                    <img src=" images/img-9.jpg " width="50" height="50">
                                    <img src=" images/img-10.jpg " width="50" height="50">
                                    <img src=" images/img-11.jpg " width="50" height="50">
                                    <img src=" images/img-12.jpg " width="50" height="50">
                                </a>
                            </div>

                        </div>
                    </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="caption">
                        <div class="title">
                            <h5>Get in touch</h5>
                        </div>	

                        <div class="contact">
                            <div class="address">
                                <li class="fa fa-home homeicon"> 
                                    Jacky George St. 158-56,<br> EastLondon, NF1561, UK
                                </li>

                            </div>

                            <div class="phone">
                                <li class="fa fa-phone">
                                    +460 123 456 789
                                </li>
                            </div>

                            <div class="email">
                                <li class="fa fa-envelope-o">
                                    <a href="#">
                                        hello@showcase.me
                                    </a>
                                </li>

                            </div>

                            <div class="flag">
                                <li class="fa fa-flag">
                                    <a href="#">
                                        Find us on the map
                                    </a>
                                </li>

                            </div>

                        </div>
                    </div>
                    </div>
                    
            </div>
        </div>
    </div>
 <div class="container-fluid container-bottom">
            <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="menu-footer">
                        <a href="">
                            Showcase © 2013
                        </a>
                    </div>
                    <div class="menu-footer">
                        <a href="" class="note">
                            Legal Notice
                        </a>
                    </div>
                    <div class="menu-footer">
                        <a href=""class="note">
                            Terms
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="text-3" class="hidden-xs">		
                                   
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
                </div>
                    
            </div>
        </div>
        </div>
    </div>
</body>
</html>
