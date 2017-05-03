<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/type-23.css" rel="stylesheet" type="text/css" />

        <link href="jsOWL/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="jsOWL/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-23.less', 'css/type-23.css');
        ?>
        <script src="jsOWL/jquery.min.js" type="text/javascript"></script>
        <script src="jsOWL/owl.carousel.js" type="text/javascript"></script>     
        <script>
            $(document).ready(function () {
                $(".homefeatured").click(function () {
                    $("#homefeatured").show();
                    $("#blockspecials").hide();
                    $("#blockbestsellers").hide();
                });
                $(".blockspecials").click(function () {
                    $("#homefeatured").hide();
                    $("#blockspecials").show();
                    $("#blockbestsellers").hide();
                });
                $(".blockbestsellers").click(function () {
                    $("#blockbestsellers").show();
                    $("#blockspecials").hide();
                    $("#homefeatured").hide();
                });
            });
        </script>
    </head>

    <body>
        <div class="type-23">
            <div id="page">
                <div class="header-container">
                    <header id="header">
                        <div class="nav">
                            <div class="container">
                                <div class="row"> 
                                    <nav>
                                        <div id="contact-link"> 
                                            <a href="#" title="Contact us">Contact us</a>
                                        </div>
                                        <div id="currencies-block-top">
                                            <form id="setCurrency" method="post">
                                                <div class="current"> 
                                                    <input type="hidden" name="id_currency" id="id_currency" value=""> 
                                                    <input type="hidden" name="SubmitCurrency" value=""> 
                                                    <strong>USD</strong>
                                                </div>

                                            </form>
                                        </div>
                                        <div id="languages-block-top" class="languages-block">
                                            <div class="current"> 
                                                <span>English</span>
                                            </div>

                                        </div>
                                        <div class="header_user_info"> 
                                            <a class="login" href="#" rel="nofollow" title="Log in to your customer account"> Sign in <span>

                                                </span>
                                            </a>
                                        </div>
                                        <div class="">
                                            <div class="shopping_cart"> <a href="#" title="View my shopping cart" rel="nofollow">
                                                    <span class="shopping_cart-i"></span> 
                                                    <span class="ajax_cart_quantity unvisible">0</span>
                                                    <span class="ajax_cart_product_txt unvisible">Product</span> 
                                                    <span class="ajax_cart_product_txt_s unvisible">Products</span> 
                                                    <span class="ajax_cart_total unvisible"> </span> 
                                                    <span class="ajax_cart_no_product">(empty)</span>
                                                </a>
                                                <div class="cart_block block exclusive">
                                                    <div class="block_content">
                                                        <div class="cart_block_list">
                                                            <p class="cart_block_no_products"> No products</p>
                                                            <div class="cart-prices">
                                                                <div class="cart-prices-line first-line">
                                                                    <span class="price cart_block_shipping_cost ajax_cart_shipping_cost unvisible"> To be determined </span>
                                                                    <span class="unvisible"> Shipping </span>
                                                                </div>
                                                                <div class="cart-prices-line last-line"> 
                                                                    <span class="price cart_block_total ajax_block_cart_total">$0.00</span> 
                                                                    <span>Total</span>
                                                                </div>
                                                            </div>
                                                            <p class="cart-buttons"> 
                                                                <a id="button_order_cart" class="btn btn-default button button-small" href="#" title="Check out" rel="nofollow">
                                                                    <span> Check out </span> 
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </nav>

                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4 clearfix top-phone-big col-lg-3 col-md-4"> 
                                        <span class="shop-phone"> 0123-456-789 </span>
                                    </div>
                                    <div id="header_logo" class="col-sm-4 clearfix col-lg-6 col-md-4">
                                        <a href="#" title="theme4_2"> 
                                            <img class="logo img-responsive" src="images/theme-logo-1447234212.jpg" alt="theme4_2"> 
                                        </a></div><div id="search_block_top" class="col-sm-4 clearfix col-lg-3 col-md-4">
                                        <form id="searchbox" method="get"> 
                                            <input type="hidden" name="controller" value="search"> 
                                            <input type="hidden" name="orderby" value="position">
                                            <input type="hidden" name="orderway" value="desc"> 
                                            <input class="search_query form-control ac_input" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" autocomplete="off">
                                            <button type="submit" name="submit_search" class="btn btn-default button-search"> 
                                                <span>Search</span>
                                            </button>
                                        </form>
                                    </div>
                                    <div id="block_top_menu" class="sf-contener clearfix col-lg-12">
                                        <div class="cat-title">Menu</div>
                                        <ul class="sf-menu clearfix menu-content sf-js-enabled sf-arrows">
                                            <li>
                                                <a href="" title="Sportbike" class="sf-with-ul">Sportbike</a>
                                                <ul class="submenu-container clearfix first-in-line-xs" style="display: none;">
                                                    <li>
                                                        <a href="" title="Yamaha" class="sf-with-ul">Yamaha</a>
                                                        <ul style="display: none;">
                                                            <li>
                                                                <a href="" title="Yamaha YZF">Yamaha YZF
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="" title="Yamaha MT">Yamaha MT</a>
                                                            </li>
                                                            <li>
                                                                <a href="" title="Yamaha FJR">Yamaha FJR</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Suzuki " class="sf-with-ul">Suzuki </a>
                                                        <ul style="display: none;">
                                                            <li>
                                                                <a href="" title="Suzuki GSX">Suzuki GSX</a>
                                                            </li>
                                                            <li>
                                                                <a href="" title="Suzuki GW">Suzuki GW</a>
                                                            </li>
                                                            <li>
                                                                <a href="" title="Suzuki V-STROM">Suzuki V-STROM</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Honda" class="sf-with-ul">Honda</a>
                                                        <ul style="display: none;">
                                                            <li>
                                                                <a href="" title="Honda CBR">Honda CBR</a>
                                                            </li>
                                                            <li>
                                                                <a href="" title="Honda GL">Honda GL</a>
                                                            </li>
                                                            <li>
                                                                <a href="" title="Honda VFR">Honda VFR</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="category-thumbnail">
                                                        <div>
                                                            <img src="" alt="Sportbike" title="Sportbike" class="imgm">
                                                        </div>
                                                        <div>
                                                            <img src="" alt="Sportbike" title="Sportbike" class="imgm">
                                                        </div>
                                                        <div>
                                                            <img src="" alt="Sportbike" title="Sportbike" class="imgm">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="" title="Yamaha" class="sf-with-ul">Yamaha</a>
                                                <ul class="submenu-container clearfix first-in-line-xs" style="display: none;">
                                                    <li>
                                                        <a href="" title="Yamaha YZF">Yamaha YZF</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Yamaha MT">Yamaha MT</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Yamaha FJR">Yamaha FJR</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="" title="Honda" class="sf-with-ul">Honda</a>
                                                <ul class="submenu-container clearfix first-in-line-xs" style="display: none;">
                                                    <li>
                                                        <a href="" title="Honda CBR">Honda CBR</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Honda GL">Honda GL</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Honda VFR">Honda VFR</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="" title="Cruiser">Cruiser</a>
                                            </li>
                                            <li>
                                                <a href="" title="Dirt Bike ">Dirt Bike </a>
                                            </li>
                                            <li>
                                                <a href="" title="Accessories">Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </header>
                </div>
                <div id="wowslider-container1">
                    <div class="ws_images">
                        <ul>
                            <li>
                                <img src="data1/images/slide1_1.jpg" alt="" title="" id="wows1_0"/>
                            </li>
                            <li>

                                <img src="data1/images/slide1_2.jpg" alt="wowslideshow" title="" id="wows1_1"/>

                            </li>
                            <li>
                                <img src="data1/images/slide1_3.jpg" alt="" title="" id="wows1_2">
                            </li>
                        </ul></div>
                    <div class="ws_script" style="position:absolute;left:-99%">
                        <a href="">css slider</a> 
                        by WOWSlider.com v8.7
                    </div>
                    <div class="ws_shadow"></div>
                </div>	
                <script type="text/javascript" src="engine1/wowslider.js"></script>
                <script type="text/javascript" src="engine1/script.js"></script>


                <div class="columns-container">
                    <div id="columns" class="container">
                        <div class="row">
                            <div id="center_column" class="center_column col-xs-12 col-sm-12">
                                <div class="home-top-banners row">
                                    <div class="col-sm-6">
                                        <div class="htb-i">
                                            <img src="images/stb-1.jpg" alt="">
                                        </div>
                                        <div class="an_st_block_info">
                                            <span>Moto</span>
                                            <h2>Helmets</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In accumsan, risus at dapibus venenatis, neque tortor pellentesque felis, blandit venenatis leo turpis eu eros</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="htb-i">
                                            <img src="images/stb-1.jpg" alt="">
                                        </div>
                                        <div class="an_st_block_info">
                                            <span>Moto</span>
                                            <h2>parts</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In accumsan, risus at dapibus venenatis, neque tortor pellentesque felis, blandit venenatis leo turpis eu eros</p>
                                        </div>
                                    </div>
                                </div>

                                <ul id="home-page-tabs" class="nav nav-tabs clearfix">
                                    <li class="active">
                                        <span class="homefeatured">Popular</span>
                                    </li>
                                    <li>
                                        <span class="blockspecials">Specials </span>
                                    </li>
                                    <li>
                                        <span class="blockbestsellers">Best Sellers</span>
                                    </li>
                                </ul>
                                <div class="tab-content" style="margin-top: 40px">
                                    <ul id="homefeatured" class="product_list grid row homefeatured tab-pane active">

                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>
                                                        <span class="old-price product-price"> $232.00 </span>
                                                        <span class="price-percent-reduction"> -15% </span>
                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>                                                                     
                                    </ul>
                                    <ul id="blockspecials" class="product_list grid row blockspecials tab-pane">
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/24-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>
                                                        <span class="old-price product-price"> $232.00 </span>
                                                        <span class="price-percent-reduction"> -15% </span>
                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>                                                                        
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>            
                                    </ul>

                                    <ul id="blockbestsellers" class="product_list grid row blockbestsellers tab-pane" >
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/24-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>
                                                        <span class="old-price product-price"> $232.00 </span>
                                                        <span class="price-percent-reduction"> -15% </span>
                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>                                                                        
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/26-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/24-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <div class="product-image-container"> 
                                                        <a class="product_img_link" href="#" title="Bomber Gloves" itemprop="url">
                                                            <img class="replace-2x img-responsive" src="images/24-home_default.jpg" alt="Bomber Gloves" title="Bomber Gloves" width="240" height="240" itemprop="image">
                                                        </a>
                                                        <div class="quick-view-wrapper-mobile"> 
                                                            <a class="quick-view-mobile" href="#" > 
                                                                <i class="icon-eye-open"></i> 
                                                            </a>
                                                        </div>                                                                                              
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 itemprop="name"> 
                                                        <a class="product-name" href="#" title="Bomber Gloves" itemprop="url"> Bomber Gloves </a>
                                                    </h5>                                               
                                                    <p class="product-desc" itemprop="description"> The Suzuki Hayabusa (or GSX1300R) is a sport bike motorcycle made...</p>
                                                    <div class="content_price"> 
                                                        <span class="price product-price"> $27.00 </span>

                                                    </div>                                                                                                                                                 
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bot-static-fr">
                    <div class="container">
                        <div class="home-top-brands row">
                            <a href="#">
                                <img src="images/brand-1.jpg">
                            </a>
                            <a href="#">
                                <img src="images/brand-2.jpg">
                            </a> 
                            <a href="#">
                                <img src="images/brand-3.jpg">
                            </a> 
                            <a href="#">
                                <img src="images/brand-4.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bot-static-2">
                    <div class="container">
                        <div class="home-bottom-banners row">
                            <div class="col-sm-12">
                                <div class="bottom-ban-5">
                                    <a href="#">
                                        <img src="images/home-bottom-banners-1.jpg" alt="">
                                        <span class="bottom-ban-5-t1">Call us</span> 
                                        <span class="bottom-ban-5-2">0123 - 456 - 789 </span>
                                    </a>
                                </div>
                                <div class="bottom-ban-5">
                                    <a href="#">
                                        <img src="images/home-bottom-banners-1.jpg" alt="">
                                        <span class="bottom-ban-5-t1">Our</span> <span class="bottom-ban-5-2">contacts</span>
                                    </a>
                                </div>
                                <div class="bottom-ban-5"><a href="#">
                                        <img src="images/home-bottom-banners-1.jpg" alt="">
                                        <span class="bottom-ban-5-t1">Discount</span> 
                                        <span class="bottom-ban-5-2">system</span>
                                    </a>
                                </div>
                                <div class="bottom-ban-5">
                                    <a href="#">
                                        <img src="images/home-bottom-banners-1.jpg" alt="">
                                        <span class="bottom-ban-5-t1">Support</span>
                                        <span class="bottom-ban-5-2">24h</span>
                                    </a>
                                </div>
                                <div class="bottom-ban-5">
                                    <a href="#">
                                        <img src="images/home-bottom-banners-1.jpg" alt="">
                                        <span class="bottom-ban-5-t1">Happy</span> 
                                        <span class="bottom-ban-5-2">Customers</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bot-static-slider">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="bx-wrapper" style="max-width: 1570px; margin: 0px auto;">

                                    <div class="project">
                                        <section id="demos">
                                            <div class="row">
                                                <div class="large-12 columns">
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item">
                                                            <div class="image">
                                                                <img alt src="images/sl-1.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="image">
                                                                <img alt src="images/sl-1.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="image">
                                                                <img alt src="images/sl-1.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="image">
                                                                <img alt src="images/sl-1.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="image">
                                                                <img alt src="images/sl-1.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="image">
                                                                <img alt src="images/sl-1.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="image">
                                                                <img alt src="images/sl-1.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="image">
                                                                <img alt src="images/sl-1.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="image">
                                                                <img alt src="images/sl-1.jpg">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <script>
            $(document).ready(function () {
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    margin: 10,
                    nav: true,
                    loop: true,
                    responsive: {
                        0: {
                            items: 3
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                })
            })
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bot-static-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 bot-static-info-text">
                                <p>
                                    <img src="images/stb-about-us.jpg" alt="" style="float: left;">
                                    <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In accumsan, risus at dapibus venenatis, neque tortor pellentesque felis, blandit venenatis leo turpis eu eros. Curabitur ultrices malesuada</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In accumsan, risus at dapibus venenatis, neque tortor pellentesque felis, blandit venenatis leo turpis eu eros. Curabitur ultrices malesuada</p></div><div class="col-sm-6 bot-newsletter"><div class="bot-newsletter-line"><div id="newsletter_block_left" class="block"><h4>Sign Up Newsletter</h4><div class="block_content">
                                            <form action="#" method="post">
                                                <div class="form-group"> 
                                                    <input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" placeholder="Enter your e-mail"> <button type="submit" name="submitNewsletter" class="btn btn-default button button-small">
                                                        <span>subscribe</span> 
                                                    </button> <input type="hidden" name="action" value="0"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="bot-social-line">
                                    <section id="social_block" class="pull-right">
                                        <h4>Follow us</h4>
                                        <ul>
                                            <li class="facebook"> 
                                                <a class="fa fa-facebook" href="" target="_blank"> 

                                                </a>
                                            </li>
                                            <li class="twitter"> 
                                                <a class="fa fa-twitter" href="" target="_blank">
                                                    <span>Twitter</span> 
                                                </a>
                                            </li>
                                            <li class="rss">
                                                <a class="fa fa-wifi" href="" target="_blank" style="transform: rotate(deg);">
                                                    <span>RSS</span> 
                                                </a>
                                            </li>
                                            <li class="google-plus">
                                                <a class="fa fa-google-plus" href="#" target="_blank"> 
                                                    <span>Google Plus</span> 
                                                </a>
                                            </li>
                                        </ul> 
                                    </section>
                                    <div class="clearfix">

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <div class="footer-container"> 
                    <footer id="footer" class="container">
                        <div class="row">
                            <section class="blockcategories_footer footer-block col-xs-12 col-sm-2">
                                <h4>Categories</h4>
                                <div class="category_footer toggle-footer" style="">
                                    <div class="list">
                                        <ul class="tree dynamized" style="display: block;">
                                            <li> <span class="grower CLOSE"> </span>
                                                <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Sportbike </a>
                                                <ul style="display: none;">
                                                    <li>
                                                        <span class="grower CLOSE"> </span>
                                                        <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Yamaha </a>
                                                        <ul style="display: none;">
                                                            <li> 
                                                                <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Yamaha YZF </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Yamaha MT </a>
                                                            </li>
                                                            <li class="last">
                                                                <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Yamaha FJR </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <span class="grower CLOSE"> </span>
                                                        <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Suzuki </a><ul style="display: none;">
                                                            <li>
                                                                <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Suzuki GSX </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Browse our different dresses to choose the perfect dress for an unforgettable evening!"> Suzuki GW </a>
                                                            </li>
                                                            <li class="last"> 
                                                                <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Suzuki V-STROM </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="last">
                                                        <span class="grower CLOSE"> </span>
                                                        <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Honda </a>
                                                        <ul style="display: none;">
                                                            <li>
                                                                <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Honda CBR </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Honda GL </a>
                                                            </li>
                                                            <li class="last"> 
                                                                <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Honda VFR </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> 
                                                <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Cruiser </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Dirt Bike </a>
                                            </li>
                                            <li class="last">
                                                <a href="#" title="Adventure Touring is more than just a growing segment of the motorcycle industry, it is a riding lifestyle complete with unique dual sport motorcycle, specialized gear designed for the hardcore riders among us and an unlimited number of destinations to choose from."> Accessories </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> 
                            </section>
                            <section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
                                <h4>Information</h4>
                                <ul class="toggle-footer">
                                    <li class="item"> 
                                        <a href="#" title="Specials"> Specials </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="New products"> New products </a>
                                    </li>
                                    <li class="item"> 
                                        <a href="#" title="Best sellers"> Best sellers </a>
                                    </li>
                                    <li class="item"> 
                                        <a href="#" title="Our stores"> Our stores </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="Contact us"> Contact us </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="Terms and conditions of use"> Terms and conditions of use </a>
                                    </li>
                                    <li class="item"> 
                                        <a href="#" title="About us"> About us </a>
                                    </li>
                                    <li> 
                                        <a href="#" title="Sitemap"> Sitemap </a>
                                    </li>
                                </ul> 
                            </section>

                            <section class="footer-block col-xs-12 col-sm-4">
                                <h4>
                                    <a href="#" title="Manage my customer account" rel="nofollow">My account</a>
                                </h4>
                                <div class="block_content toggle-footer" style="">
                                    <ul class="bullet">
                                        <li>
                                            <a href="#" title="My orders" rel="nofollow">My orders</a>
                                        </li>
                                        <li>
                                            <a href="#" title="My credit slips" rel="nofollow">My credit slips</a>
                                        </li>
                                        <li>
                                            <a href="#" title="My addresses" rel="nofollow">My addresses</a></li><li><a href="#" title="Manage my personal information" rel="nofollow">My personal info</a></li></ul></div> </section>
                            <section id="block_contact_infos" class="footer-block col-xs-12 col-sm-4">
                                <div>
                                    <h4>Store Information</h4>
                                    <ul class="toggle-footer" style="">
                                        <li> 
                                            <i class="icon-map-marker"></i>My Company, 42 avenue des Champs Elysees 75000 Paris France</li>
                                        <li> 
                                            <i class="icon-phone"></i>Call us now: <br> <span>0123-456-789</span>
                                        </li>
                                        <li> 
                                            <i class="icon-envelope-alt"></i>Email: <br> 
                                            <span>
                                                <a href="mailto:%73%61%6c%65%73@%79%6f%75%72%63%6f%6d%70%61%6e%79.%63%6f%6d">sales@yourcompany.com</a>
                                            </span>
                                        </li>
                                        <li> @ 2017 <a class="_blank" href="#" target="_blank">Ecommerce software by PrestaShop</a>
                                        </li>
                                    </ul>
                                </div> 
                            </section>
                        </div> 
                    </footer>
                </div>
            </div>
        </div>
    </body>

</html>