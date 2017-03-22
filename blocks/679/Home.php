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
        <div class="back-to-top" ><a href="#" style=" color: white;"><span class="fa fa-arrow-up"></span></a></div>
              <div class="type_a_logo">
            <header id="main_header" style="text-align: center">
                <div class="container">

                    <div class="logo-section clearfix">
                        <div class="row margin-header-top" >
                            <div class="col-md-3">
                                <div class="logo">
                                    <div style="text-align: center">
                                        <a href="#" ><img src="images/recashlogo.png" alt="Recash test site" height="" width=""></a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="text-align: center">
                                <div id="re_menu_near_logo" >
                                    <ul class="menu" >
                                        <li ><a href="#"><i class="fa fa-sitemap"></i> Groups</a></li>
                                        <li ><a href="#"><i class="fa fa-users"></i> Members</a></li>
                                        <li><a href="#"><i class="fa fa-bolt"></i> Activity</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=" col-md-6 search-box">
                                <div class="col-md-4">
                                    <div class="head_search">
                                        <form role="search" method="get" class="search-form" action="#">
                                            <input type="text" name="s" placeholder="Search" data-posttype="post">
                                            <input type="hidden" name="post_type" value="post">
                                            <button type="submit" ><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                              
                                <div class="col-md-4">
                                    <a href="#" class="wpsm-button orange medium ml5">
                                        <i class="fa fa-plus"></i>
                                        Submit a deal
                                    </a>
                                </div>
                                  <div class="col-md-4">
                                    <span class=" wpsm-button white medium" data-type="login">
                                        <i class="fa fa-sign-in"></i><span>Login / Register</span>
                                    </span>
                                </div>

                            </div>



                        </div>

                    </div>
                </div>
            </header>
        </div>


        <!-----------------------------------Huy bao----------------------------------->
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
        <div class="clearfix"></div>
              <div class="type_a_silde">
            <div class="container">
                <div class="col-md-12">
                    <div class="carousel slide" id="myCarousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">

                                    <a href="#">
                                        <div class="col-md-6 image-slider">
                                            <img src="images/slider-show-1.jpg" class="img-responsive">
                                        </div>

                                        <div class="col-md-6 caption-slider">
                                            <div class="r-part-car">
                                                <i class="fa fa-fire"></i> 
                                                <span id="temperatur132" class="temperatur">136 <span class="gradus_icon fa fa-heart"></span></span>                         <h2><a href="http://recash.wpsoul.net/green-magma-barley-grass-juice/">Magma, Barley Grass  </a></h2>
                                                <div class="post-meta">				
                                                    <span class="cat_link_meta">
                                                        <a href="#" class="cat">Green Food</a>
                                                    </span>
                                                </div>                                
                                                <span class="simple_price_count">
                                                    $39.60    			 
                                                    <del>$54.99</del>    		
                                                </span>


                                            </div>
                                        </div>  
                                    </a>

                                </div>
                                <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">

                                    <a href="#">
                                        <div class="col-md-6 image-slider">
                                            <img src="images/slider-show-1.jpg" class="img-responsive">
                                        </div>

                                        <div class="col-md-6 caption-slider">
                                            <div class="r-part-car">
                                                <i class="fa fa-fire"></i> 
                                                <span id="temperatur132" class="temperatur">136 <span class="gradus_icon fa fa-heart"></span></span>                         <h2><a href="http://recash.wpsoul.net/green-magma-barley-grass-juice/">Magma, Barley Grass  </a></h2>
                                                <div class="post-meta">				
                                                    <span class="cat_link_meta">
                                                        <a href="#" class="cat">Green Food</a>
                                                    </span>
                                                </div>                                
                                                <span class="simple_price_count">
                                                    $39.60    			 
                                                    <del>$54.99</del>    		
                                                </span>


                                            </div>
                                        </div>  
                                    </a>

                                </div>
                                <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">

                                    <a href="#">
                                        <div class="col-md-6 image-slider">
                                            <img src="images/slider-show-1.jpg" class="img-responsive">
                                        </div>

                                        <div class="col-md-6 caption-slider">
                                            <div class="r-part-car">
                                                <i class="fa fa-fire"></i> 
                                                <span id="temperatur132" class="temperatur">136 <span class="gradus_icon fa fa-heart"></span></span>                         <h2><a href="http://recash.wpsoul.net/green-magma-barley-grass-juice/">Magma, Barley Grass  </a></h2>
                                                <div class="post-meta">				
                                                    <span class="cat_link_meta">
                                                        <a href="#" class="cat">Green Food</a>
                                                    </span>
                                                </div>                                
                                                <span class="simple_price_count">
                                                    $39.60    			 
                                                    <del>$54.99</del>    		
                                                </span>


                                            </div>
                                        </div>  
                                    </a>

                                </div>
                            </div>
                            <div class="item ">
                                <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">

                                    <a href="#">
                                        <div class="col-md-6 image-slider">
                                            <img src="images/slider-show-1.jpg" class="img-responsive">
                                        </div>

                                        <div class="col-md-6 caption-slider">
                                            <div class="r-part-car">
                                                <i class="fa fa-fire"></i> 
                                                <span id="temperatur132" class="temperatur">136 <span class="gradus_icon fa fa-heart"></span></span>                         <h2><a href="http://recash.wpsoul.net/green-magma-barley-grass-juice/">Magma, Barley Grass  </a></h2>
                                                <div class="post-meta">				
                                                    <span class="cat_link_meta">
                                                        <a href="#" class="cat">Green Food</a>
                                                    </span>
                                                </div>                                
                                                <span class="simple_price_count">
                                                    $39.60    			 
                                                    <del>$54.99</del>    		
                                                </span>


                                            </div>
                                        </div>  
                                    </a>

                                </div>
                                <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">

                                    <a href="#">
                                        <div class="col-md-6 image-slider">
                                            <img src="images/slider-show-1.jpg" class="img-responsive">
                                        </div>

                                        <div class="col-md-6 caption-slider">
                                            <div class="r-part-car">
                                                <i class="fa fa-fire"></i> 
                                                <span id="temperatur132" class="temperatur">136 <span class="gradus_icon fa fa-heart"></span></span>                         <h2><a href="http://recash.wpsoul.net/green-magma-barley-grass-juice/">Magma, Barley Grass  </a></h2>
                                                <div class="post-meta">				
                                                    <span class="cat_link_meta">
                                                        <a href="#" class="cat">Green Food</a>
                                                    </span>
                                                </div>                                
                                                <span class="simple_price_count">
                                                    $39.60    			 
                                                    <del>$54.99</del>    		
                                                </span>


                                            </div>
                                        </div>  
                                    </a>

                                </div>
                                <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">

                                    <a href="#">
                                        <div class="col-md-6 image-slider">
                                            <img src="images/slider-show-1.jpg" class="img-responsive">
                                        </div>

                                        <div class="col-md-6 caption-slider">
                                            <div class="r-part-car">
                                                <i class="fa fa-fire"></i> 
                                                <span id="temperatur132" class="temperatur">136 <span class="gradus_icon fa fa-heart"></span></span>                         <h2><a href="http://recash.wpsoul.net/green-magma-barley-grass-juice/">Magma, Barley Grass  </a></h2>
                                                <div class="post-meta">				
                                                    <span class="cat_link_meta">
                                                        <a href="#" class="cat">Green Food</a>
                                                    </span>
                                                </div>                                
                                                <span class="simple_price_count">
                                                    $39.60    			 
                                                    <del>$54.99</del>    		
                                                </span>


                                            </div>
                                        </div>  
                                    </a>

                                </div>
                            </div>
                            <div class="item ">
                                <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">

                                    <a href="#">
                                        <div class="col-md-6 image-slider">
                                            <img src="images/slider-show-1.jpg" class="img-responsive">
                                        </div>

                                        <div class="col-md-6 caption-slider">
                                            <div class="r-part-car">
                                                <i class="fa fa-fire"></i> 
                                                <span id="temperatur132" class="temperatur">136 <span class="gradus_icon fa fa-heart"></span></span>                         <h2><a href="http://recash.wpsoul.net/green-magma-barley-grass-juice/">Magma, Barley Grass  </a></h2>
                                                <div class="post-meta">				
                                                    <span class="cat_link_meta">
                                                        <a href="#" class="cat">Green Food</a>
                                                    </span>
                                                </div>                                
                                                <span class="simple_price_count">
                                                    $39.60    			 
                                                    <del>$54.99</del>    		
                                                </span>


                                            </div>
                                        </div>  
                                    </a>

                                </div>
                                <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">

                                    <a href="#">
                                        <div class="col-md-6 image-slider">
                                            <img src="images/slider-show-1.jpg" class="img-responsive">
                                        </div>

                                        <div class="col-md-6 caption-slider">
                                            <div class="r-part-car">
                                                <i class="fa fa-fire"></i> 
                                                <span id="temperatur132" class="temperatur">136 <span class="gradus_icon fa fa-heart"></span></span>                         <h2><a href="http://recash.wpsoul.net/green-magma-barley-grass-juice/">Magma, Barley Grass  </a></h2>
                                                <div class="post-meta">				
                                                    <span class="cat_link_meta">
                                                        <a href="#" class="cat">Green Food</a>
                                                    </span>
                                                </div>                                
                                                <span class="simple_price_count">
                                                    $39.60    			 
                                                    <del>$54.99</del>    		
                                                </span>


                                            </div>
                                        </div>  
                                    </a>

                                </div>
                                <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">

                                    <a href="#">
                                        <div class="col-md-6 image-slider">
                                            <img src="images/slider-show-1.jpg" class="img-responsive">
                                        </div>

                                        <div class="col-md-6 caption-slider">
                                            <div class="r-part-car">
                                                <i class="fa fa-fire"></i> 
                                                <span id="temperatur132" class="temperatur">136 <span class="gradus_icon fa fa-heart"></span></span>                         <h2><a href="http://recash.wpsoul.net/green-magma-barley-grass-juice/">Magma, Barley Grass  </a></h2>
                                                <div class="post-meta">				
                                                    <span class="cat_link_meta">
                                                        <a href="#" class="cat">Green Food</a>
                                                    </span>
                                                </div>                                
                                                <span class="simple_price_count">
                                                    $39.60    			 
                                                    <del>$54.99</del>    		
                                                </span>


                                            </div>
                                        </div>  
                                    </a>

                                </div>
                            </div>

                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="content no_shadow">
            <div class="row">
                <!-- Main Side -->
                <div class="col-md-8">
                    <!-- CONTENT -->
                 <div class="type_a_2">

            <div class="mod">
                <div class="content no_shadow">
                    <!-- Main Side -->

                    <!-- CONTENT -->
                    <div class="slidebar-1">

                        <div class="re_filter_panel">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#home">
                                        <p>Show all</p>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#menu1">
                                        <p>Most hot</p>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#menu2">
                                        <p>Popular</p>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#menu3">
                                        <p>Discussed</p>
                                    </a>
                                </li>
                                <li class="menu-last-right">
                                    <a data-toggle="tab" href="#">
                                        <div class="dropdown">
                                            <a role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
                                                Choose Category<span ><i class="fa fa-plus" aria-hidden="true"></i>
                                                </span>

                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                                <li class="rh_drop_item"><a href="#">Baby&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                                <li class="rh_drop_item"><a href="#">Bath&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                                <li class="rh_drop_item"><a href="#">Body&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                                <li class="rh_drop_item"><a href="#">Face&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                                <li class="rh_drop_item"><a href="#">Green Food&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                                <li class="rh_drop_item"><a href="#">Oral Care&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                            </ul>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="eq_grid post_eq_grid rh-flex-eq-height col_wrap_three">
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled">
                                        <div class="info_in_dealgrid">
                                            <figure>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/21.jpg" height="210" alt="LUMBABACK best sport bandage deal" src="images/21.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">
                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$107</ins>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">LUMBABACK best sport bandage deal</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Body</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">Golden</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div >
                                                        <span class="table_cell_thumbs">
                                                            <button class="thumbplus alreadyhot" alt="Vote up" title="Vote up" data-post_id="176" data-informer="463"></button>
                                                            <button class="thumbminus alreadyhot" alt="Vote down" title="Vote down" data-post_id="176" data-informer="463"></button> </span>
                                                        <span class="thumbscount">293</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">7</span>
                                            </div>
                                        </div> </article>
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled">
                                        <div class="info_in_dealgrid">
                                            <figure>
                                                <span class="grid_onsale">--21%</span>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/2.jpg" height="210" alt="Calcium with Magnesium, Natural Orange Flavor" src="images/2.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">
                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$15.36</ins>
                                                                    <del>$19.95</del>	 		</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">Calcium with Magnesium, Natural Orange Flavor</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Baby</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">Natures</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs"><button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="169" data-informer="271"></button><button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="169" data-informer="271"></button></span><span class="thumbscount">271</span> </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">6</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled">
                                        <div class="info_in_dealgrid">
                                            <span class="re-ribbon-badge left-badge badge_4"><span>Best price</span></span>
                                            <figure>
                                                <span class="grid_onsale">--81%</span>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/5.jpg" height="210" alt="Vitamin C Serum for Face with Hyaluronic Acid" src="images/5.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">
                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$15.95 </ins>
                                                                    <del>$79.95</del>	 		</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">Vitamin C Serum for Face with Hyaluronic Acid</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Face</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">gogreen</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs"><button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="151" data-informer="158"></button><button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="151" data-informer="158"></button></span><span class="thumbscount">158</span> </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">0</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled" style="display: block;">
                                        <div class="info_in_dealgrid">
                                            <span class="re-ribbon-badge left-badge badge_3"><span>Best value</span></span>
                                            <figure>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/14.jpg" height="210" alt="Total HERB Twin Pack" src="images/14.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">
                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$4.71</ins>
                                                                    <del>$4.96</del>	 		</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">Total HERB Twin Pack</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Oral Care</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">gogreen</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs"><button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="82" data-informer="119"></button><button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="82" data-informer="119"></button></span><span class="thumbscount">119</span> </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">1</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="eq_grid post_eq_grid rh-flex-eq-height col_wrap_three">
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled">
                                        <div class="info_in_dealgrid">
                                            <figure>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/20.jpg" height="210" alt="LUMBABACK best sport bandage deal" src="images/20.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">
                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$107</ins>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>

                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">LUMBABACK best sport bandage deal</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Body</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">Golden</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs">
                                                            <button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="176" data-informer="411">
                                                            </button>
                                                            <button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="176" data-informer="411">
                                                            </button>
                                                        </span>
                                                        <span class="thumbscount">411</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">6</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled">
                                        <div class="info_in_dealgrid">
                                            <figure>
                                                <span class="grid_onsale">--21%</span>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/2.jpg" height="210" alt="Calcium with Magnesium, Natural Orange Flavor" src="images/2.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">
                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$15.36</ins>
                                                                    <del>$19.95</del>	 		</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">Calcium with Magnesium, Natural Orange Flavor</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >

                                                    <span class="cat_link_meta"><a href="#" class="cat">Baby</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">Natures</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs"><button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="169" data-informer="271"></button><button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="169" data-informer="271"></button></span><span class="thumbscount">271</span> </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">6</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled">
                                        <div class="info_in_dealgrid">
                                            <span class="re-ribbon-badge left-badge badge_4"><span>Best price</span></span>
                                            <figure>
                                                <span class="grid_onsale">--81%</span>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/5.jpg" height="210" alt="Vitamin C Serum for Face with Hyaluronic Acid" src="images/5.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">
                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$15.95 </ins>
                                                                    <del>$79.95</del>	 		</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">Vitamin C Serum for Face with Hyaluronic Acid</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Face</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">gogreen</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs"><button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="151" data-informer="158"></button><button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="151" data-informer="158"></button></span><span class="thumbscount">158</span> </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">0</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled" style="display: block;">
                                        <div class="info_in_dealgrid">
                                            <span class="re-ribbon-badge left-badge badge_3"><span>Best value</span></span>
                                            <figure>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/14.jpg" height="210" alt="Total HERB Twin Pack" src="images/14.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">

                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$4.71</ins>
                                                                    <del>$4.96</del>	 		</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">Total HERB Twin Pack</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Oral Care</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">gogreen</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs"><button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="82" data-informer="119"></button><button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="82" data-informer="119"></button></span><span class="thumbscount">119</span> </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">1</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <div class="eq_grid post_eq_grid rh-flex-eq-height col_wrap_three">
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled">
                                        <div class="info_in_dealgrid">
                                            <figure>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/19.jpg" height="210" alt="LUMBABACK best sport bandage deal" src="images/19.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">
                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$107</ins>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">LUMBABACK best sport bandage deal</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Body</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">Golden</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs">
                                                            <button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="176" data-informer="411">
                                                            </button>
                                                            <button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="176" data-informer="411">
                                                            </button>
                                                        </span>
                                                        <span class="thumbscount">411</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">6</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled">
                                        <div class="info_in_dealgrid">
                                            <figure>
                                                <span class="grid_onsale">--21%</span>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/2.jpg" height="210" alt="Calcium with Magnesium, Natural Orange Flavor" src="images/2.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">
                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$15.36</ins>
                                                                    <del>$19.95</del>	 		</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">Calcium with Magnesium, Natural Orange Flavor</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Baby</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">Natures</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs"><button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="169" data-informer="271"></button><button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="169" data-informer="271"></button></span><span class="thumbscount">271</span> </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">6</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled">
                                        <div class="info_in_dealgrid">
                                            <span class="re-ribbon-badge left-badge badge_4"><span>Best price</span></span>
                                            <figure>
                                                <span class="grid_onsale">--81%</span>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/5.jpg" height="210" alt="Vitamin C Serum for Face with Hyaluronic Acid" src="images/5.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">

                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$15.95 </ins>
                                                                    <del>$79.95</del>	 		</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">Vitamin C Serum for Face with Hyaluronic Acid</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Face</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">gogreen</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs"><button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="151" data-informer="158"></button><button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="151" data-informer="158"></button></span><span class="thumbscount">158</span> </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">0</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled" style="display: block;">
                                        <div class="info_in_dealgrid">
                                            <span class="re-ribbon-badge left-badge badge_3"><span>Best value</span></span>
                                            <figure>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/14.jpg" height="210" alt="Total HERB Twin Pack" src="images/14.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">

                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$4.71</ins>
                                                                    <del>$4.96</del>	 		</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">Total HERB Twin Pack</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Oral Care</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">gogreen</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs"><button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="82" data-informer="119"></button><button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="82" data-informer="119"></button></span><span class="thumbscount">119</span> </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">1</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <div class="eq_grid post_eq_grid rh-flex-eq-height col_wrap_three">
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled">
                                        <div class="info_in_dealgrid">
                                            <figure>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/18.jpg" height="210" alt="LUMBABACK best sport bandage deal" src="images/18.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">
                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$107</ins>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">LUMBABACK best sport bandage deal</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Body</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">Golden</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs">
                                                            <button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="176" data-informer="411">
                                                            </button>
                                                            <button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="176" data-informer="411">
                                                            </button>
                                                        </span>
                                                        <span class="thumbscount">411</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">6</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled">
                                        <div class="info_in_dealgrid">
                                            <figure>
                                                <span class="grid_onsale">--21%</span>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/2.jpg" height="210" alt="Calcium with Magnesium, Natural Orange Flavor" src="images/2.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">
                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$15.36</ins>
                                                                    <del>$19.95</del>	 		</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">Calcium with Magnesium, Natural Orange Flavor</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Baby</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">Natures</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs"><button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="169" data-informer="271"></button><button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="169" data-informer="271"></button></span><span class="thumbscount">271</span> </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">6</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled">
                                        <div class="info_in_dealgrid">
                                            <span class="re-ribbon-badge left-badge badge_4"><span>Best price</span></span>
                                            <figure>
                                                <span class="grid_onsale">--81%</span>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/5.jpg" height="210" alt="Vitamin C Serum for Face with Hyaluronic Acid" src="images/5.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">

                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$15.95 </ins>
                                                                    <del>$79.95</del>	 		</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">Vitamin C Serum for Face with Hyaluronic Acid</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Face</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">gogreen</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs"><button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="151" data-informer="158"></button><button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="151" data-informer="158"></button></span><span class="thumbscount">158</span> </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">0</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col_item offer_grid offer_grid_com offer_act_enabled" style="display: block;">
                                        <div class="info_in_dealgrid">
                                            <span class="re-ribbon-badge left-badge badge_3"><span>Best value</span></span>
                                            <figure>
                                                <a href="#">
                                                    <img class="lazyimages" data-src="images/14.jpg" height="210" alt="Total HERB Twin Pack" src="images/14.jpg" style="opacity: 1;"> </a>
                                            </figure>
                                            <div >
                                                <div class="price_row_grid">
                                                    <div class=" floatleft">
                                                        <div class="priced_block clearfix">
                                                            <p>
                                                                <span class="price_count">
                                                                    <ins>$4.71</ins>
                                                                    <del>$4.96</del>	 		</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="floatright vendor_for_grid">
                                                        <a class="admin" href="#" title="u8tgk">
                                                            <img src="images/omg.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk"> </a>
                                                    </div>
                                                </div>
                                                <h3 class=" hoticonfireclass" style="min-height: 54px;"><a href="#">Total HERB Twin Pack</a></h3>
                                            </div>
                                        </div>
                                        <div class="meta_for_grid">
                                            <div class=" floatleft">
                                                <div >
                                                    <span class="cat_link_meta"><a href="#" class="cat">Oral Care</a></span>
                                                </div>
                                                <div class="store_for_grid">
                                                    <span ><span class="store_post_meta_item"><a href="#" rel="tag">gogreen</a></span></span>
                                                </div>
                                            </div>
                                            <div class="date_for_grid floatright">
                                                <span class="date_ago">
                                                    <i class="fa fa-clock-o"></i>6 months ago </span>
                                            </div>
                                        </div>
                                        <div class="re_actions_for_grid two_col_btn_for_grid">
                                            <div class="btn_act_for_grid">
                                                <div >
                                                    <div ><span class="table_cell_thumbs"><button class="thumbplus" alt="Vote up" title="Vote up" data-post_id="82" data-informer="119"></button><button class="thumbminus" alt="Vote down" title="Vote down" data-post_id="82" data-informer="119"></button></span><span class="thumbscount">119</span> </div>
                                                </div>
                                            </div>
                                            <div class="btn_act_for_grid">
                                                <span class="comm_number_for_grid">1</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-------------------------------------nguyen ------------------------------------------>


                </div>
            </div>
        </div>

                </div>
                <!-------------------------------------nguyen ------------------------------------------>
                <div class="col-md-4">
                    <div class="type_a_3">
                        <div class="mod">
                            <div class="content no_shadow">
                                <!-- Main Side -->

                                <!-- CONTENT -->
                                <!-------------------------------------nguyen ------------------------------------------>

                                <div class="mosthot">
                                    <div class=" vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div >
                                                <div class="sidebar">
                                                    <div class="widget tabsajax">
                                                        <div class="title">Most hot</div>
                                                        <div class=" rh_col_tabs_3">
                                                            <div class="re_filter_panel">
                                                                <ul class="re_filter_ul">
                                                                    <ul class="nav nav-tabs">
                                                                        <li class="active"><a data-toggle="tab" href="#home1"><p>Best rated</p></a></li>
                                                                        <li><a data-toggle="tab" href="#menu4"><p>This month</p></a></li>
                                                                        <li><a data-toggle="tab" href="#menu5"><p>This year</p></a></li>
                                                                    </ul>
                                                                </ul>

                                                            </div>
                                                            <div class="tab-content">
                                                                <div id="home1" class="tab-pane fade in active">
                                                                    <div class="wpsm_recent_posts_list">
                                                                        <div class="item-small-news" style="display: block;">
                                                                            <h3><span class="temperatur">410<span class="gradus_icon"></span></span> <a href="#">LUMBABACK best sport bandage deal</a>

                                                                                <span class="simple_price_count">
                                                                                    $107 			 		</span>

                                                                            </h3>
                                                                            <div class="post-meta">
                                                                                <span class="date_ago">
                                                                                    6 months ago </span>
                                                                                <span ><i class="fa fa-commenting"></i> 6</span>
                                                                            </div>

                                                                        </div>
                                                                        <div class="item-small-news" style="display: block;">
                                                                            <h3><span class="temperatur">271<span class="gradus_icon"></span></span> <a href="#">Calcium with Magnesium, Natural Orange Flavor</a>

                                                                                <span class="simple_price_count">
                                                                                    $15.36
                                                                                    <del>$19.95</del>
                                                                                </span>

                                                                            </h3>
                                                                            <div class="post-meta">
                                                                                <span class="date_ago">
                                                                                    6 months ago </span>
                                                                                <span ><i class="fa fa-commenting"></i> 6</span>
                                                                            </div>

                                                                        </div>
                                                                        <div class="item-small-news" style="display: block;">
                                                                            <h3><span class="temperatur">240
                                                                                    <span class="gradus_icon">

                                                                                    </span>

                                                                                </span> <a href="#">Apple Pectin, 700 mg</a>

                                                                                <span class="simple_price_count">
                                                                                    $10.18 			 <del>$15.99</del> 		</span>

                                                                            </h3>
                                                                            <div class="post-meta">
                                                                                <span class="date_ago">
                                                                                    6 months ago
                                                                                </span>
                                                                                <span ><i class="fa fa-commenting"></i> 1
                                                                                </span>
                                                                            </div>

                                                                        </div>
                                                                        <div style="display: block;">

                                                                        </div>
                                                                    </div>
                                                                    <div class="widget widget_text">
                                                                        <div >
                                                                            <div class="rehub_chimp centered_form">
                                                                                <h3>GET THE BEST DEALS IN YOUR INBOX</h3>
                                                                                <!-- Begin MailChimp Signup Form -->
                                                                                <div id="mc_embed_signup">
                                                                                    <form action="#" method="post" name="" target="_blank" no="">
                                                                                        <div >
                                                                                            <input type="email" value="" name="EMAIL" class="email" placeholder="email address" required="">
                                                                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                                                            <div style="position: absolute; left: -5000px;">
                                                                                                <input type="text" name="b_4b4bbda55bb6deb367e6f52d9_6b32851a5b" tabindex="-1" value="">
                                                                                            </div>
                                                                                            <div class="clear">
                                                                                                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>

                                                                                <!--End mc_embed_signup-->
                                                                                <p>Don't worry we don't spam</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget buddypress widget">
                                                                        <div class="title">Groups</div>
                                                                        <div class="item-options" id="groups-list-options">
                                                                            <a href="#" >Newest</a>
                                                                            <span role="separator">|</span>
                                                                            <a href="#" class="selected">Active</a>
                                                                            <span role="separator">|</span>
                                                                            <a href="#" >Popular</a>
                                                                        </div>

                                                                        <ul id="groups-list" class="item-list">
                                                                            <li class="odd">
                                                                                <div class="item-avatar">
                                                                                    <a href="#" title="Green Food">
                                                                                        <img src="images/1a.jpg" alt=""/>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Green Food</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 1 day, 17 hours ago								</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="even">
                                                                                <div class="item-avatar">
                                                                                    <a href="#" title="Body Health">
                                                                                        <img src="images/2a.png" alt=""/></a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Body Health</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 1 day, 18 hours ago								</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="odd">
                                                                                <div class="item-avatar">
                                                                                    <a href="#">
                                                                                        <img src="images/3a.png" alt=""/></a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Bath &amp; Wash</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 3 days, 20 hours ago								</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="even">
                                                                                <div class="item-avatar">
                                                                                    <a href="#">
                                                                                        <img src="images/4a.png" alt=""/></a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Sunshine</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 4 days, 15 hours ago								</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="odd">
                                                                                <div class="item-avatar">
                                                                                    <a href="#" >
                                                                                        <img src="images/5a.jpg" alt=""/></a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Tooth for tooth</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 4 days, 15 hours ago
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                                <div id="menu4"class="tab-pane fade">
                                                                    <div class="widget widget_text">
                                                                        <div >
                                                                            <div class="rehub_chimp centered_form">
                                                                                <h3>GET THE BEST DEALS IN YOUR INBOX</h3>
                                                                                <!-- Begin MailChimp Signup Form -->
                                                                                <div id="mc_embed_signup">
                                                                                    <form action="#" method="post" name="" target="_blank" no="">
                                                                                        <div >
                                                                                            <input type="email" value="" name="EMAIL" class="email" placeholder="email address" required="">
                                                                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                                                            <div style="position: absolute; left: -5000px;">
                                                                                                <input type="text" name="b_4b4bbda55bb6deb367e6f52d9_6b32851a5b" tabindex="-1" value="">
                                                                                            </div>
                                                                                            <div class="clear">
                                                                                                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>

                                                                                <!--End mc_embed_signup-->
                                                                                <p>Don't worry we don't spam</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget buddypress widget">
                                                                        <div class="title">Groups</div>
                                                                        <div class="item-options" id="groups-list-options">
                                                                            <a href="#" >Newest</a>
                                                                            <span role="separator">|</span>
                                                                            <a href="#" class="selected">Active</a>
                                                                            <span role="separator">|</span>
                                                                            <a href="#" >Popular</a>
                                                                        </div>

                                                                        <ul id="groups-list" class="item-list">
                                                                            <li class="odd">
                                                                                <div class="item-avatar">
                                                                                    <a href="#" title="Green Food">
                                                                                        <img src="images/1a.jpg" alt=""/>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Green Food</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 1 day, 17 hours ago								</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="even">
                                                                                <div class="item-avatar">
                                                                                    <a href="#" title="Body Health">
                                                                                        <img src="images/2a.png" alt=""/></a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Body Health</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 1 day, 18 hours ago								</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="odd">
                                                                                <div class="item-avatar">
                                                                                    <a href="#">
                                                                                        <img src="images/3a.png" alt=""/></a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Bath &amp; Wash</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 3 days, 20 hours ago								</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="even">
                                                                                <div class="item-avatar">
                                                                                    <a href="#">
                                                                                        <img src="images/4a.png" alt=""/></a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Sunshine</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 4 days, 15 hours ago								</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="odd">
                                                                                <div class="item-avatar">
                                                                                    <a href="#" >
                                                                                        <img src="images/5a.jpg" alt=""/></a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Tooth for tooth</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 4 days, 15 hours ago
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                        <input type="hidden" name="" value="52a0d18451">
                                                                        <input type="hidden" name="_wp_http_referer" value="/">
                                                                        <input type="hidden" name="" value="5">

                                                                    </div>
                                                                </div>
                                                                <div id="menu5"class="tab-pane fade">
                                                                    <div class="wpsm_recent_posts_list" data-filterargs="{&quot;post_type&quot;:&quot;post&quot;,&quot;posts_per_page&quot;:6,&quot;orderby&quot;:&quot;meta_value_num&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;meta_key&quot;:&quot;post_hot_count&quot;,&quot;no_found_rows&quot;:1}" data-template="simplepostlist" data-innerargs="{&quot;nometa&quot;:&quot;1&quot;}">
                                                                        <div class="item-small-news" style="display: block;">
                                                                            <h3><span class="temperatur">410<span class="gradus_icon"></span></span> <a href="#">LUMBABACK best sport bandage deal</a>

                                                                                <span class="simple_price_count">
                                                                                    $107 			 		</span>

                                                                            </h3>
                                                                            <div class="post-meta">
                                                                                <span class="date_ago">
                                                                                    6 months ago </span>
                                                                                <span ><i class="fa fa-commenting"></i> 6</span>
                                                                            </div>

                                                                        </div>
                                                                        <div class="item-small-news" style="display: block;">
                                                                            <h3><span class="temperatur">271<span class="gradus_icon"></span></span> <a href="#">Calcium with Magnesium, Natural Orange Flavor</a>

                                                                                <span class="simple_price_count">
                                                                                    $15.36
                                                                                    <del>$19.95</del>
                                                                                </span>

                                                                            </h3>
                                                                            <div class="post-meta">
                                                                                <span class="date_ago">
                                                                                    6 months ago </span>
                                                                                <span ><i class="fa fa-commenting"></i> 6</span>
                                                                            </div>

                                                                        </div>
                                                                        <div class="item-small-news" style="display: block;">
                                                                            <h3><span class="temperatur">240
                                                                                    <span class="gradus_icon">

                                                                                    </span>

                                                                                </span> <a href="#">Apple Pectin, 700 mg</a>

                                                                                <span class="simple_price_count">
                                                                                    $10.18 			 <del>$15.99</del> 		</span>

                                                                            </h3>
                                                                            <div class="post-meta">
                                                                                <span class="date_ago">
                                                                                    6 months ago
                                                                                </span>
                                                                                <span ><i class="fa fa-commenting"></i> 1
                                                                                </span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="widget widget_text">
                                                                        <div >
                                                                            <div class="rehub_chimp centered_form">
                                                                                <h3>GET THE BEST DEALS IN YOUR INBOX</h3>
                                                                                <!-- Begin MailChimp Signup Form -->
                                                                                <div id="mc_embed_signup">
                                                                                    <form action="#" method="post" name="" target="_blank" no="">
                                                                                        <div >
                                                                                            <input type="email" value="" name="EMAIL" class="email" placeholder="email address" required="">
                                                                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                                                            <div style="position: absolute; left: -5000px;">
                                                                                                <input type="text" name="b_4b4bbda55bb6deb367e6f52d9_6b32851a5b" tabindex="-1" value="">
                                                                                            </div>
                                                                                            <div class="clear">
                                                                                                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>

                                                                                <!--End mc_embed_signup-->
                                                                                <p>Don't worry we don't spam</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget buddypress widget">
                                                                        <div class="title">Groups</div>
                                                                        <div class="item-options" id="groups-list-options">
                                                                            <a href="#" >Newest</a>
                                                                            <span role="separator">|</span>
                                                                            <a href="#" class="selected">Active</a>
                                                                            <span role="separator">|</span>
                                                                            <a href="#" >Popular</a>
                                                                        </div>

                                                                        <ul id="groups-list" class="item-list">
                                                                            <li class="odd">
                                                                                <div class="item-avatar">
                                                                                    <a href="#" title="Green Food">
                                                                                        <img src="images/1a.jpg" alt=""/>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Green Food</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 1 day, 17 hours ago								</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="even">
                                                                                <div class="item-avatar">
                                                                                    <a href="#" title="Body Health">
                                                                                        <img src="images/2a.png" alt=""/></a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Body Health</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 1 day, 18 hours ago								</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="odd">
                                                                                <div class="item-avatar">
                                                                                    <a href="#">
                                                                                        <img src="images/3a.png" alt=""/></a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Bath &amp; Wash</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 3 days, 20 hours ago								</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="even">
                                                                                <div class="item-avatar">
                                                                                    <a href="#">
                                                                                        <img src="images/4a.png" alt=""/></a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Sunshine</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 4 days, 15 hours ago								</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="odd">
                                                                                <div class="item-avatar">
                                                                                    <a href="#" >
                                                                                        <img src="images/5a.jpg" alt=""/></a>
                                                                                </div>

                                                                                <div class="item">
                                                                                    <div ><a href="#">Tooth for tooth</a></div>
                                                                                    <div >
                                                                                        <span >
                                                                                            active 4 days, 15 hours ago
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                        <input type="hidden" name="" value="52a0d18451">
                                                                        <input type="hidden" name="_wp_http_referer" value="/">
                                                                        <input type="hidden" name="" value="5">

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="clearfix"></div>

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
        </div>










        <!-------------------------------------------footer ------------------------------------->
        <div class="type_a_4">
            <div class="footer-bottom dark_style">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="footer_widget">
                                <div class="widget"><div class="title">About Recash</div>
                                    <div>
                                        <p>Recash is modern community deals theme based on Rehub theme. It has support for BuddyPress, MyCred, has built in frontend submit plugin, user badges, ranks, clean, modern design and optimized for deals and coupons community websites</p>

                                        <p><a href="#">Contact Us</a> | <a href="#">Privacy Policy </a></p></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="footer_widget">
                                <div class="widget widget_nav_menu"><div class="title">Links</div><div ><ul class="menu"><li ><a href="#">About</a></li>
                                            <li ><a href="#">Privacy Policy</a></li>
                                            <li ><a href="#">Tutorials</a></li>
                                            <li ><a href="#">Description</a></li>
                                        </ul></div></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="footer_widget last">
                                <div class="widget last"><div class="title">Search</div><form role="search" method="get" action="#">
                                        <input type="text" name="s" placeholder="Search" data-posttype="post">
                                        <input type="hidden" name="post_type" value="post"> 	<button type="submit" ><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <footer id="theme_footer" class="dark_style">
                <div class="container">
                    <div class="left">
                        <div class="f_text">2016 Wpsoul Design. All rights reserved.</div>
                    </div>
                </div>
            </footer>
        </div>

        <div class="back">
            <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
        </div>
    </body ></html>
