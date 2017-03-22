<?php
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./less/type-d-5.less', 'css/style.css');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>

        <script src="js/javascript.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
		<div class ="our-clients">
         <div class="container">
                <div class="row linerow">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <header class="sectionTitle clearfix">
                            <h3 class="tieudethink"><i class="glyphicon glyphicon-user icon-den"></i>
                                <strong>OUR CLIENTS</strong></h3>
                        </header>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="wpb_wrapper">
                                <img src="images/logos.png" width="100%">
                            </div> 
                        </div>
                </div>
            </div>
			</div>
    </body>
</html>