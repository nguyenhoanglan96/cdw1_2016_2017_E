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
        $less->compileFile('less/608.less', 'css/608css');
        ?>
        <link href="css/608.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-608">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="badge">
                                    <span class="badge_sale">
                                        Sale! -100%
                                    </span>
                                </div>
                                <div class="images" >
                                    <a href="#">
                                        <img src="images/san-pham-A-1.jpg" class="img-responsive">
                                    </a>
                                    <div class="san-pham-phu">
                                        <a href="#" class="sp1"><img src="images/san-pham-A-2.jpg"></a>
                                        <a href="#" class="sp1"><img src="images/san-pham-A-3.jpg"></a>
                                        <a href="#" class="sp1"><img src="images/san-pham-A-4.jpg"></a>
                                        <a href="#" class="sp1"><img src="images/san-pham-A-5.jpg"></a>
                                        <a href="#" class="sp1"><img src="images/san-pham-A-6.jpg"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <h1 class="product_title">Hoodie With Patch Logo</h1>

                                <div class="product-rating">
                                    <a href="#">
                                        (<span>3</span>
                                        customer reviews)
                                    </a>
                                </div>

                                <div class="offers">
                                    <p class="price">
                                        <del>
                                            <span class="amount">
                                                <span class="currencySymbol">£</span>35.00
                                            </span>
                                        </del>
                                        <ins>
                                            <span class="amount">
                                                <span class="currencySymbol">£</span>30.00
                                            </span>-
                                            <span class="amount">
                                                <span class="currencySymbol">£</span>35.00
                                            </span>
                                        </ins>
                                    </p>
                                </div>

                                <div class="description">
                                    <div class="desc">
                                        <p>
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                        </p>
                                    </div>
                                </div>
                            </div>                        
                        </div>

                        <div class="nav1">
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
                                    <div id="comments">
                                        <h2 class="fs-18">3 REVIEWS FOR HOODIE WITH PATCH LOGO</h2>
                                        <ol class="commentlist">
                                            <li class="comment-1">
                                                <div id="comment-13">
                                                    <div class="comment_container clearfix">
                                                        <img src="images/h1.jpeg" alt="">
                                                        <div class="comment-text">
                                                            <p class="meta">
                                                                <strong>Stuart</strong> - June 7, 2016:
                                                            </p>
                                                            <div class="description">
                                                                <p>
                                                                    Another great quality product that anyone who see’s me wearing has asked where to purchase one of their own.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>

                                        <ol class="commentlist">
                                            <li class="comment-1">
                                                <div id="comment-13">
                                                    <div class="comment_container clearfix">
                                                        <img src="images/h3.jpeg" alt="">
                                                        <div class="comment-text">
                                                            <p class="meta">
                                                                <strong>Ryan</strong> - June 7, 2016:
                                                            </p>
                                                            <div class="description">
                                                                <p>
                                                                    This hoodie gets me lots of looks while out in public, I got the blue one and it’s awesome. Not sure if people are looking at my hoodie only, or also at my rocking bod.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>

                                        <ol class="commentlist">
                                            <li class="comment-1">
                                                <div id="comment-13">
                                                    <div class="comment_container clearfix">
                                                        <img src="images/h2.png" alt="">
                                                        <div class="comment-text">
                                                            <p class="meta">
                                                                <strong>Maria</strong> - June 7, 2016:
                                                            </p>
                                                            <div class="description">
                                                                <p>
                                                                    Ship it!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">
                                                <h3 id="reply-title" class="comment-reply-title">
                                                    Add a review 
                                                    <small>
                                                        <a href="#">Cancel reply</a>
                                                    </small>
                                                </h3>
                                                <p class="must-log-in">
                                                    You must be <a href="#">logged in </a>to post a review.
                                                </p>
                                            </div>
                                        </div>
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
                                        <a href="#">
                                            <span class="image">
                                                <img src="images/san-pham-A-7.jpg" alt="" class="prodimage-img">
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

                    <div class="col-md-3">
                        <div id="sidebar-widget" class="sidebar">
                            <div class="widget">
                                <h3 class="widgettitle title">
                                    PRODUCT SEARCH 
                                </h3>
                                <div class="widget_search">
                                    <div class="search gensearch_wrapper">
                                        <form action="http://www.google.com/search" method="get" id="searchform" class="gensearch_form" onsubmit="Gsitesearch(this)" target="black">
                                            <input type="text" name="s" id="s" class="gensearch_input" value="SEARCH...">
                                            <button type="submit" id="searchsubmit" class="gensearch_submit glyphicon glyphicon-search" value="go"></button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div id="kl-store_price_filter-2">
                                <h3 class="widgettitle title">
                                    FILTER BY PRICE
                                </h3>
                                <form action="#" method="get">
                                    <div class="price-range">
                                        <div class="price-range-slider"></div>
                                        <button type="submit" class="button">Filter</button>
                                        <div class="pr-result">
                                            <span>Price: </span>
                                            <input type="text" class="price-result">
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div id="kl-store_product_categories-2">
                                <h3 class="widgettitle title">
                                    PRODUCT CATEGORIES
                                </h3>
                                <ul class="product-categories">
                                    <li class="cat-item">
                                        <a href="#">
                                            ACCESSORIES
                                        </a>
                                        <span class="count">(9)</span>
                                        <ul class="children">
                                            <li class="cat-item">
                                                <a href="#">
                                                    Belts
                                                </a>
                                                <span class="count">(3)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">
                                                    Gloves
                                                </a>
                                                <span class="count">(3)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">
                                                    Sunglasses
                                                </a>
                                                <span class="count">(3)</span>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="cat-item">
                                        <a href="#">
                                            CLOTHING
                                        </a>
                                        <span class="count">(12)</span>
                                        <ul class="children">
                                            <li class="cat-item">
                                                <a href="#">
                                                    Blazers
                                                </a>
                                                <span class="count">(2)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">
                                                    Hoodies
                                                </a>
                                                <span class="count">(6)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">
                                                    Shirts
                                                </a>
                                                <span class="count">(4)</span>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="cat-item">
                                        <a href="#">
                                            HOME GEAR
                                        </a>
                                        <span class="count">(10)</span>
                                        <ul class="children">
                                            <li class="cat-item">
                                                <a href="#">
                                                    Bathroom
                                                </a>
                                                <span class="count">(2)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">
                                                    Bedding Sets
                                                </a>
                                                <span class="count">(4)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">
                                                    Decorations
                                                </a>
                                                <span class="count">(4)</span>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="cat-item">
                                        <a href="#">
                                            KIDS WEAR
                                        </a>
                                        <span class="count">(6)</span>
                                        <ul class="children">
                                            <li class="cat-item">
                                                <a href="#">
                                                    Kids Accessories
                                                </a>
                                                <span class="count">(0)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">
                                                    Kids Clothing
                                                </a>
                                                <span class="count">(4)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">
                                                    Kids Shoes
                                                </a>
                                                <span class="count">(2)</span>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="cat-item">
                                        <a href="#">
                                            SHOES
                                        </a>
                                        <span class="count">(9)</span>
                                        <ul class="children">
                                            <li class="cat-item">
                                                <a href="#">
                                                    Ankle Boots
                                                </a>
                                                <span class="count">(4)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">
                                                    High Heels
                                                </a>
                                                <span class="count">(3)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">
                                                    Trainers
                                                </a>
                                                <span class="count">(2)</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div id="kl-store_top_rated_product-2">
                                <h3 class="widgettitle title">
                                    MOST RATED ITEMS 
                                </h3>
                                <ul class="product_list_widget">
                                    <li>
                                        <a href="#">
                                            <img src="images/san-pham-A-11.jpg" alt="">
                                            <span class="product-title">
                                                Scarlett Taupe Suede Ankle Boots
                                            </span>
                                        </a>
                                        <div class="star-rating">
                                            <span style="width: 100%">
                                                <strong class="rating">5.00</strong>out of 5
                                            </span>
                                        </div>
                                        <span class="amount">£9.00</span>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <img src="images/san-pham-A-12.jpg" alt="">
                                            <span class="product-title">
                                                Shirt In Super Longline
                                            </span>
                                        </a>
                                        <div class="star-rating">
                                            <span style="width: 100%">
                                                <strong class="rating">5.00</strong>out of 5
                                            </span>
                                        </div>
                                        <span class="amount">£18.00</span>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <img src="images/san-pham-A-13.jpg" alt="">
                                            <span class="product-title">
                                                Abercrombie & Fitch Shirt with Flannel Check
                                            </span>
                                        </a>
                                        <div class="star-rating">
                                            <span style="width: 100%">
                                                <strong class="rating">5.00</strong>out of 5
                                            </span>
                                        </div>
                                        <span class="amount">£20.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                                              
        </div>   

        <script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    </body>

</html>