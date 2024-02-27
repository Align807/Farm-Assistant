<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Crop Data View| Admin</title>
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
  </head>
<style>
    .product-category li a.active {
    background: darkblue;
    color: #fff;
}
   .block-27 ul li.active a, .block-27 ul li.active span {
    background: darkblue;
    color: #fff;
    border: 1px solid transparent;
}
    .product-category li a {
    color: darkblue;
    padding: 5px 20px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
}
.ftco-navbar-light {
  background: #007ee5 !important;
  z-index: 3;
  padding: 0; }
  .ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
    font-size: 11px;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    padding-left: 20px;
    padding-right: 20px;
    font-weight: 400;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 2px;
    opacity: 1 !important; }
    
  .ftco-navbar-light .navbar-brand {
    color: lightblue;
}
    
.ftco-navbar-light.scrolled .nav-item.cta > a {
    color: #fff !important;
    background: rgb(16, 118, 202);
    border: none !important;
}
    .mouse-icon {
  width: 60px;
  height: 60px;
  border: 1px solid rgba(255, 255, 255, 0.7);
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  background: #063f6e;
  cursor: pointer;
  position: relative;
  text-align: center;
  margin: 0 auto;
  display: block; }
  a.hover {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    color: rgb(16, 118, 202) ;
}
        
</style>
  <body class="goto-here">
	<?php
      include('connection.php');
      session_start();
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	       <a class="navbar-brand" href="#">Farm Assistant</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
           
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
                 
	         
	         <li class="nav-item cta cta-colored"><a href="#" class="nav-link">Home</a></li>
         	
			 
			 <li class="nav-item"><a href="crop-data-up.html" class="nav-link">Upload Crop Data</a></li>
          
           			      
	        </ul>
	      </div>
	    </div>
	  </nav>
       <div class="hero-wrap hero-bread" style="background-image: url('images/progress.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span></p>
            <h1 class="mb-0 bread">Crop Data</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- END nav -->


    <section class="ftco-section">
    	<div class="container">
    	<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="#" class="active">All</a></li>
    					<li><a href="#">Vegetables</a></li>
    					<li><a href="#">Fruits</a></li>
    					<li><a href="#">Spices</a></li>
    					<li><a href="#">Dried</a></li>
    				</ul>
    			</div>
    		</div>
                     
    		<div class="row">
         <?php
     $a="SELECT * FROM crop_data";
	            $sql=mysqli_query($conn,$a);
                while($row=mysqli_fetch_array($sql))
                {
      ?>	
    			<div class="col-md-6 col-lg-3 ftco-animate">
        
    				<div class="product">
     
    					<a href="crop-data-update.php?id=<?php echo $row['c_id']; ?>" class="img-prod"><img class="img-fluid" src="<?php echo $row["image"]; ?>" alt="Colorlib Template">
    						
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="crop-data-update.php?id=<?php echo $row['c_id']; ?>"><b><?php echo $row["c_name"]; ?></b> </a></h3>
    					
                         
    					</div>
                     </div>
                 	</div>
    			    <?php
                }
                ?>
    		</div>
          
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>

    
         <!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 Farm Assistant. All Rights Reserved | Design by A3F creations </p>
</div>	
<!--copy rights end here
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
    
  </body>
</html>