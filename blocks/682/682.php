<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/type-c-3.css" rel="stylesheet" type="text/css" />


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/682.less', 'css/682.css');
        ?>

    </head>

    <body>
        <div class="tem-682">
            <div class="container">
                <div class="hover13">
                    <div class="row">
                       <div class="col-md-17">
                            <div class="hovereffect">
                                <figure><a href="#"><img src="images/main/g-1.jpg" alt="" width="100%" height="100%">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-15 col-xs-13">
                            <div class="hovereffect">
                                <figure><a href="#"><img src="images/main/g-2.jpg" alt="" width="102%" height="100%"></a></figure>
                            </div>
                        </div>
                        <div class="col-md-15 col-xs-13">
                            <div class="hovereffect">
                                <figure><a href="#"><img src="images/main/g3.jpg" alt="" width="100%" height="100%"></a></figure>
                            </div>
                            <div>
                                <div class="hovereffect">
                                    <figure><a href="#"><img src="images/main/g4.jpg" alt="" width="100%" height="100%"></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-15 col-xs-13">
                            <div class="hovereffect">
                                <figure> <a href="#"><img src="images/main/g6.jpg" alt="" width="100%" height="100% "></a></figure>
                            </div>
                        </div>
                        <div class="col-md-16 col-xs-13">
                            <div class="hovereffect">
                                <figure><a href="#"><img src="images/main/g5.jpg" alt="" width="100%" height="100% "></a></figure>

                            </div>
                        </div>
                        <div class="col-md-16 col-xs-13">
                            <div class="hovereffect">
                                <figure>
                                    <a href="#"><img src="images/main/inspired.jpg" alt="" width="100%" height="100%">
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-17">
                            <div class="hovereffect">
                                <figure><a href="#"><img src="images/main/g9.jpg" alt="" width="100%" height="100%">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-15 col-xs-13">
                            <div class="hovereffect">
                                <figure> <a href="#"><img src="images/main/OK-chair-OK.jpg" alt="" width="100%" height="100%">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-15 col-xs-13">
                            <div>
                                <div class="hovereffect">
                                    <figure><a href="#">
                                            <img src="images/main/vase.jpg" alt="" width="100%" height="100% ">
                                        </a> </figure>
                                </div>
                            </div>
                            <div>
                                <div class="hovereffect">
                                    <figure><a href="#">
                                            <img src="images/main/g12.jpg" alt="" width="100%" height="100% ">
                                        </a> 
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>    