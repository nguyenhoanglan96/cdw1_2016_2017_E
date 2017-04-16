<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/655.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/655.less', 'css/655.css');
        ?>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/menu.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-655">
            <div class="container">
                <div class="row">
                    <div class="title_container">
                        <h1>Canon 25-50</h1>
                        <div class="breadcrumb-trail">
                            <span>You are here:</span>
                            <a href="#" title="Abundance eCommerce Theme Demo" rel="home" >Home</a> <span>»</span> <a href="#" title="Shop">Shop</a> <span>»</span> <a href="#" title="Products">Products</a> <span>»</span> <span>Canon 25-50</span>
                        </div>
                        <div class="price_container">
                            <p class="price"><span class="amount">$122.00</span></p>
                            <meta itemprop="price" content="122">
                            <meta itemprop="priceCurrency" content="USD">
                            <link itemprop="availability" href="#">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#"><img src="images/jeff_golden_1-350x350.jpg" alt=" " title=" "></a>
                            <div class="sidebar">
                                <div  class="widget"><h3 class="widgettitle cufon_headings">Widget Ready Areas</h3>			
                                    <p>You can add widgets to single product pages and they will appear here. This by the way is a simple text widget...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4 itemprop="name">Canon 25-50</h4>
                            <div itemprop="description">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.<br>
                                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricien enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                            </div>
                            <p class="stock">430 in stock (can be backordered)</p>
                            <form class="cart" method="post" enctype="multipart/form-data">
                                <input type="button" value="-" class="minus">
                                <input type="text" step="1" min="1" max="" name="" value="1" title="Qty" class="input-text qty text">
                                <input type="button" value="+" class="plus">
                                <input type="hidden" name="add-to-cart" value="923">
                                <div>
                                    <button type="submit" class=" button alt">Add to cart</button>
                                </div>
                            </form>

                            <div class="product_meta">
                                <span>Category: <a href="#" rel="tag">Photography</a></span>
                            </div>

                            <div class="container-nav">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Additional Information</a></li>
                                    <li><a data-toggle="tab" href="#menu2">Reviews (0)</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <h2>Product Description</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
                                        <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricien enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <h2>Additional Information</h2>
                                        <table class="shop_attributes">
                                            <tbody>
                                                <tr>
                                                    <th>color</th>
                                                    <td>
                                                        <p>Black, White</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>merchant</th>
                                                    <td>
                                                        <p>Samsung, Sony, Canon</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>    
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <h2>Reviews</h2>
                                        <p>There are no reviews yet</p>
                                        <p>You must be <a href="http://www.kriesi.at/themes/abundance/my-account/">logged in</a> to post a review.</p>	
                                    </div>
                                </div>
                            </div>

                            <div class="product-col">
                                <div class="relate-product">
                                    <h2 class="cufon_headings">Related Products</h2>

                                    <div class="row">
                                        <div class="col-md-3  col-sm-6 ">
                                            <a href="images/olympus2000.jpg"></a>
                                            <div class="thumbnail_container">
                                                <div class="thumbnail_container_inner">
                                                    <img src="images/olympus2000.jpg">
                                                    <a href="#">
                                                        Add to cart
                                                    </a>
                                                    <a href="#">Show Details</a>
                                                </div>
                                            </div>
                                            <h3 class="cufon_headings">Olympus 2000</h3>
                                            <span class="price"><span class="amount">$799.00</span></span>
                                        </div>

                                        <div class="col-md-3  col-sm-6 ">
                                            <a href="images/groupduct.jpg">
                                            </a>
                                            <div class="thumbnail_container">
                                                <div class="thumbnail_container_inner">
                                                    <img  src="images/groupduct.jpg">
                                                    <a href="#">View products</a>
                                                    <a href="#">Show Details</a>
                                                </div>
                                            </div>
                                            <h3 class="cufon_headings">This is a grouped Product</h3>
                                            <span class="price"><span class="amount">$90.00</span>–<span class="amount">$799.00</span></span>
                                        </div>

                                        <div class="col-md-3  col-sm-6">
                                            <a href="images/Samsung255.jpg">
                                            </a>
                                            <div class="thumbnail_container">
                                                <div class="thumbnail_container_inner">
                                                    <img src="images/Samsung255.jpg">
                                                    <a href="#">Add to cart</a>
                                                    <a  href="#">Show Details</a>
                                                </div>
                                            </div>
                                            <h3 class="cufon_headings">Samsung 255</h3>
                                            <span class="price"><span class="amount">$255.00</span></span>
                                        </div>

                                        <div class="col-md-3  col-sm-6">
                                            <a href="images/olympus2000.jpg">
                                            </a>
                                            <div class="thumbnail_container" style="min-height: 0px;">
                                                <div class="thumbnail_container_inner">
                                                    <img  src="images/olympus2000.jpg">
                                                    <a href="#" >Add to cart</a>
                                                    <a  href="#">
                                                        Show Details
                                                    </a>
                                                </div>
                                            </div>
                                            <h3 class="cufon_headings">Olympus Digital</h3>
                                            <span class="price"><del><span class="amount">$1,200.00</span></del> <ins><span class="amount">$899.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>