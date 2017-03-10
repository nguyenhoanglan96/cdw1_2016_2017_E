<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Gas &amp; Oil Industry HTML Template">
    <meta name="author" content="Gautam Thapar">

    <title>Offshore &#8211; Responsive Gas &amp; Oil Industry HTML Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="slider/owl-carousel/owl.carousel.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="slider/owl-carousel/owl.theme.css">
    <!--  jQuery 1.7+  -->
    <script src="slider/assets/js/jquery-1.9.1.min.js"></script>
    <!-- Include js plugin -->
    <script src="slider/owl-carousel/owl.carousel.js"></script>

    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-5.less', 'css/type-5.css');
        ?>

        <link href="css/type-5.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="type-5">
        <section class="section" style="background-color:#f4f5f8;">
            <div class="container">
               <article class="title-header">
                    <h2 class="title">NEWS AND MEDIA</h2>
               </article>
               <article class="title-header1">
                    <h2 class="title1" style="font-family: Roboto; margin-top: 20px; margin-bottom: 20px;">LATEST FROM BLOG</h2>
               </article>
                <div class="spacer" style="height:50px;"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="posts-img-box">
                            <div class="blog-date">
                                <span class="month">JUN</span>
                                <span class="date">1</span>
                            </div>
                            <a class="hover-effect" href="#">
                                <img src="images/services-three.jpg" alt="" />
                            </a>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">SOCIAL RESPONIBILITY</a></h3>
                            <p>By <a href="">Taylor White</a> in Transportation</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="posts-img-box">
                            <div class="blog-date">
                                <span class="month">JUN</span>
                                <span class="date">1</span>
                            </div>
                            <a class="hover-effect" href="#">
                                <img src="images/services-three.jpg" alt="" />
                            </a>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">SOCIAL RESPONIBILITY</a></h3>
                            <p>By <a href="">Taylor White</a> in Transportation</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="posts-img-box">
                            <div class="blog-date">
                                <span class="month">JUN</span>
                                <span class="date">1</span>
                            </div>
                            <a class="hover-effect" href="#">
                                <img src="images/services-three.jpg" alt="" />
                            </a>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">SOCIAL RESPONIBILITY</a></h3>
                            <p>By <a href="">Taylor White</a> in Transportation</p>
                        </div>
                    </div>
                </div>
                <div class="spacer" style="height:40px;"></div>
                <div class="btnRead">
                    <a href="#" id="btn-1349-375" class="btn btn-primary">Read the blog</a>
                </div>

            </div>
        </section>  
    </div>
</body>

</html>