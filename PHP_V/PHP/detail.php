<!DOCTYPE html>
<html>

<head>
   <title>Details</title>
   <link rel="stylesheet" type="text/css" href="../css/detail.css">

   <!-- Latest compiled and minified CSS & JS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   <script src="//code.jquery.com/jquery.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>

   <?php
   $conn = mysqli_connect("localhost", "root", "", "fashion_mylishop");

   // Check connection
   if ($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
   }


   error_reporting(2);


   $id = $_GET['id'];
   mysqli_set_charset($conn, 'UTF8');
   $sql = "SELECT * FROM products WHERE id= '$id'";
   $rs = $conn->query($sql);
   while ($row = mysqli_fetch_assoc($rs)) {
   ?>


      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->

      <!DOCTYPE html>
      <html lang="en">

      <head>

         <meta name="viewport" content="width=device-width, initial-scale=1">

         <title>eCommerce Product Detail</title>
         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
         <style>
            body {
               font-family: 'open sans';
               overflow-x: hidden;
            }

            img {
               max-width: 100%;
            }

            .preview {
               display: -webkit-box;
               display: -webkit-flex;
               display: -ms-flexbox;
               display: flex;
               -webkit-box-orient: vertical;
               -webkit-box-direction: normal;
               -webkit-flex-direction: column;
               -ms-flex-direction: column;
               flex-direction: column;
            }

            @media screen and (max-width: 996px) {
               .preview {
                  margin-bottom: 20px;
               }
            }

            .preview-pic {
               -webkit-box-flex: 1;
               -webkit-flex-grow: 1;
               -ms-flex-positive: 1;
               flex-grow: 1;
            }

            .preview-thumbnail.nav-tabs {
               border: none;
               margin-top: 15px;
            }

            .preview-thumbnail.nav-tabs li {
               width: 18%;
               margin-right: 2.5%;
            }

            .preview-thumbnail.nav-tabs li img {
               max-width: 100%;
               display: block;
            }

            .preview-thumbnail.nav-tabs li a {
               padding: 0;
               margin: 0;
            }

            .preview-thumbnail.nav-tabs li:last-of-type {
               margin-right: 0;
            }

            .tab-content {
               overflow: hidden;
            }

            .tab-content img {
               width: 100%;
               -webkit-animation-name: opacity;
               animation-name: opacity;
               -webkit-animation-duration: .3s;
               animation-duration: .3s;
            }

            .card {
               margin-top: 50px;
               background: #eee;
               padding: 3em;
               line-height: 1.5em;
            }

            @media screen and (min-width: 997px) {
               .wrapper {
                  display: -webkit-box;
                  display: -webkit-flex;
                  display: -ms-flexbox;
                  display: flex;
               }
            }

            .details {
               display: -webkit-box;
               display: -webkit-flex;
               display: -ms-flexbox;
               display: flex;
               -webkit-box-orient: vertical;
               -webkit-box-direction: normal;
               -webkit-flex-direction: column;
               -ms-flex-direction: column;
               flex-direction: column;
            }

            .colors {
               -webkit-box-flex: 1;
               -webkit-flex-grow: 1;
               -ms-flex-positive: 1;
               flex-grow: 1;
            }

            .product-title,
            .price,
            .sizes,
            .colors {
               text-transform: UPPERCASE;
               font-weight: bold;
            }

            .checked,
            .price span {
               color: #ff9f1a;
            }

            .product-title,
            .rating,
            .product-description,
            .price,
            .vote,
            .sizes {
               margin-bottom: 15px;
            }

            .product-title {
               margin-top: 0;
            }

            .size {
               margin-right: 10px;
            }

            .size:first-of-type {
               margin-left: 40px;
            }

            .color {
               display: inline-block;
               vertical-align: middle;
               margin-right: 10px;
               height: 2em;
               width: 2em;
               border-radius: 2px;
            }

            .color:first-of-type {
               margin-left: 20px;
            }

            .add-to-cart,
            .like {
               background: #ff9f1a;
               padding: 1.2em 1.5em;
               border: none;
               text-transform: UPPERCASE;
               font-weight: bold;
               color: #fff;
               -webkit-transition: background .3s ease;
               transition: background .3s ease;
            }

            .add-to-cart:hover,
            .like:hover {
               background: #b36800;
               color: #fff;
            }

            .not-available {
               text-align: center;
               line-height: 2em;
            }

            .not-available:before {
               font-family: fontawesome;
               content: "\f00d";
               color: #fff;
            }

            .orange {
               background: #ff9f1a;
            }

            .green {
               background: #85ad00;
            }

            .blue {
               background: #0076ad;
            }

            .tooltip-inner {
               padding: 1.3em;
            }

            @-webkit-keyframes opacity {
               0% {
                  opacity: 0;
                  -webkit-transform: scale(3);
                  transform: scale(3);
               }

               100% {
                  opacity: 1;
                  -webkit-transform: scale(1);
                  transform: scale(1);
               }
            }

            @keyframes opacity {
               0% {
                  opacity: 0;
                  -webkit-transform: scale(3);
                  transform: scale(3);
               }

               100% {
                  opacity: 1;
                  -webkit-transform: scale(1);
                  transform: scale(1);
               }
            }
         </style>

      </head>

      <body>
         <div class="container">

            <h1 class="title" style="text-align:center;">DETAIL PRODUCT</h1>
            <h2 style="text-align:center;"><a href="../PHP/test.php"> BACK HOME </a></h2>
            <div class="container">
               <div class="card">
                  <div class="container-fliud">
                     <div class="wrapper row">
                        <div class="preview col-md-6">

                           <div class="preview-pic tab-content">
                              <img src="../Image/<?php echo $row['image']; ?>" width="100px" ; height="300px" ;>
                           </div>
                        </div>
                        <div class="details col-md-6">
                           <h3 class="product-title">
                              <p class="name"><?php echo $row['name']; ?></p>
                           </h3>
                           <div class="rating">
                              <div class="stars">
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star"></span>
                                 <span class="fa fa-star"></span>
                              </div>
                              <span class="review-no">41 reviews</span>
                           </div>
                           <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                           <p><?php echo $row['price']; ?></p>
                           <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                           <div class="action">
                              <button class="add-to-cart btn btn-default" type="button">
                                 <a href="../PHP/cart.php"> add to cart</a>
                              </button>
                              <button class="like btn btn-default" type="button">
                                 <span class="fa fa-heart"></span>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </body>

      </html>

   <?php
   }
   ?>
   </div>
</body>

</html>