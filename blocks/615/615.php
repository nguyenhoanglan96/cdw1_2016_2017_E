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
        $less->compileFile('less/615.less', 'css/615.css');
        ?>
        <link href="css/615.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-615">
            <section class="relative " style="background-color: #cc2e2e;">
                <div class="source">
                    <div class="source_gloss"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-offset-2 col-md-8 col-sm-8">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="kl-iconbox ">
                                        <div class=" text-center">
                                            <span class="fs-large fw-semibold">31 DAYS</span>
                                            <br>
                                            RETURN POLICY
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="kl-iconbox">
                                        
                                            <div class=" text-center">
                                                <span class="fs-large fw-semibold">FREE AND FAST</span>
                                                <br>
                                                DELIVERY
                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="kl-iconbox ">

                                        <div class=" text-center">
                                            <span class="fs-large">BEST PRICE</span>
                                            <br>
                                            GUARANTEED
                                        </div>                                           
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="text-center">
                                <a href="#" class=" btn-lined btn-md">
                                    <span>START SHOPPING</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottommask-mask3">
                    <svg width="1180px" height="57px" viewBox="0 0 5000 57" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M9.09383679e-13,57.0005249 L9.09383679e-13,34.0075249 L2418,34.0075249 L2434,34.0075249 C2434,34.0075249 2441.89,33.2585249 2448,31.0245249 C2454.11,28.7905249 2479,11.0005249 2479,11.0005249 L2492,2.00052487 C2492,2.00052487 2495.121,-0.0374751261 2500,0.000524873861 C2505.267,-0.0294751261 2508,2.00052487 2508,2.00052487 L2521,11.0005249 C2521,11.0005249 2545.89,28.7905249 2552,31.0245249 C2558.11,33.2585249 2566,34.0075249 2566,34.0075249 L2582,34.0075249 L5000,34.0075249 L5000,57.0005249 L2500,57.0005249 L1148,57.0005249 L9.09383679e-13,57.0005249 Z"  filter="url(#filter-mask3)" fill="#f5f5f5"></path>
                    </svg>
                    <i class="glyphicon glyphicon-chevron-down"></i>
                </div>
            </section>
        </div>   

    </body>

</html>