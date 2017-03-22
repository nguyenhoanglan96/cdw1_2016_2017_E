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
        $less->compileFile('less/type-g-5.less', 'css/type-g-5.css');
        ?>
        <link href="css/type-g-5.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-g-5">  
            <div class="container">
                <!-----------------------------Begin Out Featured Product------------------------------->
                <div class="col-1">
                    <h3 class="section-title padding-right">Our Featured Products</h3>
                </div>
                <div class="col-2">
                    <nav class="control-box-left">
                        <ul class="control-box pager">
                            <li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                            <li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
                        </ul>
                    </nav>
                </div>
                <br>
                <br> 
                <br>
                <hr>
                <div class="carousel slide" id="myCarousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="thumbnails">
                                <li class="col-sm-3">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{!! url('public/nhomg/images/img/3b.jpg') !!}" alt="" style="max-width: 196px"></a>
                                        </div>
                                        <div class="caption">
                                            <h3 class="product-name"><a href="#" title="Product with Variants">Product with Variants</a></h3>
                                            <div class="ratings">

                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                        <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                        <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                        <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <span class="amount">2 Review(s)</span>
                                                </div>

                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                        <span class="price">$40.00</span>                                    
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-sm-3">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{!! url('public/nhomg/images/img/1_4.jpg') !!}" alt="" style="max-width: 196px"></a>
                                        </div>
                                        <div class="caption">
                                            <h3 class="product-name"><a href="#" title="Configurable Product">Configurable Product</a></h3>
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
                                                        <span class="price">$100.00</span>                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-sm-3">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{!! url('public/nhomg/images/img/1_4.jpg') !!}" alt="" style="max-width: 196px"></a>
                                        </div>
                                        <div class="caption">
                                            <h3 class="product-name"><a href="#" title="Configurable Product">Configurable Product</a></h3>
                                            <div class="ratings">

                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                        <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                        <img src="{!! url('public/nhomg/images/img/rating.png') !!}">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <span class="amount">1 Review(s)</span>
                                                </div>

                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-354ad9e655957839bc161d16ef617fe17f">
                                                        <span class="price">$100.00</span>                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-sm-3">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{!! url('public/nhomg/images/img/1_4.jpg') !!}" alt="" style="max-width: 196px"></a>
                                        </div>
                                        <div class="caption">
                                            <h3 class="product-name"><a href="#" title="Configurable Product">Configurable Product</a></h3>
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
                                                        <span class="price">$100.00</span>                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-sm-3">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{!! url('public/nhomg/images/img/1_4.jpg') !!}" alt="" style="max-width: 196px"></a>
                                        </div>
                                        <div class="caption">
                                            <h3 class="product-name"><a href="#" title="Configurable Product">Configurable Product</a></h3>
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
                                                        <span class="price">$100.00</span>                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /Slide1 --> 

                        <div class="item">
                            <ul class="thumbnails">
                                <li class="col-sm-3">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{!! url('public/nhomg/images/img/1_4.jpg') !!}" alt="" style="max-width: 196px"></a>
                                        </div>
                                        <div class="caption">
                                            <h3 class="product-name"><a href="#" title="Configurable Product">Configurable Product</a></h3>
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
                                                        <span class="price">$100.00</span>                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-sm-3">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{!! url('public/nhomg/images/img/1_4.jpg') !!}" alt="" style="max-width: 196px"></a>
                                        </div>
                                        <div class="caption">
                                            <h3 class="product-name"><a href="#" title="Configurable Product">Configurable Product</a></h3>
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
                                                        <span class="price">$100.00</span>                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-sm-3">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{!! url('public/nhomg/images/img/1_4.jpg') !!}" alt="" style="max-width: 196px"></a>
                                        </div>
                                        <div class="caption">
                                            <h3 class="product-name"><a href="#" title="Configurable Product">Configurable Product</a></h3>
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
                                                        <span class="price">$100.00</span>                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-sm-3">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{!! url('public/nhomg/images/img/1_4.jpg') !!}" alt="" style="max-width: 196px"></a>
                                        </div>
                                        <div class="caption">
                                            <h3 class="product-name"><a href="#" title="Configurable Product">Configurable Product</a></h3>
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
                                                        <span class="price">$100.00</span>                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-sm-3">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{!! url('public/nhomg/images/img/1_4.jpg') !!}" alt="" style="max-width: 196px"></a>
                                        </div>
                                        <div class="caption">
                                            <h3 class="product-name"><a href="#" title="Configurable Product">Configurable Product</a></h3>
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
                                                        <span class="price">$100.00</span>                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /Slide2 --> 

                    </div> 

                </div><!-- /#myCarousel -->
                <!-------------------------End Our Featured Product------------------------------->
                <div class="clear"></div>
                <br>
                <br>
                <br>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>