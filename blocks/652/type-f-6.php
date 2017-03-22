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
        $less->compileFile('less/type.less', 'css/type.css');
        ?>
        <link href="css/type.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="type">
            <div class="type-8">
                <div class="container">
                    <div class="row footer">
                        <div class="col-md-3">
                            <div class="widget">
                                <h3 class="title">INTERESTING LINKS</h3>
                                <span class="minitext"> Besides are some interesting links for you! Enjoy your stay :)</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget">
                                <h3 class="title">
                                    <a href="#">LATEST TWEETS</a>                              
                                </h3>
                                <div class="tweets">
                                    <div class="tweet">
                                        <p>Seriously?  <a href="#" class="twitter-link">http://t.co/ZiX44CyKVY</a><br>
                                            <span class="tweet-time">June 10, 2013 - 7:27 pm</span></p>

                                    </div>
                                    <div class="tweet">
                                        <p>Am I the only one who thinks those iOS 7 Icons look cheap?
                                            <a class="twitter-link" href="#" >#wwdc</a>
                                            <a class="twitter-link" href="#" >#ios</a>
                                            7<br>
                                            <span class="tweet-time">June 10, 2013 - 7:27 pm</span>
                                        </p>

                                    </div>
                                    <div class="tweet">
                                        <p>Watching the Apple Keynote. Federighi actually pretty funny. like the OSX improvements a lot so far :)
                                            <a class="twitter-link" href="#">#wwdc</a><br>
                                            <span class="tweet-time">June 10, 2013 - 6:49 pm</span>
                                        </p> 

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget">
                                <h3 class="title">LATEST NEWS</h3>
                                <div class="thumb-headline row">
                                    <div class="thumb  col-md-2">
                                        <img src="images/featured1-36x36.jpg" />
                                    </div>
                                    <div class="headline col-md-10">
                                        <strong class="news-headline">This is a nice post (small preview image)<br>
                                            <span class="news-time">March 31, 2011 - 1:13 pm
                                            </span>
                                        </strong>
                                    </div>
                                </div>
                                <div class="thumb-headline row">
                                    <div class="thumb  col-md-2">
                                        <img src="images/featured1-36x36.jpg" />
                                    </div>
                                    <div class="headline col-md-10">
                                        <strong class="news-headline">This is a nice post (small preview image)<br>
                                            <span class="news-time">March 31, 2011 - 1:13 pm
                                            </span>
                                        </strong>
                                    </div>
                                </div>
                                <div class="thumb-headline row">
                                    <div class="thumb  col-md-2">
                                        <img src="images/featured1-36x36.jpg" />
                                    </div>
                                    <div class="headline col-md-10">
                                        <strong class="news-headline">This is a nice post (small preview image)<br>
                                            <span class="news-time">March 31, 2011 - 1:13 pm
                                            </span>
                                        </strong>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3"
                             <div class="widget">  
                                <div class="archive">
                                    <h3 class="title">ARCHIVE</h3>
                                    <ul>	
                                        <li><a href="#">March 2011</a></li>
                                        <li><a href="#">February 2011</a></li>
                                        <li><a href="#">January 2011</a></li>
                                        <li><a href="#">December 2010</a></li>
                                        <li><a href="#">August 2010</a></li>
                                        <li><a href="#">May 2010</a></li>
                                        <li><a href="#">March 2010</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row socket">
                            <span class="copyright">© Copyright - <a href="#">Abundance eCommerce Theme Demo</a> - <a href="#">Wordpress Theme by Kriesi.at</a></span>
                        </div>
                    </div>
                </div>
        </div>
</body>
</html>