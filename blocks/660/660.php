<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>660</title> 
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.theme.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/660.less', 'css/660.css');
        ?>

        <link href="css/660.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-660">
            <div class="container silider-wrapper">
                <div class="row">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item">  
                            <img class="img-responsive" src="images/logo-1.jpg" alt=""/>
                        </div>

                        <div class="item">  
                            <img src="images/logo-1.jpg" alt=""/>
                        </div>

                        <div class="item">  
                            <img class="img-responsive" src="images/logo-2.jpg" alt=""/>
                        </div>

                        <div class="item">  
                            <img class="img-responsive" src="images/logo-3.jpg" alt=""/>
                        </div>

                        <div class="item">  
                            <img class="img-responsive" src="images/logo-4.jpg" alt=""/>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function () {
                            $("#owl-demo").owlCarousel({
                                autoPlay: 3000, //Set to 3 seconds

                                items: 4,
                                itemsDesktop: [1199, 3],
                                itemsDesktopSmall: [979, 3]
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </body>
</html>
