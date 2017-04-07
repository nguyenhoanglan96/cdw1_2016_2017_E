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
        $less->compileFile('less/651.less', 'css/651.css');
        ?>
        <link href="css/651.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-651">
            <div class="container">
                <div class="row abs">
                    <div class="col-md-2 col-xs-6">
                        <a href="#">
                            <img src="images/1.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <a href="#">
                        <img   src="images/1.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <a href="#">
                        <img src="images/1.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <a href="#">
                        <img src="images/1.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-2 col-xs-6">
                       <a href="#">
                        <img src="images/1.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <a href="#">
                        <img src="images/1.png" alt=""/>
                        </a>
                    </div>
                </div>
            </div>                
        </div>
    </body>
</html>