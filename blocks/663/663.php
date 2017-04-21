<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>663</title>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/663.less', 'css/663.css');
        ?>

        <link href="css/663.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-663">
            <div class="container menu-slider-wrapper">
                <div class="row">
                    <div class="tp-breadcrumb st_1479392317">
                        <div class="col-md-offset-3 col-md-5">
                            <div class="breadcrumb">
                                <span>
                                    <a href="#" class="home">STEEL</a>
                                </span> &gt; 
                                <span>
                                    <a  href="#">Service</a>
                                </span> &gt; 
                                <span>
                                    <span>Machine Services</span>                                       
                                </span>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>