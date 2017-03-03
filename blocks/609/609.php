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
        $less->compileFile('less/609.less', 'css/609.css');
        ?>
        <link href="css/609.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <aside class="type-b-13">

            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <div  class="sidebar">
                        <div class="widget">
                            <h3 class="widgettitle ">
                                PRODUCT SEARCH 
                            </h3>
                            
                                
                                    <form action="http://www.google.com/search" method="get"  class="gensearch_form" onsubmit="Gsitesearch(this)" target="black">
                                        <input type="text" name="s" class="gensearch_input" value="SEARCH...">
                                        <button type="submit" class="gensearch_submit glyphicon glyphicon-search" value="go"></button>
                                    </form>
                                
                            
                        </div>

                        <div>
                            <h3 class="widgettitle ">
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

                        <div>
                            <h3 class="widgettitle">
                                PRODUCT CATEGORIES
                            </h3>
                            <nav>
                                <ul class="product-categories">
                                    <li>
                                        <a href="#">
                                            ACCESSORIES
                                        </a>
                                        <span class="count">(9)</span>

                                        <nav>
                                            <ul class="children">
                                                <li>
                                                    <a href="#">
                                                        Belts
                                                    </a>
                                                    <span class="count">(3)</span>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Gloves
                                                    </a>
                                                    <span class="count">(3)</span>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Sunglasses
                                                    </a>
                                                    <span class="count">(3)</span>
                                                </li>
                                            </ul>
                                        </nav>
                                    </li>

                                    <li>
                                        <a href="#">
                                            CLOTHING
                                        </a>
                                        <span class="count">(12)</span>
                                        <nav>
                                            <ul class="children">
                                                <li>
                                                    <a href="#">
                                                        Blazers
                                                    </a>
                                                    <span class="count">(2)</span>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Hoodies
                                                    </a>
                                                    <span class="count">(6)</span>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Shirts
                                                    </a>
                                                    <span class="count">(4)</span>
                                                </li>
                                            </ul>
                                        </nav>
                                    </li>

                                    <li>
                                        <a href="#">
                                            HOME GEAR
                                        </a>
                                        <span class="count">(10)</span>
                                        <nav>
                                            <ul class="children">
                                                <li >
                                                    <a href="#">
                                                        Bathroom
                                                    </a>
                                                    <span class="count">(2)</span>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Bedding Sets
                                                    </a>
                                                    <span class="count">(4)</span>
                                                </li>
                                                <li >
                                                    <a href="#">
                                                        Decorations
                                                    </a>
                                                    <span class="count">(4)</span>
                                                </li>
                                            </ul>
                                        </nav>
                                    </li>

                                    <li>
                                        <a href="#">
                                            KIDS WEAR
                                        </a>
                                        <span class="count">(6)</span>
                                        <nav>
                                            <ul class="children">
                                                <li>
                                                    <a href="#">
                                                        Kids Accessories
                                                    </a>
                                                    <span class="count">(0)</span>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Kids Clothing
                                                    </a>
                                                    <span class="count">(4)</span>
                                                </li>
                                                <li >
                                                    <a href="#">
                                                        Kids Shoes
                                                    </a>
                                                    <span class="count">(2)</span>
                                                </li>
                                            </ul>
                                        </nav>
                                    </li>

                                    <li>
                                        <a href="#">
                                            SHOES
                                        </a>
                                        <span class="count">(9)</span>
                                        <nav>
                                            <ul class="children">
                                                <li >
                                                    <a href="#">
                                                        Ankle Boots
                                                    </a>
                                                    <span class="count">(4)</span>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        High Heels
                                                    </a>
                                                    <span class="count">(3)</span>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Trainers
                                                    </a>
                                                    <span class="count">(2)</span>
                                                </li>
                                            </ul>
                                        </nav>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div >
                            <h3 class="widgettitle ">
                                MOST RATED ITEMS 
                            </h3>
                            <nav>
                                <ul class="product_list_widget">
                                    <li>
                                        <a href="#">
                                            <img src="images/san-pham-A-11.jpg" alt="">
                                            <span>
                                                Scarlett Taupe Suede Ankle Boots
                                            </span>
                                        </a>
                                        <div class="star-rating">
                                            <span style="width: 100%">
                                                <strong>5.00</strong>out of 5
                                            </span>
                                        </div>
                                        <span class="amount">£9.00</span>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <img src="images/san-pham-A-12.jpg" alt="">
                                            <span>
                                                Shirt In Super Longline
                                            </span>
                                        </a>
                                        <div class="star-rating">
                                            <span style="width: 100%">
                                                <strong>5.00</strong>out of 5
                                            </span>
                                        </div>
                                        <span class="amount">£18.00</span>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <img src="images/san-pham-A-13.jpg" alt="">
                                            <span>
                                                Abercrombie & Fitch Shirt with Flannel Check
                                            </span>
                                        </a>
                                        <div class="star-rating">
                                            <span style="width: 100%">
                                                <strong>5.00</strong>out of 5
                                            </span>
                                        </div>
                                        <span class="amount">£20.00</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--End Col-9-->
            </div>

        </aside>   

        <script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    </body>

</html>