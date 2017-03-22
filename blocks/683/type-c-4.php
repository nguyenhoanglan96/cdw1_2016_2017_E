<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/type-c-4.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-c-4.less', 'css/type-c-4.css');
        ?>

        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-c-4">
            <footer id="footer" class="clearfix">
                <div class="container">
                    <div class="row">
                        <div id="footer-widgets">
                            <div id="footer-wrapper">
                                <div class="col-md-3 col-sm-6">
                                    <div id="search-3" class="widget"><h4 class="widgettitle">About Store</h4>
                                        <div>
                                            <img src="images/footer/logo-small-footer.png">
                                            <p>Sed pellentesque, nulla et venenatis vehicula, lacus diam commodo velit, vitae facilisis libero libero sed dui.</p>
                                        </div>
                                    </div>            
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div id="recent-posts-3" class="widget">
                                        <h4 class="widgettitle">Payment & Shipping</h4>
                                        <ul>
                                            <li class=""><a href="#">Payment Methods</a></li>
                                            <li class=""><a href="#">Shipping Guide</a></li>
                                            <li class=""><a href="#">Payment Accept</a></li>
                                        </ul>
                                        <span id="image-511"><br>
                                            <img src="images/footer/payement-cards.png" alt="" title="" width="90%" height="90%"><br>
                                        </span>
                                    </div>            
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div id="meta-4" class="widget">
                                        <h4 class="widgettitle">Product Tags</h4>
                                        <div class="tagcloud01">
                                            <ul>
                                                <li><a href="#">tag</a></li>
                                                <li><a href="#">tag</a></li>
                                                <li><a href="#">tag</a></li>
                                                <li><a href="#">tag</a></li>
                                                <li><a href="#">tag</a></li>
                                                <li><a href="#">tag</a></li>
                                                <li><a href="#">tag</a></li>
                                                <li><a href="#">tag</a></li>
                                                <li><a href="#">tag</a></li>
                                                <li><a href="#">tag</a></li>
                                                <li><a href="#">tag</a></li>
                                                <li><a href="#">tag</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-md-3 col-sm-6">
                                    <div id="meta-3" class="widget">
                                        <h4 class="widgettitle">Company Info</h4>
                                        <p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </p>
                                        <div class="info">
                                            <ul> Phone: <a href="skype:+673102905540?call">(01) 102 902 5400</a></ul>
                                            <ul>Fax: <a href="skype:+673102902540?call">(01) 102 902 5400</a></ul>
                                            <ul>Email: <a href="mailto:support@goodstore.com?Subject=GoodStore">support@goodstore.com</a></ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="sub-floor">
                            <div class="col-sm-12 copyright">
                                <p> Copyright 2016 © by Group C</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>