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
        $less->compileFile('less/type-e-600.less', 'css/type-e-600.css');
        ?>
        <link href="css/type-e-600.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-e-600">
            <div class="container rescure">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-5 rescure1">
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

                            <div class="col-md-7 rescure2">
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

                                <div class="desc">
                                    <p>
                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                    </p>
                                </div>

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