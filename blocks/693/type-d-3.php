<!DOCTYPE html>
<?php
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./less/type-d-3.less', 'css/type-d-3.css');
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Latest Project</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/type-d-3.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>
    <div class="mod_latest">
        
<div class="container-fluid">
                <div class="container">
                    <div class="row header">
                        <div class="col-md-6 col-xs-6">
                            <header class="sectionTitle clearfix">
                            <h3 class="tieudethink"><i class="fa fa-pencil icon-den"></i>
                                <strong>Latest Projects</strong></h3>
                        </header>
                        </div>
                       
                            <div class="col-md-6 col-xs-6">
                                <div class="view">
                                    <a href="#">
                                        View all portfolio →
                                    </a>
                                </div>
                            </div>
                       
                    </div>

           <div class="row">
           
            <div class="col-md-3 col-sm-6">
                <a href="#">
                <div class="images">
                    <div class="img">
                        <img src="images/hinh1.jpg" width="100%" alt="WowWay"/>
                    </div>
                    <div class="caption">
                        <h3>WowWay</h3>
                        <span>WPtheme</span>
                    </div>
                </div>
                </a>
              
            </div>    
            <div class="col-md-3 col-sm-6">
                <a href="#">
                <div class="images">
                    <div class="img">
                        <img src="images/hinh1.jpg" width="100%" alt="WowWay"/>
                    </div>
                    <div class="caption">
                        <h3>WowWay</h3>
                        <span>WPtheme</span>
                    </div>
                </div>
                </a>
            </div>  
			<div class="col-md-3 col-sm-6">
                <a href="#">
                <div class="images">
                    <div class="img">
                        <img src="images/hinh1.jpg" width="100%" alt="WowWay"/>
                    </div>
                    <div class="caption">
                        <h3>WowWay</h3>
                        <span>WPtheme</span>
                    </div>
                </div>
                </a>
            </div>  
			<div class="col-md-3 col-sm-6">
                <a href="#">
                <div class="images">
                    <div class="img">
                        <img src="images/hinh1.jpg" width="100%" alt="WowWay"/>
                    </div>
                    <div class="caption">
                        <h3>WowWay</h3>
                        <span>WPtheme</span>
                    </div>
                </div>
                </a>
            </div>  
        </div>
                </div> 


            </div>
    </div>




</body>
</html>   
