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
        $less->compileFile('less/type-b-11.less', 'css/type-b-11.css');
        ?>
        <link href="css/type-b-11.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
    <div class="type-b-11">
        <section class="hg_section ptop-65 pbottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="kl-title-block clearfix text-left tbk--colored tbk-icon-pos--left-title">
                            <h3 class="tbk__title montserrat tcolor">
                                <span class="tbk__symbol ">
                                    <span class="tbk__icon glyphicon glyphicon-star-empty fs-18 light-gray"></span>
                                </span>EDITOR'S CHOICE
                            </h3>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-5">
                                <div class="box image-boxes imgboxes_style1">
                                    <a class="hoverBorder" href="#" target="_blank">
                                        <span class="hoverBorderWrapper">
                                            <img src="images/imageboxes-set2-02-460x307.jpg" width="460" height="307" alt="" title="">
                                            <span class="theHoverBorder"></span>
                                        </span>
                                    <h6>READ MORE</h6>
                                    </a>
                                </div>
                                <!-- end span -->
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <div class="kl-title-block clearfix text-left tbk-symbol-- tbk-icon-pos--after-title pbottom-0">
                                    <h3 class="tbk__title fs-20 fw-thin">Uniquely expedite progressive e-commerce networks.</h3>
                                </div>
                                <div class="text_box">
                                    <p>
                                        Integer viverra sapien libero, vel rutrum arcu posuere at. Pellentesque fermentum tempor commodo. Sed elementum ligula et dui scelerisque, vitae vestibulum nunc hendrerit.
                                    </p>
                                    <p>
                                        Nam imperdiet nunc non sem cursus interdum. Mauris pellentesque ut dui semper maximus. Vestibulum eu est id sem tincidunt molestie et id lorem.
                                    </p>
                                    <p>
                                        <a href="#">Read more</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ col-md-8 col-sm-8 -->

                    <div class="col-md-4 col-sm-4">
                        <div class="kl-title-block clearfix text-left tbk-symbol-- tbk--colored tbk-icon-pos--left-title">
                            <h3 class="tbk__title montserrat tcolor">PRESS RELEASES</h3>
                        </div>
                        <div class="kl-iconbox kl-iconbox--fleft kl-iconbox--align-left text-left kl-iconbox--theme-default ">
                            <div class="kl-iconbox__inner">
                                <div class="kl-iconbox__icon-wrapper ">
                                    <img class="kl-iconbox__icon" src="images/logo1_dark.svg" alt="">
                                </div>
                                <!-- /.kl-iconbox__icon-wrapper -->
                                <div class="kl-iconbox__content-wrapper">
                                    <div class=" kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                        <p class="kl-iconbox__desc">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum dapibus vestibulum.
                                        </p>
                                    </div>
                                </div>
                                <!-- /.kl-iconbox__content-wrapper -->
                            </div>
                        </div>
                        <div class="kl-iconbox kl-iconbox--fleft kl-iconbox--align-left text-left kl-iconbox--theme-default ">
                            <div class="kl-iconbox__inner">
                                <div class="kl-iconbox__icon-wrapper ">
                                    <img class="kl-iconbox__icon" src="images/logo4_dark.svg" alt="">
                                </div>
                                <!-- /.kl-iconbox__icon-wrapper -->
                                <div class="kl-iconbox__content-wrapper">
                                    <div class=" kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                        <p class="kl-iconbox__desc">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                    </div>
                                </div>
                                <!-- /.kl-iconbox__content-wrapper -->
                            </div>
                        </div>
                        <div class="kl-iconbox kl-iconbox--fleft kl-iconbox--align-left text-left kl-iconbox--theme-default ">
                            <div class="kl-iconbox__inner">
                                <div class="kl-iconbox__icon-wrapper ">
                                    <img class="kl-iconbox__icon" src="images/logo5_dark.svg" alt="">
                                </div>
                                <!-- /.kl-iconbox__icon-wrapper -->
                                <div class="kl-iconbox__content-wrapper">
                                    <div class=" kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                        <p class="kl-iconbox__desc">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum dapibus vestibulum.
                                        </p>
                                    </div>
                                </div>
                                <!-- /.kl-iconbox__content-wrapper -->
                            </div>
                        </div>
                    </div>
                    <!--/ col-md-4 col-sm-4 -->
                </div>
                <!--/ row -->
            </div>
            <!--/ container -->
        </section>          
    </div>   
            

            
       

    <script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    </body>

</html>