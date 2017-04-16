<!DOCTYPE html>

<html style="background-color: #ffffff;">
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
        $less->compileFile('less/646.less', 'css/646.css');
        ?>
        <link href="css/646.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-646">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <header class="sectionTitle">
                            <h3><strong>FEATURES</strong></h3>
                        </header>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <ul class="tabs"> 
                                <li class="active col-xs-3 col-md-2" rel="tab1"> MIGHTY POWER</li>
                                <li class="col-xs-4 col-md-3" rel="tab2"> CHALLENGING REQUESTS</li>
                                <li class="col-xs-4 col-md-3" rel="tab3"> OVERPRICED PLEDGES</li>  
                            </ul>

                            <div class="tab_container col-xs-12">
                                <div id="tab1" class="tab_content"> 
                                    <strong>
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam 
                                        eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                    </strong>
                                    </p>
                                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit 
                                    laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                </div><!-- #tab1 -->

                                <div id="tab2" class="tab_content">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    </p>
                                    <ul>
                                        <li>Nemo enim ipsam voluptatem</li>
                                        <li>Quia voluptas sit aspernatur aut odit aut fugit</li>
                                        <li>Sed quia consequuntur magni dolores eos</li>
                                        <li>Qui ratione voluptatem sequi nesciunt</li>
                                    </ul>

                                </div><!-- #tab2 -->

                                <div id="tab3" class="tab_content"> 
                                    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </p>
                                </div><!-- #tab3 -->
                            </div> <!-- .tab_container -->   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/javascript.js" type="text/javascript"></script>
    </body>
</html>
