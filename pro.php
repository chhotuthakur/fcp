<?php
ob_start();
include 'header.php';
include 'partials/_categories_img_nav.php';
?>




<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/disc.css">

  <!--jQuery library-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!--Latest compiled and minified JavaScript-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Navbar in Bootstrap</title>
</head>

<body>
  <!-- <nav class="navbar navbar-dark navbar-fixed-top" style="background-color:#2874f0;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#">Lifestyle Store</a>
                </div>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                  <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href=""><span class="glyphicon glyphicon-shopping-cart"></span> Cart<span class="badge"></span></a></li>
                        <li><a href=""><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                      <li><a href=""><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
   -->
  <div class="menu container-fluid text-center hidden-xs" style="position:relative;top:4em; padding-bottom:5px;">
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-2">
          <button class="btn btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color:#fff;">
            Men
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Footwear</a></li>
            <li><a href="#">Top wear</a></li>
            <li><a href="#">Sports wear</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>

        <div class="col-sm-2">
          <button class="btn btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color:#fff;">
            Women
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>

        <div class="col-sm-2">
          <button class="btn btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color:#fff;">
            Cameras
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>

        <div class="col-sm-2">
          <button class="btn btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color:#fff;">
            Electronics
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Mobiles</a></li>
            <li><a href="#">Laptops</a></li>
            <li><a href="#">Accessories</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>

        <div class="col-sm-2">
          <button class="btn btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color:#fff;">
            Books
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>

        <div class="col-sm-2">
          <button class="btn btn-block" aria-expanded="true" style="background-color:#fff;">Offer Zone</button>
        </div>


      </div>
    </div>
  </div>


  <!-- menu_end -->
  <section>
    <div class="container-fluid">
      <div class="row">
        <!-- Product picture -->
        <div class="col-sm-5">
          <div class="thumbnail">
            <img src="https://cdn.mobilephonesdirect.co.uk/images/handsets/480/apple/apple-iphone-x-silver.png" class="img-responsive" alt="">

            <div class="caption">
              <div class="row buttons">

                <button class="btn  col-sm-4 col-sm-offset-2 btn-lg" style="background-color:#ff9f00; color:#fff;font-size:1em;"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;ADD TO CART</button>


                <button class="btn col-sm-4 col-sm-offset-1 btn-lg" style="background-color:#fb641b; color:#fff;font-size:1em;"><i class="fa fa-bolt" style="font-size:1.2em;"></i> BUY NOW</button>
              </div>

            </div>
          </div>

        </div>

        <!-- Product Description -->
        <div class="col-sm-7 desc">

          <div>

            <ol class="breadcrumb col-sm-12" style="background-color:transparent;">
              <li><a href="#">Home</a></li>
              <li><a href="#">Electronics</a></li>
              <li><a href="">Mobiles</a></li>
              <li><a href="">iPhone</a></li>
              <li class="active">iPhone X</li>
            </ol>
           
            <h4 id="myHeading"></h4>

            <script>
              var urlParams = new URLSearchParams(window.location.search);
              var id = urlParams.get("id");
              var headingElement = document.getElementById("myHeading");
              headingElement.innerHTML = id; 
              console.log(id); // Output: 123 (or the value you sent from the sending page)
            </script>

            <div class="row">
              <div class="col-sm-2">
                <span class="label label-success">4.6 <span class="glyphicon glyphicon-star"></span></span>
              </div>

              <div class="col-sm-5">
                <strong>2,421 Ratings & Reviews</strong>
              </div>

            </div>

            <div>
              <h3>Rs 92,400</h3>
            </div>

            <div>

              <h5><span class="glyphicon glyphicon-calendar"></span> EMIs from <strong>Rs 3,070/month </strong><a href="">View Plans <i class="fa fa-chevron-right"></i></a></h5>

              <h5><span class="glyphicon glyphicon-tag"></span><strong> Bank Offer</strong> 5% Instant Discount on Visa Cards for First 3 Online Payments. <a href="">T&C</a></h5>

              <h5><span class="glyphicon glyphicon-tag"></span><strong> Bank Offer</strong> Extra 5% off* with Axis Bank Buzz Credit Card. <a href="">T&C</a></h5>

            </div>

            <br>
            <div class="row">
              <div class="col-sm-3">
                <a class="btn btn-default btn-block"><i class="fa fa-apple" style="font-size:25px;"></i></a>
              </div>
              <div class="col-sm-9">

                <h5>Brand Warranty of 1 Year <a href="">Know More</a></h5>
              </div>
            </div>
            <br>

            <div class="row">

              <div class="col-sm-6">
                <strong>Color</strong>
                <br><br>
                <button class="btn btn-default" style="width:50px;border:1px dashed #337ab7;"><img src="https://cdn.mobilephonesdirect.co.uk/images/handsets/480/apple/apple-iphone-x-silver.png" class="img-responsive" alt=""></button>
                <button class="btn btn-default" style="width:50px;"><img src="https://cdn.mobilephonesdirect.co.uk/images/handsets/apple/apple-iphone-x-space-grey.png" class="img-responsive" alt=""></button>
              </div>

              <div class="col-sm-6">
                <strong>Storage</strong>
                <br>
                <br>
                <button class="btn btn-default" style="color:#337ab7;border:1px dashed #337ab7;">64GB</button>
                <button class="btn btn-default">256GB</button>
              </div>

            </div>

            <br><br>

            <!--div class="row " id="delivery-location">
             <div class="col-xs-1">
               <strong>Delivery</strong>
             </div>
             
             <div class=" row col-xs-4" style="border:0px;border-bottom:1px solid #2874f0;position:relative; left:10%;" >
               <span class="glyphicon glyphicon-map-marker col-xs-1" style="color:#2874f0;padding-left:0;margin-left:0;"></span>
               <input type="text" placeholder="110091" style="border:0;padding-right:0;" class="col-xs-7">
               <a href=" " class="col-xs-1" style="padding-left:0;text-decoration:none;">Change</a>
             </div>
             
           </div>
           <div id="delivery-time" style="position:relative;left:15%;">
               <h5>Delivery in 3-4 days | <a href="" style="color:green;text-decoration:none;">Free</a></h5>
             </div-->

            <br><br>

            <div id="highlights">
              <strong class="col-xs-3">Highlights</strong>
              <ul class="col-xs-6">
                <li> 64GB ROM</li>
                <li> 5.8 inch Super Retina HD Display</li>
                <li> 12MP + 12MP Dual Rear Camera | 7MP Front Camera</li>
                <li> lithium-ion Battery</li>
                <li> A11 Bionic Chip with 64-bit Architecture, Neural Engine, Embedded M11 Motion Co-processor</li>
              </ul>
            </div>

          </div>
          <br><br>

          <div class="container col-xs-12" style="margin-top:50px;">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-sm-12">
                  <h3>PRODUCT DESCRIPTION</h3>
                  <p>Meet the iPhone X - the device that’s so smart that it responds to a tap, your voice, and even a glance. Elegantly designed with a large 14.73 cm (5.8) Super Retina screen and a durable front-and-back glass, this smartphone is designed to impress. What’s more, you can charge this iPhone wirelessly.</p>

                </div>

              </div>
              <hr>
              <div class="panel-body">
                <div class="col-sm-12">

                  <div class="col-sm-8">
                    <h3>14.73 cm Super Retina Screen</h3>
                    <p>Movies or games - with its Super Retina screen, you can enjoy an immersive-viewing experience that dazzles the eyes.</p>
                  </div>

                  <div class="col-sm-4">
                    <img src="https://rukminim1.flixcart.com/image/200/200/j9338nk0/mobile/g/u/h/apple-iphone-8-plus-mq8f2hn-a-original-imaeyym9hdbqaxhp.jpeg?q=90" class="img-responsive" alt="">
                  </div>

                </div>
              </div>
              <hr>
              <div class="panel-body">
                <div class="col-sm-12">

                  <div class="col-sm-4">
                    <img src="https://rukminim1.flixcart.com/image/200/200/j9338nk0/mobile/g/u/h/apple-iphone-8-plus-mq8f2hn-a-original-imaeyynjb4vxrdgd.jpeg?q=90" class="img-responsive" alt="">
                  </div>

                  <div class="col-sm-8">
                    <h3>
                      Innovative Display Technology</h3>
                    <p>
                      Innovative Display Technology
                      The display, with new techniques and technology, follows the curves and its elegantly rounded corners.</p>
                  </div>

                </div>

              </div>

              <div class="panel-footer">



                <h4><a href="" style="text-decoration:none;">View all features</a></h4>


              </div>

            </div>


            <!-- Specifications -->

            <div class="panel panel-default" id="specifications">
              <div class="panel-heading" style="background-color:#fff;">
                <h3>Specifications</h3>
              </div>

              <div class="panel-body">

                <h4>General</h4>

                <table class="table table-default">
                  <tbody>
                    <tr>
                      <td class="col-sm-4">In The Box</td>
                      <td class="col-sm-8">
                        Handset, EarPods with Lightning Connector, Lightning to 3.5 mm Headphone Jack Adapter, Lightning to USB Cable, USB Power Adapter, Documentation</td>
                    </tr>

                    <tr>
                      <td class="col-sm-4">Model Number</td>
                      <td class="col-sm-8">
                        MQA62HN/A</td>
                    </tr>

                    <tr>
                      <td class="col-sm-4">Model Name</td>
                      <td class="col-sm-8">iPhone X</td>
                    </tr>

                    <tr>
                      <td class="col-sm-4">Color</td>
                      <td class="col-sm-8">Silver</td>
                    </tr>

                    <tr>
                      <td class="col-sm-4">Browse Type</td>
                      <td class="col-sm-8">Smartphones</td>
                    </tr>

                  </tbody>

                </table>

              </div>

              <div class="panel-footer">
                <h4><a href="">Read More</a></h4>
              </div>
            </div>

          </div>

        </div>
      </div>
  </section>

  <br><br>
  <!-- FOOTER -->

  <footer class="page-footer container-fluid col-sm-12">
    <hr>
    <div class="container">
      <div class="col-sm-4">
        <h4>Help</h4>
        <ul class="list-unstyled quick-links">
          <li><a href="">Payments</a></li>

          <li><a href="">Shipping</a></li>

          <li><a href="">Cancellations & Return</a></li>

          <li><a href="">FAQ</a></li>

        </ul>
      </div>

      <div class="col-sm-4">
        <h4>Lifestyle Store</h4>
        <ul class="list-unstyled quick-links">
          <li><a href="">Contact Us</a></li>

          <li><a href="">About Us</a></li>
          <li><a href="">Careers</a></li>
          <li><a href="">Stories</a></li>
          <li><a href="">Sell With Us</a></li>
        </ul>
      </div>

      <div class="col-sm-4">
        <h4>MISC</h4>
        <ul class="list-unstyled quick-links">
          <li><a href="">Online Shopping</a></li>
          <li><a href="">Gift Card</a></li>
          <li><a href=""></a></li>Sitemap
        </ul>
      </div>

    </div>

    <div class="container-fluid col-lg-10 col-lg-offset-1">
      <div class="row">
        <hr>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-map-marker"></span>
          <h3 class="text-center">&nbsp;TRACK YOUR ORDER</h3>
        </div>

        <div class="col-sm-4">
          <span class="glyphicon glyphicon-refresh"></span>
          <h3 class="text-center">&nbsp;&nbsp;FREE & EASY RETURNS</h3>

        </div>

        <div class="col-sm-4">
          <span class="glyphicon glyphicon-remove-circle"></span>
          <h3 class="text-center">ONLINE CANCELLATIONS</h3>
        </div>
      </div>
    </div>
    <br>
    <!--/div>
    </div-->
    <div class="container-fluid" style="position:relative;top:6em;margin-bottom:20px;">

      <div class="col-sm-5">

        <h5 style="font-size:0.95em;">Policies: <a href="" style="text-decoration:none;"> Return Policy </a>|<a href="" style="text-decoration:none;"> Terms of use </a>|<a href="" style="text-decoration:none;"> Security </a>|<a href="" style="text-decoration:none;"> Privacy </a>|<a href="" style="text-decoration:none;"> Infringement</a></h5>

      </div>

      <div class="col-sm-3">
        <h5 style="font-size:0.95em;">&copy; LIFESTYLE STORE</h5>
      </div>

      <div class="col-sm-4 row contact">
        <h5 class="col-sm-5" style="font-size:0.95em;">Keep in touch</h5>
        <div class="col-sm-7">
          <button class="btn btn-default" style="border-radius:50%;width:40px;height:40px;"><i class="fa fa-facebook-f"></i></button>

          <button class="btn btn-default" style="border-radius:50%;width:40px;height:40px;"><i class="fa fa-twitter"></i></button>

          <button class="btn btn-default" style="border-radius:50%;width:40px;height:40px;"><i class="fa fa-google"></i></button>

          <button class="btn btn-default" style="border-radius:50%;width:40px;height:40px;"><i class="fa fa-youtube"></i></button>
        </div>
      </div>

    </div>
    <hr>
  </footer>

</body>

</html>