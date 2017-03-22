<!DOCTYPE html>
<?php
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./less/type-d-4.less', 'css/style.css');
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap 101 Template</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="mod_what_we_thing">
            <div class="container">
                <div class="row linerow">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <header class="sectionTitle clearfix">
                            <h3 class="tieudethink"><i class="fa fa-lightbulb-o icon-den"></i>
                                <strong>What We Think</strong></h3>
                        </header>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        
                        <div class="all">
                            <div id="endfalse" class="blocks">
                                <div class="showing">
                                    Showing
                                </div>
                                <div class="menu-left">
                                    <ul style="overflow: hidden;">
                                        <li style="display: inline-block; width: 40px;"><a class="active" href="#" data-filter="*">All</a></li>
                                        <li style="width: 85px;"><a href="#" data-filter=".category-inspiration">Inspiration</a></li>
                                        <li style="width: 53px;"><a href="#" data-filter=".category-media">Media</a></li>
                                        <li style="width: 53px;"><a href="#" data-filter=".category-music">Music</a></li>
                                        <li style="width: 55px;"><a href="#" data-filter=".category-paper">Paper</a></li>
                                        <li style="width: 59px;"><a href="#" data-filter=".category-words">Words</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <a href="#">
                <div class="row  lineconten">

                    <div class="col-xs hidden-xs col-sm-4 col-md-3 thoigian">
                        
                        <i>21st January 2013</i>
                        
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-5 tieudeicon">

                       
                            <i class="fa fa-image icon-anh"></i>
                            <strong>Example Post With Gallery</strong>
                        

                    </div>

                    <div class="col-xs hidden-xs col-sm hidden-sm col-md-2 conment">
                        <div class="media-1">
                            <i class="glyphicon glyphicon-comment"></i>
                            <p>8</p>
                        </div>
                    </div>
                   
                    <div class="col-xs hidden-xs col-sm-2 col-md-2 mide">
                        <div class="media-2"> 
                            <i class="glyphicon glyphicon-tag"></i>
                            <p>Media</p>
                        </div>
                    </div>

                </div>
                </a>
                <a href="#">
                <div class="row  lineconten">

                    <div class="col-xs hidden-xs col-sm-4 col-md-3 thoigian">
                        
                        <i>21st January 2013</i>
                        
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-5 tieudeicon">

                       
                            <i class="glyphicon glyphicon-play icon-anh"></i>
                            <strong>This Is Video Post</strong>
                        

                    </div>

                    <div class="col-xs hidden-xs col-sm hidden-sm col-md-2 conment">
                        <div class="media-1">
                            <i class="glyphicon glyphicon-comment"></i>
                            <p>8</p>
                        </div>
                    </div>
                   
                    <div class="col-xs hidden-xs col-sm-2 col-md-2 mide">
                        <div class="media-2"> 
                            <i class="glyphicon glyphicon-tag"></i>
                            <p>Media</p>
                        </div>
                    </div>

                </div>
                </a>
                <a href="#">
                <div class="row  lineconten">

                    <div class="col-xs hidden-xs col-sm-4 col-md-3 thoigian">
                        
                        <i>21st January 2013</i>
                        
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-5 tieudeicon">

                       
                            <i class="fa fa-volume-up icon-anh"></i>
                            <strong>Post With Audio Player</strong>
                        

                    </div>

                    <div class="col-xs hidden-xs col-sm hidden-sm col-md-2 conment">
                        <div class="media-1">
                            <i class="glyphicon glyphicon-comment"></i>
                            <p>8</p>
                        </div>
                    </div>
                   
                    <div class="col-xs hidden-xs col-sm-2 col-md-2 mide">
                        <div class="media-2"> 
                            <i class="glyphicon glyphicon-tag"></i>
                            <p>Media</p>
                        </div>
                    </div>

                </div>
                </a>
                <a href="#">
                <div class="row  lineconten">

                    <div class="col-xs hidden-xs col-sm-4 col-md-3 thoigian">
                        
                        <i>21st January 2013</i>
                        
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-5 tieudeicon">

                       
                            <i class="fa fa-quote-left icon-anh"></i>
                            <strong>And This is Quote</strong>
                        

                    </div>

                    <div class="col-xs hidden-xs col-sm hidden-sm col-md-2 conment">
                        <div class="media-1">
                            <i class="glyphicon glyphicon-comment"></i>
                            <p>8</p>
                        </div>
                    </div>
                   
                    <div class="col-xs hidden-xs col-sm-2 col-md-2 mide">
                        <div class="media-2"> 
                            <i class="glyphicon glyphicon-tag"></i>
                            <p>Media</p>
                        </div>
                    </div>

                </div>
                </a>                
                <a href="">
                    <div class="row loadmoreposts">
                        <div class="col-xs-12 col-sm-12 col-md-12 loadmore">
                           
                                <span>
                                <i class="fa fa-plus"></i>
                                Load More Posts
                                <i class="fa fa-sort-desc desc"></i>
                                </span>
                            
                        </div>
                </div>
                </a>

            </div>
        </div>
<script src="js/javascript.js" type="text/javascript"></script>
    </body>
</html>
