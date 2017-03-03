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
        $less->compileFile('less/621.less', 'css/621.css');
        ?>
        <link href="css/621.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-23">
            <div class="statistical">
                <div class="container content_wrap">
                    <div class="col-st methods">
                       <div class="content-main">
                            <div class="icon-st">
                                <i class="fa fa-flask"></i>
                            </div>
                            <div class="content-st">
                                <div class="count">2745</div>
                                <div class="boder"></div>
                                <div class="kill">
                                    
                                    <div class="info">albertino research methods</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-st reviewed">
                        <div class="content-main">
                            <div class="icon-st">
                                <i class="fa fa-flask"></i>
                            </div>
                            <div class="content-st">
                                <div class="count">156</div>
                                <div class="boder"></div>
                                <div class="kill">
                                    
                                    <div class="info">DNA examples taken & reviewed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-st combined">
                        <div class="content-main">
                            <div class="icon-st">
                                <i class="fa fa-flask"></i>
                            </div>
                            <div class="content-st">
                                <div class="count">853</div>
                                 <div class="boder"></div>
                                <div class="kill">
                                   
                                    <div class="info">elements gathered & combined</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-st members">
                        <div class="content-main">
                            <div class="icon-st">
                                <i class="fa fa-flask"></i>
                            </div>
                            <div class="content-st">
                                <div class="count">3019</div>
                                <div class="boder"></div>
                                <div class="kill">
                                    <div class="info">albertino community members</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End-statistical-->
            <div class="" style="clear: both"></div>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</html>