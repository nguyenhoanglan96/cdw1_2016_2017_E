<!DOCTYPE html>

<html>

    <head>
        <title>664</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/664.less', 'css/664.css');
        ?>
        <link href="css/664.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-664">  
            <div class="container img-wrapper">
                <div class="row">
                    <!------------------------------Begin Sample Custom Banners---------------------------------->
                    <h3 class="section-title">
                        Sample Custom Banners
                    </h3>
                    <hr>
                    <div class="nested-container">
                        <!-- First banner has a link which adds a product to the cart (link was copied from product's button "Add to cart") -->
                        <div class="page-banners">
                            <div class="grid12-3 banner">
                                <a href="#" title="">
                                    <img src="images/1a.png" alt="">
                                </a>
                            </div>
                            <div class="grid12-3 banner">
                                <a href="#" title="">
                                    <img src="images/1b.png" alt="">
                                </a>
                            </div>
                            <div class="grid12-6 banner">
                                <img src="images/1c.png" alt="" title="">
                            </div>
                        </div>
                    </div>
                    <!------------------------------End Sample Custom Banners------------------------------------>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>