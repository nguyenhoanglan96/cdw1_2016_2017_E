<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>641</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/641.less', 'css/641.css');
        ?>

        <link href="css/641.css" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <!------------------>
        <div class="type-641">
            <!-- Main Content Section -->
                <!-- Main Container -->
                <div class="container col-md-3 sidebar">
                    <div id="row search-2">
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
                        <h3 class="sidebar-title">Categories</h3>
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
                            <h3 class="sidebar-title">Quick Fact</h3>
                            <p>Distinctively fashion in the effect of standard products communities via seamless 
                                applications. Authoritatively recaptiualize.
                            </p>
                            <a href="#" class="btn" role="button">Call To Action</a>
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
                <!--/ End Main Container -->
            <!--/ End Main Content Section -->
        </div>
        <div class="clearfix " style="margin-top: 150px; "></div>
    </body>
</html>