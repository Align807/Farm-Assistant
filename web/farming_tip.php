<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Farming Tip</title>
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
    <link rel="stylesheet" href="css/style1.css">
    <style>
        p{padding-top: 20px;}
  .wrap-about .heading-section-bold h2 {
    font-size: 40px;
    font-weight: 600;
    color: #020202; }
    .wrap-about .heading-section-bold h3 {
    font-size: 40px;
    font-weight: 600;
    color: #fcfcfc; 
    text-align: center;}
    .wrap-about {
  position: relative; }
  @media (min-width: 992px) {
    .wrap-aboutaa {
      padding-left: 100em; } }
  @media (min-width: 768px) {
    .wrap-aboutaa {
      padding-left: 45em; } }
     
      .img-fluid {
  width: 1000px;
  height: 5000px;
  padding-left: 10em;
   }
   @media (max-width:768px){

h3.icon-subheading {
  font-size: 25px;
}
.row1 {
  margin-right: 0;
  margin-left: 10px;
}
.icon-box {
  margin: 0;
}
}
    </style>
  </head>
  <body class="goto-here">
  <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages : 'en,ml,mr,hi,ta,te', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <?php
      include('connection.php');
      session_start();
      $id= $_GET['id'];
     
                $a="SELECT * FROM farming_tip where id=$id";
	            $sql=mysqli_query($conn,$a);
                while($row=mysqli_fetch_array($sql))
                {
      ?>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="#">Farm Assistant</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      
	    </div>
	  </nav>
      <hr>
    <!-- END nav -->
      <div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<!-- <span class="subheading">Featured Products</span> -->
                <h2 class="mb-4" style="padding-top: 30px; "><?php echo $row["heading"]; ?></h2>
            
          </div>
        </div>   		
		</div>
    <div class="hero-wrap hero-bread" style="background-image: url('<?php echo $row["image"]; ?>'); height: 400px;">
      
    </div>
      <br>
       <class class="block-21 mb-6 d-flex">
         
          <div class="text">
            
            <div class="meta">
                
              <div style="font-size: medium; padding-left: 50px;"><a href="#"><span class="icon-calendar"></span>&nbsp;&nbsp; <?php echo $row["date"]; ?></a></div>
              
            </div>
          </div>
        </class>
      <br>
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
       
				<div class="row">
          
					<class class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" >
						<!-- <a href="https://www.youtube.com/embed/D06y-i4Pvf4" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
            </a> -->
            <section class="ftco-section ftco-degree-bg" style="padding-bottom: 0px; padding-top: 0px;">
              <div class="container">
                <div class="row1">
                 
                   
                  <iframe width="500" height="350"
                  src="https://www.youtube.com/embed/<?php 
                  echo $row["url"]; ?>">
                  </iframe>    
                    
                    
             
                  
          
                </div>
              </div>
              
            </section> <!-- .section -->
           
					</class>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate" style="padding-bottom: 0px">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4" style="padding-top: 0px"><?php echo $row["heading"]; ?></h2>
	            </div>
            </div>
            
	          <div class="pb-md-5">
	          	<p><?php echo $row["description"]; ?></p>
							<!-- <p><a href="shop.html" class="btn btn-primary">Shop now</a></p> -->
						</div>
					</div>
				</div>
			</div>
      <?php
                }
                  
?>	


 </section>
   <!-- .section -->
 
    
		
  
    <footer class="ftco-footer ftco-section">
      <div class="container">
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

<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 Farm Assistant. All Rights Reserved | Design by A3F creations </p>
</div>	
<!--copy rights end here-->
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
    
  </body>
</html>