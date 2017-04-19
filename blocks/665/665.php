<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>665</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/665.less', 'css/665.css');
        ?>

        <link href="css/665.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type_665">
            <div class="container detail-wrapper">
                <div class="row"> 
                    <div class="col-sm-12">
                        <div class=" wpb_content_element ">
                            <h1 class="title" style="text-align: center;">
                                Welcome to our company

                            </h1>
                            <p style="text-align: center;">
                                Quisque porttitor sem libero auctor lorem fringilla sit amehasellus gravida 
                                nisi elitam egestda.
                            </p>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class=" wpb_content_element ">
                                <h1 class="title">Who We Are</h1>
                                <p class="lead">
                                    Lorem ipsum dolol standards in the productio orem imet, 
                                    consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et 
                                    dolore magna aliqua.
                                </p>
                                <p>
                                    Lorem ipsum dolol standards in the productio orem imet, 
                                    consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et 
                                    dolore magna aliqua. Lorem ipsum dolol standards in the productio orem imet, 
                                    consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore 
                                    magna aliqua.
                                </p>
                                <p>
                                    <a class="btn-outline " href="#">More Details</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="tp-about-block">
                                <h2 class="title1"><span><i class="fa fa-gears "></i></span> Technology</h2>
                                <p>
                                    Sedquis viverra enim. Vivamus aliquet rutrum dui a varius. 
                                    Mauris ornare tortor in eleifend blanditullam ut ligula et neque.
                                </p>
                            </div>
                            <div class="tp-about-block">
                                <h2 class="title1"><span><i class="fa fa-dashboard "></i></span> Performance</h2>
                                <p>
                                    Sedquis viverra enim. Vivamus aliquet rutrum dui a varius. 
                                    Mauris ornare tortor in eleifend blanditullam ut ligula et neque.
                                </p>
                            </div>
                            <div class="tp-about-block">
                                <h2 class="title1"><span><i class="fa fa-lightbulb-o "></i></span> Innovations</h2>
                                <p>
                                    Sedquis viverra enim. Vivamus aliquet rutrum dui a varius. 
                                    Mauris ornare tortor in eleifend blanditullam ut ligula et neque.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>