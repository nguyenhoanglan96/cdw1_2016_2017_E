<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-g-10.less', 'css/type-g-10.css');
        ?>
        <link href="css/type-g-10.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-g-10">  
            <div class="container">
                <!--------------------------------Begin Our Brands------------------------------------------->
                <div class="col-1">
                    <h3 class="section-title padding-right">Our Brands</h3>
                </div>
                <div class="col-2">
                    <nav class="control-box-left">
                        <ul class="control-box pager">
                            <li><a data-slide="prev" href="#Carousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                            <li><a data-slide="next" href="#Carousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
                        </ul>
                    </nav>
                </div>
                <br>
                <br>
                <br>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div id="Carousel" class="carousel slide">
                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-5"><a href="#" class="thumbnail"><img src="{!! url('public/nhomg/images/img/apple.png') !!}" alt="Image" style="max-width:100%;"></a></div>
                                        <div class="col-md-5"><a href="#" class="thumbnail"><img src="{!! url('public/nhomg/images/img/apple.png') !!}" alt="Image" style="max-width:100%;"></a></div>
                                        <div class="col-md-5"><a href="#" class="thumbnail"><img src="{!! url('public/nhomg/images/img/apple.png') !!}" alt="Image" style="max-width:100%;"></a></div>
                                        <div class="col-md-5"><a href="#" class="thumbnail"><img src="{!! url('public/nhomg/images/img/apple.png') !!}" alt="Image" style="max-width:100%;"></a></div>
                                        <div class="col-md-5"><a href="#" class="thumbnail"><img src="{!! url('public/nhomg/images/img/apple.png') !!}" alt="Image" style="max-width:100%;"></a></div>
                                    </div><!--.row-->
                                </div><!--.item-->

                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-5"><a href="#" class="thumbnail"><img src="{!! url('public/nhomg/images/img/apple.png') !!}" alt="Image" style="max-width:100%;"></a></div>
                                        <div class="col-md-5"><a href="#" class="thumbnail"><img src="{!! url('public/nhomg/images/img/apple.png') !!}" alt="Image" style="max-width:100%;"></a></div>
                                        <div class="col-md-5"><a href="#" class="thumbnail"><img src="{!! url('public/nhomg/images/img/apple.png') !!}" alt="Image" style="max-width:100%;"></a></div>
                                        <div class="col-md-5"><a href="#" class="thumbnail"><img src="{!! url('public/nhomg/images/img/apple.png') !!}" alt="Image" style="max-width:100%;"></a></div>
                                        <div class="col-md-5"><a href="#" class="thumbnail"><img src="{!! url('public/nhomg/images/img/apple.png') !!}" alt="Image" style="max-width:100%;"></a></div>
                                    </div><!--.row-->
                                </div><!--.item-->
                            </div><!--.carousel-inner-->
                        </div><!--.Carousel-->
                    </div>
                </div>
                <!--------------------------------End Our Brands--------------------------------------------->
            </div>
        </div>
    </body>
</html>