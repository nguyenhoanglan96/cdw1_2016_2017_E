<?php
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./less/type-d-8.less', 'css/style.css');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>

        <script src="js/javascript.js" type="text/javascript"></script>
        
      
    </head>

    <body>
       <div class="mod_Crowd">
     <div class="container">
                <div class="row pageTitle">
                   

				<h1 class="title">Crowd Funding – Project #4</h1>
				
					<a href="#" target="_self">Custom link to a related page →</a>
                </div>

                <div class="row">
                    
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="item">
                                    <h1>I’m the other awesome project. Give me your money!</h1>
                                </div>
                                <hr class="line-tottom">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12 videos">

                                <video src="images/logo.mp4 " controls="controls" poster=" images/imgvideo.JPG " width="101.5%" />
                                
                                <div class="mejs-overlay-button"></div>

                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-3">
                        
                            <div class="miniF">
                               
                                    
                                        <h2 class="product-name"><a href="#"><strong>Last but not least</strong></a></h2>
                                        <div class="progress-wrapper">
                                            <div class="progress-percentage" style="text-indent: 0px;"><p>100%</p>
                                                <div class="circles full">
                                                    <span class="pieBack">

                                                    </span><canvas class="pieFront" width="56" height="56">

                                                    </canvas>
                                                </div>
                                            </div>

                                            <!-- end progress bar --> 
                                            <span class="helper h1">FUNDED</span></div>
                                        <!-- end progress wrapper --> 
                                   

                                    <!-- end pledge -->

                                    <div class="wrap1 clearfix">
                                        <div class="c-holder c1">
                                            <span style="clear:both;">$5,000 </span>
                                            <span class="helper">RAISED</span></div>
                                        <div class="c-holder c2">
                                            <span style="clear:both;">$5,000 </span>
                                            <span class="helper">GOAL</span>
                                        </div>
                                        <div class="c-holder c1"><span style="clear:both;">1</span>
                                            <span class="helper">PLEDGERS</span></div>
                                        <div class="c-holder c2"><div style="clear:both;">11/12/17</div>
                                            <span class="helper">END DATE</span></div>
                                    </div>
                                
                            </div>
                                    <div class="supportnow">
                                        <a href="#"><p>SUPPORT NOW</p></a>
                                    </div>
                                    <div class="row leftheader">
                                        <h1>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h1>
                                        <div class="word">
                                            <div class="share">
                                                Share what you wish:
                                            </div>
                                            <div class="sed">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</div>
                                        </div>
                                    </div>

                                
                            </div>
                        </div>

                    </div>      
</div> 
	</body>
</html>