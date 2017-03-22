<?php
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./less/type-d-2.less', 'css/style.css');
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
        <div class="mod_content">
             <div class="container">
                <div class="row">
                    <div class=" col-md-3 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#" class="btncart">
                                    
                                        <i class="glyphicon glyphicon-pencil icon-barr" aria-hidden="true"></i>
                                   
                                   
                                         <p><strong>Unique & Clean</strong></p>
                                   
                                </a>
                                
                            </div>
                            
                            <div class="price">
                            Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenemodo ligula eget dolorenean massa
                        </div>
                        </div>

                    </div>
                    <div class=" col-md-3 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#" class="btncart">
                                    
                                        <i class="glyphicon glyphicon-phone icon-barr" aria-hidden="true"></i>
                                    
                                  
                                         <p><strong>Unique & Clean</strong></p>
                                   
                                </a>
                                
                            </div>
                            
                            <div class="price">
                            Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenemodo ligula eget dolorenean massa
                        </div>
                        </div>

                    </div>
                    <div class=" col-md-3 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#" class="btncart">
                                   
                                        <i class="fa fa-lightbulb-o icon-barr" aria-hidden="true"></i>
                                    
                                    
                                         <p><strong>Unique & Clean</strong></p>
                                    
                                </a>
                                
                            </div>
                            
                            <div class="price">
                            Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenemodo ligula eget dolorenean massa
                        </div>
                        </div>

                    </div>
                    <div class=" col-md-3 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#" class="btncart">
                                    
                                        <i class="fa fa-rocket icon-barr" aria-hidden="true"></i>
                                    
                                         <p><strong>Unique & Clean</strong></p>
                                   
                                </a>
                                
                            </div>
                            
                            <div class="price">
                            Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenemodo ligula eget dolorenean massa
                        </div>
                        </div>

                    </div>

                </div>

                <!-- end col-md-9 --> 
            
            </div>

        </div>  

    </body>
</html>