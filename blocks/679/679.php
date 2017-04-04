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
        $less->compileFile('less/679.less', 'css/679.css');
        ?>

        <link href="css/679.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="tem-676">
            <header id="main_header" style="text-align: center">
                <div class="container mod">
                    <div class="row">
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
                                <menu id="re_menu_near_logo" >
                                    <ul class="menu" >
                                        <li ><a href="#"><i class="fa fa-sitemap"></i> Groups</a></li>
                                        <li ><a href="#"><i class="fa fa-users"></i> Members</a></li>
                                        <li><a href="#"><i class="fa fa-bolt"></i> Activity</a></li>
                                    </ul>
                                </menu>
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
                </div>
            </header>
        </div>
    </body>
</html>
