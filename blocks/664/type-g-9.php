<!DOCTYPE html>

<html>

    <head>
        <title></title>
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
        $less->compileFile('less/type-g-9.less', 'css/type-g-9.css');
        ?>
        <link href="css/type-g-9.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-g-9">  
            <div class="container">
                <!------------------------------Begin Sample Custom Banners---------------------------------->
                <h3 class="section-title padding-right">Sample Custom Banner</h3>
                <hr>
                <div class="nested-container">

                    <!-- First banner has a link which adds a product to the cart (link was copied from product's button "Add to cart") -->
                    <div class="page-banners grid-container">
                        <div class="grid12-3 banner fade-on-hover hide-below-768" style="opacity: 1;">
                            <a href="#" title="Click to add sample product to your cart">
                                <img class="fade-on-hover" src="{!! url('public/nhomg/images/img/1a.png') !!}" alt="Add product to cart" style="opacity: 1;">
                            </a>
                        </div>
                        <div class="grid12-3 banner fade-on-hover hide-below-768">
                            <a href="#" title="Click to go to cart page">
                                <img class="fade-on-hover" src="{!! url('public/nhomg/images/img/1b.png') !!}" alt="Go to Magento cart page">
                            </a>
                        </div>
                        <div class="grid12-6 banner">
                            <img class="fade-on-hover" src="{!! url('public/nhomg/images/img/1c.png') !!}" alt="Magento discount code" title="Use discount code/coupon on cart page">
                        </div>
                    </div>

                </div>
                <!------------------------------End Sample Custom Banners------------------------------------>
                <div class="clear"></div>
                <br>
                <br>
                <br>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>