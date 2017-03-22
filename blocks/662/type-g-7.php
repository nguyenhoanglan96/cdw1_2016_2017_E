<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-g-7.less', 'css/type-g-7.css');
        ?>
        <link href="css/type-g-7.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-g-">  
            <div class="container">
                <!-----------------------Begin Responsive Layout---------------------------------->
                <div class="grid-container page-banners">
                    <div class="grid12-4 no-left-gutter banner">

                        <img src="{!! url('public/nhomg/images/img/2a.png') !!}" alt="Sample banner">
                        <br><br>

                    </div>
                    <div class="grid12-4">

                        <div class="feature feature-icon-hover indent first">
                            <span class="ic ic-char ib" style="background-color: #ddd;">1</span>
                            <h4>Responsive Layout</h4>
                            <p>Ultimo can be displayed on any screen. <span class="hide-below-1280">It is based on fluid grid system lorem ipsum.</span> <span class="hide-below-960">If screen is resized, layout will be automat...</span></p>
                        </div>
                        <div class="feature feature-icon-hover indent">
                            <span class="ic ic-char ib" style="background-color: #ddd;">2</span>
                            <h4>Responsive Layout</h4>
                            <p>Ultimo can be displayed on any screen. <span class="hide-below-1280">It is based on fluid grid system lorem ipsum.</span> <span class="hide-below-960">If screen is resized, layout will be automat...</span></p>
                        </div>
                        <div class="feature feature-icon-hover indent last">
                            <span class="ic ic-char ib" style="background-color: #ddd;">3</span>
                            <h4>Responsive Layout</h4>
                            <p>Ultimo can be displayed on any screen. <span class="hide-below-1280">It is based on fluid grid system lorem ipsum.</span> <span class="hide-below-960">If screen is resized, layout will be automat...</span></p>
                        </div>

                    </div>
                    <div class="grid12-4 no-right-gutter hide-below-768">

                        <div class="page-banners grid-container-spaced">
                            <div class="grid12-12 no-gutter banner fade-on-hover" style="opacity: 1;">
                                <div class="hovereffect">
                                    <a href="#">
                                        <img src="{!! url('public/nhomg/images/img/3a.jpg') !!}" alt="Sample banner">
                                    </a>
                                    <div class="overlay">
                                    </div>
                                </div>
                            </div>
                            <div class="grid12-6 no-left-gutter banner fade-on-hover" style="opacity: 1;">
                                <div class="hovereffect">
                                    <a href="#">
                                        <img src="{!! url('public/nhomg/images/img/3b (1).jpg') !!}" alt="Sample banner">
                                    </a>
                                    <div class="overlay">
                                    </div>
                                </div>
                            </div>
                            <div class="grid12-6 no-right-gutter banner fade-on-hover" style="opacity: 1;">
                                <div class="hovereffect">
                                    <a href="#">
                                        <img src="{!! url('public/nhomg/images/img/3c.jpg') !!}" alt="Sample banner">
                                    </a>
                                    <div class="overlay">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-----------------------End Responsive Layout----------------------------------->
                <div class="clear"></div>
                <br>
                <br>
                <br>
            </div>
        </div>
    </body>
</html>