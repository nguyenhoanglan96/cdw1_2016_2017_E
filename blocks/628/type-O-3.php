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
            $less->compileFile('less/top-menu.less', 'css/top-menu.css');
            $less->compileFile('less/type-13.less', 'css/type-13.css');
            $less->compileFile('less/type-40-footer.less', 'css/type-40-footer.css');
        ?>
        <link href="css/top-menu.css" rel="stylesheet" type="text/css" />
        <link href="css/type-13.css" rel="stylesheet" type="text/css" />
        <link href="css/type-40-footer.css" rel="stylesheet" type="text/css" />
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
                    <article class="post_item_next">
                        <h3 class="post_title">
                            <a class="post_title_link" href="#">Antibody Development…</a>
                        </h3>
                        <div class="post_info">
                            <span>
                                Posted
                                <a href="#" class="post_info_date">Feb 10, 2016</a>
                            </span>
                            <span class="post_info_counters">
                                <i class="fa fa-eye view_item"></i>
                                <a class="post_counters_item" href="#">
                                    <span class="post_counters_number">241</span>
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
                                    <img class="post_image" src="images/from-the-blog-3-770x434.jpg">
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
                            <a class="post_title_link" href="#">Bacteria Retention…</a>
                        </h3>
                        <div class="post_info">
                            <span>
                                Posted
                                <a href="#" class="post_info_date">Feb 10, 2016</a>
                            </span>
                            <span class="post_info_counters">
                                <i class="fa fa-eye view_item"></i>
                                <a class="post_counters_item" href="#">
                                    <span class="post_counters_number">136</span>
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
                                    <img class="post_image" src="images/research-6-770x434.jpg">
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
                            <a class="post_title_link" href="#">Extractables Studies…</a>
                        </h3>
                        <div class="post_info">
                            <span>
                                Posted
                                <a href="#" class="post_info_date">Feb 10, 2016</a>
                            </span>
                            <span class="post_info_counters">
                                <i class="fa fa-eye view_item"></i>
                                <a class="post_counters_item" href="#">
                                    <span class="post_counters_number">150</span>
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
                                    <img class="post_image" src="images/research-5-770x434.jpg">
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
                            <a class="post_title_link" href="#">Bacterial Viability…</a>
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
                                    <img class="post_image" src="images/research-4-770x434.jpg">
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
                            <a class="post_title_link" href="#">Chromatography Tests…</a>
                        </h3>
                        <div class="post_info">
                            <span>
                                Posted
                                <a href="#" class="post_info_date">Feb 10, 2016</a>
                            </span>
                            <span class="post_info_counters">
                                <i class="fa fa-eye view_item"></i>
                                <a class="post_counters_item" href="#">
                                    <span class="post_counters_number">131</span>
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
                                    <img class="post_image" src="images/research-3-770x434.jpg">
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
                            <a class="post_title_link" href="#">Flow Filtration…</a>
                        </h3>
                        <div class="post_info">
                            <span>
                                Posted
                                <a href="#" class="post_info_date">Feb 10, 2016</a>
                            </span>
                            <span class="post_info_counters">
                                <i class="fa fa-eye view_item"></i>
                                <a class="post_counters_item" href="#">
                                    <span class="post_counters_number">142</span>
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
                                    <img class="post_image" src="images/research-2-770x434.jpg">
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
                            <a class="post_title_link" href="#">Toxication Tests…</a>
                        </h3>
                        <div class="post_info">
                            <span>
                                Posted
                                <a href="#" class="post_info_date">Feb 10, 2016</a>
                            </span>
                            <span class="post_info_counters">
                                <i class="fa fa-eye view_item"></i>
                                <a class="post_counters_item" href="#">
                                    <span class="post_counters_number">149</span>
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
                                    <img class="post_image" src="images/research-1-770x434.jpg">
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
                            <a class="post_title_link" href="#">New Breakthrough in Crop Science</a>
                        </h3>
                        <div class="post_info">
                            <span>
                                Posted
                                <a href="#" class="post_info_date">Feb 10, 2016</a>
                            </span>
                            <span class="post_info_counters">
                                <i class="fa fa-eye view_item"></i>
                                <a class="post_counters_item" href="#">
                                    <span class="post_counters_number">136</span>
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
                                    <img class="post_image" src="images/post-1-770x434.jpg">
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

                    <nav class="pagination_wrap pagination_pages">
                        <span class="pager_nav pager_current">1</span>
                        <a class="pager_nav" href="#" class="">2</a>
                        <a class="pager_nav" href="#" class="">3</a>
                        <a class="pager_nav" href="#">…</a>
                        <a class="pager_nav fa fa-angle-right" href="#"></a>
                        <a class="pager_nav fa fa-angle-double-right" href="#"></a>
                    </nav>
                </div>
            </div>
        </div>
       
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/top-menu.js"></script>
</html>