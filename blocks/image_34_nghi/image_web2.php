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
        $less->compileFile('less/image_web2.less', 'css/image_web2.css');
        ?>
        <link href="css/image_web2.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/tabs.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <a href="#">Welcome to Worldwide Electronics Store</a>
                        <ul  class="nav nav-inline pull-right animate-dropdown flip"><li id="menu-item-2129" class="menu-item menu-item-type-custom menu-item-object-custom animate-dropdown menu-item-2129"><a title="Store Locator" href="#"><i class="ec ec-map-pointer"></i>Store Locator</a></li>
                            <li  class="menu-item menu-item-type-post_type menu-item-object-page animate-dropdown menu-item-2185"><a title="Track Your Order" href="#"><i class="ec ec-transport"></i>Track Your Order</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page animate-dropdown menu-item-2131"><a title="Shop" href="#"><i class="ec ec-shopping-bag"></i>Shop</a></li>
                            <li  class="menu-item menu-item-type-post_type menu-item-object-page animate-dropdown menu-item-2132"><a title="My Account" href="#"><i class="ec ec-user"></i>My Account</a></li>
                        </ul>
                    </div>
                    <div class="top-bar"></div>
                    <div class="herder">
                        <div class="row">
                            <div class=" col-md-3">
                                <div class="logo">
                                    <a href="#"> <img src="images/logo.jpg"></a>
                                </div>
                            </div>
                            <div class="col-md-6 seach">
                                <form  method="get" class="gensearch_form" onsubmit="Gsitesearch(this)" target="black">
                                    <input type="text" class="gensearch_input" value="SEARCH...">
                                    <button  class="gensearch_submit glyphicon glyphicon-search" ></button>
                                </form>
                            </div>

                            <div class="col-md-3 icon3">



                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="menu2">
                        <ul class="nav navbar-nav">
                            <li >
                                <a href="#" >TV & Audio</a>		
                            </li>
                            <li >
                                <a href="#" >RTV</a>
                            </li>
                            <li >
                                <a href="#"  >Computer </a>		
                            </li>
                            <li >
                                <a href="#" >Games & Console </a>
                            </li>  
                            <li >
                                <a href="#" >Gadgets</a>
                            </li>  
                            <li >
                                <a href="#" >Phones & Tablet</a>
                            </li> 
                            <li >
                                <a href="#" >GPS & Car Audio</a>
                            </li> 
                            <li >
                                <a href="#" >Accessfies</a>
                            </li> 
                        </ul>
                    </div>


                    <div class="clearfix"> </div>




                    <div class="banner">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="col-md-6">

                                    <img src="images/iconxe.png" class="iconxe">
                                </div>
                                <div class="col-md-6">
                                    <div class="title-icon">
                                        <div class="boil"> Free Delivery</div>
                                        from $50

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="col-md-6">

                                    <img src="images/iconxe.png" class="iconxe">
                                </div>
                                <div class="col-md-6">
                                    <div class="title-icon">
                                        <div class="boil"> 99% Delivery</div>
                                        from $55

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="col-md-6">

                                    <img src="images/iconxe.png" class="iconxe">
                                </div>
                                <div class="col-md-6">
                                    <div class="title-icon">
                                        <div class="boil"> 35 DAY</div>
                                        from $560

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="col-md-6">

                                    <img src="images/iconxe.png" class="iconxe">
                                </div>
                                <div class="col-md-6">
                                    <div class="title-icon">
                                        <div class="boil"> Free Delivery</div>
                                        from $50

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="col-md-6">

                                    <img src="images/iconxe.png" class="iconxe">
                                </div>
                                <div class="col-md-6">
                                    <div class="title-icon">
                                        <div class="boil"> Free Delivery</div>
                                        from $50

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="block">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="#"> <img src="images/i1.png"></a>
                            </div
                            <div class="col-md-6">
                                <a href="#"> <img src="images/2.png"></a>
                            </div>
                        </div>


                        <div class="width-tabs">
                            <div class="container">


                                <div id="tabs" class="tabs">
                                    <nav>
                                        <ul>

                                            <li><a href="#section-2"<span>FEUTURED</span></a></li>
                                            <li><a href="#section-3"<span>ON SALE</span></a></li>
                                            <li><a href="#section-4"<span>TOP RATED</span></a></li>

                                        </ul>
                                    </nav>
                                    <div class="content">
                                        <section id="section-1">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="h1"><a href="#">Audio Speakers</a></div>
                                                        <div class="h4"> <a href="#">Wireless Audio System Multiroom 360</a></div>
                                                        <div class="img">
                                                            <a href="#"><img src="images/tab1.jpg"></a>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="price">$19,600</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="sale">$21,000</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-3">
                                                        <div class="h1"><a href="#">Audio Speakers</a></div>
                                                        <div class="h4"> <a href="#">Wireless Audio System Multiroom 360</a></div>
                                                        <div class="img">
                                                            <a href="#"><img src="images/tab2.jpg"></a>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="price">$19,600</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="sale">$21,000</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-3">
                                                        <div class="h1"><a href="#">Audio Speakers</a></div>
                                                        <div class="h4"> <a href="#">Wireless Audio System Multiroom 360</a></div>
                                                        <div class="img">
                                                            <a href="#"><img src="images/tab3.jpg"></a>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="price">$19,600</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="sale">$21,000</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-3">
                                                        <div class="h1"><a href="#">Audio Speakers</a></div>
                                                        <div class="h4"> <a href="#">Wireless Audio System Multiroom 360</a></div>
                                                        <div class="img">
                                                            <a href="#"><img src="images/tab1.jpg"></a>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="price">$19,600</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="sale">$21,000</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                        </section>
                                        <section id="section-2">
                                            <div class="container">
                                                <div class="row">
                                                     <div class="col-md-3">
                                                        <div class="h1"><a href="#">Audio Speakers</a></div>
                                                        <div class="h4"> <a href="#">Wireless Audio System Multiroom 360</a></div>
                                                        <div class="img">
                                                            <a href="#"><img src="images/tab1.jpg"></a>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="price">$19,600</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="sale">$21,000</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-3">
                                                        <div class="h1"><a href="#">Audio Speakers</a></div>
                                                        <div class="h4"> <a href="#">Wireless Audio System Multiroom 360</a></div>
                                                        <div class="img">
                                                            <a href="#"><img src="images/tab2.jpg"></a>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="price">$19,600</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="sale">$21,000</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-3">
                                                        <div class="h1"><a href="#">Audio Speakers</a></div>
                                                        <div class="h4"> <a href="#">Wireless Audio System Multiroom 360</a></div>
                                                        <div class="img">
                                                            <a href="#"><img src="images/tab3.jpg"></a>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="price">$34,600</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="sale">$21,000</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-3">
                                                        <div class="h1"><a href="#">Audio Speakers</a></div>
                                                        <div class="h4"> <a href="#">Wireless Audio System Multiroom 360</a></div>
                                                        <div class="img">
                                                            <a href="#"><img src="images/tab1.jpg"></a>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="price">$143,600</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="sale">$234,000</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                            </div>
                                        </section>
                                        <section id="section-3">
                                            <div class="container">
                                                <div class="row">
                                                    <!-- /box1 -->
                                                     <div class="col-md-3">
                                                        <div class="h1"><a href="#">Audio Speakers</a></div>
                                                        <div class="h4"> <a href="#">Wireless Audio System Multiroom 360</a></div>
                                                        <div class="img">
                                                            <a href="#"><img src="images/tab1.jpg"></a>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="price">$24,600</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="sale">$32,000</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-3">
                                                        <div class="h1"><a href="#">Audio Speakers</a></div>
                                                        <div class="h4"> <a href="#">Wireless Audio System Multiroom 360</a></div>
                                                        <div class="img">
                                                            <a href="#"><img src="images/tab2.jpg"></a>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="price">$19,600</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="sale">$21,000</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-3">
                                                        <div class="h1"><a href="#">Audio Speakers</a></div>
                                                        <div class="h4"> <a href="#">Wireless Audio System Multiroom 360</a></div>
                                                        <div class="img">
                                                            <a href="#"><img src="images/tab3.jpg"></a>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="price">$15,600</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="sale">$16,000</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-3">
                                                        <div class="h1"><a href="#">Audio Speakers</a></div>
                                                        <div class="h4"> <a href="#">Wireless Audio System Multiroom 360</a></div>
                                                        <div class="img">
                                                            <a href="#"><img src="images/tab1.jpg"></a>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="price">$43,600</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="sale">$45,000</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                              

                                    </div><!-- /content -->
                                </div><!-- /tabs -->
                                <script src="js/cbpFWTabs.js"></script>
                                <script>
                            new CBPFWTabs(document.getElementById('tabs'));
                                </script>
                            </div>
                        </div>
                            
                           <div class="clearfix"></div>
                           <div class="footer">
                               <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/tivi.jpg" alt=""/>
                </div>
                <div class="col-md-6">
                    <div class="col-md-9">
                        <h1>Home Entertainment</h1>
                    </div> 
                    <div class="col-md-3">
                        <div class=" pull-right">
                            <a class="fa fa-angle-left" href="#carousel-example" data-slide="prev"></a>
                            <a class="fa fa-angle-right" href="#carousel-example" data-slide="next"></a>

                        </div>
                    </div>
                    <div id="carousel-example" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <figure>
                                            <div class="col-item">
                                                <div class="panel">
                                                    <a href="#" class="h1"rel="tag">Computer Cases, Servers</a>
                                                    <a href="#" ><p class="detail-title">Aerocool EN52377 Dead  Silence Gaming Cube Case</p></a>
                                                    <div class="panel-body">
                                                        <a href="#" class="zoom wid">
                                                            <img src="images/hinh1.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="detail">
                                                    

                                                    <span class="price">
                                                        <span >$180.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        <figure>
                                            <div class="col-item">
                                                <div class="panel">
                                                    <a href="#" class="h1" rel="tag">Pendrives, Accessories</a>
                                                    <a href="#" >  <p class="detail-title">Pendrive USB 3.0 Flash 64 GB</p></a>
                                                    <div class="panel-body">
                                                        <a href="#" class="zoom">
                                                            <img src="images/hinh2.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="detail">
                                                    

                                                    <span class="price">
                                                        <span >$180.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
                           </div>
                    </div>
                </div>
            </div>



    </body>
    <script src="js/wowslider.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script src="js/slider.js" type="text/javascript"></script>
</html>