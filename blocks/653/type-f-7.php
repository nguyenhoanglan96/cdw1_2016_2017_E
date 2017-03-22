
<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/type.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type.less', 'css/type.css');
        ?>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/menu.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-7">

            <div class="container">
                <!--Title-->
                <div class="row title">
                    <div class="title_container ">
                        <div class="logo col-md-8">
                            <div class="thumb_icons col-md-2">
                                <img src="images/linuxIcons.jpg" alt=""/></div>
                            <div class="text_icons col-md-10 col-sm-">	
                                <h1 class=" cufon_headings">Photography</h1>                            
                                <p>You can add small descriptions as well as preview images to your product categories. You can of couse omit them as well ;)</p>
                            </div>

                        </div>
                        <div class="mn col-md-4">
                            <select id="sl" style="font-size:12px;">
                                <option value="popularity" style="font-size:12px;">Sort by popularity</option>
                                <option value="rating" style="font-size:12px;">Sort by average rating</option>
                                <option value="date" style="font-size:12px;">Sort by newness</option>
                                <option value="price" style="font-size:12px;">Sort by price: low to high</option>
                                <option value="price-desc" style="font-size:12px;">Sort by price: high to low</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                        <div class="breadcrumb  ">
                            <div class="breadcrumb-trail">
                                <span>
                                    <span >You are here:</span></span>
                                <a href="http://www.kriesi.at/themes/abundance" title="Abundance eCommerce Theme Demo" rel="home" >Home</a>
                                <span class="sep">»</span>
                                <span>Products</span>
                            </div>
                            <hr>
                        </div>

                    </div>

                </div>
                <!--/Tile-->


            </div>

        </div>
        <div class="clearfix"></div>


    </body>

</html>