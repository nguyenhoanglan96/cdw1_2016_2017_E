<!DOCTYPE html>

<html>

    <head>
        <title>659</title>
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
        $less->compileFile('less/659.less', 'css/659.css');
        ?>
        <link href="css/659.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-659">  
            <div class="container itemslider-wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature feature-icon-hover indent indent-size-xl">
                            <div class="col-md-3 text">
                                <span class="ic ic-2x ib ib-size-xl">
                                    <i class="fa fa-paint-brush"></i>
                                </span>
                            </div>
                            <div class="col-md-9">
                                    <h6 class="above-heading">Customizable design</h6>
                                    <h3 class="title">Unlimited Colors</h3>
                                    <p>You have never seen so many options! Change colors of dozens of elements, 
                                        apply textures, upload background images...</p>
                                    <a href="#" class="go">See all features</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature feature-icon-hover indent indent-size-xl">
                            <div class="col-md-3 text">
                                <span class="ic ic-2x ib ib-size-xl">
                                    <i class="fa fa-phone"></i>
                                </span>
                            </div>
                            <div class="col-md-9">
                                <h6 class="above-heading">12-COLUMN GRID</h6>
                                <h3 class="title">Responsive Layout</h3>
                                <p>Ultimo can be displayed on any screen. It is based on fluid grid system. 
                                    If screen is resized, layout will be automatically adjusted...</p>
                                <a href="#" class="go">See all features</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature feature-icon-hover indent indent-size-xl">
                            <div class="col-md-3 text">
                                <span class="ic ic-2x ib ib-size-xl">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="col-md-9">
                                <h6 class="above-heading">CUSTOMIZABLE DROP-DOWN MENU</h6>
                                <h3 class="title">Mega Menu</h3>
                                <p>Two styles: wide mega menu or classic drop-down menu. 
                                    You can add any custom content (images, text, HTML) to any category in the catalog...</p>
                                <a href="#" class="go">See all features</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>

</html>