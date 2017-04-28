<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>38</title>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/38.less', 'css/38.css');
        ?>

        <link href="css/38.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-38">
            <div class="stack-container-wrapper">
                <div class="row">

                    <div class="header">
                        <div class="background-images">
                            <div class="bar bar-1 hidden-xs bar-transparent">
                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-1 col-sm-2 hidden-xs background">
                                            <div class="bar__module">
                                                <a href="#">
                                                    <img class="logo logo-1 img-dark" src="images/logo-dark.png" style="max-height: 1.85714286em;left: -40px;">
                                                    <img class="logo img-light" src="images/logo-light.png" style="max-height: 1.85714286em;">
                                                </a>
                                            </div>
                                            <!--end module-->
                                        </div>

                                        <div class="col-md-11 col-sm-12 text-right">
                                            <div class="bar__module">
                                                <ul class="menu-horizontal text-left">
                                                    <li class="dropdown">
                                                        <span class="dropdown__trigger">Home</span>
                                                    </li>
                                                    <li class="dropdown">
                                                        <span class="dropdown__trigger">Pages</span>
                                                    </li>
                                                    <li class="dropdown">
                                                        <span class="dropdown__trigger">Blog</span>
                                                    </li>
                                                    <li class="dropdown">
                                                        <span class="dropdown__trigger">Shop</span>
                                                    </li>
                                                    <li class="dropdown">
                                                        <span class="dropdown__trigger">Portfolio</span>
                                                    </li>
                                                    <li class="dropdown">
                                                        <span class="dropdown__trigger">Blocks</span>
                                                    </li>
                                                    <li class="dropdown">
                                                        <span class="dropdown__trigger">Elements</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="bar__module">
                                                <a class="btn btn-sm" href="#1">
                                                    <span class="btn-text">TRY BUILDER</span>
                                                </a>
                                                <a class="btn btn-sm btn-primary" href="#2">
                                                    <span class="btn-text">Buy Now</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-sm-9 col-md-7 col-text">
                                            <h1>
                                                Holistic Education for Tomorrow's Leaders
                                            </h1>
                                            <p class="lead">
                                                Stack offers a clean and contemporary look to suit a range of 
                                                purposes from corporate, tech startup, marketing site to digital storefront.
                                            </p>
                                            <div class="modal-instance block">
                                                <div class="video-play-icon video-play-icon-sm" data-modal-index="0">
                                                    <i class="fa fa-play" aria-hidden="true"></i>
                                                </div>
                                                <span style="color:#fff;">
                                                    <strong style="font-weight: 600;">2016 Alumni Wrapup</strong>&nbsp;&nbsp;&nbsp;104 Seconds</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                     
                    </div>

                    <div class="switchable">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img  class="img-responsive"src="images/1.jpg" style="height:400px; border-radius: 6px;"/>
                                </div>
                                <div class="col-md-5 col-sm-6" style="float: right; left: auto;">
                                    <h2>A unique approach to learning for tertiary education</h2>
                                    <p class="lead">
                                        Launching an attractive and scalable website quickly and affordably is 
                                        important for modern startups — Stack offers massive value without looking 
                                        'bargain-bin'.
                                    </p>
                                    <a href="#">Learn More »</a>
                                </div>

                                <div class="text1" style="padding-top: 7.42857143em;">
                                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                                        <h2>Find your course, and your calling.</h2>
                                        <p class="lead">
                                            Our vision is for strong and resilient students where all have adequate access to the support structures required to succeed. Browse courses below to find out more.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <form>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" name="keywords" placeholder="Keywords">
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <div class="input-select">
                                                    <select>
                                                        <option selected="" value="Default">Select An Option</option>
                                                        <option value="option1">Option 1</option>
                                                        <option value="option2">Option 2</option>
                                                        <option value="option3">Option 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <button type="submit" class="btn btn--primary type--uppercase">SEARCH</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="feature-11">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature-1 boxed boxed--border">
                                        <h5>Mechanical Engineering</h5>
                                        <p>
                                            Following BEM conventions for readability
                                        </p>
                                        <a href="#">
                                            Learn More
                                        </a>
                                    </div>
                                    <!--end feature-->
                                </div>
                                
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature feature-1 boxed boxed--border">
                                        <h5>Media &amp; Communications</h5>
                                        <p>
                                            Following BEM conventions for readability
                                        </p>
                                        <a href="#">
                                            Learn More
                                        </a>
                                    </div>
                                    <!--end feature-->
                                </div>
                                
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature feature-1 boxed boxed--border">
                                        <h5>Biomedical Engineering</h5>
                                        <p>
                                            Following BEM conventions for readability
                                        </p>
                                        <a href="#">
                                            Learn More
                                        </a>
                                    </div>
                                    <!--end feature-->
                                </div>
                                
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature feature-1 boxed boxed--border">
                                        <h5>Psychological Sciences</h5>
                                        <p>
                                            Following BEM conventions for readability
                                        </p>
                                        <a href="#">
                                            Learn More
                                        </a>
                                    </div>
                                    <!--end feature-->
                                </div>
                                
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature feature-1 boxed boxed--border">
                                        <h5>Masters of Teaching</h5>
                                        <p>
                                            Following BEM conventions for readability
                                        </p>
                                        <a href="#">
                                            Learn More
                                        </a>
                                    </div>
                                    <!--end feature-->
                                </div>
                                
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature feature-1 boxed boxed--border">
                                        <h5>Masters of Psychology</h5>
                                        <p>
                                            Following BEM conventions for readability
                                        </p>
                                        <a href="#">
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="switchable">
                        <div class="container">
                            <div class="row">

                                <div class="text1" style="padding-top: 7.42857143em;">
                                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                                        <h2>What makes us different?</h2>
                                        <p class="lead">
                                            Our vision is for strong and resilient students where all have adequate 
                                            access to the support structures required to succeed. Browse courses below 
                                            to find out more.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="switchable">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 col-sm-6">
                                    <ul style="min-height: 538px;">
                                        <li class="active">
                                            <div class="accordion__title">
                                                <span class="h5">Campus Life</span>
                                            </div>
                                            <div class="accordion__content">
                                                <p class="lead">
                                                    Stack follows the BEM naming convention that focusses on 
                                                    logical code readability that is reflected in both the HTML 
                                                    and CSS. Interactive elements such as accordions and tabs 
                                                    follow the same markup patterns making rapid development 
                                                    easier for developers and beginners alike.
                                                </p>
                                                <p class="lead">
                                                    Add to this the thoughtfully presented documentation, 
                                                    featuring code highlighting, snippets, class customizer 
                                                    explanation and you've got yourself one powerful value 
                                                    package.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="accordion__title">
                                                <span class="h5">Study Support</span>
                                            </div>
                                            <div class="accordion__content">
                                                <p class="lead">
                                                    Stack offers a clean and contemporary to suit a range of 
                                                    purposes from corporate, tech startup, marketing site to 
                                                    digital storefront. Elements have been designed to showcase 
                                                    content in a diverse yet consistent manner.
                                                </p>
                                                <p class="lead">
                                                    Multiple font and colour scheme options mean that 
                                                    dramatically altering the look of your site is just clicks 
                                                    away — Customizing your site in the included Variant Page 
                                                    Builder makes experimenting with styles and content 
                                                    arrangements dead simple.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="accordion__title">
                                                <span class="h5">Qualification</span>
                                            </div>
                                            <div class="accordion__content">
                                                <p class="lead">
                                                    Medium Rare is an elite author known for offering 
                                                    high-quality, high-value products backed by timely and 
                                                    personable support. Recognised and awarded by Envato on 
                                                    multiple occasions for producing consistently outstanding 
                                                    products, it's no wonder over 20,000 customers enjoy using 
                                                    Medium Rare templates.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" style="float: right; left: auto;">
                                    <img  class="img-responsive"src="images/education-4.jpg" style="box-shadow: 0 23px 40px rgba(0, 0, 0, 0.2);height:600px; border-radius: 6px;width: 100%;"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="unpad">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#" class="block">
                                <div class="feature boxed text-center">
                                    <div class="image-holder" style="background: url(images/education-5.jpg); opacity: 1;">
                                        <img alt="background" src="images/education-5.jpg">
                                    </div>
                                    <h4 class="pos-vertical-center">Future Students</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#" class="block">
                                <div class="feature boxed text-center">
                                    <div class="image-holder" style="background: url(images/education-6.jpg); opacity: 1;">
                                        <img alt="background" src="images/education-6.jpg">
                                    </div>
                                    <h4 class="pos-vertical-center">Current Students</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <a href="#" class="block">
                                <div class="feature boxed text-center imagebg">
                                    <div class="image-holder" style="background: url(images/education-7.jpg); opacity: 1;">
                                        <img alt="background" src="images/education-7.jpg">
                                    </div>
                                    <h4 class="pos-vertical-center">Alumni</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="footer">
                        <div class="vc_row vc_custom_1436786731050">
                            <div class="container">
                                <div class="tp-investor-relation col-md-3 col-sm-3">
                                    <div class="wpb_text_column wpb_content_element address">
                                        <h2 style="color: #000">COMPANY</h2>
                                        <ul>
                                            <li>About Company</li>
                                            <li>Our Team</li>
                                            <li>Locations</li>
                                            <li>History</li>
                                            <li>Work With Us</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tp-investor-relation col-md-3 col-sm-3">
                                    <div class="wpb_text_column wpb_content_element address">
                                        <h2 style="color: #000">DEVELOPERS</h2>
                                        <ul>
                                            <li>Developer Center</li>
                                            <li>API Reference</li>
                                            <li>Downloads</li>
                                            <li>Tools</li>
                                            <li>Developer Blog</li>
                                            <li>Developer Forums</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tp-investor-relation col-md-3 col-sm-3">
                                    <div class="wpb_text_column wpb_content_element address">
                                        <h2 style="color: #000">SUPPORT</h2>
                                        <ul>
                                            <li>Help Center</li>
                                            <li>Live Chat</li>
                                            <li>Downloads</li>
                                            <li>Press Kit</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tp-investor-relation col-md-3 col-sm-3">
                                    <div class="wpb_text_column wpb_content_element address">
                                        <h2 style="color: #000">LOCATIONS</h2>
                                        <ul>
                                            <li>Melbourne</li>
                                            <li> London</li>
                                            <li>New York</li>
                                            <li>San Francisco</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="vc_row tiny-footer vc_custom_1436839546058">
                            <div class="container">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="wpb_text_column wpb_content_element">
                                        <div class="col-sm-6">
                                            <span >©<span >2017</span> Stack Inc.</span>
                                            <a href="#1">Privacy Policy</a>
                                            <a href="#2">Legal</a>
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-md-6 col-sm-6 col-xs-6">
                                    <ul class="social-icon-ft pull-right">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google-plus-square"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-rss-square"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
