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
        $less->compileFile('less/650.less', 'css/650.css');
        ?>
        <link href="css/650.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div class="type-650">
            <div class="container">
                <div class="row">
                    <div class="hr hr_text "><div class="custom_hr_text ">Whats new ?</div></div>
                    <div class="row thumbs">
                        <div class="col-md-3 col-sm-6 thumb">
                            <div class="a">
                                <a href="#">
                                    <img src="images/banner/featured2_6x3.jpg" alt=""/>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 thumb">
                            <div class="a">
                                <a href="#">
                                    <img src="images/banner/featured1_6x3.jpg" alt=""/>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 thumb">
                            <div class="a">
                                <a href="#">
                                    <img src="images/banner/featured3_6x3.jpg" alt=""/>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 thumb">
                            <div class="a">
                                <a href="#">
                                    <img src="images/banner/featured4_6x3.jpg" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>