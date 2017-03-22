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
        $less->compileFile('less/type-g-1.less', 'css/type-g-1.css');
        ?>
        <link href="css/type-g-1.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-g-1">  
            <div class="container">
                <div class="row">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">

                            <div class="hotline"><i class="fa fa-phone"></i>Call +001 555 801</div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All demos</a>		
                                </li>
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features</a>
                                </li>
                                </li>
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy me! </a>		
                                </li>
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome msg</a>
                                </li>                                                                                    
                            </ul>		

                            <ul class="nav navbar-nav navbar-right">

                                <li class="dropdown1">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">VietNam</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown1">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Currency</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">BRL</a></li>
                                        <li><a href="#">GBP</a></li>
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">CNY</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <img src="images/img/logo-1.png" alt="" id="col1"/>
                            </div>

                            <div class="col-md-4">
                                <div id="custom-search-input">
                                    <div class="input-group">
                                        <input type="text" class="  search-query form-control" placeholder="Search" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-danger" type="button">
                                                <span class=" glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown mega-dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All demos</a>		
                                        </li>
                                        <li class="dropdown mega-dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features</a>
                                        </li>
                                        </li>
                                        <li class="dropdown mega-dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy me! </a>		
                                        </li>                                                                        
                                    </ul>		

                                   
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>

</html>