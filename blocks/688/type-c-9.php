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
        $less->compileFile('less/type-c-9.less', 'css/type-c-9.css');
        ?>
        <link href="css/type-c-9.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-c-9">
            <div class="container">
                <div class="row">
                    <div class="carousel article-slide" id="article-photo-carousel">
                        <div class="col-sm-5">
                            <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                                <a href="images/detail/hipster7.jpg">
                                    <img src="images/detail/hipster7.jpg" alt="" width="100%" height="100%" />
                                </a>
                            </div>
                            <ul class="thumbnails">
                                <li>
                                    <a href="images/detail/hipster7.jpg" data-standard="images/detail/hipster7.jpg">
                                        <img src="images/detail/hipster7-90x90.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="images/detail/hipster8.jpg" data-standard="images/detail/hipster8.jpg">
                                        <img src="images/detail/hipster8-90x90.jpg" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-title">Jackard Dress</div>
                        <div class="product-price">$49.00</div>
                        <div class="product-desc">Nunc nec euismod ipsum. Aenean porta dignissim mi, euismod eleifend nec ultricies erat sit turpis condimentum.</div>
                        <div class="variations">
                            <label>COLOR</label>
                            <a class="btn btn-default btn-select">
                                <input type="hidden" id="" name="" value="" />
                                <span class="btn-select-value">Select an Item</span>
                                <span class='btn-select-arrow glyphicon glyphicon-chevron-down'></span>
                                <ul>
                                    <li class="selected">Blue</li>
                                    <li>Green</li>
                                    <li>Orange</li>
                                    <li>White</li>
                                </ul>
                            </a>
                        </div>
                        <div class="variations">
                            <label1>SIZE  </label1>
                            <a class="btn btn-default btn-select">
                                <input type="hidden" id="" name="" value="" />
                                <span class="btn-select-value">Select an Item</span>
                                <span class='btn-select-arrow glyphicon glyphicon-chevron-down'></span>
                                <ul>
                                    <li class="selected">M</li>
                                    <li>L</li>
                                    <li>XL</li>
                                    <li>XXL</li>
                                </ul>
                            </a>
                            <div class="product-stock">In Stock</div>
                            <div class="spin">
                                <input type="text" name="demo1" id="demo1" class="form-control" value="1" min="1" max="1000">
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">
                                    Add to cart 
                                </button>
                            </div>
                        </div>
                        <div class="wishlist">
                            <span class="glyphicon glyphicon-plus-sign"></span>
                            <a href="#">Add to Wishlist</a>
                        </div>
                        <hr>
                        <span>SKU: d30</span>
                        <hr>
                        <span>Categories: <a href="#">Dress,</a> <a href="#">Women</a></span>
                        <hr>
                        <span>Tags: <a href="#">dress,</a> <a href="#">flower</a></span>
                        <hr>
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        </ul>				
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <script src="js/easyzoom.js" type="text/javascript"></script>
        <script>
            $("input[name='demo1']").TouchSpin({
                min: 1,
                max: 100,
                initval: '',
                replacementval: '',
                decimals: 0,
                forcestepdivisibility: 'round',
                verticalbuttons: false,
                verticalupclass: 'glyphicon glyphicon-chevron-up',
                verticaldownclass: 'glyphicon glyphicon-chevron-down',
                boostat: 5,
                booster: true,
                maxboostedstep: 10,
                prefix_extraclass: '',
                postfix_extraclass: '',
                step: 1,
                stepinterval: 100,
                stepintervaldelay: 500,
                mousewheel: true,
                buttondown_class: 'btn btn-danger',
                buttonup_class: 'btn btn-success',
                buttondown_txt: '-',
                buttonup_txt: '+'
            });
        </script>
        <script>
            // Instantiate EasyZoom instances
            var $easyzoom = $('.easyzoom').easyZoom();
            // Setup thumbnails example
            var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');
            $('.thumbnails').on('click', 'a', function (e) {
                var $this = $(this);
                e.preventDefault();
                // Use EasyZoom's `swap` method
                api1.swap($this.data('standard'), $this.attr('href'));
            });
            // Setup toggles example
            var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');
            $('.toggle').on('click', function () {
                var $this = $(this);
                if ($this.data("active") === true) {
                    $this.text("Switch on").data("active", false);
                    api2.teardown();
                } else {
                    $this.text("Switch off").data("active", true);
                    api2._init();
                }
            });
        </script>
    </body>

</html>