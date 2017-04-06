<!DOCTYPE html>
<html>
    <head>
        <title>660</title>
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
        $less->compileFile('less/660.less', 'css/660.css');
        ?>

        <link href="css/660.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-660">  
            <div class="container slider-wrapper">
                <div class="row">
                    <!-----------------------------Begin Out Featured Product------------------------------->
                    <div>
                        <h3 class="section-title padding-right">Our Featured Products</h3>
                    </div>
                    <div>
                        <nav>
                            <ul class="control-box pager">
                                <li>
                                    <a data-slide="prev" href="#myCarousel" class="">
                                        <i class="glyphicon glyphicon-chevron-left"></i>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide="next" href="#myCarousel" class="">
                                        <i class="glyphicon glyphicon-chevron-right"></i>
                                    </a>
                                </li>
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
                                                <a href="#">
                                                    <img src="images/3b.jpg" alt="" style="display: inline; max-width: 196px" data-pin-nopin="true" />
                                                    <img class="alt-img" src="images/3bb.jpg" alt="" style="display: none; opacity: 1;max-width: 196px" />
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <h3 class="product-name">
                                                    <a href="#" title="Configurable Product">Product with Variants</a>
                                                </h3>
                                                <div class="ratings">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <span class="amount">2 Review(s)</span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span>
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
                                                <a href="#">
                                                    <img src="images/1_4.jpg" alt="" style="max-width: 196px">
                                                     <span class="sticker-wrapper top-left">
                                            <span class="sticker new">New</span>
                                        </span> 
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <h3 class="product-name">
                                                    <a href="#" title="Configurable Product">Configurable Product</a>
                                                </h3>
                                                <div class="ratings">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <span class="amount">1 Review(s)</span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span>
                                                            <span class="price">$100.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-sm-3">
                                        <div class="fff">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img src="images/2b_2.jpg" alt="" style="display: inline; max-width: 196px">
                                                    <img src="images/9_1.jpg" alt="" style="display: none; opacity: 1;max-width: 196px">
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <h3 class="product-name">
                                                    <a href="#" title="Configurable Product">Product Example</a>
                                                </h3>
                                                <div class="ratings">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <span class="amount">1 Review(s)</span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span>
                                                            <span class="price">$99.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-sm-3">
                                        <div class="fff">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img src="images/4_3.jpg" alt="" style="display: inline; max-width: 196px">
                                                    <img class="alt-img" src="images/4c.jpg" alt="" style="display: none; opacity: 1;max-width: 196px">
                                                    <ul class="add-to-links clearer addto-links-icons addto-onimage visible-onhover">
                                                        <li
                                                            <a class="link-wishlist" href="#" title="Add to Wishlist">
                                                                <span class="2 icon ib ic ic-heart"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="link-compare" href="#" title="Add to Compare">
                                                                <span class="2 icon ib ic ic-compare"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </a>
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <h3 class="product-name">
                                                    <a href="#" title="Configurable Product">New Hot Top</a>
                                                </h3>
                                                <div class="ratings">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <span class="amount">2 Review(s)</span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span>
                                                            <span class="price">$80.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-sm-3">
                                        <div class="fff">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img src="images/6.jpg" alt="" style="max-width: 196px">
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <h3 class="product-name">
                                                    <a href="#" title="Configurable Product">Another Sample Top</a>
                                                </h3>
                                                <div class="ratings">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <span class="amount">1 Review(s)</span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span>
                                                            <span class="price">$110.00</span>
                                                        </span>
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
                                                <a href="#">
                                                    <img src="images/5.jpg" alt="" style="max-width: 196px">
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <h3 class="product-name">
                                                    <a href="#" title="Configurable Product">Net Sample Product</a>
                                                </h3>
                                                <div class="ratings">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <span class="amount">1 Review(s)</span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span>
                                                            <span class="price">$110.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-sm-3">
                                        <div class="fff">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img src="images/7b.jpg" alt="" style="max-width: 196px">
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <h3 class="product-name">
                                                    <a href="#" title="Configurable Product">Some Other Product</a>
                                                </h3>
                                                <div class="ratings">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <span class="amount">1 Review(s)</span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span>
                                                            <span class="price">$200.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-sm-2">
                                        <div class="fff">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img src="images/8_1.jpg" alt="" style="max-width: 196px">
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <h3 class="product-name">
                                                    <a href="#" title="Configurable Product">Simple Woman Top</a>
                                                </h3>
                                                <div class="ratings">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <img src="images/rating.png">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <span class="amount">1 Review(s)</span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span>
                                                            <span class="price">$39.50</span>
                                                        </span>
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
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>