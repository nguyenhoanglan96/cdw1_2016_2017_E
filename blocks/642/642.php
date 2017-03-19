<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>642</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/642.less', 'css/642.css');
        ?>

        <link href="css/642.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-642">
            <!-- Main Container -->
            <div class="container ImageBox">
                <div class="row">
                    <div class="col-md-9 blog-grid">
                        <div class="blog-services">
                            <div class="news">
                                <div class="col-sm-6">
                                    <article class="has-post-thumbnail hentry">
                                        <a class="hover-effect" href="#" title="SOCIAL RESPONIBILITY">
                                            <!-- let's add random color when there is no featured image -->
                                            <div class="blog-img-box" style="">
                                                <div class="blog-date"> 
                                                    <span class="month">JUN </span> 
                                                    <span class="date">01</span>
                                                </div>
                                                <img src="images/services-three.jpg" class="attachment-post-thumbnail">            
                                            </div>
                                        </a>
                                        <div class="blog-content">
                                            <h3 class="title"><a href="#">SOCIAL RESPONIBILITY</a></h3>
                                            <p>By
                                                <a href="#" title="Posts by Taylor White" rel="author">
                                                    Taylor White
                                                </a>in
                                                <a href="#" rel="category tag">Transportation</a>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6">
                                    <article class="has-post-thumbnail hentry category-the-company">
                                        <a class="hover-effect" href="#" title="OUR OPERATIONS">
                                            <!-- let's add random color when there is no featured image -->
                                            <div class="blog-img-box" style="">
                                                <div class="blog-date"> 
                                                    <span class="month">JUN </span> 
                                                    <span class="date">01</span>
                                                </div>

                                                <img src="images/services-two.jpg" class="attachment-post-thumbnail">            
                                            </div>
                                        </a>
                                        <div class="blog-content">
                                            <h3 class="title">
                                                <a href="#">OUR OPERATIONS</a>
                                            </h3>
                                            <p>By
                                                <a href="#" title="Posts by Taylor White" rel="author">Taylor White</a> in
                                                <a href="#" rel="category tag">The Company</a>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="clearfix spacer-60"></div>
                                <div class="col-sm-6">
                                    <article class="has-post-thumbnail hentry category-technology">
                                        <a class="hover-effect" href="#" title="TECHNOLOGY &amp; INNOVATION">

                                            <!-- let's add random color when there is no featured image -->
                                            <div class="blog-img-box" style="">
                                                <div class="blog-date"> 
                                                    <span class="month">JUN </span> 
                                                    <span class="date">01</span>
                                                </div>
                                                <img src="images/services-one.jpg" class="attachment-post-thumbnail">            
                                            </div>
                                        </a>
                                        <div class="blog-content">
                                            <h3 class="title">
                                                <a href="#">TECHNOLOGY &amp; INNOVATION</a>
                                            </h3>
                                            <p>By
                                                <a href="#" title="Posts by Taylor White" rel="author">Taylor White</a> in
                                                <a href="#" rel="category tag">Technology</a>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6">
                                    <article class="hentry">
                                        <a class="hover-effect" href="#" title="Fuel Transportation and Railway Rules">
                                            <!-- let's add random color when there is no featured image -->
                                            <div class="blog-img-box" style="background-color:#FF7416;">
                                                <i class="category-icon "></i>
                                                <div class="blog-date"> 
                                                    <span class="month">MAY </span> 
                                                    <span class="date">19</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="blog-content">
                                            <h3 class="title">
                                                <a href="#">
                                                    Fuel Transportation and Railway Rules
                                                </a>
                                            </h3>
                                            <p>By
                                                <a href="#" title="Posts by Taylor White" rel="author">
                                                    Taylor White
                                                </a> in
                                                <a href="#" rel="category tag">Careers</a>,
                                                <a href="#" rel="category tag">
                                                    Marketing &amp; Sales
                                                </a>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="clearfix spacer-60"></div>
                                <div class="col-sm-6">
                                    <article class="hentry">
                                        <a class="hover-effect" href="#" title="Field Training Sessions For New Employees">
                                            <!-- let's add random color when there is no featured image -->
                                            <div class="blog-img-box" style="background-color:#FF6766;">
                                                <i class="category-icon ">
                                                </i>
                                                <div class="blog-date"> 
                                                    <span class="month">MAY</span> 
                                                    <span class="date">19</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="blog-content">
                                            <h3 class="title">
                                                <a href="#">Field Training Sessions For New Employees</a>
                                            </h3>
                                            <p>By
                                                <a href="#" title="Posts by Taylor White" rel="author">Taylor White</a> in
                                                <a href="#" rel="category tag">Careers</a>,
                                                <a href="#" rel="category tag ">Environment</a>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <nav class="navigation clearfix ">
                                    <ul class="pager ">
                                        <li class="previous "></li>
                                        <li class="next "></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Main Container -->
        </div>
    </body>

</html>