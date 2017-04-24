<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/657.less', 'css/657.css');
        ?>
        <link href="css/657.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-657">  
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <!-----icon responsive---->
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                             <!-----/icon responsive---->
                            <a class="navbar-brand" href="#">Home</a>
                        </div>

                        <div class="collapse navbar-collapse js-navbar-collapse">
                            <!---tab dropdown menu of Women--->
                            <ul class="nav navbar-nav">
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women 
                                        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
                                    </a>
                                    <!----dropdown menu of Women---->
                                    <ul class="dropdown-menu mega-dropdown-menu row">
                                        <li class="col-sm-4">
                                            <ul>
                                                <li class="dropdown-header">Dresses</li>
                                                <li><a href="#">Unique Features</a></li>
                                                <li><a href="#">Image Responsive</a></li>
                                                <li><a href="#">Auto Carousel</a></li>
                                                <li><a href="#">Newsletter Form</a></li>
                                                <li><a href="#">Four columns</a></li>
                                                <li class="dropdown-header">Tops</li>
                                                <li><a href="#">Good Typography</a></li>
                                            </ul>
                                        </li> 

                                        <li class="col-sm-7">
                                            <ul>
                                                <div   data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <a href="#"><img src="images/img/01.jpg"  alt="product 1"></a>                                                 
                                                        </div>
                                                    </div>
                                                </div>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!---/tab dropdown menu of Women--->
                            <!----tab dropdown menu of fashion--->
                            <ul class="nav navbar-nav">
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fashion 
                                        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
                                    </a>
                                    <!---- dropdown menu--->
                                    <ul class="dropdown-menu mega-dropdown-menu row">
                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header">Dresses</li>
                                                <li><a href="#">Unique Features</a></li>
                                                <li><a href="#">Image Responsive</a></li>
                                                <li><a href="#">Auto Carousel</a></li>
                                                <li><a href="#">Newsletter Form</a></li>
                                                <li><a href="#">Four columns</a></li>
                                                <li class="dropdown-header">Tops</li>
                                                <li><a href="#">Good Typography</a></li>
                                            </ul>
                                        </li>

                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header">Jackets</li>
                                                <li><a href="#">Easy to customize</a></li>
                                                <li><a href="#">Glyphicons</a></li>
                                                <li><a href="#">Pull Right Elements</a></li>
                                                <li class="dropdown-header">Pants</li>
                                                <li><a href="#">Coloured Headers</a></li>
                                                <li><a href="#">Primary Buttons & Default</a></li>
                                                <li><a href="#">Calls to action</a></li>
                                            </ul>
                                        </li>

                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header">Accessories</li>
                                                <li><a href="#">Default Navbar</a></li>
                                                <li><a href="#">Lovely Fonts</a></li>
                                                <li><a href="#">Responsive Dropdown </a></li>
                                                <li class="dropdown-header">Newsletter</li>
                                                <form >
                                                    <div class="form-group">
                                                        <label class="sr-only" for="email">Email address</label>
                                                        <input type="email"   placeholder="Enter email">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                </form>
                                            </ul>
                                        </li>

                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header">New in Stores</li>
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <a href="#"><img src="images/img/216840-0129_1.jpg"  alt="product 1"></a>                        
                                                        <h4><small>Summer dress floral prints</small></h4>
                                                        <button class="btn btn-primary" type="button">49,99 €</button>
                                                        <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img src="images/img/677188-0067_1.jpg"  alt="product 2"></a>
                                                        <h4><small>Gold sandals with shiny touch</small></h4>
                                                        <button class="btn btn-primary" type="button">9,99 €</button>
                                                        <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                                    </div>
                                                    <!-- End Item -->
                                                    <div class="item">
                                                        <a href="#"><img src="images/img/996093-0100_1.jpg" alt="product 3"></a>
                                                        <h4><small>Denin jacket stamped</small></h4>
                                                        <button class="btn btn-primary" type="button">49,99 €</button>
                                                        <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                                    </div>
                                                    <!-- /End Item -->
                                                </div>                       
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                             <!----/tab dropdown menu of fashion--->
                             <!----tab dropdown menu of Electronic--->
                            <ul class="nav navbar-nav">
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electronic
                                        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
                                    </a>
                                    <ul class="dropdown-menu mega-dropdown-menu row">
                                        <li class="col-sm-3">
                                            <ul>
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <a href="#"><img src="images/img/02.jpg"  alt="product 1"></a>                        
                                                        <h4>Featured Category</h4>
                                                        <p>This is a custom block ready to display any content. You can add blocks to any category in the catalog...</p>
                                                    </div>
                                                </div>                        
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header">Dresses</li>
                                                <li><a href="#">Unique Features</a></li>
                                                <li><a href="#">Image Responsive</a></li>
                                                <li><a href="#">Auto Carousel</a></li>
                                                <li><a href="#">Newsletter Form</a></li>
                                                <li><a href="#">Four columns</a></li>
                                                <li class="dropdown-header">Tops</li>
                                                <li><a href="#">Good Typography</a></li>
                                            </ul>
                                        </li>

                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header">Jackets</li>
                                                <li><a href="#">Easy to customize</a></li>
                                                <li><a href="#">Glyphicons</a></li>
                                                <li><a href="#">Pull Right Elements</a></li>
                                                <li class="dropdown-header">Pants</li>
                                                <li><a href="#">Coloured Headers</a></li>
                                                <li><a href="#">Primary Buttons & Default</a></li>
                                                <li><a href="#">Calls to action</a></li>
                                            </ul>
                                        </li>

                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header">Accessories</li>
                                                <li><a href="#">Default Navbar</a></li>
                                                <li><a href="#">Lovely Fonts</a></li>
                                                <li><a href="#">Responsive Dropdown </a></li>
                                                <li class="dropdown-header">Newsletter</li>
                                                <form >
                                                    <div class="form-group">
                                                        <label class="sr-only" for="email">Email address</label>
                                                        <input type="email"  placeholder="Enter email">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                </form>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                              <!----/tab dropdown menu of Electronic--->
                              <!----tab dropdown menu of Digital--->
                            <ul class="nav navbar-nav">
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Digital
                                        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
                                    </a>
                                    <ul class="dropdown-menu mega-dropdown-menu row">                                
                                        <li class="col-sm-12">
                                            <ul>
                                                <li class="dropdown-header">Dresses</li>
                                                <li><a href="#">Unique Features</a></li>
                                                <li><a href="#">Image Responsive</a></li>
                                                <li><a href="#">Auto Carousel</a></li>
                                                <li><a href="#">Newsletter Form</a></li>
                                                <li><a href="#">Four columns</a></li>
                                                
                                                <li class="dropdown-header">Tops</li>
                                                <li><a href="#">Good Typography</a></li>
                                            </ul>
                                        </li>                                 
                                    </ul>
                                </li>
                            </ul>
                               <!----/tab dropdown menu of Digital--->
                               
                            <!----tab dropdown menu of Custom--->
                            <ul class="nav navbar-nav">
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Custom
                                        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
                                    </a>
                                    <ul class="dropdown-menu mega-dropdown-menu row">
                                        <li class="col-sm-3">
                                            <ul>
                                                    <div class="item active">                      
                                                        <h2>Responsive Magento Theme</h2>
                                                        <p>Ultimo is a premium Magento theme with advanced admin module. It's extremely customizable and fully responsive. Can be used for every type of store.</p>
                                                    </div>
                                            </ul>
                                        </li>

                                        <li class="col-sm-3">
                                            <ul>
                                                    <div class="item active">
                                                        <a href="#"><img src="images/img/01.png"  alt="product 1"></a>                        
                                                        <h4>50+ CMS blocks</h4>
                                                        <p>This is a custom block ready to display any content. You can add blocks to any category in the catalog...</p>
                                                    </div>                          
                                            </ul>
                                        </li>

                                        <li class="col-sm-3">
                                            <ul>
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <a href="#"><img src="images/img/02.png"  alt="product 1"></a>                        
                                                        <h4>190-pages documentation</h4>
                                                        <p>This is a custom block ready to display any content. You can add blocks to any category in the catalog...</p>
                                                    </div>
                                                    <!-- End Item -->
                                                </div>
                                                <!-- End Carousel Inner -->
                                                <!-- /.carousel -->                          
                                            </ul>
                                        </li>

                                        <li class="col-sm-3">
                                            <ul>
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <a href="#"><img src="images/img/03.png"  alt="product 1"></a>                        
                                                        <h4>Easy to customize</h4>
                                                        <p>This is a custom block ready to display any content. You can add blocks to any category in the catalog...</p>
                                                    </div>
                                                </div>                       
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!----/tab dropdown menu of Custom--->
                        </div>                   
                    </nav>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>

</html>