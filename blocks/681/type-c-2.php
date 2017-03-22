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
        $less->compileFile('less/type-c-2.less', 'css/type-c-2.css');
        ?>
        <link href="css/type-c-2.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-c-2">
            <div class="container">
                <div class="row">   
                    <nav class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse js-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME<span class="caret"></span></a>				
                                    <ul class="dropdown-menu mega-dropdown-menu">
                                        <li class="col-md-2 col-sm-4">
                                            <div class="item">
                                                <a href=""> <img src="images/menu/t1.png" alt=""width="100%" height="100%"></a>
                                                <a href=""> <img src="images/menu/t1.png" alt=""width="100%" height="100%"></a>
                                            </div>                                      
                                        </li>
                                        <li class="col-md-2 col-sm-4">
                                            <div class="item">
                                                <a href=""> <img src="images/menu/t1.png" alt=""width="100%" height="100%"></a>
                                                <a href=""> <img src="images/menu/t1.png" alt=""width="100%" height="100%"></a>
                                            </div>                                      
                                        </li>
                                        <li class="col-md-2 col-sm-4">
                                            <div class="item">
                                                <a href=""> <img src="images/menu/t1.png" alt=""width="100%" height="100%"></a>
                                                <a href=""> <img src="images/menu/t1.png" alt=""width="100%" height="100%"></a>
                                            </div>                                      
                                        </li>
                                        <li class="col-md-2 col-sm-4">
                                            <div class="item">
                                                <a href=""> <img src="images/menu/t1.png" alt=""width="100%" height="100%"></a>
                                                <a href=""> <img src="images/menu/t1.png" alt=""width="100%" height="100%"></a>
                                            </div>                                      
                                        </li>
                                        <li class="col-md-2 col-sm-4">
                                            <div class="item">
                                                <a href=""> <img src="images/menu/t1.png" alt=""width="100%" height="100%"></a>
                                                <a href=""> <img src="images/menu/t1.png" alt=""width="100%" height="100%"></a>
                                            </div>                                      
                                        </li>
                                        <li class="col-md-2 col-sm-4">
                                            <div class="item">
                                                <a href=""> <img src="images/menu/t1.png" alt=""width="100%" height="100%"></a>
                                                <a href=""> <img src="images/menu/t1.png" alt=""width="100%" height="100%"></a>
                                            </div>                                      
                                        </li>
                                    </ul>				
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SHOP<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Category – Right sidebar</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Category – Top slider 1</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Category – Full width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">WIDGETS MENU<span class="caret"></span></a>				
                                    <ul class="dropdown-menu mega-dropdown-menu">
                                        <li class="col-md-3 col-sm-6">
                                            <ul>
                                                <li class="dropdown-header">Product Categories</li>
                                                <li class="divider"></li>
                                                <li><a href="#">Acustic</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Hipster</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Men</a></li>
                                                <li class="divider"></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3 col-sm-6">
                                            <ul>
                                                <img src="images/menu/menu-banner-collection.jpg" alt="" width="100%" height="100%"/>
                                            </ul>
                                        </li>
                                        <li class="col-md-3 col-sm-6">
                                            <ul>
                                                <li class="dropdown-header">Top Rated Products</li>
                                                <li class="divider"></li>
                                                <img src="images/menu/j-1.jpg" alt=""/>
                                                <span>Keni Jeans Mog</span>
                                                <li class="divider"></li>
                                                <img src="images/menu/j9.jpg" alt=""/>
                                                <span >Mongoose L</span>
                                            </ul>
                                        </li>
                                        <li class="col-md-3 col-sm-6">
                                            <ul>
                                                <li class="dropdown-header">Tags</li>
                                                <li class="divider"></li>
                                                <div class="tagcloud01">
                                                    <ul>
                                                        <li><a href="#">tag</a></li>
                                                        <li><a href="#">tag</a></li>
                                                        <li><a href="#">tag</a></li>
                                                        <li><a href="#">tag</a></li>
                                                        <li><a href="#">tag</a></li>
                                                        <li><a href="#">tag</a></li>
                                                        <li><a href="#">tag</a></li>
                                                        <li><a href="#">tag</a></li>
                                                        <li><a href="#">tag</a></li>
                                                        <li><a href="#">tag</a></li>
                                                        <li><a href="#">tag</a></li>
                                                        <li><a href="#">tag</a></li>
                                                    </ul>
                                                </div>
                                            </ul>
                                        </li>
                                    </ul>				
                                </li>
                                <li class="dropdown">
                                    <div class="clear"></div>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SHORTCODES<span class="caret"></span></a>				
                                    <ul class="dropdown-menu mega-dropdown-menu">
                                        <li class="col-md-3 col-sm-6">
                                            <ul>
                                                <li class="dropdown-header">Content</li>
                                                <li class="divider"></li>
                                                <li><a href="#">Acustic</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Hipster</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Men</a></li>
                                                <li class="divider"></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3 col-sm-6">
                                            <ul>
                                                <li class="dropdown-header">Social & Carousels</li>
                                                <li class="divider"></li>
                                                <li><a href="#">Acustic</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Hipster</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Men</a></li>
                                                <li class="divider"></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3 col-sm-6">
                                            <ul>
                                                <li class="dropdown-header">Text contents</li>
                                                <li class="divider"></li>
                                                <li><a href="#">Acustic</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Hipster</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Men</a></li>
                                                <li class="divider"></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3 col-sm-6">
                                            <ul>
                                                <li class="dropdown-header">Featured</li>
                                                <li class="divider"></li>
                                                <li><a href="#">Acustic</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Hipster</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Men</a></li>
                                                <li class="divider"></li>
                                            </ul>
                                        </li>
                                    </ul>				
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">BLOG<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Classical blog</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Pinterest blog</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Big blog</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">EXTRAS<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Documentation</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Video Tutorials</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <form class="navbar-form navbar-left" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search..">
                                    </div>
                                    <button type="submit" class="btn btn-default"><img src="images/menu/search.png" alt=""width="18px" height="18px"></button>
                                </form>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </body>

</html>