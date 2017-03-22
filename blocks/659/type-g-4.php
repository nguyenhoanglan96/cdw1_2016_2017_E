<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-g-4.less', 'css/type-g-4.css');
        ?>
        <link href="css/type-g-4.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-g-4">  
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="feature feature-icon-hover indent indent-size-xl">
                            <div class="col-md-3">
                                <span class="ic ic-2x ic-paint ib ib-size-xl"><i class="fa fa-paint-brush"></i></span>
                            </div>
                            <div class="col-md-9">
                                <h6 class="above-heading">Customizable design</h6>
                                <h3>Unlimited Colors</h3>
                                <p>You have never seen so many options! Change colors of dozens of elements, apply textures, upload background images...</p>
                                <a href="#" class="go">See all features</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature feature-icon-hover indent indent-size-xl">
                            <div class="col-md-3">
                                <span class="ic ic-2x ic-paint ib ib-size-xl"><i class="fa fa-phone"></i></span>
                            </div>
                            <div class="col-md-9">
                                <h6 class="above-heading">12-COLUMN GRID</h6>
                                <h3>Responsive Layout</h3>
                                <p>You have never seen so many options! Change colors of dozens of elements, apply textures, upload background images...</p>
                                <a href="#" class="go">See all features</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature feature-icon-hover indent indent-size-xl">
                            <div class="col-md-3">
                                <span class="ic ic-2x ic-paint ib ib-size-xl"><i class="fa fa-paint-brush"></i></span>
                            </div>
                            <div class="col-md-9">
                                <h6 class="above-heading">CUSTOMIZABLE DROP-DOWN MENU</h6>
                                <h3>Mega Menu</h3>
                                <p>You have never seen so many options! Change colors of dozens of elements, apply textures, upload background images...</p>
                                <a href="#" class="go">See all features</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>

</html>