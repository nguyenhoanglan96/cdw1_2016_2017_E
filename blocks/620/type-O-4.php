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
        $less->compileFile('less/solutions.less', 'css/solutions.css');
        ?>
        <link href="css/solutions.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-23">
            <div class="solutions">
                <div class=" container content_wrap">
                    <div class="title col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h6>Research Areas</h6>
                        <h2 class="sc_item">We Deliver Innovative Solutions</h2>
                    </div>
                    <div class="content">
                        <h2>Animal Research</h2>
                        <p>Bone and Cartilage Metabolism Markers for use in Research</p>
                        <ul class="list">
                            <li>
                                <span>RatLaps™ (CTX-I) EIA</span>
                            </li>
                            <li>
                                <span>CrossLaps® for Culture (CTX-I) ELISA</span>
                            </li>
                            <li>
                                <span>RatTRAP™ (TRAcP 5B) ELISA</span>
                            </li>
                            <li>
                                <span>MouseTRAP™ (TRAcP 5B) ELISA</span>
                            </li>
                            <li>
                                <span>Rat/Mouse PINP EIA</span>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h2>Animal Research</h2>
                        <p>Bone and Cartilage Metabolism Markers for use in Research</p>
                        <ul class="list">
                            <li>
                                <span>RatLaps™ (CTX-I) EIA</span>
                            </li>
                            <li>
                                <span>CrossLaps® for Culture (CTX-I) ELISA</span>
                            </li>
                            <li>
                                <span>RatTRAP™ (TRAcP 5B) ELISA</span>
                            </li>
                            <li>
                                <span>MouseTRAP™ (TRAcP 5B) ELISA</span>
                            </li>
                            <li>
                                <span>Rat/Mouse PINP EIA</span>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h2>Animal Research</h2>
                        <p>Bone and Cartilage Metabolism Markers for use in Research</p>
                        <ul class="list">
                            <li>
                                <span>RatLaps™ (CTX-I) EIA</span>
                            </li>
                            <li>
                                <span>CrossLaps® for Culture (CTX-I) ELISA</span>
                            </li>
                            <li>
                                <span>RatTRAP™ (TRAcP 5B) ELISA</span>
                            </li>
                            <li>
                                <span>MouseTRAP™ (TRAcP 5B) ELISA</span>
                            </li>
                            <li>
                                <span>Rat/Mouse PINP EIA</span>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h2>Animal Research</h2>
                        <p>Bone and Cartilage Metabolism Markers for use in Research</p>
                        <ul class="list">
                            <li>
                                <span>RatLaps™ (CTX-I) EIA</span>
                            </li>
                            <li>
                                <span>CrossLaps® for Culture (CTX-I) ELISA</span>
                            </li>
                            <li>
                                <span>RatTRAP™ (TRAcP 5B) ELISA</span>
                            </li>
                            <li>
                                <span>MouseTRAP™ (TRAcP 5B) ELISA</span>
                            </li>
                            <li>
                                <span>Rat/Mouse PINP EIA</span>
                            </li>
                        </ul>
                    </div>
                    <div class="video col-lg-12 col-md-12 col-sm-12 col-xs-12s">
                        <div class="line"></div>
                        <figure class="sc_image  sc_image_shape_square margin_bottom_small">
                            <a href="#" class="sc_popup_link inited">
                                <img class="img" src="images/video-screen.jpg" alt=""/>
                            </a>
                        </figure>
                          <h6 class="sc_title">New Research: The bacteria behind food poisoning</h6>
                    </div>    
                </div>
            </div><!--end-solutions-->
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</html>