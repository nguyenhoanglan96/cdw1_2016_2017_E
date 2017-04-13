<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/604.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/604.less', 'css/604.css');
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-604">
            <div class="container">
                <section class=" ptop-65">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                                <a href="#" target="_blank" style="background-color: #34495e;" class="hover-box hover-box-2">
                                    <span ></span>
                                    <img src="images/quote1.svg" class="hb-img " alt="" title="">
                                    <h3>get a quote</h3>
                                    <p>
                                        Share your idea and let�s create<br>
                                        a great project together!
                                    </p>
                                </a>
                        </div>

                        <div class="col-md-4 col-sm-4">
                                <a href="#" target="_blank" style="background-color: #34495e;" class="hover-box hover-box-2">
                                    <span></span>
                                    <img src="images/hb-hiring.svg" class="hb-img " alt="" title="">
                                    <h3>hiring: ON</h3>
                                    <h4>Developer wanted! </h4>
                                    <p>
                                        Send your kickass resume<br>
                                        on jobs@mywebsite.com
                                    </p>
                                </a>
                        </div>

                        <div class="col-md-4 col-sm-4">
                                <a href="#" target="_blank" style="background-image:url(images/hb-catalogue1.png); background-color: #34495e; background-size:cover" class="hover-box hover-box-3">
                                    <!-- Image/Icon -->
                                    <img src="images/hb-catalogue1.png" class="hb-img " alt="" title="">
                                    <h3>download catalogue</h3>
                                    <p>
                                        Read our latest catalog, collateral material or print advertisements for your publication.
                                    </p>
                                </a>
                        </div>
                    </div>

                    <!--/ container -->
                </section>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="latest_posts acc-style">
                            <h3 class="m_title">OUR LATEST STORIES</h3>
                            <a href="#" class="viewall">VIEW ALL -</a>
                            <div class="css3accordion">
                                <ul>
                                    <!-- Post -->
                                    <li>
                                        <!-- Post wrapper -->
                                        <div class="inner-acc" style="width: 570px;">
                                            <!-- Post link wrapper -->
                                            <a href="#" class="thumb plus">
                                                <!-- Border wrapper -->
                                                <span >
                                                    <!-- Image -->
                                                    <img src="images/css3panels-alt-04-370x200.jpg" alt="" title="">
                                                    <span class="theHoverBorder"></span>

                                                </span>
                                            </a>
                                            <div class="content">
                                                <em>21 August 2016 by danut, in Mobile</em>
                                                <h5 class="m_title"><a href="#">Enthusiastically administrate ubiquitous</a></h5>
                                                <!--/ Title with link -->
                                                <div class="text">
                                                    Competently leverage other�s high standards in customer service after supe...
                                                </div>
                                                <a href="#">READ MORE +</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- Post wrapper -->
                                        <div class="inner-acc" style="width: 570px;">
                                            <!-- Post link wrapper -->
                                            <a href="#" class="thumb plus">
                                                <!-- Border wrapper -->
                                                <span>
                                                    <img src="images/general-bg-8-370x200.jpg" alt="" title="">

                                                    <!-- Hover border/shadow -->
                                                    <span class="theHoverBorder"></span>
                                                    <!--/ Hover border/shadow -->
                                                </span>
                                                <!--/ Border wrapper -->
                                            </a>
                                            <div class="content">
                                                <em>07 August 2016 by Marius H., in Mobile,Technology</em>
                                                <h5 class="m_title"><a href="#">Uniquely productize next-generation opportunities</a></h5>
                                                <div class="text">
                                                    Appropriately pontificate synergistic para digms whereas 24/7 �outside the...
                                                </div>
                                                <a href="#">READ MORE +</a>
                                                <!--/ Read more button -->
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner-acc" style="width: 570px;">
                                            <!-- Post link wrapper -->
                                            <a href="#" class="thumb plus">
                                                <!-- Border wrapper -->
                                                <span>
                                                    <!-- Image -->
                                                    <img src="images/blog1-370x200.jpg" alt="" title="">
                                                    <!-- Hover border/shadow -->
                                                    <span class="theHoverBorder"></span>
                                                </span>
                                            </a>
                                            <div class="content">
                                                <em>21 August 2016 by danut, in Mobile</em>
                                                <h5 class="m_title"><a href="#">Enthusiastically administrate ubiquitous</a></h5>
                                                <div class="text">
                                                    Competently leverage other�s high standards in customer service after supe...
                                                </div>
                                                <a href="#">READ MORE +</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <section class=" bg-white ptop-65 pb-20">
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <h3 class=" fw-semibold tcolor">WORK WITH US</h3>
                            <h4 class=" fw-thin">We'll do everything we can to make our next best project!</h4>
                        </div>
                        <div class="col-md-3 col-sm-3">
                                <a class=" btn btn-lined lined-custom btn-md btn-block " href="#" style="margin:0 0 10px 0;">
                                    <span>GET A QUOTE</span>
                                </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>