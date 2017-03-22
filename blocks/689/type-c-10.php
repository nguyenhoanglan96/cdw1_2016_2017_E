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
        $less->compileFile('less/type-c-10.less', 'css/type-c-10.css');
        ?>
        <link href="css/type-c-10.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-c-10">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                                <li><a href="#tab2" data-toggle="tab">Additional Information</a></li>
                                <li><a href="#tab3" data-toggle="tab">Reviews (0)</a></li>
                            </ul>
                            <div class="tab-content">
                                <!---------------tab-1------------->
                                <div class="tab-pane active" id="tab1">
                                    <h2>Product Description</h2>
                                    <div class="panel">
                                        <div class=" col-lg-6  ">
                                            <p></p>
                                            <p><strong>Petit Denim Shirt</strong> – Denim Shirt by Petit Collection.</p>
                                            <ul>
                                                <li>Made from 100% cotton denim</li>
                                                <li>Point collar with chain detail</li>
                                                <li>Top button closure</li>
                                                <li>Curved hem</li>
                                                <li>Cool colors</li>
                                                <li>Regular fit lorem</li>
                                            </ul>
                                            <p><em>LOOK AFTER MEMachine Wash According To Instructions On Care Label.</em></p>
                                            <p>
                                            </p></div>
                                        <div class=" col-md-3 col-sm-4">
                                            <a href="#" target="_self">
                                                <span>   
                                                    <img src="images/sige-quide.gif" alt="">  
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!---------------tab-1------------->

                                <!---------------tab-2------------->
                                <div class="tab-pane" id="tab2">

                                    <div class="panel">

                                        <h2>Additional Information</h2>

                                        <table class="shop_attributes">

                                            <tbody><tr class="">
                                                    <th>Color</th>
                                                    <td><p>Blue, Green, Orange, White</p>
                                                    </td>
                                                </tr>
                                                <tr class="alt">
                                                    <th>Size</th>
                                                    <td><p>L, M, S, XL, XS, XXL, XXXL</p>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!---------------tab-2------------->

                                <!---------------tab-3------------->
                                <div class="tab-pane" id="tab3">
                                    <div class="panel" style="display: block;">
                                        <div id="reviews">
                                            <div id="comments">
                                                <h2>Reviews</h2>
                                                <p>There are no reviews yet.</p>
                                            </div>


                                            <div>
                                                <div id="review_form">
                                                    <div id="respond" class="comment-respond">
                                                        <h3>Be the first to review “Petit Chic Coat” 
                                                            <small>
                                                                <a rel="nofollow" href="#" style="display:none;">Cancel reply</a>
                                                            </small></h3>				
                                                        <form action="#commentspost" method="post" id="commentform">
                                                            <p>
                                                                <span>Your email address will not be published.</span> Required fields are marked <span>*</span></p><p class="comment-form-rating">
                                                                <label for="rating">Your Rating</label>

                                                                <input type="number" class="rating" name="test" data-min="1" data-max="5" value="0">

                                                            <p class="comment-form-comment"><label for="comment">Your Review <span >*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea></p>
                                                            <p class="comment-form-author"><label for="author">Name <span >*</span></label> <input  name="author" type="text" value="" size="30" aria-required="true" required=""></p>
                                                            <p class="comment-form-email"><label for="email">Email <span >*</span></label> <input  name="email" type="email" value="" size="30" aria-required="true" required=""></p>
                                                            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit"> <input type="hidden" name="comment_post_ID" value="2560">
                                                                <input type="hidden" name="comment_parent" value="0">
                                                            </p>				</form>
                                                    </div><!-- #respond -->
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <!---------------tab-3------------->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/type-c-10-rating.js" type="text/javascript"></script>
    </body>

</html>