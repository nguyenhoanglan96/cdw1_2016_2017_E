<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Offshore</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Important Owl stylesheet -->
        <link rel="stylesheet" href="slider/owl-carousel/owl.carousel.css">
        <!-- Default Theme -->
        <link rel="stylesheet" href="slider/owl-carousel/owl.theme.css">
        <!--  jQuery 1.7+  -->
        <script src="slider/assets/js/jquery-1.9.1.min.js"></script>
        <!-- Include js plugin -->
        <script src="slider/owl-carousel/owl.carousel.js"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-05.less', 'css/type-05.css');
        ?>

        <link href="css/type-05.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!------------------>
        <div class="type-05">
            <!-- Main Content Section -->
            <article>
                <!-- Page Title -->
                <div class="page-title">
                    <h2 class="title" style="text-align: center;">Blog</h2>
                </div>
                <!-- Page Title -->
                <!-- Breadcrumbs -->
                <div class="breadcrumbs">
                    <div class="container">
                        <span class="parent">
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </span>
                        <i class="fa fa-chevron-right"></i>
                        <span>Blog</span>
                    </div>
                </div>
            </article>
        </div>
        <div class="clearfix" style="margin-top: 150px; "></div>
    </body>
</html>