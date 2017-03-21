<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>641</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

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
            <div class="container col-md-3 menu-sidebar">
                <div class="row">
                    <form method="get">
                        <div class="sidebar-search-form ">
                            <input type="text" class="form-control" placeholder="Search" name="s" id="s">
                            <button class="btn search-btn" type="button">

                                <span class="fa fa-search"></span>
                            </button>
                        </div>
                    </form>

                    <div class="widget_categories ">
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
                    <div class="sidebar-download ">
                        <div class="download-file">
                            <a href="#" download="Test.pdf ">
                                <i class="fa fa-file-pdf-o " aria-hidden="true "></i>Download
                                <span>17.18 KB</span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-fact ">
                        <h3 class="sidebar-title">Quick Fact</h3>
                        <p>Distinctively fashion in the effect of standard products communities via seamless 
                            applications. Authoritatively recaptiualize.
                        </p>
                        <a href="#" class="btn" role="button">Call To Action</a>
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
            </div>
            <!--/ End Main Container -->
            <!--/ End Main Content Section -->
        </div>
    </body>
</html>