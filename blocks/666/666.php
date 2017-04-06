<!DOCTYPE html>
<html>
    <head>
        <title>666</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/666.less', 'css/666.css');
        ?>
        <link href="css/666.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-666">  
            <div class="container footer-wrapper-container">
                <div class="row">
                    <div class="footer-top-container">
                        <div class="footer">
                            <div class="inner-container">
                                <div class="section clearer links-wrapper-separators">
                                    <div class="item item-left">
                                        <ul class="links">
                                            <li class="first">
                                                <a href="#" title="Site Map">Site Map</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Search Terms">Search Terms</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Advanced Search">Advanced Search</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Orders and Returns">Orders and Returns</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Contact Us">Contact Us</a>
                                            </li>
                                            <li class=" last">
                                                <a href="#" title="RSS">RSS</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item item-right">
                                        <ul class="links">
                                            <li class="first">
                                                <a href="#" title="">About Us</a>
                                            </li>
                                            <li class="last">
                                                <a href="#" title="">Customer Service</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> 
                                <!-- end: footer-top section -->
                            </div> 
                            <!-- end: inner-container -->
                        </div> 
                        <!-- end: footer-top -->
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>

</html>