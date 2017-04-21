<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>664</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/664.less', 'css/664.css');
        ?>
        <link href="css/664.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type_664">
            <div class="container detail-wrapper">
                <div class="row">
                    <div class="quote-section vc_custom_1436500827216">
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <h1>Professional metal processing. Highly experienced &amp; equiped personnel</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <p style="text-align: center;">
                                            <a class="btn btn-outline" href="#" style="margin-left: -14px;">Request an order</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>