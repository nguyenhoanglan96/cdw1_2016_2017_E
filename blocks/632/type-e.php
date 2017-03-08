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
        $less->compileFile('less/type-e.less', 'css/type-e.css');
        ?>
        <link href="css/type-e.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-40-CT ">
            <section class="page_content">
                <div class="container">    
                    <div class="content">
                        <h1>Prescription Medicine</h1>
                        <div class="post_info">
                                    <span class="posted">
                                        <a href="#">posted</a>
                                    </span>
                                    <span  class="Started"> 
                                        <a href="#">Started</a>
                                    </span>
                            
                                    <span  class="number1"> 
                                        <a href="#">Feb 10, 2016</a>
                                    </span>
                                    <div class=" fa fa-eye"></div>
                                    <span class="number2">
                                        <a href="#"> 522 </a>
                                    </span>
                                    <div class=" fa fa-comment-o"></div>
                                    <span class="number">
                                        <a href="#"> 0 </a>
                                    </span>
                                </div>
                                <div class="post_featured">
                                    <a>
                                        <img src="images/img.jpg" alt=""/>
                                         <div class="link"></div>
                                        <i class="blog-link fa fa-eye"></i>
                                    </a>
                                </div>
                                    <p>Etiam vitae leo et diam pellentesque porta. Sed eleifend ultricies risus, vel rutrum erat commodo ut. Praesent finibus congue euismod. Nullam scelerisque massa vel augue placerat, a tempor sem egestas.
                                        Curabitur placerat finibus lacus. Quisque at vehicula magna, quis fringilla sapien. Ut interdum dictum ultricies. Aliquam facilisis purus non dui scelerisque, bibendum vestibulum risus fermentum.
                                        Nam eget efficitur felis. Sed sollicitudin justo ut libero viverra, sed efficitur erat finibus. Mauris nunc neque, elementum id dignissim ut, posuere sit amet dolor. Aliquam turpis neque,
                                        mollis eu pharetra et, placerat et arcu. Proin orci eros, dapibus in auctor ac, elementum a justo. Fusce varius eu nunc iaculis auctor.</p>
                                    <p>Vivamus posuere tellus ac fringilla maximus. Maecenas ut diam nibh.
                                        Suspendisse venenatis et dolor sit amet malesuada. Cras a nisl in purus vestibulum facilisis. Aenean blandit,
                                        lectus in dapibus interdum, magna mauris fermentum risus, nec iaculis ex quam ultricies tellus.
                                        Sed nec convallis ex, nec tristique nisi. Aenean semper tempor vehicula. Duis id mi tristique,
                                        pulvinar neque at, lobortis tortor.</p>
                                <div class="comments_form_wrap">
                                    <h1>Add Your Comment</h1>
                                        <form action="#" method="post">
                                            <p class="comments_notes">Your email address will not be published. Required fields are marked *</p>
                                            <div class="comments_message">
                                                <label for="comment">Message</label>
                                                <textarea id="comment" name="comment" placeholder="Comment *" aria-required="true"></textarea>
                                            </div>
                                            <div class=" comments_author">
                                                <label for="author">Name</label>
                                                <input  name="author" type="text" placeholder="Name *" value="" size="30" aria-required="true">
                                            </div>
                                            <div class="comments_email">
                                                <label for="email">Email</label>
                                                <input name="email" type="text" placeholder="Email *" value="" size="30" aria-required="true">
                                            </div>
                                            <a href="#" class="button" id="btnAdd"> Add Comment </a>
                                            <div id="error_item" class=" result sc_infobox" style="display:none;">
                                                <p>The message text can't be empty</p>
                                                <p>The name can't be empty</p>
                                                <p>Too short (or empty) email address</p>
                                                <p>Invalid email address</p>
                                            </div>
                                        </form>

                                </div>  
                    </div> 
                </div>  
            </section>
        </div>
    </body>
 <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/type-40-CT.js"></script>
</html>