<!DOCTYPE html>
<?php
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./less/type-d-12.less', 'css/style.css');
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap 101 Template</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="mod_k">
            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        <div class="row ">
                            <div class="col-md-12 header">
                                <header class="sectionTitle clearfix">
                                    <h3><strong>UPDATES</strong></h3>
                                </header>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">

                                <p><strong><span class="rbLarge">Update #1</span></strong><br>
                                    <span class="rbSmall">Mar 27, 2013</span></p>
                                <h3><b>International Shipping</b></h3>
                                <p class="content">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus
                                    posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla. Donec sed 
                                    odio dui. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis 
                                    dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla. Donec 
                                    sed odio dui.
                                </p>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                       
                    </div>
                </div>
            </div>
        </div>
        <script src="js/javascript.js" type="text/javascript"></script>
    </body>
</html>
