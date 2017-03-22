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
        $less->compileFile('less/type-e-601.less', 'css/type-e-601.css');
        ?>
        <link href="css/type-e-601.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-e-601">
            <div class="container rescure">
                <div class="row">
                    <div class="col-md-12">                 
                        <div class="nav1 rescure1">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">DESCRIPTION</a></li>
                                <li><a data-toggle="tab" href="#menu1">REVIEWS (3)</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <h3>PRODUCT DESCRIPTION</h3>
                                    <p>
                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                    </p>
                                </div>

                                <div id="menu1" class="tab-pane fade">

                                    <h2 class="fs-18">3 REVIEWS FOR HOODIE WITH PATCH LOGO</h2>
                                    <ol class="commentlist">
                                        <li class="comment-1">                                               
                                            <div class="comment_container clearfix">
                                                <img src="images/h1.jpeg" alt="">                                                       
                                                <p class="meta">
                                                    <strong>Stuart</strong> - June 7, 2016:
                                                </p>                                               
                                                <p>
                                                    Another great quality product that anyone who see’s me wearing has asked where to purchase one of their own.
                                                </p>
                                            </div>                                              
                                        </li>
                                    </ol>

                                    <ol class="commentlist">
                                        <li class="comment-1">
                                            <div class="comment_container clearfix">
                                                <img src="images/h3.jpeg" alt="">
                                                <div class="comment-text">
                                                    <p class="meta">
                                                        <strong>Ryan</strong> - June 7, 2016:
                                                    </p>
                                                    <p>
                                                        This hoodie gets me lots of looks while out in public, I got the blue one and it’s awesome. Not sure if people are looking at my hoodie only, or also at my rocking bod.
                                                    </p>
                                                </div>
                                            </div>

                                        </li>
                                    </ol>

                                    <ol class="commentlist">
                                        <li class="comment-1">                                          
                                            <div class="comment_container clearfix">
                                                <img src="images/h2.png" alt="">
                                                <div class="comment-text">
                                                    <p class="meta">
                                                        <strong>Maria</strong> - June 7, 2016:
                                                    </p>                                                       
                                                    <p>
                                                        Ship it!
                                                    </p>                                                     
                                                </div>
                                            </div>

                                        </li>
                                    </ol>

                                    <div id="respond">
                                        <h3>
                                            Add a review 
                                            <small>
                                                <a href="#">Cancel reply</a>
                                            </small>
                                        </h3>
                                        <p>
                                            You must be <a href="#">logged in </a>to post a review.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="related">
                            <h2>RELATED PRODUCTS</h2>
                            <ul class="products">
                                <li class="product">
                                    <div class="product-list-item">
                                        <div class="zn_badge_container">
                                            <span class="zn_badge_new">NEW</span>
                                        </div>                                     
                                            <span class="image">
                                                <img src="images/san-pham-A-7.jpg" alt="" class="">
                                            </span>
                                            <div class="detail">
                                                <h3 class="detail-title">Black Kaviar Longline Shirt</h3>
                                                <p class="detail-desc">
                                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.                               
                                                </p>
                                                <span class="price">
                                                    <span class="amount">£20.00</span>
                                                </span>
                                            </div>
                                        
                                        <div class="actions">
                                            <a href="#" class="action-addtocart">Add to cart</a>
                                            <a href="#" class="action-moreinfo">MORE INFO</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="product">
                                    <div class="product-list-item">
                                        <div class="zn_badge_container">
                                            <span class="zn_badge_new">NEW</span>
                                        </div>
                                        <a href="#">
                                            <span class="image">
                                                <img src="images/san-pham-A-9.jpg" alt="" class="prodimage-img">
                                            </span>
                                            <div class="detail">
                                                <h3 class="detail-title">Black Kaviar Longline Shirt</h3>
                                                <p class="detail-desc">
                                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.                               
                                                </p>
                                                <span class="price">
                                                    <span class="amount">£20.00</span>
                                                </span>
                                            </div>
                                        </a>
                                        <div class="actions">
                                            <a href="#" class="action-addtocart">Add to cart</a>
                                            <a href="#" class="action-moreinfo">MORE INFO</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="product">
                                    <div class="product-list-item">
                                        <div class="zn_badge_container">
                                            <span class="zn_badge_new">NEW</span>
                                        </div>
                                        <a href="#">
                                            <span class="image">
                                                <img src="images/san-pham-A-10.jpg" alt="" class="prodimage-img">
                                            </span>
                                            <div class="detail">
                                                <h3 class="detail-title">Black Kaviar Longline Shirt</h3>
                                                <p class="detail-desc">
                                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.                               
                                                </p>
                                                <span class="price">
                                                    <span class="amount">£29.00</span>
                                                </span>
                                            </div>
                                        </a>
                                        <div class="actions">
                                            <a href="#" class="action-addtocart">Add to cart</a>
                                            <a href="#" class="action-moreinfo">MORE INFO</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>             
                </div>
            </div>                                              
        </div>              
        <script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    </body>

</html>