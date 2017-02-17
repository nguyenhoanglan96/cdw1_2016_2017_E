<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/type-b-5.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-b-5.less', 'css/type-b-5.css');
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-b-5">
                <section class="hg_section ptop-65">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <!-- Hover box element -->
                                <div>
                                    <!-- Link box with background color -->
                                    <a href="#" target="_blank" style="background-color: #34495e;" class="hover-box hover-box-2">
                                        <!-- Hover icon -->
                                        <span class="hb-circle"></span>
                                        <!--/ Hover icon -->

                                        <!-- Image/Icon -->
                                        <img src="images/quote1.svg" class="hb-img rb-right" alt="" title="">
                                        <!--/ Image/Icon -->

                                        <!-- Title -->
                                        <h3>get a quote</h3>
                                        <!--/ Title -->

                                        <!-- Description -->
                                        <p>
                                            Share your idea and let�s create<br>
                                            a great project together!
                                        </p>
                                        <!--/ Description -->
                                    </a>
                                    <!--/ Link box with background color -->
                                </div>
                                <!--/ Hover box element -->
                            </div>
                            <!--/ col-md-4 col-sm-4 -->

                            <div class="col-md-4 col-sm-4">
                                <!-- Hover box element -->
                                <div>
                                    <!-- Link box with background color-->
                                    <a href="#" target="_blank" style="background-color: #34495e;" class="hover-box hover-box-2">
                                        <!-- Hover icon -->
                                        <span class="hb-circle"></span>
                                        <!-- Hover icon -->

                                        <!-- Image/Icon -->
                                        <img src="images/hb-hiring.svg" class="hb-img rb-right" alt="" title="">
                                        <!--/ Image/Icon -->

                                        <!-- Title -->
                                        <h3>hiring: ON</h3>
                                        <!--/ Title -->

                                        <!-- Subtitle -->
                                        <h4>Developer wanted! </h4>
                                        <!-- Subtitle -->

                                        <!-- Description -->
                                        <p>
                                            Send your kickass resume<br>
                                            on jobs@mywebsite.com
                                        </p>
                                        <!--/ Description -->
                                    </a>
                                    <!--/ Link box with background color -->
                                </div>
                                <!--/ Hover box element -->
                            </div>
                            <!--/ col-md-4 col-sm-4 -->

                            <div class="col-md-4 col-sm-4">
                                <!-- Hover box element -->
                                <div>
                                    <!-- Link box with background image -->
                                    <a href="#" target="_blank" style="background-image:url(images/hb-catalogue1.png); background-color: #34495e; background-size:cover" class="hover-box hover-box-3">
                                        <!-- Image/Icon -->
                                        <img src="images/hb-catalogue1.png" class="hb-img " alt="" title="">
                                        <!--/ Image/Icon -->

                                        <!-- Title -->
                                        <h3>download catalogue</h3>
                                        <!--/ Title -->

                                        <!-- Description -->
                                        <p>
                                            Read our latest catalog, collateral material or print advertisements for your publication.
                                        </p>
                                        <!--/ Description -->
                                    </a>
                                    <!--/ Link box with background image -->
                                </div>
                                <!--/ Hover box element -->
                            </div>
                            <!--/ col-md-4 col-sm-4 -->
                        </div>
                        <!--/ row -->
                    </div>
                    <!--/ container -->
                </section>
                   <section class="hg_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <!-- Latest posts accordion style -->
                                <div class="latest_posts acc-style">
                                    <!-- Title -->
                                    <h3 class="m_title">OUR LATEST STORIES</h3>
                                    <!--/ Title -->

                                    <!-- View all posts button -->
                                    <a href="#" class="viewall">VIEW ALL -</a>
                                    <!--/ View all posts button -->

                                    <!-- CSS3 Accordion -->
                                    <div class="css3accordion">
                                        <ul>
                                            <!-- Post -->
                                            <li>
                                                <!-- Post wrapper -->
                                                <div class="inner-acc" style="width: 570px;">
                                                    <!-- Post link wrapper -->
                                                    <a href="#" class="thumb hoverBorder plus">
                                                        <!-- Border wrapper -->
                                                        <span class="hoverBorderWrapper">
                                                            <!-- Image -->
                                                            <img src="images/css3panels-alt-04-370x200.jpg" alt="" title="">
                                                            <!--/ Image -->

                                                            <!-- Hover border/shadow -->
                                                            <span class="theHoverBorder"></span>
                                                            <!--/ Hover border/shadow -->
                                                        </span>
                                                        <!--/ Border wrapper -->
                                                    </a>
                                                    <!-- Post link wrapper -->

                                                    <!-- Post content -->
                                                    <div class="content">
                                                        <!-- Details & tags -->
                                                        <em>21 August 2016 by danut, in Mobile</em>
                                                        <!--/ Details & tags -->

                                                        <!-- Title with link -->
                                                        <h5 class="m_title"><a href="#">Enthusiastically administrate ubiquitous</a></h5>
                                                        <!--/ Title with link -->

                                                        <!-- Content text -->
                                                        <div class="text">
                                                            Competently leverage other�s high standards in customer service after supe...
                                                        </div>
                                                        <!--/ Content text -->

                                                        <!-- Read more button -->
                                                        <a href="#">READ MORE +</a>
                                                        <!--/ Read more button -->
                                                    </div>
                                                    <!--/ Post content -->
                                                </div>
                                                <!--/ Post wrapper -->
                                            </li>
                                            <!--/ Post -->

                                            <!-- Post -->
                                            <li>
                                                <!-- Post wrapper -->
                                                <div class="inner-acc" style="width: 570px;">
                                                    <!-- Post link wrapper -->
                                                    <a href="#" class="thumb hoverBorder plus">
                                                        <!-- Border wrapper -->
                                                        <span class="hoverBorderWrapper">
                                                            <!-- Image -->
                                                            <img src="images/general-bg-8-370x200.jpg" alt="" title="">
                                                            <!--/ Image -->

                                                            <!-- Hover border/shadow -->
                                                            <span class="theHoverBorder"></span>
                                                            <!--/ Hover border/shadow -->
                                                        </span>
                                                        <!--/ Border wrapper -->
                                                    </a>
                                                    <!--/ Post link wrapper -->

                                                    <!-- Post content -->
                                                    <div class="content">
                                                        <!-- Details & tags -->
                                                        <em>07 August 2016 by Marius H., in Mobile,Technology</em>
                                                        <!--/ Details & tags -->

                                                        <!-- Title with link -->
                                                        <h5 class="m_title"><a href="#">Uniquely productize next-generation opportunities</a></h5>
                                                        <!--/ Title with link -->

                                                        <!-- Content text -->
                                                        <div class="text">
                                                            Appropriately pontificate synergistic para digms whereas 24/7 �outside the...
                                                        </div>
                                                        <!--/ Content text -->

                                                        <!-- Read more button -->
                                                        <a href="#">READ MORE +</a>
                                                        <!--/ Read more button -->
                                                    </div>
                                                    <!--/ Post content -->
                                                </div>
                                                <!--/ Post wrapper -->
                                            </li>
                                            <!--/ Post -->

                                            <!-- Post -->
                                           <li>
                                                <!-- Post wrapper -->
                                                <div class="inner-acc" style="width: 570px;">
                                                    <!-- Post link wrapper -->
                                                    <a href="#" class="thumb hoverBorder plus">
                                                        <!-- Border wrapper -->
                                                        <span class="hoverBorderWrapper">
                                                            <!-- Image -->
                                                            <img src="images/blog1-370x200.jpg" alt="" title="">
                                                            <!--/ Image -->

                                                            <!-- Hover border/shadow -->
                                                            <span class="theHoverBorder"></span>
                                                            <!--/ Hover border/shadow -->
                                                        </span>
                                                        <!--/ Border wrapper -->
                                                    </a>
                                                    <!-- Post link wrapper -->

                                                    <!-- Post content -->
                                                    <div class="content">
                                                        <!-- Details & tags -->
                                                        <em>21 August 2016 by danut, in Mobile</em>
                                                        <!--/ Details & tags -->

                                                        <!-- Title with link -->
                                                        <h5 class="m_title"><a href="#">Enthusiastically administrate ubiquitous</a></h5>
                                                        <!--/ Title with link -->

                                                        <!-- Content text -->
                                                        <div class="text">
                                                            Competently leverage other�s high standards in customer service after supe...
                                                        </div>
                                                        <!--/ Content text -->

                                                        <!-- Read more button -->
                                                        <a href="#">READ MORE +</a>
                                                        <!--/ Read more button -->
                                                    </div>
                                                    <!--/ Post content -->
                                                </div>
                                                <!--/ Post wrapper -->
                                            </li>
                                            <!--/ Post -->
                                        </ul>
                                    </div>
                                    <!--/ CSS3 Accordion -->
                                </div>
                                <!--/ Latest posts accordion style -->
                            </div>
                            <!--/ col-md-12 col-sm-12 -->
                        </div>
                        <!--/ row -->
                    </div>
                    <!--/ hg_section_size container -->
                </section>
                <section class="hg_section hg_section--relative ptop-80 pbottom-80">
                    <!-- Background -->
                    <div class="kl-bg-source">
                        <!-- Gradient overlay -->
                        <div class="kl-bg-source__overlay" style="background:rgba(205,33,34,1); background: -moz-linear-gradient(left, rgba(205,33,34,1) 0%, rgba(245,72,76,1) 100%); background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(205,33,34,1)), color-stop(100%,rgba(245,72,76,1))); background: -webkit-linear-gradient(left, rgba(205,33,34,1) 0%,rgba(245,72,76,1) 100%); background: -o-linear-gradient(left, rgba(205,33,34,1) 0%,rgba(245,72,76,1) 100%); background: -ms-linear-gradient(left, rgba(205,33,34,1) 0%,rgba(245,72,76,1) 100%); background: linear-gradient(to right, rgba(205,33,34,1) 0%,rgba(245,72,76,1) 100%); ">
                        </div>
                        <!--/ Gradient overlay -->
                    </div>
                    <!--/ Background -->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <!-- Title element with bottom line style -->
                                <div class="kl-title-block clearfix text-center tbk-symbol--line tbk-icon-pos--after-title">
                                    <!-- Title with montserrat font, white color and bold style -->
                                    <h3 class="tbk__title white montserrat fw-bold">BELOVED REVIEWS &amp; TECHNOLOGIES</h3>
                                    <!--/ Title with montserrat font, white color and bold style -->

                                    <!-- Title bottom symbol -->
                                    <div class="tbk__symbol ">
                                        <span></span>
                                    </div>
                                    <!--/ Title bottom symbol -->
                                </div>
                                <!--/ Title element with bottom line style -->
                                <div class="ts-pt-partners ts-pt-partners--y-title clearfix">
                                    <!-- Title -->
                                    <div class="ts-pt-partners__title">
                                        TECHNOLOGIES
                                    </div>
                                    <!--/ Title -->

                                    <!-- Partners carousel wrapper -->
                                    <div class="ts-pt-partners__carousel-wrapper">
                                        <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 885px; height: 60px; margin: 0px; overflow: hidden;"><div class="ts-pt-partners__carousel" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 3717px; height: 60px; opacity: 1; z-index: auto;">
                                                <!-- Item #1 -->

                                                <!--/ Item #1 -->

                                                <!-- Item #2 -->

                                                <!--/ Item #2 -->

                                                <!-- Item #3 -->

                                                <!--/ Item #3 -->

                                                <!-- Item #4 -->

                                                <!--/ Item #4 -->

                                                <!-- Item #5 -->

                                                <!--/ Item #5 -->

                                                <!-- Item #6 -->

                                                <!--/ Item #6 -->

                                                <!-- Item #7 -->

                                                <!--/ Item #7 -->

                                                <!-- Item  #8-->

                                                <!--/ Item #8 -->
                                                <div class="ts-pt-partners__carousel-item ts-pt--active-item" style="width: 177px;">
                                                    <!-- Partner image link -->
                                                    <a class="ts-pt-partners__link" href="#" target="_self" title="">
                                                        <!-- Image -->
                                                        <img class="ts-pt-partners__img" src="http://myzone.themeforest.netdna-cdn.com/images/logo7.svg" alt="" title="">
                                                        <!--/ Image -->
                                                    </a>
                                                    <!--/ Partner image link -->
                                                </div><div class="ts-pt-partners__carousel-item ts-pt--active-item" style="width: 177px;">
                                                    <!-- Partner image link -->
                                                    <a class="ts-pt-partners__link" href="#" target="_self" title="">
                                                        <!-- Image -->
                                                        <img class="ts-pt-partners__img" src="http://myzone.themeforest.netdna-cdn.com/images/logo8.svg" alt="" title="">
                                                        <!--/ Image -->
                                                    </a>
                                                    <!--/ Partner image link -->
                                                </div><div class="ts-pt-partners__carousel-item ts-pt--active-item" style="width: 177px;">
                                                    <!-- Partner image link -->
                                                    <a class="ts-pt-partners__link" href="#" target="_self" title="">
                                                        <!-- Image -->
                                                        <img class="ts-pt-partners__img" src="http://myzone.themeforest.netdna-cdn.com/images/logo1.svg" alt="" title="">
                                                        <!--/ Image -->
                                                    </a>
                                                    <!--/ Partner image link -->
                                                </div><div class="ts-pt-partners__carousel-item ts-pt--active-item" style="width: 177px;">
                                                    <!-- Partner image link -->
                                                    <a class="ts-pt-partners__link" href="#" target="_self" title="">
                                                        <!-- Image -->
                                                        <img class="ts-pt-partners__img" src="http://myzone.themeforest.netdna-cdn.com/images/logo2.svg" alt="" title="">
                                                        <!--/ Image -->
                                                    </a>
                                                    <!--/ Partner image link -->
                                                </div><div class="ts-pt-partners__carousel-item ts-pt--active-item" style="width: 177px;">
                                                    <!-- Partner image link -->
                                                    <a class="ts-pt-partners__link" href="#" target="_self" title="">
                                                        <!-- Image -->
                                                        <img class="ts-pt-partners__img" src="http://myzone.themeforest.netdna-cdn.com/images/logo3.svg" alt="" title="">
                                                        <!--/ Image -->
                                                    </a>
                                                    <!--/ Partner image link -->
                                                </div><div class="ts-pt-partners__carousel-item" style="width: 177px;">
                                                    <!-- Partner image link -->
                                                    <a class="ts-pt-partners__link" href="#" target="_self" title="">
                                                        <!-- Image -->
                                                        <img class="ts-pt-partners__img" src="http://myzone.themeforest.netdna-cdn.com/images/logo4.svg" alt="" title="">
                                                        <!--/ Image -->
                                                    </a>
                                                    <!--/ Partner image link -->
                                                </div><div class="ts-pt-partners__carousel-item" style="width: 177px;">
                                                    <!-- Partner image link -->
                                                    <a class="ts-pt-partners__link" href="#" target="_self" title="">
                                                        <!-- Image -->
                                                        <img class="ts-pt-partners__img" src="http://myzone.themeforest.netdna-cdn.com/images/logo5.svg" alt="" title="">
                                                        <!--/ Image -->
                                                    </a>
                                                    <!--/ Partner image link -->
                                                </div><div class="ts-pt-partners__carousel-item" style="width: 177px;">
                                                    <!-- Partner image link -->
                                                    <a class="ts-pt-partners__link" href="#" target="_self" title="">
                                                        <!-- Image -->
                                                        <img class="ts-pt-partners__img" src="http://myzone.themeforest.netdna-cdn.com/images/logo6.svg" alt="" title="">
                                                        <!--/ Image -->
                                                    </a>
                                                    <!--/ Partner image link -->
                                                </div></div></div>
                                        <!--/ .ts-pt-partners__carousel -->
                                    </div>
                                    <!--/ Partners carousel wrapper -->
                                </div>
                            </div>
                            <!--/ col-md-12 col-sm-12 -->
                        </div>
                        <!--/ row -->
                    </div>
                    <!--/ container -->
                </section>
                <section class="hg_section bg-white ptop-65 pb-20">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-sm-9">
                                <!-- Title element -->
                                <div class="kl-title-block clearfix text-left tbk-symbol-- tbk-icon-pos--after-title">
                                    <!-- Title -->
                                    <h3 class="tbk__title montserrat fw-semibold tcolor">WORK WITH US</h3>
                                    <!--/ Title -->

                                    <!-- Sub-Title -->
                                    <h4 class="tbk__subtitle fw-thin">We'll do everything we can to make our next best project!</h4>
                                    <!--/ Sub-Title -->
                                </div>
                                <!--/ Title element -->
                            </div>
                            <!--/ col-md-9 col-sm-9 -->

                            <div class="col-md-3 col-sm-3">
                                <!-- spacer with custom height -->
                                <div class="th-spacer clearfix" style="height: 10px;">
                                </div>
                                <!--/ spacer with custom height -->

                                <!-- Button lined style -->
                                <div class="text-left">
                                    <a class="btn-element btn btn-lined lined-custom btn-md btn-block " href="#" style="margin:0 0 10px 0;">
                                        <span>GET A QUOTE</span>
                                    </a>
                                </div>
                                <!--/ Button lined style -->
                            </div>
                            <!--/ col-md-3 col-sm-3 -->
                        </div>
                        <!--/ row -->
                    </div>
                    <!--/ container -->
                </section>
            </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>