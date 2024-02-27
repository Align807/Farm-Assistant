<!DOCTYPE html>
<html lang="en">
  <head>
       
   <?php 
        $type=$_GET['type'];
    ?>
    <title>Admin: <?php echo $type; ?> Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="icon" type="image/png" href="images/icons/logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      .ftco-section {
  padding: 5em 0;
  position: relative; 
}


<?php
   include("connection.php");
 
     session_start();
   
     $u=$_SESSION['u'];
       
    ?>

element.style {
}
.ftco-navbar-light.scrolled .nav-item.cta > a {
    color: #fff !important;
    background: rgb(16, 118, 202);
    border: none !important;
}


.ftco-navbar-light {
    background: #007ee5 !important;
    z-index: 3;
    padding: 0;
}

.ftco-navbar-light .navbar-brand:hover, .ftco-navbar-light .navbar-brand:focus {
    color: deepskyblue;
}

/* @media (max-width: 991.98px) */
.ftco-navbar-light .navbar-nav > .nav-item.cta > a {
    color: #fff;
    background: darkblue;
}

a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    color:rgb(16, 118, 202);
    
}
a1:hover{
    text-decoration: none;
    /* color: rgb(16, 118, 202); */
    background-color: royalblue;
}
  
.a1:focus {
    text-decoration: none;
    /* color: rgb(16, 118, 202); */
    background-color: royalblue;
}  
/* element.style {
} */
.mouse-icon {
    width: 60px;
    height: 60px;
    border: 1px solid rgba(255, 255, 255, 0.7);
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
    background: rgb(16, 118, 202) ;
    cursor: pointer;
    position: relative;
    text-align: center;
    margin: 0 auto;
    display: block;
}

 a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    color: rgb(16, 118, 202) ;
}
 
/* element.style {
} */
.ftco-navbar-light .navbar-brand {
    color: white;
}
  .container {
  /* width: 70%; */
  
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }

  .billing-form .form-control {
  font-weight: 300;
  border: transparent !important;
  border: 1px solid rgba(0, 0, 0, 0.1) !important;
  height: 58px !important;
  padding-left: 15px;
  padding-right: 15px;
  background: transparent !important;
  color: rgb(0, 0, 0) !important;
  font-size: 14px;
  border-radius: 0px;
  -webkit-box-shadow: none !important;
  box-shadow: none !important; }
  .billing-heading {
  font-size: 24px; 
  
}
form{
	border: 6px  solid rgba(252, 252, 252, 0.63) ;
	padding: 20px;
  background-color: white ;
}

/* .categories ul li{
  transform: scaleY(0);
  transform-origin: bottom;
  transition: transform 0.5s; 
}
.categories ul  li:hover div {
  background-color: aqua;
  transform: scaleY(1);
  transform-origin: top;
  transition: transform 0.5s; 
} */
.sidebar-box {
    margin-bottom: 30px;
    padding: 20px;
    font-size: 20px;
    width: 100%;
    background: #ffffff;
}

.table tbody tr td.product-remove a:hover {
    border: 1px solid orangered;
    background: red;
}

.btn.btn-black:hover {
    background: deepskyblue;
    border: 1px solid blue;
    color: #fff;
}

#profile-pic {
		border: 50px;
  border: 1px solid #777676ab;
  float: left;
  margin-right: 10px;
  /* If you want to crop the image to a certain size, use something like this */
  object-fit: cover;
  width: 170px;
  height: 170px;
}
.w3-main {
    width: 30%;
    margin: 0 auto;
}
.form-w3l {
    text-align: center;
	
/* .btn.btn-black:hover {
    background: royalblue;
    border: 1px solid darkblue;
    color: #fff;
} */

/* .row {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; 
} */

}
.table .thead-primary {
    background: midnightblue;
}
    </style>
    
  </head>
  <body class="goto-here">
    
 


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand"  href="#">Farm Assistant</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>        
	    </div>
	  </nav>
    <!-- END nav -->
  
    
    <div class="hero-wrap hero-bread" style="background-image: url('images/progress.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="admin/admin-main-page.html">ADMIN</a></span></p> 
            <!-- <span>Complaint</span></p> -->
            <h1 class="mb-0 bread"><?php echo $type; ?> Table</h1>
          </div>
        </div>
      </div>
    </div>


   

 <br>
			
				<!-- <div class="row"style="padding-left: 250px"> -->
        <div class="container">
    			<div class="col-md-30 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>Image</th>
						        <th>Name</th>
						        <th>Email</th>
						        <th>Phone number</th>
						        
						      </tr>
                </thead>
            
						    <tbody>
                      
                <?php
             
                $sql= "SELECT * FROM register WHERE type= '$type'";
                
                $a=mysqli_query($conn,$sql);

                while($row=mysqli_fetch_array($a))
                {
                  
                 
                
                  
                                    
                
                ?>
						      <tr class="text-center">
                    
                      <td class="image-prod"><div class="img" style="background-image:url(<?php echo $row["image"]; ?>);"></div></td>
						        
                                  <td class="price"><?php echo $row["name"]; ?></td>
                                    <td class="price"><?php echo $row["email"]; ?></td>
                                    <td class="price"><?php echo $row["number"]; ?></td>
                                   
                  
                  </tr>

                  <?php
                             }
                              ?>
              
                 
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			<br><br><hr>
    <footer class="ftco-footer ftco-section">
    
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
           <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Farm Assistant</h2>
              <p>An eCommerce and an Ultimate Farming Assistant website for farmers, customers as well as wholesalers.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Stans Building, Kochi, Eranakulam</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 9876543210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@farmassistant.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        
      </div>
    </footer>
    
  

 <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
	


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>