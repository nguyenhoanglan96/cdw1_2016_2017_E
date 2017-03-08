<!DOCTYPE html>

<html>

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
            $less->compileFile('less/628.less', 'css/628.css');
        ?>
        <link href="css/628.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/font-awesome.css">

    </head>

    <body>
        <div class="type-13">
            <div class="page_paddings_yes">
                <div class="container content_wrap">
                    <article>
                        <h3 class="post_title">
                            <a class="post_title_link" href="#">Novel Technologies…</a>
                        </h3>
                        <div class="post_info">
                            <span>
                                Posted
                                <a href="#" class="post_info_date">Feb 10, 2016</a>
                            </span>
                            <span class="post_info_counters">
                                <i class="fa fa-eye view_item"></i>
                                <a class="post_counters_item" href="#">
                                    <span class="post_counters_number">421</span>
                                </a>
                                <i class="fa fa-comment-o view_item"></i>
                                <a class="post_counters_item" href="#">
                                    <span class="post_counters_number">0</span>
                                </a>
                            </span>
                        </div>
                        <div class="post_featured">
                            <div class="post_thumb">
                                <a class="hover_icon" href="#">
                                    <img class="post_image" src="images/from-the-blog-1-770x434.jpg">
                                    <i class="fa fa-eye icon"></i>
                                </a> 
                            </div>
                        </div>
                        <div class="post_content clearfix">
                            <div class="post_descr">
                                <p>Vestibulum iaculis lacinia est. Proin dicm elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl…</p>
                                <a href="#" class="more_button">Read more</a> 
                            </div>
                        </div>
                    </article>
                    <article class="post_item_next">
                        <h3 class="post_title">
                            <a class="post_title_link" href="#">Targeting Cancer…</a>
                        </h3>
                        <div class="post_info">
                            <span>
                                Posted
                                <a href="#" class="post_info_date">Feb 10, 2016</a>
                            </span>
                            <span class="post_info_counters">
                                <i class="fa fa-eye view_item"></i>
                                <a class="post_counters_item" href="#">
                                    <span class="post_counters_number">373</span>
                                </a>
                                <i class="fa fa-comment-o view_item"></i>
                                <a class="post_counters_item" href="#">
                                    <span class="post_counters_number">0</span>
                                </a>
                            </span>
                        </div>
                        <div class="post_featured">
                            <div class="post_thumb">
                                <a class="hover_icon" href="#">
                                    <img class="post_image" src="images/from-the-blog-2-770x434.jpg">
                                    <i class="fa fa-eye icon"></i>
                                </a> 
                            </div>
                        </div>
                        <div class="post_content clearfix">
                            <div class="post_descr">
                                <p>Vestibulum iaculis lacinia est. Proin dicm elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl…</p>
                                <a href="#" class="more_button">Read more</a> 
                            </div>
                        </div>
                    </article>
                    
                </div>
            </div>
        </div>
       
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/top-menu.js"></script>
</html>