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
        $less->compileFile('less/type-g-6.less', 'css/type-g-6.css');
        ?>
        <link href="css/type-g-6.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-g-6">  
            <div class="container">
                <!------------------------Begin Recommended Shoes--------------------------------->
                <div class="col-0">
                    <div class="col-1">
                        <h3 class="section-title padding-right">Recommended Shoes</h3>
                    </div>
                    <div class="col-2">
                        <nav class="control-box-left">
                            <ul class="control-box pager">
                                <li><a data-slide="prev" href="#media" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                <li><a data-slide="next" href="#media" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
                            </ul>
                        </nav>
                    </div>
                    <br>
                    <br>
                    <br>
                    <hr>
                    <div class='row'>
                        <div class='col-md-8'>
                            <div class="carousel slide media-carousel" id="media">
                                <div class="carousel-inner">
                                    <div class="item  active">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a class="thumbnail" href="#"><img alt="Prestige Lite Heels" src="{!! url('public/nhomg/images/img/428357-0001_1_1_1.jpg') !!}"></a> 
                                                <div class="caption">
                                                    <h3 class="product-name"><a href="#" title="Prestige Lite Heels">Prestige Lite Heels</a></h3>
                                                    <div class="ratings">
                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                                <span class="price">$215.00</span>                                    

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <a class="thumbnail" href="#"><img alt="Prestige Lite Heels" src="{!! url('public/nhomg/images/img/428357-0001_1_1_1.jpg') !!}"></a> 
                                                <div class="caption">
                                                    <h3 class="product-name"><a href="#" title="Prestige Lite Heels">Prestige Lite Heels</a></h3>
                                                    <div class="ratings">
                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                                <span class="price">$215.00</span>                                    

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <a class="thumbnail" href="#"><img alt="Prestige Lite Heels" src="{!! url('public/nhomg/images/img/428357-0001_1_1_1.jpg') !!}"></a> 
                                                <div class="caption">
                                                    <h3 class="product-name"><a href="#" title="Prestige Lite Heels">Prestige Lite Heels</a></h3>
                                                    <div class="ratings">
                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                                <span class="price">$215.00</span>                                    

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>       
                                        </div>
                                    </div><!---Site 1---->

                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a class="thumbnail" href="#"><img alt="Dark Flower Shoe" src="{!! url('public/nhomg/images/img/428338-0029_1.jpg') !!}"></a>
                                                <div class="caption">
                                                    <h3 class="product-name"><a href="#" title="Dark Flower Shoe">Dark Flower Shoe</a></h3>
                                                    <div class="ratings">
                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                                <span class="price">$85.50</span>                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>          
                                            <div class="col-md-4">
                                                <a class="thumbnail" href="#"><img alt="Dark Flower Shoe" src="{!! url('public/nhomg/images/img/428338-0029_1.jpg') !!}"></a>
                                                <div class="caption">
                                                    <h3 class="product-name"><a href="#" title="Dark Flower Shoe">Dark Flower Shoe</a></h3>
                                                    <div class="ratings">
                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                                <span class="price">$85.50</span>                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>          
                                            <div class="col-md-4">
                                                <a class="thumbnail" href="#"><img alt="Dark Flower Shoe" src="{!! url('public/nhomg/images/img/428338-0029_1.jpg') !!}"></a>
                                                <div class="caption">
                                                    <h3 class="product-name"><a href="#" title="Dark Flower Shoe">Dark Flower Shoe</a></h3>
                                                    <div class="ratings">
                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                                <span class="price">$85.50</span>                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                 
                                        </div>
                                    </div><!----Site 2---->

                                </div>
                            </div>                          
                        </div>
                    </div>
                </div>
                <!------------------------End Recommended Shoes----------------------------------->

                <!------------------------Begin Recommended Bags---------------------------------->
                <div class="col-0-1">
                    <div class="col-1">
                        <h3 class="section-title padding-right">Recommended Bags</h3>
                    </div>
                    <div class="col-2">
                        <nav class="control-box-left">
                            <ul class="control-box pager">
                                <li><a data-slide="prev" href="#eventCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                <li><a data-slide="next" href="#eventCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="row">
                        <div class="span12">
                            <div class="well">
                                <div id="myCarousel" class="carousel fdi-Carousel slide">
                                    <!-- Carousel items -->
                                    <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                                        <div class="carousel-inner onebyone-carosel">
                                            <div class="item active">
                                                <div class="col-md-6">
                                                    <a href="#"><img src="{!! url('public/nhomg/images/img/546029-0013_1_2.jpg') !!}" class="img-responsive center-block"></a>
                                                    <div class="caption">
                                                        <h3 class="product-name"><a href="#" title="Dark Flower Shoe">Dark Flower Shoe</a></h3>
                                                        <div class="ratings">
                                                            <div class="price-box">
                                                                <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                                    <span class="price">$85.50</span>                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-md-6">
                                                    <a href="#"><img src="{!! url('public/nhomg/images/img/546029-0013_1_2.jpg') !!}" class="img-responsive center-block"></a>
                                                    <div class="caption">
                                                        <h3 class="product-name"><a href="#" title="Dark Flower Shoe">Dark Flower Shoe</a></h3>
                                                        <div class="ratings">
                                                            <div class="price-box">
                                                                <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                                    <span class="price">$85.50</span>                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-md-6">
                                                    <a href="#"><img src="{!! url('public/nhomg/images/img/546029-0013_1_2.jpg') !!}" class="img-responsive center-block"></a>
                                                    <div class="caption">
                                                        <h3 class="product-name"><a href="#" title="Dark Flower Shoe">Dark Flower Shoe</a></h3>
                                                        <div class="ratings">
                                                            <div class="price-box">
                                                                <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                                    <span class="price">$85.50</span>                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-md-6">
                                                    <a href="#"><img src="{!! url('public/nhomg/images/img/546029-0013_1_2.jpg') !!}" class="img-responsive center-block"></a>
                                                    <div class="caption">
                                                        <h3 class="product-name"><a href="#" title="Dark Flower Shoe">Dark Flower Shoe</a></h3>
                                                        <div class="ratings">
                                                            <div class="price-box">
                                                                <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                                    <span class="price">$85.50</span>                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-md-6">
                                                    <a href="#"><img src="{!! url('public/nhomg/images/img/546029-0013_1_2.jpg') !!}" class="img-responsive center-block"></a>
                                                    <div class="caption">
                                                        <h3 class="product-name"><a href="#" title="Dark Flower Shoe">Dark Flower Shoe</a></h3>
                                                        <div class="ratings">
                                                            <div class="price-box">
                                                                <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                                    <span class="price">$85.50</span>                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-md-6">
                                                    <a href="#"><img src="{!! url('public/nhomg/images/img/546029-0013_1_2.jpg') !!}" class="img-responsive center-block"></a>
                                                    <div class="caption">
                                                        <h3 class="product-name"><a href="#" title="Dark Flower Shoe">Dark Flower Shoe</a></h3>
                                                        <div class="ratings">
                                                            <div class="price-box">
                                                                <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                                    <span class="price">$85.50</span>                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/carousel-inner-->
                                </div><!--/myCarousel-->
                            </div><!--/well-->
                        </div>
                    </div>

                </div>
                <!------------------------End Recommended Bags------------------------------------>
                <div class="clear"></div>
                <br>
                <br>
                <br>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>