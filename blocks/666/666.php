<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>666</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

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
        <div class="type_666">
            <div class="container detail-wrapper-container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <article>
                            <div class="tp-blog-pic">
                                <img  class="img-responsive" src="images/service.jpg" style="width: 100%;"/>
                            </div>
                            <div class="tp-blog-info" style="padding:40px;background-color:#282828;">
                                <div class="row">
                                    <!-- tp-blog-post -->
                                    <h1 class="tp-post-title">
                                        <a href="#" style="padding-left:15px;">
                                            Machine Services
                                        </a>
                                    </h1> 
                                    <div class="col-md-12">
                                        <p>
                                            Sed vel malesuada ipsum ras pulvinar quam et justo luctusibused urna lorem 
                                            euismod noi cusantium quam ultricies eget tempor id aliquam eget magna quametc 
                                            risus vitae volutpat sit amet ellentesque non vulputate metust sed orci non ex 
                                            ultrices rhoncus ellentesque et enim sed nunc pellentesque varius.
                                        </p>
                                        <p>
                                            Nullam et volutpat quam. Phasellus mattis ipsum eget nequ ornare dolor 
                                            dolor porttitor lorem. Vivamus a leo eu massa tempus aetu met sit amet. 
                                            Cras pulvinar quam et justo luctusibus. ed urna lorem, euismod comnoi 
                                            cusantium quam, ultriet tempor id, aliquam eget magna m lorem ipsume.
                                        </p>
                                        <blockquote style="padding: 21px 20px;background-color: #303030;border: 0;">
                                            <p>
                                                <i>Vivamus a leo eu massa tempus aetu met sit amet. 
                                                    Cras pulvinar quam et justo ctusibus. ed urna lorem, 
                                                    euismod comnoi cusantium quam dolor sit amet.</i>
                                            </p>
                                        </blockquote>
                                        <p>
                                            Nullam et volutpat quam. Phasellus mattis ipsum eget nequ ornare dolor 
                                            dolor porttitor lorem. Vivamus a leo eu massa tempus aetu met sit amet. 
                                            Cras pulvinar quam et justo luctusibus. ed urna lorem, euismod comnoi 
                                            cusantium quam, ultriet tempor id, aliquam eget magna m lorem ipsume.
                                        </p>
                                        <p class="highlight" style="color:#fde230;">
                                            Phasellus mattis ipsum eget nequ ornare dolor dolor porttitor lorem. 
                                            Vivamus a leo eu massa tempus aetu met sit amet. Cras pulvinar quam et justo 
                                            luctusibus.
                                        </p>
                                        <p>Nullam et volutpat quam. Phasellus mattis ipsum eget nequ ornare dolor 
                                            dolor porttitor lorem. Vivamus a leo eu massa tempus aetu met sit amet. 
                                            Cras pulvinar quam et justo luctusibus. ed urna lorem, euismod comnoi 
                                            cusantium quam, ultriet tempor id, aliquam eget magna m lorem ipsume.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>                    
                    </div>
                </div>
            </div>


        </div>


    </body>

</html>