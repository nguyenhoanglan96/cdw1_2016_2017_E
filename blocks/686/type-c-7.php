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
        $less->compileFile('less/type-c-7.less', 'css/type-c-7.css');
        ?>
        <link href="css/type-c-7.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-c-7">
            <div class="col-lg-3 col-md-4 col-sm-6">                    
                <article class="widget">
                    <div class="section-big-wrapper">
                        <h3 class="section-big">Product Categories</h3>
                    </div>
                    <ul class="nav nav-stacked menu">
                        <li>
                            <a href="#" class="list-group-item"> Acustic
                                <b class="caret pull-right"><span class="count">(10)</span></b> 
                            </a>
                        </li>
                        <li>
                            <a href="#" class="list-group-item"> Hipster
                                <b class="caret pull-right"><span class="count">(8)</span></b> 
                            </a>
                        </li>
                        <li>
                            <a href="#" class="list-group-item"> Jeans
                                <b class="caret pull-right"><span class="count">(9)</span></b> 
                            </a>
                        </li>
                        <li>
                            <a href="#" class="list-group-item"> Men
                                <b class="caret pull-right"><span class="count">(33)</span></b> 
                            </a>
                        </li>
                        <li>
                            <a href="#" class="list-group-item"> Shoe
                                <b class="caret pull-right"><span class="count">(7)</span></b> 
                            </a>
                        </li>
                        <li>
                            <a href="#" class="list-group-item"> Style
                                <b class="caret pull-right"><span class="count">(19)</span></b> 
                            </a>
                        </li>
                        <li>
                            <a href="#Women" class="list-group-item"> Women
                                <b class="caret pull-right"><span class="count">(38)</span></b> 
                            </a>
                            <ul class="collapse">
                                <a href="#" class="list-group-item">Dress<span class="count">(7)</span><b class="caret pull-right"></b></a>
                                <a href="#" class="list-group-item">Handbag<span class="count">(6)</span><b class="caret pull-right"></b></a>
                                <a href="#" class="list-group-item">Women Collection<span class="count">(7)</span><b class="caret pull-right"></b></a>
                                <a href="#" class="list-group-item">Women Collection<span class="count">(3)</span><b class="caret pull-right"></b></a>
                            </ul>
                        </li>
                    </ul>
                </article>
                <article class="widget widget_sp_image">
                    <img width="275" height="271" alt="" style="max-width: 100%;"src="images/petit-big-logo.png"><p>Petit Clothing</p>
                </article> 
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </body>

</html>