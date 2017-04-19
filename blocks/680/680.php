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
        $less->compileFile('less/680.less', 'css/680.css');
        ?>
        <link href="css/680.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-c-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <article id="free" > <img alt="" src="images/header/freeshipping-grey-31.png" width="80%" height="100%">
                        </article> 
                    </div>
                    <div class="col-md-4">
                        <h1>
                            <a href="#" title="Headers">
                                <img class="imlogo" src="images/header/logo-ess.png" alt="" width="50%" height="50%">
                            </a>
                        </h1>
                    </div>
                    <div class="col-md-4 navbar-right">
                        <div id="freelog">
                            <div class="col-sm-4">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        <i class="glyphicon glyphicon-user"></i> Sign In
                                    </a>
                                    <div class="dropdown-menu form-login" role="menu">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">
                                                <i class="glyphicon glyphicon-envelope"></i> Email address
                                            </label> 
                                            <input type="email" class="form-control" id="" placeholder="Enter email" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">
                                                <i class="glyphicon glyphicon-lock"></i> Password
                                            </label> 
                                            <input type="password" class="form-control" id="" placeholder="Password" />
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                                    </div>
                                </li>
                            </div>
                            <div class="col-sm-4">
                                <a class="glyphicon glyphicon-heart-empty" href="#"> Wishlist</a>
                            </div>
                            <a aria-haspopup="true" href="#" title="View your shopping cart">
                                <div class="col-sm-4 navbar-right">
                                    <i class="glyphicon glyphicon-shopping-cart" href="#"> Bag</i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/scripts.js" type="text/javascript"></script>
    </body>
</html>