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
        $less->compileFile('less/type-g-14.less', 'css/type-g-14.css');
        ?>
        <link href="css/type-g-14.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-g-14">  
            <div class="row">

                <div class="footer-bottom-container section-container">
                    <div class="footer-bottom footer container">
                        <div class="inner-container">

                            <div class="clearer">

                                <div class="item item-left">
                                    <div class="footer-copyright">Copyright © 2012-2013 Premium Magento Themes by Infortis. All Rights Reserved.<br>
                                        This is a demo store. Any orders placed through this store will not be honored or fulfilled.</div>
                                </div>

                                <div class="item item-right block_footer_payment">
                                    <img src="images/img/payment.gif" alt="Payment methods" title="Sample image with payment methods">
                                </div>

                                <div class="item item-right"><div class="store-switcher">
                                        <label for="select-store">Select Store:</label>
                                        <select id="select-store" title="Select Store" onchange="location.href = this.value">
                                            <option value="" selected="selected">Main Demo</option>
                                            <option value="#">Store 2</option>
                                            <option value="#">Store 3</option>
                                            <option value="#">Store 4</option>
                                            <option value="#">Store 5</option>
                                            <option value="#">Store 6</option>
                                            <option value="#">Store 7</option>
                                            <option value="#">Store 8</option>
                                        </select>
                                    </div>
                                </div>

                            </div> <!-- end: footer-bottom section -->

                        </div> <!-- end: inner-container -->
                    </div> <!-- end: footer-bottom -->
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>

</html>