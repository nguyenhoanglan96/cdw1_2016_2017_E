<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>

        <link href="css/styles.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>


        <div class="type_a_menu">


            <nav class="navbar navbar-default" role="navigation">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only"> Toggle navigation</span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar" ></span>
                        <span class="icon-bar"></span >
                    </button>
                    <a class="navbar-brand" href="#"> </a >
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">LAYOUT EXAMPLES <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">List Home Page</a></li>
                                <li><a href="#">Gird Home Page</a></li>
                                <li><a href="#">Full Width Example</a></li>

                            </ul>
                        </li>

                        <li><a href="#">STORE PAGE</a></li>
                        <li><a href="#">GREEN FOOD</a></li>
                        <li><a href="#">BABY</a></li>
                        <li><a href="#">BODY</a></li>
                        <li><a href="#">FACE</a></li>
                        <li><a href="#">ORAL CARE</a></li>
                        <li><a href="#">YOUR FAVORITES</a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li style=" border: 0;"><a href="#"><span class="fa fa-search"></span></a></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->

            </nav>



        </div>


    </body >
</html>
