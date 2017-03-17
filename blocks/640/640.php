<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>640</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/640.less', 'css/640.css');
        ?>

        <link href="css/640.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!------------------>
        <div class="type-640">
            <!-- Main Content Section -->
            <div class="container content">
                <div class="row">
                    <!-- Page Title -->
                    <div class="page-title">
                        <h2 class="title">Blog</h2>
                    </div>
                    <!-- / End Page Title -->
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
                    <!-- /End Breadcrumbs -->
                </div>
            </div>
        </div>
        <div class="clearfix" style="margin-top: 150px; "></div>
    </body>
</html>