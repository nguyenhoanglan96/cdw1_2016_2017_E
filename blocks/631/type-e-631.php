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
        $less->compileFile('less/type-e-631.less', 'css/type-e-631.css');
        ?>
        <link href="css/type-e-631.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-e-631">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="link">
                            <div class="container content_wrap padding-link">
                                <a href="#">Home</a>
                                <span class="color-link">/</span>
                                <a href="#">Home</a>
                                <span class="color-link">/</span>
                                <span class="color-link">Prescription Medicine</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</html>