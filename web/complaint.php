<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Complaint</title>
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
  padding: 10em 0;
  position: relative; 
}
  
  .container1 {
  width: 100%;

  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }
        
.container {
  width: 70%;

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
	border: 3px  solid rgba(252, 252, 252, 0.63) ;
	padding: 20px;
  background-color: white ;
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
	
	
}
    </style>
    
  </head>
  <body class="goto-here">
    <?php
    include("connection.php");
 
    session_start();
   
    $u=$_SESSION['u'];
       
    ?>
 
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="#">Farm Assistant</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	            <li class="nav-item "><a href="goback.php" class="nav-link">Home</a></li>
                 <li class="nav-item cta cta-colored"><a href="#" class="nav-link">Complaint</a></li> 
	             <li class="nav-item"><a href="complaint_check.php" class="nav-link">My complaints</a></li>
			  
			  
			 
			 

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span></p> 
            <!-- <span>Complaint</span></p> -->
            <h1 class="mb-0 bread">Complaint</h1>
          </div>
        </div>
      </div>
    </div>


   

   
   <section class="ftco-section contact-section bg-light" style="padding-top: 0px">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 ftco-animate">
          <form action="cmplt_upload.php" method="post" class="billing-form">
            <br>
            <p style="text-align: center"><strong>WE ARE EXTREMELY SORRY FOR THE INCONVENIENCE CAUSED!</strong><br>PLEASE FILL THE COMPLAINT FORM GIVEN BELOW<br>We shall seek immediate actions upon receiving... <br><br></p>
            <div class="row align-items-end">
             <?php
                $sql= "select * from register where email='$u'";
                
                $a=mysqli_query($conn,$sql);
               

                while($row=mysqli_fetch_array($a))
                {
                ?>
		
              <div class="col-md-12">
                <div class="form-group">
                  <div class="form-group" >
                    <input type="text" class="form-control" name="name" value="<?php echo $row["name"]; ?>" placeholder=""readonly>
                </div>
                </div>
              </div>
             
              <div class="w-100"></div>
              
              <div class="w-100"></div>
              
              <div class="w-100"></div>
              <div class="col-md-12">
               
                <div class="form-group">
                  <input type="text"   class="form-control" name="email" id="email" value="<?php echo $row["email"]; ?>" placeholder=""readonly>
                 </div>

                
                           
                             
              </div>
               <div class="col-md-12">
               
                <div class="form-group">
                  <input type="text"   class="form-control" name="email" id="email" value="<?php echo $row["type"];} ?>" placeholder=""readonly>
                 </div>

                
                           
                             
              </div>
          
              <div class="w-100"></div>
                <div class="col-md-12">
          
              <div class="form-group">
               <input type="text" class="form-control" name="complaintH" placeholder="Subject of your Complaint">
             </div>
             </div>
              <div class="col-md-12">
             <div class="form-group">
       
              <textarea name="complaint" id="" cols="50" rows="10" class="form-control" placeholder="Detailed description of the Complaint" required></textarea>
           </div>
          </div>
        
      <div class="w-100"></div>
      <br> 
      
             
      </div>
      <div class="form-group" style="padding-left: 8em;">
        <input type="submit" value="SEND COMPLAINT" class="btn btn-primary py-3 px-5">
      </div>
      
          </form><!-- END -->
        </div>
        
      </div>
    </div>
  </section> 

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="ftco-footer ftco-section">
      <div class="container1">
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