<!DOCTYPE html>

<html>

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
        $less->compileFile('less/type-b-2.less', 'css/type-b-2.css');
        ?>
        <link href="css/type-b-2.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-b-2">
            <section class="hg_section bg-white ptop-65">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <!-- Title element -->
                            <div class="kl-title-block clearfix text-center tbk-symbol-- tbk-icon-pos--after-title">
                                <!-- Title with montserrat font, custom font size and line height, bold style and light gray color -->
                                <h3 class="tbk__title montserrat fs-44 lh-44 fw-bold light-gray3">OK, SO WHY KALLYAS?</h3>
                                <!--/ Title with montserrat font, custom font size and line height, bold style and light gray color -->

                                <!-- Sub-Title with custom font size an very thin style -->
                                <h4 class="tbk__subtitle fs-18 fw-vthin">Well, lots of reasons, but most importantly because..</h4>
                                <!--/ Sub-Title with custom font size an very thin style -->
                            </div>
                            <!--/ Title element -->
                        </div>
                        <!--/ col-md-12 col-sm-12 -->
                    </div>
                    <!--/ row -->
                </div>
                <!--/ container -->
            </section>

            <section class="hg_section bg-white">
                <div class="full_width">
                    <div class="row">
                        <div class="col-sm-offset-1 col-md-10 col-sm-10">
                            <div class="row gutter-md">
                                <div class="col-md-3 col-sm-3">
                                    <!-- Icon box float left -->
                                    <div class="kl-iconbox kl-iconbox--fleft text-left">
                                        <div class="kl-iconbox__inner">
                                            <!-- Icon -->
                                            <div class="kl-iconbox__icon-wrapper">
                                                <img class="kl-iconbox__icon" src="images/set-03-01.svg" alt="Stunning Page Builder">
                                            </div>
                                            <!--/ Icon -->

                                            <!-- /.kl-iconbox__icon-wrapper -->
                                            <div class="kl-iconbox__content-wrapper">
                                                <!-- Title -->
                                                <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                                    <h3 class="kl-iconbox__title fs-22 lh-30 fw-normal gray2">Stunning Elements</h3>
                                                </div>
                                                <!--/ Title -->

                                                <!-- Description -->
                                                <div class=" kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                                    <p class="kl-iconbox__desc fs-14 gray">
                                                        Set up pages and content like a <strong>PRO</strong>. Coding is not required and a handy documentation is included.
                                                    </p>
                                                </div>
                                                <!--/ Description -->
                                            </div>
                                            <!-- /.kl-iconbox__content-wrapper -->
                                        </div>
                                        <!--/ kl-iconbox__inner -->
                                    </div>
                                    <!--/ Icon box float left -->
                                </div>
                                <!--/ col-md-3 col-sm-3 -->

                                <div class="col-md-3 col-sm-3">
                                    <!-- Icon box float left -->
                                    <div class="kl-iconbox kl-iconbox--fleft text-left">
                                        <div class="kl-iconbox__inner">
                                            <!-- Icon -->
                                            <div class="kl-iconbox__icon-wrapper">
                                                <img class="kl-iconbox__icon" src="images/set-03-02.svg" alt="Iconic Awarded Design">
                                            </div>
                                            <!--/ Icon -->

                                            <!-- /.kl-iconbox__icon-wrapper -->
                                            <div class="kl-iconbox__content-wrapper">
                                                <!-- Title -->
                                                <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                                    <h3 class="kl-iconbox__title fs-22 lh-30 fw-normal gray2">Iconic Awarded Design</h3>
                                                </div>
                                                <!--/ Title -->

                                                <!-- Description -->
                                                <div class=" kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                                    <p class="kl-iconbox__desc fs-14 gray">
                                                        Our design is featured across multiple marketplaces and awarded for its looks. Walk-through and enjoy the visuals.
                                                    </p>
                                                </div>
                                                <!--/ Description -->
                                            </div>
                                            <!-- /.kl-iconbox__content-wrapper -->
                                        </div>
                                        <!--/ kl-iconbox__inner -->
                                    </div>
                                    <!-- Icon box float left -->
                                </div>
                                <!--/ col-md-3 col-sm-3 -->

                                <div class="col-md-3 col-sm-3">
                                    <!-- Icon box float left -->
                                    <div class="kl-iconbox kl-iconbox--fleft text-left">
                                        <div class="kl-iconbox__inner">
                                            <!-- Icon -->
                                            <div class="kl-iconbox__icon-wrapper">
                                                <img class="kl-iconbox__icon" src="images/set-03-03.svg" alt="Featurewise Complete">
                                            </div>
                                            <!--/ Icon -->

                                            <!-- /.kl-iconbox__icon-wrapper -->
                                            <div class="kl-iconbox__content-wrapper">
                                                <!-- Title -->
                                                <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                                    <h3 class="kl-iconbox__title fs-22 lh-30 fw-normal gray2">Featurewise Complete</h3>
                                                </div>
                                                <!--/ Title -->

                                                <!-- Description -->
                                                <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                                    <p class="kl-iconbox__desc fs-14 gray">
                                                        Without a doubt, Kallyas is one of the most complete WordPress theme on the market, being packed with all the goodies and sweet gems.
                                                    </p>
                                                </div>
                                                <!--/ Description -->
                                            </div>
                                            <!-- /.kl-iconbox__content-wrapper -->
                                        </div>
                                        <!--/ kl-iconbox__inner -->
                                    </div>
                                    <!--/ Icon box float left -->
                                </div>
                                <!--/ col-md-3 col-sm-3 -->

                                <div class="col-md-3 col-sm-3">
                                    <!-- Icon box float left -->
                                    <div class="kl-iconbox kl-iconbox--fleft text-left">
                                        <div class="kl-iconbox__inner">
                                            <!-- Icon -->
                                            <div class="kl-iconbox__icon-wrapper ">
                                                <img class="kl-iconbox__icon" src="images/set-03-04.svg" alt="Mature project">
                                            </div>
                                            <!--/ Icon -->

                                            <!-- /.kl-iconbox__icon-wrapper -->
                                            <div class="kl-iconbox__content-wrapper">
                                                <!-- Title -->
                                                <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                                    <h3 class="kl-iconbox__title fs-22 lh-30 fw-normal gray2">Mature project</h3>
                                                </div>
                                                <!--/ Title -->

                                                <!-- Description -->
                                                <div class=" kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                                    <p class="kl-iconbox__desc fs-14 gray">
                                                        In time, gathering awesome feedback from our loyal customers, Kallyas became a mature, stable and future-proof project.
                                                    </p>
                                                </div>
                                                <!--/ Description -->
                                            </div>
                                            <!-- /.kl-iconbox__content-wrapper -->
                                        </div>
                                        <!--/ kl-iconbox__inner -->
                                    </div>
                                </div>
                                <!--/ col-md-3 col-sm-3 -->
                            </div>
                            <!--/ row gutter-md -->
                        </div>
                        <!--/ col-sm-offset-1 col-md-10 col-sm-10 -->
                    </div>
                    <!--/ row -->
                </div>
                <!--/ full_width -->
            </section>
        </div>


    </body>

</html>