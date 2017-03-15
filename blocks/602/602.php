    <!DOCTYPE html>
<html>

<head>
    <title>602</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/602.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/602.less', 'css/602.css');
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/602.js" type="text/javascript"></script>

</head>

<body>
    <div class="type-602">
        <div class="container rescure">
            <div class="row">
                <!--LIST PRODUCTS-->
                <div class="col-md-4 col-sm-4 col-xs-12 rescure2">
                    <div class="box image-boxes imgboxes_style4 kl-title_style_left">
                        <a class=" imgboxes-wrapper" href="#" target="_blank">
                            <img src="images/imageboxes-set1-011-460x307.jpg" alt="RESCUE SUPPORT" title="RESCUE SUPPORT" class="img-responsive imgbox_image cover-fit-img">
                            <h3 class="m_title imgboxes-title title">RESCUE SUPPORT</h3>
                        </a>
                        <p>Our support team will do its best to provide the best possible and helpful answer for the issues you’re having.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 rescure2">
                    <div class="box image-boxes imgboxes_style4 kl-title_style_left">
                        <a class=" imgboxes-wrapper" href="#" target="_blank">
                            <img src="images/imageboxes-set1-021-460x307.jpg" alt="E-COMMERCE READY" title="E-COMMERCE READY" class="img-responsive imgbox_image cover-fit-img">
                            <h3 class="m_title imgboxes-title title">E-COMMERCE READY</h3>
                        </a>
                        <p>Build an online store blazing fast with WooCommerce and Kallyas's ready-made ecommerce functionalities.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 rescure2">
                    <div class="box image-boxes imgboxes_style4">
                        <a class=" imgboxes-wrapper" href="#" target="_blank">
                            <img src="images/gpg4-640x426.jpg" alt="MULTI-LANGUAGE READY" title="MULTI-LANGUAGE READY" class="img-responsive imgbox_image cover-fit-img">
                            <h3 class="m_title imgboxes-title title">MULTI-LANGUAGE READY</h3>
                        </a>
                        <p>Add as many language packs as you want, to showcase your website across the entire globe.</p>
                    </div>
                </div>
                <!--END LIST PRODUCTS-->

                <!--LIST CONTACT-->
                <div class="col-md-12 col-sm-12 col-xs-12 rescure3">
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
                                    <div class="btn-buy">
                                        <a href="#" target="_blank" class="btn btn-fullcolor btn-third">BUY NOW</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <img class="img-slide" src="images/office-820390_640-580x380.jpg" />
                                <ul class="screenshot-carousel boler" data-carousel-pagination=".">
                                    <img src="images/office-820390_640-580x380.jpg" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/END LIST CONTACT-->
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>