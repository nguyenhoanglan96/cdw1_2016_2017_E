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
        $less->compileFile('less/type-c-6.less', 'css/type-c-6.css');
        ?>
        <link href="css/type-c-6.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-c-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <h3 class="section-big">Women</h3>              
                        <a class="btn btn-default btn-select">
                            <input type="hidden" id="" name="" value="" />
                            <span class="btn-select-value">Select an Item</span>
                            <span class='btn-select-arrow glyphicon glyphicon-chevron-down'></span>
                            <ul>
                                <li class="selected">Sort by newness</li>
                                <li>Sort by default sorting</li>
                                <li>Sort by popularity</li>
                                <li>Sort by average rating</li>
                            </ul>
                        </a>
                        <div class="clear"></div>
                        <div class="col-lg-4 col-md-4 col-sm-6  text-center">
                            <div class="panel">
                                <div class="panel-body">
                                    <a href="#" class="zoom">
                                        <img src="images/product/hipster8.jpg" alt="" width="100%" height="100%" />
                                    </a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Cozy Cap</h4>
                                <h4>$19.80</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6  text-center">
                            <div class="panel">
                                <div class="panel-body">
                                    <a href="#" class="zoom">
                                        <img src="images/product/hipster8.jpg" alt="" width="100%" height="100%" />
                                    </a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Cozy Cap</h4>
                                <h4>$19.80</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6  text-center">
                            <div class="panel">
                                <div class="panel-body">
                                    <a href="#" class="zoom">
                                        <img src="images/product/hipster8.jpg" alt="" width="100%" height="100%" />
                                    </a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Cozy Cap</h4>
                                <h4>$19.80</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6  text-center">
                            <div class="panel">
                                <div class="panel-body">
                                    <a href="#" class="zoom">
                                        <img src="images/product/hipster8.jpg" alt="" width="100%" height="100%" />
                                    </a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Cozy Cap</h4>
                                <h4>$19.80</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6  text-center">
                            <div class="panel">
                                <div class="panel-body">
                                    <a href="#" class="zoom">
                                        <img src="images/product/hipster8.jpg" alt="" width="100%" height="100%" />
                                    </a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Cozy Cap</h4>
                                <h4>$19.80</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6  text-center">
                            <div class="panel">
                                <div class="panel-body">
                                    <a href="#" class="zoom">
                                        <img src="images/product/hipster8.jpg" alt="" width="100%" height="100%" />
                                    </a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Cozy Cap</h4>
                                <h4>$19.80</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6  text-center">
                            <div class="panel">
                                <div class="panel-body">
                                    <a href="#" class="zoom">
                                        <img src="images/product/hipster8.jpg" alt="" width="100%" height="100%" />
                                    </a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Cozy Cap</h4>
                                <h4>$19.80</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6  text-center">
                            <div class="panel">
                                <div class="panel-body">
                                    <a href="#" class="zoom">
                                        <img src="images/product/hipster8.jpg" alt="" width="100%" height="100%" />
                                    </a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Cozy Cap</h4>
                                <h4>$19.80</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6  text-center">
                            <div class="panel">
                                <div class="panel-body">
                                    <a href="#" class="zoom">
                                        <img src="images/product/hipster8.jpg" alt="" width="100%" height="100%" />
                                    </a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Cozy Cap</h4>
                                <h4>$19.80</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </body>

</html>