<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Home – STEEL</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type_3_slider.less', 'css/type_3_slider.css');
        ?>
        <link href="css/type_3_slider.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>

        <div class="type_3_slider">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row slider-wrapper">     
                            <div class=" vc_custom_1435891593459">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <div class=" camera_wrap camera_azure_skin" data-time="5000" data-color="#fde230" data-loader="bar" data-height="34%">
                                            
                                                <div class="camera_target">
                                                    <div class="cameraCont">
                                                        <div class="carousel-inner">
                                                            <div class="item active">
                                                                <img src="images/slider-3.jpg" class="imgLoaded" data-alignment="" data-portrait="" width="1900" height="591" style="">
                                                                <div class="camerarelative" ></div>
                                                                <div class=" carousel-caption">
                                                                    <h1>ALL KINDS OF STEEL PRODUCTS</h1>
                                                                    <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <img src="images/slider-1.jpg" class="imgLoaded" data-alignment="" data-portrait="" width="1900" height="591" >
                                                                <div class="camerarelative"></div>
                                                                <div class="carousel-caption">
                                                                    <h1>STEEL’S BRANDED PRODUCTS AND SOLUTIONS</h1>
                                                                    <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <img src="images/slider-2.jpg" class="imgLoaded" data-alignment="" data-portrait="" width="1900" height="591" >
                                                                <div class="camerarelative"></div>
                                                                <div class="carousel-caption">
                                                                    <h1>OUR MAIN GOAL IS CONTINUOUSLY SATISFY OUR CLIENTS</h1>
                                                                    <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>

                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                </ol>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>