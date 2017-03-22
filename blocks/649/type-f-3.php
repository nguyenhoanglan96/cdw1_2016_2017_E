<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="css/type-3.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-3.less', 'css/type-3.css');
        ?>
     
        <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-3">
             <div class="container"> 
                   <div class="row">
                        <div class="col-md-3 col-sm-6">
                        <h3>Flexibly Templates</h3>
                <p>
                <span class="dropcap2">1</span>
                The theme uses a flexible template system that enables you to create stunning pages out of the box with no coding knowledge at all
                </p>
            </div>
                        <div class="col-md-3 col-sm-6 ">
            <h3>Unlimited Skins</h3>
            <p>
                <span class="dropcap3">2</span>
                The theme comes with several predefined skin options but also utilizes a color and background image switcher, a font-switch for headings and several other layout options.
            </p>
        </div>
                        <div class="col-md-3 col-sm-6 ">
            <h3>Content Importing</h3>
            <p>
                <span class="dropcap3">3</span>
                You can now setup a wordpress installation that looks like this demo with just a single click of your mouse. Amazing to get started and accustomed to the theme.
            </p>
        </div>
                        <div class="col-md-3 col-sm-6 ">
            <h3>ECommerce Ready</h3>
            <p>
                <span class="dropcap3">4</span>
                The theme comes with an eCommerce plugin (wooCommerce) so you can set up a shop within minutes. Create a full fledged online store or sell a few digital goods. Its up to you
            </p>
        </div>
                    </div>     
     
  
      <div class="hr hr_text">
          <div class="custom_hr_text">
              Latest Products
              
          </div>
             <hr> 
      </div>    
      
        
     <div class="product">
             <div class="row">
                <div class="col-md-12">
                    <div class="carousel carousel-showsixmoveone slide" id="carousel123">
        <div class="carousel-inner">
          
          <div class="item active">
 
            <div class="col-sm-4 col-md-2">

                <a href="#">
                    <img src="images/variable.png">
                    <p class="text">Select Options</p>
                    <p class="text">Show Details</p>
                </a>
                    
                    <h4 >Variable Product (preview Image opens in lightbox)</h4>
        <span class="price"><span class="amount">$11.00</span>–<span class="amount">$1,234.00</span></span>
            </div>
          </div>
          <div class="item">
              <div class=" col-sm-4 col-md-2"><a href="#">
                      <img src="images/This is a grouped Product.png">
                        <p class="text">View Products</p>
                        <p class="text">Show Details</p>
                  </a>
                      
                <h4 >This is a grouped Product</h4>
        <span class="price"><span class="amount">$90.00</span>–<span class="amount">$799.00</span></span>
            </div>
          </div>
          <div class="item">
              <div class=" col-sm-4 col-md-2">
                  <a href="#">
                      <img src="images/Sweater.png" >
                      <p class="text">Add to Cart</p>
                    <p class="text">Show Details</p>
                  </a>
               <h4 >Sweater (Striped)</h4>
        <span class="price"><span class="amount">$17.00</span></span>
            </div>
          </div>          
          <div class="item">
              <div class=" col-sm-4 col-md-2"><a href="#">
                      <img src="images/Spiral Ring.png" >
                      <p class="text">Add to Cart</p>
                    <p class="text">Show Details</p>
                  </a>
           <h4 ">Spiral Ring</h4>
        <span class="price"><del><span >$120.00</span></del> <ins><span >- $88.00</span></ins></span>
            </div>
          </div>
          <div class="item">
              <div class=" col-sm-4 col-md-2"><a href="#">
                      <img src="images/Simple Product without option.png" >
                       <p class="text">Add to Cart</p>
                    <p class="text">Show Details</p>
                  </a>
                <h4>Simple Product without Options (preview image gets zoomed on hover)</h4>
        <span class="price"><del><span >$25.00</span></del> <ins><span >- $21.00</span></ins></span>
            </div>
          </div>
          <div class="item">
              <div class=" col-sm-4 col-md-2"><a href="#">
                      <img src="images/Simple Download.png" >
                       <p class="text">Add to Cart</p>
                    <p class="text">Show Details</p>
                  </a>
                <h4 >Simple Downloadable Product</h4>
        <span class="price"><del><span >$45.00</span></del> <ins><span>- $33.00</span></ins></span>
            </div>
          </div>
          <div class="item">
              <div class=" col-sm-4 col-md-2"><a href="#">
                      <img src="images/Silver Tie.png" >
                       <p class="text">Add to Cart</p>
                    <p class="text">Show Details</p>
                  </a>
               <h4 class="">Silver Tie</h4>
        <span class="price"><del><span >$45.00</span></del> <ins><span>- $39.00</span></ins></span>
            </div>
          </div>
          <div class="item">
              <div class="col-sm-4 col-md-2"><a href="#">
                      <img src="images/Silver Ston Ring.png" >
                       <p class="text">Add to Cart</p>
                    <p class="text">Show Details</p>
                  </a>
               <h4 class="">Silver Stone Ring</h4>
        <span class="price"><span class="amount">$79.00</span></span>
            </div>
          </div>
          <div class="item">
              <div class=" col-sm-4 col-md-2"><a href="#">
                      <img src="images/Short.png" >
                       <p class="text">Add to Cart</p>
                    <p class="text">Show Details</p>
                  </a>
                <h4 class="">Shorts – Lorem ipsum dolor sit amet, consectetuer elit</h4>
        <span class="price"><span class="amount">$35.00</span></span>
            </div>
          </div>
          <div class="item">
              <div class=" col-sm-4 col-md-2"><a href="#">
                      <img src="images/Samsung 255.png" >
                       <p class="text">Add to Cart</p>
                        <p class="text">Show Details</p>
                  </a>
            <h4 class="">Samsung 255</h4>
        <span class="price"><span class="amount">$255.00</span></span>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel123" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#carousel123" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>
</div>
         
       </div>
     
      </div>
       
        <script src="js/scripts.js" type="text/javascript"></script>
    
    </body>
</html>