<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

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
        $less->compileFile('less/613.less', 'css/type-b-8.css');
        ?>
        <link href="css/type-b-8.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="type-b-8">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Offer banner image link -->
                            <a href="#" target="_blank" class="offer-banners-link hoverBorder">
                                <!-- Border image wrapper -->
                                <span class="hoverBorderWrapper">
                                    <!-- Image -->
                                    <img src="images/banner-set2-51.jpg" class="img-responsive offer-banners-img" alt="" title="">

                                    <!-- Hover border -->
                                    <span class="theHoverBorder"></span>
                                </span>
                                <!--/ Border image wrapper -->
                            </a>
                            <!--/ Offer banner image link -->
                        </div>
                        <section class="hg_section ptop-65 pbottom-0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <!-- Title element -->
                                        <div class="kl-title-block clearfix text-left tbk-symbol-- tbk-icon-pos--after-title">
                                            <!-- Title with custom montserrat font, size and default theme color -->
                                            <h3 class="tbk__title montserrat fs-26 tcolor ">BROWSE CATEGORIES</h3>

                                            <!-- Sub-title with custom font size, lightgray color and thin style -->
                                            <h4 class="tbk__subtitle fs-16 light-gray fw-thin">BARELY UPDATED</h4>
                                        </div>
                                        <!--/ Title element -->
                                    </div>
                                    <!--/ col-md-12 col-sm-12 -->

                                    <div class="col-md-4 col-sm-4">
                                        <!-- Image boxes style 4 element - bottom title -->
                                        <div class="box image-boxes imgboxes_style4 kl-title_style_bottom">
                                            <!-- Image box link wrapper -->
                                            <a class="imgboxes4_link imgboxes-wrapper" href="#" target="_blank">
                                                <!-- Image -->
                                                <img src="images/shop-cat-1-460x307.jpg" class="img-responsive imgbox_image cover-fit-img" alt="CLOTHING" title="CLOTHING">
                                                <!--/ Image -->

                                                <!-- Border helper -->
                                                <span class="imgboxes-border-helper"></span>
                                                <!--/ Border helper -->

                                                <!-- Title -->
                                                <h3 class="m_title imgboxes-title">GREAT SUPPORT</h3>
                                                <!--/ Title -->
                                            </a>
                                            <!--/ Image box link wrapper -->
                                        </div>
                                        <!--/ Image boxes style 4 element - bottom title -->
                                    </div>
                                    <!--/ col-md-4 col-sm-4 -->

                                    <div class="col-md-4 col-sm-4">
                                        <!-- Image boxes style 4 element - bottom title -->
                                        <div class="box image-boxes imgboxes_style4 kl-title_style_bottom">
                                            <!-- Image box link wrapper -->
                                            <a class="imgboxes4_link imgboxes-wrapper" href="#" target="_blank">
                                                <!-- Image -->
                                                <img src="images/shop-cat-2-460x307.jpg" class="img-responsive imgbox_image cover-fit-img" alt="SHOES" title="SHOES">
                                                <!--/ Image -->

                                                <!-- Border helper -->
                                                <span class="imgboxes-border-helper"></span>
                                                <!--/ Border helper -->

                                                <!-- Title -->
                                                <h3 class="m_title imgboxes-title">SHOES</h3>
                                                <!--/ Title -->
                                            </a>
                                            <!--/ Image box link wrapper -->
                                        </div>
                                        <!--/ Image boxes style 4 element - bottom title -->
                                    </div>
                                    <!--/ col-md-4 col-sm-4 -->

                                    <div class="col-md-4 col-sm-4">
                                        <!-- Image boxes style 4 element - bottom title -->
                                        <div class="box image-boxes imgboxes_style4 kl-title_style_bottom">
                                            <!-- Image box link wrapper -->
                                            <a class="imgboxes4_link imgboxes-wrapper" href="#" target="_blank">
                                                <!-- Image -->
                                                <img src="images/shop-cat-3-460x307.jpg" class="img-responsive imgbox_image cover-fit-img" alt="ACCESSORIES" title="ACCESSORIES">
                                                <!--/ Image -->

                                                <!-- Border helper -->
                                                <span class="imgboxes-border-helper"></span>
                                                <!--/ Border helper -->

                                                <!-- Title -->
                                                <h3 class="m_title imgboxes-title">ACCESSORIES</h3>
                                                <!--/ Title -->
                                            </a>
                                            <!--/ Image box link wrapper -->
                                        </div>
                                        <!--/ Image boxes style 4 element - bottom title -->
                                    </div>
                                    <!--/ col-md-4 col-sm-4 -->

                                    <div class="col-md-12 col-sm-12">
                                        <!-- Spacer with custom height -->
                                        <div class="th-spacer clearfix" style="height: 5px;">
                                        </div>
                                    </div>
                                    <!--/col-md-12 col-sm-12  -->

                                    <div class="col-md-4 col-sm-4">
                                        <!-- Image boxes style 4 element - bottom title -->
                                        <div class="box image-boxes imgboxes_style4 kl-title_style_bottom">
                                            <!-- Image box link wrapper -->
                                            <a class="imgboxes4_link imgboxes-wrapper" href="#" target="_blank">
                                                <!-- Image -->
                                                <img src="images/shop-cat-4-460x307.jpg" class="img-responsive imgbox_image cover-fit-img" alt="KIDS" title="KIDS">
                                                <!--/ Image -->

                                                <!-- Border helper -->
                                                <span class="imgboxes-border-helper"></span>
                                                <!--/ Border helper -->

                                                <!-- Title -->
                                                <h3 class="m_title imgboxes-title">KIDS</h3>
                                                <!--/ Title -->
                                            </a>
                                            <!--/ Image box link wrapper -->
                                        </div>
                                        <!--/ Image boxes style 4 element - bottom title -->
                                    </div>
                                    <!--/ col-md-4 col-sm-4 -->

                                    <div class="col-md-4 col-sm-4">
                                        <!-- Image boxes style 4 element - bottom title -->
                                        <div class="box image-boxes imgboxes_style4 kl-title_style_bottom">
                                            <!-- Image box link wrapper -->
                                            <a class="imgboxes4_link imgboxes-wrapper" href="#" target="_blank">
                                                <!-- Image -->
                                                <img src="images/shop-cat-5-460x307.jpg" class="img-responsive imgbox_image cover-fit-img" alt="HOME GEAR" title="HOME GEAR">
                                                <!--/ Image -->

                                                <!-- Border helper -->
                                                <span class="imgboxes-border-helper"></span>
                                                <!--/ Border helper -->

                                                <!-- Title -->
                                                <h3 class="m_title imgboxes-title">HOME GEAR</h3>
                                                <!--/ Title -->
                                            </a>
                                            <!--/ Image box link wrapper -->
                                        </div>
                                        <!--/ Image boxes style 4 element - bottom title -->
                                    </div>
                                    <!--/ col-md-4 col-sm-4 -->

                                    <div class="col-md-4 col-sm-4">
                                        <!-- Title element with custom top padding -->
                                        <div class="kl-title-block clearfix text-center tbk-symbol-- tbk-icon-pos--after-title ptop-50">
                                            <!-- Title with custom montserrat font, size and bold style -->
                                            <h3 class="tbk__title montserrat fs-30 fw-bold">TOUGH DECISION?</h3>

                                            <!-- Sub-title with custom font size, lightgray color and thin style -->
                                            <h4 class="tbk__subtitle fs-16 light-gray fw-thin">YES, IT'S A SUMMER SALE STEAM</h4>
                                        </div>
                                        <!-- Title element -->

                                        <!-- Button -->
                                        <div class="text-center">
                                            <!-- Button lined custom style -->
                                            <a class="btn-element btn btn-lined lined-custom" href="#"><span>SEE THE FULL COLLECTION</span></a>
                                        </div>
                                        <!--/ Button -->
                                    </div>
                                    <!--/ col-md-4 col-sm-4 -->
                                </div>
                                <!--/ row -->
                            </div>
                            <!--/ container -->
                        </section>
                    </div>
                </div>
            </div>





        <script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    </body>

</html>