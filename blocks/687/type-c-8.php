<!DOCTYPE html>

<html>

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
        $less->compileFile('less/type-c-8.less', 'css/type-c-8.css');
        ?>
        <link href="css/type-c-8.css" rel="stylesheet" type="text/css" />
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-c-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <aside id="right1-sidebar" role="complementary">
                            <article id="" class="widget">
                                <div class="box">
                                    <div class="section-big-wrapper">
                                        <h3 class="section-big">
                                            Filter by Price
                                        </h3>
                                    </div>
                                </div>
                                <form method="get" action="#">
                                    <div>
                                        <div>
                                            <div>
                                                <div id="slider-range"></div>
                                                <button type="submit" class="button">Filter</button>
                                                <p>
                                                    <label for="amount">Price:</label>
                                                    <input type="text" id="amount" readonly style="border:0; color:#000;">
                                                </p>
                                                <div class="clear"></div>
                                            </div>
                                            <article id="woocommerce_layered_nav-8" class="widget woocommerce">
                                                <div class="box">
                                                    <div class="section-big-wrapper">
                                                        <h3 class="section-big">
                                                            Filter by Size
                                                        </h3>
                                                    </div>
                                                </div>
                                                <select style="width: 100%;height: 30px;">
                                                    <option value="">
                                                        Any Size
                                                    </option>
                                                    <option value="l">L</option>
                                                    <option value="m">M</option>
                                                    <option value="s">S</option>
                                                    <option value="xl">XL</option>
                                                    <option value="xs">XS</option>
                                                    <option value="xxl">XXL</option>
                                                    <option value="xxxl">XXXL</option>
                                                </select>
                                            </article>
                                            <article id="woocommerce_layered_nav-9" class="widget woocommerce">
                                                <div class="box">
                                                    <div class="section-big-wrapper">
                                                        <h3 class="section-big">
                                                            Filter by Color
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div>
                                                    <select style="width: 100%;height: 30px;">
                                                        <option value="">
                                                            Any Color
                                                        </option>
                                                        <option value="blue">Blue</option>
                                                        <option value="green">Green</option>
                                                        <option value="orange">Orange</option>
                                                        <option value="white">White</option>
                                                    </select></div>
                                                <div class="selectric"> 
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </form>
                            </article>
                            <article id="widget_sp_image-8" class="widget">
                                <img width="275" height="271" alt="" style="max-width: 100%;" 
                                     src="images/category-jeans-keni.png">
                            </article>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/scripts.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>
    </body>

</html>