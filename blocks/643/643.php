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
        $less->compileFile('less/643.less', 'css/643.css');
        ?>
        <link href="css/643.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-643">
            <div class="container">   
                <div class="row">
                    <div class="topline"></div>
                    <!-- Header -->
                    <div class="col-md-6 col-sm-12">
                        <!-- Logo -->
                        <div class="eight-columns">
                            <div id="logo">
                                <h1><a href="#"><img src="images/logo1.png" alt="Nevia Premium Template" /></a></h1>
                                <div id="tagline">Template Without Compromises!</div>
                            </div>
                        </div>
                    </div>
                    <!-- Social / Contact -->
                    <div class="col-md-6 col-sm-12">
                        <div class="eight-columns">
                            <!-- Social Icons -->
                            <ul class="social-icons">
                                <li class="twitter"><a href="#">Twitter</a></li>
                                <li class="facebook"><a href="#">Facebook</a></li>
                                <li class="dribbble"><a href="#">Dribbble</a></li>
                                <li class="linkedin"><a href="#">LinkedIn</a></li>
                                <li class="rss"><a href="#">RSS</a></li>
                            </ul>

                            <div class="clearfix"></div>
                            <!-- Contact Details -->
                            <div class="contact-details">Contact Phone: +48 880 440 110</div>
                            <div class="clearfix"></div>
                            <!-- Search -->
                            <nav class="top-search">
                                <form action="404-page.html" method="get">
                                    <button class="search-btn"></button>
                                    <input class="search-field" type="text" onblur="if (this.value == '')
                                                this.value = 'Search';" onfocus="if (this.value == 'Search')
                                                            this.value = '';" value="Search" />
                                </form>
                            </nav>
                        </div>
                    </div>
                    <!-- Header / End -->
               
                </div>
            </div>
        </div>
    </body>

</html>