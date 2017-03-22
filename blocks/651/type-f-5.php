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
        $less->compileFile('less/type.less', 'css/type.css');
        ?>
        <link href="css/type.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="type-5">
    <div class="container">
        <hr>
        <div class="row abs">
            <div class="col-md-2 col-xs-6">
                <img src="images/1.png" alt=""/>

            </div>
            <div class="col-md-2 col-xs-6">
                <img src="images/1.png" alt=""/>
            </div>
            <div class="col-md-2 col-xs-6">
                <img src="images/1.png" alt=""/>
            </div>
            <div class="col-md-2 col-xs-6">
                <img src="images/1.png" alt=""/>
            </div>
            <div class="col-md-2 col-xs-6">
                <img src="images/1.png" alt=""/>
            </div>
            <div class="col-md-2 col-xs-6">
                <img src="images/1.png" alt=""/>
            </div>

        </div>
    </div>                
</div>
</body>
</html>