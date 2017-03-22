<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-g-8.less', 'css/type-g-8.css');
        ?>
        <link href="css/type-g-8.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-g-8">  
            <div class="container">
                <!----------------------Begin New In Strore------------------------------------->
                <div class="col-1">
                    <h3 class="section-title padding-right">New in Store</h3>
                </div>
                <div class="col-2">
                    <nav class="control-box-left">
                        <ul class="control-box pager">
                            <li><a data-slide="prev" href="#fruitscarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                            <li><a data-slide="next" href="#fruitscarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
                        </ul>
                    </nav>
                </div>
                <br>
                <br>
                <br>
                <hr>
                <div class="container text-center">
                    <div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="2000" id="fruitscarousel">

                        <div class="carousel-inner">       
                            <div class="item active">
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <a href="#"><img src="{!! url('public/nhomg/images/img/phone01_3.jpg') !!}" class="img-responsive">
                                        <span class="sticker-wrapper top-left">
                                            <span class="sticker new">New</span>
                                        </span> 
                                    </a>
                                    <div class="caption">
                                        <h3 class="product-name"><a href="#" title="Configurable Phone">Configurable Phone</a></h3>
                                        <div class="ratings">

                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <span class="amount">1 Review(s)</span>
                                            </div>

                                            <div class="price-box">
                                                <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                    <span class="price">$700.00</span>      
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <a href="#"><img src="{!! url('public/nhomg/images/img/phone01a_2.jpg') !!}" class="img-responsive">
                                        <span class="sticker-wrapper top-left">
                                            <span class="sticker new">New</span>
                                        </span>
                                    </a>
                                    <div class="caption">
                                        <h3 class="product-name"><a href="#" title="Configurable Phone">Configurable Phone</a></h3>
                                        <div class="ratings">

                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <span class="amount">1 Review(s)</span>
                                            </div>

                                            <div class="price-box">
                                                <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                    <span class="price">$700.00</span>                                    

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <a href="#"><img src="{!! url('public/nhomg/images/img/phone02 (1).jpg') !!}" class="img-responsive">
                                        <span class="sticker-wrapper top-left">
                                            <span class="sticker new">New</span>
                                        </span>
                                    </a>
                                    <div class="caption">
                                        <h3 class="product-name"><a href="#" title="Configurable Phone">Configurable Phone</a></h3>
                                        <div class="ratings">

                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <span class="amount">1 Review(s)</span>
                                            </div>

                                            <div class="price-box">
                                                <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                    <span class="price">$700.00</span>                                    

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <a href="#"><img src="{!! url('public/nhomg/images/img/phone03.jpg') !!}" class="img-responsive">
                                        <span class="sticker-wrapper top-left">
                                            <span class="sticker new">New</span>
                                        </span>
                                    </a>
                                    <div class="caption">
                                        <h3 class="product-name"><a href="#" title="Configurable Phone">Configurable Phone</a></h3>
                                        <div class="ratings">

                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <span class="amount">1 Review(s)</span>
                                            </div>

                                            <div class="price-box">
                                                <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                    <span class="price">$700.00</span>                                    

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <a href="#"><img src="{!! url('public/nhomg/images/img/phone04_1.jpg') !!}" class="img-responsive">
                                        <span class="sticker-wrapper top-left">
                                            <span class="sticker new">New</span>
                                        </span>
                                        <span class="sticker-wrapper top-right">
                                            <span class="sticker sale">Sale</span>
                                        </span>
                                    </a>
                                    <div class="caption">
                                        <h3 class="product-name"><a href="#" title="Configurable Phone">Configurable Phone</a></h3>
                                        <div class="ratings">

                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <span class="amount">1 Review(s)</span>
                                            </div>

                                            <div class="price-box">
                                                <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                    <span class="price">$700.00</span>                                    

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <a href="#"><img src="{!! url('public/nhomg/images/img/phone06_2.jpg') !!}" class="img-responsive">
                                        <span class="sticker-wrapper top-left">
                                            <span class="sticker new">New</span>
                                        </span>
                                    </a>
                                    <div class="caption">
                                        <h3 class="product-name"><a href="#" title="Configurable Phone">Configurable Phone</a></h3>
                                        <div class="ratings">

                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <span class="amount">1 Review(s)</span>
                                            </div>

                                            <div class="price-box">
                                                <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                    <span class="price">$700.00</span>                                    

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-------------------------------End New In Store---------------------------------------->
                <div class="clear"></div>
                <br>
                <br>
                <br>

            </div>
        </div>
    </body>
</html>