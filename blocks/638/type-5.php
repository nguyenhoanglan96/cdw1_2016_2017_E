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

        <div class="title-our">
            <h2 class="title1">OUR PARTNERS</h2>
        </div>

    <div class="clearfix" style="margin-top: 100px;"></div>

    <div class="type_slider">
        <div class="content">
            <div id="owl-demo" class="owl-carousel owl-theme">

                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner2.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner3.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner1.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner2.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner4.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner1.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner2.png" alt="" />
                    </div>
                </div>

                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner3.png" alt="" />
                    </div>
                </div>

                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner4.png" alt="" />
                    </div>
                </div>

                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner1.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner2.png" alt="" />
                    </div>
                </div>

                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner3.png" alt="" />
                    </div>
                </div>

                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner1.png" alt="" />
                    </div>
                </div>

                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner2.png" alt="" />
                    </div>
                </div>

                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner4.png" alt="" />
                    </div>
                </div>

                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner1.png" alt="" />
                    </div>
                </div>

                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner2.png" alt="" />
                    </div>
                </div>

                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner3.png" alt="" />
                    </div>
                </div>

                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner4.png" alt="" />
                    </div>
                </div>

                <div class="item">
                    <div class="partner-images">
                        <img src="images/partner1.png" alt="" />
                    </div>
                </div>
                <script>
                    $(document).ready(function() {

                        $("#owl-demo").owlCarousel({
                            //Set AutoPlay to 3 seconds

                            items: 5

                        });
                    });
                </script>

            </div>
        </div>
    </div>
    <div class="clearfix" style="margin-top: 150px;"></div>
</div>
</body>

</html>