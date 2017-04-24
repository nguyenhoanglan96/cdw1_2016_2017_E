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
        $less->compileFile('less/656.less', 'css/656.css');
        ?>
        <link href="css/656.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-656">  
            <div class="container">
                <div class="row">
                    <!-----menu left--->
                    <div class="navbar-header">
                        <div class="hotline"><i class="fa fa-phone"></i>Call +001 555 801</div>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="dropdown mega-dropdown">
                            <a href="#" >All demos</a>		
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" >Features</a>
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#"  >Buy me! </a>		
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" >Welcome msg! </a>
                        </li>                                                                                    
                    </ul>
                    <!-----/menu left--->
                    
                    <ul class="nav navbar-nav navbar-right">
                        <!-----menu right--->
                        <li >
                            <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language</a>

                            <ul class="dropdown-menu">
                                <li> <div class="icon">
                                        <span class="label dropdown-icon" style="background-image:url(http://ultimo.infortis-themes.com/demo/skin/frontend/ultimo/default/images/flags/default.png);">&nbsp;</span>
                                        <a href="#">English</a>
                                    </div>
                                </li>
                                <li> <div class="icon"><span class="label dropdown-icon" style="background-image:url(http://ultimo.infortis-themes.com/demo/skin/frontend/ultimo/default/images/flags/default_de.png);">&nbsp;</span>
                                        <a href="#">German</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-----/menu right--->
                        <!----DropDown--->
                        <li >
                            <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Currency</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">BRL</a></li>
                                <li><a href="#">GBP</a></li>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">CNY</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="row">
                        <div class="col-md-12">
                            <!-----logo---->
                            <div class="col-md-4">
                                <img src="images/img/logo-1.png" alt="" id="col1"/>
                            </div>
                            <!------seach--->
                            <div class="col-md-4">
                                <div id="custom-search-input">
                                    <div >
                                        <input type="text" class=" form-control" placeholder="Search" />
                                        <span >
                                            <button class=" btn-danger" type="button">
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class=" navbar-collapse" >
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown mega-dropdown">
                                            <a href="#" >All demos</a>		
                                        </li>
                                        <li class="dropdown mega-dropdown">
                                            <a href="#" >Features</a>
                                        </li>
                                        <li class="dropdown mega-dropdown">
                                            <a href="#" >Buy me! </a>		
                                        </li>  
                                        <li class="dropdown mega-dropdown">
                                            <span>
                                                <span class="icon ic "></span>
                                                <span class="label">Compare</span>
                                            </span>		
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