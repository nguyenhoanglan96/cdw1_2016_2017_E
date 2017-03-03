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
        $less->compileFile('less/619.less', 'css/619.css');
        ?>
        <link href="css/619.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-23">
            <div class="about">
                <div class="container content_wrap">
                    <div class="content-about">
                        <h6 class="sub-content">about us</h6>
                        <h2 class="sub-content-1">We Are the Trusted Experts</h2>
                    </div>
                    <div class ="img-content">
                        <aside class="img-content-1 col-ln">
                            <div class="img-1">
                                <a>
                                    <img src="images/service-9-370x370.jpg" alt=""/>
                                    <div class="hover"></div>
                                    <i class="about-hover fa fa-paperclip "></i>
                                </a>
                            </div>
                            <h4 class="title"><a href="#">Prescription Medicine</a></h4>
                            <p>A drug that legally requires a medical prescription to be dispensed. Over-the-counter drugs can be obtained without a prescription.</p>
                            <a href="#" class="learn-more">Learn more</a>
                        </aside>
                      
                        <aside class="img-content-2 col-ln">
                            <div class="img-2">
                                <a>
                                    <img src="images/service-2-370x370.jpg" alt=""/>
                                    <div class="hover"></div>
                                    <i class="about-hover fa fa-paperclip "></i>
                                </a>
                            </div>
                            <h4 class="title"><a href="#">New Vaccines</a></h4>
                            <p>The active agent of a vaccine may be intact but inactivated or attenuated (with reduced infectivity) forms of the causative pathogens.</p>
                            <a href="#" class="learn-more">Learn more</a>
                        </aside>
                        <aside class="img-content-3 col-ln">
                            <div class="img-3">
                                <a>
                                    <img src="images/service-10-370x370.jpg" alt=""/>
                                    <div class="hover"></div>
                                    <i class="about-hover fa fa-paperclip "></i>
                                </a>
                            </div>
                            <h4 class="title"><a href="#"> Consumer Healthcare</a></h4>
                             <p>The focus of this field is to allow consumers to manage their health through the use of internet-based resources with friendly language.</p>
                             <a href="#" class="learn-more">Learn more</a>
                        </aside>
                    </div>
                </div>
            </div><!--End-About-->
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</html>