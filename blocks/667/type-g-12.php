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
        $less->compileFile('less/type-g-12.less', 'css/type-g-12.css');
        ?>
        <link href="css/type-g-12.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-g-12">  
            <div class="container">
                <div class="row">
                    <div class="footer-primary-container section-container">
                        <div class="footer-primary footer container">
                            <div class="inner-container">


                                <div class="clearer">
                                    <div class="grid12-12">	<div class="std"><div class="grid12-3">
                                                <div class="collapsible mobile-collapsible">

                                                    <h6 class="block-title heading">About Ultimo</h6>
                                                    <div class="block-content">
                                                        <img src="images/img/logo-small.png" alt="Ultimo Theme" style="padding-bottom:10px;">
                                                        <div class="feature first last">
                                                            <p>Ultimo is a premium Magento theme with advanced admin module. It’s extremely customizable, easy to use and fully responsive.</p>
                                                            <h5><a class="go" href="#">Buy this theme</a></h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="grid12-3">
                                                <div class="collapsible mobile-collapsible">

                                                    <h6 class="block-title heading">Theme Features</h6>
                                                    <div class="block-content">
                                                        <ul class="bullet">
                                                            <li><a href="#">Theme Features</a></li>
                                                            <li><a href="#/">Typography</a></li>
                                                            <li><a href="#">Some Sample Link</a></li>
                                                            <li><a href="#">Meat Our Best Partners</a></li>
                                                            <li><a href="#">Latest Work Samples</a></li>
                                                            <li><a href="#">Our Other Projects</a></li>
                                                            <li><a href="#">One Click To Join Us</a></li>
                                                            <li><a href="#">Follow Us On Twitter</a></li>
                                                            <li><a href="#">Magento Themes</a></li>
                                                            <li><a href="#">Ecommerce</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="grid12-3">
                                                <div class="collapsible mobile-collapsible">

                                                    <h6 class="block-title heading">Key Features</h6>
                                                    <div class="block-content">
                                                        <div class="feature feature-icon-hover indent first">
                                                            <span class="ib ic ic-char">1</span>
                                                            <p class="no-margin">Unlimited colors, hundreds of customizable elements</p>
                                                        </div>
                                                        <div class="feature feature-icon-hover indent">
                                                            <span class="ib ic ic-char">2</span>
                                                            <p class="no-margin ">Customizable responsive layout based on fluid grid</p>
                                                        </div>
                                                        <div class="feature feature-icon-hover indent">
                                                            <span class="ib ic ic-char">3</span>
                                                            <p class="no-margin ">50+ placeholders to display custom content</p>
                                                        </div>
                                                        <div class="feature feature-icon-hover indent">
                                                            <span class="ib ic ic-char">4</span>
                                                            <p class="no-margin ">Create your custom sub-themes (variants)</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="grid12-3">
                                                <div class="collapsible mobile-collapsible">

                                                    <h6 class="block-title heading">Company Info</h6>
                                                    <div class="block-content">
                                                        <div class="feature feature-icon-hover indent first">
                                                            <span class="ib ic ic-phone ic-lg"> 
                                                                <i class="fa fa-phone"></i>
                                                            </span>
                                                            <p class="no-margin ">Call Us +001 555 801<br>Fax +001 555 802</p>
                                                        </div>
                                                        <div class="feature feature-icon-hover indent">
                                                            <span class="ib ic ic-mobile ic-lg">
                                                                 <i class="fa fa-mobile"></i>
                                                            </span>
                                                            <p class="no-margin ">+77 123 1234<br>+42 98 9876</p>
                                                        </div>
                                                        <div class="feature feature-icon-hover indent">
                                                            <span class="ib ic ic-letter ic-lg">
                                                                 <i class="fa fa-yahoo"></i>
                                                            </span>
                                                            <p class="no-margin ">boss@example.com<br>me@example.com</p>
                                                        </div>
                                                        <div class="feature feature-icon-hover indent last">
                                                            <span class="ib ic ic-skype ic-lg">
                                                                 <i class="fa fa-skype"></i>
                                                            </span>
                                                            <p class="no-margin ">Skype: samplelogin<br>skype-support</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>				
                                </div> <!-- end: footer-primary section -->

                                <div class="footer-primary-bottom grid12-12">
                                    <div class="footer-primary-bottom-spacing clearer">

                                        <div class="item item-left clearer block_footer_primary_bottom_left">
                                            <div class="social-links ib-wrapper--square">
                                                <a class="first" href="#" title="Follow Infortis on Twitter">
                                                    <span class="ib ib-hover ic ic-lg ic-twitter">
                                                        <i class="fa fa-twitter"></i>
                                                    </span>
                                                </a>
                                                <a href="#" title="Join us on Facebook">
                                                    <span class="ib ib-hover ic ic-lg ic-facebook">
                                                        <i class="fa fa-facebook"></i>
                                                    </span>
                                                </a>
                                                <a href="#" title="Join us on Google Plus">
                                                    <span class="ib ib-hover ic ic-lg ic-googleplus">
                                                        <i class="fa fa-google-plus"></i>
                                                    </span>
                                                </a>
                                                <a href="#" title="Youtube">
                                                    <span class="ib ib-hover ic ic-lg ic-youtube">
                                                        <i class="fa fa-youtube-play"></i>
                                                    </span>
                                                </a>
                                                <a href="#" title="Vimeo">
                                                    <span class="ib ib-hover ic ic-lg ic-vimeo">
                                                        <i class="fa fa-vimeo"></i>
                                                    </span>
                                                </a>
                                                <a href="#" title="Instagram">
                                                    <span class="ib ib-hover ic ic-lg ic-instagram">
                                                        <i class="fa fa-instagram"></i>
                                                    </span>
                                                </a>
                                                <a href="#" title="Pinterest">
                                                    <span class="ib ib-hover ic ic-lg ic-pinterest">
                                                        <i class="fa fa-pinterest"></i>
                                                    </span>
                                                </a>
                                                <a href="#" title="Linked in">
                                                    <span class="ib ib-hover ic ic-lg ic-linkedin">
                                                        <i class="fa fa-linkedin"></i>
                                                    </span>
                                                </a>
                                                <a href="#" title="VKontakte">
                                                    <span class="ib ib-hover ic ic-lg ic-vk">
                                                        <i class="fa fa-vk"></i>
                                                    </span>
                                                </a>
                                                <a href="#" title="Renren">
                                                    <span class="ib ib-hover ic ic-lg ic-renren">
                                                        <i class="fa fa-renren"></i>
                                                    </span>
                                                </a>
                                            </div>							
                                        </div>


                                        <div class="item item-right newsletter-wrapper clearer">
                                            <div id="subscribe-form" class="clearer">
                                                <form action="#" method="post" id="newsletter-validate-detail">
                                                    <div>
                                                        <label for="newsletter">Newsletter</label>
                                                        <div class="input-box">
                                                            <input type="text" name="email" id="newsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email">
                                                        </div>
                                                        <button type="submit" title="Subscribe" class="button btn-inline">
                                                            <span>
                                                                <span>Subscribe</span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <script type="text/javascript">
                                                //<![CDATA[
                                                var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
                                                new Varien.searchForm('newsletter-validate-detail', 'newsletter', 'Enter your email address');
                                                //]]>
                                            </script>
                                        </div>

                                    </div> 
                                </div> <!-- end: footer-primary-bottom -->

                            </div> <!-- end: inner-container -->
                        </div> <!-- end: footer-primary -->
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>

</html>