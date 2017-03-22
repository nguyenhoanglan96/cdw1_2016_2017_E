<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>

        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type_a_2_chitiet_2">
            <div class="content">
                <div class="clearfix">


                    <div class="related_articles clearfix">
                        <div class="related_title">
                            Related Articles
                        </div>
                        <ul>
                            <li>
                                <a href="#" class="rh_related_link_image">
                                    <img src="images/images.jpg.jpg" alt=""/>
                                </a>
                                <a href="#">Soft and Ultra fine bristles</a>
                            </li>
                            <li>
                                <a href="#" class="rh_related_link_image">
                                    <img src="images/images1.jpg.jpg" alt=""/>

                                </a>
                                <a href="#">Angel Baby, Bottom Balm</a>
                            </li>
                        </ul>
                    </div>
                    <div >
                        <div class="title_comments">6 Comments
                        </div>
                        <div >
                            <ol class="commentlist">
                                <li class="comment even" >
                                    <div class="commbox">
                                        <div class="comment-author clearfix">
                                            <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                            <img src="images/images2.jpg" alt=""/>
                                            <div >

                                                <span class="fn">demouser<span class="rh-user-rank-mc">Newbie
                                                    </span>
                                                </span>

                                                </span>

                                                <div>
                                                    <i class="fa fa-star-o">
                                                        0.00
                                                    </i>
                                                </div>


                                                <span>April 11, 2016 at 12:55 pm</span>

                                            </div>
                                        </div>

                                        <p>This is excellent deal, bro
                                        </p>


                                    </div>
                                </li><!-- #comment-## -->
                                <li class="comment odd alt" >
                                    <div class="commbox">
                                        <div class="comment-author clearfix">
                                            <a rel="nofollow" class="comment-reply-link" href="#"> Reply</a>
                                            <img src="images/images2.jpg" alt=""/>
                                            <div >

                                                <span class="fn">demouser<span class="rh-user-rank-mc">Newbie
                                                    </span>

                                                </span>

                                                <div><i class="fa fa-star-o"></i> 0.00</div>


                                                <span class="time">April 11, 2016 at 12:55 pm</span>

                                            </div>
                                        </div>
                                        <p>So pretty thing</p>


                                    </div>
                                </li><!-- #comment-## -->
                                <li class="comment even" >
                                    <div class="commbox">
                                        <div class="comment-author clearfix">
                                            <a rel="nofollow" class="comment-reply-link" href="#" >Reply</a>
                                            <img src="images/images2.jpg" alt=""/>
                                            <div >

                                                <span class="fn">nanetest</span>
                                                <div >
                                                </div>

                                                <span class="time">May 10, 2016 at 6:58 am</span>

                                            </div>
                                        </div>
                                        <p>this is a test comment</p>


                                    </div>
                                </li><!-- #comment-## -->
                                <li class="comment odd alt" id=" 4">
                                    <div class="commbox">
                                        <div class="comment-author clearfix">
                                            <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                            <img src="images/images2.jpg" alt=""/>
                                            <div >

                                                <span class="fn">bill<span class="rh-user-rank-mc">Newbie
                                                    </span>

                                                </span>

                                                <div><i class="fa fa-star-o"></i> 0.00</div>


                                                <span class="time">May 27, 2016 at 10:55 am</span>

                                            </div>
                                        </div>
                                        <p>O M G</p>


                                    </div>
                                </li><!-- #comment-## -->
                                <li class="comment even" >
                                    <div class="commbox">
                                        <div class="comment-author clearfix">
                                            <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                            <img src="images/images2.jpg" alt=""/>
                                            <div >

                                                <span class="fn"><a href="#">dkssud
                                                    </a>
                                                </span>


                                                <div>
                                                    <i class="fa fa-star-o">
                                                        15.00
                                                    </i>
                                                </div>


                                                <span class="time">September 3, 2016 at 5:36 am</span>

                                            </div>
                                        </div>
                                        <p>Test</p>


                                    </div>
                                </li><!-- #comment-## -->
                                <li class="comment odd alt" >
                                    <div class="commbox">
                                        <div class="comment-author clearfix">
                                            <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                            <img src="images/images2.jpg" alt=""/>
                                            <div >

                                                <span class="fn">
                                                    <a href="#S" target="_blank" rel="nofollow">testor
                                                    </a>
                                                </span>
                                                <div >
                                                </div>

                                                <span class="time">September 11, 2016 at 9:32 pm</span>

                                            </div>
                                        </div>
                                        <p>testor</p>


                                    </div>
                                </li><!-- #comment-## -->
                            </ol>
                            <div >
                            </div>
                        </div>

                        <ol class="commentlist">
                        </ol>
                        <div class="comment-">
                            <h3 >Leave a reply

                            </h3>
                            <form action="#" method="post" >
                                <textarea id="comment" name="comment" cols="30" rows="10" aria-required="true">
                                </textarea>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="usr_re">
                                            <input type="text" value="" name="" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                        <input type="text" value="" name="" placeholder="E-mail">

                                    </div>
                                    <div class="col-md-4">
                                        <div class="site_re end">
                                            <input id="url" type="text" value="" name="url" placeholder="Website">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">

                                </div>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Post comment">
                                    <input type="hidden" name="" value="169" >
                                    <input type="hidden" name="" value="0">
                                </p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
