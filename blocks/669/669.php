<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>669</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/669.less', 'css/669.css');
        ?>

        <link href="css/669.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type_669">
            <div class="container text-center-wrapper">
                <div class="row">
                    <div class="tp-breadcrumb st_1479475285 container">
                        <div class="col-md-offset-3 col-md-5">
                            <div class="breadcrumb">
                                <span>
                                    <a href="#">STEEL</a>
                                </span> &gt; 
                                <span>
                                    <span>Service</span>  
                                </span>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>