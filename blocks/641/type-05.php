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
            <section>
                <!-- Main Container -->
                <div class="col-md-3  sidebar">
                    <div id="search-2">
                        <form method="get" id="searchform ">
                            <div class="sidebar-search-form ">
                                <input type="text" class="search-query form-control" placeholder="Search" name="s" id="s">
                                <button class="btn search-btn" type="button">
                                    <span class="fa fa-search"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div id="categories-4 " class="widget widget_categories ">
                        <h3 class="sidebar-title ">Categories</h3>
                        <ul>
                            <li>
                                <a href="#">Careers</a>
                            </li>
                            <li>
                                <a href="#">Environment</a>
                            </li>
                            <li>
                                <a href="#">Marketing &amp; Sales</a>
                            </li>
                            <li>
                                <a href="#">Technology</a>
                            </li>
                            <li>
                                <a href="#">The Company</a>
                            </li>
                            <li>
                                <a href="#">Transportation</a>
                            </li>
                        </ul>
                    </div>
                    <div id="offshore_download_widget-1 " class="widget widget_offshore_download_widget ">
                        <div class="sidebar-download ">
                            <div class="download-file color-bg ">
                                <a href="#" download="Test.pdf ">
                                    <i class="fa fa-file-pdf-o " aria-hidden="true "></i>Download
                                    <span>17.18 KB</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="offshore_cta_widget-1">
                        <div class="sidebar-fact ">
                            <h3>Quick Fact</h3>
                            <p>Distinctively fashion in the effect of standard products communities via seamless applications. Authoritatively recaptiualize.
                            </p>
                            <a href="#" class="btn" role="button ">Call To Action</a>
                        </div>
                    </div>
                    <div id="tag_cloud-1">
                        <h3 class="sidebar-title">Tags</h3>
                        <div class="tagcloud ">
                            <a href="#" style="font-size: 22pt; ">Careers</a>
                            <a href="#" style="font-size: 8pt; ">Environment</a>
                            <a href="#" style="font-size: 8pt; ">Marketing &amp; Sales</a>
                            <a href="#" style="font-size: 8pt; ">Technology</a>
                            <a href="#" style="font-size: 8pt; ">The Company</a>
                            <a href="#" style="font-size: 8pt; ">Transportation</a>
                        </div>
                    </div>
                </div>
                <!-- Main Container -->
            </section>>
        </div>
        <div class="clearfix " style="margin-top: 150px; "></div>
    </body>
</html>