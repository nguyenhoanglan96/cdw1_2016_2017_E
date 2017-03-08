<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/type-b-3.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/602.less', 'css/type-b-3.css');
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-b-3">
            <section class=" bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="box image-boxes imgboxes_style4 kl-title_style_left">
                                <a class=" imgboxes-wrapper" href="#" target="_blank">
                                    <img src="images/imageboxes-set1-011-460x307.jpg" alt="RESCUE SUPPORT" title="RESCUE SUPPORT" class="img-responsive imgbox_image cover-fit-img">
                                    <h3 class="m_title imgboxes-title">RESCUE SUPPORT</h3>
                                </a>
                                <p>Our support team will do its best to provide the best possible and helpful answer for the issues you’re having.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="box image-boxes imgboxes_style4 kl-title_style_left">
                                <!-- Image Box anchor link -->
                                <a class=" imgboxes-wrapper" href="#" target="_blank">
                                    <img src="images/imageboxes-set1-021-460x307.jpg" alt="E-COMMERCE READY" title="E-COMMERCE READY" class="img-responsive imgbox_image cover-fit-img">
                                    <h3 class="m_title imgboxes-title">E-COMMERCE READY</h3>
                                </a>
                                <p>Build an online store blazing fast with WooCommerce and Kallyas's ready-made ecommerce functionalities.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="box image-boxes imgboxes_style4">
                                <a class=" imgboxes-wrapper" href="#" target="_blank">
                                    <img src="images/gpg4-640x426.jpg" alt="MULTI-LANGUAGE READY" title="MULTI-LANGUAGE READY" class="img-responsive imgbox_image cover-fit-img">
                                    <h3 class="m_title imgboxes-title">MULTI-LANGUAGE READY</h3>
                                </a>
                                <p>Add as many language packs as you want, to showcase your website across the entire globe.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!------------/////2/////---------------->
            <section class=" pbottom-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="screenshot-box kl-style-2">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="left-side">
                                            <h3 class="title">
                                                <span >This is Kallyas Template, a rich featured, epic, 
                                                    <span class="fw-semibold">mature and premium work.</span>                                                     
                                                </span>
                                            </h3>
                                            <ul class="features">
                                                <li>
                                                    <h4>FRONTEND PAGE BUILDER</h4>
                                                    <span>Comfortable and intuitive visual drag and drop builder.</span>
                                                </li>
                                                <li>
                                                    <h4>UNLIMITED COLORS</h4>
                                                    <span>Personalize the theme’s colors as much as you want for almost any element.</span>
                                                </li>
                                                <li>
                                                    <h4>HIGHLY CUSTOMIZABLE</h4>
                                                    <span>Yet highly intuitive and easy to use, in just a matter of hours become a pro.</span>
                                                </li>
                                            </ul>
                                            <a href="#" target="_blank" class="btn btn-fullcolor btn-third">BUY NOW</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="thescreenshot">
                                            <div class="controls">
                                                <a href="#" class="prev" style="display: inline;"></a>
                                                <a href="#" class="next" style="display: inline;"></a>
                                            </div>
                                            <div style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 555px; height: 364px; margin: 0px; overflow: hidden;">
                                                <ul class="screenshot-carousel" data-carousel-pagination="." style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 3885px; height: 364px; z-index: 1; opacity: 0.160944;">
                                                    <li style="width: 555px;">
                                                        <img src="images/ipad-605439_640-580x380.jpg" />
                                                    </li>
                                                    <li style="width: 555px;">
                                                        <img src="images/phone-690091_640-580x380.jpg" />
                                                    </li>
                                                    <li style="width: 555px;">
                                                        <img src="images/office-820390_640-580x380.jpg" />
                                                    </li>
                                                </ul>
                                                <ul class="screenshot-carousel" data-carousel-pagination="." style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 3885px; height: 364px; z-index: 0; opacity: 0.839056;">
                                                    <li style="width: 555px;">
                                                        <img src="images/office-820390_640-580x380.jpg" />
                                                    </li>
                                                </ul>
                                            </div>

                                            <div style="display: block;">
                                                <a href="#">
                                                    <span>1</span>
                                                </a>
                                                <a href="#">
                                                    <span>2</span>
                                                </a>
                                                <a href="#">
                                                    <span>3</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>