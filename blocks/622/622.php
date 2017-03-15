<!DOCTYPE html>

<html>

    <head>
        <title>622</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/622.less', 'css/622.css');
        ?>
        <link href="css/622.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-622">
            <!---- SOLUTIONS ---->
            <div class="container content_wrap">
                <div class="row">
                    <!--- Title --->
                    <div class="title col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h6>MEET THE TEAM</h6>
                        <h2 >They Make a Wide Range of Products</h2>
                    </div>
                    <!--- /End Title --->
                    <!---- ImageBox list 1 --->
                    <div class="content">
                        <div class="item-avatar">
                            <img class="img" src="images/image1.jpg">
                        </div>
                        <div class="item-info">
                            <h5 class="item-title">
                                <a href="#">Matthew Atkins</a>
                            </h5>
                            <div class="item-position">Botanist</div>
                            <div class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacunon ummy hendrerit mauris.</div>
                        </div>
                    </div>
                    <!---- /End ImageBox list 1 --->
                    <!---- ImageBox list 2 --->
                    <div class="content">
                        <div class="item-avatar">
                            <img class="img" src="images/image4.jpg">
                        </div>
                        <div class="item-info">
                            <h5 class="item-title">
                                <a href="#">Matthew Atkins</a>
                            </h5>
                            <div class="item-position">Botanist</div>
                            <div class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacunon ummy hendrerit mauris.</div>
                        </div>
                    </div>
                    <!---- /End ImageBox list 2 --->
                    <!---- ImageBox list 3 --->
                    <div class="content">
                        <div class="item-avatar">
                            <img class="img" src="images/image2.jpg">
                        </div>
                        <div class="item-info">
                            <h5 class="item-title">
                                <a href="#">Matthew Atkins</a>
                            </h5>
                            <div class="item-position">Botanist</div>
                            <div class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacunon ummy hendrerit mauris.</div>
                        </div>
                    </div>
                    <!---- /End ImageBox list 3 --->
                    <!---- ImageBox list 4 --->
                    <div class="content">
                        <div class="item-avatar">
                            <img class="img" src="images/image3.jpg">
                        </div>
                        <div class="item-info">
                            <h5 class="item-title">
                                <a href="#">Matthew Atkins</a>
                            </h5>
                            <div class="item-position">Botanist</div>
                            <div class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacunon ummy hendrerit mauris.</div>
                        </div>
                    </div>
                    <!---- /End ImageBox list 2 --->
                </div>
            </div>
            <!---- END SOLUTIONS ---->
        </div>

    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</html>
