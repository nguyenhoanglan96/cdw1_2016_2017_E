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
                            <div>
                                <a href="#" target="_blank" style="background-color: #34495e;" class="hover-box hover-box-2">
                                    <span class="hb-circle"></span>
                                    <img src="images/quote1.svg" class="hb-img " alt="" title="">
                                    <h3>get a quote</h3>
                                    <p>
                                        Share your idea and let�s create<br>
                                        a great project together!
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div>
                                <a href="#" target="_blank" style="background-color: #34495e;" class="hover-box hover-box-2">
                                    <span class="hb-circle"></span>
                                    <img src="images/hb-hiring.svg" class="hb-img " alt="" title="">
                                    <h3>hiring: ON</h3>
                                    <h4>Developer wanted! </h4>
                                    <p>
                                        Send your kickass resume<br>
                                        on jobs@mywebsite.com
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div>
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
                    </div>
                </div>
                <!--/ container -->
            </section>
            
          
            
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>