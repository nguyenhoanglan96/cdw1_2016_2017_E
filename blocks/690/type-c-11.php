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
        $less->compileFile('less/type-c-11.less', 'css/type-c-11.css');
        ?>
        <link href="css/type-c-11.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-c-11">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
                        <h3>Related Products</h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <!-- Controls -->
                        <div class="controls pull-right">
                            <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                               data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                               data-slide="next"></a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <hr>
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                                    <div class="col-item">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <a href="#" class="zoom">
                                                    <img src="images/detail/j1b.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h5>Cozy Cap</h5>
                                            <h5 class="price-text-color">$19.80</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                                    <div class="col-item">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <a href="#" class="zoom">
                                                    <img src="images/detail/j1b.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h5>Cozy Cap</h5>
                                            <h5 class="price-text-color">$19.80</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 hidden-sm text-center">
                                    <div class="col-item">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <a href="#" class="zoom">
                                                    <img src="images/detail/j1b.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h5>Cozy Cap</h5>
                                            <h5 class="price-text-color">$19.80</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 hidden-md hidden-sm text-center">
                                    <div class="col-item">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <a href="#" class="zoom">
                                                    <img src="images/detail/j1b.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h5>Cozy Cap</h5>
                                            <h5 class="price-text-color">$19.80</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                                    <div class="col-item">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <a href="#" class="zoom">
                                                    <img src="images/detail/style-12.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h5>Cozy Cap</h5>
                                            <h5 class="price-text-color">$19.80</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                                    <div class="col-item">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <a href="#" class="zoom">
                                                    <img src="images/detail/style-12.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h5>Cozy Cap</h5>
                                            <h5 class="price-text-color">$19.80</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 hidden-sm  text-center">
                                    <div class="col-item">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <a href="#" class="zoom">
                                                    <img src="images/detail/style-12.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h5>Cozy Cap</h5>
                                            <h5 class="price-text-color">$19.80</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 hidden-md hidden-sm  text-center">
                                    <div class="col-item">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <a href="#" class="zoom">
                                                    <img src="images/detail/style-12.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h5>Cozy Cap</h5>
                                            <h5 class="price-text-color">$19.80</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>

</html>